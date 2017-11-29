<div class="swiper-container">
  <div class="swiper-wrapper">
      <?php
      $query = new WP_Query( array( 'cat' => 2 ) );

      if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>


      <div class="swiper-slide" style="background: url('<?php echo get_the_post_thumbnail_url($post->ID, "full"); ?>') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;">
        <section class="masthead masthead--image" >
          <div class="container">
            <div class="row">
              <div class="col-xs-12 text-center">
                <div class="masthead__meta">
                  <h4><?php $cat = get_the_category(); print_r($cat[0]->name); ?></h4>
                  <h1 class="masthead__title"><?php echo get_the_title(); ?></h1>
                  <a href="<?php echo get_the_permalink(); ?>" class="btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php } } wp_reset_postdata(); ?>
  </div>
  <div class="swiper-pagination"></div>
</div>