<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* partners_metaboxes.php
    /* 
    /* Create partners metaboxes
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    
     
    
    if( ! function_exists( 'create_partners_metabox' ) ) {

        function create_partners_metabox() {

            add_meta_box( 'partners-boxes-id', __( 'Link do Parceiro', 'impacto' ), 'display_partners_metabox_callback', 'partners', 'normal', 'high' );


            function display_partners_metabox_callback () {

                ?>

                    <?php
                        $partner = get_post_meta( $post_id, 'partners_data', true );

                        if( ! $partner ) {

                            $partner['partner_link'] = '';

                        }


                    ?>

                    <div class="bootstrap-wrapper">
                        <div class="form-group">
                            <label for="partner_link">Link</label>
                            <input type="text" class="form-control" id="partner_link" value="<?php $partner['link']; ?>" name="partner_link">
                        </div>
                    </div>

                <?php

            }

        }

    }
     
?>
