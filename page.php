<?php get_header(); ?>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : ?>
                <?php the_post(); ?>
                <div class="page">
                    <?php if ( empty( $post->hide_title ) ) { ?>
                    <header>
                        <h1 class="page-title">
                            <?php the_title(); ?>
                        </h1>
                    </header>
                    <?php } ?>
                    <?php the_date(); ?>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
                
<?php get_footer(); ?>