/********** GESTION DU CURSEUR PERSONNALISÉ *************/

const curseur = document.getElementById("curseur-personnalise");
const icone = document.getElementById("icone-curseur"); // Assure-toi que cet élément est un <i> ou <span> pour les icônes

// Fonction pour masquer ou afficher le curseur en fonction de la largeur de la fenêtre
function gererCurseurMobile() {
    if (window.innerWidth < 756) {
        curseur.classList.add("cache"); // Masque le curseur si en dessous de 756px
    } else {
        curseur.classList.remove("cache"); // Affiche le curseur si au-dessus de 756px
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
    if (localStorage.getItem("rest") !== null && localStorage.getItem("rest") === "true") {
        mettreAJourCurseur();
        localStorage.setItem("rest", "false");
    }
});

// Fonction pour ajouter les écouteurs d'événements sur les éléments avec `data-icone`
function mettreAJourCurseur() {
    console.log("Mise à jour du curseur");
    // Sélectionne tous les éléments avec un attribut "data-icone"
    document.querySelectorAll("[data-icone]").forEach((element) => {
        element.addEventListener("mouseenter", () => {
            const iconeClass = element.getAttribute("data-icone"); // Récupère la classe de l'icône
            icone.classList.remove("cache"); // Affiche l'icône
            icone.innerHTML = `${iconeClass}`; // Change l'icône avec la classe récupérée
            curseur.classList.add("effet-survol"); // Ajout de la classe pour l'agrandissement du curseur
        });

        element.addEventListener("mouseleave", () => {
            curseur.classList.remove("effet-survol"); // Retrait de la classe d'agrandissement
            icone.classList.add("cache"); // Cache l'icône
            icone.innerHTML = ""; // Réinitialise l'icône
        });
    });
}

// Fonction pour rafraîchir l'icône du curseur en récupérant l'icône du data-icone
function rafraichirIconeCurseur(element) {
    // Récupère la valeur de l'attribut data-icone de l'élément
    const iconeClass = element.getAttribute("data-icone");

    // Vérifie si l'élément et l'icône existent
    if (icone && iconeClass) {
        icone.classList.remove("cache"); // S'assurer que l'icône est visible
        icone.innerHTML = `${iconeClass}`; // Met à jour l'icône avec la classe récupérée
    }
}

// Appel initial de la fonction pour les éléments déjà présents
mettreAJourCurseur();
