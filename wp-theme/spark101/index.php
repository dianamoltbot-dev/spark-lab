<?php
/**
 * Default template — fallback for all content
 */
get_header();
?>

<main class="spark-section">
    <div class="spark-container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article style="margin-bottom:3rem;">
                <h2 style="font-size:1.875rem;font-weight:800;margin-bottom:1rem;">
                    <a href="<?php the_permalink(); ?>" style="color:var(--color-text);"><?php the_title(); ?></a>
                </h2>
                <div style="color:var(--color-text-muted);line-height:1.7;">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p style="color:var(--color-text-muted);">No hay contenido disponible.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
