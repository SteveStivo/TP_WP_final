<?php
//Template name: Functions
// répertorier le menu
register_nav_menus(array(
'menu' => 'principal',
'footer' => 'Bas de page',
));
// fin
function stylecss() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'stylecss' );


    // Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

