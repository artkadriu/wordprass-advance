<?php
function ds_theme_load_scripts(){
    wp_enqueues_style("dstheme-style", get_stylesheet_uri(), array(), filemtime(get_template_directory(). '/style.css'),'all');
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet', array(), '1.0', true);
    wp_enqueue_style('dropdown', get_template_directory_uri().'js/dropdown.js'.array(),'1.0',true);
}
add_action('wp_enqueue_scripts','ds_theme_load_scripts',)

?>