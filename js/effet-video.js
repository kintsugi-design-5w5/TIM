document.addEventListener("scroll", () => {
    const section = document.querySelector(".proj-video");
    const video = section.querySelector("video");
    const rect = section.getBoundingClientRect();

    // Calcul de la progression du scroll dans la section
    const scrollProgress = Math.max(0, Math.min(1, (window.innerHeight - rect.top) / (rect.height + window.innerHeight)));

    // Calcul de l'échelle (de 0.5 à 1.25 en fonction de la progression)
    const scale = Math.min(1, 0.5 + scrollProgress); // La vidéo commence à 0.5x et atteint 1.25x à la fin du défilement

    // Applique la transformation de mise à l'échelle et le positionnement
    video.style.transform = `scale(${scale})`;
});
