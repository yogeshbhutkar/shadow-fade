<?php
/**
 * Functions and definitions for the Shadow Fade theme.
 *
 * @package ShadowFade
 * @since ShadowFade 1.0
 */

if ( ! function_exists( 'shadow_fade_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since Shadow Fade 1.0
	 *
	 * @return void
	 */
	function shadow_fade_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'shadow_fade_post_format_setup' );
