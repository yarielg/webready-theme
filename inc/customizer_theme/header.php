<?php 

//Customizer Themes
function sb_customize_header_register( $wp_customize ) {

$wp_customize->add_setting( 'show_top_header', array(
    'default'   => 1, // Set default value
    )
);

$wp_customize->add_setting( 'header_color' , array(
    'default'   => '#0686D8',
    'transport' => 'refresh',
) );

$wp_customize->add_setting( 'header_font_color' , array(
    'default'   => '#0686D8',
    'transport' => 'refresh',
) );

$wp_customize->add_section( 'header_setting_section' , array(
    'title'      => __( 'Header Navigation Setting', 'sz_theme' ),
    'priority'   => 30,
) );

$wp_customize->add_control(  new WP_Customize_Control( $wp_customize, 'show_top_header', // Setting ID
        array(
            'label'     => __( 'Show Top Header', 'sz_theme' ),
            'section'   => 'header_setting_section', // No hyphen
            'description' => 'Show a top bar header above to main header',
            'settings'  => 'show_top_header', // Setting ID
            'type'      => 'checkbox',
        )
    )
);

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
	'label'      => __( 'Background Color', 'sz_theme' ),
	'section'    => 'header_setting_section',
	'settings'   => 'header_color',
) ) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_font_color',
         array(
        	'label'      => __( 'Font Color', 'sz_theme' ),
        	'section'    => 'header_setting_section',
        	'settings'   => 'header_font_color',
) ) );

}
add_action( 'customize_register', 'sb_customize_header_register' );

function sz_customize_header_css()
{
    ?>
         <style type="text/css">
             header.main-header { background: <?php echo get_theme_mod('header_color', '#000000'); ?>; }
         </style>
    <?php

    ?>
         <style type="text/css">
             .main-header li a, .main-header h1 a { color: <?php echo get_theme_mod('header_font_color', '#000000'); ?>; }
         </style>
    <?php

    if ( !get_theme_mod( 'show_top_header' ) ) {
     ?> 
        <style type="text/css">
            header.top_header {display:none !important;}
        </style>     
     <?php   
    }if ( get_theme_mod( 'show_top_header' ) == 1 ) {
     ?> 
        <style type="text/css">
            header.top_header {display:block !important;}
        </style>     
     <?php   
    }

}
add_action( 'wp_head', 'sz_customize_header_css');

 ?>