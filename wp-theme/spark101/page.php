<?php
/**
 * Generic page template
 */
get_header();
?>

<main class="spark-section">
    <div class="spark-container-narrow">
        <?php while (have_posts()) : the_post(); ?>
            <h1 style="font-size:2.5rem;font-weight:800;margin-bottom:2rem;"><?php the_title(); ?></h1>
            <div style="color:var(--color-text-muted);line-height:1.8;font-size:1.0625rem;">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
