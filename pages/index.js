


//fonction pour afficher le mot de passe
function  afficherMotDePasse() {
    var x = document.getElementById("motdepasse");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

