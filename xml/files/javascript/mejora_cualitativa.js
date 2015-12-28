$(function(){
	
    
    $( "#dialog-confirm" ).dialog({
      autoOpen: false,
      resizable: false,
      height:240,
      modal: true,
      buttons: {
        "Aceptar": function() {
          $( this ).dialog( "close" );
        }
      },
      show: {
        effect: "explode",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
    
    
    $("#enviar").click(function() {
	  result = validarDatosObligatorios();
	  if(!result){
	  	$("#dialog-confirm").dialog( "open" );
	  }
	  return result;
	});
	
	function validarDatosObligatorios(){
		resultado = true;
	   	if ($("textarea[name='psc_ta_481']").val().trim() == "") {
	      	$("#panel_psc_ta_481").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_481").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_481 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_481").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_481").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_481 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_482']").val().trim() == "") {
	      	$("#panel_psc_ta_482").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_482").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_482 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_482").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_482").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_482 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_483']").val().trim() == "") {
	      	$("#panel_psc_ta_483").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_483").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_483 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_483").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_483").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_483 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_484']").val().trim() == "") {
	      	$("#panel_psc_ta_484").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_484").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_484 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_484").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_484").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_484 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_485']").val().trim() == "") {
	      	$("#panel_psc_ta_485").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_485").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_485 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_485").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_485").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_485 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_486']").val().trim() == "") {
	      	$("#panel_psc_ta_486").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_486").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_486 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_486").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_486").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_486 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_487']").val().trim() == "") {
	      	$("#panel_psc_ta_487").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_487").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_487 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_487").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_487").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_487 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_488']").val().trim() == "") {
	      	$("#panel_psc_ta_488").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_488").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_488 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_488").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_488").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_488 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_489']").val().trim() == "") {
	      	$("#panel_psc_ta_489").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_489").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_489 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_489").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_489").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_489 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_490']").val().trim() == "") {
	      	$("#panel_psc_ta_490").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_490").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_490 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_490").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_490").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_490 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_491']").val().trim() == "") {
	      	$("#panel_psc_ta_491").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_491").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_491 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_491").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_491").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_491 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_492']").val().trim() == "") {
	      	$("#panel_psc_ta_492").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_492").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_492 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_492").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_492").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_492 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_493']").val().trim() == "") {
	      	$("#panel_psc_ta_493").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_493").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_493 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_493").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_493").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_493 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_494']").val().trim() == "") {
	      	$("#panel_psc_ta_494").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_494").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_494 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_494").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_494").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_494 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_495']").val().trim() == "") {
	      	$("#panel_psc_ta_495").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_495").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_495 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_495").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_495").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_495 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_496']").val().trim() == "") {
	      	$("#panel_psc_ta_496").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_496").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_496 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_496").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_496").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_496 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_497']").val().trim() == "") {
	      	$("#panel_psc_ta_497").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_497").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_497 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_497").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_497").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_497 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_498']").val().trim() == "") {
	      	$("#panel_psc_ta_498").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_498").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_498 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_498").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_498").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_498 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_499']").val().trim() == "") {
	      	$("#panel_psc_ta_499").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_499").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_499 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_499").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_499").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_499 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_500']").val().trim() == "") {
	      	$("#panel_psc_ta_500").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_500").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_500 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_500").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_500").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_500 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_501']").val().trim() == "") {
	      	$("#panel_psc_ta_501").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_501").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_501 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_501").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_501").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_501 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_502']").val().trim() == "") {
	      	$("#panel_psc_ta_502").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_502").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_502 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_502").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_502").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_502 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_503']").val().trim() == "") {
	      	$("#panel_psc_ta_503").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_503").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_503 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_503").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_503").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_503 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_504']").val().trim() == "") {
	      	$("#panel_psc_ta_504").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_504").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_504 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_504").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_504").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_504 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});