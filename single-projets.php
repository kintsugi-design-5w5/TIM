<?php
get_header();
?>

<main>
  <section class="feed projets-apercus">
    <div class="colonne-proj">

      <?php
      // Vérifier si le post est disponible
      if (have_posts()) {
        while (have_posts()) {
          the_post(); // Boucle sur le post actuel
          ?>
          <div class="thumbnail-projet">
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>

            <?php
            // Récupérer les IDs des images via ACF
            $image1_id = get_field('image_projet_1');
            $image2_id = get_field('image_projet_2');
            $image3_id = get_field('image_projet_3');

            // Afficher les images
            if ($image1_id) {
              $img1_url = wp_get_attachment_image_url($image1_id, 'large');
              echo '<img src="' . esc_url($img1_url) . '" alt="Image du Projet 1">';
            }

            if ($image2_id) {
              $img2_url = wp_get_attachment_image_url($image2_id, 'large');
              echo '<img src="' . esc_url($img2_url) . '" alt="Image du Projet 2">';
            }

            if ($image3_id) {
              $img3_url = wp_get_attachment_image_url($image3_id, 'large');
              echo '<img src="' . esc_url($img3_url) . '" alt="Image du Projet 3">';
            }
            ?>
          </div>
          <?php
        }
      } else {
        echo '<p>Aucun projet trouvé.</p>';
      }
      ?>

    </div>
  </section>
</main>

<?php get_footer(); ?>
<script src="js/popup.js"></script>

</html>