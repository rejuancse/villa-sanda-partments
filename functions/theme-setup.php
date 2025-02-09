<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ct_setup() {

	load_theme_textdomain( 'villa', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'villa-large', 960, 450, true );
	add_image_size( 'villa-blog', 370, 370, true );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
	/*-------------------------------------------*
	*              Register Navigation
	*------------------------------------------*/
	register_nav_menus( array(
		'primary' 		=> esc_html__( 'Primary', 'ct' ),
		'footer-menu' 	=> esc_html__( 'Footer Menu', 'ct' ),
	) );

	// Gutenberg presets
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-spacing' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-line-height' );
	remove_theme_support( 'core-block-patterns' );

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Font Sizes
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name'      => 'Extra Large',
				'shortName' => 'XL',
				'size'      => 20,
				'slug'      => 'extra-large'
			),
			array(
				'name'      => 'Large',
				'shortName' => 'L',
				'size'      => 18,
				'slug'      => 'large'
			),
		)
	);

	// Background Gradients
	add_theme_support(
		'editor-gradient-presets',
		array(
			array(
				'name'     => 'White to light gray',
				'gradient' => 'linear-gradient(0deg, rgba(242,242,242,1) 0%, rgba(255,255,255,1) 100%)',
				'slug'     => 'white-to-light-gray'
			),
			array(
				'name'     => 'Black to transparent',
				'gradient' => 'linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 100%)',
				'slug'     => 'black-to-transparent',
			),
			array(
				'name'     => 'Low alpha black to transparent',
				'gradient' => 'linear-gradient(0deg, rgba(0,0,0,0.65) 0%, rgba(255,255,255,0) 100%)',
				'slug'     => 'low-alpha-black-to-transparent',
			),
		)
	);

	// Background Colors
	add_theme_support(
		'editor-color-palette', array(
			array(
				'name'	=> 'White',
				'slug'	=> 'white',
				'color'	=> '#FFFFFF',
			),
			array(
				'name'	=> 'Black',
				'slug'	=> 'black',
				'color'	=> '#000000',
			),
		)
	);
}

add_action( 'after_setup_theme', 'ct_setup' );
