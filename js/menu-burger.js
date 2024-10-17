// let burger = document.querySelector("#burger");
// let flou = document.querySelector(".flou");
// let body = document.querySelector("body");
// let html = document.querySelector("html");

// let scroll;

// burger.addEventListener("click", ClickBurger);
// flou.addEventListener("click", FermeBurger);

// function ClickBurger() {
//     if (burger.checked) {
//         body.style.setProperty("--st", -document.documentElement.scrollTop + "px");
//         scroll = document.documentElement.scrollTop;
//         body.classList.add("noscroll");

//         //body.style.overflowY = "hidden";
//         body.style.position = "fixed";
//         body.style.overflowY = "scroll";
//         console.log(window.scrollY); //Donne la position du scroll
//     } else {
//         body.style.position = "static";
//         body.style.overflowY = "auto";
//         html.style.scrollBehavior = "auto";
//         burger.checked = false;
//         window.scrollTo(0, scroll);
//         html.style.scrollBehavior = "smooth";
//     }
// }

// function FermeBurger() {
//     body.style.position = "static";
//     body.style.overflowY = "auto";
//     html.style.scrollBehavior = "auto";
//     burger.checked = false;
//     window.scrollTo(0, scroll);
//     html.style.scrollBehavior = "smooth";
// }
