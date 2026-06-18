<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <div class="container">

        <div class="main-navigation-container">
            <div class="logo">Logo...</div>

            <?php if (has_nav_menu('primary_menu')) : ?>
                <?php
                wp_nav_menu(
                        [
                                'theme_location' => 'primary_menu',
                                'container' => 'nav',
                                'container_class' => 'primary-nav',
                                'container_id' => 'primary-nav',
                        ]
                );
                ?>
            <?php endif; ?>

            <button
                    class="mobile-nav-toggle"
                    id="toggle-mobile-nav"
                    aria-expanded="false"
                    aria-controls="primary-navigation"
                    aria-label="Open navigation"
            >
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
                <span class="toggle-bar"></span>
            </button>
        </div>

    </div>
</header>

<main class="main">