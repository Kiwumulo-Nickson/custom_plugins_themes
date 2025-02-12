<?php
/* enqueue scripts and style from parent theme */
 
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');
// define('CLIENT_PLUGIN_DIR',__DIR__);
 
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 999);
 
function child_enqueue_styles()
{
    // enqueue other css files
    wp_enqueue_style('kc-astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all');
}

?>



