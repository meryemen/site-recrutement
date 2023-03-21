<?php 


$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "app_recrutement";

// Connexion à la base de données MySQL
try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$base", $utilisateur, $motdepasse);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // pour afficher les erreurs SQL
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

// Rechercher le candidat correspondant à l'email entré
$email = $_POST['email'];
$query = $bdd->prepare("SELECT id_candidat FROM candidats WHERE email = :email");
$query->bindParam(':email', $email);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

if ($result) {
    $id = $result['id_candidat'];
   // echo "Le candidat correspondant à l'email $email a l'ID $id<br>";
} else {
    //echo "Aucun candidat n'a été trouvé pour l'email $email<br>";
}

if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['adresse']))    {
    if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['prenom']) && !empty($_POST['adresse'])){
        $nom = htmlspecialchars($_POST['nom']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $email = htmlspecialchars($_POST['email']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $adresse = htmlspecialchars($_POST['adresse']);
        
        // Insertion dans la table cvs
        $insertioncvs = $bdd->prepare('INSERT INTO cvs(id_candidat, nom, prenom,email) VALUES(:id, :nom, :prenom,:email)');
        $insertioncvs->bindParam(':id', $id);
        $insertioncvs->bindParam(':nom', $nom);
        $insertioncvs->bindParam(':prenom', $prenom);
        $insertioncvs->bindParam(':email', $email);
        $insertioncvs->execute();
       // echo 'Le candidat a été ajouté avec succès !';
// recuperation de idcv

        $email = $_POST['email'];
        $query = $bdd->prepare("SELECT id_cv FROM cvs WHERE email = :email");
        $query->bindParam(':email', $email);
        $query->execute();
        $resultcv = $query->fetch(PDO::FETCH_ASSOC);
        
        if ($resultcv) {
            $idcv = $resultcv['id_cv'];
            //echo "Le idcv correspondant à l'email $email a l'ID $idcv<br>";
        } else {
            //echo "Aucun candidat n'a été trouvé pour l'email $email<br>";
        }



        //insertion dans la table contacts
        $insertioncontact = $bdd->prepare('INSERT INTO contacts(email,adresse,telephone,id_cv) VALUES(:email,:adresse,:telephone,:idc)');
        $insertioncontact->bindParam(':email', $email);
        $insertioncontact->bindParam(':adresse', $adresse);
        $insertioncontact->bindParam(':telephone', $telephone);
        $insertioncontact->bindParam(':idc', $idcv);
        $insertioncontact->execute();
       // echo 'Le cantact a été ajouté avec succès !';
        

        // insertion dans la table profil
        
        $desc = $_POST['desc'];
        $insertionprofil = $bdd->prepare('INSERT INTO profils(description,id_cv) VALUES(:desc,:idfc)');
        $insertionprofil ->bindParam(':desc', $desc);
        $insertionprofil->bindParam(':idfc',  $idcv);
        $insertionprofil ->execute();
         //echo 'Le profils a été ajouté avec succès !';

         // insertion dans la table centre d interet
         $interet = $_POST['interet'];
        $insertioncentredonetert = $bdd->prepare('INSERT INTO centres_interet(nom,id_cv) VALUES(:inetert,:idfc)');
        $insertioncentredonetert ->bindParam(':inetert',$interet);
        $insertioncentredonetert->bindParam(':idfc',  $idcv);
        $insertioncentredonetert ->execute();
        // echo 'Le entret ineteret a été ajouté avec succès !';



          // insertion dans la table  langue   
          $langue = $_POST['langue'];
          $niveaulg = $_POST['niveaulg'];
          $insertionlg = $bdd->prepare('INSERT INTO langues(nom,niveau,id_cv) VALUES(:nomm,:niv,:idfcl)');
          $insertionlg ->bindParam(':nomm',$langue);
          $insertionlg->bindParam(':niv', $niveaulg);
          $insertionlg ->bindParam(':idfcl',$idcv);
          $insertionlg ->execute();
          // echo 'La langue langue a été ajouté avec succès !';


           // insertion dans la table competences   
          $competences = $_POST['competences'];
          $niveaucmp = $_POST['niveaucmp'];
          $insertioncmtc = $bdd->prepare('INSERT INTO competences(nom,niveau,id_cv) VALUES(:nompc,:nivcmp,:idfcm)');
          $insertioncmtc ->bindParam(':nompc',$competences);
          $insertioncmtc->bindParam('nivcmp', $niveaucmp);
         $insertioncmtc ->bindParam(':idfcm',$idcv);
         $insertioncmtc ->execute();
           //echo 'La competences ineteret a été ajouté avec succès !';




           //insertion dans la table formation

             
          $formation = $_POST['formation'];
          $date_debutf = $_POST['date_debutf'];
          $date_finf = $_POST['date_finf'];
          $Pays = $_POST['Pays'];
          $Ville = $_POST['Ville'];
          $diplome = $_POST['diplome'];
          $ecole = $_POST['ecole'];
        
          $insertionformation = $bdd->prepare('INSERT INTO formations(nom,diplome,date_debut,date_fin,ecole,pays,ville,id_cv) VALUES(:nomf,:diplomef,:date_debutf,:date_finf,:ecolef,:paysf,:villef,:id_cvff)');
          $insertionformation ->bindParam(':nomf',$formation);
          $insertionformation ->bindParam(':diplomef', $diplome);
          $insertionformation  ->bindParam(':date_debutf',$date_debutf);
          $insertionformation  ->bindParam(':date_finf', $date_finf);
          $insertionformation  ->bindParam(':ecolef',$ecole);
          $insertionformation  ->bindParam(':paysf',$Pays);
          $insertionformation  ->bindParam('villef',$Ville);
          $insertionformation  ->bindParam(':id_cvff',$idcv);

          $insertionformation ->execute();
           //echo 'La formation  a été ajouté avec succès !';


                   //insertion dans la table experience


                   $experience = $_POST['experience'];
                   $date_debutE = $_POST['date_debutE'];
                   $date_finE = $_POST['date_finE'];
                   $description2 = $_POST['description2'];
                   $NomEntreprise = $_POST['NomEntreprise'];
                 



        $insertionexperiences = $bdd->prepare('INSERT INTO experiences(nom,date_debut,date_fin,description,nom_entreprise,id_cv) VALUES(:nomE,:date_debutE,:date_finE,:descriptionE,:nom_entrepriseE,:id_cvE) ');
       $insertionexperiences->bindParam(':nomE', $experience);
       $insertionexperiences->bindParam(':date_debutE', $date_debutE);
       $insertionexperiences->bindParam(':date_finE', $date_finE);
       $insertionexperiences->bindParam(':descriptionE',$description2);
       $insertionexperiences->bindParam(':nom_entrepriseE',$NomEntreprise);
       $insertionexperiences->bindParam(':id_cvE',  $idcv);
       $insertionexperiences->execute();
       // echo 'L experience a été ajouté avec succès !';










    }

}

header("Location: ../pages/offreemploi.php");
?>


