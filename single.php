<?php
get_header();
?>

    <main>
    <section id="hero">
    <?php
        // Récupérer l'URL de la vidéo depuis le champ ACF 'Video1'
        $video_data = get_field('video1'); // Assure-toi que 'video1' est le bon nom du champ
        $video_url = $video_data['url']; // Récupère l'URL de la vidéo

        // Vérifier si une URL a été récupérée
        if ($video_url) {
            echo '<video autoplay loop muted>';
            echo '<source src="' . esc_url($video_url) . '" type="video/mp4">'; // Assure-toi que le type de la vidéo est correct
            echo 'Votre navigateur ne supporte pas la lecture de vidéos.';
            echo '</video>';
        } else {
            echo '<p>Vidéo non disponible.</p>';
        }
    ?>
</section>



      <section class="section__projet">
        <div class="info__projet flex">
          <div class="titre__projet flex">
            <div class="btn-retour">
              <img
                src="https://s2.svgbox.net/hero-outline.svg?ic=arrow-left&color=ebebeb"
                width="18"
                height="18"
              />
              <a href="<?php echo esc_url( wp_get_referer() ); ?>" class="texte-retour">Retour</a>
            </div>
            <h1 class="annule-marge"><?php the_title(); ?></h1>
            <?php
            // Récupère la valeur du champ ACF "Auteurs" pour le projet actuel
            $auteurs = get_field('auteurs'); // Change ce nom si nécessaire
            if ($auteurs) {
                echo '<h5 class="auteur_info">' . esc_html($auteurs) . '</h5>';
            }
            ?>
          </div>
          <div class="description__projet flex">
            <div class="entete-description__projet flex">
              <h1 class="annule-marge">Description</h1>
              <h4> Cours de <?php echo esc_html(strtolower(get_field('cours'))); ?> </h4>




              <!-- Problème -->
              <div class="logiciel-projet flex">
                <?php
                // Récupère les logiciels cochés dans le champ "logiciels_projets"
                $logiciels = get_field('logiciels'); // Remplace par le nom exact de ton champ ACF

                // Vérifie si des logiciels sont cochés
                if ($logiciels):
                    foreach ($logiciels as $logiciel):
                        // Crée le nom de l'image en fonction du logiciel
                        $image_name =  strtolower(str_replace(' ', '', $logiciel)) . '.svg'; // Nomenclature à adapter
                        //$image_path = "http://localhost/5w5/wp-content/uploads/2024/11/" . $image_name; // Chemin de l'image
                        $image_path = "https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/" . $image_name; // Chemin de l'image 
                        ?>
                            <img class="logiciels" src="<?php echo esc_url($image_path); ?>" alt="<?php echo esc_attr($logiciel); ?>"/>
                        <?php
                    endforeach; 
                else: ?>
                    <p>Aucun logiciel n'a été sélectionné.</p>
                <?php endif; ?>
            </div>


            </div>
            <p class="texte-description">
              <?= get_the_content() ?>
            </p>
          </div>
        </div>

        <?php echo do_shortcode('[carrousel]');?>

        <?php
        // Tableau pour stocker les images
        $images = [];
        
        // Tentative de récupération des images (jusqu'à un nombre raisonnable, par exemple, 10)
        for ($i = 1; $i <= 10; $i++) { // Ajuste le nombre selon tes besoins
            $image = get_field('image' . $i); // Change 'image' selon le nom de ton champ
        
            // Si le champ est rempli, ajoute l'image au tableau
            if ($image) {
                $images[] = $image; // Ajoute l'image au tableau
            }
        }
        
        if (!empty($images)): ?>
        <section class="images-projets annule-padding-cote galerie">
            <?php 
            // Boucle pour afficher les images
            foreach ($images as $image): ?>
                <div class="projet-image">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            <?php endforeach; ?>
        </section>
    <?php else: ?>
        <p>Aucune image disponible pour ce projet.</p>
    <?php endif; ?>
    

        
      </section>
    </main>

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
    </div>-->

  <?php get_footer();?>
  <!-- <script src="js/popup.js"></script> -->
</html>
