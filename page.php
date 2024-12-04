<?php
get_header(); // Inclut l'en-tête du site
?>
<main>
    <section class="page-avenir">
        <!-- Bouton de retour -->
        <div data-icone="west" class="btn-retour">
            <img src="https://s2.svgbox.net/hero-outline.svg?ic=arrow-left&color=ebebeb" width="18" height="18" alt="Retour" />
            <!-- Lien de retour vers la page Avenir -->
            <a href="<?php echo esc_url( wp_get_referer() ); ?>" class="texte-retour">Retour</a>
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
