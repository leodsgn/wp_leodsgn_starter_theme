<?php
    $args = array(
        'post_type' => 'page',
        'name' => 'sobre-nos'
    );

    $query = new WP_Query( $args );
?>

<?php if ( $query->have_posts() ) : ?>
<section class="section section--padding-both section--full section--gradient-right about">
    
        <div class="about__container">
            <?php while ( $query->have_posts() ) : ?>
            <?php $query->the_post(); ?>
            <div class="about__content">
                <h1 class="section__title"><?php the_title(); ?></h1>
               <?php the_content(); ?>
            </div>

            
            <div class="about__images">
                <?php
                    for ($i=0; $i < 3; $i++) { 
                        the_post_thumbnail( 'medium' );
                    }
                ?>
            </div>

            <?php break; endwhile; ?>
            <?php wp_reset_postdata(); ?>
        
        </div>

</section>
<?php endif; ?>
