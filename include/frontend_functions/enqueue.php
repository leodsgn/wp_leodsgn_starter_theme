<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* enqueue.php
    /* 
    /* Enqueue scripts and styles in the current theme
    /* 
    /* ---------------------------------------------------------------------------------------------- */  

    function leodsgn_enqueue(){
        
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

?>



