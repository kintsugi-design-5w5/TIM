/********** GESTION DU MENU BURGER *************/

let burger = document.querySelector("#burger");
let flou = document.querySelector(".flou");
let body = document.querySelector("body");
let html = document.querySelector("html");

let scroll;

// Écouteurs d'événements pour le burger et le flou
burger.addEventListener("click", ClickBurger);
flou.addEventListener("click", FermeBurger);

// Fonction pour gérer le clic sur le burger
function ClickBurger() {
    if (burger.checked) {
        body.style.setProperty("--st", -document.documentElement.scrollTop + "px");
        scroll = document.documentElement.scrollTop;
        body.classList.add("noscroll");

        body.style.position = "fixed"; // Fixe le corps lors de l'ouverture du menu
        body.style.overflowY = "scroll";

        curseur.classList.add("noir"); // Ajoute la classe pour le curseur noir
    } else {
        FermeBurger(); // Ferme le menu si le burger est décoché
    }
}

// Fonction pour fermer le menu
function FermeBurger() {
    quitteMenu = true; // Indique que le menu se ferme
    body.style.position = "static";
    body.style.overflowY = "auto"; // Permet le défilement
    html.style.scrollBehavior = "auto";
    burger.checked = false;
    window.scrollTo(0, scroll); // Ramène à la position de défilement d'origine
    html.style.scrollBehavior = "smooth";

    curseur.classList.remove("noir"); // Retire la classe pour revenir à la couleur d'origine
}

/********** GESTION DU DÉFILEMENT *************/

let lastScrollTop = 0;
const menu = document.querySelector(".barre-navigation");
let isScrollingDown = false; // Pour vérifier si l'utilisateur défile vers le bas
let quitteMenu = false; // Indicateur de fermeture du menu

// Écouteur d'événements pour le défilement
window.addEventListener("scroll", function () {
    if (!quitteMenu) {
        MontrerCacherMenu(); // Appelle la fonction pour montrer/cacher le menu
    } else {
        quitteMenu = false; // Réinitialise l'indicateur
    }
});

// Fonction pour montrer ou cacher le menu
function MontrerCacherMenu() {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    // Cache le menu si on défile vers le bas
    if (currentScroll > lastScrollTop && currentScroll > 100) {
        menu.style.transform = "translateY(-100%)"; // Cache le menu
        isScrollingDown = true;
    }
    // Affiche le menu si on défile vers le haut
    else if (currentScroll < lastScrollTop && isScrollingDown) {
        menu.style.transform = "translateY(0)"; // Affiche le menu
        isScrollingDown = false;
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Pour éviter les valeurs négatives sur mobile
}
