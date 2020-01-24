<?php
/*
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

*/
/* regisro del segundo custom post type maxilofacial*/
/*
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
}*/

/* agregamos custom post type de columna*/
/*
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
}*/

/* custom post type de Otros Proctos */
/*
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
*/
add_action( 'init', 'divisions' );
function divisions() {
    $labels = array(
        'name'               => _x( 'division', 'biodinamicsmedical' ),
        'singular_name'      => _x( 'division', 'post type singular name', 'biodinamicsmedical' ),
        'menu_name'          => _x( 'division', 'admin menu', 'biodinamicsmedical' ),
        'name_admin_bar'     => _x( 'division', 'add new on admin bar', 'biodinamicsmedical' ),
        'add_new'            => _x( 'Add New', 'linea', 'biodinamicsmedical' ),
        'add_new_item'       => __( 'Add New linea', 'biodinamicsmedical' ),
        'new_item'           => __( 'New linea', 'biodinamicsmedical' ),
        'edit_item'          => __( 'Edit linea', 'biodinamicsmedical' ),
        'view_item'          => __( 'View linea', 'biodinamicsmedical' ),
        'all_items'          => __( 'All divisions', 'biodinamicsmedical' ),
        'search_items'       => __( 'Search division', 'biodinamicsmedical' ),
        'parent_item_colon'  => __( 'Parent division:', 'biodinamicsmedical' ),
        'not_found'          => __( 'No division found.', 'biodinamicsmedical' ),
        'not_found_in_trash' => __( 'No division found in Trash.', 'biodinamicsmedical' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'biodinamicsmedical' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'division' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'divisions', $args );
}

