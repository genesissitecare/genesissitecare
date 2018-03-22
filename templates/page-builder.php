<?php
/**
 * Genesis Site Care
 *
 * Template Name: Page Builder
 *
 * This file adds the page builder template to the Genesis Site Care
 * theme. It removes everything between the site header and footer
 * leaving a blank template perfect for page builder plugins.
 *
 * @package   GenesissitecarePro
 * @link      https://seothemes.com/themes/genesissitecare
 * @author    SEO Themes
 * @copyright Copyright © 2017 SEO Themes
 * @license   GPL-2.0+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {

	die;

}

add_filter( 'body_class', 'gsc_page_builder_body_class' );
/**
 * Add landing page body class to the head.
 *
 * @param  array $classes Array of body classes.
 * @return array $classes Array of body classes.
 */
function gsc_page_builder_body_class( $classes ) {

	$classes[] = 'page-builder';

	return $classes;

}

// Remove default page header.
remove_action( 'genesis_before_content_sidebar_wrap', 'gsc_page_header' );

// Get site-header.
get_header();

// Custom loop, remove all hooks except entry content.
if ( have_posts() ) :

	the_post();

	do_action( 'genesis_entry_content' );

endif;

// Get site-footer.
get_footer();
