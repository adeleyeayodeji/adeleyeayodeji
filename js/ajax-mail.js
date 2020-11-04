(function ($) {
	"use strict";

    // form validation
    $('#contact-form .input_field.required').on('blur', function () {
		if ($(this).val().trim() == '') { $(this).addClass('inputEmpty').removeClass('inputNotEmpty'); }
		else { $(this).removeClass('inputEmpty').addClass('inputNotEmpty'); }
		if ($(this).val().trim() == '') { $(this).attr('placeholder', 'Field is Required!'); }
    });
	
	var form = $('#contact-form');
	var formMessages = $('.form-message');
	$(form).submit(function(e) {
		e.preventDefault();
		var name = $("#name").val();
		var email = $("#email").val();
		var message = $("#message").val();
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: {
				"name" : name,
				"email" : email,
				"message" : message
			},
			success : function (response) {
				if (response == "Mail sent") {
					$(formMessages).removeClass("error");
					$(formMessages).addClass("success");
					$(formMessages).text(response);
					console.log(response);

					//Clear values
					var name = $("#name").val("");
					var email = $("#email").val("");
					var message = $("#message").val("");
				}else{
					$(formMessages).removeClass("success");
					$(formMessages).addClass("error");
					$(formMessages).text("Could not send mail");
					console.error(response);

					//Clear values
					var name = $("#name").val("");
					var email = $("#email").val("");
					var message = $("#message").val("");
				}
			}
		});

	});
})(jQuery);