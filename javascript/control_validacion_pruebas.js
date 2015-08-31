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
		if ($("input[name='psu_t_614']").val().trim() == "") {
	      	$("#panel_psu_t_614").removeClass( "panel-primary" );
	      	$("#panel_psu_t_614").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_614 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_614").removeClass( "panel-danger" );
	      	$("#panel_psu_t_614").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_614 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_615']").val().trim() == "") {
	      	$("#panel_psu_t_615").removeClass( "panel-primary" );
	      	$("#panel_psu_t_615").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_615 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_615").removeClass( "panel-danger" );
	      	$("#panel_psu_t_615").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_615 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_616']").val().trim() == "") {
	      	$("#panel_psu_t_616").removeClass( "panel-primary" );
	      	$("#panel_psu_t_616").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_616 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_616").removeClass( "panel-danger" );
	      	$("#panel_psu_t_616").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_616 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_617']").val().trim() == "") {
	      	$("#panel_psu_t_617").removeClass( "panel-primary" );
	      	$("#panel_psu_t_617").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_617 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_617").removeClass( "panel-danger" );
	      	$("#panel_psu_t_617").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_617 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_618']").val().trim() == "") {
	      	$("#panel_psu_t_618").removeClass( "panel-primary" );
	      	$("#panel_psu_t_618").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_618 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_618").removeClass( "panel-danger" );
	      	$("#panel_psu_t_618").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_618 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});