<?php
/*
Plugin Name: REST API Metadata
Plugin URI: http://mattbanks.me
Description: Add our Movies metadata to the REST API
Author: Matt Banks
Version: 1.0
Author URI: http://mattbanks.me
*/

add_action( 'rest_api_init', 'mb_register_starship' );
function mb_register_starship() {
    register_api_field( 'movie',
        'director',
        array(
            'get_callback'    => 'mb_get_director',
            'update_callback' => null,
            'schema'          => null,
        )
    );

		register_api_field( 'movie',
        'year_released',
        array(
            'get_callback'    => 'mb_get_year_released',
            'update_callback' => null,
            'schema'          => null,
        )
    );

		register_api_field( 'movie',
        'rating',
        array(
            'get_callback'    => 'mb_get_rating',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

/**
 * Get the value of the "director" field
 *
 * @param array $object Details of current post.
 * @param string $field_name Name of field.
 * @param WP_REST_Request $request Current request
 *
 * @return mixed
 */
function mb_get_director( $object, $field_name, $request ) {
    return get_post_meta( $object[ 'id' ], $field_name, true );
}

/**
 * Get the value of the "year_released" field
 *
 * @param array $object Details of current post.
 * @param string $field_name Name of field.
 * @param WP_REST_Request $request Current request
 *
 * @return mixed
 */
function mb_get_year_released( $object, $field_name, $request ) {
    return get_post_meta( $object[ 'id' ], $field_name, true );
}

/**
 * Get the value of the "rating" field
 *
 * @param array $object Details of current post.
 * @param string $field_name Name of field.
 * @param WP_REST_Request $request Current request
 *
 * @return mixed
 */
function mb_get_rating( $object, $field_name, $request ) {
    return get_post_meta( $object[ 'id' ], $field_name, true );
}
