<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMatch</title>
    <link rel="shortcut icon" href="pictures/img1.jpg" type="image/x-icon">
    <link  rel="stylesheet" href="../css/bootstrap.css" >
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/framework.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script >
      window.addEventListener("scroll", function(){
        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky", window.scroll);
      });
    </script>
    <style>
    
    .navbar {
     
      top: 0;
      width: 100%;
      
    }


     #button{
      background-color: rgb(120, 69, 168);
      border-color: rgb(120, 69, 168);
      
     }

   
     h1{
      margin-top: 100px;
      margin: 40px ; 
      color:rgb(7, 7, 125);
      font-family: Georgia, serif;
      font-size: xx-large;
    }
   #img1{
    margin-bottom: 20px;
   }
  
   #action{
    background: linear-gradient(to bottom, #ffffff, #4c04c7);
    border-color :  white;

   }
   .card{
      transition: all 0.3s ease-in-out;
      
   }
   .card:hover:nth-child(1){
    
     transform: scale(1.1);
     box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);

   }
  
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary " >
    <div class="container-fluid shadow " style="border-radius: 20px;">
      <a class="navbar-brand" href="index.php">
        <img src="../pictures/logo.png" width="170px" height="45px" style="margin-left: 20px; margin-bottom: 5px;">
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
  <div class="container px-4 px-lg-5">
    
    <div class="row gx-5 gx-lg-6 align-items-center my-5">
        <div class="col-lg-5"><img class="img-fluid rounded mb-4 mb-lg-0" src="../pictures/img1.jpg" alt="..." /></div>
        <div class="col-lg-7">
            <h1 class="font-weight-light" style="margin-left: 90px; "> <strong> Bienvenue chez HireMatch!</strong></h1>
          <p>  <em>Notre plateforme est conçue pour vous aider à trouver les meilleures opportunités d'emploi et les meilleurs talents pour votre entreprise. Que vous soyez à la recherche d'un emploi passionnant ou que vous cherchiez à recruter les meilleurs candidats pour votre entreprise, vous êtes au bon endroit!</em></p>
         <a href="offreemploi.php"><button type="button" class="btn btn-dark btn-lg" style="color : rgb(245, 245, 245); padding: 15px; border-radius: 30px; margin-left: 150px; " id="bouton"><strong>Visitez les offres du moment ! </strong></button></div></a>
    </div>
  
    <div class="card text-white bg my-5 py-4 text-center" id="action" >
        <div class="card-body"><p class="text-white m-0"><strong> Rejoignez notre plateforme de recrutement en ligne et découvrez des offres d'emploi exclusives pour votre profil.</strong></p></div>
    </div>
   
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
              <img src="../pictures/card1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Trouvez les meilleurs candidats pour votre entreprise</h2>
                    <p class="card-text">Nous sommes là pour vous aider à trouver les candidats les plus qualifiés pour vos postes vacants.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
              <img src="../pictures/card2.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h2 class="card-title">Processus de recrutement rapide et efficace</h2>
                    <p class="card-text"> Nous nous engageons à vous fournir un processus de recrutement facile, rapide et efficace pour vous aider à trouver le meilleur talent pour votre entreprise.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
              <img src="../pictures/card3.jpg" class="card-img-top" alt="...">

                <div class="card-body">
                    <h2 class="card-title">Découvrez des opportunités de carrière exclusives</h2>
                    <p class="card-text">Vous êtes plus qu'un simple CV. Nous sommes là pour vous aider à trouver un travail qui correspond à vos compétences et à vos aspirations.</p>
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