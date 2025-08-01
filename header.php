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

			<?php

			wp_nav_menu(
				[
					'theme_location' => 'primary_menu',
					'container' => 'nav',
				]
			);

			?>

		</div>
	</header>

	<main class="main">