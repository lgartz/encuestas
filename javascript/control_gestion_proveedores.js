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
		if ($("input[name='psu_t_572']").val().trim() == "") {
	      	$("#panel_psu_t_572").removeClass( "panel-primary" );
	      	$("#panel_psu_t_572").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_572 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_572").removeClass( "panel-danger" );
	      	$("#panel_psu_t_572").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_572 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_573']").val().trim() == "") {
	      	$("#panel_psu_t_573").removeClass( "panel-primary" );
	      	$("#panel_psu_t_573").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_573 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_573").removeClass( "panel-danger" );
	      	$("#panel_psu_t_573").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_573 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_574']").val().trim() == "") {
	      	$("#panel_psu_t_574").removeClass( "panel-primary" );
	      	$("#panel_psu_t_574").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_574 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_574").removeClass( "panel-danger" );
	      	$("#panel_psu_t_574").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_574 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_575']").val().trim() == "") {
	      	$("#panel_psu_t_575").removeClass( "panel-primary" );
	      	$("#panel_psu_t_575").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_575 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_575").removeClass( "panel-danger" );
	      	$("#panel_psu_t_575").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_575 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_575']").val().trim() == "") {
	      	$("#panel_psu_t_575").removeClass( "panel-primary" );
	      	$("#panel_psu_t_575").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_575 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_575").removeClass( "panel-danger" );
	      	$("#panel_psu_t_575").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_575 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_576']").val().trim() == "") {
	      	$("#panel_psu_t_576").removeClass( "panel-primary" );
	      	$("#panel_psu_t_576").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_576 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_576").removeClass( "panel-danger" );
	      	$("#panel_psu_t_576").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_576 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_577']").val().trim() == "") {
	      	$("#panel_psu_t_577").removeClass( "panel-primary" );
	      	$("#panel_psu_t_577").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_577 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_577").removeClass( "panel-danger" );
	      	$("#panel_psu_t_577").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_577 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_578']").val().trim() == "") {
	      	$("#panel_psu_t_578").removeClass( "panel-primary" );
	      	$("#panel_psu_t_578").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_578 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_578").removeClass( "panel-danger" );
	      	$("#panel_psu_t_578").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_578 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});