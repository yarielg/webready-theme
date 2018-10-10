<?php get_header(); ?>

<section>
				<div id="nav-list-categories" style="height: 43px;">
					<?php

					$terms = get_terms( array(
					    'taxonomy' => 'type_portfolio',
					    'hide_empty' => true,
					) );
					foreach ( $terms as $term ) {
						 echo '<a class="badge badge-success" href="'. get_term_link($term->term_id) . '">' . $term->name . '</a>';
						}
					?>
				</div>
</section>
 <div class="container blog">
 	
 	<div class="row px-md-5">
 		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 		<article class="col-12 col-sm-6 col-lg-4">
 			<a href="<?php the_permalink(); ?>">
 				<div class="card post">	

				  <img class="img_post"  src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="Card image cap">
				  <div class="card-body">
				  	<p class="category"> <?php the_category( ', ' ); ?></p>
				    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <p class="card-text"><?php echo strip_tags( get_the_excerpt() ); ?></p>
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

<?php get_footer(); ?>