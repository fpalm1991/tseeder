<?php

use Tseeder\Tseeder\Theme;
use Tseeder\Tseeder\Navigation;

require 'vendor/autoload.php';

class Tseeder
{

	public function __construct()
	{
		add_action('wp_enqueue_scripts', [Theme::class, 'enqueueScripts']);
		add_action('after_setup_theme', [Theme::class, 'support'], 0);
		add_action('after_setup_theme', [Navigation::class, 'register'], 0);
	}
}

new Tseeder();
