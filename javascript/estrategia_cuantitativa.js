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
		if ($("input[name='eru_rb_1']:checked").length == 0) {
	      	$("#panel_eru_rb_1").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_1").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_1 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_1").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_1").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_1 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_2']:checked").length == 0) {
	      	$("#panel_eru_rb_2").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_2").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_2 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_2").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_2").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_2 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_3']:checked").length == 0) {
	      	$("#panel_eru_rb_3").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_3").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_3 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_3").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_3").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_3 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_4']:checked").length == 0) {
	      	$("#panel_eru_rb_4").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_4").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_4 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_4").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_4").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_4 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_5']:checked").length == 0) {
	      	$("#panel_eru_rb_5").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_5").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_5 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_5").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_5").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_5 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_6']:checked").length == 0) {
	      	$("#panel_eru_rb_6").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_6").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_6 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_6").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_6").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_6 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_7']:checked").length == 0) {
	      	$("#panel_eru_rb_7").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_7").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_7 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_7").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_7").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_7 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_8']:checked").length == 0) {
	      	$("#panel_eru_rb_8").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_8").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_8 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_8").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_8").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_8 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_9']:checked").length == 0) {
	      	$("#panel_eru_rb_9").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_9").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_9 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_9").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_9").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_9 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_10']:checked").length == 0) {
	      	$("#panel_eru_rb_10").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_10").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_10 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_10").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_10").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_10 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_11']:checked").length == 0) {
	      	$("#panel_eru_rb_11").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_11").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_11 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_11").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_11").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_11 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_12']:checked").length == 0) {
	      	$("#panel_eru_rb_12").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_12").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_12 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_12").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_12").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_12 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_13']:checked").length == 0) {
	      	$("#panel_eru_rb_13").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_13").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_13 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_13").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_13").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_13 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_14']:checked").length == 0) {
	      	$("#panel_eru_rb_14").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_14").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_14 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_14").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_14").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_14 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_15']:checked").length == 0) {
	      	$("#panel_eru_rb_15").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_15").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_15 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_15").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_15").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_15 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_16']:checked").length == 0) {
	      	$("#panel_eru_rb_16").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_16").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_16 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_16").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_16").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_16 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_17']:checked").length == 0) {
	      	$("#panel_eru_rb_17").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_17").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_17 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_17").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_17").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_17 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_18']:checked").length == 0) {
	      	$("#panel_eru_rb_18").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_18").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_18 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_18").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_18").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_18 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_19']:checked").length == 0) {
	      	$("#panel_eru_rb_19").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_19").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_19 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_19").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_19").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_19 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_20']:checked").length == 0) {
	      	$("#panel_eru_rb_20").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_20").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_20 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_20").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_20").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_20 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});