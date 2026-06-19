<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <div class="section">
            <div class="container">
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
        </div>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
