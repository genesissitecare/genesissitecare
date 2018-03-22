<?php
/**
 * This file contains widget areas for the Genesis Site Care Theme.
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

// Register Before Footer widget area.
genesis_register_sidebar( array(
	'id'          => 'before-footer',
	'name'        => __( 'Before Footer', 'genesissitecare' ),
	'description' => __( 'Before Footer widget area.', 'genesissitecare' ),
) );

// Register Footer Credits widget area.
genesis_register_sidebar( array(
	'id'          => 'footer-credits',
	'name'        => __( 'Footer Credits', 'genesissitecare' ),
	'description' => __( 'Footer Credits widget area.', 'genesissitecare' ),
) );

//add_action( 'genesis_footer', 'gsc_before_footer', 5 );
/**
 * Display Before Footer widget area.
 *
 * @since 1.0.0
 *
 * @return void
 */
function gsc_before_footer() {

	genesis_widget_area( 'before-footer', array(
		'before' => '<div class="before-footer widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );
	
}

add_action( 'genesis_footer', 'gsc_footer_credits', 10 );
/**
 * Display Footer Credits widget area.
 *
 * @since 1.0.0
 *
 * @return void
 */
function gsc_footer_credits() {

	genesis_widget_area( 'footer-credits', array(
		'before' => '<div class="footer-credits widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );
	
}
