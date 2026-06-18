<?php

namespace Tseeder\Tseeder;

class Navigation
{
    public static function init(): void
    {
        add_action('after_setup_theme', [self::class, 'register'], 0);
    }

    public static function register(): void
    {
        register_nav_menus([
            'primary_menu' => __('Primary Menu', 'tseeder'),
        ]);
    }
}
