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
	   	if ($("textarea[name='psc_ta_445']").val().trim() == "") {
	      	$("#panel_psc_ta_445").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_445").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_445 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_445").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_445").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_445 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_446']").val().trim() == "") {
	      	$("#panel_psc_ta_446").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_446").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_446 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_446").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_446").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_446 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_447']").val().trim() == "") {
	      	$("#panel_psc_ta_447").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_447").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_447 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_447").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_447").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_447 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_448']").val().trim() == "") {
	      	$("#panel_psc_ta_448").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_448").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_448 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_448").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_448").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_448 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_449']").val().trim() == "") {
	      	$("#panel_psc_ta_449").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_449").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_449 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_449").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_449").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_449 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_450']").val().trim() == "") {
	      	$("#panel_psc_ta_450").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_450").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_450 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_450").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_450").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_450 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_451']").val().trim() == "") {
	      	$("#panel_psc_ta_451").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_451").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_451 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_451").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_451").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_451 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_452']").val().trim() == "") {
	      	$("#panel_psc_ta_452").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_452").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_452 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_452").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_452").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_452 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_453']").val().trim() == "") {
	      	$("#panel_psc_ta_453").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_453").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_453 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_453").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_453").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_453 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_454']").val().trim() == "") {
	      	$("#panel_psc_ta_454").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_454").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_454 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_454").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_454").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_454 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_455']").val().trim() == "") {
	      	$("#panel_psc_ta_455").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_455").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_455 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_455").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_455").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_455 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_456']").val().trim() == "") {
	      	$("#panel_psc_ta_456").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_456").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_456 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_456").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_456").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_456 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});