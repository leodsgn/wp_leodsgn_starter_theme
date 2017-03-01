<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* setup.php
    /* 
    /* Setup theme
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    if( !function_exists('impacto_setup_theme')) {
        function impacto_setup_theme(){
            register_nav_menu( 'primary', __('Primary Menu', 'impacto') );
        }
    }
     
?>
