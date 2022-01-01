<?php
/**
 * Plugin Name: PNW Design - Theme Blocks
 * Description: A sticker block for placing images on the page.
 */

add_action( 'init', 'register_pnw_theme_block' );
function register_pnw_theme_block() {
	register_block_type_from_metadata(
		__DIR__,
		array(
			'render_callback' => 'pnw_theme_callback',
		)
	);
}

function pnw_theme_callback( $attributes ) {
	return '<div class="pnw-sticker-block">You said:<p>' . $attributes['message'] . '.</p></div>';
}