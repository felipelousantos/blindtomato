<?php get_header(); ?>     
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : ?>
                <?php the_post(); ?>
                <div class="post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php get_sidebar( 'mainsidebar' ); ?>

<?php get_footer(); ?>