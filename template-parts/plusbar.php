<div class="plusbar">

    <?php   
        wp_nav_menu(
            array (
                'theme_location' => 'general',
            )   
        ); 
    ?>

    <?php dynamic_sidebar( 'general' ) ?>

    <p>Footer/Copyright text</p>

</div>