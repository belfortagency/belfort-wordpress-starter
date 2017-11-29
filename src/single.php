<?php get_header(); ?>

	<main role="main" aria-label="Content">
	<!-- section -->

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="swiper-slide" style="background: url('<?php echo get_the_post_thumbnail_url($post->ID, "full"); ?>') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; background-attachment: fixed;">
        <section class="masthead masthead--image" >
          <div class="container">
            <div class="row">
              <div class="col-xs-12 text-center">
                <div class="masthead__meta">
                  <h4><?php $cat = get_the_category(); print_r($cat[0]->name); ?></h4>
                  <h1 class="masthead__title"><?php echo get_the_title(); ?></h1>
                  <!-- <a href="<?php echo get_the_permalink(); ?>" class="btn">Read More</a> -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">


						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <div class="single-article">
                <div class="container inner-container">
    							<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

    							<span class="date">
    								<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
    									<?php the_date(); ?> <?php the_time(); ?>
    								</time>
    							</span>

    							<?php the_content(); ?>
                </div>
              </div>

              <div class="share-post">
                <ul>
                  <li>
                    Share This:
                  </li>
                  <li>
                    <a href="" class="circle">
                      <i class="ion-social-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="" class="circle">
                      <i class="ion-social-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="" class="circle">
                      <i class="ion-social-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="" class="circle">
                      <i class="ion-social-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>

              <?php include('modules/recent-posts.php'); ?>


  						<?php comments_template(); ?>

						</article>



					<?php endwhile; ?>

					<?php else: ?>

						<article>

							<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

						</article>

					<?php endif; ?>

					</div>
				</div>
			</div>
		</section>
	</main>




<?php get_footer(); ?>
