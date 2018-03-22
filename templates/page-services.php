<?php
/**
 * Genesis Site Care
 *
 * Template Name: Services Page
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

add_filter( 'body_class', 'gsc_services_page_body_class' );
/**
 * Add services page body class to the head.
 *
 * @param  array $classes Array of body classes.
 * @return array $classes Array of body classes.
 */
function gsc_services_page_body_class( $classes ) {

	$classes[] = 'services-page';

	return $classes;

}

add_action( 'genesis_entry_content', 'gsc_services_fields' );
/**
 * Display services tables.
 */
function gsc_services_fields() {

	get_template_part( 'partials/content', 'services' );

}

genesis();
