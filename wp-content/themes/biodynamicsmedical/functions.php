<?php
// Cargar los estilos y los script de la pagina
if(!function_exists( style )) {

    function style(){
        wp_enqueue_style('bootstraps','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',array(),'4.2.3','all');
       // wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome.css',array(),'4','all');
        wp_enqueue_style('style',get_stylesheet_uri());
        //wp_enqueue_script('sc6',get_template_directory_uri().'/js/es6.js',array(),'1.0.0',true);

    }

    add_action('wp_enqueue_scripts','style');
}

//creacion de menu
if(!function_exists(menus)){
    function menus(){
        register_nav_menus( array(
            'header_menu' => __('header_menu', 'biodynamicsmedical')

        ));
    }
    add_action( 'init', 'menus' );
}



if(!function_exists(interwebsite_setup)){
    function interwebsite_setup(){
        add_theme_support('post-thumbnails');
        add_image_size('index', 437, 291, true);

    }

    add_action('after_setup_theme','interwebsite_setup');
}

