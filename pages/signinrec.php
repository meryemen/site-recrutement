<?php 


$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "app_recrutement";

// Connexion à la base de données MySQL
try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$base", $utilisateur, $motdepasse);
    // Configuration de PDO pour qu'il lève des exceptions en cas d'erreur
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Vérification de l'existence et de la validité des champs du formulaire
if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $erreur ='L\'adresse email est invalide !';
} elseif (strlen($_POST['motdepasse']) < 6) {
    $erreur = 'Le mot de passe doit contenir au moins 6 caractères !';
} elseif (!isset($_POST['nom']) || !isset($_POST['prenom'])) {
    $erreur = 'Le nom et le prénom sont obligatoires !';
} elseif (!isset($_POST['ville']) || !isset($_POST['pays'])) {
    $erreur = 'La ville et le pays sont obligatoires !';
}elseif (!isset($_POST['nom_entreprise']) ) {
    $erreur = 'Le nom de l\'entreprise est obligatoires !';
}elseif (!isset($_POST['tele']) || !preg_match("/^[0-9]{10}$/", $_POST['tele'])) {
    $erreur = 'Le numéro de téléphone est invalide (format attendu : 10 chiffres) !';
} elseif (!isset($_POST['sexe']) || ($_POST['sexe'] !== 'Homme' && $_POST['sexe'] !== 'Femme')) {
    $erreur= 'Le sexe doit être spécifié (M ou F) !';
} else {
    // Préparation de la requête SQL
    $req = $bdd->prepare('INSERT INTO recruteurs (email, mot_de_passe, nom, prenom, ville, pays, telephone, sexe, nom_entreprise) 
                           VALUES (:email, :mot_de_passe, :nom, :prenom, :ville, :pays, :telephone, :sexe, :nom_entreprise)');

    // Exécution de la requête SQL avec les valeurs des champs du formulaire
    if($req->execute(array(
        'email' => $_POST['email'], 
        'mot_de_passe' => $_POST['motdepasse'],
        'nom' => $_POST['nom'], 
        'prenom' => $_POST['prenom'],
        'ville' => $_POST['ville'],
        'pays' => $_POST['pays'],
        'telephone' => $_POST['tele'],
        'sexe' => $_POST['sexe'],
        'nom_entreprise' => $_POST['nom_entreprise']
    ))){
        session_start();
         // Récupération du type d'utilisateur de la base de données
    $req_type_utilisateur = $bdd->prepare('SELECT type_utilisateur FROM recruteurs WHERE email = :email');
    $req_type_utilisateur->execute(array('email' => $_POST['email']));
    $resultat_req_type_utilisateur = $req_type_utilisateur->fetch(PDO::FETCH_ASSOC);

        $_SESSION['email']=$_POST['email'];
        $_SESSION['nom']=$_POST['nom'];
        $_SESSION['prenom']=$_POST['prenom'];
        $_SESSION['ville']=$_POST['ville'];
        $_SESSION['pays']=$_POST['pays'];
        $_SESSION['telephone']=$_POST['tele'];
        $_SESSION['sexe']=$_POST['sexe'];
        $_SESSION['nom_entreprise']=$_POST['nom_entreprise'];
        $_SESSION['type_utilisateur']=$resultat_req_type_utilisateur['type_utilisateur'];

        
    header("Location: ../pages/dashboardrec.php");
    
    }else{
        echo "Erreur : l'insertion dans la base de données a échoué !";
    
    };
    
}
}
?>


<!DOCTYPE html>
<html lang="en">

