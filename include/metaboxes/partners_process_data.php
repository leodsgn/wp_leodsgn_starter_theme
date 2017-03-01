<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* partners_process_data.php
    /* 
    /* Process the data submited by partners post type
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    
     
    
    if( ! function_exists( 'impacto_partners_save' ) ) {

            function impacto_partners_save( $post_id, $post, $update ) {

                if( ! $update ) {
                    return;
                }
                
                $partner = array();
                $partner['partner_link'] = sanitize_text_field( $_POST['partner_link'] );

                update_post_meta( $post_id, 'partners_data', $partner );
            }
    }
     
?>
