<?php

function portfolio_custom_post(){

    $Projects_label = array(
        'name' => __('Projects Post', 'textdomain'),
        'singular_name' => __('Projects Post', 'textdomain'),
        'add_new' => __(' Add Projects Post', 'textdomain'),
        'add_new_item' => __('Add New Projects', 'textdomain'),
        'edit_item' => __('Edit Projects Post', 'textdomain'),
        'all_items' => __('Projects Post', 'textdomain')

    );

    $Projects_args = array(
        'labels'  => $Projects_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('Projectspost' , $Projects_args);


    
    $Services_label = array(
        'name' => __('Services Post', 'textdomain'),
        'singular_name' => __('Services Post', 'textdomain'),
        'add_new' => __(' Add Services Post', 'textdomain'),
        'add_new_item' => __('Add New Services', 'textdomain'),
        'edit_item' => __('Edit Services Post', 'textdomain'),
        'all_items' => __('Services Post', 'textdomain')

    );

    $Services_args = array(
        'labels'  => $Services_label,
        'public'  => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'taxonomies' => array('post_tag', 'category'),
        'supports' => array('title', 'editor', 'thumbnail','excerpt')
    );

    register_post_type('Servicespost' , $Services_args);
}

add_action('init','portfolio_custom_post');