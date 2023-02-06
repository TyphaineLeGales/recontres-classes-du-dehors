<?php
/**
 * Plugin Name:       Fabpeda Blocks
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       fabpeda-blocks
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

 function register_custom_block_category($categories) {
	$categories[] = array(
		'slug' => 'fabpeda', 
		'title' => 'fabpeda'
	);

	return $categories;
}

if ( version_compare( get_bloginfo( 'version' ), '5.8', '>=' ) ) {
	add_filter( 'block_categories_all', 'register_custom_block_category' );
} else {
	add_filter( 'block_categories', 'register_custom_block_category' );
}

function fab_peda_blocks_block_init() {
	 // register multiple plugins in here
	register_block_type( __DIR__ . '/build/banner-block' );
	register_block_type( __DIR__ . '/build/resource-btn-block' );
	register_block_type( __DIR__ . '/build/key-info-block' );
}

add_action( 'init', 'fab_peda_blocks_block_init' );

