<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>HireMatch</title>
    <link  rel="stylesheet" href="../css/bootstrap.css" >
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/framework.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <style>
    #button{
    background-color: rgb(120, 69, 168);
    border-color: rgb(120, 69, 168);
    }
 
   
    .container {
    display: flex;
    justify-content: center; /* centrer horizontalement */
    align-items: center; /* centrer verticalement */
    height: 70px; /* définir la hauteur de la page */
    }

     
    .liggg{display: inline-block;
    }
     
    h1{
    margin-top: 100px;
    margin: 60px ; 
    color:rgb(7, 7, 125);
    font-family: Georgia, serif;
    font-size: xx-large;}

    .divchoix1{ background-color:white;
     height: 480px;
     }


    p{font-size: 40px;
    text-align: center;
    padding-top: 140px;}



    body{
    overflow-x: hidden;
     
    }
  
   .cercledeli{
    list-style-type: circle;
    }
    footer{background-color: #f5f5f5;
    height: 160px;
    box-shadow: 0px -5px 5px rgba(190, 188, 188, 0.3);
    }
    .btn1{
      transition: all 0.3s ease-in-out;
      
   }
   .btn1:hover{
    
     transform: scale(1.2);
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
   <div class="divchoix1">
    <div class="divchoix">
    
    <p><strong>Inscrivez-vous comme étant candidat ou recruteur?</strong></p>
  <div class="container">  
    <a class="nav-link" href="signinrec.php"> <button type="button" id="button"  href="signinrec.html" class="btn btn-dark btn-lg btn1" style="color : rgb(245, 245, 245);  font-family: Georgia, serif; padding: 15px; border-radius: 30px; margin-right: 17px; width: 300px;"><strong>Recruteur</strong></button></a>
    <a class="nav-link" href="signincandid.php"> <button type="button" href="signincandid.html"  id="button" class="btn btn-dark btn-lg btn1" style="color : rgb(245, 245, 245);  font-family: Georgia, serif;padding: 15px; border-radius: 30px; margin-left: 17px; width: 300px;"><strong>Candidat </strong></button></a>

</div></div>
</div>






   
 </body>
 </html>