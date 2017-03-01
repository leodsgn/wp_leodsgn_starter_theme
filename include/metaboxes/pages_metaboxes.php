<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* pages_metaboxes.php
    /* 
    /* Create pages metabox template
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
     
    if ( ! function_exists('create_custom_pages_metabox ') ) {
        function create_custom_pages_metabox() {
            add_meta_box( 'impacto-pages-boxes-id', __( 'Mensagem Customizada para página', 'impacto' ), 'display_custom_pages_metabox_callback', 'page', 'normal', 'high' );

            /**
            * Meta box display callback.
            *
            * @param WP_Post $post Current post object.
            */
            function display_custom_pages_metabox_callback( $post ) {
                ?>

                    <?php
                    
                        $impacto_pages_data = get_post_meta( $post->ID, 'impacto_pages_data', true );

                        if( ! $impacto_pages_data ) {

                            $impacto_pages_data['custom_page_message'] = '';

                        }
                    
                    ?>

                    <div class="row">

                        <div class="col-lg-12 form-group">
                            <label for="impacto_custom_page_message"><?php _e('Mensagem', 'impacto') ?></label>
                            <input type="text" class="form-control" value="<?php echo $impacto_pages_data['custom_page_message']; ?>" id="impacto_custom_page_message" name="impacto_custom_page_message">
                        </div>
                    
                    </div>

                <?php
            }
        }
    }
?>
