<?php

use Tseeder\Tseeder\Theme;

require 'vendor/autoload.php';

class Tseeder
{

	public function __construct()
	{
		new Theme();
	}
}

new Tseeder();
