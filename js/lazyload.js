
const observeur = new IntersectionObserver((entries, observeur) => {
    entries.forEach(entry => { // Pour chaque entrée
        if (entry.isIntersecting) { // Si l'élément est visible
            const img = entry.target; // Récupère l'élément
            img.classList.remove('lazy'); // Supprime la classe lazy
            console.log("allo");
            observeur.unobserve(img);
        }
    });
});

const lazyImages = document.querySelectorAll('.lazy'); // Sélectionne toutes les images avec l'attribut data-src
lazyImages.forEach(img => observeur.observe(img)); // Pour chaque image, observer l'entrée