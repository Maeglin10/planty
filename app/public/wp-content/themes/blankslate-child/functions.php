<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// Fonction pour ajouter l'élément "Admin" dans le menu à la deuxième position
function ajouter_admin_dans_menu($items, $args) {
    // Vérifie si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Construit le lien "Admin"
        $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';
        // Trouve la position de la première balise </li> dans le menu
        $position = strpos($items, '</li>') + strlen('</li>');
        // Insère le lien "Admin" à la position trouvée
        $items = substr_replace($items, $admin_link, $position, 0);
    }
    // Retourne le menu modifié
    return $items;
}

// Ajouter le hook filter au menu de l'en-tête
add_filter('wp_nav_menu_items', 'ajouter_admin_dans_menu', 10, 2);



// END ENQUEUE PARENT ACTION
