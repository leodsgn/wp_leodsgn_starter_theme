<?php 
    $args2 = array(
        'post_type' => 'page',
        'name' => 'eventos',
        'posts_per_page' => 1
    );

    $event_page = new WP_Query( $args2 );

?>


<?php if( $event_page->have_posts() ) : ?>
<?php while( $event_page->have_posts() ) : $event_page->the_post() ?>
<?php $page_title = $event_page->the_title(); ?>
<?php if( has_post_thumbnail() ) : ?>
<section class="section section--full events" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>')">
<?php endif; ?>
<?php endwhile; ?>
<?php else : ?>
<section class="section section--full events">
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php
    $args = array(
        'post_type' => 'events',
        'order' => 'desc',
        'posts_per_page' => 3
    );

    $query = new WP_Query( $args );
?>

    <h1 class="section__title section__title--center"><?php _e('Eventos', 'impacto'); ?></h1>

        <div class="section events__list">
        
            <?php
                if( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    ?>
                        
                        <div class="card">

                            <figure class="card__figure">
                                <?php if( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'madium', array('class' => 'card__figure__image') ) ?>
                                <?php endif; ?>
                                <figcaption class="card__figure__caption">
                                    <h3 class="card__figure__caption__title">
                                        <?php the_title(); ?>
                                    </h3>
                                </figcaption>
                            </figure>

                            <div class="card__body">
                            
                                <div class="card__body__description">
                                    <?php
                                    echo '<p>' .  wp_trim_words( get_the_content(), 30, '...' ) . '</p>';?>
                                </div>
                                <?php $event_data = get_post_meta( $post->ID, 'event_data', true ); ?>
                                <div id="post-<?php the_ID(); ?>" class="card__body__info">

                                    <?php if( isset($event_data['place']) ) : ?>
                                    <p><i class="ion ion-android-pin"></i><?php echo $event_data['place'] ?></p>
                                    <?php endif; ?>
                                    
                                    <?php if( isset($event_data['time_start']) ) : ?>
                                    <span><i class="ion ion-calendar"></i><?php echo date_i18n( "d \d\\e F \d\\e Y" , strtotime( $event_data['time_start']) ); ?></span>
                                    <?php endif; ?>

                                    <?php if( isset($event_data['time_start']) ) : ?>
                                    <span><i class="ion ion-clock"></i><?php echo  $event_data['time_start'] ?></span>
                                    <?php endif; ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn btn-default button button--success">veja mais!</a>
                            
                            </div>

                        </div>

                    <?php
                endwhile;
                endif;
                wp_reset_postdata();

            ?>

        
    
    </div>

    <a href="/eventos" class="btn btn-default button button--success">Veja todos os eventos!</a>

</section>