<body>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMatch</title>
    <link  rel="stylesheet" href="../css/bootstrap.css" >
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/framework.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="index.js"></script>
 <style>
       #button{
      background-color: rgb(120, 69, 168);
      border-color: rgb(120, 69, 168);
     }
 </style>
 </head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary " >
        <div class="container-fluid shadow " style="border-radius: 20px;">
          <a class="navbar-brand" href="index.php">
            <img src="../pictures/logo.png" width="170px" height="50px" style="margin-left: 20px; margin-bottom: 5px;">
          </a>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"><button type="button"  class="btn btn-outline-dark">Acceuil</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><button type="button"  class="btn  btn-outline-dark">Infos</button></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="connexion.php"><button type="button"  class="btn  btn-outline-dark">S'identifier</button></a>
            </li>
            <div class="vr"></div>
            <li class="nav-item">
              <a class="nav-link" href="recrut.php"><button type="button" id="button" class="btn btn-secondary">S'inscrire</button></a>
            </li>
          </ul>
        </div>
      </nav>
      
    <section class="vh-100" style="background-color: #ffffff; background-size:contain;">
        <div class="container  py-xxl-1 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card shadow-lg" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="../pictures/ll.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; margin-top: 200px; height: 500px; width: 900px;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="" method="post">
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0" style="color: rgb(30, 1, 84);">S'inscrire</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: gray; text-size-adjust: 20px; " style="color: rgb(54, 19, 120);">Espace Recruteur. </h5>
                        <?php if (isset($erreur)): ?>
                          <div class="alert alert-danger"><?php echo $erreur; ?></div>
                        <?php endif; ?>
                        <div class="row">
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <label class="form-label" for="nom" style="color: rgb(54, 19, 120);"><strong>Nom :</strong></label>
                              <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom de famille" />
                            </div>
                          </div>
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <label class="form-label" for="prenom" style="color: rgb(54, 19, 120);"><strong>Prenom :</strong></label>
                              <input type="text" id="prenom" name="prenom" class="form-control"  placeholder="Prenom"/>
                            </div>
                          </div>
                        </div>
                        <div class="form-outline mb-4" >
                            <label class="form-label" for="email" style="color: rgb(54, 19, 120);"><strong>Email :</strong></label>
                          <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="xyz@example.com" />
                          
                        </div>
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="motdepasse"style="color: rgb(54, 19, 120);"><strong>Mot de passe :</strong></label>
                          <input type="password" id="motdepasse" name="motdepasse" class="form-control form-control-lg" />
                          <input type="checkbox" id="motdepasse" class="form-check-input" onclick="afficherMotDePasse()"> Afficher le mot de passe
                          
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="motdepasseconf" style="color: rgb(54, 19, 120);"> <strong>Confirmation de mot de passe :</strong></label>
                            <input type="password" id="motdepasseconf"  class="form-control form-control-lg" />
                            
                          </div>
                          <div class="form-outline mb-4">
                            <label class="form-label" for="tele" style="color: rgb(54, 19, 120);"><strong>N° Téléphone :</strong></label>
                            <input type="tel" id="tele" name="tele" class="form-control form-control-lg" />
                            
                          </div>
                      
                          <div class="row">
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <label class="form-label" for="pays" style="color: rgb(54, 19, 120);"><strong>Pays :</strong></label>
                                <input type="text" id="pays" name="pays" class="form-control" style />
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <label class="form-label" for="ville" style="color: rgb(54, 19, 120);"><strong>Ville :</strong></label>
                                <input type="text" id="ville" name="ville" class="form-control" />
                              </div>
                            </div>
                          </div>
                          <div class="form-outline mb-4">
                            <label class="form-label" for="tele" style="color: rgb(54, 19, 120);"> <strong> Nom de l'entreprise : </strong></label>
                            <input type="tel" id="nom_entreprise" name="nom_entreprise" class="form-control form-control-lg" />
                            
                          </div>
                          <div class="form-outline mb-4">
                            <label class="form-label" for="sexe" style="color: rgb(54, 19, 120);"><strong>Sexe :</strong></label> <br>
                            <input type="radio" name="sexe" id="sexe1" value="Homme">Homme
                            <input type="radio" name="sexe" id="sexe2" style="margin-left: 20px;"  value="Femme">Femme


                          </div>


                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" id="button" type="submit" name="submit">S'inscrire</button>
                        </div>
                        <h6 style="text-decoration: rgb(87, 81, 81);">Déjà inscrit(e)? </h6> 
                        
                        <a href="connexion.php">S'identifier</a>      
                      </form>
                          
             



                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

         
        </div>
      </section>

      
     
</body>
</html>
