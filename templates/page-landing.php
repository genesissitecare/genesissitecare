<?php
/**
 * Genesis Site Care
 *
 * Template Name: Landing Page
 *
 * This file adds the landing page template to the Genesis Site Care Theme.
 *
 * @package   GenesissitecarePro
 * @link      https://seothemes.com/themes/genesissitecare
 * @author    SEO Themes
 * @copyright Copyright © 2017 SEO Themes
 * @license   GPL-2.0+
 */

add_filter( 'body_class', 'gsc_landing_page_body_class' );
/**
 * Add landing page body class to the head.
 *
 * @param  array $classes Array of body classes.
 * @return array $classes Array of body classes.
 */
function gsc_landing_page_body_class( $classes ) {

	$classes[] = 'landing-page';

	return $classes;

}

add_action( 'wp_enqueue_scripts', 'gsc_dequeue_skip_links' );
/**
 * Dequeue Skip Links Script.
 *
 * @return void
 */
function gsc_dequeue_skip_links() {

	wp_dequeue_script( 'skip-links' );

}

// Remove Skip Links.
remove_action( 'genesis_before_header', 'genesis_skip_links', 5 );

// Remove site header elements.
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

// Remove default page header.
remove_action( 'genesis_before_content_sidebar_wrap', 'gsc_page_header' );

// Add title back (removed in /includes/header.php).
add_action( 'genesis_entry_header', 'genesis_do_post_title', 0 );

// Remove navigation.
remove_theme_support( 'genesis-menus' );

// Remove breadcrumbs.
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// Remove footer widgets.
remove_theme_support( 'genesis-footer-widgets' );
remove_action( 'genesis_footer', 'gsc_footer_credits', 10 );

// Remove site footer elements.
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

// Run the Genesis loop.
genesis();
