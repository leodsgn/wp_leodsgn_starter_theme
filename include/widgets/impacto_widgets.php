<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* impacto_widgets.php
    /* 
    /* Used to enable widgets
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    if( ! function_exists('impacto_widget') ) {

        function impacto_widget() {

            register_sidebar( array( 
                    'name' => __( 'Social Section', 'impacto' ),
                    'id' => 'impacto_social_widget',
                    'description' => __( 'Used to register social widgets inside the page', 'impacto' ),
                    'class' => '',
             ) );


             register_sidebar( array( 
                    'name' => __( 'Sidebar Section', 'impacto' ),
                    'id' => 'impacto_sidebar_section',
                    'description' => __( 'Used to register other widgets in the sidebar', 'impacto' ),
                    'class' => '',
             ) );

             register_sidebar( array( 
                    'name' => __( 'Search Section', 'impacto' ),
                    'id' => 'impacto_search_section',
                    'description' => __( 'Used to search things in pages', 'impacto' ),
                    'class' => '',
             ) );
        }
    }

     
?>
