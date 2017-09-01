<?php

//[social-url product="example"]
function shortcode_social_url( $atts ) {
	$args = shortcode_atts(
		array(
			'product' => 'facebook',
		),
		$atts
	);

	return get_field( $args['product'] . '_url', 'option' );
}

//[social-icons class="social-icons"]
function shortcode_social_icons( $atts ) {
	$args = shortcode_atts(
		array(
			'class' => 'social-icons',
		), $atts
	);
	$available_social_medias = [ 'facebook', 'twitter', 'instagram', 'pinterest', 'youtube-play', 'spotify', 'envelope-o' ];

	$html = '';
	$social_media_html = '';
	$class = $args['class'];

	foreach ( $available_social_medias as $sm ) {
		$sm_url = get_field( $sm . '_url', 'option' );
		if ( $sm == 'envelope-o' ) {
			$sm_url = 'mailto:' . $sm_url;
		}
		if ( $sm_url ) {
			$social_media_html .= "<li class='" . $class . "__icon'><a href='$sm_url' target='_blank'><i class='fa fa-$sm'></i></a></li>";
		}
	}

	if ( ! empty( $social_media_html ) ) {
		$html = "<ul class='$class'>";
		$html .= $social_media_html;
		$html .= '</ul>';
	}

	return $html;
}

function initialise_social_shortcodes() {
	add_shortcode( 'social-url', 'shortcode_social_url' );
	add_shortcode( 'social-icons', 'shortcode_social_icons' );
}

add_action( 'init', 'initialise_social_shortcodes', 31 );


