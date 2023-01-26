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
        
            // Enqueue editor styles.
            add_editor_style( 'editor-style.css' );

            add_theme_support( 'editor-color-palette', array() );
        }
        endif; // myfirsttheme_setup
        add_action( 'after_setup_theme', 'customBlockTheme_setup' );
?>