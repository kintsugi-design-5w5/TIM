/********** GESTION DU CURSEUR PERSONNALISÉ *************/

const curseur = document.getElementById("curseur-personnalise");
const icone = document.getElementById("icone-curseur");

// Fonction pour masquer ou afficher le curseur en fonction de la largeur de la fenêtre
function gererCurseurMobile() {
    if (window.innerWidth < 756) {
        curseur.style.display = "none"; // Masque le curseur si en dessous de 756px
    } else {
        curseur.style.display = "fixed"; // Affiche le curseur si au-dessus de 756px
    }
}

// Appel initial lors du chargement de la page
gererCurseurMobile();

// Écouteur d'événements pour détecter les changements de taille de la fenêtre
window.addEventListener("resize", gererCurseurMobile);

// Met à jour la position du curseur personnalisé en fonction de la souris
document.addEventListener("mousemove", (e) => {
    curseur.style.top = `${e.clientY}px`; // Position verticale
    curseur.style.left = `${e.clientX}px`; // Position horizontale
});

// Ajoute des écouteurs d'événements pour les éléments cliquables
document.querySelectorAll(".cliquable").forEach((element) => {
    element.addEventListener("mouseenter", () => {
        const iconeSrc = element.getAttribute("data-icone"); // Récupère l'URL de l'image
        icone.src = iconeSrc; // Modifie la source de l'image du curseur
        curseur.classList.add("effet-survol"); // Ajout de la classe pour l'agrandissement
        icone.classList.remove("cache"); // Affiche l'icône
    });

    element.addEventListener("mouseleave", () => {
        curseur.classList.remove("effet-survol"); // Retrait de la classe quand on sort du survol
        icone.classList.add("cache"); // Cache l'icône
        icone.src = ""; // Réinitialise la source de l'image
    });
});
