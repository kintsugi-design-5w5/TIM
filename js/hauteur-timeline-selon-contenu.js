//Variables généraux pour la timeline et sa barre de progression
let timeline = document.querySelector(".timeline");
let barreProgression = document.querySelector(".barre-progression");
//La hauteur de la timeline par défaut (au chargement de la page)
let hauteurTimeline;
let hauteurMaxBarreProgression = hauteurTimeline;

//Détecter la hauteur par défaut de la timeline en fonction de la largeur de l'écran
function definirHauteurTimeline() {
  hauteurTimeline = window.innerWidth <= 768 ? 430 : 530; // Utilise 430px pour mobile, 530px pour bureau
  hauteurMaxBarreProgression = hauteurTimeline;
  ajusterHauteurTimeline();
}

// Appeler la fonction dès le chargement de la page et au redimensionnement
window.addEventListener("load", definirHauteurTimeline);
window.addEventListener("resize", definirHauteurTimeline);

// Variables de la page
let hauteurFenetre = window.innerHeight; // Obtenir la hauteur de la fenêtre visible

// Variable de la hauteur de la section hero en pourcentage
let hauteurSectionHero = 100;

//Récupérer variables pour rendre visible les cours
let btnsSession = document.querySelectorAll(".session-btn");
let btnCours = document.querySelectorAll(".cours-btn");

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
    ajusterHauteurTimeline();
    mettreAJourBarreProgression();
  });
});

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
    ajusterHauteurTimeline();
    mettreAJourBarreProgression();
  });
});

//Fonction pour ajuster la hauteur de la timeline selon les sessions ouvertes et les descriptions
function ajusterHauteurTimeline() {
  // Réinitialisation de la hauteur de la timeline à chaque appel de la fonction
  hauteurTimeline = window.innerWidth <= 768 ? 450 : 530;

  // Définir les valeurs d'incrémentation pour la hauteur pour mobile et bureau
  //Ajout de la hauteur lorsque les sessions sont ouvertes
  let ajoutHauteurSession = window.innerWidth <= 768 ? 5 : 40;
  //Ajout de la hauteur lorsque la description est ouverte
  let ajoutHauteurDescription = window.innerWidth <= 768 ? 80 : 200;

  //Récupérer variable lors de l'ouverture des sessions
  let sessionsOuvertes = document.querySelectorAll(
    ".cours[style='display: block;']"
  );
  //Récupérer variable lors de l'ouverture des descriptions
  let descriptionsVisibles = document.querySelectorAll(
    ".description-cours[style='display:block']"
  );

  //S'il y a plus d'une session ouverte on calcule la hauteur de la timeline
  //Ajout de la hauteur des sessions ouvertes à la hauteur de la timeline
  sessionsOuvertes.forEach((session) => {
    hauteurTimeline += session.offsetHeight + ajoutHauteurSession;
  });

  descriptionsVisibles.forEach((description) => {
    hauteurTimeline += description.offsetHeight + ajoutHauteurDescription;
  });

  //Mettre à jour la hauteurMaxBarreProgression en fonction de la timeline
  hauteurMaxBarreProgression = hauteurTimeline;

  //Remplacer la hauteur obtenue dans le style de la timeline
  timeline.style.minHeight = `${hauteurTimeline}px`;

  // Appeler la mise à jour de la barre de progression
  // mettreAJourBarreProgression();
}

// Fonction pour mettre à jour la barre de progression en fonction du scroll
function mettreAJourBarreProgression() {
  // Calculer la position de défilement par rapport au haut de la page
  let positionDefilement = window.scrollY; // Mettre à jour ici pour avoir la position actuelle

  // Calculer la hauteur totale défilable du document
  let hauteurDocument = document.body.scrollHeight; // Hauteur totale du document
  let hauteurDefilable = hauteurDocument - hauteurFenetre; // Hauteur défilable, soit la section des cours

  // Début de la barre de progression après la section hero
  let defilementTimeline = (hauteurSectionHero * hauteurFenetre) / 100;

  // Vérifier si la position de défilement est au-delà de la section hero
  if (positionDefilement > defilementTimeline) {
    // Calculer le pourcentage de défilement dans la zone de la timeline
    // Math.min limite le pourcentage de défilement à 1 (100%) maximum
    let pourcentageDefilement = Math.min(
      (positionDefilement - defilementTimeline) /
        (hauteurDefilable - defilementTimeline),
      1
    );

    // Calculer la hauteur de la barre de progression en fonction du pourcentage de défilement
    let nouvelleHauteur = pourcentageDefilement * hauteurMaxBarreProgression;

    // Mettre à jour la hauteur de la ligne de progression
    barreProgression.style.height = `${nouvelleHauteur}px`;
  } else {
    // Réinitialiser la hauteur de la barre de progression si le défilement est dans la section hero
    barreProgression.style.height = "0px";
  }
}

// Ajouter un écouteur d'événement pour déclencher la fonction au scroll
document.addEventListener("scroll", mettreAJourBarreProgression);
