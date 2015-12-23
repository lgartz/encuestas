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
		if ($("input[name='psu_t_537']").val().trim() == "") {
	      	$("#panel_psu_t_537").removeClass( "panel-primary" );
	      	$("#panel_psu_t_537").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_537 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_537").removeClass( "panel-danger" );
	      	$("#panel_psu_t_537").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_537 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_538']").val().trim() == "") {
	      	$("#panel_psu_t_538").removeClass( "panel-primary" );
	      	$("#panel_psu_t_538").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_538 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_538").removeClass( "panel-danger" );
	      	$("#panel_psu_t_538").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_538 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_539']").val().trim() == "") {
	      	$("#panel_psu_t_539").removeClass( "panel-primary" );
	      	$("#panel_psu_t_539").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_539 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_539").removeClass( "panel-danger" );
	      	$("#panel_psu_t_539").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_539 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_540']").val().trim() == "") {
	      	$("#panel_psu_t_540").removeClass( "panel-primary" );
	      	$("#panel_psu_t_540").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_540 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_540").removeClass( "panel-danger" );
	      	$("#panel_psu_t_540").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_540 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_542']").val().trim() == "") {
	      	$("#panel_psu_t_542").removeClass( "panel-primary" );
	      	$("#panel_psu_t_542").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_542 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_542").removeClass( "panel-danger" );
	      	$("#panel_psu_t_542").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_542 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_543']").val().trim() == "") {
	      	$("#panel_psu_t_543").removeClass( "panel-primary" );
	      	$("#panel_psu_t_543").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_543 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_543").removeClass( "panel-danger" );
	      	$("#panel_psu_t_543").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_543 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_544']").val().trim() == "") {
	      	$("#panel_psu_t_544").removeClass( "panel-primary" );
	      	$("#panel_psu_t_544").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_544 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_544").removeClass( "panel-danger" );
	      	$("#panel_psu_t_544").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_544 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_541']").val().trim() == "") {
	      	$("#panel_psc_ta_541").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_541").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_541 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_541").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_541").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_541 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});