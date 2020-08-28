<?php

/*Function to Add style*/

function add_styles()
{
    wp_enqueue_style("mainStyle", get_template_directory_uri() . "/style.css");
    wp_enqueue_style("menuStyle", get_template_directory_uri() . "/menu.css");
}


function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    register_nav_menu('header', 'En tête du menu');
}

function montheme_register_assets()
{
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function montheme_title_separator()
{
    return '|';
}


// Add Actions

add_action('wp_enqueue_scripts', 'add_styles');
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');





/*Create custom post recipes*/

function custom_post_recipe()
{

    $args = array(

        'labesl' => array(

            'name' => "Recipes",
            'singular_name' => "Recipe"
        ),

        'hierarchical' => false,
        'public' => true,
        'menu_icon' => 'dashicons-food',
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type("recipes", $args);
}

add_action('init', 'custom_post_recipe');


function taxonomy_recipes()
{

    $args = array(

        'labels' => array(
            'name' => "Origins",
            'singular_name' => "Origin"
        ),

        'public' => true,
        'hierarchical' => false,
    );

    register_taxonomy('origin', array('recipes'), $args);
}

add_action('init', 'taxonomy_recipes');


if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
}
