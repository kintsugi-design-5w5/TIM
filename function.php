<?php

function afficher_projets_dans_boucle($query) {
    // Vérifie si c’est le site public et si c’est la requête principale
    if (!is_admin() && $query->is_main_query()) {
        
        // Ajoute le type de contenu 'projets' à la requête de la page d’accueil ou d’archive
        if (is_home() || is_archive()) {
            $query->set('post_type', array('post', 'projets'));
        }
    }
}

function create_projets_post_type() {
    register_post_type('projets',
        array(
            'labels' => array(
                'name' => __('Projets'),
                'singular_name' => __('Projet')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        )
    );
}
add_action('init', 'create_projets_post_type');

add_action('pre_get_posts', 'afficher_projets_dans_boucle');

