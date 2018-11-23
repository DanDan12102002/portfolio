jQuery(document).ready(function () {
	// SEND FORMS
	jQuery('.send-ajax').click(function () {
		var form = jQuery(this).closest('form');

		if (form.valid()) {
			form.css('opacity', '.5');
			var actUrl = form.attr('action');

			jQuery.ajax({
				url: actUrl,
				type: 'post',
				dataType: 'html',
				data: form.serialize(),
				success: function (data) {
					form.html(data);
					form.css('opacity', '1');
				},
				error: function () { }
			});
		}
	});

	jQuery('.send').click(function () {
		var form = jQuery(this).closest('form');

		if (form.valid()) {
			form.submit();
		}
	});

	/*
		Slide to block. Add class "go-to-block" to link or button and data-attribute with target class or id
		Example: <a href="#" class="go-to-block" data-target=".slide-1">Slide</a>
	*/

	jQuery(".go-to-block").click(function () {
		var target = jQuery(this).data('target');
		jQuery('html, body').animate({
			scrollTop: jQuery(target).offset().top - 30
		}, 400);
	});
	let el = $(".to-top");

	$(window).scroll(function () {
		if ($(window).scrollTop() >= 500) {
			el.css('display', 'block');
			el.addClass("animated");
			el.hover(
				function () {
					$(this).removeClass("fadeIn");
					$(this).addClass("shake");
					$(this).addClass("animated");
					$(this).addClass("infinite");
				},
				function () {
					//$(this).removeClass("animated");
					$(this).removeClass("infinite");
					$(this).removeClass("shake");
				}
			);
		} else {
			el.removeClass('fadeOutUpBig');
			el.addClass('fadeIn');
			el.css('display', 'none');
		}

	});

	el.click(
		function () {
			el.addClass('fadeOutUpBig');
		}
	);

	//

	//console.log($(window).scrollTop());
	$(window).scroll(function() {
		animateBars();
	});

	animateBars();
});

function animateBars(){
		var scrollto = $('.skills.top').offset().top - $(window).height() / 1.13;
		if ($(window).scrollTop() >= scrollto) {
			$('.progressbar').each(function () {
				let bar = $(this).find('.bar');
				let label = $(this).find('.label');
				let w_prog = $(this).attr("aria-valuenow");
				let time = w_prog * 21;

				bar.css('width', w_prog + "%");
				label.css('left', w_prog - 3 + "%");
				label.html(w_prog);
			});
		}
}