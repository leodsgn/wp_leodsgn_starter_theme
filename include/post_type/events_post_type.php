<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* events_post_type.php
    /* 
    /* Create Events post type
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    if( ! function_exists('create_events_post_type') ) {

        function create_events_post_type() {

                $labels = array(
                    'name'                  => _x( 'Eventos', 'event', 'impacto' ),
                    'singular_name'         => _x( 'Evento', 'event', 'impacto' ),
                    'menu_name'             => _x( 'Eventos', 'event', 'impacto' ),
                    'add_new'               => _x( 'Adicionar Evento', 'event', 'impacto' ),
                    'add_new_item'          => _x( 'Adicionar Novo Evento', 'event', 'impacto' ),
                    'new_item'              => __( 'Novo Evento', 'impacto' ),
                    'edit_item'             => __( 'Editar Evento', 'impacto' ),
                    'view_item'             => __( 'Visualizar Evento', 'impacto' ),
                    'search_items'          => __( 'Buscar Eventos', 'impacto' ),
                    'not_found'             => __( 'Não Encontrado', 'impacto' ),
                    'not_found_in_trash'    => __( 'Não Encontrado na Lixeira', 'impacto' ),
                    'all_items'             => __( 'Todos os Eventos', 'impacto' )
                );

                $args = array(
                    'labels'                => $labels,
                    'description'           => __( 'Tipo de post para eventos', 'impacto' ),
                    'public'                => true,
                    'exclude_from_search'   => false,
                    'publicly_queryable'    => true,
                    'show_ui'               => true,
                    'show_in_nav_menus'     => true,
                    'menu_position'         => 5,
                    'menu_icon'             => 'dashicons-album',
                    'capability_type'       => 'post',
		            'has_archive'           => true,
                    'supports'              => array( 'title', 'editor', 'thumbnail', 'slug'),
                    // 'taxonomies'     => array(),
                    'rewrite'           => array( 'slug' => 'evento' ),
                );

                register_post_type( 'events' , $args );

        }

    }
     
?>
