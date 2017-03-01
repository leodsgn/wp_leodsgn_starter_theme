<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* main-partners.php
    /* 
    /* Template Name: partners_template
    /* 
    /* ---------------------------------------------------------------------------------------------- */

$args = array(
    'post_type' => 'partners',
    'order' => 'DEC',
    'posts_per_page' => 15
);

$partners = new WP_Query( $args );


?>

<?php if( $partners->have_posts() ) : ?>

<section class="section section--full section--padding-both section--gradient-left partners">

    <h1 class="section__title section__title--center">Parceiros</h1>

    <div class="partners__container">

    <?php while( $partners->have_posts() ) : $partners->the_post(); ?>

        <?php $partner_data = get_post_meta( $post->ID, 'partners_data', true ); ?>
        
        <?php if( $partner_data['link'] ) : ?>
        <a target="_blank" rel="nofollow" href="<?php $partner_data['link'] ?>">
            <?php the_post_thumbnail( 'full', array('class' => 'partners__container__logo') ); ?>
        </a>
        <?php else : ?>
            <?php the_post_thumbnail( 'full', array('class' => 'partners__container__logo') ); ?>
        <?php endif; ?>

    <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>

</section>

<?php endif; ?>
