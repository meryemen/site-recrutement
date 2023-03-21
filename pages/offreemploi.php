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
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/framework.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <title>Dashboard</title>
    <style>
            #button{
        background-color: rgb(120, 69, 168);
        border-color: rgb(120, 69, 168);
        margin-left: 20px;
        }
        img{
        width : 170px;
        }
        .card{
            width : 1100px;
            margin : 40px
        
        }
        a{
            text-decoration : none;
            margin-right : 0;
        }
    </style>
</head>
    <body>
        <div class="page d-flex">
            <div class="sidebar bg-white p-20 p-relative">
                <a href="index.php"><img src="images/logo.png" alt="logo" class="p-relative" width="170px"></a>
            <ul>
            <li>
                 <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="offreemploi.php">
                            <i class="fa-regular fa-chart-bar fa-fw"></i>
                            <span>Offres d'emploi</span>
                 </a>
            </li>
                <?php /*Verifier si l'utilisateur est connecter*/ if(!isset($_SESSION['email'])) {echo <<<HTML
                   <li>
                    <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settingscand.php">
                        <i class="fa-solid fa-gear"></i>
                        <span>Paramètres</span>
                    </a>
                   </li>
                   <li>
                 <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="connexion.php">
                       <i class="fa-solid fa-user"></i>
                       <span>Profile</span>
                 </a>
                 </li>
                HTML;
               } elseif($type_utilisateur === 'candidat') { 
                 echo <<<HTML
                   <li>
                    <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="settingscand.php">
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
                        if ($type_utilisateur === 'candidat') {
                            echo '<h7>' . $nom . ' ' . $prenom . '</h7><img src="../pictures/anonym.jpg" alt="">';
                        } else {
                            // Afficher les informations pour les autres types d'utilisateurs
                        }
                    }
                ?>
                </div>
            </div>
            <h1 class="p-relative">Offres d'emploi</h1>
            <div class="card bg-light ">
            <div class="card-header">
            RH: Emily Rose
            </div>
            <div class="card-body">
                <h5 class="card-title">
                Titre du poste :Assistant administratif </h5>
                <p class="card-text">Nous sommes à la recherche d'un assistant administratif pour rejoindre notre équipe. Le candidat retenu sera chargé de fournir un soutien administratif à l'équipe en place et devra être organisé, fiable et capable de travailler de manière autonome.
                <ol>
                Responsabilités :
                <li>Traiter les demandes de renseignements des clients et fournir un service clientèle de qualité</li>
                <li>Saisir des données dans des logiciels de gestion et préparer des rapports sur les résultats</li>

                Exigences :
                <li>Diplôme d'études collégiales en administration ou dans une discipline connexe</li>
                <li>Expérience antérieure en soutien administratif ou en service à la clientèle</li>
                </ol></p>
                <?php
                if(isset($_SESSION['email'])) {
                // l'utilisateur est connecté, afficher le bouton "Postuler"
                echo '<a href="postuler.php" class="btn btn-primary" id="button">Postuler</a>';
                } else {
                // l'utilisateur n'est pas connecté, afficher le bouton "Se connecter" puis "Postuler"
                echo '<a href="connexion.php" class="btn btn-primary" id="button">Postuler</a> ';
                }
                ?>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
      </div>
    </div>
</body>
</html>