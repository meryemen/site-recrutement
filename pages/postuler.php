<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMatch</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="cv.css">
    <link  rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist (1)/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#ajouter-interet').click(function() {
                var interet = $('#interet').val();
                var description = $('#description').val();
                var interetHtml = '<li class="list-group-item">' + 
                                  '<p> <strong>' + interet + '</strong></p>' +
                                  '<p>Description: ' + description + '</p>' +
                                  '</li>';
                $('#interet-ajoutes').append(interetHtml);
            });
        });
        $(document).ready(function() {
            $('#ajouter-langue').click(function() {
                var langue = $('#langue').val();
                var niveauLangue = $('#niveauLangue').val();
                var langueHtml = '<li class="list-group-item">' + 
                                  '<p> <strong>' + langue + '</strong></p>' +
                                  '<p>Description: ' + niveauLangue + '</p>' +
                                  '</li>';
                $('#langue-ajoutes').append(langueHtml);
            });
        });
        $(document).ready(function() {
            $('#ajouter-competence').click(function() {
                var competence = $('#competence').val();
                var niveauCompetence = $('#niveauCompetence').val();
                var competenceHtml = '<li class="list-group-item">' + 
                                  '<p> <strong>' + competence + '</strong></p>' +
                                  '<p>Description: ' + niveauCompetence + '</p>' +
                                  '</li>';
                $('#competence-ajoutes').append(competenceHtml);
            });
        });
        $(document).ready(function() {
            $('#ajouter-formation').click(function() {
                var formation = $('#formation').val();
                var dateDebut = $('#dateDebut').val();
                var dateFin = $('#dateFin').val();
                var pays = $('#pays').val();
                var ville = $('#ville').val();
                var diplome = $('#diplome').val();
                var ecole = $('#ecole').val();
                var formationHtml = '<li class="list-group-item">' + 
                                  '<p> <strong>' + formation + '</strong></p>' +
                                  '<p>date du debut: ' + dateDebut + '</p>' +
                                  '<p>date de la fin: ' + dateFin + '</p>' +
                                  '<p>pays: ' + pays + '</p>' +
                                  '<p>ville: ' + ville + '</p>' +
                                  '<p>diplôme: ' + diplome + '</p>' +
                                  '<p>école: ' + ecole + '</p>' +
                                  '</li>';
                $('#formation-ajoutes').append(formationHtml);
            });
        });
        $(document).ready(function() {
            $('#ajouter-experience').click(function() {
                var experience = $('#experience').val();
                var nomEntreprise = $('#nomEntreprise').val();
                var dateDebut2 = $('#dateDebut2').val();
                var dateFin2 = $('#dateFin2').val();
                var description2 = $('#description2').val();
                var experienceHtml = '<li class="list-group-item">' + 
                                  '<p> <strong>' + experience + '</strong></p>' +
                                  '<p>date du debut: ' + nomEntreprise + '</p>' +
                                  '<p>date de la fin: ' + dateDebut2 + '</p>' +
                                  '<p>pays: ' + dateFin2 + '</p>' +
                                  '<p>ville: ' + description2 + '</p>' +
                                  '</li>';
                $('#experience-ajoutes').append(experienceHtml);
            });
        });

    </script>
 </head>
<body>
<style>#button{
    background-color: rgb(120, 69, 168);
    border-color: rgb(120, 69, 168);
}
.ajouter{
  margin-left: 670px;
  margin-right: 10px;
  margin-bottom: 10px;
  background-color: rgb(120, 69, 168);
  border-color: rgb(120, 69, 168);
  width: 20%;
}
#envoyer-form{
  margin-bottom: 10px;
  margin-top: 20px;
  background-color: rgb(120, 69, 168);
  border-color: rgb(120, 69, 168);
}

.border{
    border: 1px solid rgb(120, 69, 168);
    padding: 20px 20px 20px 20px;
    border-radius: 0.3rem;
    margin-left: 10px;
    margin-right: 10px;
    width: 98%;
}

