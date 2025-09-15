<?php
/**
 * Theme Functions.
 * 
 * @package leelaHoldings
 */



function leelaHoldings_enqueue_scripts() {
    // Register styles 
    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all' );
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
  
    // Register scripts 
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);
   
    // Enqueue styles 
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    // Enqueue scripts 
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');

}
add_action( 'wp_enqueue_scripts', 'leelaHoldings_enqueue_scripts');
// Enqueue SCSS compiled main.css
function leela_theme_enqueue_styles() {
    wp_enqueue_style(
        'leela-main',
        get_stylesheet_directory_uri() . '/styles/css/main.css',
        array(),
        filemtime(get_stylesheet_directory() . '/styles/css/main.css')
    );
}
add_action('wp_enqueue_scripts', 'leela_theme_enqueue_styles');

// Sass end


// Main Menus
function custom_theme_main_menu(){
    register_nav_menus(
        array(
            'main-menu'=> __('Main Menu'),
            'footer-menu-1'=> __('Footer Menu 1'),
            'footer-menu-2'=>__('Footer Menu 2'),
        )
    );
}
add_action('init', 'custom_theme_main_menu');



// Hide admin bar only for subscribers
function hide_admin_bar_for_subscribers() {
    if (current_user_can('subscriber')) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'hide_admin_bar_for_subscribers');



// Site Phone Number shortcode
function leela_phone_shortcode() {
    return '+91-9876543210'; // you can replace with dynamic if needed
}
add_shortcode('site_phone_number', 'leela_phone_shortcode');

// Site URL shortcode
function leela_url_shortcode() {
    return get_site_url(); // WordPress knows your domain
}
add_shortcode('site_url', 'leela_url_shortcode');




?>
