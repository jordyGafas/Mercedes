<?php

	// TAX DESIGNERS
	add_action( 'init', 'tax_designer_init', 0 );

	function tax_designer_init() {

		$labels = array(
			'name'              => _x( 'Designers', 'vdp' ),
			'singular_name'     => _x( 'Designer', 'vdp' ),
			'search_items'      => __( 'Search designer' ),
			'all_items'         => __( 'All designers' ),
			'parent_item'       => __( 'Parent designer' ),
			'parent_item_colon' => __( 'Parent designer' ),
			'edit_item'         => __( 'Edit designer' ),
			'update_item'       => __( 'Update designer' ),
			'add_new_item'      => __( 'Add new designer' ),
			'new_item_name'     => __( 'New designer' ),
			'menu_name'         => __( 'Designers' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'designer' ),
		);

		register_taxonomy( 'tax_designer', array( 'product' ), $args );

	}

	// TAX PERIOD
	add_action( 'init', 'tax_period_init', 0 );

	function tax_period_init() {

		$labels = array(
			'name'              => _x( 'Periods', 'vdp' ),
			'singular_name'     => _x( 'Period', 'vdp' ),
			'search_items'      => __( 'Search period' ),
			'all_items'         => __( 'All period' ),
			'parent_item'       => __( 'Parent period' ),
			'parent_item_colon' => __( 'Parent period' ),
			'edit_item'         => __( 'Edit period' ),
			'update_item'       => __( 'Update period' ),
			'add_new_item'      => __( 'Add new period' ),
			'new_item_name'     => __( 'New period' ),
			'menu_name'         => __( 'Periods' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'period' ),
		);

		register_taxonomy( 'tax_period', array( 'product' ), $args );

	}

	// TAX ORIGIN
	add_action( 'init', 'tax_origin_init', 0 );

	function tax_origin_init() {

		$labels = array(
			'name'              => _x( 'Origin', 'vdp' ),
			'singular_name'     => _x( 'Origin', 'vdp' ),
			'search_items'      => __( 'Search origin' ),
			'all_items'         => __( 'All origin' ),
			'parent_item'       => __( 'Parent origin' ),
			'parent_item_colon' => __( 'Parent origin' ),
			'edit_item'         => __( 'Edit origin' ),
			'update_item'       => __( 'Update origin' ),
			'add_new_item'      => __( 'Add new origin' ),
			'new_item_name'     => __( 'New origin' ),
			'menu_name'         => __( 'Origin' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'origin' ),
		);

		register_taxonomy( 'tax_origin', array( 'product' ), $args );

	}

	// TAX MANUFACTURER
	add_action( 'init', 'tax_manufacturer_init', 0 );

	function tax_manufacturer_init() {

		$labels = array(
			'name'              => _x( 'Manufacturer', 'vdp' ),
			'singular_name'     => _x( 'Manufacturer', 'vdp' ),
			'search_items'      => __( 'Search manufacturer' ),
			'all_items'         => __( 'All manufacturer' ),
			'parent_item'       => __( 'Parent manufacturer' ),
			'parent_item_colon' => __( 'Parent manufacturer' ),
			'edit_item'         => __( 'Edit manufacturer' ),
			'update_item'       => __( 'Update manufacturer' ),
			'add_new_item'      => __( 'Add new manufacturer' ),
			'new_item_name'     => __( 'New manufacturer' ),
			'menu_name'         => __( 'Manufacturer' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'manufacturer' ),
		);

		register_taxonomy( 'tax_manufacturer', array( 'product' ), $args );

	}

	// TAX MATERIALS
	add_action( 'init', 'tax_materials_init', 0 );

	function tax_materials_init() {

		$labels = array(
			'name'              => _x( 'Materials', 'vdp' ),
			'singular_name'     => _x( 'Materials', 'vdp' ),
			'search_items'      => __( 'Search materials' ),
			'all_items'         => __( 'All materials' ),
			'parent_item'       => __( 'Parent materials' ),
			'parent_item_colon' => __( 'Parent materials' ),
			'edit_item'         => __( 'Edit materials' ),
			'update_item'       => __( 'Update materials' ),
			'add_new_item'      => __( 'Add new materials' ),
			'new_item_name'     => __( 'New materials' ),
			'menu_name'         => __( 'Materials' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'materials' ),
		);

		register_taxonomy( 'tax_materials', array( 'product' ), $args );

	}

	// TAX CONDITION
	add_action( 'init', 'tax_condition_init', 0 );

	function tax_condition_init() {

		$labels = array(
			'name'              => _x( 'Condition', 'vdp' ),
			'singular_name'     => _x( 'Condition', 'vdp' ),
			'search_items'      => __( 'Search condition' ),
			'all_items'         => __( 'All condition' ),
			'parent_item'       => __( 'Parent condition' ),
			'parent_item_colon' => __( 'Parent condition' ),
			'edit_item'         => __( 'Edit condition' ),
			'update_item'       => __( 'Update condition' ),
			'add_new_item'      => __( 'Add new condition' ),
			'new_item_name'     => __( 'New condition' ),
			'menu_name'         => __( 'Condition' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'condition' ),
		);

		register_taxonomy( 'tax_condition', array( 'product' ), $args );

	}

?>
