<?php 

include_once('kirki/kirki.php');

//Creating a new control named 'separator'
function kirki_custom_control_separator( $wp_customize ) {

	class Kirki_Control_Separator extends WP_Customize_Control {
		public $type = 'separator';
		public function render_content() {
			if ( ! $this->label ) :
				echo '<hr />';
			else :
				echo '<h3>' . $this->label . '</h3>';
			endif;
		}
	}

	add_filter( 'kirki/control_types', function( $controls ) {
		$controls['separator'] = 'Kirki_Control_Separator';
		return $controls;
	} );
}


//Create Panels 
function sb_theme_add_panels_customizer( $wp_customize ) {

	$wp_customize->add_panel( 'panel_header', array(
		'title'          => esc_html__( 'Header', 'web_ready' ),
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_panel( 'panel_footer', array(
		'title'          => esc_html__( 'Footer', 'web_ready' ),
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
	) );

}
add_action( 'customize_register','sb_theme_add_panels_customizer' );

if ( class_exists( 'Kirki' ) ) {

	// **************************************
	// Configs
	// **************************************
	Kirki::add_config( 'sb_theme', array(
		'capability'        => 'edit_theme_options',
		'option_type'       => 'theme_mod',
		'disable_output'    => true,
	) );

// **************************************
// Sections
// **************************************
//Header	//TOP BAR SECTION
	Kirki::add_section( 'top_bar', array(
		'title'          => esc_attr__('Top Bar', 'web_ready' ),
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'panel'          => 'panel_header',
	) );
			//MAIN NAV BAR
	Kirki::add_section( 'main_nav_bar', array(
		'title'          => esc_attr__('Main Nav Bar', 'web_ready' ),
		'priority'       => 11,
		'capability'     => 'edit_theme_options',
		'panel'          => 'panel_header',
	) );
//Blog 
	Kirki::add_section( 'blog', array(
		'title'          => esc_attr__('Blog', 'web_ready' ),
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
	) );
//Footer Copyright
	Kirki::add_section( 'footer-copyright', array(
		'title'          => esc_attr__('Footer Bottom', 'web_ready' ),
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'panel' => 'panel_footer'
	) );

//******************************************
//Fields
//******************************************

	//Top Bar Section Fields
	Kirki::add_field( 'sb_theme', array(
	'type'        => 'checkbox',
	'settings'    => 'show_top_bar',
	'label'       => esc_attr__( 'Show Top Bar', 'web_ready' ),
	'section'     => 'top_bar',
	'default'     => true,
) );

	Kirki::add_field( 'sb_theme', array(
	'type'        => 'color',
	'settings'    => 'bg_color_top_bar',
	'label'       => __( 'Background Color', 'web_ready' ),
	'section'     => 'top_bar',
	'default'     => '#000000',
	'choices'     => array(
		'alpha' => true,
	)
) );

	Kirki::add_field( 'sb_theme', array(
	'type'        => 'color',
	'settings'    => 'font_color_top_bar',
	'label'       => __( 'Font Color', 'web_ready' ),
	'section'     => 'top_bar',
	'default'     => '#FFFFFF',
	'choices'     => array(
		'alpha' => true,
	)
) );

	Kirki::add_field( 'sb_theme', array(
				'type'        => 'slider',
				'settings'    => 'font_size_top_bar',
				'label'       => esc_attr__( 'Navigation Font Size', 'web_ready' ),
				'section'     => 'top_bar',
				'default'     => '13',
				'choices'     => array(
						'min'  => 11,
						'max'  => 16,
						'step' => 1,
					),
			));

	Kirki::add_field( 'sb_theme', array(
	'type'     => 'textarea',
	'settings' => 'txt_left_top_bar',
	'label'    => __( 'Text Top Bar', 'web_ready' ),
	'section'  => 'top_bar',
	'default'  => esc_attr__( 'In this moment we have a good price!!!', 'web_ready' ),
	'priority' => 10,
) );
	//Main Nav Bar
	Kirki::add_field( 'sb_theme', array(
	'type'        => 'color',
	'settings'    => 'bg_color_main_nav_bar',
	'label'       => __( 'Background Color', 'web_ready' ),
	'section'     => 'main_nav_bar',
	'default'     => '#FFFFFF',
	'choices'     => array(
		'alpha' => true,
	)
) );

	Kirki::add_field( 'sb_theme', array(
	'type'        => 'color',
	'settings'    => 'font_color_main_nav_bar',
	'label'       => __( 'Background Color', 'web_ready' ),
	'section'     => 'main_nav_bar',
	'default'     => '#0000000',
	'choices'     => array(
		'alpha' => true,
	)
) );

	Kirki::add_field( 'sb_theme', array(
				'type'        => 'slider',
				'settings'    => 'font_size_main_nav_bar',
				'label'       => esc_attr__( 'Navigation Font Size', 'web_ready' ),
				'section'     => 'main_nav_bar',
				'default'     => '13',
				'choices'     => array(
						'min'  => 11,
						'max'  => 20,
						'step' => 1,
					),
			));

	//Blog
	Kirki::add_field( 'sb_theme', array(
	'type'        => 'image',
	'settings'    => 'image_main_blog',
	'label'       => esc_attr__( 'Blog Main Image', 'web_ready' ),
	'description' => esc_attr__( 'Upload an Image for the blog banner', 'web_ready' ),
	'section'     => 'blog',
	'default'     => get_template_directory_uri() . '/img/background-blog.png',
) );

	Kirki::add_field( 'theme_config_id', array(
	'type'        => 'radio-image',
	'settings'    => 'select_layout_blog',
	'label'       => esc_html__( 'Select Blog Layout', 'web_ready' ),
	'section'     => 'blog',
	'default'     => 'layout-three-column',
	'priority'    => 10,
	'choices'     => array(
		'layout-three-column'   => get_template_directory_uri() . '/img/theme/icons/blog-three-column-layout.png',
		'layout-two-column-left' => get_template_directory_uri() . '/img/theme/icons/blog-2-column-left-layout.png'
	),
) );

	Kirki::add_field( 'sb_theme', array(
	'type'     => 'textarea',
	'settings' => 'txt_main_header_blog',
	'label'    => __( 'Main Header Blog', 'web_ready' ),
	'section'  => 'blog',
	'default'  => esc_attr__( 'Web Ready Blog', 'web_ready' ),
	'priority' => 10,
) );

	Kirki::add_field( 'sb_theme', array(
	'type'     => 'textarea',
	'settings' => 'txt_secondary_blog',
	'label'    => __( 'Secondary Text Blog', 'web_ready' ),
	'section'  => 'blog',
	'default'  => esc_attr__( 'Here in our blog you can find many resources and tutorials related to web development. The Content is oriented to teach, mainly because we have a great team of collaborators who are experts in the field.', 'web_ready' ),
	'priority' => 10,
) );

//Footer Copyrigth
	Kirki::add_field( 'sb_theme', array(
	'type'        => 'code',
	'settings'    => 'code_footer_copy',
	'label'       => esc_attr__( 'Add footer text', 'web_ready' ),
	'section'     => 'footer-copyright',
	'default'     => '<p>This is an example</p>',
	'choices'     => array(
		'language' => 'html',
	),
) );

}
 ?>