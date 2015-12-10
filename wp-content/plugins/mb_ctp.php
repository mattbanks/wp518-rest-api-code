<?php
/*
Plugin Name: Custom Post Types
Plugin URI: http://mattbanks.me
Description: Add custom post type support to REST API test site
Author: Matt Banks
Version: 1.0
Author URI: http://mattbanks.me
*/

/**
   * Register a book post type, with REST API support
   *
   * Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
   */
  add_action( 'init', 'my_book_cpt' );
  function my_book_cpt() {
    $labels = array(
        'name'               => _x( 'Movies', 'post type general name', 'mattbanks' ),
        'singular_name'      => _x( 'Movie', 'post type singular name', 'mattbanks' ),
        'menu_name'          => _x( 'Movies', 'admin menu', 'mattbanks' ),
        'name_admin_bar'     => _x( 'Movie', 'add new on admin bar', 'mattbanks' ),
        'add_new'            => _x( 'Add New', 'Movie', 'mattbanks' ),
        'add_new_item'       => __( 'Add New Movie', 'mattbanks' ),
        'new_item'           => __( 'New Movie', 'mattbanks' ),
        'edit_item'          => __( 'Edit Movie', 'mattbanks' ),
        'view_item'          => __( 'View Movie', 'mattbanks' ),
        'all_items'          => __( 'All Movies', 'mattbanks' ),
        'search_items'       => __( 'Search Movies', 'mattbanks' ),
        'parent_item_colon'  => __( 'Parent Movies:', 'mattbanks' ),
        'not_found'          => __( 'No movies found.', 'mattbanks' ),
        'not_found_in_trash' => __( 'No movies found in Trash.', 'mattbanks' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'mattbanks' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'movie' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'show_in_rest'       => true, // SHOW THIS IN THE REST API
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
    );

    register_post_type( 'movie', $args );
}
