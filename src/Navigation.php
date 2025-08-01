<?php

namespace Tseeder\Tseeder;

class Navigation
{

    public static function register(): void
    {
        register_nav_menus([
            'primary_menu' => __('Primary Menu', 'tseeder'),
        ]);
    }
}
