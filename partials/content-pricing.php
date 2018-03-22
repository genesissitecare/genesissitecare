<?php

$id          = '12';  
$plans       = get_post_meta( $id, 'plan', true );
$title       = get_post_meta( $id, 'title', true );
$description = get_post_meta( $id, 'description', true );

if ( $plans ) {

	$html = '<div class="pricing">';
	$html .= '<div class="one-third first">';
	$html .= '<h2>' . $title . '</h2>';
	$html .= '<p>' . apply_filters( 'meta_content', wp_kses_post( $description ) ) . '</p>';
	$html .= '</div>';
	
	$html .= '<div class="pricing-table two-thirds">';
	
	for ( $i = 0; $i < $plans; $i++ ) {
		
		$title = esc_html( get_post_meta( $id, 'plan_' . $i . '_title', true ) );
		$price = (int) get_post_meta( $id, 'plan_' . $i . '_price', true );
		$description = esc_html( get_post_meta( $id, 'plan_' . $i . '_description', true ) );
		$link = esc_url( get_post_meta( $id, 'plan_' . $i . '_link', true ) );
		
		$html .= '<div class="plan">';
		$html .= '<h3>' . $title . '</h3>';
		$html .= '<sup>$</sup><big>' . $price . '</big><small>/month</small>';
		$html .= '<em>' . $description . '</em>';
		
		$features = get_post_meta( $id, 'plan_' . $i . '_features', true );

		if ( $features ) {

			$html .= '<ul class="features">';

			for ( $ii = 0; $ii < $features; $ii++ ) {
				
				$feature = esc_html( get_post_meta( $id, 'plan_' . $i . '_features_' . $ii . '_feature', true ) );
				$tooltip = esc_html( get_post_meta( $id, 'plan_' . $i . '_features_' . $ii . '_tooltip', true ) );

				$html .= '<li><i class="fa fa-check"></i> ' . $feature . ' <button class="tooltip-toggle">?</button><p class="tooltip">' . $tooltip . '</p></li>';

			}

			$html .= '</ul>';

		}

		$html .= '<a href="' . $link . '" target="_blank" class="button">Get Started Now</a>';

		$html .= '</div>';
	
	}

	$html .= '</div>';

}

echo $html;
