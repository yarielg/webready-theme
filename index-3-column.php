<?php global $sb_theme_options; ?>

<section id="jumbotron">
		<div class="container jumbotron jumbotron-fluid mb-0" style="background-image: url('<?php echo esc_url($sb_theme_options["image_main_blog"]) ?>'); max-width: 100%;background-size: cover;">
			
		  <div class="container">
		    <h1 style="color:#FFF;"><?php echo $sb_theme_options['txt_main_header_blog'] ?></h1>
		    <p style="color:#FFF;"><?php echo $sb_theme_options['txt_secondary_blog'] ?></p>
		  </div>
		</div>
</section>
<section>
	<!-- Secondary Column -->
				<div id="nav-list-categories" style="height: 43px;">
					<?php
					$args = array(
					  'orderby' => 'name',
					  
					  );
					$categories = get_categories( $args );
					foreach ( $categories as $category ) {
						 $args = array(
							'category_name'    => $category->name,
							'orderby'          => 'date',
							'order'            => 'DESC',
							'post_type'        => 'post',
						);
						$posts_array = get_posts( $args );
						$category_id = get_cat_ID( $category->name );
						$category_url = get_category_link( $category_id );
						 ?>
						<?php echo '<a class="badge badge-success" href="'. $category_url .'">
					    
					    ' . $category->name . '</a>	';
					}
					?>
				</div>
</section>
 <div class="container blog">
 	
 	<div class="row px-md-5">
 		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 		<article class="col col-md-6 col-lg-4">
 			<a href="<?php the_permalink(); ?>">
 				<div class="card post">	
 				<div class="author_post">
 					<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?> 
 				</div>
				  <img class="img_post"  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="Card image cap">
				  <div class="card-body">
				  	<p class="category"> <?php the_category( ', ' ); ?></p>
				    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <p class="card-text"><?php echo strip_tags( get_the_excerpt() ); ?></p>
				    <p class="post_date mb-0 text-right text-muted"><?php the_time('d/m/Y'); ?> </p>
				  </div>
				</div>
 			</a>
 		</article>
 		<?php endwhile; ?>
 		<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
 		<?php endif; ?>
 	</div>
</div>