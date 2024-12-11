let isBurgerOpen = false; // Variable de contrôle pour l'état du menu burger

let burger = document.querySelector("#burger");
let burgerIcon = document.querySelector(".burger");
let flou = document.querySelector(".flou");
let body = document.querySelector("body");
let html = document.querySelector("html");

let scroll;

// Écouteurs d'événements pour le burger et le flou
burger.addEventListener("click", ClickBurger);
flou.addEventListener("click", FermeBurger);

// Fonction pour gérer le clic sur le burger
function ClickBurger() {
  isBurgerOpen = burger.checked; // Met à jour l'état de `isBurgerOpen`

  if (isBurgerOpen) {
    body.style.overflowY = "hidden";
    curseur.classList.add("noir");
    burgerIcon.setAttribute("data-icone", "close");
    rafraichirIconeCurseur(burgerIcon);
    console.log(burger.attributes);
    burgerIcon.classList.add("active"); // Ajoute la classe active pour le burger en "X"
  } else {
    burgerIcon.setAttribute("data-icone", "west");
    rafraichirIconeCurseur(burgerIcon);
    FermeBurger();
  }
}

function FermeBurger() {
  isBurgerOpen = false; // Réinitialise `isBurgerOpen` quand le menu se ferme
  body.style.overflowY = "auto";
  burger.checked = false;
  curseur.classList.remove("noir");
  burgerIcon.setAttribute("data-icone", "west");

  burgerIcon.classList.remove("active"); // Retire la classe active pour le burger
}

/********** GESTION DU DÉFILEMENT *************/
let lastScrollTop = 0;
const menu = document.querySelector(".barre-navigation");
let isScrollingDown = false;
let quitteMenu = false;

window.addEventListener("scroll", function () {
  if (isBurgerOpen) return; // Ignore le défilement lorsque le menu burger est actif
  if (!quitteMenu) {
    MontrerCacherMenu();
  } else {
    quitteMenu = false;
  }
});

function MontrerCacherMenu() {
  const currentScroll =
    window.pageYOffset || document.documentElement.scrollTop;

  if (currentScroll > lastScrollTop && currentScroll > 100) {
    menu.style.transform = "translateY(-100%)";
    isScrollingDown = true;
  } else if (currentScroll < lastScrollTop && isScrollingDown) {
    menu.style.transform = "translateY(0)";
    isScrollingDown = false;
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
}
