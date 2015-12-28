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
		if ($("input[name='psu_t_510']").val().trim() == "") {
	      	$("#panel_psu_t_510").removeClass( "panel-primary" );
	      	$("#panel_psu_t_510").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_510 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_510").removeClass( "panel-danger" );
	      	$("#panel_psu_t_510").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_510 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_511']").val().trim() == "") {
	      	$("#panel_psu_t_511").removeClass( "panel-primary" );
	      	$("#panel_psu_t_511").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_511 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_511").removeClass( "panel-danger" );
	      	$("#panel_psu_t_511").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_511 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_512']").val().trim() == "") {
	      	$("#panel_psu_t_512").removeClass( "panel-primary" );
	      	$("#panel_psu_t_512").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_512 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_512").removeClass( "panel-danger" );
	      	$("#panel_psu_t_512").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_512 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_513']").val().trim() == "") {
	      	$("#panel_psu_t_513").removeClass( "panel-primary" );
	      	$("#panel_psu_t_513").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_513 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_513").removeClass( "panel-danger" );
	      	$("#panel_psu_t_513").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_513 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_514']").val().trim() == "") {
	      	$("#panel_psu_t_514").removeClass( "panel-primary" );
	      	$("#panel_psu_t_514").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_514 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_514").removeClass( "panel-danger" );
	      	$("#panel_psu_t_514").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_514 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_515']").val().trim() == "") {
	      	$("#panel_psu_t_515").removeClass( "panel-primary" );
	      	$("#panel_psu_t_515").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_515 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_515").removeClass( "panel-danger" );
	      	$("#panel_psu_t_515").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_515 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_516']").val().trim() == "") {
	      	$("#panel_psu_t_516").removeClass( "panel-primary" );
	      	$("#panel_psu_t_516").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_516 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_516").removeClass( "panel-danger" );
	      	$("#panel_psu_t_516").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_516 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_517']").val().trim() == "") {
	      	$("#panel_psu_t_517").removeClass( "panel-primary" );
	      	$("#panel_psu_t_517").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_517 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_517").removeClass( "panel-danger" );
	      	$("#panel_psu_t_517").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_517 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_518']").val().trim() == "") {
	      	$("#panel_psu_t_518").removeClass( "panel-primary" );
	      	$("#panel_psu_t_518").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_518 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_518").removeClass( "panel-danger" );
	      	$("#panel_psu_t_518").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_518 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_519']").val().trim() == "") {
	      	$("#panel_psu_t_519").removeClass( "panel-primary" );
	      	$("#panel_psu_t_519").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_519 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_519").removeClass( "panel-danger" );
	      	$("#panel_psu_t_519").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_519 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_520']").val().trim() == "") {
	      	$("#panel_psu_t_520").removeClass( "panel-primary" );
	      	$("#panel_psu_t_520").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_520 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_520").removeClass( "panel-danger" );
	      	$("#panel_psu_t_520").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_520 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_521']").val().trim() == "") {
	      	$("#panel_psu_t_521").removeClass( "panel-primary" );
	      	$("#panel_psu_t_521").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_521 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_521").removeClass( "panel-danger" );
	      	$("#panel_psu_t_521").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_521 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_522']").val().trim() == "") {
	      	$("#panel_psu_t_522").removeClass( "panel-primary" );
	      	$("#panel_psu_t_522").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_522 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_522").removeClass( "panel-danger" );
	      	$("#panel_psu_t_522").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_522 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_523']").val().trim() == "") {
	      	$("#panel_psu_t_523").removeClass( "panel-primary" );
	      	$("#panel_psu_t_523").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_523 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_523").removeClass( "panel-danger" );
	      	$("#panel_psu_t_523").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_523 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_524']").val().trim() == "") {
	      	$("#panel_psu_t_524").removeClass( "panel-primary" );
	      	$("#panel_psu_t_524").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_524 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_524").removeClass( "panel-danger" );
	      	$("#panel_psu_t_524").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_524 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});