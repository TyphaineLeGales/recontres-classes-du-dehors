<?php 
    if ( ! function_exists( 'customBlockTheme_setup' ) ) :
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which runs
         * before the init hook.
         */
        function customBlockTheme_setup() {
            // Add support for block styles.
            add_theme_support( 'wp-block-styles' );


            wp_enqueue_style('custom-theme', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');

        
            // Enqueue editor styles.
            add_editor_style( 'editor-style.css' );

            remove_theme_support('core-block-patterns');
        }
        endif; // myfirsttheme_setup
        add_action( 'after_setup_theme', 'customBlockTheme_setup' );
?>