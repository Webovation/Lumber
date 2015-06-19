<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( ! function_exists( 'setup' ) ) {
	function setup() {
		// These actions cleans up the WordPress header
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'wp_shortlink_wp_head' );

		remove_action( 'wp_head', 'feed_links', 2 );
		remove_action( 'wp_head', 'feed_links_extra', 3 );

		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add Editor Style
		add_editor_style();

		// Prevent File Modifications
		if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
			define( 'DISALLOW_FILE_EDIT', true );
		}

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Enable WordPress Menu
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', '_l' ),
		) );
	}
}

add_action( 'after_setup_theme', 'setup' );