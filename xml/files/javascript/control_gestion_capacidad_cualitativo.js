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
		if ($("input[name='psu_t_545']").val().trim() == "") {
	      	$("#panel_psu_t_545").removeClass( "panel-primary" );
	      	$("#panel_psu_t_545").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_545 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_545").removeClass( "panel-danger" );
	      	$("#panel_psu_t_545").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_545 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_546']").val().trim() == "") {
	      	$("#panel_psu_t_546").removeClass( "panel-primary" );
	      	$("#panel_psu_t_546").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_546 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_546").removeClass( "panel-danger" );
	      	$("#panel_psu_t_546").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_546 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_547']").val().trim() == "") {
	      	$("#panel_psu_t_547").removeClass( "panel-primary" );
	      	$("#panel_psu_t_547").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_547 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_547").removeClass( "panel-danger" );
	      	$("#panel_psu_t_547").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_547 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_548']").val().trim() == "") {
	      	$("#panel_psu_t_548").removeClass( "panel-primary" );
	      	$("#panel_psu_t_548").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_548 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_548").removeClass( "panel-danger" );
	      	$("#panel_psu_t_548").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_548 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_549']").val().trim() == "") {
	      	$("#panel_psu_t_549").removeClass( "panel-primary" );
	      	$("#panel_psu_t_549").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_549 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_549").removeClass( "panel-danger" );
	      	$("#panel_psu_t_549").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_549 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_550']").val().trim() == "") {
	      	$("#panel_psu_t_550").removeClass( "panel-primary" );
	      	$("#panel_psu_t_550").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_550 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_550").removeClass( "panel-danger" );
	      	$("#panel_psu_t_550").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_550 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_551']").val().trim() == "") {
	      	$("#panel_psu_t_551").removeClass( "panel-primary" );
	      	$("#panel_psu_t_551").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_551 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_551").removeClass( "panel-danger" );
	      	$("#panel_psu_t_551").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_551 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_552']").val().trim() == "") {
	      	$("#panel_psu_t_552").removeClass( "panel-primary" );
	      	$("#panel_psu_t_552").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_552 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_552").removeClass( "panel-danger" );
	      	$("#panel_psu_t_552").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_552 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_553']").val().trim() == "") {
	      	$("#panel_psu_t_553").removeClass( "panel-primary" );
	      	$("#panel_psu_t_553").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_553 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_553").removeClass( "panel-danger" );
	      	$("#panel_psu_t_553").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_553 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_554']").val().trim() == "") {
	      	$("#panel_psu_t_554").removeClass( "panel-primary" );
	      	$("#panel_psu_t_554").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_554 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_554").removeClass( "panel-danger" );
	      	$("#panel_psu_t_554").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_554 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});