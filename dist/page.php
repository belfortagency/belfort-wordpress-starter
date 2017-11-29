<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

			</article>

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
