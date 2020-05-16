var $ = jQuery.noConflict();
$(document).ready(function(){

	//Owl Carousel function
	var Owl = $('.owl-carousel');
	Owl.owlCarousel({
		//loop:true,
		items:1,
		margin:0,
		//autoHeight:true,
		//autoHeightClass: 'owl-height',
		singleItem:true,
		dots: true,
		nav:true,
		navText:[
			"<div class='icono-arrow _rot135'></div>",
			"<div class='icono-arrow rot45'></div>"
		],
		//autoplay:true,
		autoplaySpeed:2500,
		autoplayTimeout:7000,
		autoplayHoverPause:true,
		lazyLoad: true,
		startPosition: 0,
//		responsive:{
//			0:{
//				items:1
//			},
//			600:{
//				items:3
//			},
//			1000:{
//				items:5
//			}
//      }
	});

});
