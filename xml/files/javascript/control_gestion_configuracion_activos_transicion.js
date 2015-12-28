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
		if ($("input[name='psu_t_596']").val().trim() == "") {
	      	$("#panel_psu_t_596").removeClass( "panel-primary" );
	      	$("#panel_psu_t_596").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_596 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_596").removeClass( "panel-danger" );
	      	$("#panel_psu_t_596").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_596 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_597']").val().trim() == "") {
	      	$("#panel_psu_t_597").removeClass( "panel-primary" );
	      	$("#panel_psu_t_597").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_597 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_597").removeClass( "panel-danger" );
	      	$("#panel_psu_t_597").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_597 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_598']").val().trim() == "") {
	      	$("#panel_psu_t_598").removeClass( "panel-primary" );
	      	$("#panel_psu_t_598").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_598 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_598").removeClass( "panel-danger" );
	      	$("#panel_psu_t_598").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_598 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_599']").val().trim() == "") {
	      	$("#panel_psu_t_599").removeClass( "panel-primary" );
	      	$("#panel_psu_t_599").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_599 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_599").removeClass( "panel-danger" );
	      	$("#panel_psu_t_599").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_599 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_600']").val().trim() == "") {
	      	$("#panel_psu_t_600").removeClass( "panel-primary" );
	      	$("#panel_psu_t_600").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_600 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_600").removeClass( "panel-danger" );
	      	$("#panel_psu_t_600").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_600 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_601']").val().trim() == "") {
	      	$("#panel_psu_t_601").removeClass( "panel-primary" );
	      	$("#panel_psu_t_601").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_601 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_601").removeClass( "panel-danger" );
	      	$("#panel_psu_t_601").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_601 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_602']").val().trim() == "") {
	      	$("#panel_psu_t_602").removeClass( "panel-primary" );
	      	$("#panel_psu_t_602").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_602 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_602").removeClass( "panel-danger" );
	      	$("#panel_psu_t_602").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_602 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_603']").val().trim() == "") {
	      	$("#panel_psu_t_603").removeClass( "panel-primary" );
	      	$("#panel_psu_t_603").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_603 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_603").removeClass( "panel-danger" );
	      	$("#panel_psu_t_603").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_603 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});