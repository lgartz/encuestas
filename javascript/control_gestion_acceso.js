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
		if ($("input[name='psu_t_669']").val().trim() == "") {
	      	$("#panel_psu_t_669").removeClass( "panel-primary" );
	      	$("#panel_psu_t_669").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_669 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_669").removeClass( "panel-danger" );
	      	$("#panel_psu_t_669").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_669 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_670']").val().trim() == "") {
	      	$("#panel_psu_t_670").removeClass( "panel-primary" );
	      	$("#panel_psu_t_670").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_670 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_670").removeClass( "panel-danger" );
	      	$("#panel_psu_t_670").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_670 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_671']").val().trim() == "") {
	      	$("#panel_psu_t_671").removeClass( "panel-primary" );
	      	$("#panel_psu_t_671").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_671 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_671").removeClass( "panel-danger" );
	      	$("#panel_psu_t_671").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_671 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_672']").val().trim() == "") {
	      	$("#panel_psu_t_672").removeClass( "panel-primary" );
	      	$("#panel_psu_t_672").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_672 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_672").removeClass( "panel-danger" );
	      	$("#panel_psu_t_672").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_672 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_673']").val().trim() == "") {
	      	$("#panel_psu_t_673").removeClass( "panel-primary" );
	      	$("#panel_psu_t_673").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_673 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_673").removeClass( "panel-danger" );
	      	$("#panel_psu_t_673").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_673 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});