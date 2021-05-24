$(document).ready(function(){
	$("#go-top").hide();
	
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#go-top').fadeIn();
			} else {
				$('#go-top').fadeOut();
			}
		});

		$('#go-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});