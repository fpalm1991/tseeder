<?php

use Tseeder\Tseeder\Theme;

require 'vendor/autoload.php';

class Tseeder
{

	public function __construct()
	{
		add_action('after_setup_theme', [$this, 'init']);
	}

	public function init(): void {
		new Theme();
	}
}

new Tseeder();
