//Récupérer variables pour rendre visible les cours
let btnsSession = document.querySelectorAll(".session-btn");
timeline = document.querySelector(".timeline");

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
  let hauteurTimeline = 550;
  //S'il y a plus d'une session ouverte on calcule la hauteur de la timeline
  //Ajout de la hauteur des sessions ouvertes à la hauteur de la timeline
  sessionsOuvertes.forEach((session) => {
    hauteurTimeline += session.offsetHeight;
  });
  //Remplacer la hauteur obtenue dans le style de la timeline
  timeline.style.minHeight = `${hauteurTimeline}px`;
}
