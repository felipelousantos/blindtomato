<?php 

function blindtomato_enqueue_style() {
    wp_enqueue_style( 'blindtomato-style', get_stylesheet_uri() ); 
}

add_action( 'wp_enqueue_scripts','blindtomato_enqueue_style' );

function blindtomato_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }

add_action( 'after_setup_theme', 'blindtomato_custom_logo_setup' );

function blindtomato_featured_image_setup() {
    add_theme_support( 'post-thumbnails' );
   }

add_action( 'after_setup_theme', 'blindtomato_featured_image_setup' );

function blindtomato_register_sidebar() {
    register_sidebar( 
        array(
            'name' => 'General sidebar',
            'id' => 'general',
            'description' => 'The site sidebar that shows on the plusbar',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        )
    );
}

add_action( 'widgets_init', 'blindtomato_register_sidebar');

function blindtomato_register_navmenu() {
    register_nav_menus(  
        array(
            'general' => 'General menu',
        )
    );
}

add_action( 'after_setup_theme', 'blindtomato_register_navmenu');

function blindtomato_scripts() {
    wp_enqueue_script( 
        'blindtomato-plusbar', 
        get_template_directory_uri() . '/assets/js/plusbar.js',
        array(),
        '1.0', 
        true
    ); 
}

add_action( 'wp_enqueue_scripts','blindtomato_scripts' );