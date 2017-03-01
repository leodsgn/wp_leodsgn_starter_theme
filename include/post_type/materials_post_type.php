<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* events_post_type.php
    /* 
    /* Create Events post type
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    if( ! function_exists('create_materials_post_type') ) {

        function create_materials_post_type() {

                $labels = array(
                    'name'                  => _x( 'Materiais', 'materials', 'impacto' ),
                    'singular_name'         => _x( 'Material', 'materials', 'impacto' ),
                    'menu_name'             => _x( 'Materiais', 'materials', 'impacto' ),
                    'add_new'               => _x( 'Adicionar Material', 'materials', 'impacto' ),
                    'add_new_item'          => _x( 'Adicionar Novo Material', 'materials', 'impacto' ),
                    'new_item'              => __( 'Novo Material', 'impacto' ),
                    'edit_item'             => __( 'Editar Material', 'impacto' ),
                    'view_item'             => __( 'Visualizar Material', 'impacto' ),
                    'search_items'          => __( 'Buscar Material', 'impacto' ),
                    'not_found'             => __( 'Material não encontrado', 'impacto' ),
                    'not_found_in_trash'    => __( 'Material não encontrado na lixeira', 'impacto' ),
                    'all_items'             => __( 'Todos os Materiais', 'impacto' )
                );

                $args = array(
                    'labels'                => $labels,
                    'description'           => __( 'Tipo de post para materiais', 'impacto' ),
                    'public'                => true,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'show_ui'               => true,
                    'show_in_nav_menus'     => true,
                    'menu_position'         => 5,
                    'menu_icon'             => 'dashicons-book-alt',
                    'capability_type'       => 'post',
		            'has_archive'           => true,
                    'supports'              => array( 'title', 'thumbnail'),
                    // 'taxonomies'     => array(),
                    'rewrite'           => array( 'slug' => 'material' ),
                );

                register_post_type( 'materials' , $args );

        }

    }
     
?>
