<?php
    function customTheme_register_styles(){

        wp_enqueue_style('custom-theme', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'customTheme_register_styles')
?>