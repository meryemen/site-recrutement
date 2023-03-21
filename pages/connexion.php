<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app_recrutement";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }

    $email = $_POST['email'] ?? '';
    $motdepasse = $_POST['motdepasse'] ?? '';
    $type_utilisateur = $_POST['type_utilisateur'] ?? '';

    if ($type_utilisateur == 'recruteur') {
        $stmt = $conn->prepare('SELECT * FROM recruteurs WHERE email = :email');
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $recruteur = $stmt->fetch();

        if (!$recruteur) {
            $erreur = 'Cet email n\'existe pas.';
        } elseif ($recruteur['mot_de_passe'] !== $motdepasse) {
            $erreur = 'Mot de passe incorrect.';
        } else {
            $_SESSION['type_utilisateur'] = $type_utilisateur;
            $_SESSION['email'] = $email;
            $_SESSION['nom'] = $recruteur['nom'];
            $_SESSION['prenom'] = $recruteur['prenom'];
            $_SESSION['pays'] = $recruteur['pays'];
            $_SESSION['ville'] = $recruteur['ville'];
            $_SESSION['sexe'] = $recruteur['sexe'];
            $_SESSION['telephone'] = $recruteur['telephone'];
            $_SESSION['nom_entreprise'] = $recruteur['nom_entreprise'];
            header('Location: dashboardrec.php');
            exit;
        }
    } elseif ($type_utilisateur == 'candidat') {
        $stmt = $conn->prepare('SELECT * FROM candidats WHERE email = :email');
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $candidat = $stmt->fetch();

        if (!$candidat) {
            $erreur = 'Cet email n\'existe pas.';
        } elseif ($candidat['mot_de_passe'] !== $motdepasse) {
            $erreur = 'Mot de passe incorrect.';
        } else {
            $_SESSION['type_utilisateur'] = $type_utilisateur;
            $_SESSION['email'] = $email;
            $_SESSION['nom'] = $candidat['nom'];
            $_SESSION['prenom'] = $candidat['prenom'];
            $_SESSION['ville'] = $candidat['ville'];
            $_SESSION['pays'] = $candidat['pays'];
            $_SESSION['sexe'] = $candidat['sexe'];
            $_SESSION['telephone'] = $candidat['telephone'];
            $_SESSION['date_naissance'] = $candidat['date_naissance'];
            header('Location: offreemploi.php');
            exit;
        }
    } else {
        $erreur = 'Veuillez sélectionner votre type d\'utilisateur.';
    }

    $conn = null;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link  rel="stylesheet" href="../css/bootstrap.css" >
    <link href="connexion.css" rel="stylesheet">
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
            <img src="../pictures/logo.png" width="170px" height="45px"  style="margin-left: 20px; margin-bottom: 5px;">
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
      

      <section class="vh-100" style="background-color: #ffffff;">
        <div class="container py-5 h-250">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card shadow" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="../pictures/img2.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;margin-top: 90px; height:50;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form method="post">
                        
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0" >Connectez-vous</span>
                        </div>
                        <?php if (isset($erreur)): ?>
                        <div class="alert alert-danger"><?php echo $erreur; ?></div>
                    <?php endif; ?>
                       <div class="form-outline mb-4">
                          
                          <label class="form-label" for="form2Example17" style="color: rgb(30, 1, 84);"><strong>Type d'utilisateur :</strong></label>
                          <input type="text" id="form2Example17" name="type_utilisateur" class="form-control form-control-lg" placeholder="recruteur/candidat" />
                        </div>
                        <div class="form-outline mb-4">
                          
                          <label class="form-label" for="form2Example17" style="color: rgb(30, 1, 84);"><strong>Email :</strong></label>
                          <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" placeholder="xyz@example.com" />
                        </div>
      
                        <div class="form-outline mb-4">
                          <label class="form-label"  for="motdepasse" style="color: rgb(30, 1, 84);"><strong>Mot de passe :</strong></label>
                          <input type="password" id="motdepasse" name="motdepasse" class="form-control form-control-lg" />
                          <input type="checkbox" id="motdepasse" class="form-check-input" onclick="afficherMotDePasse()"> Afficher le mot de passe
                          
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" id="button" type="submit">S'identifier</button>
                        </div>
                        <h6>Vous n'avez pas de compte ?</h6>
                        <a href="recrut.php">créer un compte </a>
                        
                       
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