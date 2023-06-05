<?php

function portfolio_assets() {
    wp_enqueue_style('portfolio-style', get_template_directory_uri() . '/css/main.css', microtime());
    // wp_enqueue_script('portfolio-script', get_template_directory_uri() . '/js/script.js', microtime(), true);
    // wp_enqueue_script('portfolio_script', get_template_directory_uri() . '/js/script.js', array(), microtime(), true);
}

add_action('wp_enqueue_scripts', 'portfolio_assets');