<?php

function WPTheme_dynamic_title(){
    // add dynamic title tag support;
    add_theme_support('title-tag');
    add_theme_support('custom-logo'); // let the user choose his logo
    add_theme_support('post-thumbnails'); // image de couverture de l'article
}

add_action('after_setup_theme','WPTheme_dynamic_title');

function WPTheme_menus(){   // setting menu for WordPress

    $locations=array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);

}

add_action('init','WPTheme_menus');

function WPTheme_register_styles(){

    $version=wp_get_theme()->get( 'Version' );
    wp_enqueue_style('WPTheme-style',get_template_directory_uri(). "/style.css", array('WPTheme-bootstrap'), $version,'all');
    wp_enqueue_style('WPTheme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1','all');
    wp_enqueue_style('WPTheme-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0','all');

}

add_action('wp_enqueue_scripts','WPTheme_register_styles'); // When wp_enqueue, use the function;

function WPTheme_register_scripts(){

    wp_enqueue_script('WPTheme-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js',array(),'3.4.1',true);
    wp_enqueue_script('WPTheme-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(),'1.16.0',true);
    wp_enqueue_script('WPTheme-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),'4.4.1',true);
    wp_enqueue_script('WPTheme-main',get_template_directory_uri(),"/assets/js/main.js",array(),'1.0',true);



}

add_action('wp_enqueue_scripts','WPTheme_register_scripts'); // When wp_enqueue, use the function;

function WPTheme_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '', // entourer la sidebard de h2
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">', // widget HTML dans WordPress
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '', // entourer la sidebard de h2
            'after_title' => '',
            'before_widget' => '', // widget HTML dans WordPress
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );

}

add_action('widgets_init', 'WPTheme_widget_areas');


// ACF image
add_image_size('my_custom_size', 1200, 600, true);

?>