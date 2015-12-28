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
		if ($("input[name='psu_t_579']").val().trim() == "") {
	      	$("#panel_psu_t_579").removeClass( "panel-primary" );
	      	$("#panel_psu_t_579").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_579 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_579").removeClass( "panel-danger" );
	      	$("#panel_psu_t_579").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_579 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_580']").val().trim() == "") {
	      	$("#panel_psu_t_580").removeClass( "panel-primary" );
	      	$("#panel_psu_t_580").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_580 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_580").removeClass( "panel-danger" );
	      	$("#panel_psu_t_580").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_580 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_581']").val().trim() == "") {
	      	$("#panel_psu_t_581").removeClass( "panel-primary" );
	      	$("#panel_psu_t_581").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_581 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_581").removeClass( "panel-danger" );
	      	$("#panel_psu_t_581").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_581 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_582']").val().trim() == "") {
	      	$("#panel_psu_t_582").removeClass( "panel-primary" );
	      	$("#panel_psu_t_582").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_582 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_582").removeClass( "panel-danger" );
	      	$("#panel_psu_t_582").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_582 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_583']").val().trim() == "") {
	      	$("#panel_psu_t_583").removeClass( "panel-primary" );
	      	$("#panel_psu_t_583").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_583 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_583").removeClass( "panel-danger" );
	      	$("#panel_psu_t_583").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_583 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});