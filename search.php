<?php
get_header();
?>
<main>
    <div class="div-searchform flex petite-marge-hauteur">
        <?php get_search_form(); ?>
    </div>
    <h1 class="texte-centre annule-marge-bottom">Résultats de recherche pour : <br><?php echo get_search_query(); ?></h1>

    <?php //echo do_shortcode('[boutons_filtre_categorie]'); ?>

    <?php
    // Fonction pour afficher "Aucun résultat trouvé"
    function no_result() {
        echo '<p>Aucun article trouvé.</p>';
    }

    // Requête pour récupérer les posts de la catégorie "Projets" correspondant à la recherche
    $search_query = get_search_query();
    $args = array(
        'post_type' => 'post', // Utiliser 'post' pour les articles de blog
        'posts_per_page' => -1, // Récupérer tous les articles
        'category_name' => 'projets', // Remplacer 'projets' par le slug de ta catégorie
        's' => $search_query // Ajouter le mot-clé de la recherche
    );

    $query = new WP_Query($args);

    // Vérification si des résultats existent
    if (!$query->have_posts()) {
        no_result();
    }
    ?>

    <section class="feed projets-apercus">
        <div class="colonne-proj colonne-1">
            <?php
            $counter = 0; // Compteur pour les projets

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); // Récupérer l'URL de la miniature
                    $project_link = get_permalink(); // Récupérer le lien du projet
                    $project_title = get_the_title(); // Récupérer le titre du projet

                    // Afficher uniquement les projets impairs dans la première colonne
                    if ($counter % 2 == 0) { // Projets impairs
                        ?>
                        <a data-icone="visibility" href="<?php echo esc_url($project_link); ?>" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');" class="thumbnail-projet">
                            <h2><?php echo esc_html($project_title); ?></h2>
                        </a>
                        <?php
                    }
                    $counter++;
                }
            }
            ?>
        </div>

        <div class="colonne-proj colonne-2">
            <?php
            // Réinitialiser le compteur pour la deuxième colonne
            $counter = 0;

            // Requête pour récupérer à nouveau les posts de la catégorie "Projets" correspondant à la recherche
            $query->rewind_posts(); // Réinitialiser les résultats de la requête

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); // Récupérer l'URL de la miniature
                    $project_link = get_permalink(); // Récupérer le lien du projet
                    $project_title = get_the_title(); // Récupérer le titre du projet

                    // Afficher uniquement les projets pairs dans la deuxième colonne
                    if ($counter % 2 == 1) { // Projets pairs
                        ?>
                        <a data-icone="visibility" href="<?php echo esc_url($project_link); ?>" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');" class="thumbnail-projet">
                            <h2><?php echo esc_html($project_title); ?></h2>
                        </a>
                        <?php
                    }
                    $counter++;
                }
            }
            ?>
        </div>
    </section>

    <?php wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>
</html>
