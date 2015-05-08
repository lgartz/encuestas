$(function(){
	$("#enviar").click(function(){
		var validacion=validacionObligatoriedad();
		if (validacion) {
			var password = $("#password").val();
			var repassword = $("#repassword").val();
			if (password != repassword) {
				alert("Las contraseñas no coinciden");
				return false;
			}
		}else{
			return false;
		}
	})

	function validacionObligatoriedad(){
		var nombres = $("#nombres").val();
		var apellidos = $("#apellidos").val();
		var password = $("#password").val();
		var repassword = $("#repassword").val();
		var fallo = false;
		if (nombres=="") {		
			$("#message-nombres").fadeIn();
			fallo=true;
		} else{
			$("#message-nombres").fadeOut();
		}
		if (apellidos=="") {
			$("#message-apellidos").fadeIn();
			fallo=true;
		} else{
			$("#message-apellidos").fadeOut();
		}
		if (password=="") {
			$("#message-password").fadeIn();
			fallo=true;
		} else{
			$("#message-password").fadeOut();
		}
		if (repassword=="") {
			$("#message-repassword").fadeIn();
			fallo=true;
		}else{
			$("#message-repassword").fadeOut();
		}
		return !fallo;
	}
});