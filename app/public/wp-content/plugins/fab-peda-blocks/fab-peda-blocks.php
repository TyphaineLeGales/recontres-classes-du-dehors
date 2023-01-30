<?php
/**
 * Plugin Name:       fab-peda-blocks
 * Description:       custom blocks for la classe international du dehors
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       fab-peda-blocks
 *
 * @package           fab-peda-banner
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function fab_peda_banner_fab_peda_blocks_block_init() {
	register_block_type( __DIR__ . '/build/banner-block' );
	register_block_type( __DIR__ . '/build/card-block' );
	// register multiple plugins in here
}
add_action( 'init', 'fab_peda_banner_fab_peda_blocks_block_init' );
