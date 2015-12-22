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
		if ($("input[name='psu_t_604']").val().trim() == "") {
	      	$("#panel_psu_t_604").removeClass( "panel-primary" );
	      	$("#panel_psu_t_604").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_604 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_604").removeClass( "panel-danger" );
	      	$("#panel_psu_t_604").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_604 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_605']").val().trim() == "") {
	      	$("#panel_psu_t_605").removeClass( "panel-primary" );
	      	$("#panel_psu_t_605").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_605 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_605").removeClass( "panel-danger" );
	      	$("#panel_psu_t_605").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_605 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_606']").val().trim() == "") {
	      	$("#panel_psu_t_606").removeClass( "panel-primary" );
	      	$("#panel_psu_t_606").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_606 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_606").removeClass( "panel-danger" );
	      	$("#panel_psu_t_606").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_606 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_607']").val().trim() == "") {
	      	$("#panel_psu_t_607").removeClass( "panel-primary" );
	      	$("#panel_psu_t_607").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_607 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_607").removeClass( "panel-danger" );
	      	$("#panel_psu_t_607").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_607 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_608']").val().trim() == "") {
	      	$("#panel_psu_t_608").removeClass( "panel-primary" );
	      	$("#panel_psu_t_608").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_608 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_608").removeClass( "panel-danger" );
	      	$("#panel_psu_t_608").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_608 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_609']").val().trim() == "") {
	      	$("#panel_psu_t_609").removeClass( "panel-primary" );
	      	$("#panel_psu_t_609").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_609 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_609").removeClass( "panel-danger" );
	      	$("#panel_psu_t_609").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_609 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_610']").val().trim() == "") {
	      	$("#panel_psu_t_610").removeClass( "panel-primary" );
	      	$("#panel_psu_t_610").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_610 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_610").removeClass( "panel-danger" );
	      	$("#panel_psu_t_610").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_610 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_611']").val().trim() == "") {
	      	$("#panel_psu_t_611").removeClass( "panel-primary" );
	      	$("#panel_psu_t_611").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_611 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_611").removeClass( "panel-danger" );
	      	$("#panel_psu_t_611").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_611 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_612']").val().trim() == "") {
	      	$("#panel_psu_t_612").removeClass( "panel-primary" );
	      	$("#panel_psu_t_612").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_612 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_612").removeClass( "panel-danger" );
	      	$("#panel_psu_t_612").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_612 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_613']").val().trim() == "") {
	      	$("#panel_psu_t_613").removeClass( "panel-primary" );
	      	$("#panel_psu_t_613").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_613 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_613").removeClass( "panel-danger" );
	      	$("#panel_psu_t_613").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_613 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});