<?php 

/*Function to Add style*/

function add_styles(){
    wp_enqueue_style("mainStyle" , get_template_directory_uri()."/style.css");
}

/**
 * Add Actions
 */

add_action( 'wp_enqueue_scripts', 'add_styles' );







?>