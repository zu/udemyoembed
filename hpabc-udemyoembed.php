<?php

/**
 * Plugin Name:       udemy oEmbed
 * Plugin URI:        http://homepage-abc.ch/udemy-oembed-plugin/
 * Description:       oEmbeding udemy.com Course pages (proof of conecpt)
 * Version:           0.0.1
 * Author:            Christian Zumbrunnen
 * Author URI:        http://homepage-abc.ch/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       
 * Domain Path:       /languages
 */


// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
	die;
}

// Trying to add support for udemy course pages - https://codex.wordpress.org/Embeds


wp_embed_register_handler( 'udemy', '#https://www.udemy.com/*/', 'wp_embed_handler_udemy' );

function wp_embed_handler_udemy( $matches, $attr, $url, $rawattr ) {

	$embed = sprintf(
			'<iframe src="http://www.udemy.com/" width="%3$spx" height="%2$spx" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>',
			esc_attr($matches[1]),
			esc_attr($matches[2]),
			esc_attr($matches[3]),
			esc_attr($matches[4])
			);

	return apply_filters( 'embed_udemy', $embed, $matches, $attr, $url, $rawattr );
}
