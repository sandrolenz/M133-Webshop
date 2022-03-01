jQuery(document).ready(function($) {
	"use strict";
	/************************************
   		Post slide
	*************************************/
	$('.post-img-slide').slick({
		prevArrow: '<button type="button" class="slide-prev"><i class="fas fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slide-next"><i class="fas fa-angle-right"></i></button>',
	})
	// Multi slide
	$('.post-img-multi-slide').slick({
		prevArrow: '<button type="button" class="slide-prev"><i class="fas fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slide-next"><i class="fas fa-angle-right"></i></button>',
		slidesToShow: 3,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 2,
				}
			}
		]
	})
	/************************************
   		Post media
	*************************************/
	//post video
	createVideoPlayer('#player')
	createVideoPlayer('#player2')
	createVideoPlayer('#player3')
	createVideoPlayer('#player4')
	createVideoPlayer('#player5')
	function createVideoPlayer(ele){
		const player = new Plyr(ele ,{
			controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume','settings', 'fullscreen'],
			hideControls: true,
		});
	}
	//post audio
	const audioPlayer = new Plyr('#audio-player',{
		controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume',],
		hideControls: true,
	});
	/************************************
   		Instagram slider
	*************************************/
	$('.instagram-posts').slick({
		slidesToShow: 5,
		arrows: false,
		responsive: [
			{
				breakpoint: 1400,
				settings: {
					slidesToShow: 6,
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 5,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 4,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 2,
				}
			}
		]
	})
	/************************************
   		Header
	*************************************/
	//Search
	$('#search .search-btn').on('click', function(event) {
		event.preventDefault();
		$('body').prepend('<div id="search-full" class="fadeIn"> <button id="exit-search-box"><i class="fas fa-times"></i></button> <div class="search-box"> <form action="" method="get" class="animated fadeInDown"> <input type="text" placeholder="Search"> <button><i class="fas fa-arrow-right"></i></button> </form> </div></div>').fadeIn('300', function() {
			
		});
		$('#exit-search-box').on('click', function(event) {
			event.preventDefault();
			$('#search-full').fadeOut('300', function() {
				$(this).remove();
			});;
		});
	});
	//Navigation
	$(window).on('scroll', function(event) {
	    var scroll = $(window).scrollTop();
	    if (scroll >= 100) {
	        $("header .header-wrapper").css({
	        	padding: '10px 0',
	        });
	    }
	    else {
	        $("header .header-wrapper").css({
	        	padding: '25px 0',
	        });
	    }
	});
	// Mobile submenu open
	$('.submenu-opener').on('click', function(event) {
		event.preventDefault();
		$(this).toggleClass('fa-plus fa-minus');
		$(this).next().slideToggle()
	});
	// Click to open sidebar menu
	$('#showMenu').on('click', function(event) {
		event.preventDefault();
		$('header').append('<div id="overlay"></div>')
		$('.navigation').css({
			left: '0%',
			visibility: 'visible',
		});
		$('#overlay').on('click', function(event) {
			$(this).remove();
			$('.navigation').css({
				left: '-100%',
				visibility: 'hidden',
			});
		});
	});
	// Mobile Navigation
	(function($) {
		function mediaSize() { 
			if (window.matchMedia('(min-width: 1200px)').matches) {
				$('.navigation').removeAttr('style')
				$('.navigation .sub-menu').removeAttr('style')
				$('#overlay').remove()
				$('header').removeClass('mobile')
			}
			else {
				$('header').addClass('mobile')
			}
		};
	 	mediaSize();
		window.addEventListener('resize', mediaSize, false);  
	})(jQuery);
	/************************************
   		AOS scroll master init
	*************************************/
	AOS.init({
		offset: 300,
		duration: 800,
		easing: 'ease-out-cubic',
		once: true,
	});
	/************************************
   		Masonry layout init
	*************************************/
	var $container = $('.blog-masonry_wrapper')

	$container.imagesLoaded( function() {
	  	$container.masonry({
	  		itemSelector: '.post-block',
		})
	});
	/************************************
   		Click to scroll up init
	*************************************/
	$.scrollUp({
		scrollDistance: 300,
		scrollText: '<i class="fas fa-chevron-up"></i>',
		easingType: 'easeOutCubic',
		scrollSpeed: 1500,
	});
	/************************************
   		Blog Agency Slider
	*************************************/
	$('.post-block.post-classic_wrapper').slick({
		slidesToShow: 1,
		prevArrow: '<button type="button" class="slide-prev"><i class="fas fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slide-next"><i class="fas fa-angle-right"></i></button>',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 768,
				arrows: true,
				swipe: true,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 576,
				arrows: true,
				swipe: true,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	})
	/************************************
   		Blog agency slider
	*************************************/
	$('.blog-agency .post-classic-bundle_slide').slick({
		slidesToShow: 3,
		prevArrow: '<button type="button" class="slide-prev"><i class="fas fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slide-next"><i class="fas fa-angle-right"></i></button>',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	})

	/************************************
   		Blog crypto slider
	*************************************/

	$('.blog-crypto .new-news-slide').slick({
		slidesToShow: 3,
		infinite: false,
		prevArrow: '<button type="button" class="slide-prev"><i class="fas fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slide-next"><i class="fas fa-angle-right"></i></button>',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	})

	$('.blog-crypto .video-bundle_wrapper').slick({
		slidesToShow: 1,
		infinite: false,
		prevArrow: '<button type="button" class="slide-prev"><i class="fas fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slide-next"><i class="fas fa-angle-right"></i></button>',
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	})

	/************************************
   		Price range create
	*************************************/
	$("#slider-range").slider({
		range: true,
		min: 0,
		max: 500,
		classes: {
		    "ui-slider": "slider-bar",
		    "ui-slider-range": "range-bar",
		    "ui-slider-handle": "handle",
		    "ui-state-active": "active-handle",
		},
		values: [ 75, 300 ],
		slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#amount").val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		" - $" + $( "#slider-range" ).slider( "values", 1 ) );

	/************************************
   		Shop sidebar
	*************************************/
	$('#open-shop-sidebar').on('click', function(event) {
		event.preventDefault();
		$('.sidebar-wrapper').append('<div id="shop-sidebar-overlay"></div>')
		$('.shop-sidebar').css({
			left: '0%',
			visibility: 'visible',
		});
		$('#shop-sidebar-overlay').on('click', function(event) {
			$(this).remove();
			$('.shop-sidebar').css({
				left: '-100%',
				visibility: 'hidden',
			});
		});
	});
	(function($) {
		function mediaSize() { 
			if (window.matchMedia('(min-width: 1200px)').matches) {
				$('.shop-sidebar').removeAttr('style')
				$('#shop-sidebar-overlay').remove()
				$('.shop-sidebar').removeClass('mobile')
				$('#open-shop-sidebar').hide()
			}
			else {
				$('.shop-sidebar').addClass('mobile')
				$('#open-shop-sidebar').show()
			}
		};
	 	mediaSize();
		window.addEventListener('resize', mediaSize, false);  
	})(jQuery);
	/************************************
   		Cart product quantity
	*************************************/
	$('.plus').on('click',function(){
		event.preventDefault();
        var $qty=$(this).closest('.quantity-control').find('.quantity');
        var currentVal = parseInt($qty.val());
        console.log($qty)
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    $('.minus').on('click',function(){
    	event.preventDefault();
        var $qty=$(this).closest('.quantity-control').find('.quantity');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $qty.val(currentVal - 1);
        }
    });
    /************************************
   		Shop checkout create account check
	*************************************/
    $('#create-account_form').slideUp()
    $('#create-account').on('click', function(event) {
    	if($(this).is(":checked")) {
	    	$('#create-account_form').slideDown()
	    }
     	else if($(this).is(":not(:checked)")) {
	     	$('#create-account_form').slideUp()
     	}

    });
	/************************************
   		Count down for coming soon
	*************************************/
   $('#countdown').countdown('2020/10/10', function(event) {
	  var $this = $(this).html(event.strftime(''
	    + '<div class="countdown-number"><b>%d</b><p>days</p></div> '
	    + '<div class="countdown-number"><b>%H</b><p>hr</p></div> '
	    + '<div class="countdown-number"><b>%M</b><p>min</p></div> '
	    + '<div class="countdown-number"><b>%S</b><p>sec</p></div>'));
	});

});