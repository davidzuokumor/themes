<?php get_header(); ?>

<main class="site-main container">
    <?php if (have_posts()) : ?>
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-4 mb-4">
                    <article <?php post_class(); ?>>
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('medium_large');
                            } ?>
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <p><?php the_excerpt(); ?></p>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>
        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>No content found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
