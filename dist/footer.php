
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.6/js/swiper.min.js"></script>
		<?php wp_footer(); ?>

  <footer>
    <div class="thumbnails">
      <div class="thumbnail-item">
        <img src="http://placehold.it/150x150">
      </div>
      <div class="thumbnail-item">
        <img src="http://placehold.it/150x150">
      </div>
      <div class="thumbnail-item">
        <img src="http://placehold.it/150x150">
      </div>
      <div class="thumbnail-item">
        <img src="http://placehold.it/150x150">
      </div>
      <div class="thumbnail-item">
        <img src="http://placehold.it/150x150">
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <a href="<?php echo site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" class="logo"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <ul class="footer-menu">
            <?php $menu = wp_get_nav_menu_items('header-menu'); ?>

            <?php foreach( $menu as $item ) { 
              if ($item->type_label === 'Category') {
                echo '<li><a href="' . $item->url .'">'. ucfirst($item->title) . '</a></li>'; $count++;
              } else {
                echo '<li><a href="">'. ucfirst($item->post_name) . '</a></li>'; $count++;
              }
            } ?>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <div class="social-links">
    <ul>
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

	</body>
</html>
