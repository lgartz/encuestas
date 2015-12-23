$(function() {

	$("#message_nombres").fadeOut();
	$("#message_apellidos").fadeOut();
	$("#message_password").fadeOut();
	$("#message_password_reper").fadeOut();
	$("#message_password_reper_no").fadeOut();

	$("#enviarCambios").click(function() {
		if ($("#txtNombres").val() === "") {
			$("#message_nombres").fadeIn();
			return false;
		} else {
			$("#message_nombres").fadeOut();
		}
		if ($("#txtApellidos").val() === "") {
			$("#message_apellidos").fadeIn();
			return false;
		} else {
			$("#message_apellidos").fadeOut();
		}
		if ($("#txtPassword").val() === "") {
			$("#message_password").fadeIn();
			return false;
		} else {
			$("#message_password").fadeOut();
		}
		if ($("#txtPasswordRepet").val() === "") {
			$("#message_password_reper").fadeIn();
			return false;
		} else {
			$("#message_password_reper").fadeOut();
		}
		if ($("#txtPasswordRepet").val() !== $("#txtPassword").val()) {
			$("#message_password_reper_no").fadeIn();
			return false;
		} else {
			$("#message_password_reper_no").fadeOut();
		}
		return true;

	});
});