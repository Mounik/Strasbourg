<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

add_action('action_site_info', 'tsct_siteInfo');

/* Base du functions.php au dessus */

/* Modifier les infos du pied de page */
function tsct_siteInfo() {
    $theme = wp_get_theme();
    $usr = get_userdata( 1 ); // id de l'administrateur du site
    echo '© 2018 - ' . get_bloginfo ( 'name' ) . ' ' .
         '(Fièrement propulsé par <a href="' . esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ) . '" target="_blank" rel="noopener">WordPress</a>)';
}


