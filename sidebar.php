<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* sidebar.php
    /* 
    /* Template Name: sidebar_template
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    if(is_active_sidebar( 'impacto_sidebar_section' ) ) {
        dynamic_sidebar( 'impacto_sidebar_section' );
    }
     
?>
