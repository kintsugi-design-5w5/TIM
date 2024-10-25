<?php
    
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

