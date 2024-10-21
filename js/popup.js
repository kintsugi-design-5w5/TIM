// Variable des éléments du popup

let btnX = document.querySelector(".btn_x");
let popup = document.querySelector(".popup");

let auteurInfo = document.querySelector(".auteur_info");

// Ajout d'un écouteur d'événement sur le clic du bouton X

btnX.addEventListener("click", FermerFenetrePopup);

//Ajout d'un événement sur le clic du nom de l'auteur du projet

auteurInfo.addEventListener("click", OuvrirFenetrePopup);

function FermerFenetrePopup() {
  popup.classList.add("disparition");
  popup.classList.remove("apparition");
}

function OuvrirFenetrePopup() {
  popup.classList.add("apparition");
}
