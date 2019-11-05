<?php
// Cargar los estilos y los script de la pagina
if(!function_exists( style )) {

    function style(){
        wp_enqueue_style('bootstraps','',array(),'4.2.3','all');
        wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome.css',array(),'4','all');
        wp_enqueue_style('style',get_stylesheet_uri());
        wp_enqueue_script('sc6',get_template_directory_uri().'/js/es6.js',array(),'1.0.0',true);

    }

    add_action('wp_enqueue_scripts','style');
}
