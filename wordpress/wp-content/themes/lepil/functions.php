<?php
function WPTheme_register_styles(){

$version=wp_get_theme()->get( 'Version' );
wp_enqueue_style('WPTheme-style',get_template_directory_uri(). "/style.css", array('WPTheme-bootstrap'), $version,'all');
wp_enqueue_style('WPTheme-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css", array(), '5.1.1','all');
wp_enqueue_style('WPTheme-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0','all');

}

add_action('wp_enqueue_scripts','WPTheme_register_styles'); // When wp_enqueue, use the function;


function WPTheme_register_scripts(){

   
    wp_enqueue_script('WPTheme-popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js',array(),'2.9.3',true);
    wp_enqueue_script('WPTheme-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js',array(),'5.5.1',true);
    wp_enqueue_script('WPTheme-main',get_template_directory_uri(),"/js/main.js",array(),'1.0',true);

}

add_action('wp_enqueue_scripts','WPTheme_register_scripts'); // When wp_enqueue, use the function;

function add_file_types_to_uploads($file_types) // use for image format svg
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

add_image_size('my_custom_size',1216,490,true);
add_image_size('formationImgSize',true);

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );