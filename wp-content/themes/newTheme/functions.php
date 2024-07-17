<?php
// function my_custom_theme_scripts() {
//     wp_enqueue_style( 'custon-css', get_template_directory_uri().'./assets/style/custom.css', array(),  'all' );
//     wp_enqueue_style('bootstrap-css', get_template_directory_uri() . './Bootstrap/css/bootstrap.min.css');
//     wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/style/custom.css' , array());
// };

// add_theme_support('menus');
// register_nav_menus( 
//     array(
//         'header-menu' => 'header-menu',
//         'footer-menu' => 'footer-menu'
//     )
// );

function my_custom_theme_scripts() {
    // Enqueue Bootstrap CSS with versioning
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/Bootstrap/css/bootstrap.min.css', array(), filemtime(get_template_directory() . '/Bootstrap/css/bootstrap.min.css'));

    // Enqueue custom CSS with versioning
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/style/custom.css', array(), filemtime(get_template_directory() . '/assets/style/custom.css'));
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

add_theme_support('menus');

register_nav_menus( 
    array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu'
    )
);
?>

