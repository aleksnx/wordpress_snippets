<?php

function custom_taxonomy_portfolio() {

    $single_name = 'Portfolio';
    $multi_title = 'Portfolios';

    $labels = array(
        'name'                       => _x( $multi_title, 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( $single_name, 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( $single_name, 'text_domain' ),
        'all_items'                  => __( 'All ' . $multi_title, 'text_domain' ),
        'parent_item'                => __( 'Parent' . $single_name, 'text_domain' ),
        'parent_item_colon'          => __( 'Parent ' . $single_name . ':', 'text_domain' ),
        'new_item_name'              => __( 'New ' . $single_name . ' Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New' . $single_name, 'text_domain' ),
        'edit_item'                  => __( 'Edit' . $single_name, 'text_domain' ),
        'update_item'                => __( 'Update' . $single_name, 'text_domain' ),
        'view_item'                  => __( 'View' . $single_name, 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate ' . $multi_title . ' with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove ' . $multi_title, 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular ' . $multi_title, 'text_domain' ),
        'search_items'               => __( 'Search ' . $multi_title, 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No ' . $multi_title, 'text_domain' ),
        'items_list'                 => __( $multi_title . ' list', 'text_domain' ),
        'items_list_navigation'      => __( $multi_title . ' list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
    );
    register_taxonomy( 'portfolio', array( 'projects' ), $args );
}
add_action( 'init', 'custom_taxonomy_portfolio');