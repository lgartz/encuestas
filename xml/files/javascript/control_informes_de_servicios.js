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
		if ($("input[name='psu_t_687']").val().trim() == "") {
	      	$("#panel_psu_t_687").removeClass( "panel-primary" );
	      	$("#panel_psu_t_687").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_687 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_687").removeClass( "panel-danger" );
	      	$("#panel_psu_t_687").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_687 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_688']").val().trim() == "") {
	      	$("#panel_psu_t_688").removeClass( "panel-primary" );
	      	$("#panel_psu_t_688").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_688 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_688").removeClass( "panel-danger" );
	      	$("#panel_psu_t_688").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_688 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_689']").val().trim() == "") {
	      	$("#panel_psu_t_689").removeClass( "panel-primary" );
	      	$("#panel_psu_t_689").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_689 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_689").removeClass( "panel-danger" );
	      	$("#panel_psu_t_689").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_689 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_690']").val().trim() == "") {
	      	$("#panel_psu_t_690").removeClass( "panel-primary" );
	      	$("#panel_psu_t_690").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_690 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_690").removeClass( "panel-danger" );
	      	$("#panel_psu_t_690").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_690 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_691']").val().trim() == "") {
	      	$("#panel_psu_t_691").removeClass( "panel-primary" );
	      	$("#panel_psu_t_691").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_691 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_691").removeClass( "panel-danger" );
	      	$("#panel_psu_t_691").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_691 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_692']").val().trim() == "") {
	      	$("#panel_psu_t_692").removeClass( "panel-primary" );
	      	$("#panel_psu_t_692").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_692 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_692").removeClass( "panel-danger" );
	      	$("#panel_psu_t_692").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_692 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_693']").val().trim() == "") {
	      	$("#panel_psu_t_693").removeClass( "panel-primary" );
	      	$("#panel_psu_t_693").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_693 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_693").removeClass( "panel-danger" );
	      	$("#panel_psu_t_693").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_693 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_694']").val().trim() == "") {
	      	$("#panel_psu_t_694").removeClass( "panel-primary" );
	      	$("#panel_psu_t_694").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_694 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_694").removeClass( "panel-danger" );
	      	$("#panel_psu_t_694").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_694 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_695']").val().trim() == "") {
	      	$("#panel_psu_t_695").removeClass( "panel-primary" );
	      	$("#panel_psu_t_695").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_695 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_695").removeClass( "panel-danger" );
	      	$("#panel_psu_t_695").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_695 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_696']").val().trim() == "") {
	      	$("#panel_psu_t_696").removeClass( "panel-primary" );
	      	$("#panel_psu_t_696").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_696 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_696").removeClass( "panel-danger" );
	      	$("#panel_psu_t_696").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_696 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_697']").val().trim() == "") {
	      	$("#panel_psu_t_697").removeClass( "panel-primary" );
	      	$("#panel_psu_t_697").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_697 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_697").removeClass( "panel-danger" );
	      	$("#panel_psu_t_697").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_697 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});