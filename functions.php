<?php 

function init_template() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action( 'after_setup_theme', 'init_template');

function assets() {
    wp_register_style( 'inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', '', '1.0', 'all' );
    wp_register_style( 'comicsans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap', '', '1.0', 'all' );

    wp_enqueue_style( 'fuentes', get_stylesheet_uri(), array('inter', 'comicsans'), '1.0', 'all' );
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'assets' );