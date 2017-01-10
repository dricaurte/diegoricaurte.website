// Loader

$(document).ready(function() {
   window.setTimeout("loaderfade();", 700); 
 }
)

function loaderfade() {
   $(".loader").fadeOut('slow');
}


$(document).ready(function(){
	'use strict';
	
	// Scroll

	$('.scrollto').click(function(e){
		e.preventDefault();
		var scrollElm = $(this).attr('href');
		var scrollTo = $(scrollElm).offset().top;
		$('html, body').animate({ scrollTop: scrollTo - 50 }, "slow");
	});

	// Skills

	var owl = $("#skills-slide");
	owl.owlCarousel({
		autoPlay:true,
		items:4,
		itemsDesktop:[950,4],
		itemsDesktopSmall:[900,3],
		itemsTablet:[600,2],
		itemsMobile:[480,1]
	});

	// Animations

	var windowH = $(window).height();

	var servicesTopOffset = $('.services .services-inner').offset().top;
	var skillsTopOffset = $('.skills').offset().top;
	
	$(window).bind('resize', function () {
		windowH = $(window).height();
	});

	$('.hidethis').bind('inview', function (event, visible) {
		if (visible === true) {
			$(this).removeClass('hidethis');
		}
	});
	
	// Nav Bar

		// grab the initial top offset of the navigation 
		var sticky_navigation_offset_top = $('#navigation-bar').offset().top;

		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var sticky_navigation = function(){
		    var scroll_top = $(window).scrollTop(); // our current vertical position from the top

		    // if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		    if (scroll_top > sticky_navigation_offset_top) { 
		        $('.navbar-flat').addClass('navbar-fixed-top');
				$('.firstSec').addClass('fixed');
		    } else {
		        $('.navbar-flat').removeClass('navbar-fixed-top');
				$('.firstSec').removeClass('fixed'); 
		    }   
		};

		// run our function on load
		sticky_navigation();

		// and run it again every time you scroll
		$(window).scroll(function() {
		     sticky_navigation();
		});

	// 	Skills Chart animation

	$(window).scroll(function() {
		if(window.pageYOffset > skillsTopOffset-windowH+200)
		{
			$('.chart').easyPieChart({
				easing: 'easeInOut',
				barColor: '#ffffff',
				trackColor: false,
				scaleColor: false,
				lineWidth: 5,
				size: 152,
				onStep: function(from, to, percent) {
					$(this.el).find('.percent').text(Math.round(percent));
				}
			});
		}
	});
});