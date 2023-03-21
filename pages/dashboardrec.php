<?php
// Démarrer la session
session_start();
$nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$prenom = isset($_SESSION['prenom']) ? $_SESSION['prenom'] : '';
$type_utilisateur = isset($_SESSION['type_utilisateur']) ? $_SESSION['type_utilisateur'] : '';

$entreprise = $_COOKIE['entreprise'];
$lieu = $_COOKIE['lieu'];
$titre_post = $_COOKIE['titre_post'];
$descriptionn = $_COOKIE['descriptionn'];
$responsabilite = $_COOKIE['responsabilite'];
$exigences = $_COOKIE['exigences'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/framework.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <title>Dashboard</title>
</head>
<style>
         #button{
        background-color: rgb(120, 69, 168);
        border-color: rgb(120, 69, 168);
        margin-left: 20px;
        }
        h5{
          color: purple;
        }
</style>
<body>
    <div class="page d-flex">
        <div class="sidebar bg-white p-20 p-relative">
          <a href="index.php">  <img src="images/logo.png" alt="logo" class="p-relative" width="170px"></a>
            <ul>
                <li>
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="dashboardrec.php">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span>Tableau de Bord</span>
                    </a>
                </li>

                <?php
               //Verifier si l'utilisateur est connecter 
               if(!isset($_SESSION['email']) ) {
                 header("Location:connexion.php");
            }
             elseif($_SESSION['type_utilisateur']==='recruteur') { 
              echo <<<HTML
                <li>
                     <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="settingsrec.php">
                         <i class="fa-solid fa-gear"></i>
                         <span>Paramètres</span>
                     </a>
               </li>
               <li>
                     <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="profile.php">
                             <i class="fa-solid fa-user"></i>
                             <span>Profile</span>
                     </a>
               </li>
               <li>
                     <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="deposeroffre.php">
                         <i class="fa-solid fa-plus"></i>
                         <span>Ajouter des Offres</span>
                     </a>
              </li>
             <li>
                     <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="gerer_candidat.php">
                         <i class="fa-solid fa-list-check"></i>
                         <span>Gérer les Candidatures</span>
                     </a>
             </li>
             <li>
                     <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="../controllers/logout.php">
                         <i class="fa-solid fa-right-from-bracket"></i>
                         <span>Se déconnecter</span>
                     </a>
             </li>
HTML;
            }
               ?>
               
            </ul>
        </div>
        <div class="content w-full">
            <div class="head bg-white p-15 between-flex">
                <div class="search p-relative">
                    <input class="p-10" type="search" placeholder="Tapez un mot-clé">
                </div>
                <div class="icons d-flex align-center">
                <?php
                    // Vérifier si l'utilisateur est connecté
                    if (!isset($_SESSION['email'])) {
                        echo '<a href="connexion.php"><button id="button" type="button" class="btn btn-outline-dark">S\'identifier</button></a>';
                    } else {
                        // Les coordonnées de l'utilisateur
                        

                        // Afficher les informations en fonction du type d'utilisateur
                        if ($type_utilisateur === 'recruteur') {
                            echo '<span>' . $nom . ' ' . $prenom . '</span><img src="../pictures/anonym.jpg" alt="">';
                        } else {
                            // Afficher les informations pour les autres types d'utilisateurs
                        }
                    }
                ?>
                </div>
            </div>
            <h1 class="p-relative">Tableau de Bord</h1>
            <div class="wapper d-grid gap-20">
                <div class="welcome bg-white rad-10 txt-c-mobile block-mobile m-20">
                    <div class="into p-20 d-flex space-between">
                        <div>
                            <h2 class="m-0">Welcome </h2>
                            <p class="c-grey mt-5">HireMatch</p>
                        </div>
                        <img src="../pictures/dash.jpg" alt="" class="image2" >
                    </div>
                    
                </div>
                <div class="candidats p-20 bg-white rad-10 m-20">
                    <h2  class="mt-0 mb-10">Statistiques des Candidats</h2>
                    <p class="mt-0 mb-20 c-grey fs-15">À propos des Candidatures</p>
                    <div class="d-flex txt-c gap-20 f-wrap">
                        <div class="box p-20 rad-10 fs-13 c-grey">
                            <i class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i>
                            <span class="d-block c-black fw-bold fs-25 mb-5">1500</span>
                            Total
                        </div>
                        <div class="box p-20 rad-10 fs-13 c-grey">
                            <i class="fa-regular fa-square-check fa-2x mb-10 c-green"></i>
                            <span class="d-block c-black fw-bold fs-25 mb-5">10%</span>
                            Acceptés
                        </div>
                        <div class="box p-20 rad-10 fs-13 c-grey">
                            <i class="fa-solid fa-user-xmark fa-2x mb-10 c-red"></i>
                            <span class="d-block c-black fw-bold fs-25 mb-5">90%</span>
                            Refusés
                        </div>
                    </div>
                </div>
                <div class="latest-offers p-20 bg-white rad-10 p-relative m-20">
                    <h2 class="mt-0 mb-25">Dernier Post</h2>
                    <div class="top d-flex align-center">
                        <span class="d-block mb-5 fw-bold">
                        <img src="images/pdp.jpg" alt="" class="avatar mr-10">
                        
                        <?php echo $nom," "," ",$prenom; ?>
                        </span>
                    </div>
                          <div class="post-content txt-c-mobile pt-10 pb-10 mt-10 mb-10">
                          <h5 class="card-title">
                      Entreprise: <?php echo $entreprise ?></h5>
                          <h5 class="card-title">
                      Titre du poste :<?php echo $titre_post; ?></h5>
                      <h6 class="card-title">
                      Lieu: <?php echo $lieu; ?></h6><br>
                      <p class="card-text"><?php echo $descriptionn; ?>
                      <ul>
                      Responsabilités :
                      <li><?php echo "-",$responsabilite; ?></li>
                      

                      Exigences :
                      <li><?php echo "-",$exigences; ?></li>
                      </ul></p>
                     
                          </div>
                      </div>
                  </div>
        </div>
    </div>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      
    </section>
  
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
       
        <div class="row mt-3">
         
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>HireMatch
            </h6>
            <p>
              Nous avons créé notre site de recrutement pour simplifier et optimiser le processus de recrutement, en proposant des outils de recherche d'emploi avancés et des services de gestion des candidatures pour les employeurs. Nous sommes fiers d'aider les candidats à trouver des opportunités de carrière satisfaisantes en leur fournissant des offres d'emploi pertinentes et des conseils de carrière professionnels.
            </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Lien
            </h6>
            <p>
              <a href="#!" class="text-reset">Offres</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Infos</a>
            </p>
        
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contacts</h6>
           
            <p>HireMatch@gmail.com</p>
            <p>instagram.com/HireMatch</p>
            <p>twitter.com/HireMatch</p>
  
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">HireMatch.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</body>
</html>