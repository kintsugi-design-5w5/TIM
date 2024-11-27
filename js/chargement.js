// document.addEventListener('DOMContentLoaded', function() {
//     // On récupère les éléments de la page
//     var elements = document.querySelectorAll('.chargement');
//     // On parcourt les éléments
//     for (var i = 0; i < elements.length; i++) {
//         // On ajoute la classe 'chargement-active'
//         elements[i].classList.add('invisible');
//     }

//     document.querySelector("body").style.overflowY = "auto";
// });

let lesImgs = document.images;
let pourcentage = 0;


for(let i = 0; i < lesImgs.length; i++) {
    let img = new Image();
    img.onload = setTimeout(function() {
        pourcentage += 100 / lesImgs.length + 1;
        document.querySelector('.pourcentage').innerHTML = Math.round(pourcentage) + '%';
        if(pourcentage >= 100) {
            pourcentage = 100;
        }
    }, 500);
    img.src = lesImgs[i].src;
}

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.chargement').classList.add('invisible');
    document.querySelector("body").style.overflowY = "auto";
});