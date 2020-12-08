<?php

/* enable featured images on posts */
/* add_theme_support( 'post-thumbnails' ); */

function lili_get_styles() {
    wp_enqueue_style('lili_bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '1.0', false);
    wp_enqueue_style('lili_styles', get_template_directory_uri().'/style.css', array('lili_bootstrap'), '1.0', false);
    wp_enqueue_style('lili_responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', false);

}

add_action('wp_enqueue_scripts', 'lili_get_styles');

function lili_get_scripts(){
    /* jquery */
    wp_enqueue_script('lili_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', array(),'3.5.1',  true);
    /* bootstrap bundle */
    wp_enqueue_script('lili_bootstrap_jsbundle', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), '3.5.1',  true);

    wp_enqueue_script('lili_scroll_nav', get_template_directory_uri().'/assets/js/scroll_nav.js', array('lili_jquery'),'1.0',  true);

    wp_enqueue_script('lili_validate_form', get_template_directory_uri().'/assets/js/validate_form.js', array(),'1.0',  true);

}

add_action('wp_enqueue_scripts', 'lili_get_scripts');

?>

