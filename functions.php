<?php
function option_theme()
{
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'option_theme');

function enfile_css()
{
  wp_enqueue_style(
    'mon-style',
    get_template_directory_uri() . '/style.css',
    array(),
    filemtime(get_template_directory() . '/style.css')
  );
}

add_action('wp_enqueue_scripts', 'enfile_css');

function modifie_requete_principal($query)
{
  if ($query->is_home() && $query->is_main_query() && !is_admin()) {
    $query->set('category_name', 'populaire');
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
  }
}
add_action('pre_get_posts', 'modifie_requete_principal');

//Permet l'import de SVG
function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


//Permet d'ajouter des classes au li du nav
function add_menu_list_item_class($classes, $item, $args)
{
  if (property_exists($args, 'list_item_class')) {
    $classes[] = $args->list_item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

// Fonction pour créer le shortcode [hero]
function custom_hero_shortcode($atts)
{
  // Définir les attributs par défaut
  $atts = shortcode_atts([
    'title' => 'Bienvenue',              // Titre par défaut
    'video_url' => '',                   // Vidéo
    'images' => '',                      // Liste d'images, séparée par des virgules
  ], $atts, 'hero');

  // Convertir la liste des images en tableau
  $images = array_map('trim', explode(',', $atts['images']));
  $images = array_filter($images, 'esc_url'); // Nettoyer chaque URL

  // Appel du fichier de composant hero.php et passage des variables via $args
  ob_start();
  get_template_part('hero', null, [
    'title' => $atts['title'],
    'video_url' => $atts['video_url'],
    'images' => $images,
  ]);
  return ob_get_clean();
}

// Enregistrement du shortcode
add_shortcode('hero', 'custom_hero_shortcode');

//Téléverser un favicon pour notre site web
function customizer_favicon_section($wp_customize)
{
  // Créez une section pour le favicon
  $wp_customize->add_section(
    'favicon_section',
    array(
      'title' => __('Favicon', 'TIM'),
      'priority' => 30,
    )
  );

  // Ajoutez un réglage pour stocker l'URL du favicon
  $wp_customize->add_setting('favicon_url');

  // Ajoutez un contrôle pour téléverser le favicon
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'favicon_url',
      array(
        'label' => __('Upload Favicon', 'TIM'),
        'section' => 'favicon_section',
        'settings' => 'favicon_url',
      )
    )
  );
}
add_action('customize_register', 'customizer_favicon_section');

// Affichez le favicon dans la balise <head>
function display_customizer_favicon()
{
  $favicon_url = get_theme_mod('favicon_url');
  if ($favicon_url) {
    echo '<link rel="icon" href="' . esc_url($favicon_url) . '" type="image/x-icon" />';
  }
}
add_action('wp_head', 'display_customizer_favicon');
