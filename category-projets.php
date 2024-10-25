<?php
    get_header();
?>
<main>
    <section class="feed projets-apercus">
        <div class="colonne-proj colonne-1">
            <?php
            // Requête pour récupérer les posts de la catégorie "Projets"
            $args = array(
                'post_type' => 'post', // Utiliser 'post' pour les articles de blog
                'posts_per_page' => -1, // Récupérer tous les articles
                'category_name' => 'projets' // Remplacer 'projets' par le slug de ta catégorie
            );

            $query = new WP_Query($args);
            $counter = 0; // Compteur pour les projets

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); // Récupérer l'URL de la miniature

                    // Afficher uniquement les projets impairs dans la première colonne
                    if ($counter % 2 == 0) { // Projets impairs
                        ?>
                        <div class="thumbnail-projet" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                        </div>
                        <?php
                    }
                    $counter++;
                }
            } else {
                echo '<p>Aucun article trouvé.</p>';
            }
            wp_reset_postdata();
            ?>
        </div>

        <div class="colonne-proj colonne-2">
            <?php
            // Réinitialiser le compteur pour la deuxième colonne
            $counter = 0; // Réinitialise le compteur pour les projets

            // Requête pour récupérer à nouveau les posts de la catégorie "Projets"
            $query->rewind_posts(); // Réinitialiser les résultats de la requête

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); // Récupérer l'URL de la miniature

                    // Afficher uniquement les projets pairs dans la deuxième colonne
                    if ($counter % 2 == 1) { // Projets pairs
                        ?>
                        <div class="thumbnail-projet" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                        </div>
                        <?php
                    }
                    $counter++;
                }
            } else {
                echo '<p>Aucun article trouvé.</p>';
            }
            wp_reset_postdata();
            ?>
        </div>
    </section>
</main>



<!-- <main>
    <section class="feed projets-apercus">
        <div class="colonne-proj">
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
        </div>
        <div class="colonne-proj">
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
        </div>
    </section>
</main> -->
<?php get_footer();?>
</html>
