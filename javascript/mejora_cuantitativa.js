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
		if ($("input[name='eru_rb_458']:checked").length == 0) {
	      	$("#panel_eru_rb_458").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_458").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_458 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_458").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_458").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_458 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_459']:checked").length == 0) {
	      	$("#panel_eru_rb_459").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_459").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_459 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_459").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_459").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_459 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_460']:checked").length == 0) {
	      	$("#panel_eru_rb_460").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_460").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_460 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_460").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_460").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_460 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_511']:checked").length == 0) {
	      	$("#panel_eru_rb_511").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_511").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_511 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_511").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_511").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_511 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_461']:checked").length == 0) {
	      	$("#panel_eru_rb_461").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_461").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_461 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_461").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_461").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_461 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_462']:checked").length == 0) {
	      	$("#panel_eru_rb_462").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_462").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_462 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_462").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_462").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_462 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_463']:checked").length == 0) {
	      	$("#panel_eru_rb_463").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_463").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_463 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_463").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_463").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_463 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_464']:checked").length == 0) {
	      	$("#panel_eru_rb_464").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_464").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_464 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_464").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_464").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_464 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_465']:checked").length == 0) {
	      	$("#panel_eru_rb_465").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_465").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_465 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_465").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_465").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_465 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_466']:checked").length == 0) {
	      	$("#panel_eru_rb_466").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_466").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_466 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_466").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_466").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_466 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_467']:checked").length == 0) {
	      	$("#panel_eru_rb_467").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_467").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_467 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_467").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_467").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_467 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_468']:checked").length == 0) {
	      	$("#panel_eru_rb_468").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_468").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_468 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_468").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_468").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_468 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_469']:checked").length == 0) {
	      	$("#panel_eru_rb_469").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_469").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_469 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_469").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_469").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_469 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_470']:checked").length == 0) {
	      	$("#panel_eru_rb_470").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_470").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_470 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_470").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_470").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_470 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_471']:checked").length == 0) {
	      	$("#panel_eru_rb_471").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_471").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_471 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_471").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_471").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_471 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_472']:checked").length == 0) {
	      	$("#panel_eru_rb_472").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_472").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_472 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_472").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_472").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_472 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_473']:checked").length == 0) {
	      	$("#panel_eru_rb_473").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_473").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_473 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_473").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_473").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_473 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_474']:checked").length == 0) {
	      	$("#panel_eru_rb_474").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_474").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_474 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_474").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_474").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_474 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_475']:checked").length == 0) {
	      	$("#panel_eru_rb_475").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_475").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_475 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_475").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_475").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_475 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_476']:checked").length == 0) {
	      	$("#panel_eru_rb_476").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_476").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_476 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_476").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_476").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_476 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_477']:checked").length == 0) {
	      	$("#panel_eru_rb_477").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_477").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_477 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_477").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_477").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_477 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_478']:checked").length == 0) {
	      	$("#panel_eru_rb_478").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_478").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_478 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_478").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_478").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_478 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_479']:checked").length == 0) {
	      	$("#panel_eru_rb_479").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_479").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_479 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_479").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_479").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_479 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_480']:checked").length == 0) {
	      	$("#panel_eru_rb_480").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_480").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_480 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_480").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_480").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_480 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});