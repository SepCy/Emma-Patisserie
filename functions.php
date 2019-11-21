<?php

function load_stylesheets()
{
    wp_register_style('css', get_template_directory_uri() . '/css/main.css', array(), 1, 'all');
    wp_enqueue_style('css');

    wp_register_style('icons', get_template_directory_uri() . '/icons/fontawesome/css/all.css', array(), 1, 'all');
    wp_enqueue_style('icons');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');




add_theme_support('menus');

//Register menus

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
    )
);
