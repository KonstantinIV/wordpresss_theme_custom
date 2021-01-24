<?php


function konsteus_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

}
//add dynamic title
add_action('after_setup_theme', 'konsteus_theme_support');

function konsteus_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}

add_action('init', 'konsteus_menus');

function konsteus_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('konsteus-custom', get_template_directory_uri() . '/style.css' ,array('konsteus-bootstrap'),$version, 'all');
    wp_enqueue_style('konsteus-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' ,array(),'4.4.1', 'all');
    wp_enqueue_style('konsteus-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css' ,array(),'5.13.0', 'all');

}

add_action('wp_enqueue_scripts', 'konsteus_register_styles');

/*
wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer);

$handle is the name for the script.
$src defines where the script is located.
$deps is an array that can handle any script that your new script depends on, such as jQuery.
$ver lets you list a version number.

$in_footer is a boolean parameter (true/false) that allows you to place your scripts 
in the footer of your HTML document rather then in the header, 
so that it does not delay the loading of the DOM tree.
*/
function konsteus_register_scripts(){
    $version = wp_get_theme()->get('Version');

    wp_enqueue_script('konsteus-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js' ,array(),'3.4.1', 'all',true);
    
    wp_enqueue_script('konsteus-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' ,array(),'3.4.1', 'all',true);
    wp_enqueue_script('konsteus-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' ,array(),'4.4.1', 'all',true);
    wp_enqueue_script('konsteus-main', get_template_directory_uri() .'/assets/js/main.js' ,array(),$version, 'all',true);

  
}

add_action('wp_enqueue_scripts', 'konsteus_register_scripts');



function konsteus_widget_areas(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget'  => '</ul>',

        
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );
    register_sidebar(
        array(
            'before_title' => '<h4>',
            'after_title' => '</h4>',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto konsteus-social-list">',
            'after_widget'  => '</ul>',

        
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}


add_action('widgets_init', 'konsteus_widget_areas');
?>

 