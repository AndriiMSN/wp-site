<?php
/**
 * mytheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mytheme
 */

/* ADD SCRIPTS AND STYLES */


add_action( 'wp_head', 'style_theme' );

function style_theme(){
 
  wp_register_style( 'swiper_style', 'https://unpkg.com/swiper/swiper-bundle.min.css');
  wp_enqueue_style( 'swiper_style' );

  wp_enqueue_style( 'styles', get_template_directory_uri(  ). '/style.css' );
};

add_action( 'wp_footer', 'scripts_theme' );

function scripts_theme(){

  wp_register_script( 'swiper-js', '//unpkg.com/swiper/swiper-bundle.min.js');
  wp_enqueue_script( 'swiper-js' );
  
  wp_enqueue_script( 'index', get_template_directory_uri(  ) . './js/index.js');
 
};



add_action( 'after_setup_theme' , 'registerMenu' );

function registerMenu(){
  register_nav_menu('top', 'header menu' );
  register_nav_menu('bottom', 'footer menu' );
};



add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'General slider', [
		'label'  => null,
		'labels' => [
			'name'               => 'Main first block', 
			'singular_name'      => 'Main first block', 
			'add_new'            => 'Add slide', 
			'add_new_item'       => 'Add slide', 
			'edit_item'          => 'Edit slide', 
			'new_item'           => 'New slide', 
			'view_item'          => 'View slide', 
			'search_items'       => 'Search slide', 
			'not_found'          => 'Not found', 
			'not_found_in_trash' => 'Not found in trash', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Main first block', 
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, 
		'show_in_admin_bar'   => true,
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-images-alt',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
  ] );
  register_post_type( 'About', [
		'label'  => null,
		'labels' => [
			'name'               => 'About', 
			'singular_name'      => 'About', 
			'add_new'            => 'Add new block', 
			'add_new_item'       => 'Add new item block', 
			'edit_item'          => 'Edit item block', 
			'new_item'           => 'New item block', 
			'view_item'          => 'View item block', 
			'search_items'       => 'Search item block', 
			'not_found'          => 'Not found', 
			'not_found_in_trash' => 'Not found in trash', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'About', 
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, 
		'show_in_admin_bar'   => true,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-page',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
  ] );
  register_post_type( 'Portfolio', [
		'label'  => null,
		'labels' => [
			'name'               => 'Portfolio', 
			'singular_name'      => 'Portfolio',
			'add_new'            => 'Add new portfolio', 
			'add_new_item'       => 'Add new portfolio item', 
			'edit_item'          => 'Edit portfolio item',
			'new_item'           => 'New portfolio item', 
			'view_item'          => 'View portfolio item', 
			'search_items'       => 'Search portfolio item', 
			'not_found'          => 'Not found', 
			'not_found_in_trash' => 'Not found in trash', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Portfolio', 
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, 
		'show_in_admin_bar'   => true, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-portfolio',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
  ] );
  register_post_type( 'News', [
		'label'  => null,
		'labels' => [
			'name'               => 'News', 
			'singular_name'      => 'News',
			'add_new'            => 'Add news', 
			'add_new_item'       => 'Add news',
			'edit_item'          => 'Edit news ', 
			'new_item'           => 'New news',
			'view_item'          => 'View news', 
			'search_items'       => 'Search news', 
			'not_found'          => 'Not found', 
			'not_found_in_trash' => 'Not found in trash', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'News', 
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, 
		'show_in_admin_bar'   => true, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => 8,
		'menu_icon'           => 'dashicons-megaphone',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
  ] );
}




