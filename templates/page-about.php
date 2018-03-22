<?php
/**
 * Genesis Site Care
 *
 * Template Name: About Page
 *
 * This file adds a completely blank page template to the Genesis Site Care
 * theme. It removes everything except for the page content, leaving a
 * completely blank template with no site header or site footer.
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

add_filter( 'body_class', 'gsc_about_page_body_class' );
/**
 * Add about page body class to the head.
 *
 * @param  array $classes Array of body classes.
 * @return array $classes Array of body classes.
 */
function gsc_about_page_body_class( $classes ) {

	$classes[] = 'about-page';

	return $classes;

}

add_action( 'genesis_entry_content', 'gsc_about_fields' );
/**
 * Display about tables.
 */
function gsc_about_fields() {

	get_template_part( 'partials/content', 'team' );

}

genesis();
