<?php
function option_theme()
{
    add_theme_support('menus');
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'option_theme');

function enfile_css(){
    wp_enqueue_style(
        'mon-style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css'));
}

add_action('wp_enqueue_scripts', 'enfile_css');

function modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', 'populaire' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'modifie_requete_principal' );
     
//Permet l'import de SVG
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');


  //Permet d'ajouter des classes au li du nav
  function add_menu_list_item_class($classes, $item, $args) {
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);


// function create_projets_post_type() {
//     register_post_type('projets',
//         array(
//             'labels' => array(
//                 'name' => __('Projets'),
//                 'singular_name' => __('Projet')
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
//         )
//     );
// }
// add_action('init', 'create_projets_post_type');

// add_action('pre_get_posts', 'afficher_projets_dans_boucle');