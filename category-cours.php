<?php get_header(); ?>

<main>
  <?php echo do_shortcode('
       [hero title="Cours"
       video_url="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Hero2.mp4"
       images="
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/HeroCours_img2-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/HeroCours_img5.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/HeroCours_img3-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/HeroCours_img7-scaled.webp,
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/HeroCours_img1.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/HeroCours_img6-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/HeroCours_img4-scaled.webp
       "]
       '); ?>
  <section class="body-cours">
    <?php echo do_shortcode('[boutons_filtre_categorie]'); ?>
    <div>
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


      ?>
    </div>
    <div class="ponderation_info">
      <h3>Pondération des cours</h3>
      <p>Premier chiffre : nombre d'heure de cours en classe par semaine</p>
      <p>Deuxième chiffre : nombre d'heure de pratique en laboratoire par semaine</p>
      <p>Troisième chiffre : nombre de travail personnel à fournir par semaine</p>
    </div>
    <!-- Générer dynamiquement les sessions -->
    <ul id="conteneur-cours">
      <div class="timeline">
        <div class="barre-progression"></div>
      </div>
      <?php foreach ($sessions as $session_num => $cours_list): ?>
        <li class="session">
          <h3 data-icone="keyboard_arrow_down" class="cercle grand session-btn"
            data-session="<?php echo $session_num; ?>">Session
            <?php echo $session_num; ?>
          </h3>
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