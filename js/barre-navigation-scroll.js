let lastScrollTop = 0;
const menu = document.querySelector(".barre-navigation");
let isScrollingDown = false; // Pour vérifier si l'utilisateur défile toujours vers le bas

window.addEventListener("scroll", function () {
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop && currentScroll > 100) {
        // Si on scroll vers le bas et qu'on a scrollé au moins de 100px
        menu.style.transform = "translateY(-100%)"; // Cache le menu
        isScrollingDown = true;
    } else if (currentScroll < lastScrollTop && isScrollingDown) {
        // Si on scroll vers le haut et que le menu était caché
        menu.style.transform = "translateY(0)"; // Affiche le menu
        isScrollingDown = false;
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Pour éviter les valeurs négatives sur mobile
});

// let page = document.querySelector("body");

// //objet nessessaire au fonctionnement du menu
// let menu = document.querySelector(".barre-navigation");

// /*Détection du scoll pour l'aparition et la disparition du menu*/
// let oldScrollY = window.scrollY;

// let scrollID = window.addEventListener("scroll", apparitionDisparitionDuMenu);

// //fonction pour faire apparaitre le menu si sur ordinateur
// function apparitionDisparitionDuMenu() {
//     {
//         if (window.scrollY > oldScrollY) {
//             menu.style.transform = "translateY(-100%) translateX(0%)";
//         } else {
//             menu.style.transform = "translateY(0%) translateX(0%)";
//         }
//         oldScrollY = window.scrollY;
//     }
// }

// //fonction pour faire apparaitre le menu
// function ouvrirLeMenu() {
//     menu.style.transform = "translateX(0%)";
//     page.style.overflowY = "hidden";
//     // console.log("d")
// }
// //fonction pour faire disparaitre le menu
// function fermerLeMenu() {
//     menu.style.transform = "translateX(100%)";
//     boutonBurger.style.pointerEvents = "auto";
//     page.style.overflowY = "auto";
// }
