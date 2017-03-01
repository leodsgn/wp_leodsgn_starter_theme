<?php
    
    $args_events_jumbotron = array(
        'post_type' => 'events',
        'order' => 'DEC',
        'posts_per_page' => 1,
        'post_status' => 'publish'
    );

    $jumbotron_posts = new WP_Query( $args_events_jumbotron );

?>

<?php if( $jumbotron_posts->have_posts() ) : ?>
<?php while($jumbotron_posts->have_posts() ) : $jumbotron_posts->the_post() ?>

<section class="section section--full jumbotron jumbotron--large jumbotron--main">

    <?php the_post_thumbnail( 'full', array('class' => 'jumbotron__image') ); ?>

    <?php $jumbotron_data = get_post_meta( $post->ID, 'event_data', true ); ?>

    <h1 class="jumbotron__title jumbotron__title--black-bg"><?php the_title(); ?></h1>
    <div class="jumbotron__content-bottom">

        <?php if( isset( $jumbotron_data['place'] ) ) : ?>
        <div class="jumbotron__content-bottom__info">
            <span><i class="ion ion-android-pin"></i> <?php _e('local', 'impacto'); ?></span>
            <p><?php echo $jumbotron_data['place']; ?></p>
        </div>
        <?php endif; ?>

        <?php if( isset( $jumbotron_data['date_start'] ) ) : ?>
        <div class="jumbotron__content-bottom__info">
            <span><i class="ion ion-calendar"></i><?php _e('data', 'impacto'); ?></span>
            <p><?php echo date_i18n( "d \d\\e F \d\\e Y" , strtotime( $jumbotron_data['date_start']) ); ?></p>
        </div>
        <?php endif; ?>

        <?php if( isset( $jumbotron_data['time_start'] ) ) : ?>
        <div class="jumbotron__content-bottom__info">
            <span><i class="ion ion-clock"></i><?php _e('hora', 'impacto'); ?></span>
            <p><?php echo $jumbotron_data['time_start']; ?></p>
        </div>
        <?php endif; ?>


        <div class="jumbotron__content-bottom__info">
            <a href="<?php the_permalink(); ?>" class="btn btn-default button button--success"><?php _e('Quero mais detalhes!', 'impacto'); ?></a>
        </div>
    </div>
    
</section>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
