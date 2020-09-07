<?php get_header(); ?>

<div style="padding-top: 50px; padding-bottom: 50px;">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : ?>
                <?php the_post(); ?>
                <div class="post">
                <header>
                    <h1><?php the_title(); ?></h1>
                 </header>
                    <?php the_category(); ?>
                    <?php the_tags(); ?>
                    <?php the_date(); ?>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

<?php get_footer(); ?>