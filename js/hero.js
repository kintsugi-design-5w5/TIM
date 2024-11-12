document.addEventListener("scroll", function () {
    const images = document.querySelectorAll(".hero-images");

    // Récupère la hauteur de la fenêtre en vh
    const windowHeight = window.innerHeight;

    // Récupère la position de défilement
    const scrollPosition = window.scrollY;

    images.forEach((image) => {
        // Récupère la hauteur de l'image en vh (en fonction de la fenêtre)
        const imageHeight = (image.offsetHeight / windowHeight) * 100; // Convertir la hauteur en vh

        // Plus l'image est grande, plus l'effet de parallaxe est marqué
        const maxHeight = 25; // Hauteur max en vh
        const minHeight = 10; // Hauteur min en vh

        // Calcul du facteur de parallaxe en fonction de la taille de l'image
        const sizeFactor = Math.min(Math.max(imageHeight / maxHeight, 0.5), 1); // Normalisé entre 0.5 et 1

        // Le décalage de chaque image sera influencé par la position de défilement et la taille de l'image
        const speed = 0.2; // Ajuste la vitesse en fonction de l'index
        const offset = scrollPosition * speed * sizeFactor; // Applique la taille au décalage

        // Applique la position en décalage pour créer l'effet de parallaxe
        if (window.innerWidth < 768) {
            image.style.transform = `translateY(${-offset}px) scale(0.4) translateX(-50%)`;
        } else {
            image.style.transform = `translateY(${-offset}px)`;
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const titre = document.querySelector(".titre h1");

    if (titre) {
        const wordCount = titre.textContent.split(/\s+/).length; // Compte le nombre de mots dans le titre

        if (wordCount === 1) {
            titre.style.fontSize = "clamp(5rem, 12vw, 12rem)"; // Si un seul mot, taille 12rem
        } else {
            titre.style.fontSize = " clamp(2.5rem, 8vw, 6rem)"; // Si plus d'un mot, taille 7rem
        }
    }
});
