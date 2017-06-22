jQuery(document).ready(function($){


	$('#off-canvas-icon').click(function(){
		$('#off-canvas').toggleClass('is-active');
	});

	// Nav menu

		$('#nav-menu .menu-item').click(function(){
			$('#nav-menu .menu-item').removeClass('active');
			$(this).addClass('active');


		});

	// WIndows is scrolling

	$(window).scroll(function(){
		var scroll = $(window).scrollTop();

		if( scroll >= 10 ) {
			$('body').addClass('is-scrolling');
		} else {
			$('body').removeClass('is-scrolling');
		}
	});

	// Slider slick

	$('.slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 3,
		dots: true,
		arrows: false,
		// prevArrow: '<span>Prev</span>',
		// nextArrow: '<span>Next</span>',
		//adaptiveHeight: true
		// fade: true,
		// asNavFor: '.da-slider-nav',
		autoplay: true,
	});
	
	$('.slider-estadisticas').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: true,
		arrows: true,
		prevArrow: '<span class="slick-prev"><img width="48" src="http://codecase.xyz/cherrybomb/concierge/wp-content/themes/Concierge/img/icon-back.svg"></span>',
		nextArrow: '<span class="slick-next"><img width="48" src="http://codecase.xyz/cherrybomb/concierge/wp-content/themes/Concierge/img/icon-forward.svg"></span>',
		//adaptiveHeight: true
		// fade: true,
		// asNavFor: '.da-slider-nav',
		autoplay: true,
		responsive: [
			{
			  breakpoint: 770,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: true
			  }
			},
		]
	});


	$('.slider-testimonial').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '<span class="slick-prev"><img width="48" src="http://codecase.xyz/cherrybomb/concierge/wp-content/themes/Concierge/img/icon-back.svg"></span>',
		nextArrow: '<span class="slick-next"><img width="48" src="http://codecase.xyz/cherrybomb/concierge/wp-content/themes/Concierge/img/icon-forward.svg"></span>',
		//adaptiveHeight: true
		// fade: true,
		// asNavFor: '.da-slider-nav',
		//autoplay: true,
	});

	// Scroll class

	$(window).scroll(function() {

	  // selectors
	  var $window = $(window),
	      $body = $('body'),
	      $panel = $('.section');

	  // Change 33% earlier than scroll position so colour is there when you arrive.
	  var scroll = $window.scrollTop() + ($window.height() / 10);

	  $panel.each(function () {
	    var $this = $(this);

	    // if position is within range of this panel.
	    // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
	    // Remember we set the scroll to 33% earlier in scroll var.
	    if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {

	      // Remove all classes on body with color-
	      $body.removeClass(function (index, css) {
	        return (css.match (/(^|\s)viewing-page-\S+/g) || []).join(' ');
	      });

	      // Add class of currently active div
	      $body.addClass('viewing-page-' + $(this).data('page'));
	    }
	  });

	}).scroll();

	// Smooth scroll

		// Select all links with hashes
		$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		  .not('[href="#"]')
		  .not('[href="#0"]')
		  .click(function(event) {
		    // On-page links
		    if (
		      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
		      &&
		      location.hostname == this.hostname
		    ) {
		      // Figure out element to scroll to
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		      // Does a scroll target exist?
		      if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1000, function() {
		          // Callback after animation
		          // Must change focus!
		          var $target = $(target);
		          $target.focus();
		          if ($target.is(":focus")) { // Checking if the target was focused
		            return false;
		          } else {
		            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		            $target.focus(); // Set focus again
		          };
		        });
		      }
		    }
		  });

	// Scroll smothed

// 	$(document).ready(function(){
// 		// $fn.scrollSpeed(step, speed, easing);
// 		jQuery.scrollSpeed(200, 400);
// 	});

	// Custom scrolling speed with jQuery
	// Source: github.com/ByNathan/jQuery.scrollSpeed
	// Version: 1.0.2

// 	(function($) {

// 	    jQuery.scrollSpeed = function(step, speed, easing) {

// 	        var $document = $(document),
// 	            $window = $(window),
// 	            $body = $('html, body'),
// 	            option = easing || 'default',
// 	            root = 0,
// 	            scroll = false,
// 	            scrollY,
// 	            scrollX,
// 	            view;

// 	        if (window.navigator.msPointerEnabled)

// 	            return false;

// 	        $window.on('mousewheel DOMMouseScroll', function(e) {

// 	            var deltaY = e.originalEvent.wheelDeltaY,
// 	                detail = e.originalEvent.detail;
// 	                scrollY = $document.height() > $window.height();
// 	                scrollX = $document.width() > $window.width();
// 	                scroll = true;

// 	            if (scrollY) {

// 	                view = $window.height();

// 	                if (deltaY < 0 || detail > 0)

// 	                    root = (root + view) >= $document.height() ? root : root += step;

// 	                if (deltaY > 0 || detail < 0)

// 	                    root = root <= 0 ? 0 : root -= step;

// 	                $body.stop().animate({

// 	                    scrollTop: root

// 	                }, speed, option, function() {

// 	                    scroll = false;

// 	                });
// 	            }

// 	            if (scrollX) {

// 	                view = $window.width();

// 	                if (deltaY < 0 || detail > 0)

// 	                    root = (root + view) >= $document.width() ? root : root += step;

// 	                if (deltaY > 0 || detail < 0)

// 	                    root = root <= 0 ? 0 : root -= step;

// 	                $body.stop().animate({

// 	                    scrollLeft: root

// 	                }, speed, option, function() {

// 	                    scroll = false;

// 	                });
// 	            }

// 	            return false;

// 	        }).on('scroll', function() {

// 	            if (scrollY && !scroll) root = $window.scrollTop();
// 	            if (scrollX && !scroll) root = $window.scrollLeft();

// 	        }).on('resize', function() {

// 	            if (scrollY && !scroll) view = $window.height();
// 	            if (scrollX && !scroll) view = $window.width();

// 	        });
// 	    };

// 	    jQuery.easing.default = function (x,t,b,c,d) {

// 	        return -c * ((t=t/d-1)*t*t*t - 1) + b;
// 	    };

// 	})(jQuery);


	// Scroll reveal


// 	$(window).scroll(function() {

// 		$(".will_appear").each(function(){
// 			var element_position = $(this).offset().top;
// 			var scroll_position = $(window).scrollTop();
// 			var viewport_height = $(window).height();

// 			viewport_height=parseInt(viewport_height);

// 			if(scroll_position+550 > element_position){
// 			$(this).addClass("on_scroll");
// 		}

// 	});




});
