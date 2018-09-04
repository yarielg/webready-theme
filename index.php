<?php

 get_header(); 

 global $shopkeeper_theme_options; 

 $sb_theme_options['select_layout_blog'] = isset($sb_theme_options['select_layout_blog']) ? $sb_theme_options['select_layout_blog'] : 'layout-three-column';

 switch ($sb_theme_options['select_layout_blog']) {
 	case 'layout-three-column':
 		include('index-3-column.php');
 		break;
 	case 'layout-two-column-left':
 		include('index-2-column-left.php');
 		break;
 	default:
 		include('index-3-column.php');
 		break;
 }


 get_footer();