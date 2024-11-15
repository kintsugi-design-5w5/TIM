let cours = document.querySelectorAll(".boite_cours");

cours.forEach((cours) => {
    cours.addEventListener("click", (e) => {
        // Récupérer le numéro dans la classe `cat_*`
        const catClasse = [...cours.classList].find((cls) => cls.startsWith("cat_"));
        const catNumero = catClasse ? catClasse.replace("cat_", "") : null;

        if (catNumero) {
            // Stocker le numéro du cours dans le localStorage
            localStorage.setItem("cours", catNumero);
        }
    });
});
