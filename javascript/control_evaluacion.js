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
		if ($("input[name='psu_t_619']").val().trim() == "") {
	      	$("#panel_psu_t_619").removeClass( "panel-primary" );
	      	$("#panel_psu_t_619").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_619 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_619").removeClass( "panel-danger" );
	      	$("#panel_psu_t_619").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_619 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_620']").val().trim() == "") {
	      	$("#panel_psu_t_620").removeClass( "panel-primary" );
	      	$("#panel_psu_t_620").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_620 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_620").removeClass( "panel-danger" );
	      	$("#panel_psu_t_620").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_620 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_621']").val().trim() == "") {
	      	$("#panel_psu_t_621").removeClass( "panel-primary" );
	      	$("#panel_psu_t_621").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_621 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_621").removeClass( "panel-danger" );
	      	$("#panel_psu_t_621").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_621 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_622']").val().trim() == "") {
	      	$("#panel_psu_t_622").removeClass( "panel-primary" );
	      	$("#panel_psu_t_622").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_622 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_622").removeClass( "panel-danger" );
	      	$("#panel_psu_t_622").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_622 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_623']").val().trim() == "") {
	      	$("#panel_psu_t_623").removeClass( "panel-primary" );
	      	$("#panel_psu_t_623").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_623 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_623").removeClass( "panel-danger" );
	      	$("#panel_psu_t_623").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_623 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});