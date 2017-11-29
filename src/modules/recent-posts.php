<?php 


$cat = get_the_category();
$title = $cat[0]->name;

?>

<section class="tiles__module">
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6">
      <div class="contain">
        <h2>Related Posts in <?php echo $title ?></h2>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 see-all">
      <div class="contain">
        <p class="text-align-right"><a href=""><em>See All in <?php echo $title ?></em></a></p>
      </div>
    </div>
  </div> 
  <div class="row">

    <?php
    $query = new WP_Query( array( 'cat' => 2, 'post__not_in' => array( $post->ID ) ) );

    if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
    
      <div class="col-xs-12 col-md-4">
        <div class="tile">
          <a href="<?php echo get_the_permalink(); ?>" class="tile__image--link">
            <div class="tile__image" style="background: url('<?php echo get_the_post_thumbnail_url($post->ID, 'large') ?>') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover;"></div>
          </a>
          <div class="tile__meta">
            <time class="summary-metadata-item summary-metadata-item--date" datetime="2016-09-12">Sep 12, 2016</time>
            <h4><a href=""><?php echo get_the_title(); ?></a></h4>
          </div>
        </div>
      </div>

    <?php } } wp_reset_postdata(); ?>
  </div>
</div>
</section>