<?php get_header(); ?>

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
                    <?php the_content(); ?>                </div>
                
            <?php endwhile; ?>
        <?php endif; ?>

        <?php $the_other_posts_categories = new WP_Query( 
            array(
                'posts_per_page' => 3,
                'category__in' => wp_get_post_categories(get_the_ID()),
                'post__not_in' => array( get_the_ID() ),
                'orderby' => 'rand'
            ) 
        ); ?>

        <?php if ( $the_other_posts_categories->have_posts() ) : ?>
            <?php while ( $the_other_posts_categories->have_posts() ) : ?>
                <?php $the_other_posts_categories->the_post(); ?>
                <div class="other-post">
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