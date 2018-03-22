<?php

$id    = '135'; 
$member = get_post_meta( $id, 'member', true );

if ( $member ) {
	
	$html = '<div class="member">';
	
	for ( $i = 0; $i < $member; $i++ ) {
		
		$avatar = (int) get_post_meta( $id, 'member_' . $i . '_avatar', true );
		$name = esc_html( get_post_meta( $id, 'member_' . $i . '_name', true ) );
		$desc = get_post_meta( $id, 'member_' . $i . '_description', true );
		$link = esc_html( get_post_meta( $id, 'member_' . $i . '_link', true ) );
		
		$html .= '<div class="member">';
		$html .= wp_get_attachment_image( $avatar, 'large' );
		$html .= '<h3>' . $name . '</h3>';
		$html .= '<p>' . $desc . '</p>';
		$html .= '<p><a href="' . $link . '">' . $link . '</a></p>';
		$html .= '</div>';
	
	}

	$html .= '</div>';

}

echo $html;
