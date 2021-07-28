document.addEventListener("DOMContentLoaded", function(event) {
	$('.main-banner').owlCarousel({
	    loop:true,
	    margin: 0,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});
	$('.partners').owlCarousel({
	    loop:true,
	    margin: 10,
	    nav: false,
	    responsive:{
	        0:{
	            items:2
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    }
	})
	$('.games').owlCarousel({
	    loop:true,
	    margin: 20,
	    nav: false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:4
	        }
	    }
	})
	$(".national-news-slider").owlCarousel({
	    loop:true,
	    margin: 10,
	    nav: false,
	    autoplay:true,
	    autoplayTimeout:6000,
	    autoplayHoverPause:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});
});