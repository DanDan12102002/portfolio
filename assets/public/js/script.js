jQuery(document).ready(function(){
	// SEND FORMS
	jQuery('.send-ajax').click( function() {
		var form = jQuery(this).closest('form');
		
		if ( form.valid() ) {
			form.css('opacity','.5');
			var actUrl = form.attr('action');

			jQuery.ajax({
				url: actUrl,
				type: 'post',
				dataType: 'html',
				data: form.serialize(),
				success: function(data) {
					form.html(data);
					form.css('opacity','1');
				},
				error:	 function() {}
			});
		}
	});
	
	jQuery('.send').click( function() {
		var form = jQuery(this).closest('form');
		
		if ( form.valid() ) {
			form.submit();
		}
	});
	
	/*
		Slide to block. Add class "go-to-block" to link or button and data-attribute with target class or id
		Example: <a href="#" class="go-to-block" data-target=".slide-1">Slide</a>
	*/
	
	jQuery(".go-to-block").click(function() {
		var target = jQuery(this).data('target');
		
	    jQuery('html, body').animate({
	        scrollTop: jQuery(target).offset().top - 30
	    }, 400);
	});
});