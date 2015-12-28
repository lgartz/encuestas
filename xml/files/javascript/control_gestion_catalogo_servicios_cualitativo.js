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
		if ($("input[name='psu_t_534']").val().trim() == "") {
	      	$("#panel_psu_t_534").removeClass( "panel-primary" );
	      	$("#panel_psu_t_534").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_534 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_534").removeClass( "panel-danger" );
	      	$("#panel_psu_t_534").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_534 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_535']").val().trim() == "") {
	      	$("#panel_psu_t_535").removeClass( "panel-primary" );
	      	$("#panel_psu_t_535").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_535 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_535").removeClass( "panel-danger" );
	      	$("#panel_psu_t_535").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_535 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_536']").val().trim() == "") {
	      	$("#panel_psu_t_536").removeClass( "panel-primary" );
	      	$("#panel_psu_t_536").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_536 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_536").removeClass( "panel-danger" );
	      	$("#panel_psu_t_536").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_536 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_698']").val().trim() == "") {
	      	$("#panel_psu_t_698").removeClass( "panel-primary" );
	      	$("#panel_psu_t_698").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_698 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_698").removeClass( "panel-danger" );
	      	$("#panel_psu_t_698").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_698 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});