<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* jumbotron.php
    /* 
    /* Template Name: jumbotron_common
    /* 
    /* ---------------------------------------------------------------------------------------------- */
    
    
     
?>

<section class="section section--full jumbotron">
    
    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'full', array( 'class' => 'jumbotron__image' ) );
        }
    ?>

    <?php $page = get_post_meta( $post->ID, 'impacto_pages_data', true ) ?>
    <?php if ( isset($page['custom_page_message']) ) : ?>
        <h1 class="jumbotron__title text-center"><?php echo $page['custom_page_message']; ?></h1>
    <?php else : ?>
        <h1 class="jumbotron__title"><?php the_title(); ?></h1>
    <?php endif; ?>
</section>
