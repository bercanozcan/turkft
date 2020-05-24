$(function(){
	//toogle menu
	$(".toogle").click(function() {
		if ($(".toogle").hasClass("actived")) {
			toogleClose();
		}
		else {
			$(".toogle").addClass("actived");
			$(".hover-menu").addClass("actived");
		}
	});
	function toogleClose(){
		$(".toogle").removeClass("actived");
		$(".hover-menu").removeClass("actived");
		$(".landing-page").removeClass("open");
	}
	//about
	$('a.about').click(function (e) {
		e.preventDefault();
		$.fn.fullpage.moveTo(2);
		toogleClose();
	});		
	//team
	$('a.team').click(function (e) {
		e.preventDefault();
		$.fn.fullpage.moveTo(3);
		toogleClose();
	});

	//gallery
	$('a.gallery').click(function (e) {
		e.preventDefault();
		$.fn.fullpage.moveTo(4);
		toogleClose();
	});
	//team slick slider
	var touchStartPostion = 0; var touchEndPostion = 0;
	$(".team-list-slider").slick({
		dots: true,
		infinite: true,
		variableWidth: true,
		prevArrow: false,
		nextArrow: false
	})
	.on('touchstart', function(e){
		touchStartPostion = e.originalEvent.touches[0].pageY;
		$.fn.fullpage.setMouseWheelScrolling(false);
		$.fn.fullpage.setAllowScrolling(false);
	})
	.on('touchmove', function(e){
		touchEndPostion = e.originalEvent.touches[0].pageY;
	})
	.on('touchend', function(){
		$.fn.fullpage.setMouseWheelScrolling(true); 
		$.fn.fullpage.setAllowScrolling(true);
		var touchPostionChange = touchStartPostion - touchEndPostion;
		//console.log("touchStartPostion: " + touchStartPostion);
		//console.log("touchEndPostion: " + touchEndPostion);
		//console.log("touchPostionChange: " + touchPostionChange);
		if(touchEndPostion != 0){ //bug fix
			if(touchPostionChange >= 100){ //down scroll
				$.fn.fullpage.moveTo(3);
			}
			else if(touchPostionChange <= -100){ //up scroll
				$.fn.fullpage.moveTo(1);
			}
		}
	});
	//career
	$('a.career').click(function (e) {
		e.preventDefault();
		$.fn.fullpage.moveTo(5);
		toogleClose();
	});
	//team-list
	$('.team-list a, .modal-button').click(function (e) {
		e.preventDefault();
		//console.log("team-list: ", $(this).data("name"));
		if ($(".toogle").hasClass("actived")) {
			toogleClose();
		}
		$(".toogle").addClass("actived");
		$(".landing-page."+$(this).data("name")).addClass("open");
	});
	
});