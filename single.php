<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="hero has-image-bg" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);">	
	
<h1 class="post-title">	
	<small class="category_post"> <?php the_category( ', ' ); ?>	</small>
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>	
	<small class="category_post"> <?php the_time('m/d/Y'); ?>	</small>
</h1>	
</section>
<section class="post-content">	


		<div class="container">
		<div class="row">
			<div class="col">
				<div class="meta">	
	      		
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?> 
				por <?php the_author_posts_link(); ?>  
				
			</div>
			</div>
		</div>
	    <div class="row px-0">
			<!-- Post Top Widget 3 column -->
    		<?php if ( is_active_sidebar( 'post_top_3column' ) ) : ?>
				<div class="" >
        			<?php dynamic_sidebar( 'post_top_3column' ); ?>
        		</div>
						
			<?php endif; ?>	
	      <div class="col-lg-8">

	      	
	    
			<div class="post-body">
				<p class="content-post "><?php the_content() ; ?></p>
			</div>

			<!-- Post Bottom Widget 3 column -->
	    	<?php if ( is_active_sidebar( 'post_bottom_3column' ) ) : ?>
				<div class="col-12" >
        			<?php dynamic_sidebar( 'post_bottom_3column' ); ?>
        		</div>
						
			<?php endif; ?>	
	     
	    </div>
	    <div class="col-lg-4">
	    	<!-- POst Songle Left Widget -->
	    	<?php if ( is_active_sidebar( 'post_single_left' ) ) : ?>
				<div class="col-12" >
        			<?php dynamic_sidebar( 'post_single_left' ); ?>
        		</div>
						
			<?php endif; ?>	
	    </div>
	  </div>

	  <div class="row">	
		<div class="col">	

				<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://web-ready.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		</div>
	  </div>
	  
	</div>
</section>

 <?php endwhile; endif; ?>

<?php get_footer(); ?>