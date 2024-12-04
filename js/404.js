let lesCitationsPerdus = ["Le bonheur n'est pas une destination à atteindre mais une façon de voyager.", 
"Être perdu n'est pas la même chose que d'être nulle part.",
"Se sentir perdu fait partie du chemin.",
"Parfois, il faut se perdre pour se retrouver soi-même."]; // Tableau de citations


let balliseText = document.querySelector(".div-404 > p"); // Récupère la balise p

balliseText.innerHTML = "« " + lesCitationsPerdus[Math.round(Math.random() * lesCitationsPerdus.length)] + " »"; // Affiche une citation aléatoire