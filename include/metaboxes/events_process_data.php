<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* process_data.php
    /* 
    /* Process the informations by saving posts types
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    if( ! function_exists( 'impacto_events_save' ) ) {

            function impacto_events_save( $post_id, $post, $update ) {

                if( ! $update ) {
                    return;
                }

                $event = array();
                $event['date_start'] = sanitize_text_field( $_POST['impacto_event_date_start'] );
                $event['date_end'] = sanitize_text_field( $_POST['impacto_event_date_end'] );
                $event['time_start'] = sanitize_text_field( $_POST['impacto_event_time_start'] );
                $event['time_end'] = sanitize_text_field( $_POST['impacto_event_time_end'] );
                $event['place'] = sanitize_text_field( $_POST['impacto_event_place'] );

                update_post_meta( $post_id, 'event_data', $event );
            }
    }
     
?>
