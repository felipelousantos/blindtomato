<?php 

function aulaallyson_enqueue_style() {
    wp_enqueue_style( 'aulaallyson-style', get_stylesheet_uri() ); 
}

add_action( 'wp_enqueue_scripts','aulaallyson_enqueue_style' );

function aulaallyson_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }

add_action( 'after_setup_theme', 'aulaallyson_custom_logo_setup' );

function aulaallyson_register_sidebar() {
    register_sidebar( 
        array(
            'name' => 'Main sidebar',
            'id' => 'mainsidebar',
            'description' => 'Testing sidebar',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        )
    );
}

add_action( 'widgets_init', 'aulaallyson_register_sidebar');

function aulaallyson_register_navmenu() {
    register_nav_menus(  
        array(
            'primary' => 'Main primary menu',
            'secundary' => 'My secundary menu',
        )
    );
}

add_action( 'after_setup_theme', 'aulaallyson_register_navmenu');