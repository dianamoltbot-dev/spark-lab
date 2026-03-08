<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- NAVBAR -->
<nav class="spark-nav">
    <div class="spark-container spark-nav__inner">
        <a href="<?php echo home_url(); ?>" class="spark-nav__logo">
            spark<span>101</span>
        </a>

        <button class="spark-nav__toggle" aria-label="Menu">☰</button>

        <ul class="spark-nav__links">
            <li><a href="<?php echo home_url(); ?>" <?php if (is_front_page()) echo 'class="active"'; ?>>Inicio</a></li>
            <li><a href="https://luma.com/gbeekuzx" target="_blank">Spark Lab</a></li>
            <li><a href="<?php echo home_url('/courses'); ?>">Spark Academy</a></li>
            <li>
                <a href="<?php echo spark101_whatsapp_url('Quiero info de Spark101'); ?>" target="_blank" class="spark-nav__cta">
                    Contacto
                </a>
            </li>
        </ul>
    </div>
</nav>
