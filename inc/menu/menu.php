<?php 

//Para habilitar la opcion Menu en WP
	add_theme_support('menus');

// Registrando un Menu
	function register_theme_menu(){
		register_nav_menus(
			array(
				'primary-menu' => _('Primary Menu'),
				'top-rigth-menu' => _('Top Rigth Menu')
			)
		);
	}

	add_action( 'init', 'register_theme_menu');

 ?>