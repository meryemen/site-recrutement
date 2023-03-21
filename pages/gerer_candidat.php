<?php
// Démarrer la session
session_start();
$nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$prenom = isset($_SESSION['prenom']) ? $_SESSION['prenom'] : '';
$type_utilisateur = isset($_SESSION['type_utilisateur']) ? $_SESSION['type_utilisateur'] : '';
$nom_entreprise = $_SESSION['nom_entreprise'];

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
        <a href="index.php">  <img src="images/logo.png" alt="logo" class="p-relative" width="170px"></a>            <ul>
                <li>
                    <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="dashboardrec.php">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span>Tableau de Bord</span>
                    </a>
                </li>
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
                    <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="gerer_candidat.php">
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
            </ul>
        </div>
        <div class="content w-full">
            <div class="head bg-white p-15 between-flex">
                <div class="search p-relative">
                    <input class="p-10" type="search" placeholder="Tapez un mot-clé">
                </div>
                <div class="icons d-flex align-center">
                    <?php
                echo "<span> $nom  $prenom </span>";
                ?>
                <img src="../pictures/anonym.jpg" alt="">
                </div>
            </div>
            <h1 class="p-relative">Gérer les Candidatures</h1>
            <table>
                <tr>
                    <th>Entreprise</th>
                    <th>Id Offre</th>
                    <th>Description</th>
                    <th>Candidat</th>
                    <th>CV</th>
                    <th colspan="2">Action</th>
                </tr>
                <tr>
                    <td >
                        <?php
                        echo  $nom_entreprise;
                        ?>
                    </td>
                    <td>1234</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat repellat distinctio illo impedit provident sint quasi architecto aspernatur minima reiciendis velit exercit</td>                    
                    <td>Meryem En-najibi</td>
                    <td>CV</td>
                    <td colspan="1"><button  class="btn  btn-outline-light"><a href="#">Accepter</a></button></td>
                    <td colspan="1"><button   class="btn  btn-outline-light"><a href="#">Refuser</a></button></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>