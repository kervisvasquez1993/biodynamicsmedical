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



if(!function_exists(biodynamicsmedical_setup)){
    function biodynamicsmedical_setup(){
        add_theme_support('post-thumbnails');
        add_image_size('index', 437, 291, true);

    }

    add_action('after_setup_theme','biodynamicsmedical_setup');
}

//custom posts type para la primera seccion

add_action( 'init', 'trauma' );
function trauma() {
    $labels = array(
        'name'               => _x( 'trauma', 'biodynamicsmedical' ),
        'singular_name'      => _x( 'trauma', 'post type singular name', 'biodynamicsmedical' ),
        'menu_name'          => _x( 'trauma', 'admin menu', 'biodynamicsmedical' ),
        'name_admin_bar'     => _x( 'trauma', 'add new on admin bar', 'biodynamicsmedical' ),
        'add_new'            => _x( 'Add New', 'book', 'biodynamicsmedical' ),
        'add_new_item'       => __( 'Add New Entrada de trauma', 'biodynamicsmedical' ),
        'new_item'           => __( 'New trauma', 'biodynamicsmedical' ),
        'edit_item'          => __( 'Edit trauma', 'biodynamicsmedical' ),
        'view_item'          => __( 'View trauma', 'biodynamicsmedical' ),
        'all_items'          => __( 'All trauma', 'biodynamicsmedical' ),
        'search_items'       => __( 'Search trauma', 'biodynamicsmedical' ),
        'parent_item_colon'  => __( 'Parent trauma:', 'biodynamicsmedical' ),
        'not_found'          => __( 'No trauma found.', 'biodynamicsmedical' ),
        'not_found_in_trash' => __( 'No trauma found in Trash.', 'biodynamicsmedical' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'biodynamicsmedical' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'trauma' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'trauma', $args );
}


