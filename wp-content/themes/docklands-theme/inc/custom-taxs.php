<?php
if ( ! function_exists( 'custom_taxs' ) ) {

// Register Custom Taxonomy
function custom_taxs() {

	$labels = array(
		'name'                       => _x( 'Product Type', 'Taxonomy General Name', 'odin' ),
		'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'odin' ),
		'menu_name'                  => __( 'Product Type', 'odin' ),
		'all_items'                  => __( 'All items', 'odin' ),
		'parent_item'                => __( 'Parent Item', 'odin' ),
		'parent_item_colon'          => __( 'Parent Item:', 'odin' ),
		'new_item_name'              => __( 'New Item Name', 'odin' ),
		'add_new_item'               => __( 'Add New Item', 'odin' ),
		'edit_item'                  => __( 'Edit Item', 'odin' ),
		'update_item'                => __( 'Update Item', 'odin' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'odin' ),
		'search_items'               => __( 'Search Items', 'odin' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'odin' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'odin' ),
		'not_found'                  => __( 'Not Found', 'odin' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product-type', array( 'product' ), $args );

	$labels = array(
		'name'                       => _x( 'Material', 'Taxonomy General Name', 'odin' ),
		'singular_name'              => _x( 'Material', 'Taxonomy Singular Name', 'odin' ),
		'menu_name'                  => __( 'Material', 'odin' ),
		'all_items'                  => __( 'All items', 'odin' ),
		'parent_item'                => __( 'Parent Item', 'odin' ),
		'parent_item_colon'          => __( 'Parent Item:', 'odin' ),
		'new_item_name'              => __( 'New Item Name', 'odin' ),
		'add_new_item'               => __( 'Add New Item', 'odin' ),
		'edit_item'                  => __( 'Edit Item', 'odin' ),
		'update_item'                => __( 'Update Item', 'odin' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'odin' ),
		'search_items'               => __( 'Search Items', 'odin' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'odin' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'odin' ),
		'not_found'                  => __( 'Not Found', 'odin' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'material', array( 'product' ), $args );

	$labels = array(
		'name'                       => _x( 'Color', 'Taxonomy General Name', 'odin' ),
		'singular_name'              => _x( 'Color', 'Taxonomy Singular Name', 'odin' ),
		'menu_name'                  => __( 'Color', 'odin' ),
		'all_items'                  => __( 'All items', 'odin' ),
		'parent_item'                => __( 'Parent Item', 'odin' ),
		'parent_item_colon'          => __( 'Parent Item:', 'odin' ),
		'new_item_name'              => __( 'New Item Name', 'odin' ),
		'add_new_item'               => __( 'Add New Item', 'odin' ),
		'edit_item'                  => __( 'Edit Item', 'odin' ),
		'update_item'                => __( 'Update Item', 'odin' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'odin' ),
		'search_items'               => __( 'Search Items', 'odin' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'odin' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'odin' ),
		'not_found'                  => __( 'Not Found', 'odin' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'color', array( 'product' ), $args );

	$labels = array(
		'name'                       => _x( 'Price', 'Taxonomy General Name', 'odin' ),
		'singular_name'              => _x( 'Price', 'Taxonomy Singular Name', 'odin' ),
		'menu_name'                  => __( 'Price', 'odin' ),
		'all_items'                  => __( 'All items', 'odin' ),
		'parent_item'                => __( 'Parent Item', 'odin' ),
		'parent_item_colon'          => __( 'Parent Item:', 'odin' ),
		'new_item_name'              => __( 'New Item Name', 'odin' ),
		'add_new_item'               => __( 'Add New Item', 'odin' ),
		'edit_item'                  => __( 'Edit Item', 'odin' ),
		'update_item'                => __( 'Update Item', 'odin' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'odin' ),
		'search_items'               => __( 'Search Items', 'odin' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'odin' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'odin' ),
		'not_found'                  => __( 'Not Found', 'odin' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => false,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'price', array( 'product' ), $args );


}

// Hook into the 'init' action
add_action( 'init', 'custom_taxs', 0 );

}
?>