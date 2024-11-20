document.addEventListener('DOMContentLoaded', function() {
    // On récupère les éléments de la page
    var elements = document.querySelectorAll('.chargement');
    // On parcourt les éléments
    for (var i = 0; i < elements.length; i++) {
        // On ajoute la classe 'chargement-active'
        elements[i].classList.add('invisible');
    }

    document.querySelector("body").style.overflowY = "auto";
});