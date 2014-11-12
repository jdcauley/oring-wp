<?php
/**
 * Custom functions
 */


function cities_post_type() {
  register_post_type( 'cities',
		array(
			'labels' => array(
				'name' => __( 'Cities' ),
				'singular_name' => __( 'cities' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'taxonomies' => array('category'),
		)
	);
}
add_action( 'init', 'cities_post_type' );