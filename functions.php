<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* functions.php
    /* 
    /* Functions to make the wordpress theme work
    /* 
    /* ---------------------------------------------------------------------------------------------- */

    /* --------------------------------------------------- */
    /* 0. INCLUDES */
    /* --------------------------------------------------- */

    /* --------------------------------------------------- */
    /* 1. DEFINE CONSTANTS  */
    /* --------------------------------------------------- */

    define('ROOTPATH', get_template_directory());
    define('SCRIPTS', ROOTPATH . '/dist/scripts');
    define('STYLES', ROOTPATH . '/dist/styles');
    define('TEMPLATES', ROOTPATH . '/templates');

    /* --------------------------------------------------- */
    /* 2. SETUP */
    /* --------------------------------------------------- */
    if( !function_exists('enqueue_style_and_scripts') ) {
        function enqueue_style_and_scripts() {
            // register styles
            wp_register_style( 'bootstrap_css', get_template_directory_uri() . '/public/lib/bootstrap/dist/css/bootstrap.min.css');
            wp_register_style( 'main_css', get_template_directory_uri() . '/dist/styles/index.css');

            // enqueue styles
            wp_enqueue_style( 'bootstrap_css');
            wp_enqueue_style( 'main_css');

            // register scripts
            wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/public/lib/bootstrap/dist/js/bootstrap.min.js', array(), false, true);
            wp_register_script( 'main_js', get_template_directory_uri() . '/dist/scripts/index.js', array('bootstrap_js'), 1, true);

            // enqueue scripts
            wp_enqueue_script( 'jquery');
            wp_enqueue_script( 'bootstrap_js');
            wp_enqueue_script( 'main_js');
        }
    }

    add_theme_support( 'menus' );

    if( !function_exists('leodsgn_setup_theme')) {
        function leodsgn_setup_theme(){
            register_nav_menu( 'primary', __('Primary Menu', 'leodsgn') );
        }
    }

    /* --------------------------------------------------- */
    /* 3. LOAD SCRIPTS AND STYLES */
    /* --------------------------------------------------- */
    add_action( 'wp_enqueue_scripts', 'enqueue_style_and_scripts');

    /* --------------------------------------------------- */
    /* 4. ACTIONS AND FILTERS */
    /* --------------------------------------------------- */

    /* --------------------------------------------------- */
    /* 5. DEFINE SHORTCODES */
    /* --------------------------------------------------- */


?>
