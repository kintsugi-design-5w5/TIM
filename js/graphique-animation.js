document.addEventListener("DOMContentLoaded", () => {
  // Sélectionne tous les éléments graphiques qui contiennent des SVG
  document.querySelectorAll(".graphique").forEach((graphique) => {
    let svg = graphique.querySelector("svg"); // Récupère le SVG à l'intérieur de l'élément graphique
    let cercle = svg.querySelector("circle"); // Sélectionne le cercle du SVG
    let pourcentageCible = parseInt(graphique.getAttribute("data-percentage")); // Récupère le pourcentage cible à partir de l'attribut personnalisé
    let elementNombre = graphique.querySelector(".nombre-pourcentage"); // Sélectionne l'élément pour afficher le pourcentage à l'intérieur de l'élément graphique
    let format = graphique.getAttribute("data-format"); //Récupérer le data-format des graphiques
    let pourcentageActuel = 0; // Initialise le pourcentage actuel à 0

    // Définir la durée de l'animation pour le cercle (en millisecondes)
    let dureeAnimation = 3000; // Durée de l'animation en ms
    let offsetCible = 450 - (450 * pourcentageCible) / 100; // Calcul du dashoffset en fonction du pourcentage cible

    // Applique la transition sur le dashoffset du cercle
    cercle.style.transition = `stroke-dashoffset ${dureeAnimation}ms linear`; // Définit la durée de l'animation pour le changement du stroke-dashoffset
    cercle.style.strokeDashoffset = offsetCible; // Applique la valeur cible du stroke-dashoffset

    // Synchronise l'incrémentation du pourcentage affiché
    let intervalleIncrémentation = dureeAnimation / pourcentageCible; // Calcule l'intervalle entre chaque incrément en fonction du pourcentage cible

    // Utilise setInterval pour mettre à jour le pourcentage affiché progressivement
    let intervalle = setInterval(() => {
      if (pourcentageActuel < pourcentageCible) {
        switch (format) {
          case "pourcentage":
            pourcentageActuel++; // Incrémente le pourcentage actuel
            elementNombre.innerHTML = `${pourcentageActuel}%`; // Met à jour l'affichage du pourcentage dans l'élément HTML
            break;
          case "dollars":
            pourcentageActuel++; // Incrémente le pourcentage actuel
            elementNombre.innerHTML = `${pourcentageActuel.toFixed(2)}$`; // Met à jour l'affichage du pourcentage dans l'élément HTML
            break;
        }
      } else {
        clearInterval(intervalle); // Arrête l'intervalle lorsque le pourcentage atteint la valeur cible
      }
    }, intervalleIncrémentation); // Exécute l'incrémentation à intervalles réguliers
  });
});
