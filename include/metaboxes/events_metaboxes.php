<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* events_metaboxes.php
    /* 
    /* Custom metaboxes for events post type
    /* 
    /* ---------------------------------------------------------------------------------------------- */
     
    if ( ! function_exists('create_events_metabox ') ) {
        function create_events_metabox() {
            add_meta_box( 'events-boxes-id', __( 'Detalhes do Evento', 'impacto' ), 'display_event_metabox_callback', 'events', 'normal', 'high' );

            /**
            * Meta box display callback.
            *
            * @param WP_Post $post Current post object.
            */
            function display_event_metabox_callback( $post ) {
                ?>

                    <?php
                    
                        $event_data = get_post_meta( $post->ID, 'event_data', true );

                        if( ! $event_data ) {

                            $event_data['date_start'] = '';
                            $event_data['date_ent'] = '';
                            $event_data['time_start'] = '';
                            $event_data['time_end'] = '';
                            $event_data['place'] = '';

                        }
                    
                    ?>

                    <div class="row">

                        <div class="col-lg-6 form-group">
                            <label for="event_date_start"><?php _e('Data do Evento - Início', 'impacto') ?></label>
                            <input type="date" class="form-control" value="<?php echo $event_data['date_start']; ?>" id="event_date_start" name="impacto_event_date_start">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="event_date_end"><?php _e('Data do Evento - Fim', 'impacto') ?></label>
                            <input type="date" class="form-control" id="event_date_end" value="<?php echo $event_data['date_end']; ?>" name="impacto_event_date_end">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="event_time_start"><?php _e('Horas do Evento - Início', 'impacto') ?></label>
                            <input type="time" class="form-control" id="event_time_start" value="<?php echo $event_data['time_start']; ?>" name="impacto_event_time_start">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="event_time_end"><?php _e('Horas do Evento - Fim', 'impacto') ?></label>
                            <input type="time" class="form-control" id="event_time_end" value="<?php echo $event_data['time_end']; ?>" name="impacto_event_time_end">
                        </div>
                        <div class="col-lg-12 form-group">
                            <label for="event_place"><?php _e('Local do Evento', 'impacto') ?></label>
                            <input type="text" class="form-control" id="event_place" value="<?php echo $event_data['place']; ?>" name="impacto_event_place">
                        </div>
                    
                    </div>

                <?php
            }
        }
    }
?>
