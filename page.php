<?php
get_header(); // Inclut l'en-tête du site
?>
<main>
    <section>
        <!-- Bouton de retour -->
        <div class="btn-retour">
            <img src="https://s2.svgbox.net/hero-outline.svg?ic=arrow-left&color=ebebeb" width="18" height="18" alt="Retour" />
            <!-- Lien de retour vers la page Avenir -->
            <a href="https://gftnth00.mywhc.ca/tim43/avenir/" class="texte-retour">Retour</a>
        </div>
        
        <?php
        // Vérifie si des articles sont disponibles
        if (have_posts()) {
            // Parcours chaque article
            while (have_posts()) {
                the_post(); // Prépare l'article
                the_content(); // Affiche le contenu de l'article
            }
        }
        ?>
    </section>
</main>
<?php get_footer(); // Inclut le pied de page du site ?>
</html>
