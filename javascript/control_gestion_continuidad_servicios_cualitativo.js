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
		if ($("input[name='psu_t_560']").val().trim() == "") {
	      	$("#panel_psu_t_560").removeClass( "panel-primary" );
	      	$("#panel_psu_t_560").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_560 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_560").removeClass( "panel-danger" );
	      	$("#panel_psu_t_560").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_560 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_561']").val().trim() == "") {
	      	$("#panel_psu_t_561").removeClass( "panel-primary" );
	      	$("#panel_psu_t_561").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_561 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_561").removeClass( "panel-danger" );
	      	$("#panel_psu_t_561").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_561 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_562']").val().trim() == "") {
	      	$("#panel_psu_t_562").removeClass( "panel-primary" );
	      	$("#panel_psu_t_562").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_562 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_562").removeClass( "panel-danger" );
	      	$("#panel_psu_t_562").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_562 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_563']").val().trim() == "") {
	      	$("#panel_psu_t_563").removeClass( "panel-primary" );
	      	$("#panel_psu_t_563").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_563 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_563").removeClass( "panel-danger" );
	      	$("#panel_psu_t_563").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_563 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_564']").val().trim() == "") {
	      	$("#panel_psu_t_564").removeClass( "panel-primary" );
	      	$("#panel_psu_t_564").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_564 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_564").removeClass( "panel-danger" );
	      	$("#panel_psu_t_564").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_564 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});