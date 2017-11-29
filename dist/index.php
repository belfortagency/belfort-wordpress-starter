<?php get_header(); ?>

<!-- <section class="masthead">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h4>Dreams live here...</h4>
        <h1 class="masthead__title">A BEAUTIFUL TIME AT ONE & ONLY LUXURY RESORT & SPA ALONG THE SEA OF CORTEZ IN LOS CABOS.</h1>
        <a href="" class="btn">Read More</a>
      </div>
    </div>
  </div>
</section> -->


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

<!-- <section class="masthead masthead--secondary">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h4>Dreams live here...</h4>
        <h1 class="masthead__title">A BEAUTIFUL TIME AT ONE & ONLY LUXURY RESORT & SPA ALONG THE SEA OF CORTEZ IN LOS CABOS.</h1>
        <a href="" class="btn">Read More</a>
      </div>
    </div>
  </div>
</section> -->

<!-- <section class="masthead masthead--image" style="background: url('http://placehold.it/2000x600') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h4 class="text-white">Dreams live here...</h4>
        <h1 class="masthead__title text-white">A BEAUTIFUL TIME AT ONE & ONLY LUXURY RESORT & SPA ALONG THE SEA OF CORTEZ IN LOS CABOS.</h1>
        <a href="" class="btn white-btn">Read More</a>
      </div>
    </div>
  </div>
</section> -->

<?php 

$homepage = get_page_by_title('Homepage');
// check if the flexible content field has rows of data
if( have_rows('layout',$homepage->ID) ):

  // loop through the rows of data
    while ( have_rows('layout',$homepage->ID) ) : the_row();

    // check current row layout
        if( get_row_layout() == 'category_posts' ) :

          include('modules/category-posts.php');

        elseif( get_row_layout() == 'capture_bar' ) :

          include('modules/module-capture-bar.php');

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>

<div id="instafeed" class="row thumbnails center-xs start-md">
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js" type="text/javascript"></script>


<section class="social__module">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h4>Stay in the Know</h4>
        <h2><i class="ion-social-instagram-outline"></i> Follow Me</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-4">
        <a class="social__image">
          <img src="http://placehold.it/600x600">
        </a>
      </div>
      <div class="col-xs-12 col-md-4">
        <a class="social__image">
          <img src="http://placehold.it/600x600">
        </a>
      </div>
      <div class="col-xs-12 col-md-4">
        <a class="social__image">
          <img src="http://placehold.it/600x600">
        </a>
      </div>
      <div class="col-xs-12 col-md-4">
        <a class="social__image">
          <img src="http://placehold.it/600x600">
        </a>
      </div>
      <div class="col-xs-12 col-md-4">
        <a class="social__image">
          <img src="http://placehold.it/600x600">
        </a>
      </div>
      <div class="col-xs-12 col-md-4">
        <a class="social__image">
          <img src="http://placehold.it/600x600">
        </a>
      </div>
    </div> 
</section>

<?php get_footer(); ?>
