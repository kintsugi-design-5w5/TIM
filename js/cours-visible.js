//Récupérer variables pour rendre visible les cours
let btnsSession = document.querySelectorAll(".session-btn");
let listeCours = document.querySelectorAll(".cours"); //possible utilisation pour les filtres

//Ajouter un écouteur d'événement sur le clic de chaque btnSession
btnsSession.forEach((bouton) => {
  bouton.addEventListener("click", () => {
    //Attraper l'ID de la session
    let idSession = bouton.getAttribute("data-session");

    // Récupérer l'ID de la session
    let coursActifs = document.getElementById(`session-${idSession}`);

    // Vérifier si la session est déjà active
    if (coursActifs.style.display === "block") {
      // Masquer les cours si la session est ouverte
      coursActifs.style.display = "none";
    } else {
      // Si la session est fermée, l'afficher
      coursActifs.style.display = "block"; // Afficher la session active
    }
  });
});
