<?php
/**
 * Plugin Name: B Carousel Block
 * Description: Responsive image carousel slider.
 * Version: 1.0.1
 * Author: bPlugins LLC
 * Author URI: http://bplugins.com
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain: carousel-block
 */

// ABS PATH
if ( !defined( 'ABSPATH' ) ) { exit; }

// Constant
define( 'BICB_PLUGIN_VERSION', isset($_SERVER['HTTP_HOST']) && 'localhost' === $_SERVER['HTTP_HOST'] ? time() : '1.0.1' );
define( 'BICB_ASSETS_DIR', plugin_dir_url( __FILE__ ) . 'assets/' );

// B Carousel
class BICBCarousel{
	function __construct(){
		add_action( 'enqueue_block_assets', [$this, 'enqueueBlockAssets'] );
		add_action( 'init', [$this, 'onInit'] );
	}

	function enqueueBlockAssets(){
		wp_enqueue_script( 'swiperJS', BICB_ASSETS_DIR . 'js/swiper.min.js', [], '8.1.4', true );
	}

	function onInit() {
		wp_register_style( 'bicb-carousel-editor-style', plugins_url( 'dist/editor.css', __FILE__ ), [ 'wp-edit-blocks' ], BICB_PLUGIN_VERSION ); // Backend Style
		wp_register_style( 'bicb-carousel-style', plugins_url( 'dist/style.css', __FILE__ ), [ 'wp-editor' ], BICB_PLUGIN_VERSION ); // Frontend Style

		register_block_type( __DIR__, [
			'editor_style'		=> 'bicb-carousel-editor-style',
			'style'				=> 'bicb-carousel-style',
			'render_callback'	=> [$this, 'render']
		] ); // Register Block

		wp_set_script_translations( 'bicb-carousel-editor-script', 'social-share', plugin_dir_path( __FILE__ ) . 'languages' ); // Translate
	}

	function render( $attributes ){
		extract( $attributes );

		$className = $className ?? '';
		$bicbBlockClassName = 'wp-block-bicb-carousel ' . $className . ' align' . $align;

		ob_start(); ?>
		<div class='<?php echo esc_attr( $bicbBlockClassName ); ?>' id='bicbCarousel-<?php echo esc_attr( $cId ) ?>' data-attributes='<?php echo esc_attr( wp_json_encode( $attributes ) ); ?>'></div>

		<?php return ob_get_clean();
	} // Render
}
new BICBCarousel;