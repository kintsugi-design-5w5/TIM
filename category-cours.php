<?php get_header(); ?>

<main>
  <?php echo do_shortcode('
       [hero title="Cours"
       video_url="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Hero2.mp4"
       images="
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image1.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image2.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image3.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image4.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image1.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image2.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image4.png
       "]
       '); ?>
  <section class="body-cours">
    <div>
      <?php echo do_shortcode('[boutons_filtre_categorie]'); ?>
      <?php

      // Initialisation des sessions
      $sessions = array(
        '1' => array(),
        '2' => array(),
        '3' => array(),
        '4' => array(),
        '5' => array(),
        '6' => array()
      );

      // Requête WordPress pour récupérer les articles avec la catégorie 'cours'
      $args = array(
        'category_name' => 'cours', // Nom de la catégorie (slug exact)
        'posts_per_page' => -1 // Récupérer tous les articles de la catégorie 'cours'
      );

      $query = new WP_Query($args);

      // Si des articles sont trouvés
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();

          // Obtenir le titre de l'article
          $title = get_the_title();
          $description = get_the_content();

          // Retirer les 7 premiers et les 6 derniers caractères
          $clean_title = substr($title, 7, -6);

          // Vérifier si le 4e caractère du titre est un chiffre
          if (isset($title[4]) && is_numeric($title[4])) {
            $session_num = $title[4]; // Le 4e caractère
            if (isset($sessions[$session_num])) {
              $sessions[$session_num][] = array(
                'title' => $clean_title, //Ajout du titre nettoyé
                'description' => $description, //Ajout de sa description
                'id' => get_the_ID() // Ajout de l'ID pour chaque cours
              );
            }
          }
        }
        wp_reset_postdata(); // Réinitialiser les données de post
      } else {
        echo "Aucun cours trouvé.";
      }
      ?>
    </div>

    <!-- Générer dynamiquement les sessions -->
    <div class="conteneur-timeline">
      <div class="timeline">
        <div class="barre-progression"></div>
      </div>
    </div>
    <ul>
      <?php foreach ($sessions as $session_num => $cours_list): ?>
        <li class="session">
          <h1 class="cercle grand session-btn" data-session="<?php echo $session_num; ?>">Session
            <?php echo $session_num; ?>
          </h1>
          <ul class="cours" id="session-<?php echo $session_num; ?>">
          </ul>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
</main>
<!-- Script Javascript pour gérer la hauteur de la timeline et la barre de progression de la page cours selon le contenu -->
<script src="<?php echo get_template_directory_uri(); ?>/js/hauteur-timeline-selon-contenu.js"></script>

<?php get_footer(); ?>