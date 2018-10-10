<?php 

 function portfolio_post_type(){
 	$labels = array(
 		'name' => 'Portfolio',
 		'singular_name' => 'Portfolio',
 		'add_new' => 'Add Items',
 		'all_items' => 'All Items',
 		'add_new_item' => 'Add item',
 		'edit_item' => 'Edit item',
 		'new_item' => 'New Item',
 		'view_item' => 'View Item',
 		'search_item' => 'Search Portfolio',
 		'not_found' => 'No items found',
 		'not_found_in_trash' => 'No items found in trash',
 		'parent_item_colon' => 'Parent Item'
 	);

 	$args = array(
 		'labels' => $labels,
 		'public' => true,
 		'publicly_queryable' => true,
 		'query_var' =>	true,
 		'rewrite' => true,
 		'capability_type' => 'post',
 		'hierarchical' => false,
 		'supports' => array(
 			'title',
 			'editor',
 			'excerpt',
 			'thumbnail',
 			'revision'
 		),
 		//'taxonomies' => array('category','post_tag'),
 		'menu_icon' => 'http://webreadynow.com/wp-content/uploads/2018/10/portfolio.png',
 		'menu_position' => 5,
 		'exclude_from_search' => false,
 		'register_meta_box_cb' => 'wr_add_image_portfolio_metaboxes',
 		'show_in_menu' => true,
 		'has_archive' => true 
 	);


 	register_post_type('portfolio',$args);
 }

function wr_portfolio_taxonomies(){
	//add new taxonomie hierarchical
	$labels = array(
		'name' => 'Types Portfolio',
		'singular_name' => 'Type Portfolio',
		'search_items' => 'Search Types Portfolio',
		'all_items' => 'All Types Portfolio',
		'parent_item' => 'Parent Type Portfolio',
		'parent_item_colon' => 'Parent Type Portfolio:',
		'edit_item' => 'Edit Type Portfolio',
		'update_item' => 'Update Type Portfolio',
		'add_new_item' => 'Add New Type Portfolio',
		'new_item_name' => 'New Type Portfolio Name',
		'menu_name' => 'Types Portfolio'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'type_portfolio')
	);

	register_taxonomy( 'type_portfolio', array('portfolio'), $args );
}

add_action('init', 'wr_portfolio_taxonomies');

//Crear metaboxes en CPT (Portfolio)
 function wr_add_image_portfolio_metaboxes() {
	add_meta_box(
		'image2',
		'Image Slide 2',
		'wr_image2_portfolio',
		'portfolio',
		'side',
		'default'
	);
	add_meta_box(
		'image3',
		'Image Slide 3',
		'wr_image3_portfolio',
		'portfolio',
		'side',
		'default'
	);
}

function wr_image2_portfolio() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'portfolio_images_mb' );
	// Get the location data if it's already been entered
	$image2 = get_post_meta( $post->ID, 'image2', true );
	// Output the field
	echo '<input type="text" name="image2" value="' . esc_textarea( $image2 )  . '" class="widefat">' ;
}

function wr_image3_portfolio() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'portfolio_images_mb' );
	// Get the location data if it's already been entered
	$image3 = get_post_meta( $post->ID, 'image3', true );
	// Output the field
	echo '<input type="text" name="image3" value="' . esc_textarea( $image3 )  . '" class="widefat">' ;
}

/**
 * Save the metabox data
 */
function wr_save_portfolio_data( $post_id, $post ) {
	// Return if the user doesn't have edit permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	// Verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times.
	if ( ! isset( $_POST['image2'] ) || !isset( $_POST['image3'] ) || ! wp_verify_nonce( $_POST['portfolio_images_mb'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// Now that we're authenticated, time to save the data.
	// This sanitizes the data from the field and saves it into an array $portfolios_meta.
	$portfolios_meta['image2'] = esc_textarea( $_POST['image2'] );
	$portfolios_meta['image3'] = esc_textarea( $_POST['image3'] );
	// Cycle through the $portfolios_meta array.
	// Note, in this example we just have one item, but this is helpful if you have multiple.
	foreach ( $portfolios_meta as $key => $value ) :
		// Don't store custom data twice
		if ( 'revision' === $post->post_type ) {
			return;
		}
		if ( get_post_meta( $post_id, $key, false ) ) {
			// If the custom field already has a value, update it.
			update_post_meta( $post_id, $key, $value );
		} else {
			// If the custom field doesn't have a value, add it.
			add_post_meta( $post_id, $key, $value);
		}
		if ( ! $value ) {
			// Delete the meta key if there's no value
			delete_post_meta( $post_id, $key );
		}
	endforeach;
}
add_action( 'save_post', 'wr_save_portfolio_data', 1, 2 );

add_action('init', 'portfolio_post_type');