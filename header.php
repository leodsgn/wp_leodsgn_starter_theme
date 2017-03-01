<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* header.php
    /* 
    /* Wordpress header component
    /* 
    /* ---------------------------------------------------------------------------------------------- */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title><?php bloginfo( 'title' ) ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navigation navigation--full navigation--fixed">
        <div class="navigation__container">

            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo_src = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>

            <div class="navigation__brand">
                <a href="/">
                    <?php if( $logo_src[0] ) : ?>
                    <?php the_custom_logo(); ?>
                    <?php else: ?>
                    <img src="http://placehold.it/250x75">
                    <?php endif; ?>
                </a>
            </div>
            <div class="navigation__nav">             

                <?php
                    wp_nav_menu( array(

                        'theme_location' => 'primary',
                        'menu_class' => 'navigation__nav__list',
                        'container' => 'ul',
                    
                    ) );
                ?>

            </div>
            <div class="navigation__responsive">
                <button type="button" class="navigation__responsive__button"><span></span></button>
            </div>

        </div>
</nav>
    
