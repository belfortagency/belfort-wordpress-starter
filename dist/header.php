<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.6/css/swiper.min.css" />
		<link rel="stylesheet" href="https://use.typekit.net/ahw5bvi.css">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js" type="text/javascript"></script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<div class="header-container">

		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-md-6">
						<a href="">Shop my look</a>
					</div>
					<div class="col-xs-6 col-md-6 text-right">
						<ul class="social">
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
				</div>
			</div>
		</div>

		<?php $menu = wp_get_nav_menu_items('header-menu'); ?>

		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<ul class="menu">
							<?php $count = 0; foreach( $menu as $item ) { if ($count < 3) {
								if ($item->type_label === 'Category') {
									echo '<li><a href="' . $item->url .'">'. ucfirst($item->title) . '</a></li>'; $count++;
								} else {
									echo '<li><a href="">'. ucfirst($item->post_name) . '</a></li>'; $count++;
								}
								} } ?>
						</ul>
					</div>
					<div class="col-xs-12 col-md-4 text-center">
						<a href="<?php echo site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" class="logo"></a>
					</div>
					<div class="col-xs-12 col-md-4">
						<ul class="menu">
							<?php 

							$count = 0; 

							foreach( $menu as $item ) { 
								if ($count > 2) {

									if ($item->type_label === 'Category') {
										echo '<li><a href="' . $item->url .'">'. ucfirst($item->title) . '</a></li>'; $count++;
									} else {
										echo '<li><a href="">'. ucfirst($item->post_name) . '</a></li>'; 
									}
								} 
								$count++;
							} 

							?>
						</ul>
					</div>
				</div>
			</div>
		</header>

	</div>