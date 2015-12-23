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
		if ($("input[name='psu_t_525']").val().trim() == "") {
	      	$("#panel_psu_t_525").removeClass( "panel-primary" );
	      	$("#panel_psu_t_525").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_525 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_525").removeClass( "panel-danger" );
	      	$("#panel_psu_t_525").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_525 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_526']").val().trim() == "") {
	      	$("#panel_psu_t_526").removeClass( "panel-primary" );
	      	$("#panel_psu_t_526").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_526 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_526").removeClass( "panel-danger" );
	      	$("#panel_psu_t_526").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_526 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_527']").val().trim() == "") {
	      	$("#panel_psu_t_527").removeClass( "panel-primary" );
	      	$("#panel_psu_t_527").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_527 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_527").removeClass( "panel-danger" );
	      	$("#panel_psu_t_527").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_527 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_528']").val().trim() == "") {
	      	$("#panel_psu_t_528").removeClass( "panel-primary" );
	      	$("#panel_psu_t_528").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_528 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_528").removeClass( "panel-danger" );
	      	$("#panel_psu_t_528").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_528 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_529']").val().trim() == "") {
	      	$("#panel_psu_t_529").removeClass( "panel-primary" );
	      	$("#panel_psu_t_529").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_529 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_529").removeClass( "panel-danger" );
	      	$("#panel_psu_t_529").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_529 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});