<?php

	// PRODUCTS
	add_action( 'init', 'cpt_cases_init' );

	function cpt_cases_init() {

		$labels = array(
			'name'               => _x( 'Cases', 'mint' ),
			'singular_name'      => _x( 'Case', 'mint' ),
			'menu_name'          => _x( 'Cases', 'mint' ),
			'name_admin_bar'     => _x( 'Cases', 'mint' ),
			'add_new'            => _x( 'New case', 'mint' ),
			'add_new_item'       => __( 'Add new case', 'mint' ),
			'new_item'           => __( 'New case', 'mint' ),
			'edit_item'          => __( 'Edit case', 'mint' ),
			'view_item'          => __( 'View case', 'mint' ),
			'all_items'          => __( 'All cases', 'mint' ),
			'search_items'       => __( 'Search cases', 'mint' ),
			'parent_item_colon'  => __( '', 'mint' ),
			'not_found'          => __( '', 'mint' ),
			'not_found_in_trash' => __( '', 'mint' )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'			 		 => 'dashicons-welcome-widgets-menus',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => '' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'thumbnail' )
		);

		register_post_type( 'cpt_cases', $args );

	}

?>
