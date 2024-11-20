document.addEventListener("DOMContentLoaded", () => {
  let anime = false;
  // Fonction d'animation pour chaque graphique
  function animerGraphique(graphique) {
    let svg = graphique.querySelector("svg");
    let cercle = svg.querySelector("circle");
    let pourcentageCible = parseFloat(
      graphique.getAttribute("data-percentage")
    );
    let elementNombre = graphique.querySelector(".nombre-pourcentage");
    let format = graphique.getAttribute("data-format");
    let pourcentageActuel = 0;
    let dureeAnimation = 6000;
    let offsetCible = 810 - (810 * pourcentageCible) / 100;

    // Applique la transition sur le dashoffset du cercle
    cercle.style.transition = `stroke-dashoffset ${dureeAnimation}ms linear`;
    cercle.style.strokeDashoffset = offsetCible;

    // Calcule le pas d'incrémentation avec deux décimales pour les dollars
    let intervalleIncrémentation = dureeAnimation / pourcentageCible;
    let incrementeDecimales = 1;

    // Utilise setInterval pour animer le pourcentage affiché
    let intervalle = setInterval(() => {
      if (pourcentageActuel < pourcentageCible) {
        pourcentageActuel += incrementeDecimales;
        if (pourcentageActuel > pourcentageCible)
          pourcentageActuel = pourcentageCible;
        switch (format) {
          case "pourcentage":
            elementNombre.innerHTML = `${pourcentageActuel}%`;
            break;
          case "dollars":
            elementNombre.innerHTML = `${pourcentageActuel
              .toFixed(2)
              .replace(".", ",")}$`;
            break;
        }
      } else {
        clearInterval(intervalle);
        anime = true;
      }
    }, intervalleIncrémentation);
  }

  // Fonction pour vérifier si un élément est visible dans la fenêtre
  function estVisible(element) {
    let rect = element.getBoundingClientRect();
    return rect.top >= 0 && rect.bottom <= window.innerHeight;
  }

  // Ajouter un événement 'scroll' pour animer les graphiques quand ils sont visibles
  window.addEventListener("scroll", () => {
    document.querySelectorAll(".graphique").forEach((graphique) => {
      if (estVisible(graphique) && anime == false) {
        animerGraphique(graphique);
      }
    });
  });
});
