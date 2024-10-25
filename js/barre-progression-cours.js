//Variables des éléments de la barre de progression

let timeline = document.querySelector(".timeline");
let barreProgression = document.querySelector(".barre-progression");

function MiseAjourBarreProgression() {}

//Ajout d'un écouteur d'événement au scroll sur la page
document.addEventListener("scroll", MiseAjourBarreProgression);
