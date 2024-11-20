let lesConteneurMask = document.querySelectorAll(".conteneur-mask"); // Récupère tous les conteneurs avec la classe "conteneur-mask"


let lesTextes = document.querySelectorAll(".conteneur-mask > h3"); // Récupère tous les éléments h2

let lesOffsetLeft = []; // Tableau pour stocker les offsetLeft des éléments h2
let lesOffsetTop = []; // Tableau pour stocker les offsetTop des éléments h2

// Remplissage des tableaux lesOffsetLeft et lesOffsetTop
for(let i = 0; i < lesTextes.length; i++){
    lesOffsetLeft.push(lesTextes[i].offsetLeft);
    lesOffsetTop.push(lesTextes[i].offsetTop);
}

// Ecouteur d'événement pour le redimensionnement de la fenêtre
window.addEventListener("resize", function(){
    lesOffsetLeft = [];  // Réinitialise le tableau lesOffsetLeft
    lesOffsetTop = []; // Réinitialise le tableau lesOffsetTop

    // Remplissage des tableaux lesOffsetLeft et lesOffsetTop
    for(let i = 0; i < lesTextes.length; i++){
        lesOffsetLeft.push(lesTextes[i].offsetLeft);
        lesOffsetTop.push(lesTextes[i].offsetTop);
    }
});

/**
 * Pour chaque conteneur avec la classe "conteneur-mask", ajoute un écouteur d'événement pour le survol de la souris
 */
for(let i = 0; i < lesConteneurMask.length; i++){
    lesConteneurMask[i].addEventListener("mouseover", function(){
        let leMask = lesConteneurMask[i].children[0].nextElementSibling; // Récupère le masque
        leMask.style.zIndex = 4; // Modifie le z-index du masque pour qu'il soit au-dessus des autres masques

        let leTexte = lesConteneurMask[i].children[0]; // Récupère le texte
        leTexte.style.zIndex = 5; // Modifie le z-index du texte pour qu'il soit au-dessus des autres images
        leTexte.style.transform = "translate("+ ((window.innerWidth / 2 - leTexte.offsetLeft) - leTexte.offsetWidth / 2) +"px,"+ (window.innerHeight / 2 - leTexte.offsetTop) +"px) scale(3)"; // Déplace le texte
        // Désactive les pointerEvents des autres conteneurs
        for(let j = 0; j < lesConteneurMask.length; j++){
            if(lesConteneurMask[j] != lesConteneurMask[i]){
                lesConteneurMask[j].style.pointerEvents = "none";
            }
        }
    });
}

/**
 * Pour chaque conteneur avec la classe "conteneur-mask", ajoute un écouteur d'événement pour la sortie du survol de la souris
 */
for(let i = 0; i < lesConteneurMask.length; i++){
    lesConteneurMask[i].addEventListener("mouseout", function(){
        let leMask = lesConteneurMask[i].children[0].nextElementSibling; // Récupère le masque
        lesConteneurMask[i].style.pointerEvents = "none"; // Désactive les pointerEvents du conteneur

        let leTexte = lesConteneurMask[i].children[0]; // Récupère le texte
        leTexte.style.transform = "translate("+ (lesOffsetLeft[i] - leTexte.offsetLeft) +"px,"+ (lesOffsetTop[i] - leTexte.offsetTop) +"px) scale(1)"; // Réinitialise la position
        console.log(lesOffsetLeft[i], lesOffsetTop[i]);
        
        // On attend 0.5s pour que la transition soit complétée
        setTimeout(function(){
            // Réactive les pointerEvents des autres conteneurs
            for(let i = 0; i < lesConteneurMask.length; i++){
                lesConteneurMask[i].style.pointerEvents = "auto";
                lesConteneurMask[i].children[0].style.zIndex = 3; // Réinitialise le z-index du texte
            }
            leMask.style.zIndex = 1; // Réinitialise le z-index du masque
        }, 500);
    });
}

/**
 * Pour chaque conteneur avec la classe "conteneur-mask", ajoute un écouteur d'événement pour le clic
 */
for(let i = 0; i < lesConteneurMask.length; i++){
    lesConteneurMask[i].addEventListener("click", function(){
        window.location.href = lesConteneurMask[i].children[0].href; // Redirige vers le lien de l'image
    });
}
