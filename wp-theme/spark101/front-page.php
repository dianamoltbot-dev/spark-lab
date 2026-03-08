<?php
/**
 * Front Page Template — Spark101 Hub
 * Unifica Spark Lab + Spark Academy desde una sola home
 */
get_header();
?>

<!-- HERO -->
<header class="spark-hero">
    <div class="spark-hero__glow"></div>
    <div class="spark-container" style="position:relative;">

        <div class="spark-hero__badge">
            <span class="pulse-dot"></span>
            Tecnología que trabaja para vos
        </div>

        <h1>SPARK <span class="gradient-text">101</span></h1>

        <h2>Aprendé, construí y desplegá <span class="accent">sistemas de IA reales</span></h2>

        <p class="spark-hero__desc">
            Dos caminos, un mismo objetivo: que la tecnología <strong>trabaje para tu negocio</strong>.
            Desde workshops en vivo hasta cursos grabados paso a paso.
        </p>

        <div class="spark-hero__actions">
            <a href="#ofertas" class="btn btn-primary">Explorar opciones ↓</a>
            <a href="<?php echo spark101_whatsapp_url('Quiero info de Spark101'); ?>" target="_blank" class="btn btn-outline">💬 Hablemos</a>
        </div>
    </div>
</header>

<!-- OFERTAS: SPARK LAB + SPARK ACADEMY -->
<section id="ofertas" class="spark-section">
    <div class="spark-container">
        <span class="spark-section__label">Nuestras propuestas</span>
        <h2 class="spark-section__title">Elegí tu camino</h2>
        <p class="spark-section__desc">Dos formatos diseñados para diferentes formas de aprender y aplicar IA.</p>

        <div class="offerings-grid">

            <!-- SPARK LAB -->
            <div class="offering-card glass-card glow-border observe-fade">
                <div class="offering-card__icon">🧪</div>
                <h3>Spark Lab</h3>
                <p>
                    Workshops en vivo donde diseñamos y desplegamos <strong>sistemas agénticos reales</strong>.
                    Formato intensivo, grupal, con mentores en directo.
                </p>
                <ul class="offering-card__features">
                    <li><span class="check">✓</span> Sesiones en vivo con práctica real</li>
                    <li><span class="check">✓</span> Grupos reducidos con mentoría directa</li>
                    <li><span class="check">✓</span> Tu propio agente funcionando al final</li>
                    <li><span class="check">✓</span> Arquitectura, deploy y seguridad</li>
                </ul>
                <div style="margin-top:1.5rem;">
                    <a href="<?php echo home_url('/spark-lab'); ?>" class="btn btn-primary" style="font-size:1rem;padding:0.75rem 1.5rem;">
                        Ver Spark Lab →
                    </a>
                </div>
            </div>

            <!-- SPARK ACADEMY -->
            <div class="offering-card glass-card glow-border observe-fade">
                <div class="offering-card__icon">🎓</div>
                <h3>Spark Academy</h3>
                <p>
                    Cursos grabados paso a paso para aprender a <strong>tu ritmo</strong>.
                    Desde lo básico hasta desplegar agentes de IA en producción.
                </p>
                <ul class="offering-card__features">
                    <li><span class="check">✓</span> Aprendé cuando quieras, a tu ritmo</li>
                    <li><span class="check">✓</span> Contenido actualizado constantemente</li>
                    <li><span class="check">✓</span> Proyectos prácticos incluidos</li>
                    <li><span class="check">✓</span> Acceso a comunidad de alumnos</li>
                </ul>
                <div style="margin-top:1.5rem;">
                    <a href="<?php echo home_url('/spark-academy'); ?>" class="btn btn-primary" style="font-size:1rem;padding:0.75rem 1.5rem;">
                        Ver cursos →
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- QUÉ HACEMOS -->
<section class="spark-section">
    <div class="spark-container">
        <div class="glass-card glow-border" style="padding:2.5rem 3rem;">
            <h3 style="font-size:1.875rem;font-weight:800;margin-bottom:1rem;">
                <span style="font-size:1.5rem;margin-right:0.5rem;">⚡</span>
                ¿Por qué Spark101?
            </h3>
            <p style="color:var(--color-text-muted);font-size:1.125rem;line-height:1.7;margin-bottom:2rem;">
                No enseñamos "prompts mágicos". Construimos <strong style="color:var(--color-text);">sistemas reales</strong>
                que automatizan, deciden y escalan. IA como infraestructura, no como moda.
            </p>
            <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));gap:1rem;">
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;border-radius:0.75rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Agentes que trabajan 24/7 — no solo responden preguntas</p>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;border-radius:0.75rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Foco en negocios reales: PyMEs, profesionales, consultores</p>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;border-radius:0.75rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Seguridad y privacidad desde el diseño</p>
                </div>
                <div style="display:flex;align-items:flex-start;gap:0.75rem;padding:1rem;border-radius:0.75rem;">
                    <span class="check">✓</span>
                    <p style="color:var(--color-text-muted);">Costos reales, sin humo: economía de tokens y deploy</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="spark-section" style="padding-top:0;">
    <div class="spark-container">
        <div class="stats-grid">
            <div class="stat-card glass-card">
                <div class="stat-card__value">2</div>
                <div class="stat-card__label">Programas activos</div>
            </div>
            <div class="stat-card glass-card">
                <div class="stat-card__value">24/7</div>
                <div class="stat-card__label">Agentes en producción</div>
            </div>
            <div class="stat-card glass-card">
                <div class="stat-card__value">100%</div>
                <div class="stat-card__label">Práctico y aplicable</div>
            </div>
            <div class="stat-card glass-card">
                <div class="stat-card__value">🇦🇷</div>
                <div class="stat-card__label">Hecho en Argentina</div>
            </div>
        </div>
    </div>
