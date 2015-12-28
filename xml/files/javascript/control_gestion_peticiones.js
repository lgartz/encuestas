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
		if ($("input[name='psu_t_656']").val().trim() == "") {
	      	$("#panel_psu_t_656").removeClass( "panel-primary" );
	      	$("#panel_psu_t_656").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_656 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_656").removeClass( "panel-danger" );
	      	$("#panel_psu_t_656").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_656 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_658']").val().trim() == "") {
	      	$("#panel_psu_t_658").removeClass( "panel-primary" );
	      	$("#panel_psu_t_658").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_658 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_658").removeClass( "panel-danger" );
	      	$("#panel_psu_t_658").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_658 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_660']").val().trim() == "") {
	      	$("#panel_psu_t_660").removeClass( "panel-primary" );
	      	$("#panel_psu_t_660").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_660 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_660").removeClass( "panel-danger" );
	      	$("#panel_psu_t_660").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_660 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_662']").val().trim() == "") {
	      	$("#panel_psu_t_662").removeClass( "panel-primary" );
	      	$("#panel_psu_t_662").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_662 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_662").removeClass( "panel-danger" );
	      	$("#panel_psu_t_662").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_662 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_657']").val().trim() == "") {
	      	$("#panel_psc_ta_657").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_657").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_657 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_657").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_657").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_657 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_659']").val().trim() == "") {
	      	$("#panel_psc_ta_659").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_659").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_659 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_659").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_659").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_659 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_661']").val().trim() == "") {
	      	$("#panel_psc_ta_661").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_661").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_661 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_661").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_661").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_661 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});