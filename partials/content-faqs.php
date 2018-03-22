<?php

$id    = '25'; 
$faqs = get_post_meta( $id, 'faq', true );

if ( $faqs ) {
	
	$html = '<div class="faqs">';
	
	for ( $i = 0; $i < $faqs; $i++ ) {
		
		$question = esc_html( get_post_meta( $id, 'faq_' . $i . '_question', true ) );
		$answer = get_post_meta( $id, 'faq_' . $i . '_answer', true );
		
		$html .= '<div class="faq">';
		$html .= '<h3>' . $question . '</h3>';
		$html .= '<p>' . apply_filters( 'meta_content', wp_kses_post( $answer ) ) . '</p>';
		$html .= '</div>';
	
	}

	$html .= '</div>';

}

echo $html;
