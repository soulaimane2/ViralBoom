<?php 

	/*
	** 
	*/


	/*
	* include the css files and js files
	*/

	require_once("inc/Wp-walker.php");

	function boom_style () {
		wp_enqueue_style( 'style', get_template_directory_uri()."/css/style.css" );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri()."/css/bootstrap.min.css" );
		wp_enqueue_style( 'font', get_template_directory_uri()."/css/font-awesome.min.css" );
		
	}
	function boom_script(){
		wp_deregister_script('jquery');
		wp_register_script('jquery', includes_url().'/js/jquery/jquery.js' ,array(),false,true);
		wp_enqueue_script('jquery');
		wp_enqueue_script('js_bootstrap' , get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
		wp_enqueue_script('scriptjs' , get_template_directory_uri()."/js/script.js",array(),false,true);
	}

	// To add the Style & script 

	add_action('wp_enqueue_scripts','boom_style');
	add_action('wp_enqueue_scripts','boom_script');

	/*
	** Register Menu
	** craeted by soulaimane
	*/

	function menu_register(){
		register_nav_menus(array(
			"bootnav" => "navigation",
			"footermenu" => "footer"
		));
	}

	add_action("init","menu_register");


	function boom_menu(){
		wp_nav_menu(array(
			"theme_location" => "bootnav",
			"menu_class"     => "navigation navbar-nav ",
			"container"=> false
			//"walker" => new WP_Bootstrap_Navwalker()

		));
	}
	function footermenu(){
		wp_nav_menu(array(
			"theme_location" => "footermenu",
			"menu_class" => "footermenu",
			"container_class" => "container menfoot"
		));
	}

	/*
	** Thumbnails support
	*/

	add_theme_support('post-thumbnails');

	/*
	** The excerpt() from 55 word to 75
	*/

	function costum_excerpt($lenght){
		return 75;
	}
	add_filter('excerpt_length','costum_excerpt');

	/**
	remove fields from the comments fields
	*/
	// url
	function remove_website_field($fields) {
    unset($fields['url']);
    return $fields;
	}
 
	add_filter('comment_form_default_fields', 'remove_website_field');
	// email
	function remove_email_field($fields) {
    unset($fields['email']);
    return $fields;
	}
 
	add_filter('comment_form_default_fields', 'remove_email_field');


	/*Rigister a sidebar or widgets*/

	function sideWidgetregister(){
		register_sidebar(array(
			'name' => 'sideViralboombar',
			'id' => 'viralboomid',
			'description' => 'sideViralboombarsideViralboombarsideViralboombarsideViralboombar',
			'class' => 'sideviral',
			'before_widget' => '<div class="colsd">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'

		));
	}

	add_action("widgets_init","sideWidgetregister");

	function Tagsmenu(){
		register_sidebar(array(
			'name' => 'Tagsmenu',
			'id' => 'Tagsmenu',
			'description' => '',
			'class' => 'Tagsmenu',
			'before_widget' => '<div class="Tagsmenu">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'

		));
	}

	add_action("widgets_init","Tagsmenu");

	function Aboutmenu(){
		register_sidebar(array(
			'name' => 'Aboutmenu',
			'id' => 'Aboutmenu',
			'description' => '',
			'class' => 'Aboutmenu',
			'before_widget' => '<div class="Aboutmenu">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>'

		));
	}

	add_action("widgets_init","Aboutmenu");

	/* index Pagination */