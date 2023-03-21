
<?php
// Démarrer la session
session_start();
$nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$prenom = isset($_SESSION['prenom']) ? $_SESSION['prenom'] : '';
$type_utilisateur = isset($_SESSION['type_utilisateur']) ? $_SESSION['type_utilisateur'] : '';
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
    <style>
   
    </style>
</head>
<body>
    <div class="page d-flex">
        <div class="sidebar bg-white p-20 p-relative">
        <a href="index.php">  <img src="images/logo.png" alt="logo" class="p-relative" width="170px"></a>
            <ul><li><a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="dashboardrec.php">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span>Tableau de Bord</span></a> 
                        <?php if(!isset($_SESSION['email']) ) { echo <<<HTML
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settingsrec.php">
                          <i class="fa-solid fa-gear"></i>
                          <span>Paramètres</span>
                        </a> 
                    </li>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="connexion.php">
                          <i class="fa-solid fa-user"></i>
                          <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="deposeroffre.php">
                          <i class="fa-solid fa-plus"></i>
                          <span>Ajouter des Offres</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="gerer_candidat.php">
                          <i class="fa-solid fa-list-check"></i>
                          <span>Gérer les Candidatures</span>
                        </a>
                    </li>
                  HTML;
                  } elseif($_SESSION['type_utilisateur']==='recruteur') { 
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
            <h1 class="p-relative">Paramètres</h1>
            <div class="settings-page m-20 ">
                <div class="p-20 bg-white rad-10">
                    <h2 class="mt-0 mb-10">Contrôle du Site</h2>
                    <p class="mt-0 mb-20 c-grey fs-15">Contrôler le Site Web en cas de Maintenance</p>
                    <div class="mb-15 between-flex">
                        <div>
                            <span>Contrôle du Site Web</span>
                            <p class="c-grey mt-5 mb-0 fs-13">Ouvrir/fermer le site Web et saisir la raison</p>
                        </div>
                        <div>
                           <label>
                                <input type="checkbox" class="toggle-checkbox" checked>
                                <div class="toggle-switch"></div>
                           </label> 
                        </div>
                    </div>
                    <textarea class="close-message p-10 rad-6 d-block w-full" placeholder="Pouquoi tu veux fermer le Site?"></textarea>
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