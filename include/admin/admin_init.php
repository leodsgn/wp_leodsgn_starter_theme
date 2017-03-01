<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* admin_init.php
    /* 
    /* Functions to be executed when admin init
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    if ( ! function_exists( 'impacto_admin_init' ) ) {
        function impacto_admin_init() {
            add_action( 'admin_enqueue_scripts', 'impacto_admin_enqueue' );
        }
    }
    
     
?>
