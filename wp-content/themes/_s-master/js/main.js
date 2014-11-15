var container = $('.gallery-container');
$( document ).ready(function() {
	initNav();
	slideshow();

	$(window).load(function() {
		packeryMagic();

		$('.img-container').each(function(){
			$(this).css('height', $(this).height());
		});
	});
	$(window).resize(function() {
		packeryMagic();
		initNav();

		$('.img-container').each(function(){
			$(this).css('height', $(this).height());
		});
	});
});

function initNav(){
	if ($(window).width()<480) { menuToggle(); }

	$('ul.menu li.menu-item-has-children a').click(function(e){
		subnav = $('ul.sub-menu');
		childSubnav = $(this).parent().find(subnav);
		
		childSubnav.parent().siblings().find(subnav).hide();
		childSubnav.parent().siblings().find(subnav).removeClass('opened');
		
		if(childSubnav.length>0){
			if(childSubnav.hasClass('opened')) {
				closeSubNav();
			} else {
				openSubNav(childSubnav);
			}
			return false;
		}
	});
	function showMenu(nav){
		if(nav.css('display') == 'none') nav.css('display','block');
		else nav.css('display','none');
	}
	function closeSubNav(immediately) {
		childSubnav.hide().removeClass("opened");
	}
	function openSubNav(clicked,immediately) {
		if(clicked.is(":visible")) return true;
		closeSubNav();
		clicked.slideDown(immediately?0:500).addClass("opened");
	}

	function menuToggle(){
		var button, menu;
		var button = $('#menu-toggle');
		var menu = $('ul.menu');

		button.click(function(e){
			e.preventDefault();
			if(menu.is(':visible')){
				menu.slideUp();
			} else {
				menu.slideDown();
			}
		});
	}
}
function packeryMagic() {
	container.packery({
	  itemSelector: '.img-container',
	  gutter: 10
	});	
}
function slideshow(){
	var slideshow = $('.gallery');

	slideshow.cycle({
		slides: ".gallery-item li",
		next: "#next, img",
		previous: "#prev",
		speed: 600,
		manualSpeed: 100,
		caption: '>.caption',
		paused: true
	});;
	resizeSlides()
	function resizeSlides(){
		var cHeight = $(window).height()-40
 		var cWidth = $(window).width()-100

 		$('.slides li').each(function(){
 			$(this).height(cHeight);
		});
 	}
}
