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
    $hide_title = get_post_meta( $post->ID, 'hide_title', true );
    $checked = checked('on', $hide_title, false);
    echo '<label for="hide-title">Hide title</label>';  
    echo '<input type="checkbox" name="hide-title" ' . $checked . '>';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function blindtomato_save_meta_box( $post_id ) {
    // Save logic goes here. Don't forget to include nonce checks!

    if ( isset( $_POST['hide-title'] ) ) {  
        error_log( print_r( $_POST['hide-title'], true ) );
        update_post_meta( $post_id , 'hide_title', $_POST['hide-title'] );
    } else {
        delete_post_meta( $post_id , 'hide_title' );
    }
}
add_action( 'save_post', 'blindtomato_save_meta_box' );