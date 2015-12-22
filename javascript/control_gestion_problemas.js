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
		if ($("input[name='psu_t_663']").val().trim() == "") {
	      	$("#panel_psu_t_663").removeClass( "panel-primary" );
	      	$("#panel_psu_t_663").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_663 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_663").removeClass( "panel-danger" );
	      	$("#panel_psu_t_663").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_663 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_664']").val().trim() == "") {
	      	$("#panel_psu_t_664").removeClass( "panel-primary" );
	      	$("#panel_psu_t_664").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_664 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_664").removeClass( "panel-danger" );
	      	$("#panel_psu_t_664").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_664 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_665']").val().trim() == "") {
	      	$("#panel_psu_t_665").removeClass( "panel-primary" );
	      	$("#panel_psu_t_665").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_665 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_665").removeClass( "panel-danger" );
	      	$("#panel_psu_t_665").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_665 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_666']").val().trim() == "") {
	      	$("#panel_psu_t_666").removeClass( "panel-primary" );
	      	$("#panel_psu_t_666").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_666 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_666").removeClass( "panel-danger" );
	      	$("#panel_psu_t_666").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_666 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_667']").val().trim() == "") {
	      	$("#panel_psu_t_667").removeClass( "panel-primary" );
	      	$("#panel_psu_t_667").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_667 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_667").removeClass( "panel-danger" );
	      	$("#panel_psu_t_667").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_667 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_668']").val().trim() == "") {
	      	$("#panel_psu_t_668").removeClass( "panel-primary" );
	      	$("#panel_psu_t_668").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_668 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_668").removeClass( "panel-danger" );
	      	$("#panel_psu_t_668").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_668 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});