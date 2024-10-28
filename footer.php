<footer class="pied">
    <!-- Conteneur principal pour les sections du pied de page -->
    <div class="footer-sections">
        
        <!-- Bloc d'adresse avec un lien cliquable -->
        <div class="footer-bloc">
            <h2>Adresse</h2>
            <a href="#">3800 R. Sherbrooke E, Montréal, QC H1X 2A2</a>
        </div>
        
        <!-- Bloc de navigation avec une liste de liens vers les différentes sections du site -->
        <div class="footer-bloc">
            <h2>Navigation</h2>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Cours</a></li>
                <li><a href="#">Projets</a></li>
                <li><a href="#">Avenir</a></li>
            </ul>
        </div>
        
        <!-- Bloc de liens externes vers des ressources associées -->
        <div class="footer-bloc">
            <h2>Liens</h2>
            <ul>
                <li><a href="#">Maisonneuve</a></li>
                <li><a href="#">CÉTIM</a></li>
                <li><a href="#">Calendrier scolaire</a></li>
                <li><a href="#">Galerie de jeux</a></li>
            </ul>
        </div>
        
        <!-- Bloc avec un logo qui pourrait renvoyer vers la page d'accueil -->
        <div class="footer-bloc">
            <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" alt="Logo TIM" /></a>
        </div>
    </div>
    
    <!-- Section pour les icônes de réseaux sociaux -->
    <div class="footer-sociaux">
        <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" alt="Logo Facebook" /></a>
        <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" alt="Logo Twitter" /></a>
        <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" alt="Logo Instagram" /></a>
        <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" alt="Logo LinkedIn" /></a>
    </div>
    
    <!-- Section de droits d'auteur -->
    <div class="footer-droits">
        <p>© 2024 Tous droits réservés</p>
    </div>
</footer>

</body>

<!-- Scripts JavaScript nécessaires pour des fonctionnalités spécifiques -->
<script src="<?php echo get_template_directory_uri() . '/js/boutons.js'; ?>"></script> <!-- Script pour la gestion des boutons -->
<script src="<?php echo get_template_directory_uri() . '/js/curseur.js'; ?>"></script> <!-- Script pour le curseur personnalisé -->
<script src="<?php echo get_template_directory_uri() . '/js/barre-navigation-scroll.js'; ?>"></script> <!-- Script pour l'animation de la barre de navigation au scroll -->
<script src="<?php echo get_template_directory_uri() . '/js/grained.min.js'; ?>"></script> <!-- Script pour l'effet de grain (bibliothèque) -->
<script src="<?php echo get_template_directory_uri() . '/js/grain.js'; ?>"></script> <!-- Script personnalisé pour gérer l'effet de grain -->

<?php wp_footer(); ?> <!-- Hook WordPress pour injecter les scripts supplémentaires nécessaires -->
