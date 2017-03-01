<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* materials_metaboxes.php
    /* 
    /* Create metabox for Materials post type
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    if( ! function_exists( 'create_materials_metabox' ) ) {

        function create_materials_metabox() {

            add_meta_box( 'materials-boxes-id', __( 'Link do Material', 'impacto' ), 'display_materials_metabox_callback', 'materials', 'normal', 'high' );


            function display_materials_metabox_callback () {

                ?>

                    <?php
                        $material = get_post_meta( $post_id, 'materials_data', true );

                        if( ! $material ) {

                            $material['material_link'] = '';

                        }


                    ?>

                    <div class="bootstrap-wrapper">
                        <div class="form-group">
                            <label for="material_link">Link</label>
                            <input type="text" class="form-control" id="material_link" value="<?php $material['link']; ?>" name="material_link">
                        </div>
                    </div>

                <?php

            }

        }

    }
     
?>
