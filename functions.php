<?php

	if(function_exists('register_sidebar')){
	    register_sidebar(array(
	        'name' => 'sidebar personalizada',
	        'before_widget' => '<aside class="sidebar">',
	        'after_widget' => '</aside><!-- /sidebar -->',
	        'before_title' => '',
	        'after_title' => '',
	    ));
	}

  	if ( function_exists('add_theme_support')){
		add_theme_support('post-thumbnails');
	}

	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
	function menus_personalizados(){
		register_nav_menus(array(
			'menu-principal' => __('Menu Principal'),
			'menu-carreras-tec' => __('Menu Carreras Tecnicas'),
			'menu-carreras-tec-2' => __('Menu Carreras Tecnicas 2'),
			'menu-carreras-pro' => __('Menu Carreras Profesionales')
		));
	}
	add_action('init', 'menus_personalizados')
	
	
	
?>