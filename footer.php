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
                <li><a data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>"
                        href="<?php echo home_url(); ?>">Accueil</a></li>
                <li><a data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>"
                        href="<?php echo home_url('/category/cours'); ?>">Cours</a></li>
                <li><a data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>"
                        href="<?php echo home_url('/category/projets'); ?>">Projets</a></li>
                <li><a data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>"
                        href="<?php echo home_url('/avenir'); ?>">Avenir</a></li>
            </ul>
        </div>

        <!-- Bloc de liens externes vers des ressources associées -->
        <div class="footer-bloc">
            <h2>Liens</h2>
            <ul>
                <li><a href="https://www.cmaisonneuve.qc.ca/" target="blank">Maisonneuve</a></li>
                <li><a href="https://www.cmaisonneuve.qc.ca/programme/integration-multimedia/" target="blank">TIM</a>
                </li>
                <li><a href="https://sites.google.com/view/centre-aide-tim/accueil" target="blank">CÉTIM</a></li>
                <li><a href="https://www.cmaisonneuve.qc.ca/accueil/calendrier-scolaire/" target="blank">Calendrier
                        scolaire</a></li>
            </ul>
        </div>

        <!-- Bloc avec un logo qui pourrait renvoyer vers la page d'accueil -->
        <div class="footer-bloc">
            <a href="#"><img src="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>"
                    alt="Logo TIM" /></a>
        </div>
    </div>

    <!-- Section pour les icônes de réseaux sociaux -->
    <div class="footer-sociaux">
        <a href="https://www.facebook.com/groups/170302146254?locale=fr_CA" target="_blank"><img
                src="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/facebook.svg" alt="Logo Facebook" /></a>
        <a href="https://www.youtube.com/@TIMaisonneuve" target="_blank"><img
                src="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/youtube.svg" alt="Logo Twitter" /></a>
        <a href="https://www.instagram.com/maisonneuvetim/" target="_blank"><img
                src="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/instagram.svg"
                alt="Logo Instagram" /></a>
        <a href="https://www.linkedin.com/in/tim-coll%C3%A8ge-de-maisonneuve-9407b7131/?locale=fr_FR"
            target="_blank"><img src="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/linkedin.svg"
                alt="Logo LinkedIn" /></a>
    </div>

    <!-- Section de droits d'auteur -->
    <div class="footer-droits">
        <p>© 2024 Tous droits réservés</p>
    </div>
</footer>

</body>

<!-- Scripts JavaScript nécessaires pour des fonctionnalités spécifiques -->
<script src="<?php echo get_template_directory_uri() . '/js/boutons.js'; ?>"></script>
<!-- Script pour la gestion des boutons -->
<script src="<?php echo get_template_directory_uri() . '/js/curseur.js'; ?>"></script>
<!-- Script pour le curseur personnalisé -->
<script src="<?php echo get_template_directory_uri() . '/js/barre-navigation-scroll.js'; ?>"></script>
<!-- Script pour l'animation de la barre de navigation au scroll -->
<script src="<?php echo get_template_directory_uri() . '/js/hero.js'; ?>"></script>
<!-- Script pour l'effet de grain (bibliothèque) -->
<script src="<?php echo get_template_directory_uri() . '/js/grained.min.js'; ?>"></script>
<!-- Script pour l'effet de grain (bibliothèque) -->
<script src="<?php echo get_template_directory_uri() . '/js/grain.js'; ?>"></script>
<!-- Script personnalisé pour gérer l'effet de grain -->
<script src="<?php echo get_template_directory_uri() . '/js/cercle-avenir.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/boutons.js'; ?>"></script>
<!-- Script pour la gestion des boutons -->
<script src="<?php echo get_template_directory_uri() . '/js/curseur.js'; ?>"></script>
<!-- Script pour le curseur personnalisé -->
<script src="<?php echo get_template_directory_uri() . '/js/barre-navigation-scroll.js'; ?>"></script>
<!-- Script pour l'animation de la barre de navigation au scroll -->
<script src="<?php echo get_template_directory_uri() . '/js/hero.js'; ?>"></script>
<!-- Script pour l'effet de grain (bibliothèque) -->
<script src="<?php echo get_template_directory_uri() . '/js/grained.min.js'; ?>"></script>
<!-- Script pour l'effet de grain (bibliothèque) -->
<script src="<?php echo get_template_directory_uri() . '/js/grain.js'; ?>"></script>
<!-- Script personnalisé pour gérer l'effet de grain -->
<script src="<?php echo get_template_directory_uri() . '/js/graphique-animation.js'; ?>"></script>
<!-- Script pour animer les graphiques de la charte -->
<script src="<?php echo get_template_directory_uri() . '/js/cercle-avenir.js'; ?>"></script>
<?php wp_footer(); ?> <!-- Hook WordPress pour injecter les scripts supplémentaires nécessaires -->