<?php 

//Customizer Themes
function sz_customizer_footer_register( $wp_customize ) {
//background setting color
$wp_customize->add_setting( 'footer_bg_color' , array(
    'default'   => '#0686D8',
    'transport' => 'refresh',
) );
//Font setting color
$wp_customize->add_setting( 'footer_font_color' , array(
    'default'   => '#0686D8',
    'transport' => 'refresh',
) );
//Link setting color
$wp_customize->add_setting( 'footer_link_color' , array(
    'default'   => '#0686D8',
    'transport' => 'refresh',
) );

$wp_customize->add_section( 'footer_setting_section' , array(
    'title'      => __( 'Footer Setting', 'sz_theme' ),
    'priority'   => 31,
) );


//Control Background Color
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
    'label'      => __( 'Background Color', 'sz_theme' ),
    'section'    => 'footer_setting_section',
    'settings'   => 'footer_bg_color',
) ) );
//Control Font Color
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_font_color', array(
    'label'      => __( 'Font Color', 'sz_theme' ),
    'section'    => 'footer_setting_section',
    'settings'   => 'footer_font_color',
) ) );

//Control Link Color
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_color', array(
    'label'      => __( 'Link Color', 'sz_theme' ),
    'section'    => 'footer_setting_section',
    'settings'   => 'footer_link_color',
) ) );

}
add_action( 'customize_register', 'sz_customizer_footer_register' );

function sz_customize_footer_css()
{
    ?>
         <style type="text/css">
             footer#main_footer { background: <?php echo get_theme_mod('footer_bg_color', '#000000'); ?>; }
         </style>
    <?php

    ?>
         <style type="text/css">
             footer#main_footer { color: <?php echo get_theme_mod('footer_font_color', '#000000'); ?>; }
         </style>
    <?php

    ?>
         <style type="text/css">
             #main_footer ul li a { color: <?php echo get_theme_mod('footer_link_color', '#000000'); ?>; }
         </style>
    <?php
}
add_action( 'wp_head', 'sz_customize_footer_css');

 ?>