<?php get_header(); ?>

<main class="spark-section" style="text-align:center;min-height:60vh;display:flex;align-items:center;">
    <div class="spark-container">
        <div style="font-size:4rem;margin-bottom:1rem;">🔍</div>
        <h1 style="font-size:2.5rem;font-weight:800;margin-bottom:1rem;">404</h1>
        <p style="color:var(--color-text-muted);font-size:1.125rem;margin-bottom:2rem;">
            Esta página no existe o fue movida.
        </p>
        <a href="<?php echo home_url(); ?>" class="btn btn-primary" style="font-size:1rem;padding:0.75rem 1.5rem;">
            ← Volver al inicio
        </a>
    </div>
</main>

<?php get_footer(); ?>