.form-label{
    font-weight: bold;
    color: rgb(51, 2, 94);
}</style>





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
      
    <section class="vh-100" style="background-color: #fffefe; background-size:cover; height: 100px;">
        <div class="container  py-xxl-1 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col col-xl-10">
                    <div class="card shadow-lg" style="border-radius: 1rem;">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                </div>
                    <div class="card-body p-4 p-lg-5 text-black">
                        
                            <div class="d-flex align-items-center mb-3 pb-1">
                                <span class="h1 fw-bold mb-0" style="color: rgb(30, 1, 84);">Postuler</span>
                            </div>
                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color: gray; text-size-adjust: 20px; ">Formulaire</h5>
                            <form method="POST" action="traitpostulation.php">
                                
                                    
                                    <div class="row g-3">

                                    <div class="col-md-6">
                                            <label for="nom" class="form-label" name="nom" >Nom</label>
                                            <input type="text" class="form-control" name="nom" id="inputPrenom4" placeholder="nom">
                                        </div>

                                 
                                        <div class="col-md-6">
                                            <label for="inputPrenom4" class="form-label" name="prenom" >Prénom</label>
                                            <input type="text" class="form-control" name="prenom" id="inputPrenom4" placeholder="Prénom">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label" name="email" >Email</label>
                                            <input type="email" class="form-control" name="email"  id="inputEmail4" placeholder="Email">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputTel4" class="form-label" name="telephone" >Numéro de téléphone</label>
                                            <input type="tel" class="form-control" id="inputTel4" name="telephone"  placeholder="Numéro de téléphone">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label"    name="adresse">Addresse</label>
                                            <input type="text" class="form-control" name="adresse" id="inputAddress" placeholder="Addresse">
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputProfil" class="form-label" name="desc"   >Profil</label>
                                            <textarea class="form-control" id="inputProfil"   name="desc" rows="3" placeholder="Donnez une description de votre profil"></textarea>
                                        </div>
                                    </div>
                                  

                                    
                                    <div class="row g-3">
                                        <div class="form-group col-md-12">
                                            <label for="interet" class="form-label" name="interet"    >Intérêt</label>
                                            <input type="text" class="form-control" name="interet" id="interet" placeholder="Intérêt">
                                        </div>
                                        
                                        <!-- <div class="form-group col-md-12">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control" id="description" rows="2" placeholder="Donnez une description"></textarea>
                                        </div> -->
                                   
                                        <div class="border">
                                            <ul class="list-group" id="interet-ajoutes">
                                                <!-- Les formations ajoutées seront affichées ici -->
                                            </ul>
                                        </div>
                                       
                                            <button type="button" class="btn btn-secondary ajouter"   name="interet"   id="ajouter-interet">Ajouter Intérêt</button>
                                        
                                    </div>
                                  
                                  
                                    <div class="row g-3">                          
                                        <div class="form-group col-md-6">
                                            <label for="langue" class="form-label"  name="langue" >Langue</label>
                                            <input type="text" class="form-control"  name="langue"id="langue" placeholder="Saisir la langue">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="niveauLangue" class="form-label"   name="niveaulg" >Niveau</label>
                                            <input type="text" class="form-control" name="niveaulg" id="niveauLangue" placeholder="Votre niveau">
                                        </div>
                                    
                                        <div class="border">
                                        <ul class="list-group" id="langue-ajoutes">
                                            <!-- Les langues ajoutées seront affichées ici -->
                                        </ul>
                                        </div>
                                    
                                        <button type="button" class="btn btn-secondary ajouter" name="langue"  id="ajouter-langue">Ajouter Langue</button>
                                    </div>
                                    

                                    <div class="row g-3">
                                        <div class="form-group col-md-6">
                                            <label for="competence" class="form-label" name="competences" >Compétences</label>
                                            <input type="text" class="form-control" name="competences" id="competence" placeholder="Saisir votre compétence">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="niveauCompetence" class="form-label" name="niveaucmp">Niveau</label>
                                            <input type="text" class="form-control" name="niveaucmp" id="niveauCompetence" placeholder="Votre niveau">
                                        </div>
                                    
                                        <div class="border">
                                        <ul class="list-group" id="competence-ajoutes">
                                            <!-- Les competences ajoutées seront affichées ici -->
                                        </ul>
                                        </div>
                                    
                                        <button type="button" class="btn btn-secondary ajouter"   name="competences" id="ajouter-competence">Ajouter Compétence</button>
                                    </div>
                                    

                                    
                                    <div class="row g-3">
                                        <div class="form-group col-md-12">
                                            <label for="formation" class="form-label"  name="formation"  >Formation</label>
                                            <input type="text" class="form-control" name="formation" id="formation" placeholder="Saisir vos formations">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dateDebut" class="form-label" name="date_debutf">Date de debut</label>
                                            <input type="date" class="form-control" name="date_debutf" id="dateDebut">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dateFin" class="form-label" name="date_finf">Date de fin</label>
                                            <input type="date" class="form-control" name="date_finf" id="dateFin">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pays" class="form-label" name="Pays">Pays</label>
                                            <input type="text" class="form-control" name="Pays" id="pays" placeholder="Pays">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ville" class="form-label" name="Ville">Ville</label>
                                            <input type="text" class="form-control" name="Ville" id="ville" placeholder="Ville">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="diplome" class="form-label" name="diplome">Diplôme</label>
                                            <input type="text" class="form-control" name="diplome" id="diplome" placeholder="Diplôme">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ecole" class="form-label" name="ecole">Université ou École</label>
                                            <input type="text" class="form-control" name="ecole" id="ecole" placeholder="Université ou École">
                                        </div>
                                    
                                        <div class="border">
                                            <ul class="list-group" id="formation-ajoutes">
                                                <!-- Les competences ajoutées seront affichées ici -->
                                            </ul>
                                        </div>
                                    
                                        <button type="button" class="btn btn-secondary ajouter" name="ecole" id="ajouter-formation">Ajouter Université ou Ecole</button>
                                    </div>
                                   

                                    
                                    <div class="row g-3">
                                        <div class="form-group col-md-6">
                                            <label for="experience" class="form-label" name="experience">  Expériences</label>
                                            <input type="text" class="form-control"  name="experience" id="experience" placeholder="Expériences">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nomEntreprise" class="form-label" name="NomEntreprise">Nom de l'entreprise</label>
                                            <input type="texte" class="form-control" name="NomEntreprise" id="nomEntreprise" placeholder="Nom de l'entreprise">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dateDebut2" class="form-label" name="date_debutE" >Date de debut</label>
                                            <input type="date" class="form-control" name="date_debutE" id="dateDebut2">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dateFin2" class="form-label" name="date_finE" >Date de fin</label>
                                            <input type="date" class="form-control" name="date_finE" id="dateFin2">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="description2" class="form-label"  name="description" >Description</label>
                                            <textarea class="form-control" name="description2" id="description2" rows="2" placeholder="Donnez une description"></textarea>
                                        </div>
                                    
                                        <div class="border">
                                            <ul class="list-group" id="experience-ajoutes">
                                                <!-- Les competences ajoutées seront affichées ici -->
                                            </ul>
                                        </div>
                                    
                                        <button type="button" class="btn btn-secondary ajouter"   name="NomEntreprise"   id="ajouter-experience">Ajouter Expérience</button>
                                    </div>
                                    

                                   
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01">Importer votre CV</label>
                                            <input type="file" class="form-control" id="inputGroupFile01">
                                        </div>
                                  
                                    
                                    <hr/>
                                    <p>Assurez-vous que toutes les informations sont correctes</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Toutes les informations ci-dessus sont correctes.
                                        </label>
                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                      
                                        <input class="btn btn-secondary" style="  background-color: rgb(120, 69, 168);
    border-color: rgb(120, 69, 168);" type="submit" value="Envoyer le Formulaire">
                                    </div>
                                </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     
        
      </body>
</html>