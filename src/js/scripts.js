(function( root, $, undefined ) {
	"use strict";

	$(function () {

    var headerHeight = $('.header-container').height();

    $('body').css('paddingTop', headerHeight);

    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        loop: true,
        speed: 300,
        autoplay: {
          delay: 5000,
        },
        pagination: {
          el: '.swiper-pagination',
        }
      })
  	});

    // Instagram feed
    var feed = new Instafeed({
        get: 'user',
        userId: '252863863',
        limit: 6,
        accessToken: '1602900396.dd7d115.00e890d3523a480db7e0659bf3e29bd3',
        resolution: 'standard_resolution',
        template: '<div class="col-xs-6 col-sm-6 col-md-2 thumbnail" style="position: relative;"><a href="{{link}}" target="_blank"><img src="{{image}}"><i class="ion-social-instagram-outline" style="position: absolute; bottom: 0px; right: 16px; color: #ffffff; font-size: 32px; opacity: .25;"></i></a></div>'
    });

    $(window).scroll(function(e){

      var windowTop = $(window).scrollTop();

      var header = $('.header-container').height();

      $('body').css('paddingTop', header);

      if (windowTop - header > 0) {
        $('.header-container').addClass('active');
      } else {
        $('.header-container').removeClass('active');
      }
    });


      // feed.run();

} ( this, jQuery ));