	
	<?php  global $sb_theme_options; ?>
	    

	<footer id="main_footer" class="clearfix">
        <div class="container">
        	<div class="row">
        		
				<!-- Widgets Footer -->
				<?php if ( is_active_sidebar( 'footer1' ) ) : ?>
						<div class="col-12 col-md-6 col-lg-4" >
		        			<?php dynamic_sidebar( 'footer1' ); ?>
		        		</div>
						
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer2' ) ) : ?>
						<div class="col-12 col-md-6 col-lg-4" >
		        			<?php dynamic_sidebar( 'footer2' ); ?>
		        		</div>
						
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer3' ) ) : ?>
						<div class="col-12 col-md-6 col-lg-4" >
		        			<?php dynamic_sidebar( 'footer3' ); ?>
		        		</div>
						
				<?php endif; ?>

				


        		
        	</div>
        </div>
  		
		<footer class="footer-copyright">
			<hr class="m-0">
			<?php echo $sb_theme_options['code_footer_copy']; ?>	
		</footer>
	</footer>
	
  	<?php wp_footer(); ?>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>