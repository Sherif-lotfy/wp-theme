<?php
function my_custom_theme_scripts() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . './Bootstrap/css/bootstrap.min.css' , array());
    wp_enqueue_style('custom-style', get_template_directory_uri() . './assets//style/custom.css' , array());
    wp_enqueue_script('custom-js', get_template_directory_uri() . './assets/js/custom.js', array(), '1.0.0', true);
}
// add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

add_theme_support('menus');
register_nav_menus( 
    array(
        'header-menu' => 'header-menu',
        'footer-menu' => 'footer-menu'
    )
    );