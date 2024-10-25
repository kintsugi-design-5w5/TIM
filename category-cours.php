<?php
    get_header();
?>

<main>
  <section class="entete_cours">
    <h1>Cours</h1>
  </section>
  <section class="body-cours">
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

            // Retirer les 7 premiers et les 6 derniers caractères
            $clean_title = substr($title, 7, -6);

            // Vérifier si le 4e caractère du titre est un chiffre
            if (isset($title[4]) && is_numeric($title[4])) {
                $session_num = $title[4]; // Le 4e caractère
                if (isset($sessions[$session_num])) {
                    $sessions[$session_num][] = $clean_title; // Ajouter le titre nettoyé à la session
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
    <div class="cours_timeline">
      <ul>
        <?php foreach ($sessions as $session_num => $cours_list): ?>
        <li class="session">
          <div class="cercle grand">Session <?php echo $session_num; ?></div>
          <ul class="cours" id="session-<?php echo $session_num; ?>">
            <?php foreach ($cours_list as $cours): ?>
            <li>
              <div class="cercle petit"><?php echo esc_html($cours); ?></div>
            </li>
            <?php endforeach; ?>
          </ul>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>
