// Variables pour les éléments de la barre de progression
let timeline = document.querySelector(".timeline");
let barreProgression = document.querySelector(".barre-progression");
let hauteurTimeline = timeline.offsetHeight;

// Variables de la page
let hauteurFenetre = window.innerHeight; // Obtenir la hauteur de la fenêtre visible

// Variable de la hauteur de la section hero en pourcentage
let hauteurSectionHero = 100;

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
    let nouvelleHauteur = pourcentageDefilement * hauteurTimeline;

    // Mettre à jour la hauteur de la ligne de progression
    barreProgression.style.height = `${nouvelleHauteur}px`;
  } else {
    // Réinitialiser la hauteur de la barre de progression si le défilement est dans la section hero
    barreProgression.style.height = "0px";
  }
}

// Ajouter un écouteur d'événement pour déclencher la fonction au scroll
document.addEventListener("scroll", mettreAJourBarreProgression);
