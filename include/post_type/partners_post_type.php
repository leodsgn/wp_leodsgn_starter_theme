<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* partners_post_type.php
    /* 
    /* Create partners post type
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    
    if( ! function_exists('create_partners_post_type') ) {

        function create_partners_post_type() {

                $labels = array(
                    'name'                  => _x( 'Parceiros', 'partners', 'impacto' ),
                    'singular_name'         => _x( 'Parceiro', 'partners', 'impacto' ),
                    'menu_name'             => _x( 'Parceiros', 'partners', 'impacto' ),
                    'add_new'               => _x( 'Adicionar Parceiro', 'partners', 'impacto' ),
                    'add_new_item'          => _x( 'Adicionar Novo Parceiro', 'partners', 'impacto' ),
                    'new_item'              => __( 'Novo Parceiro', 'impacto' ),
                    'edit_item'             => __( 'Editar Parceiro', 'impacto' ),
                    'view_item'             => __( 'Visualizar Parceiro', 'impacto' ),
                    'search_items'          => __( 'Buscar Parceiro', 'impacto' ),
                    'not_found'             => __( 'Parceiro não encontrado', 'impacto' ),
                    'not_found_in_trash'    => __( 'Parceiro não encontrado na lixeira', 'impacto' ),
                    'all_items'             => __( 'Todos os Parceiros', 'impacto' )
                );

                $args = array(
                    'labels'                => $labels,
                    'description'           => __( 'Tipo de post para Parceiros', 'impacto' ),
                    'public'                => true,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'show_ui'               => true,
                    'show_in_nav_menus'     => true,
                    'menu_position'         => 5,
                    'menu_icon'             => 'dashicons-groups',
                    'capability_type'       => 'post',
		            'has_archive'           => true,
                    'supports'              => array( 'title', 'thumbnail'),
                    // 'taxonomies'     => array(),
                    'rewrite'           => array( 'slug' => 'parceiro' ),
                );

                register_post_type( 'partners' , $args );

        }

    }
     
?>
