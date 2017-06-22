<?php

function custom_post_type_projects() {

    $single_title = 'Project';
    $multi_title = 'Projects';

    $labels = array(
        'name'                => _x( $multi_title, 'Post Type General Name', 'base' ),
        'singular_name'       => _x( $single_title, 'Post Type Singular Name', 'base' ),
        'menu_name'           => __( $multi_title, 'base' ),
        'parent_item_colon'   => __( 'Parent' . $single_title, 'base' ),
        'all_items'           => __( 'All' . $multi_title, 'base' ),
        'view_item'           => __( 'View' . $single_title, 'base' ),
        'add_new_item'        => __( 'Add New' . $single_title, 'base' ),
        'add_new'             => __( 'Add New', 'base' ),
        'edit_item'           => __( 'Edit' . $single_title, 'base' ),
        'update_item'         => __( 'Update' . $single_title, 'base' ),
        'search_items'        => __( 'Search' . $single_title, 'base' ),
        'not_found'           => __( 'Not Found', 'base' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'base' ),
    );

    $args = array(
        'label'               => __( 'projects', 'base' ),
        'description'         => __( 'Project news and reviews', 'base' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'publicly_queryable'  => true,
        'has_archive'           => true,
        'exclude_from_search' => true,
        'capability_type'     => 'post',
        // 'rewrite' => array( 'slug' => 'projects' )
    );
    register_post_type( 'projects', $args );
}

add_action( 'init', 'custom_post_type_projects' );