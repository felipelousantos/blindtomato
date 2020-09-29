<?php

/**
 * Register pages meta box for layout options.
 */
function blindtomato_register_meta_boxes() {
    add_meta_box( 
        'meta-box-id', 
        'My Meta Box', 
        'blindtomato_my_display_callback', 
        'page',
        'side'
    );
}
add_action( 'add_meta_boxes', 'blindtomato_register_meta_boxes' );
 
/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function blindtomato_my_display_callback( $post ) {
    // Display code/markup goes here. Don't forget to include nonces!
    $show_title = get_post_meta( $post->ID, 'show_title', true );
    $checked = checked('on', $show_title, false);
    echo '<label for="show-title">Show title</label>';  
    echo '<input type="checkbox" name="show-title" ' . $checked . '>';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function blindtomato_save_meta_box( $post_id ) {
    // Save logic goes here. Don't forget to include nonce checks!

    if ( isset( $_POST['show-title'] ) ) {  
        error_log( print_r( $_POST['show-title'], true ) );
        update_post_meta( $post_id , 'show_title', $_POST['show-title'] );
    } else {
        delete_post_meta( $post_id , 'show_title' );
    }
}
add_action( 'save_post', 'blindtomato_save_meta_box' );