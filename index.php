<?php get_header(); ?>

<section class="section">
	<h1>Hello, world!</h1>

	<article class="article">
		<h3 class="article__heading">Heading...</h3>

		<p class="article__text">Text...</p>
	</article>
</section>

<section class="section">
	<h2>Greeting</h2>

	<div data-controller="tseeder">
		<input data-tseeder-target="name" type="text">

		<button data-action="click->tseeder#greet">
			Greet
		</button>

		<span data-tseeder-target="output">
		</span>
	</div>
</section>

<?php get_footer(); ?>