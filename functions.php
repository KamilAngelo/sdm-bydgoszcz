<?php

// adding CSS and JS

function gt_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    wp_enqueue_style('index-style', get_template_directory_uri() . '/css/index-style.css', NULL, "1.0", 'all');
    wp_enqueue_style('page-style', get_template_directory_uri() . '/css/page-style.css', NULL, "1.0", 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, "1.0", 'all');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true );

    
}

add_action('wp_enqueue_scripts', 'gt_setup');

// adding theme support

function gt_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );

}

add_action('after_setup_theme', 'gt_init');

//project post type

function gt_custom_post_type() {
    register_post_type('aktualnosci',
        array(
            'rewrite' => array('slug' => 'aktualnosci'),
            'labels' => array(
                'name' => 'Aktualności',
                'singular_name' => 'Aktualności',
                'add_new_item' => 'Dodaj aktualności',
                'edit_item' => 'Edytuj aktualności'
            ),
            'menu_icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
    );
}
add_action('init', 'gt_custom_post_type');

add_filter( 'upload_mimes', 'custom_mime_types', 1, 1 );
function custom_mime_types( $mime_types ) {
$mime_types['jfif'] = 'image/jfif+xml'; 

return $mime_types;
}
