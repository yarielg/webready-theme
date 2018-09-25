<?php 

	//Create widget Area

	function sz_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="sz-widget mx-auto mt-3">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="sz-widget-heading">',
		'after_title' => '</h4>'
	));

}

sz_create_widget( 'Footer 1', 'footer1', 'Display on the footer1' );
sz_create_widget( 'Footer 2', 'footer2', 'Display on the footer2' );
sz_create_widget( 'Footer 3', 'footer3', 'Display on the footer3' );
sz_create_widget( 'Post Top 3 Columns', 'post_top_3column', 'Display widget on top of single post' );
sz_create_widget( 'Post Bottom 3 Columns', 'post_bottom_3column', 'Display widget on Bottom of single post' );
sz_create_widget( 'Top Page', 'top_page', 'Display widget on top of the page' );

/*POST SINGLE*/
sz_create_widget( 'Right Post Left', 'post_single_left', 'Display to the right in Single Post' );

 ?>