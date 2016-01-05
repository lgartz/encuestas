$(function() {
	$("#enviar").click(function() {
		return validacionObligatoriedad();
	});

	function validacionObligatoriedad() {
		var username = $("#email").val();
		var password = $("#pass").val();
		var fallo = false;
		if (username.trim() == "") {
			$("#message_user").fadeIn();
			fallo = true;
		} else {
			$("#message_user").fadeOut();
		}
		if (password.trim() == "") {
			$("#message_password").fadeIn();
			fallo = true;
		} else {
			$("#message_password").fadeOut();
		}
		return !fallo;
	}
});