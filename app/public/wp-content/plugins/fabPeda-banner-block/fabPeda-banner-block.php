<?php
/**
 * Plugin Name: FabPeda banner
 * Description: FabPeda custom block for a banner
 * 
 */

 function fabPeda_banner_block_setup()
 {
   wp_enqueue_script('fabPeda-banner-block', plugin_dir_url(__FILE__).'fabPeda-banner-block.js', array('wp-blocks', 'wp-i18n', 'wp-editor'), true, false);
   add_theme_support( 'wp-block-styles' );
   wp_enqueue_style('custom-theme', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
 }
 add_action('enqueue_block_editor_assets', 'fabPeda_banner_block_setup')
 
?>