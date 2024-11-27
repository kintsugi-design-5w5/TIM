
// transitionToPage = function(href) {
//     document.querySelector('.chargement').classList.remove('invisible');
//     document.querySelector('.chargement').classList.add('visible');
//     document.querySelector("body").style.overflowY = "hidden";

//     setTimeout(function() {
//         window.location.href = href;
//     }, 2000);
// }
let chargement = document.querySelector('.chargement');

function transitionToPage(href) {
    chargement.classList.remove('invisible');
    chargement.classList.add('visible');
    document.querySelector("body").style.overflowY = "hidden";

    setTimeout(function() {
        window.location.href = href;
    }, 1000);
}

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM chargé');
    chargement.classList.remove('visible');
    chargement.classList.add('invisible');
    document.querySelector("body").style.overflowY = "auto";
});