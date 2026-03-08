<?php
/**
 * Template Name: Spark Academy Landing
 * Description: Landing page de Spark Academy (cursos grabados / Tutor LMS)
 */
get_header();
?>

<header class="spark-hero">
    <div class="spark-hero__glow"></div>
    <div class="spark-container" style="position:relative;">
        <div class="spark-hero__badge">
            <span class="pulse-dot"></span>
            Cursos de IA aplicada a tu ritmo
        </div>

        <h1>SPARK <span class="gradient-text">ACADEMY</span></h1>
        <h2>Aprendé IA aplicada, <span class="accent">paso a paso</span></h2>

        <p class="spark-hero__desc">
            Cursos grabados con <strong>proyectos prácticos</strong> para que aprendas a diseñar, construir y desplegar
            sistemas de inteligencia artificial cuando quieras, a tu ritmo.
        </p>

        <div class="spark-hero__actions">
            <a href="#cursos" class="btn btn-primary">Ver cursos ↓</a>
            <a href="<?php echo home_url('/spark-lab'); ?>" class="btn btn-outline">🧪 ¿Preferís en vivo? Spark Lab</a>
        </div>
    </div>
</header>

<!-- CURSOS (Tutor LMS) -->
<section id="cursos" class="spark-section">
    <div class="spark-container">
        <span class="spark-section__label">Catálogo</span>
        <h2 class="spark-section__title">Cursos disponibles</h2>
        <p class="spark-section__desc">Contenido actualizado, proyectos reales y acceso a comunidad.</p>

        <div style="margin-top:3rem;">
            <?php
            if (function_exists('tutor_utils')) {
                // Show Tutor LMS course grid
                echo do_shortcode('[tutor_course]');
            } else {
                // Fallback if Tutor LMS not active
            ?>
            <div class="glass-card glow-border" style="padding:3rem;text-align:center;">
                <div style="font-size:3rem;margin-bottom:1rem;">🎓</div>
                <h3 style="font-size:1.5rem;font-weight:800;margin-bottom:0.75rem;">Próximamente</h3>
                <p style="color:var(--color-text-muted);max-width:480px;margin:0 auto 1.5rem;">
                    Estamos preparando los primeros cursos de Spark Academy. Dejanos tu contacto y te avisamos cuando estén disponibles.
                </p>
                <a href="<?php echo spark101_whatsapp_url('Quiero que me avisen cuando salgan los cursos de Spark Academy'); ?>" target="_blank" class="btn btn-primary" style="font-size:1rem;padding:0.75rem 1.5rem;">
                    Avisame cuando salgan →
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- POR QUÉ ACADEMY -->
<section class="spark-section" style="padding-top:0;">
    <div class="spark-container">
        <div class="glass-card glow-border" style="padding:2.5rem 3rem;">
            <h3 style="font-size:1.875rem;font-weight:800;margin-bottom:1.5rem;">
                ¿Por qué Spark Academy?
            </h3>
            <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));gap:1rem;">
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;">
                    <span class="check">✓</span>
                    <div>
                        <strong style="color:var(--color-text);">A tu ritmo</strong>
                        <p style="color:var(--color-text-muted);font-size:0.9375rem;margin-top:0.25rem;">Mirá las clases cuando puedas, repetí lo que necesites.</p>
                    </div>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;">
                    <span class="check">✓</span>
                    <div>
                        <strong style="color:var(--color-text);">Proyectos reales</strong>
                        <p style="color:var(--color-text-muted);font-size:0.9375rem;margin-top:0.25rem;">Cada curso incluye ejercicios aplicables a tu negocio.</p>
                    </div>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;">
                    <span class="check">✓</span>
                    <div>
                        <strong style="color:var(--color-text);">Contenido actualizado</strong>
                        <p style="color:var(--color-text-muted);font-size:0.9375rem;margin-top:0.25rem;">IA evoluciona rápido. Nosotros también.</p>
                    </div>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;">
                    <span class="check">✓</span>
                    <div>
                        <strong style="color:var(--color-text);">Comunidad</strong>
                        <p style="color:var(--color-text-muted);font-size:0.9375rem;margin-top:0.25rem;">Acceso a grupo privado de alumnos para consultas y networking.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA FINAL -->
<section class="spark-section border-t" style="text-align:center;">
    <div class="spark-container">
        <h2 style="font-size:2rem;font-weight:800;margin-bottom:1rem;">¿Querés aprender IA aplicada?</h2>
        <p style="color:var(--color-text-muted);margin-bottom:2rem;font-size:1.125rem;">
            Elegí un curso o escribinos si necesitás orientación.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="#cursos" class="btn btn-primary">Ver cursos ↑</a>
            <a href="<?php echo spark101_whatsapp_url('Necesito orientación sobre los cursos'); ?>" target="_blank" class="btn btn-outline">💬 Orientame</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
