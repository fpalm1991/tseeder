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

		<span data-tseeder-target="output"></span>
	</div>
</section>

<section class="section">
	<h2>Swiper</h2>

	<div class="swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">Slide 1</div>
			<div class="swiper-slide">Slide 2</div>
			<div class="swiper-slide">Slide 3</div>
		</div>

		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>

		<div class="swiper-scrollbar"></div>
	</div>

	<div class="swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">Slide 1</div>
			<div class="swiper-slide">Slide 2</div>
			<div class="swiper-slide">Slide 3</div>
		</div>

		<div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>

		<div class="swiper-scrollbar"></div>
	</div>

</section>

<?php get_footer(); ?>