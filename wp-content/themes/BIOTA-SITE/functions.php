<?php  
function camara_paraiso_files(){
    wp_enqueue_style('camara_paraiso_main_styles', get_stylesheet_uri());
    wp_enqueue_style('bootstrap',get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('carousel',get_stylesheet_directory_uri() . '/carousel/carousel.css');
    wp_enqueue_script('bootstrap',get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts','camara_paraiso_files');
?>