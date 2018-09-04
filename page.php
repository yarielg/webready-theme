<?php
	
	
	$page_id = "";
	if ( is_single() || is_page() ) {
		$page_id = get_the_ID();
	} else if ( is_home() ) {
		$page_id = get_option('page_for_posts');		
	}



    $page_title_option = "on";
	
	if (get_post_meta( $page_id, 'page_title_meta_box_check', true )) {
		$page_title_option = get_post_meta( $page_id, 'page_title_meta_box_check', true );
	}
    
?>

<?php get_header(); ?>

    <div class="page-template">
    	
		<?php if ( (isset($page_title_option)) && ($page_title_option == "on") ) : ?>                        
    <h1 class="text-center"><?php the_title(); ?></h1>
    <?php endif; ?>


<!-- Widget on top of the page -->
	<?php if (is_page() && is_active_sidebar( 'top_page' ) ) : ?>
				<div class="col" >
        			<?php dynamic_sidebar( 'top_page' ); ?>
        		</div>
						
			<?php endif; ?>	
<!--End Widget on top of the page -->

	<?php
     while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div>
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?> 

    </div>


<?php get_footer(); ?>