<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if(!isset($_SESSION['email'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: login.php");
    exit();
}

// Récupérer les valeurs de session
$email = $_SESSION['email'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$ville = $_SESSION['ville'];
$pays = $_SESSION['pays'];
$type_utilisateur=$_SESSION['type_utilisateur'];
if($type_utilisateur === 'candidat' ){
    $date_naissance = $_SESSION['date_naissance'];
}else{
    $nom_entreprise = $_SESSION['nom_entreprise'];
}
$telephone=$_SESSION['telephone'];
$sexe=$_SESSION['sexe'];
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
<body>
    <div class="page d-flex">
        <div class="sidebar bg-white p-20 p-relative">
        <a href="index.php">  <img src="images/logo.png" alt="logo" class="p-relative" width="170px"></a>
            <ul>
            <?php
                if ($type_utilisateur === 'candidat' ) {
                    echo <<<HTML
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="offreemploi.php">
                            <i class="fa-regular fa-chart-bar fa-fw"></i>
                            <span>Offres d'emploi</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settingscand.php">
                            <i class="fa-solid fa-gear"></i>
                            <span>Paramètres</span>
                        </a>
                    </li>
                    <li>
                        <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="profile.php">
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
                 <?php
                if ($type_utilisateur === 'recruteur' ) {
                    echo <<<HTML
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="dashboardrec.php">
                            <i class="fa-regular fa-chart-bar fa-fw"></i>
                            <span>Tableau de Bord</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="settingsrec.php">
                            <i class="fa-solid fa-gear"></i>
                            <span>Paramètres</span>
                        </a>
                    </li>
                    <li>
                        <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="profile.php">
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
                    </span>
                    <h7><?php echo $nom ." ".$prenom; ?></h7>
                    <img src="images/pdp.jpg" alt="">
                </div>
            </div>

            <h1 class="p-relative">Profile</h1>
            <div class="profile-page m-20">
                <div class="overview bg-white rad-10 d-flex align-center">
                       
              <?php
                if ($type_utilisateur === 'candidat' ) {
                    echo <<<HTML
                      <div class="avatar-box txt-c p-20">
                        <img class="rad-half mb-10" src="images/pdp.jpg" alt="">
                        <h5 class="m-0 p-10">$nom $prenom</h5>
                        <p>Candidat</p>
                    </div>
                    <div class="info-box">
                        <div class="box p-20 d-flex align-center">
                            <h4 class="c-grey fs-15 m-0 w-full">Informations Générales</h4>
                            <div class="fs-14">
                                <span class="c-grey">Nom Complet:</span>
                                <span> $nom $prenom</span>
                            </div>
                            <div class="fs-14">
                                <span class="c-grey">Sexe:</span>
                                <span>$sexe</span>
                            </div>
                            <div class="fs-14">
                                <span class="c-grey">Ville et Pays:</span>
                                <span> $ville , $pays </span>
                            </div>
                           
                        </div>
                        <div class="box p-20 d-flex align-center">
                            <h4 class="c-grey fs-15 m-1 w-full">Informations Personnelles </h4>
                            <div class="fs-14">
                                <span class="c-grey">Email: </span>
                                <span>$email </span>
                            </div>
                            <div class="fs-14">
                                <span class="c-grey">Téléphone: </span>
                                <span> $telephone</span>
                            </div>
                            <div class="fs-14">
                                <span class="c-grey">Date de naissance: </span>
                                <span> $date_naissance</span>
                            </div>
                        </div>
                        </div>
                    HTML;
                }
              ?>
              <?php
                if ($type_utilisateur === 'recruteur' ) {
                    echo <<<HTML
                      <div class="avatar-box txt-c p-20">
                        <img class="rad-half mb-10" src="images/pdp.jpg" alt="">
                        <h5 class="m-0 p-10">$nom $prenom</h5>
                        <p>Recruteur</p>
                    </div>
                    <div class="info-box">
                        <div class="box p-20 d-flex align-center">
                            <h4 class="c-grey fs-15 m-0 w-full">Informations Générales</h4>
                            <div class="fs-14">
                                <span class="c-grey">Nom Complet:</span>
                                <span> $nom $prenom</span>
                            </div>
                            <div class="fs-14">
                                <span class="c-grey">Sexe:</span>
                                <span>$sexe</span>
                            </div>
                            <div class="fs-14">
                                <span class="c-grey">Ville et Pays:</span>
                                <span> $ville , $pays </span>
                            </div>
                           
                        </div>
                        <div class="box p-20 d-flex align-center">
                            <h4 class="c-grey fs-15 m-0 w-full">Informations Personnelles</h4>
                            <div class="fs-14">
                                <span class="c-grey">Email:</span>
                                <span>$email</span>
                            </div>
                            <div class="fs-14">
                                <span class="c-grey">Téléphone:</span>
                                <span> $telephone</span>
                            </div>
                           
                        </div>
                        
                        <div class="box p-20 d-flex align-center">
                            <h4 class="c-grey fs-15 m-0 w-full">Informations sur l'emploi</h4>
                            <div class="fs-14">
                                <span class="c-grey">Entreprise:</span>
                                <span> $nom_entreprise</span>
                            </div>
                           
                        </div>
                        </div>
                        
                    HTML;
                }
              ?> 
                    
                </div>
            </div>
          
        </div>
    </div>
</body>
</html>