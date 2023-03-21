<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app_recrutement";

    // Connexion à la base de données MySQL
    try {
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Add this line to enable error reporting
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    session_start();
    if(isset($_SESSION['email'])){ // Check if the session variable is set before accessing it
        $email = $_SESSION['email'];

        // Récupération de l'id du recruteur à partir de la table recruteur
        $req_recruteur = $bdd->prepare('SELECT id_recruteur FROM recruteurs WHERE email = :email');
        $req_recruteur->execute(array('email' => $email));
        $id_recruteur = $req_recruteur->fetch(PDO::FETCH_ASSOC)['id_recruteur'];

        $nom_entreprise = $_POST['entreprise'];
        $lieu=$_POST['lieu'];
        $titre_poste = $_POST['titre_post'];
        $description = $_POST['descriptionn'];
        $responsabilite =$_POST['responsabilite'];
        $exigences = $_POST['exigences'];

        $req = $bdd->prepare('INSERT INTO offres_emploi (id_recruteur, nom_entreprise, lieu, titre_poste, descriptionn, Responsabilité	, exigences) 
            VALUES (:id_recruteur, :nom_entreprise,:lieu, :titre_poste, :descriptionn, :responsabilite, :exigences)');

        // Exécution de la requête SQL avec les valeurs des champs du formulaire
        if ($req->execute(array(
            'id_recruteur' => $id_recruteur,
            'nom_entreprise' => $nom_entreprise, // Use the variable instead of accessing $_POST directly
            'lieu' => $lieu,
            'titre_poste' => $titre_poste, 
            'descriptionn' => $description, 
            'responsabilite' => $responsabilite,
            'exigences' => $exigences
        ))) {
            // Stocker les données en tant que cookies
            setcookie('id_recruteur', $id_recruteur, time() + (86400 * 30), "/");
            setcookie('entreprise', $_POST['entreprise'], time() + (86400 * 30), "/");
            setcookie('lieu', $_POST['lieu'], time() + (86400 * 30), "/");
            setcookie('titre_post', $_POST['titre_post'], time() + (86400 * 30), "/");
            setcookie('descriptionn', $_POST['descriptionn'], time() + (86400 * 30), "/");
            setcookie('responsabilite', $_POST['responsabilite'], time() + (86400 * 30), "/");
            setcookie('exigences', $_POST['exigences'], time() + (86400 * 30), "/");

            header('Location:../pages/dashboardrec.php' );
        } else {
            echo "Erreur";
        }
    }
}
?>
