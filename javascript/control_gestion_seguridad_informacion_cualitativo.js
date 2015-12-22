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
		if ($("input[name='psu_t_569']").val().trim() == "") {
	      	$("#panel_psu_t_569").removeClass( "panel-primary" );
	      	$("#panel_psu_t_569").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_569 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_569").removeClass( "panel-danger" );
	      	$("#panel_psu_t_569").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_569 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_570']").val().trim() == "") {
	      	$("#panel_psu_t_570").removeClass( "panel-primary" );
	      	$("#panel_psu_t_570").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_570 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_570").removeClass( "panel-danger" );
	      	$("#panel_psu_t_570").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_570 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_571']").val().trim() == "") {
	      	$("#panel_psu_t_571").removeClass( "panel-primary" );
	      	$("#panel_psu_t_571").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_571 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_571").removeClass( "panel-danger" );
	      	$("#panel_psu_t_571").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_571 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});