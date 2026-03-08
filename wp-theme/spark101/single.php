<?php
/**
 * Single post template
 */
get_header();
?>

<main class="spark-section">
    <div class="spark-container-narrow">
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h1 style="font-size:2.5rem;font-weight:800;margin-bottom:0.5rem;"><?php the_title(); ?></h1>
                <p style="color:var(--color-text-dim);font-size:0.875rem;margin-bottom:2rem;">
                    <?php echo get_the_date(); ?>
                </p>
                <?php if (has_post_thumbnail()) : ?>
                    <div style="margin-bottom:2rem;border-radius:1rem;overflow:hidden;">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                <div style="color:var(--color-text-muted);line-height:1.8;font-size:1.0625rem;">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
