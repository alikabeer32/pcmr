<?php

function pcmr_resources(){
  wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'pcmr_resources');

add_theme_support( 'post-thumbnails' );

register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu'),
));

//* Enqueue Google fonts and icons
add_action( 'wp_enqueue_scripts', 'wpb_load_google_fonts' );
function wpb_load_google_fonts() {
 wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Yeseva+One|Khand:600|Noto+Serif|Crimson+Text|Fjalla+One', array(), CHILD_THEME_VERSION );
}


function theme_enqueue_styles(){
        wp_enqueue_style('font-awesomestyle', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
}


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/* My First Custom Post Type */

function my_post_type_slider() {
	register_post_type( 'slider',
                array( 
				'label' => __('Slides'), 
				'singular_label' => __('Slide', 'my_framework'),
				'_builtin' => false,
				'exclude_from_search' => true, // Exclude from Search Results
				'capability_type' => 'page',
				'public' => true, 
				'show_ui' => true,
				'show_in_nav_menus' => false,
				'rewrite' => array(
					'slug' => 'slide-view',
					'with_front' => FALSE,
				),
				'query_var' => "slide", // This goes to the WP_Query schema
				'menu_icon' => get_template_directory_uri() . '/inc/images/slides.png',
				'supports' => array(
						'title',
						'custom-fields',
						'editor',
            					'thumbnail')
					) 
				);
}

add_action('init', 'my_post_type_slider');

add_action( 'init', 'mytheme_setup' );
add_theme_support( 'post-thumbnails' );
function mytheme_setup() {
add_image_size( 'slider-post-thumbnail', 1000, 407, true ); // Slider Thumbnail
}