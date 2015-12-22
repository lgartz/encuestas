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
		if ($("input[name='psu_t_584']").val().trim() == "") {
	      	$("#panel_psu_t_584").removeClass( "panel-primary" );
	      	$("#panel_psu_t_584").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_584 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_584").removeClass( "panel-danger" );
	      	$("#panel_psu_t_584").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_584 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_585']").val().trim() == "") {
	      	$("#panel_psu_t_585").removeClass( "panel-primary" );
	      	$("#panel_psu_t_585").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_585 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_585").removeClass( "panel-danger" );
	      	$("#panel_psu_t_585").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_585 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_586']").val().trim() == "") {
	      	$("#panel_psu_t_586").removeClass( "panel-primary" );
	      	$("#panel_psu_t_586").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_586 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_586").removeClass( "panel-danger" );
	      	$("#panel_psu_t_586").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_586 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_587']").val().trim() == "") {
	      	$("#panel_psu_t_587").removeClass( "panel-primary" );
	      	$("#panel_psu_t_587").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_587 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_587").removeClass( "panel-danger" );
	      	$("#panel_psu_t_587").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_587 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_588']").val().trim() == "") {
	      	$("#panel_psu_t_588").removeClass( "panel-primary" );
	      	$("#panel_psu_t_588").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_588 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_588").removeClass( "panel-danger" );
	      	$("#panel_psu_t_588").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_588 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_589']").val().trim() == "") {
	      	$("#panel_psu_t_589").removeClass( "panel-primary" );
	      	$("#panel_psu_t_589").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_589 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_589").removeClass( "panel-danger" );
	      	$("#panel_psu_t_589").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_589 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_590']").val().trim() == "") {
	      	$("#panel_psu_t_590").removeClass( "panel-primary" );
	      	$("#panel_psu_t_590").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_590 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_590").removeClass( "panel-danger" );
	      	$("#panel_psu_t_590").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_590 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_591']").val().trim() == "") {
	      	$("#panel_psu_t_591").removeClass( "panel-primary" );
	      	$("#panel_psu_t_591").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_591 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_591").removeClass( "panel-danger" );
	      	$("#panel_psu_t_591").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_591 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_592']").val().trim() == "") {
	      	$("#panel_psu_t_592").removeClass( "panel-primary" );
	      	$("#panel_psu_t_592").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_592 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_592").removeClass( "panel-danger" );
	      	$("#panel_psu_t_592").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_592 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_593']").val().trim() == "") {
	      	$("#panel_psu_t_593").removeClass( "panel-primary" );
	      	$("#panel_psu_t_593").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_593 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_593").removeClass( "panel-danger" );
	      	$("#panel_psu_t_593").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_593 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_594']").val().trim() == "") {
	      	$("#panel_psu_t_594").removeClass( "panel-primary" );
	      	$("#panel_psu_t_594").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_594 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_594").removeClass( "panel-danger" );
	      	$("#panel_psu_t_594").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_594 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_595']").val().trim() == "") {
	      	$("#panel_psu_t_595").removeClass( "panel-primary" );
	      	$("#panel_psu_t_595").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_595 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_595").removeClass( "panel-danger" );
	      	$("#panel_psu_t_595").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_595 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});