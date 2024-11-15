//Variables généraux pour la timeline et sa barre de progression
let timeline = document.querySelector(".timeline");
let barreProgression = document.querySelector(".barre-progression");
// Sélectionner tous les cercles à observer
let cercles = document.querySelectorAll(".cercle");

// Fonction pour mettre à jour la barre de progression en fonction du scroll
function mettreAJourBarreProgression() {
    cercles = document.querySelectorAll(".cercle");
    // Récupérer la hauteur de la fenêtre et la position de défilement
    let positionDefilement = window.scrollY;

    // Récupérer les dimensions du conteneur
    let conteneurCours = document.querySelector("#conteneur-cours");
    let positionContenuCours = conteneurCours.offsetTop;

    // Calculer la hauteur de la barre de progression en fonction du pourcentage
    // let hauteurBarreProgression = pourcentageDefilement * hauteurMaxProgression;
    let hauteurBarreProgression = positionDefilement - positionContenuCours / 1.6;

    // Mettre à jour la hauteur de la barre de progression
    barreProgression.style.height = `${hauteurBarreProgression}px`;
}

// Ajouter un écouteur d'événements pour mettre à jour la barre au défilement
document.addEventListener("scroll", mettreAJourBarreProgression);

// Fonction pour vérifier la position des cercles par rapport à la fenêtre
function mettreAJourCercles() {
    let hauteurFenetre = window.innerHeight; // Hauteur de la fenêtre

    cercles.forEach((cercle) => {
        // Obtenir la position du cercle par rapport à la page
        let rect = cercle.getBoundingClientRect();
        let positionTop = rect.top + window.scrollY; // Position du top du cercle par rapport à la page
        let positionBottom = positionTop + rect.height; // Position du bas du cercle

        // Calculer la position à laquelle 50% de l'écran atteint le bas du cercle
        let seuilActivation = positionBottom - hauteurFenetre / 2;

        // Vérifier si le bas du cercle atteint 50% de l'écran
        if (window.scrollY >= seuilActivation && !cercle.classList.contains("cercle-actif")) {
            cercle.classList.add("cercle-actif");
        } else if (window.scrollY < seuilActivation) {
            cercle.classList.remove("cercle-actif");
        }
    });
}

// Ajouter un écouteur d'événement pour mettre à jour les cercles lors du défilement
window.addEventListener("scroll", mettreAJourCercles);

// Appeler la fonction au début pour vérifier l'état initial
mettreAJourCercles();

// Fonction pour fermer toutes les sessions avant d'appliquer un filtre
function fermerToutesLesSessions() {
    document.querySelectorAll(".cours").forEach((cours) => {
        cours.style.display = "none";
    });
}

//Récupérer variables pour rendre visible les cours
let btnsSession = document.querySelectorAll(".session-btn");
let btnCours = document.querySelectorAll(".cours-btn");

//Ajouter un écouteur d'événement sur le clic de chaque btnSession
btnsSession.forEach((bouton) => {
    bouton.addEventListener("click", () => {
        //Attraper l'ID de la session
        let idSession = bouton.getAttribute("data-session");

        // Récupérer l'ID de la session
        let coursActifs = document.getElementById(`session-${idSession}`);

        // Vérifier si la session est déjà active
        if (coursActifs.style.display === "block") {
            // Masquer les cours si la session est ouverte
            coursActifs.style.display = "none";
        } else {
            // Si la session est fermée, l'afficher
            coursActifs.style.display = "block"; // Afficher la session active
        }
        //Appeler la fonction dès l'ouverture de la page
        // ajusterHauteurTimeline();
        mettreAJourBarreProgression();
    });
});

// Ajouter un écouteur d'événement pour détecter tout clic sur la page
document.addEventListener("click", () => {
    if (localStorage.getItem("rest-cours") !== null && localStorage.getItem("rest") === "true") {
        mettreAJourCercles();
        gestionDescriptions();
        localStorage.setItem("rest-cours", "false");
    }
});

// Fonction qui gère l'affichage ou la dissimulation des descriptions des cours
function gestionDescriptions() {
    console.log("bnfwibif");
    document.querySelectorAll(".cours-btn").forEach((btn) => {
        btn.addEventListener("click", () => {
            let coursId = btn.getAttribute("data-cours-id");
            let descriptionElement = document.getElementById(`description-cours-${coursId}`);
            console.log(descriptionElement);

            // Afficher ou masquer la description
            if (descriptionElement.style.display === "none") {
                // Masquer toutes les autres descriptions
                document.querySelectorAll(".description-cours").forEach((desc) => (desc.style.display = "none"));
                // Afficher la description de l'élément cliqué
                descriptionElement.style.display = "block";
            } else {
                descriptionElement.style.display = "none";
            }

            // Mettre à jour la barre de progression après chaque clic
            mettreAJourBarreProgression();
        });
    });
}

// Appel initial de la fonction de gestion des descriptions
gestionDescriptions();
