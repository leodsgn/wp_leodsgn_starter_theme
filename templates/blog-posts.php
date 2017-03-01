<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* blog-posts.php
    /* 
    /* Listing all the recent posts available (with pagination)
    /* 
    /* ---------------------------------------------------------------------------------------------- */

    $paged = (get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    $args = array(
        'post_type' => 'post',
        'order' => 'DEC',
        'posts_per_page' => 5,
        'paged' => $paged
    );

    $post_blog = new WP_Query( $args );

?>

<section class="section section--full section--padding-both blog-posts">
    <section class="section section--full blog-posts__header">
        <div class="section__container">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="section__title"><?php the_title(); ?></h1>
                    </div><!-- end col-lg-6 -->

                    <div class="col-lg-6">
                        <?php
                            if ( is_active_sidebar( 'impacto_search_section' ) )  {
                                dynamic_sidebar( 'impacto_search_section' );
                            }
                        ?>
                    </div> <!-- end col-lg-6 -->
                </div> <!-- end row -->
            </div> <!-- end col-lg-12 -->
        </div> <!-- end section__container -->
    </section>


    <section class="section section--full section--padding-both blog-posts__body">

        <div class="section__container">
        
            <div class="col-lg-12">
            
                <div class="row">
                    <div class="col-lg-8">

                        <?php if( $post_blog->have_posts() ) : ?>

                        <?php while( $post_blog->have_posts() ) : $post_blog->the_post() ?>

                        <div id="post-<?php the_ID(); ?>" class="section section--full section--padding-both post">
                            <?php if( has_post_thumbnail() ) : ?>
                                <figure class="post__figure">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'large', array('image-responsive post__figure__image') ); ?>
                                    </a>
                                </figure> <!-- end figure -->
                            <?php endif; ?>
                            <div class="post__content">
                                <h1 class="post__content__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <p class="post__content__text"><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
                                <div class="post__content__footer">
                                    <p class="post__content__footer__description">
                                        <?php echo _e('Postado em ' . get_the_date('d \d\\e F \d\\e Y') . ' às ' . get_the_time() . '.', 'impacto'); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-default button button--success"><?php _e('Leia Mais', 'impacto'); ?></a>
                                </div>
                            </div> <!-- end post__content --> 
                        </div> <!-- end post -->

                        <?php endwhile; ?>

                        <?php
                            the_posts_navigation(array(
                                'prev_text'          => __( 'Previous page', 'impacto' ),
                                'next_text'          => __( 'Next page', 'impacto' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'impacto' ) . ' </span>',
                            ));
                        ?>

                        <?php else : ?>

                        <section class="section section--full post--no-post">
                            <h1>Desculpe, ainda não existe nenhum post feito!</h1>
                        </section>

                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                    </div> <!-- end col-lg-8 -->

                    <div class="col-lg-4">
                    
                    </div> <!-- end col-lg-4 -->
                </div> <!-- end row -->
            
            </div><!-- end col-lg-12 -->

        </div> <!-- end section__container -->
        
    </section>
</section>
