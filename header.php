<!DOCTYPE html>

<html>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php bloginfo( 'name' ); ?><?php wp_title( '-') ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

    <header>
        <?php if ( has_custom_logo() ) { ?>
            <?php the_custom_logo(); ?>
        <?php } else { ?>
            <?php if ( is_front_page() && is_home() ) { ?>
            <h1 class="site-title">
                <?php echo get_bloginfo( 'name' ); ?>
            </h1>
            <?php } else { ?>
            <p class="site-title">
                <?php echo get_bloginfo( 'name' ); ?>
            </p>
            <?php } ?>

        <?php } ?>

        <?php   
            wp_nav_menu(
                array (
                    'theme_location' => 'general',
                )      
            ); 
        ?>

    </header>