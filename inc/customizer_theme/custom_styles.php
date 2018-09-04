<?php 

function sb_theme_customizer_styles(){
 
 global $sb_theme_options;

//TOP BAR THEME VARIABLE
 $sb_theme_options['font_size_top_bar'] = get_theme_mod( 'font_size_top_bar',13 );
 $sb_theme_options['show_top_bar'] = get_theme_mod( 'show_top_bar',true);
 $sb_theme_options['bg_color_top_bar'] = get_theme_mod( 'bg_color_top_bar','#000000');
 $sb_theme_options['font_color_top_bar'] = get_theme_mod( 'font_color_top_bar','#FFFFFF');
 $sb_theme_options['txt_left_top_bar'] = get_theme_mod( 'txt_left_top_bar','In this moment we have a good price!!!');
 //MAIN NAV BAR THEME VARIABLE
 $sb_theme_options['bg_color_main_nav_bar'] = get_theme_mod( 'bg_color_main_nav_bar','#FFFFFF');
 $sb_theme_options['font_color_main_nav_bar'] = get_theme_mod( 'font_color_main_nav_bar','#000000');
 $sb_theme_options['font_size_main_nav_bar'] = get_theme_mod( 'font_size_main_nav_bar');
 //BLOG
 $sb_theme_options['image_main_blog'] = get_theme_mod( 'image_main_blog');
 $sb_theme_options['select_layout_blog'] = get_theme_mod( 'select_layout_blog');
 $sb_theme_options['txt_main_header_blog'] = get_theme_mod( 'txt_main_header_blog');
 $sb_theme_options['txt_secondary_blog'] = get_theme_mod( 'txt_secondary_blog');
 //Footer Copyrigth
 $sb_theme_options['code_footer_copy'] = get_theme_mod( 'code_footer_copy','');
 
}
//This action hook is fired once WordPress, all plugins, and the theme are fully loaded and instantiated.
add_action( 'wp_loaded', 'sb_theme_customizer_styles', 99 );

function sb_theme_custom_styles() {
		global $sb_theme_options;
	 ?>

<!--  TOP BAR  -->
		<style type="text/css">
			ul.top_rigth_menu{ font-size: <?php echo $sb_theme_options['font_size_top_bar'] ?>px }
		</style>

	  <?php

	  if ( !$sb_theme_options['show_top_bar' ] ) {
     ?> 
        <style type="text/css">
            header.top_header {display:none !important;}
        </style>     
     <?php   
    }else{
     ?> 
        <style type="text/css">
            header.top_header {display:flex !important;}
        </style>     
     <?php  
	}

    ?> 
		<style>
			header.top_header{  background: <?php echo $sb_theme_options['bg_color_top_bar'] ?> }
		</style>
    <?php  

    ?> 
		<style>
			ul.top_rigth_menu li a{  color: <?php echo $sb_theme_options['font_color_top_bar'] ?> }
		</style>
    <?php 
	
	?>
	<!--  MAIN NAV BAR -->
		<style type="text/css">
             header.main-header { background: <?php echo $sb_theme_options['bg_color_main_nav_bar']; ?>; }
             .main-header li a, .main-header h1 a { color: <?php echo  $sb_theme_options['font_color_main_nav_bar']; ?>; }
             header.main-header ul{ font-size: <?php echo $sb_theme_options['font_size_main_nav_bar'] ?>px }
         </style>
	<?php 

}
add_action( 'wp_head', 'sb_theme_custom_styles', 99 );
 ?>