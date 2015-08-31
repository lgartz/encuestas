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
		if ($("input[name='psu_t_631']").val().trim() == "") {
	      	$("#panel_psu_t_631").removeClass( "panel-primary" );
	      	$("#panel_psu_t_631").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_631 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_631").removeClass( "panel-danger" );
	      	$("#panel_psu_t_631").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_631 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_632']").val().trim() == "") {
	      	$("#panel_psu_t_632").removeClass( "panel-primary" );
	      	$("#panel_psu_t_632").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_632 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_632").removeClass( "panel-danger" );
	      	$("#panel_psu_t_632").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_632 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_633']").val().trim() == "") {
	      	$("#panel_psu_t_633").removeClass( "panel-primary" );
	      	$("#panel_psu_t_633").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_633 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_633").removeClass( "panel-danger" );
	      	$("#panel_psu_t_633").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_633 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_634']").val().trim() == "") {
	      	$("#panel_psu_t_634").removeClass( "panel-primary" );
	      	$("#panel_psu_t_634").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_634 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_634").removeClass( "panel-danger" );
	      	$("#panel_psu_t_634").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_634 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_635']").val().trim() == "") {
	      	$("#panel_psu_t_635").removeClass( "panel-primary" );
	      	$("#panel_psu_t_635").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_635 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_635").removeClass( "panel-danger" );
	      	$("#panel_psu_t_635").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_635 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_636']").val().trim() == "") {
	      	$("#panel_psu_t_636").removeClass( "panel-primary" );
	      	$("#panel_psu_t_636").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_636 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_636").removeClass( "panel-danger" );
	      	$("#panel_psu_t_636").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_636 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_637']").val().trim() == "") {
	      	$("#panel_psu_t_637").removeClass( "panel-primary" );
	      	$("#panel_psu_t_637").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_637 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_637").removeClass( "panel-danger" );
	      	$("#panel_psu_t_637").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_637 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_638']").val().trim() == "") {
	      	$("#panel_psu_t_638").removeClass( "panel-primary" );
	      	$("#panel_psu_t_638").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_638 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_638").removeClass( "panel-danger" );
	      	$("#panel_psu_t_638").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_638 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_639']").val().trim() == "") {
	      	$("#panel_psu_t_639").removeClass( "panel-primary" );
	      	$("#panel_psu_t_639").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_639 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_639").removeClass( "panel-danger" );
	      	$("#panel_psu_t_639").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_639 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_640']").val().trim() == "") {
	      	$("#panel_psu_t_640").removeClass( "panel-primary" );
	      	$("#panel_psu_t_640").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_640 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_640").removeClass( "panel-danger" );
	      	$("#panel_psu_t_640").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_640 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});