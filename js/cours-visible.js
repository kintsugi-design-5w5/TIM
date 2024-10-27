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

  //S'il y a plus d'une session ouverte on calcule la hauteur de la timeline
  if (sessionsOuvertes > 0) {
    let hauteurInitiale = 550;
    let hauteurSession;
    //Obtenir la hauteur de chaque session ouverte
    sessionsOuvertes.forEach((session) => {
      hauteurSession = hauteurInitiale + session.offSetHeight;
      //Ajout de la hauteur de la session à la hauteur initiale
      hauteurTotale = hauteurInitiale + hauteurSession;
      console.log(hauteurTotale);
    });

    //Remplacer la hauteur initiale (par défaut) de la timeline par celle avec le contenu ouvert
    timeline.style.minHeight = `${hauteurTotale}px`;
  } else {
    //Par défaut la timeline (avec les sessions fermées) à une certaine hauteur
    timeline.style.minHeight = "550px";
  }
}
