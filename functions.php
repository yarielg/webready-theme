<?php 

//Adding Custom Logo support to your Theme
function sz_custom_logo_setup() {
    $defaults = array(
        'height'      => 64, 
        'width'       => 204,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'sz_custom_logo_setup' );

//Adding the styles for when wp_head() being fired.	
	function wptt_theme_styles(){
		wp_enqueue_style( 'main_css', get_template_directory_uri(). '/css/main.css');
		//wp_enqueue_style( 'normalize_css', get_template_directory_uri(). '/css/normalize.css');
		wp_enqueue_style( 'googlefont_varela', 'http://fonts.googleapis.com/css?family=Asap:400,500,700,400italic,700italic');
		wp_enqueue_style( 'animation_css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' );
	}

	add_action( 'wp_enqueue_scripts', 'wptt_theme_styles');

//Adding the scripts for when wp_footer() being fired.		
	function wptt_theme_js(){
		
		wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/js/custom.js',array('jquery','aniview_js'));
	}

	add_action( 'wp_enqueue_scripts', 'wptt_theme_js');

//KIRKI
require_once('settings/kirki.config.php');

//Custom Styles
require_once('inc/customizer_theme/custom_styles.php');

//Menus
include_once('inc/menu/menu.php');	

//Metaboxes
include_once('inc/metaboxes/page.php');

//Customizer Theme
/*include_once('inc/customizer_theme/header.php');
include_once('inc/customizer_theme/footer.php');*/

//Widgets
include_once('inc/widgets/widgets.php');



