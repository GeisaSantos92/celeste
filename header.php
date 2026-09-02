<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="site-header__inner">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo" aria-label="<?php bloginfo( 'name' ); ?>">
            <img
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>"
                alt="<?php bloginfo( 'name' ); ?>"
                width="198"
                height="54"
            >
        </a>

        <nav class="site-header__nav" aria-label="<?php esc_attr_e( 'Menu principal', 'celeste' ); ?>">
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'site-header__menu',
                'fallback_cb'    => false,
            ] );
            ?>
        </nav>

    </div>
</header>
