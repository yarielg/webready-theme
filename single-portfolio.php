<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php

 $slide2 = get_post_meta(get_the_ID(),'image2',true);
 $slide3 = get_post_meta(get_the_ID(),'image3',true);

 ?>

		<!-- Page Content -->
    <div class="container mt-2">
      <div class="row">
        
        <div class="col sz_box_shadow">

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 sz_box_shadow d-block w-100" src="<?php echo $slide2 ?>" alt="">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 sz_box_shadow d-block w-100" src="<?php echo $slide3 ?>" alt="">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <!-- Portfolio Item Heading -->
      <h4 class="my-3 text-center">
       <a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h4>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col" id="portfolio-body">
          <?php the_content() ; ?>
        </div>

      </div>
      <!-- /.row -->
		
  	  <div class="row mb-3">
  	  	<?php if ( is_active_sidebar( 'portfolio_bottom' ) ) : ?>
  				<div class="" >
          			<?php dynamic_sidebar( 'portfolio_bottom' ); ?>
          		</div>
  						
  			<?php endif; ?>	

  	  </div>
    </div>
    <!-- /.container -->

	  
</section>

 <?php endwhile; endif; ?>

<?php get_footer(); ?>