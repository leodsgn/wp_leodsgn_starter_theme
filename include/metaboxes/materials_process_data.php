<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* materials_process_data.php
    /* 
    /* Process data for materials
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    if( ! function_exists( 'impacto_materials_save' ) ) {

            function impacto_materials_save( $post_id, $post, $update ) {

                if( ! $update ) {
                    return;
                }
                
                $material = array();
                $material['material_link'] = sanitize_text_field( $_POST['material_link'] );

                update_post_meta( $post_id, 'materials_data', $material );
            }
    }
     
?>
