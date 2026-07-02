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
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );


// Enqueue Google Fonts, Material Icons, and Tailwind CSS CDN
add_action( 'wp_enqueue_scripts', 'isi_child_enqueue_assets', 15 );
function isi_child_enqueue_assets() {
    // 1. Google Fonts: Public Sans and Inter
    wp_enqueue_style( 'isi-google-fonts', 'https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,400;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@400;500;600;700&display=swap', array(), null );

    // 2. Google Material Symbols Outlined
    wp_enqueue_style( 'isi-material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0', array(), null );

    // 3. Tailwind CSS CDN Script (only on frontend)
    if ( ! is_admin() ) {
        wp_enqueue_script( 'isi-tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false );
    }
}
