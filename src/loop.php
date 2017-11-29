<div class="container">
	<div class="row">
		

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="col-xs-12 col-md-4 text-center">
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<div style="width: 100%; height: 460px; background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;" class="article__thumbnail">
							
							<div class="excerpt">
								<?php $excerpt = substr(get_the_excerpt(), 0, 140); echo $excerpt; ?>...
							</div>

					</div>
				</a>
			<?php endif; ?>

			<h3 class="article__title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h3>
			<!-- /post title -->


			<a href="<?php echo get_the_permalink() ?>" class="btn view-more">View Article</a>

		</article>

	</div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>


</div>
</div>
