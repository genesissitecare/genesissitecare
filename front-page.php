<?php
/**
 * Genesis Site Care.
 *
 * This file adds the front page to the Genesis Site Care Theme.
 *
 * @package   GenesissitecarePro
 * @link      https://seothemes.com/themes/genesissitecare
 * @author    SEO Themes
 * @copyright Copyright © 2017 SEO Themes
 * @license   GPL-2.0+
 */

// Force full-width-content layout.
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove default page header.
remove_action( 'genesis_before_content_sidebar_wrap', 'gsc_page_header' );

// Remove content-sidebar-wrap.
add_filter( 'genesis_markup_content-sidebar-wrap', '__return_null' );

// Remove default loop.
remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'gsc_front_page_loop' );
/**
 * Front page content.
 *
 * @since  2.0.0
 *
 * @return void
 */
function gsc_front_page_loop() {

	$id    = get_the_ID();
	$intro = esc_html( get_post_meta( $id, 'intro', true ) );
	$link  = esc_html( get_post_meta( $id, 'link', true ) );
	$cta   = esc_html( get_post_meta( $id, 'cta', true ) );
	$image = (int) get_post_meta( $id, 'image', true );

	?>

	<section class="hero-section page-header" role="banner"><div class="wrap">
		<h1 itemprop="headline"><?php echo $intro; ?></h1>
		<p><a href="<?php echo $link; ?>" class="button large"><?php echo $cta; ?></a></p>
		<?php echo wp_get_attachment_image( $image, 'large' ); ?>
	</div></section>
	
	<section class="services-section"><div class="wrap">
		<?php echo get_template_part( 'partials/content', 'services' ); ?>
	</div></section>
	
	<section class="pricing-section"><div class="wrap">
		<?php echo get_template_part( 'partials/content', 'pricing' ); ?>
	</div></section>

	<?php

}

// Run Genesis.
genesis();