</section>

<!-- MENTORES -->
<section class="spark-section border-t">
    <div class="spark-container">
        <span class="spark-section__label">Equipo</span>
        <h2 class="spark-section__title">Quiénes somos</h2>

        <div class="mentors-grid">
            <div class="mentor-card glass-card glow-border">
                <div class="mentor-card__header">
                    <div class="mentor-card__avatar">👩‍💻</div>
                    <div>
                        <div class="mentor-card__name">Camila Velasco</div>
                        <div class="mentor-card__role">Fundadora de Spark101</div>
                    </div>
                </div>
                <p>Ingeniera industrial. Especialista en IA aplicada. Acompaña empresas y profesionales a diseñar sistemas de IA eficientes, escalables y seguros.</p>
            </div>

            <div class="mentor-card glass-card glow-border">
                <div class="mentor-card__header">
                    <div class="mentor-card__avatar">⚡</div>
                    <div>
                        <div class="mentor-card__name">Agustín Kassis</div>
                        <div class="mentor-card__role">Fundador de La Crypta</div>
                    </div>
                </div>
                <p>Desarrollador full-stack y bitcoiner. Impulsa la hiperbitcoinización con proyectos open-source, estándares abiertos y economías circulares en Latinoamérica.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="spark-section border-t">
    <div class="spark-container-narrow">
        <span class="spark-section__label">FAQ</span>
        <h2 class="spark-section__title">Preguntas frecuentes</h2>

        <div class="faq-list">
            <details class="faq-item glass-card">
                <summary>
                    <span>¿Necesito saber programar?</span>
                    <span class="icon">+</span>
                </summary>
                <div class="faq-item__body">
                    No. Nuestros programas están diseñados para que entiendas la lógica de los sistemas de IA sin necesidad de escribir código. Si sabés programar, mejor, pero no es requisito.
                </div>
            </details>

            <details class="faq-item glass-card">
                <summary>
                    <span>¿Cuál es la diferencia entre Spark Lab y Spark Academy?</span>
                    <span class="icon">+</span>
                </summary>
                <div class="faq-item__body">
                    <strong>Spark Lab</strong> son workshops en vivo, intensivos, con mentoría directa. <strong>Spark Academy</strong> son cursos grabados para hacer a tu ritmo. Los dos te llevan al mismo lugar: entender y usar IA como sistema real.
                </div>
            </details>

            <details class="faq-item glass-card">
                <summary>
                    <span>¿Es presencial o remoto?</span>
                    <span class="icon">+</span>
                </summary>
                <div class="faq-item__body">
                    100% online. Spark Lab es en vivo por videollamada. Spark Academy es contenido grabado accesible cuando quieras.
                </div>
            </details>

            <details class="faq-item glass-card">
                <summary>
                    <span>¿Cuánto cuesta?</span>
                    <span class="icon">+</span>
                </summary>
                <div class="faq-item__body">
                    Escribinos por WhatsApp para conocer los planes y opciones de pago disponibles para cada programa.
                </div>
            </details>

            <details class="faq-item glass-card">
                <summary>
                    <span>¿Qué me llevo al final?</span>
                    <span class="icon">+</span>
                </summary>
                <div class="faq-item__body">
                    Conocimiento real para diseñar, desplegar y mantener sistemas de IA. En Spark Lab, además, salís con tu propio agente funcionando.
                </div>
            </details>
        </div>
    </div>
</section>

<?php get_footer(); ?>
