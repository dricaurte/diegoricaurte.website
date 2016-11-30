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
		itemsDesktop:[1000,4],
		itemsDesktopSmall:[900,3],
		itemsTablet:[600,2],
		itemsMobile:[480,1]
	});

	// Animations
	var windowH = $(window).height();

	$(window).bind('resize', function () {
		windowH = $(window).height();
	});

	$('.hidethis').bind('inview', function (event, visible) {
		if (visible === true) {
			$(this).removeClass('hidethis');
		}
	});

	var servicesTopOffset = $('.services .services-inner').offset().top;
	var skillsTopOffset = $('.skills').offset().top;
	$(window).scroll(function(){
		// Fixed Navbar
		if(window.pageYOffset > windowH)
		{
			$('.navbar-flat').addClass('navbar-fixed-top');
			$('.firstSec').addClass('fixed');
		}
		else
		{
			$('.navbar-flat').removeClass('navbar-fixed-top');
			$('.firstSec').removeClass('fixed');
		}
		
		// Skills Chart animation
		if(window.pageYOffset > skillsTopOffset-windowH+200)
		{
			$('.chart').easyPieChart({
				easing: 'easeInOut',
				barColor: '#ffffff',
				trackColor: '#004d28',
				scaleColor: false,
				lineWidth: 4,
				size: 152,
				onStep: function(from, to, percent) {
					$(this.el).find('.percent').text(Math.round(percent));
				}
			});
		}
	});
});