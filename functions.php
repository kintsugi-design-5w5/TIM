<?php
//-------------- Ajout des fonctions pour WP --------------//
function option_theme()
{
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'option_theme');


//-------------- Ajout des styles --------------//
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


//-------------- Requete pour les projets populaires --------------//
function modifie_requete_principal($query)
{
  if ($query->is_home() && $query->is_main_query() && !is_admin()) {
    $query->set('category_name', 'populaire');
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
  }
}
add_action('pre_get_posts', 'modifie_requete_principal');


//-------------- Ajout du support svg --------------//
function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//-------------------- Ajout de classes aux li du menu -------------------//
function add_menu_list_item_class($classes, $item, $args)
{
  if (property_exists($args, 'list_item_class')) {
    $classes[] = $args->list_item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

//-------------------- Ajout du shortcode hero -------------------//
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