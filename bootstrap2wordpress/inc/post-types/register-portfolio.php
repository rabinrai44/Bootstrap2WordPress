<?php

$portfolio = new CPT(array(
    'post_type_name' => 'portfolio',
    'singular' => __('Portfolio', 'bootstrap2wordpress'),
    'plural' => __('Portfolio', 'bootstrap2wordpress'),
    'slug' => 'portfolio'
),

    array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),

    'menu_icon' => 'dashicons-portfolio'


));

$portfolio->register_taxonomy(array(
    'taxonomy_name' => 'portfolio_tags',
    'singular' => __('Portfolio tag', 'bootstrap2wordpress'),
    'plural' => __('Portfolio Tags', 'bootstrap2wordpress'),
    'slug' => 'portfolio-tag'
));

?>
