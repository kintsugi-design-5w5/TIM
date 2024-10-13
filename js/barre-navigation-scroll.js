let burger = document.querySelector("#burger");
let flou = document.querySelector(".flou");
let body = document.querySelector("body");
let html = document.querySelector("html");

let scroll;

burger.addEventListener("click", ClickBurger);
flou.addEventListener("click", FermeBurger);

function ClickBurger() {
    if (burger.checked) {
        body.style.setProperty("--st", -document.documentElement.scrollTop + "px");
        scroll = document.documentElement.scrollTop;
        body.classList.add("noscroll");

        //body.style.overflowY = "hidden";
        body.style.position = "fixed";
        body.style.overflowY = "scroll";
    } else {
        FermeBurger();
    }
}

function FermeBurger() {
    quitteMenu = true;
    body.style.position = "static";
    body.style.overflowY = "auto";
    html.style.scrollBehavior = "auto";
    burger.checked = false;
    window.scrollTo(0, scroll);
    html.style.scrollBehavior = "smooth";
}

let lastScrollTop = 0;
const menu = document.querySelector(".barre-navigation");
let isScrollingDown = false; // Pour vérifier si l'utilisateur défile toujours vers le bas
let quitteMenu = false;

window.addEventListener("scroll", function () {
    if (!quitteMenu) {
        MontrerCacherMenu();
    } else {
        quitteMenu = false;
    }
});

function MontrerCacherMenu() {
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
}
