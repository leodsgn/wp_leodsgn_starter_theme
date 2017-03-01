<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* pages_process_data.php
    /* 
    /* Process data submited by pages
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    
    if( ! function_exists( 'impacto_custom_pages_save' ) ) {

            function impacto_custom_pages_save( $post_id, $post, $update ) {

                if( ! $update ) {
                    return;
                }
                
                $custom_page = array();
                $custom_page['custom_page_message'] = sanitize_text_field( $_POST['impacto_custom_page_message'] );

                update_post_meta( $post_id, 'impacto_pages_data', $custom_page );
            }
    }
     
?>
