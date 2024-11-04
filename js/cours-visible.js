//Récupérer variables pour rendre visible les cours
let btnsSession = document.querySelectorAll(".session-btn");
timeline = document.querySelector(".timeline");
let btnCours = document.querySelectorAll(".cours-btn");
let descriptionContainer = document.getElementById("description-cours");

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
    //Appeler la fonction dès l'ouverture de la page
    AjusterHauteurTimeline();
  });
});

//Fonction pour ajuster la hauteur de la timeline selon les sessions ouvertes
function AjusterHauteurTimeline() {
  //Récupérer variable lors de l'ouverture d'une session
  let sessionsOuvertes = document.querySelectorAll(
    ".cours[style='display: block;']"
  );
  //La hauteur de la timeline par défaut
  let hauteurTimeline = 530;

  //S'il y a plus d'une session ouverte on calcule la hauteur de la timeline
  //Ajout de la hauteur des sessions ouvertes à la hauteur de la timeline
  sessionsOuvertes.forEach((session) => {
    hauteurTimeline += session.offsetHeight + 40;
  });

  //Remplacer la hauteur obtenue dans le style de la timeline
  timeline.style.minHeight = `${hauteurTimeline}px`;

  // Appeler la mise à jour de la barre de progression
  mettreAJourBarreProgression();
}

// Sélectionner tous les boutons de cours
document.querySelectorAll(".cours-btn").forEach((btn) => {
  btn.addEventListener("click", () => {
    let coursId = btn.getAttribute("data-cours-id");
    let descriptionElement = document.getElementById(`description-${coursId}`);

    // Afficher ou masquer la description
    if (descriptionElement.style.display === "none") {
      // Masquer toutes les autres descriptions
      document
        .querySelectorAll(".description-cours")
        .forEach((desc) => (desc.style.display = "none"));

      // Afficher la description de l'élément cliqué
      descriptionElement.style.display = "block";
    } else {
      descriptionElement.style.display = "none";
    }
  });
});
