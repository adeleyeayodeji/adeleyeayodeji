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
		console.log('Well');
		//Google verification
		grecaptcha.ready(function() {
          grecaptcha.execute('6LcwiVwaAAAAANP6Jok7LKD8oC1EgM1Zt1p8n2BT', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
        var name = $("#name").val();
		var email = $("#email").val();
		var message = $("#message").val();
		if(email == ""){
		    alert("Email can't be empty");
		    return;
		}else if(name == ""){
		    alert("Name can't be empty");
		    return;
		}else if(message == ""){
		    alert("Message can't be empty");
		    return;
		}
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: {
				name,
				email,
				message,
				token
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
					$(formMessages).text(response);
					console.error(response);

					//Clear values
				// 	var name = $("#name").val("");
				// 	var email = $("#email").val("");
				// 	var message = $("#message").val("");
				}
			}
		});
          });
        });
	

	});
})(jQuery);