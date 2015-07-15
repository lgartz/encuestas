$(function(){
	 $("#enviar").click(function() {
	 	 if ($("#email").val()=="") {
	 	 	return false;
	 	 };
	 	 if ($("#pass").val()=="") {
	 	 	return false;
	 	 };
	 	 return true;
	});
});