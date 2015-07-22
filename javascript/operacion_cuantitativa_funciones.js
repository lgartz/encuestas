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
		if ($("input[name='eru_rb_433']:checked").length == 0) {
	      	$("#panel_eru_rb_433").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_433").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_433 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_433").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_433").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_433 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_434']:checked").length == 0) {
	      	$("#panel_eru_rb_434").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_434").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_434 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_434").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_434").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_434 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_435']:checked").length == 0) {
	      	$("#panel_eru_rb_435").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_435").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_435 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_435").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_435").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_435 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_436']:checked").length == 0) {
	      	$("#panel_eru_rb_436").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_436").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_436 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_436").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_436").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_436 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_437']:checked").length == 0) {
	      	$("#panel_eru_rb_437").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_437").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_437 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_437").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_437").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_437 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_438']:checked").length == 0) {
	      	$("#panel_eru_rb_438").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_438").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_438 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_438").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_438").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_438 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_439']:checked").length == 0) {
	      	$("#panel_eru_rb_439").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_439").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_439 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_439").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_439").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_439 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_440']:checked").length == 0) {
	      	$("#panel_eru_rb_440").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_440").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_440 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_440").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_440").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_440 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_441']:checked").length == 0) {
	      	$("#panel_eru_rb_441").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_441").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_441 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_441").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_441").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_441 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_442']:checked").length == 0) {
	      	$("#panel_eru_rb_442").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_442").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_442 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_442").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_442").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_442 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_443']:checked").length == 0) {
	      	$("#panel_eru_rb_443").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_443").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_443 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_443").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_443").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_443 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_444']:checked").length == 0) {
	      	$("#panel_eru_rb_444").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_444").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_444 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_444").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_444").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_444 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});