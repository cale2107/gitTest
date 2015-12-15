$(window).load(function() {

	// Cycle slider
	$('.slider').cycle();
	
	// Home category buttons
	$('.main-cats > ul > li').hover(function(){
		$(this).children('div').stop().animate({
			'height'	: '356px'
		},300);
		$(this).children('div').css('visibility','visible');
		$(this).children('h3').css({
			'z-index'	: '1002',
			'color'		: '#585858'
		});
	},function(){
		$(this).children('div').stop().animate({
			'height'	: '0'
		},300);
		$(this).children('div').css('visibility','hidden');
		$(this).children('h3').css({
			'z-index'	: '1',
			'color'		: '#fff'
		});
	});
	
	// Map toggle
	$('.map-box h3 a').toggle(function(){
		$('.map').animate({
			'height': '284px'
		},200).css('visibility','visible');
		$(this).addClass('active');
	},function(){
		$('.map').animate({
			'height': '0'
		},200).css('visibility','hidden');
		$(this).removeClass('active');
	});
	
	// Product list details
	$('.product-slider').find('.details').hover(function(){
		$(this).stop().animate({
			'height'	: '200px'
		},300);
		$(this).parent('.product-item').addClass('active');
	}, function(){
		$(this).stop().animate({
			'height'	: '53px'
		},200);
		$(this).parent('.product-item').removeClass('active');
	});

	// Product list details
	$('.offer-list').find('.details').hover(function(){
		$(this).stop().animate({
			'height'	: '155px'
		},300);
		$(this).parent('.product-item').addClass('active');
	}, function(){
		$(this).stop().animate({
			'height'	: '90px'
		},200);
		$(this).parent('.product-item').removeClass('active');
	});
	
	// Carousels
	$('.logo-list').bxSlider({
	    slideWidth: 188,
	    minSlides: 2,
	    maxSlides: 5,
	    slideMargin: 0,
		pager: false,
		infiniteLoop: false
	 });
	 $('.slider-box .product-slider').bxSlider({
	  	slideWidth: 217,
	  	minSlides: 2,
	  	maxSlides: 4,
	  	slideMargin: 0,
	  	pager: false,
		infiniteLoop: false
	 });
	 
	 var videoSrc = $('#video').data('video');
		
	 // Fancybox popups
	 $(".fancybox").fancybox({
		'overlayColor': '#000',
		'overlayOpacity': 0.85,
		'padding': 13,
		onStart: function() {
			if ($('.popup-content').attr('id') == 'video') {
				$('#fancybox-close').css({
					'top':'0px',
					'right':'-52px'
				});
			}
		},
		onComplete: function() {
			$('.scrollable').each(function() {
				$(this).mCustomScrollbar('update');
			});
			$('#video').empty();
			$('#video').append('<iframe width="640" height="390" src="'+ videoSrc +'?autoplay=1" frameborder="0" allowfullscreen></iframe>')
		}
	 });

	// Category navigation 
	
	$('.category-nav').find('ul').css({'display':'block','opacity':'0'});
	var categoryListH = $('.category-nav').find('ul').height();
	$('.category-nav').find('ul').css({'height':'0px'});
	$('.category-nav > li').hover(function() {
		$(this).children('ul').stop().animate({
			'height':categoryListH,
			'opacity':'1'
		},300)
	}, function() {
		$(this).children('ul').stop().animate({
			'height':'0px',
			'opacity':'0'
		},300)
	});

	// Equal columns
	
	$('.equal-columns').each(function() {
		var maxHeight = 0;
		$(this).children().each(function() {
			if ($(this).outerHeight() > maxHeight)
				maxHeight = $(this).outerHeight();
		});
		$(this).children().css({'height': maxHeight});
	});
	
	// Assortment images vertical align 
	
	$('.assortment-list li, .brands-list li').each(function() {
		var currHeight = $(this).children().height(),
			imgHeight = $(this).find('img').height();
		$(this).find('img').css({
			'marginTop': (currHeight-imgHeight)/2
		})
	});

	// Add custom scrollbar

	$('.scrollable').mCustomScrollbar();
	
	// Add custom select
	
    $('select').dropdownized();

	// File input

	$('input[type=file]').change(function(e){
		$in=$(this);
		$in.prev().html($in.val());
	});	

	// Brands list hover
	
	$('.brands-list li a').hover(function() {
		$(this).find('div').stop().animate({
			'top':'0px'
		},500)
	},function() {
		$(this).find('div').stop().animate({
			'top':'253px'
		},500)
	});
	
	// Mobile Navigation
	$('.mobile-nav').click(function(){
		$('nav ul').slideToggle('fast');
	});
	
});
