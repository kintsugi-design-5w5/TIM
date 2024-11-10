let nombreGraphique = document.getElementById("nombre-pourcentage");
let compteur = 0;

setInterval(() => {
  if (compteur == 65) {
    clearInterval;
  } else {
    compteur += 1;
    nombreGraphique.innerHTML = `${compteur}%`;
  }
}, 30);
