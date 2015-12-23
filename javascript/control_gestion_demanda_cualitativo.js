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
		if ($("input[name='psu_t_530']").val().trim() == "") {
	      	$("#panel_psu_t_530").removeClass( "panel-primary" );
	      	$("#panel_psu_t_530").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_530 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_530").removeClass( "panel-danger" );
	      	$("#panel_psu_t_530").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_530 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_531']").val().trim() == "") {
	      	$("#panel_psu_t_531").removeClass( "panel-primary" );
	      	$("#panel_psu_t_531").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_531 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_531").removeClass( "panel-danger" );
	      	$("#panel_psu_t_531").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_531 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_532']").val().trim() == "") {
	      	$("#panel_psu_t_532").removeClass( "panel-primary" );
	      	$("#panel_psu_t_532").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_532 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_532").removeClass( "panel-danger" );
	      	$("#panel_psu_t_532").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_532 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_533']").val().trim() == "") {
	      	$("#panel_psu_t_533").removeClass( "panel-primary" );
	      	$("#panel_psu_t_533").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_533 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_533").removeClass( "panel-danger" );
	      	$("#panel_psu_t_533").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_533 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});