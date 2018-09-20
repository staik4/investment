$(document).ready(function(){
	$('#feedback-form').on('submit', function(e){
		e.preventDefault();
		console.log('jog');
		let formData = $('#feedback-form').serialize();
		console.log(formData)
		$.ajax({
			url: "js/mail.php",
			type: 'post',
			data: formData,
				success: function (response) {
				console.log(response)
				alert("Your email has been sent!");
			},
			error: function(jqXHR, exception, response) {
				console.log(jqXHR, exception, response );
			},
		});
	});

	$('.form-popup form').on('submit', function(e){
		e.preventDefault();
		console.log('kusk');
		let formData = $('.form-popup form').serialize();
		console.log(formData)
		$.ajax({
			url: "js/mail.php",
			type: 'post',
			data: formData,
				success: function (response) {
				console.log(response)
				alert("Your email has been sent!");
				$('.mod-web').fadeOut('slow', function(){
					$('.mod-web').css({"display":"none"});
					console.log('fadeOut');
					$('.layout-mod-web').css({"display":"none"});
				});
			},
			error: function(jqXHR, exception, response) {
				console.log(jqXHR, exception, response );
			},
		});
	});

	$('.tel-form').inputmask("+9(999)-999-9999");
});
