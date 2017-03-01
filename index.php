<?php
/* --------------------------------------------------- */
/* index.php
/*
/* The main template file
/* --------------------------------------------------- */
?>

<!-- The header section -->
<?php get_header(); ?>

<!-- The content -->
<?php  get_template_part( 'templates/jumbotron'); ?>
<?php get_template_part( 'templates/blog-posts'); ?>

<!-- The footer section -->
<?php get_footer(); ?>
