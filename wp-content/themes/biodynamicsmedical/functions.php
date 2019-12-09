<?php
/*
 * agregamos funciones para crear tabla en base de datos
*/


/* Start your code here */

require get_template_directory().'/inc/database.php';
require get_template_directory().'/inc/contacto.php';
require get_template_directory().'/inc/option.php';

/* fin de script para crear tabla en base de datos*/
// agregar soportes a las imagenes
    if (function_exists( img__suport)){
        function img_suport(){
            // Add Thumbnail Theme Support
            add_theme_support('post-thumbnails');
            add_image_size('large', 700, '422', true); // Large Thumbnail
            add_image_size('medium', 350, '250', true); // Medium Thumbnail
            add_image_size('small', 120, '', true); // Small Thumbnail
            add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

        }

    }




// fin de soporte de imagenes
// Cargar los estilos y los script de la pagina
if(!function_exists( style )) {

    function style(){
        wp_enqueue_style('raleweay','https://fonts.googleapis.com/css?family=Raleway&display=swap',array(), '1.0.0'.'all');
        wp_enqueue_style('Oxygen','https://fonts.googleapis.com/css?family=Oxygen&display=swap',array(),'1.0.0','all');
        wp_enqueue_style('quicksand','https://fonts.googleapis.com/css?family=Quicksand&display=swap',array(),'1.0.0','all');
        wp_enqueue_style('abel','https://fonts.googleapis.com/css?family=Abel&display=swap', array(),'1.0.0','all');
        wp_enqueue_style('News Cycle','https://fonts.googleapis.com/css?family=News+Cycle&display=swap',array(),'1.0.0','all');
        wp_enqueue_style('normalize','https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(),'8.0.1','all');
        wp_enqueue_style('normalize-map','https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css.map', array(),'8.0.1','all');
        wp_enqueue_style('bootstraps','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(),'4.2.3','all');
        wp_enqueue_style('font-awesome','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(),'4.7.0'.'all');
       // wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome.css',array(),'4','all');
        wp_enqueue_style('style',get_stylesheet_uri());
        //wp_enqueue_script('sc6',get_template_directory_uri().'/js/es6.js',array(),'1.0.0',true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'),'4.2.3',true);
        wp_enqueue_script('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('popper'),'4.2.3', true);
        wp_enqueue_script('vue','https://cdn.jsdelivr.net/npm/vue/dist/vue.js', array(),'2', true);
        wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js',array(),'1.0.0', true);

    }

    add_action('wp_enqueue_scripts','style');
}

//creacion de menu
if(!function_exists(menus)){
    function menus(){
        register_nav_menus( array(
            'header_menu' => __('header_menu', 'biodynamicsmedical'),
            'trauma_menu' => __('trauma_menu', 'biodynamicsmedical')

        ));
    }
    add_action( 'init', 'menus' );
}


add_action('init','biodynamics_menu');


function change_posts_order( $query ) {
if ( $query-is_home() && $query-is_main_query() ) {
$query-set( 'orderby', 'title' );
$query-set( 'order', 'ASC' );
}
}
add_action( 'pre_get_posts', ' change_posts_order ' );

if(!function_exists(biodynamicsmedical_setup)){
    function biodynamicsmedical_setup(){
        add_theme_support('post-thumbnails');
        add_image_size('index', 437, 291, true);

    }

    add_action('after_setup_theme','biodynamicsmedical_setup');
}
// configuracion de longitud del extracto
function extracto_longitud($length){
    return 20;
}
add_filter( 'excerpt_length','extracto_longitud',999 );


// fin de longitud de extracto

// invocacion de widget
if(!function_exists(biodynamics_widget)){
    function biodynamics_widget(){
        register_sidebar(
            array(
                'name' => 'form_widget',
                'id' => 'form',
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
            ));

    }

// fin de widget
add_action('widgets_init','biodynamics_widget');
}
/*filtro de busqueda
function my_custom_searchengine($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('post'));
    }
    return $query;
}
add_filter('pre_get_posts', 'my_custom_searchengine');
*/
// fin de busqueda

add_filter('pll_get_post_types', 'mi_pll_con_custom_post_types');
function mi_pll_con_custom_post_types($types) {
    return array_merge($types, array('trauma' => 'trauma'));
}
//custom posts type para la primera seccion trauma

add_action( 'init', 'trauma' );
function trauma() {
    $labels = array(
        'name'               => _x( 'trauma', 'biodynamicsmedical' ),
        'singular_name'      => _x( 'trauma', 'post type singular name', 'biodynamicsmedical' ),
        'menu_name'          => _x( 'trauma', 'admin menu', 'biodynamicsmedical' ),
        'name_admin_bar'     => _x( 'trauma', 'add new on admin bar', 'biodynamicsmedical' ),
        'add_new'            => _x( 'Add New', 'book', 'biodynamicsmedical' ),
        'add_new_item'       => __( 'Add New trauma', 'biodynamicsmedical' ),
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
        'description'        => __( 'Description.', 'trauma' ),
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


/* regisro del segundo custom post type maxilofacial*/
add_action( 'init', 'maxilofacial' );
function maxilofacial() {
    $labels = array(
        'name'               => _x( 'maxilofacial', 'biodinamicsmedical' ),
        'singular_name'      => _x( 'maxilofacial', 'post type singular name', 'biodinamicsmedical' ),
        'menu_name'          => _x( 'maxilofacial', 'admin menu', 'biodinamicsmedical' ),
        'name_admin_bar'     => _x( 'maxilofacial', 'add new on admin bar', 'biodinamicsmedical' ),
        'add_new'            => _x( 'Add New', 'book', 'biodinamicsmedical' ),
        'add_new_item'       => __( 'Add New Maxilofacial', 'biodinamicsmedical' ),
        'new_item'           => __( 'New maxilofacial', 'biodinamicsmedical' ),
        'edit_item'          => __( 'Edit maxilofacial', 'biodinamicsmedical' ),
        'view_item'          => __( 'View maxilofacial', 'biodinamicsmedical' ),
        'all_items'          => __( 'All maxilofacial', 'biodinamicsmedical' ),
        'search_items'       => __( 'Search maxilofacial', 'biodinamicsmedical' ),
        'parent_item_colon'  => __( 'Parent maxilofacial:', 'biodinamicsmedical' ),
        'not_found'          => __( 'No maxilofaciales found.', 'biodinamicsmedical' ),
        'not_found_in_trash' => __( 'No maxilofaciales found in Trash.', 'biodinamicsmedical' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'biodinamicsmedical' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'maxilofacial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'maxilofacial', $args );
}

/* agregamos custom post type de columna*/

add_action( 'init', 'columna' );
function columna() {
    $labels = array(
        'name'               => _x( 'Columna', 'biodinamicsmedical' ),
        'singular_name'      => _x( 'Columna', 'post type singular name', 'biodinamicsmedical' ),
        'menu_name'          => _x( 'Columna', 'admin menu', 'biodinamicsmedical' ),
        'name_admin_bar'     => _x( 'Columna', 'add new on admin bar', 'biodinamicsmedical' ),
        'add_new'            => _x( 'Add New', 'book', 'biodinamicsmedical' ),
        'add_new_item'       => __( 'Add New Columna', 'biodinamicsmedical' ),
        'new_item'           => __( 'New Columna', 'biodinamicsmedical' ),
        'edit_item'          => __( 'Edit Columna', 'biodinamicsmedical' ),
        'view_item'          => __( 'View Columna', 'biodinamicsmedical' ),
        'all_items'          => __( 'All Columna', 'biodinamicsmedical' ),
        'search_items'       => __( 'Search Columna', 'biodinamicsmedical' ),
        'parent_item_colon'  => __( 'Parent Columna:', 'biodinamicsmedical' ),
        'not_found'          => __( 'No Columna found.', 'biodinamicsmedical' ),
        'not_found_in_trash' => __( 'No Columna found in Trash.', 'biodinamicsmedical' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'biodinamicsmedical' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'columna' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'columna', $args );
}

/* custom post type de Otros Proctos */

add_action( 'init', 'otros_productos' );
function otros_productos() {
    $labels = array(
        'name'               => _x( 'otros_productos', 'biodinamicsmedical' ),
        'singular_name'      => _x( 'otros_productos', 'post type singular name', 'biodinamicsmedical' ),
        'menu_name'          => _x( 'otros_productos', 'admin menu', 'biodinamicsmedical' ),
        'name_admin_bar'     => _x( 'otros_productos', 'add new on admin bar', 'biodinamicsmedical' ),
        'add_new'            => _x( 'Add New', 'book', 'biodinamicsmedical' ),
        'add_new_item'       => __( 'Add New otro producto', 'biodinamicsmedical' ),
        'new_item'           => __( 'New otros_productos', 'biodinamicsmedical' ),
        'edit_item'          => __( 'Edit otros_productos', 'biodinamicsmedical' ),
        'view_item'          => __( 'View otros_productos', 'biodinamicsmedical' ),
        'all_items'          => __( 'All otros_productos', 'biodinamicsmedical' ),
        'search_items'       => __( 'Search otros_productos', 'biodinamicsmedical' ),
        'parent_item_colon'  => __( 'Parent otros_productos:', 'biodinamicsmedical' ),
        'not_found'          => __( 'No otros_productoses found.', 'biodinamicsmedical' ),
        'not_found_in_trash' => __( 'No otros_productoses found in Trash.', 'biodinamicsmedical' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'biodinamicsmedical' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'otros_productos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'otros_productos', $args );
}

add_action( 'init', 'divisiones' );
function divisiones() {
    $labels = array(
        'name'               => _x( 'divisiones', 'biodinamicsmedical' ),
        'singular_name'      => _x( 'divisiones', 'post type singular name', 'biodinamicsmedical' ),
        'menu_name'          => _x( 'divisiones', 'admin menu', 'biodinamicsmedical' ),
        'name_admin_bar'     => _x( 'divisiones', 'add new on admin bar', 'biodinamicsmedical' ),
        'add_new'            => _x( 'Add New', 'book', 'biodinamicsmedical' ),
        'add_new_item'       => __( 'Add New división', 'biodinamicsmedical' ),
        'new_item'           => __( 'New divisiones', 'biodinamicsmedical' ),
        'edit_item'          => __( 'Edit divisiones', 'biodinamicsmedical' ),
        'view_item'          => __( 'View divisiones', 'biodinamicsmedical' ),
        'all_items'          => __( 'All divisiones', 'biodinamicsmedical' ),
        'search_items'       => __( 'Search divisiones', 'biodinamicsmedical' ),
        'parent_item_colon'  => __( 'Parent divisiones:', 'biodinamicsmedical' ),
        'not_found'          => __( 'No divisiones found.', 'biodinamicsmedical' ),
        'not_found_in_trash' => __( 'No divisiones found in Trash.', 'biodinamicsmedical' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'biodinamicsmedical' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'divisiones' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'divisiones', $args );
}

