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
		if ($("input[name='psu_t_624']").val().trim() == "") {
	      	$("#panel_psu_t_624").removeClass( "panel-primary" );
	      	$("#panel_psu_t_624").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_624 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_624").removeClass( "panel-danger" );
	      	$("#panel_psu_t_624").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_624 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_625']").val().trim() == "") {
	      	$("#panel_psu_t_625").removeClass( "panel-primary" );
	      	$("#panel_psu_t_625").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_625 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_625").removeClass( "panel-danger" );
	      	$("#panel_psu_t_625").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_625 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_626']").val().trim() == "") {
	      	$("#panel_psu_t_626").removeClass( "panel-primary" );
	      	$("#panel_psu_t_626").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_626 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_626").removeClass( "panel-danger" );
	      	$("#panel_psu_t_626").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_626 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_627']").val().trim() == "") {
	      	$("#panel_psu_t_627").removeClass( "panel-primary" );
	      	$("#panel_psu_t_627").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_627 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_627").removeClass( "panel-danger" );
	      	$("#panel_psu_t_627").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_627 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_628']").val().trim() == "") {
	      	$("#panel_psu_t_628").removeClass( "panel-primary" );
	      	$("#panel_psu_t_628").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_628 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_628").removeClass( "panel-danger" );
	      	$("#panel_psu_t_628").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_628 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_629']").val().trim() == "") {
	      	$("#panel_psu_t_629").removeClass( "panel-primary" );
	      	$("#panel_psu_t_629").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_629 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_629").removeClass( "panel-danger" );
	      	$("#panel_psu_t_629").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_629 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_630']").val().trim() == "") {
	      	$("#panel_psu_t_630").removeClass( "panel-primary" );
	      	$("#panel_psu_t_630").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_630 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_630").removeClass( "panel-danger" );
	      	$("#panel_psu_t_630").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_630 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});