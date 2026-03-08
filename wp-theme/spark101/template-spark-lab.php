<?php
/**
 * Template Name: Spark Lab Landing
 * Description: Landing page de Spark Lab (workshops en vivo)
 */
get_header();
?>

<header class="spark-hero">
    <div class="spark-hero__glow"></div>
    <div class="spark-container" style="position:relative;">
        <div class="spark-hero__badge">
            <span class="pulse-dot"></span>
            Laboratorio experimental de sistemas agénticos
        </div>

        <h1>SPARK <span class="gradient-text">LAB</span></h1>
        <h2>Sistemas de IA que trabajan para vos, <span class="accent">24/7</span></h2>

        <p class="spark-hero__desc">
            Un laboratorio práctico donde aprendés a <strong>pensar, diseñar y desplegar sistemas agénticos reales</strong>
            que automatizan tareas, ejecutan procesos y escalan tu negocio.
        </p>

        <div class="spark-hero__actions">
            <a href="<?php echo spark101_whatsapp_url('Quiero sumarme a Spark Lab'); ?>" target="_blank" class="btn btn-primary">🚀 Quiero sumarme</a>
            <a href="#fechas" class="btn btn-outline">Ver fechas ↓</a>
        </div>
    </div>
</header>

<!-- QUÉ ES -->
<section class="spark-section">
    <div class="spark-container">
        <div class="glass-card glow-border" style="padding:2.5rem 3rem;">
            <h3 style="font-size:1.875rem;font-weight:800;margin-bottom:1rem;">
                🧬 ¿Qué es Spark Lab?
            </h3>
            <p style="color:var(--color-text-muted);font-size:1.125rem;line-height:1.7;margin-bottom:2rem;">
                No es un curso tradicional. Es un <strong style="color:var(--color-text);">espacio experimental</strong> donde trabajamos con sistemas agénticos que:
            </p>
            <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));gap:1rem;">
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;border-radius:0.75rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Ejecutan tareas reales (emails, agenda, búsquedas, automatizaciones)</p>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;border-radius:0.75rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Funcionan de forma autónoma, no solo responden</p>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;border-radius:0.75rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Despliegan proyectos completos para tu negocio</p>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;border-radius:0.75rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Trabajan 24/7 en entornos seguros</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OPENCLAW -->
<section class="spark-section" style="padding-top:0;">
    <div class="spark-container">
        <div class="glass-card glow-border" style="padding:2.5rem 3rem;">
            <h3 style="font-size:1.875rem;font-weight:800;margin-bottom:1rem;">
                ⚡ El corazón del laboratorio: OpenClaw
            </h3>
            <p style="color:var(--color-text-muted);font-size:1.125rem;line-height:1.7;margin-bottom:2rem;">
                Trabajamos con <strong style="color:var(--color-text);">OpenClaw</strong>, una arquitectura de agentes que va más allá del chat: ejecuta acciones, toma decisiones y coordina tareas reales.
            </p>
            <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));gap:1rem;">
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Cómo funciona un agente por dentro</p>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Economía de tokens y costos reales</p>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Deploy seguro (Docker, cloud, sandbox)</p>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Diseño del "soul": personalidad y skills</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PARA QUIÉN + SANDBOX -->
<section class="spark-section" style="padding-top:0;">
    <div class="spark-container">
        <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(320px, 1fr));gap:2rem;">
            <div class="glass-card glow-border" style="padding:2rem;">
                <h3 style="font-size:1.5rem;font-weight:800;margin-bottom:1rem;">🎯 ¿Para quién es?</h3>
                <ul class="offering-card__features">
                    <li><span class="check">✓</span> Dueños de PyMEs y negocios</li>
                    <li><span class="check">✓</span> Consultores y freelancers</li>
                    <li><span class="check">✓</span> Equipos que quieren automatizar</li>
                    <li><span class="check">✓</span> Gente que quiere entender IA como sistema</li>
                </ul>
            </div>
            <div class="glass-card glow-border" style="padding:2rem;">
                <h3 style="font-size:1.5rem;font-weight:800;margin-bottom:1rem;">🛡️ Modo Sandbox</h3>
                <ul class="offering-card__features">
                    <li><span class="check">✓</span> Entornos aislados y controlados</li>
                    <li><span class="check">✓</span> Acceso vía Telegram o WhatsApp</li>
                    <li><span class="check">✓</span> No instalás nada en tu computadora</li>
                    <li><span class="check">✓</span> Sin riesgo para tus datos</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- MENTORES -->
<section class="spark-section border-t">
    <div class="spark-container">
        <span class="spark-section__label">Equipo</span>
        <h2 class="spark-section__title">Mentores del laboratorio</h2>

        <div class="mentors-grid">
            <div class="mentor-card glass-card glow-border">
                <div class="mentor-card__header">
                    <div class="mentor-card__avatar">👩‍💻</div>
                    <div>
                        <div class="mentor-card__name">Camila Velasco</div>
                        <div class="mentor-card__role">Fundadora de Spark101</div>
                    </div>
                </div>
                <p>Ingeniera industrial. Especialista en IA aplicada a negocios, automatización y sistemas escalables.</p>
            </div>
            <div class="mentor-card glass-card glow-border">
                <div class="mentor-card__header">
                    <div class="mentor-card__avatar">⚡</div>
                    <div>
                        <div class="mentor-card__name">Agustín Kassis</div>
                        <div class="mentor-card__role">Fundador de La Crypta</div>
                    </div>
                </div>
                <p>Desarrollador full-stack y bitcoiner. Proyectos open-source, estándares abiertos y economías circulares.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA FINAL -->
<section class="spark-section border-t" style="text-align:center;">
    <div class="spark-container">
        <h2 style="font-size:2rem;font-weight:800;margin-bottom:1rem;">¿Listo para construir tu sistema?</h2>
        <p style="color:var(--color-text-muted);margin-bottom:2rem;font-size:1.125rem;">Escribinos y te contamos cómo sumarte a la próxima camada.</p>
        <a href="<?php echo spark101_whatsapp_url('Quiero sumarme a Spark Lab'); ?>" target="_blank" class="btn btn-primary">
            Reservar mi lugar →
        </a>
        <p style="color:var(--color-text-dim);font-size:0.875rem;margin-top:1rem;">Cupos limitados. La inscripción es por WhatsApp.</p>
    </div>
</section>

<?php get_footer(); ?>
