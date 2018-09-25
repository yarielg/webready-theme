<?php 
//remove the tag p of the description
remove_filter('term_description','wpautop');
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

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
    
    //Add image tu categories
	add_theme_support('category-thumbnails');
	add_theme_support( 'post-thumbnails' );

//Parallelize downloads across hostnames for WordPress. 
	/*function parallelize_hostnames($url, $id) {
		 $hostname = par_get_hostname($url); //call supplemental function
		 $url = str_replace(parse_url(get_bloginfo('url'), PHP_URL_HOST), $hostname, $url);
		 return $url;
}
	function par_get_hostname($name) {
		 $subdomains = array('static1.webreadynow.com','static2.webreadynow.com','static3.webreadynow.com'); //add your subdomains here, as many as you want.
		 $host = abs(crc32(basename($name)) % count($subdomains));
		 $hostname = $subdomains[$host];
		 return $hostname;
}
add_filter('wp_get_attachment_url', 'parallelize_hostnames', 10, 2);*/

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

//Add extra fields to category taxonomy
include_once('inc/category_fields/new_fields.php');


