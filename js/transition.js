let chargement = document.querySelector(".chargement");

function transitionToPage(href) {
    chargement.classList.remove("chargement-invisible");
    chargement.classList.add("chargement-visible");
    document.querySelector("body").style.overflowY = "hidden";

    setTimeout(function () {
        window.location.href = href;
    }, 1000);
}

document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM chargé");
    chargement.classList.remove("chargement-visible");
    chargement.classList.add("chargement-invisible");
    document.querySelector("body").style.overflowY = "auto";
});
