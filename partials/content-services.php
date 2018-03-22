<?php

$id          = '14';  
$services    = get_post_meta( $id, 'service', true );
$title       = get_post_meta( $id, 'title', true );
$description = get_post_meta( $id, 'description', true );

if ( $services ) {
	
	$html = '<div class="services">';

	$html .= '<h2>' . $title . '</h2><br/>';
	
	for ( $i = 0; $i < $services; $i++ ) {
		
		$icon = esc_attr( get_post_meta( $id, 'service_' . $i . '_icon', true ) );
		$title = esc_html( get_post_meta( $id, 'service_' . $i . '_title', true ) );
		$description = esc_html( get_post_meta( $id, 'service_' . $i . '_description', true ) );

		$first = ( $i % 3 == 0 ? ' first' : '' );
		
		$html .= '<div class="service one-third' . $first . '">';
		$html .= '<i class="fa ' . $icon . '"></i>';
		$html .= '<h3>' . $title . '</h3>';
		$html .= '<p>' . $description . '</p>';
		$html .= '</div>';
	
	}

	$html .= '</div>';

}

echo $html;
