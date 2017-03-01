<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* functions.php
    /* 
    /* Functions to make the wordpress theme work
    /* 
    /* ---------------------------------------------------------------------------------------------- */

    /* --------------------------------------------------- */
    /* 0. DEFINE CONSTANTS  */
    /* --------------------------------------------------- */

    define('ROOTPATH', get_template_directory());
    define('INCLUDES', ROOTPATH . '/include');

    /* --------------------------------------------------- */
    /* 1. INCLUDES */
    /* --------------------------------------------------- */
    include_once(INCLUDES . '/frontend_functions/impacto_enqueue.php');
    include_once(INCLUDES . '/frontend_functions/setup_theme.php');
    
    include_once(INCLUDES . '/widgets/impacto_widgets.php');
    
    include_once(INCLUDES . '/post_type/events_post_type.php');
    include_once(INCLUDES . '/post_type/materials_post_type.php');
    include_once(INCLUDES . '/post_type/partners_post_type.php');

    include_once(INCLUDES . '/metaboxes/events_metaboxes.php');
    include_once(INCLUDES . '/metaboxes/events_process_data.php');
    include_once(INCLUDES . '/metaboxes/materials_metaboxes.php');
    include_once(INCLUDES . '/metaboxes/materials_process_data.php');
    include_once(INCLUDES . '/metaboxes/partners_metaboxes.php');
    include_once(INCLUDES . '/metaboxes/partners_process_data.php');
    include_once(INCLUDES . '/metaboxes/pages_metaboxes.php');
    include_once(INCLUDES . '/metaboxes/pages_process_data.php');

    include_once(INCLUDES . '/admin/admin_init.php');
    include_once(INCLUDES . '/admin/enqueue_admin.php');
    
    /* --------------------------------------------------- */
    /* 2. SETUP */
    /* --------------------------------------------------- */
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5' );
    add_theme_support( 'custom-logo', array(
        'height'        => 100,
		'width'         => 400,
		'flex-width'    => true
    ) );

    /* --------------------------------------------------- */
    /* 3. ACTIONS AND FILTERS */
    /* --------------------------------------------------- */
    add_action( 'init', 'create_events_post_type' );
    add_action( 'init', 'create_materials_post_type' );
    add_action( 'init', 'create_partners_post_type' );

    add_action( 'after_setup_theme', 'impacto_setup_theme' );
    add_action( 'wp_enqueue_scripts', 'impacto_enqueue' );
    add_action( 'widgets_init', 'impacto_widget' );

    add_action( 'add_meta_boxes', 'create_events_metabox' );
    add_action( 'add_meta_boxes', 'create_materials_metabox' );
    add_action( 'add_meta_boxes', 'create_partners_metabox' );
    add_action( 'add_meta_boxes', 'create_custom_pages_metabox' );

    add_action( 'save_post_events', 'impacto_events_save', 10, 3 );
    add_action( 'save_post_materials', 'impacto_materials_save', 10, 3 );
    add_action( 'save_post_partners', 'impacto_partners_save', 10, 3 );
    add_action( 'save_post_page', 'impacto_custom_pages_save', 10, 3 );

    add_action( 'admin_init', 'impacto_admin_init' );

    /* --------------------------------------------------- */
    /* 4. DEFINE SHORTCODES */
    /* --------------------------------------------------- */


?>
