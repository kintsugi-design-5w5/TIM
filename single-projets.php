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

<!-- <main>
      <section id="hero">
        <h1>Vidéo/images</h1>
      </section>
      <section class="section__projet">
        <div class="info__projet">
          <div class="titre__projet">
            <div class="btn-retour">
              <img
                src="https://s2.svgbox.net/hero-outline.svg?ic=arrow-left&color=000"
                width="18"
                height="18"
              />
              <a href="#" class="texte-retour">Retour</a>
            </div>
            <h1>Nom du projet</h1>
            <h5 class="auteur_info">Auteur du projet</h5>
          </div>
          <div class="description__projet">
            <div class="entete-description__projet">
              <h1>Description</h1>
              <h3>Cours de web</h3>
              <div class="logiciel-projet">
                <img class="logiciels" src="images/LogoTim.png" alt="" />
                <img class="logiciels" src="images/LogoTim.png" alt="" />
                <img class="logiciels" src="images/LogoTim.png" alt="" />
              </div>
            </div>
            <p class="texte-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
              perferendis asperiores dolorum enim quisquam voluptates at nobis
              culpa doloribus distinctio.
            </p>
          </div>
        </div>

        <div class="images-projets">
          <div class="ligne1">
            <img class="screenshots-projet" src="images/image.png" alt="" />
            <img class="screenshots-projet" src="images/image.png" alt="" />
          </div>
          <div class="ligne2">
            <img
              class="screenshots-projet imgGrandEspace"
              src="images/image.png"
              alt=""
            />
          </div>
          <div class="ligne3">
            <img class="screenshots-projet" src="images/image.png" alt="" />
            <img class="screenshots-projet" src="images/image.png" alt="" />
          </div>
          <div class="lign4">
            <img
              class="screenshots-projet imgGrandEspace"
              src="images/image.png"
              alt=""
            />
          </div>
          <div class="ligne5">
            <img
              class="screenshots-projet imgGrandEspace"
              src="images/image.png"
              alt=""
            />
          </div>
        </div>
      </section>
    </main> -->

<!-- Section popup réseaux sociaux -->
<!-- <div class="popup">
      <img
        class="btn_x"
        src="https://s2.svgbox.net/materialui.svg?ic=close&color=fff"
        width="32"
        height="32"
      />
      <div class="contenu-popup">
        <h1>Nom de la personne</h1>
        <ul class="reseaux-sociaux__popup">
          <li>
            <a href="#"><img src="images/LogoTim.png" alt="Twitter" /></a>
          </li>
          <li>
            <a href="#"><img src="images/LogoTim.png" alt="Instagram" /></a>
          </li>
          <li>
            <a href="#"><img src="images/LogoTim.png" alt="LinkedIn" /></a>
          </li>
        </ul>
      </div>
    </div> -->

<?php get_footer(); ?>
<script src="js/popup.js"></script>

</html>