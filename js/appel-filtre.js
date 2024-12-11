let btn_projets = document.querySelectorAll(".btn_proj");
let btn_cours = document.querySelectorAll(".btn_cours");

btn_projets.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    // Récupérer le numéro dans la classe `cat_*`
    const catProjets = [...btn.classList].find((cls) => cls.startsWith("cat_"));
    const catNumero = catProjets ? catProjets.replace("cat_", "") : null;

    if (catNumero) {
      // Stocker le numéro du cours dans le localStorage
      localStorage.setItem("cours", catNumero);
    }
  });
  btn.addEventListener("mouseenter", () => {
    curseur.classList.add("noir");
  });
  btn.addEventListener("mouseleave", () => {
    curseur.classList.remove("noir");
  });
});

btn_cours.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    // Récupérer le numéro dans la classe `cat_*`
    const catCours = [...btn.classList].find((cls) => cls.startsWith("cat_"));
    const catNumero = catCours ? catCours.replace("cat_", "") : null;

    if (catNumero) {
      // Stocker le numéro du cours dans le localStorage
      localStorage.setItem("cours", catNumero);
    }
  });
  btn.addEventListener("mouseenter", () => {
    curseur.classList.add("noir");
  });
  btn.addEventListener("mouseleave", () => {
    curseur.classList.remove("noir");
  });
});
