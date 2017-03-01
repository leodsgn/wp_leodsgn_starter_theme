<?php
    /* --------------------------------------------------------------------------------------------- */
    /* 
    /* home.php
    /* 
    /* Template Name: home_template
    /* 
    /* ---------------------------------------------------------------------------------------------- */         
?>


<!-- The header section -->
<?php get_header(); ?>

<!-- The content -->
<?php get_template_part( 'templates/main-jumbotron'); ?>
<?php get_template_part( 'templates/main-about'); ?>
<?php get_template_part( 'templates/main-events'); ?>
<?php get_template_part( 'templates/main-partners'); ?>
<?php get_template_part( 'templates/call-to-action'); ?>

<!-- The footer section -->
<?php get_footer(); ?>
