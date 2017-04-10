Global = {
	smoothScroll: function(elem) {
		var $elem = $(elem)
			, target = $elem.attr('href')
			, $target = $(target)
			, targetElemOffset = $target.offset().top
			, headerHeight = $('.header').height();

		$('html, body').animate({
			scrollTop: targetElemOffset
		}, function(){
			window.location.hash = target;
		});
	}
}

$(document).ready(function() {

	$('a[href^="#"]').click(function(e) {
		e.preventDefault();
		Global.smoothScroll(this);
	});
	

	$(window).scroll(function() {
		if ($(this).scrollTop() > 0) {
			if (!$('a.btt').is(':visible')) {
				$('a.btt').fadeIn();
			}
		} else {
			if ($('a.btt').is(':visible')) {
				$('a.btt').fadeOut();
			}
		}
	});
});