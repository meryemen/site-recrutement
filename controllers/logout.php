<?php
session_start(); // Démarrer la session

if(isset($_SESSION['email'])) {
  // Si l'utilisateur est connecté, déconnectez-le
  unset($_SESSION['email']);
  session_destroy();
  $type_utilisateur=$_SESSION['type_utilisateur'];
  if($type_utilisateur === 'candidat' ){
    header("Location: ../pages/offreemploi.php"); // Rediriger vers la page du candidat
  }else{
    header("Location: ../pages/dashboardrec.php"); // Rediriger vers la page du recruteur
  }
  
}
?>
