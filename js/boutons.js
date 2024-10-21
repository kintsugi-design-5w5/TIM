const boutons = document.querySelectorAll(".mon-bouton");

boutons.forEach((bouton) => {
    // Ajoute un span pour le texte principal
    const texteSpan = document.createElement("span");
    texteSpan.className = "texte";
    texteSpan.textContent = bouton.textContent; // Récupère le texte du bouton
    bouton.innerHTML = ""; // Vide le contenu du bouton
    bouton.appendChild(texteSpan); // Ajoute le span contenant le texte

    // Définit la variable CSS pour le contenu initial du after
    bouton.style.setProperty("--after-content", `"${texteSpan.textContent}"`);

    // Écouteur pour le survol
    bouton.addEventListener("mouseenter", () => {
        const texte = bouton.textContent; // Récupère le texte du bouton
        bouton.style.setProperty("--after-content", `"${texte}"`); // Définit la variable CSS pour le contenu
    });
});
