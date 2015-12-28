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
		if ($("input[name='psu_t_555']").val().trim() == "") {
	      	$("#panel_psu_t_555").removeClass( "panel-primary" );
	      	$("#panel_psu_t_555").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_555 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_555").removeClass( "panel-danger" );
	      	$("#panel_psu_t_555").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_555 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_556']").val().trim() == "") {
	      	$("#panel_psu_t_556").removeClass( "panel-primary" );
	      	$("#panel_psu_t_556").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_556 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_556").removeClass( "panel-danger" );
	      	$("#panel_psu_t_556").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_556 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_557']").val().trim() == "") {
	      	$("#panel_psu_t_557").removeClass( "panel-primary" );
	      	$("#panel_psu_t_557").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_557 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_557").removeClass( "panel-danger" );
	      	$("#panel_psu_t_557").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_557 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_558']").val().trim() == "") {
	      	$("#panel_psu_t_558").removeClass( "panel-primary" );
	      	$("#panel_psu_t_558").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_558 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_558").removeClass( "panel-danger" );
	      	$("#panel_psu_t_558").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_558 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_559']").val().trim() == "") {
	      	$("#panel_psu_t_559").removeClass( "panel-primary" );
	      	$("#panel_psu_t_559").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_559 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_559").removeClass( "panel-danger" );
	      	$("#panel_psu_t_559").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_559 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});