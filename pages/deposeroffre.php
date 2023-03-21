<?php
// Démarrer la session
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link  rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist (1)/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="offre.css" rel="stylesheet">
</head>


<style>
  #button{
 background-color: rgb(120, 69, 168);
 border-color: rgb(120, 69, 168);
}
.ajouter{
  margin-left: 470px;
  margin-bottom: 10px;
  background-color: rgb(120, 69, 168);
  border-color: rgb(120, 69, 168);
  width: 30%;
}
.border{
    border: 1px solid rgb(120, 69, 168);
    padding: 20px 20px 20px 20px;
    border-radius: 0.3rem;
    margin-left: 10px;
    margin-right: 10px;
    width: 660px;
}

</style>
<script>
  $(document).ready(function() {
            $('#ajouter-responsabilite').click(function() {
                var responsabilite = $('#responsabilite').val();
                var responsabiliteHtml = '<li class="list-group-item">' + 
                                  '<p>  ' + responsabilite + '</strong></p>' +
                                  '</li>';
                $('#responsabilite-ajoutes').append(responsabiliteHtml);
            });
        });
  $(document).ready(function() {
            $('#ajouter-exigence').click(function() {
                var exigence = $('#exigence').val();
                var exigenceHtml = '<li class="list-group-item">' + 
                                  '<p>  ' + exigence + '</strong></p>' +
                                  '</li>';
                $('#exigence-ajoutes').append(exigenceHtml);
            });
        });
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary " >
   <div class="container-fluid shadow " style="border-radius: 20px;">
     <a class="navbar-brand" href="index.php">
       <img src="images/logo.png" width="170px" height="45px" style="margin-left: 20px; margin-bottom: 5px;">
     </a>
     <ul class="nav justify-content-end">
       <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="index.html"><button type="button"  class="btn btn-outline-dark">Acceuil</button></a>
       </li>
       <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="#"><button type="button"  class="btn  btn-outline-dark">Infos</button></a>
       </li>
       
       <li class="nav-item">
         <a class="nav-link" href="recrut.html"><button type="button"  class="btn  btn-outline-dark">S'identifier</button></a>
       </li>
       <div class="vr"></div>
       <li class="nav-item">
         <a class="nav-link" href="#"><button type="button" id="button" class="btn btn-secondary">S'inscrire</button></a>
       </li>
     </ul>
   </div>
 </nav>
 

 <section class="vh-100" style="background-color: #fffefe; background-size:cover; height: 100px;">
  <div class="container  py-xxl-1 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col col-xl-8">
        <div class="card shadow-lg" style="border-radius: 1rem;">
          <div class="col-md-6 col-lg-5 d-none d-md-block">
          </div>
          <!-- <div class="col-md-6 col-lg-7 d-flex align-items-center"> -->
          <div class="card-body p-4 p-lg-5 text-black">
            <form action="../controllers/offre.php" method="POST">
              <div class="d-flex align-items-center mb-3 pb-1">
                  <span class="h1 fw-bold mb-0" style="color: rgb(30, 1, 84);">Déposer une offre d'emploi</span>
              </div>
              <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: gray; text-size-adjust: 20px; ">Espace Recruteur</h5>
              <div class="row g-3">
                <div class="col-md-12">
                    <label for="inputPrenom4" class="form-label"><strong>Nom de l'entreprise</strong></label>
                    <input type="text" class="form-control" id="inputPrenom4" name="entreprise" style="width: (550px);">
                </div>
                <br>
                <div class="col-md-12">
                    <label for="inputPrenom4" class="form-label"><strong>Lieu</strong></label>
                    <input type="text" class="form-control" id="inputPrenom4" name="lieu" style="width: (550px);">
                </div>
                <br>
                <div class="col-md-12">
                  <label for="inputNom4" class="form-label" placeholder="Nom"><strong> Titre du poste</strong>  </label><br>
                  <input type="text" class="form-control" id="inputNom4" name="titre_post"  style="width: (550px);">
                </div>
                <br>
                <div class="col-md-12">
                  <label for="inputAddress" class="form-label"><strong>Déscription de l'offre</strong></label><br>
                <textarea class="form-control" name="descriptionn" style="width: (550px); " ></textarea>
                </div>
                <br>
                <div class="col-md-12">
                  <label for="inputAddress" class="form-label"><strong>Responsabilités</strong></label><br>
                <textarea class="form-control" name="responsabilite" style="width: (550px); " ></textarea>
                </div>
                <br>
                <div class="col-md-12">
                  <label for="inputAddress" class="form-label"><strong>Exigences</strong></label><br>
                <textarea class="form-control" name="exigences" style="width: (550px); " ></textarea>
                </div>
                <br>
                
              
                <div >
                  <button class="btn btn-dark btn-lg btn-block" id="couleurbtn" type="submit" style="background-color: rgb(120, 69, 168); border-color: rgb(120, 69, 168) ;">Valider</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

   
 </body>
</html>
