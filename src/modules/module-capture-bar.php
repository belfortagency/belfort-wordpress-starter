<?php 

$title = get_sub_field('title');
$bg = get_sub_field('background_image');
$cta_text = get_sub_field('cta_text');
$cta_link = get_sub_field('cta_link');

?>

<section class="capture-bar" style="background: url('<?php echo $bg ?>') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; background-attachment: fixed;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="capture__meta">
          <h1 class="capture__title"><?php echo $title ?></h1>
          <a href="<?php echo $cta_link ?>" class="btn capture__cta"><?php echo $cta_text; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>