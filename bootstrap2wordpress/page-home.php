<?php
/*
    Template Name: Home Page
*/


get_header(); ?>

<?php get_template_part('content', 'hero'); //get hero section ?>

<?php get_template_part('content', 'optin'); //get optin section ?>

<?php get_template_part('content', 'boost'); //get boost income section ?>

<?php get_template_part('content', 'benefits'); //get benefits section ?>

<?php get_template_part('content', 'coursefeatures'); //get course features section ?>

<?php get_template_part('content', 'projectfeatures'); //get project features section ?>

<?php get_template_part('content', 'projectfeatures'); //get project features section ?>

<?php get_template_part('content', 'featurette'); //get  features video section ?>

<?php get_template_part('content', 'instructor'); //get  features instructor section ?>

<?php get_template_part('content', 'testimonials'); //get  features testimonials section ?>



<?php get_footer(); ?>
