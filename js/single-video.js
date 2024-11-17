// Sélectionner la vidéo
const video = document.getElementById("single_vid");
const hero = document.getElementById("hero");
console.log(video);
// Ajouter un gestionnaire d'événements au clic sur la vidéo
hero.addEventListener("click", () => {
    // Alterner l'état du son
    if (video.muted) {
        hero.setAttribute("data-icone", "volume_off"); // Change l'icône en volume-up
        video.muted = false; // Désactive le mute
        rafraichirIconeCurseur(hero);
    } else {
        hero.setAttribute("data-icone", "volume_up"); // Change l'icône en volume-up
        video.muted = true; // Active le mute
        rafraichirIconeCurseur(hero);
    }
});
hero.addEventListener("mouseenter", () => {
    rafraichirIconeCurseur(hero);
});
