<div class="plusbar">

<?php   
     wp_nav_menu(
        array (
            'theme_location' => 'primary',
        )   
    ); 
?>

<?php dynamic_sidebar( 'mainsidebar' ) ?>

<p>Footer</p>

</div>