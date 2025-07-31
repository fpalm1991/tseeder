<?php

namespace Tseeder\Tseeder;

class Theme
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
        add_action('after_setup_theme', [$this, 'themeSetup']);
    }

    public function enqueueScripts(): void
    {
        wp_enqueue_style('tseeder-style', get_template_directory_uri() . '/assets/dist/main.css', [], '1.0.0');
        wp_enqueue_script('tseeder-script', get_template_directory_uri() . '/assets/dist/main.js', [], '1.0.0', true);
    }

    public function themeSetup(): void
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
        add_theme_support('custom-logo', [
            'height'      => 60,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => ['site-title', 'site-description'],
        ]);
    }
}
