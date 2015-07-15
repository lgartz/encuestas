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
		if ($("input[name='eru_rb_44']:checked").length == 0) {
	      	$("#panel_eru_rb_44").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_44").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_44 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_44").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_44").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_44 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_45']:checked").length == 0) {
	      	$("#panel_eru_rb_45").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_45").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_45 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_45").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_45").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_45 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_46']:checked").length == 0) {
	      	$("#panel_eru_rb_46").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_46").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_46 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_46").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_46").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_46 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_47']:checked").length == 0) {
	      	$("#panel_eru_rb_47").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_47").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_47 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_47").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_47").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_47 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_48']:checked").length == 0) {
	      	$("#panel_eru_rb_48").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_48").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_48 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_48").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_48").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_48 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_49']:checked").length == 0) {
	      	$("#panel_eru_rb_49").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_49").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_49 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_49").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_49").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_49 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_50']:checked").length == 0) {
	      	$("#panel_eru_rb_50").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_50").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_50 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_50").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_50").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_50 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_51']:checked").length == 0) {
	      	$("#panel_eru_rb_51").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_51").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_51 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_51").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_51").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_51 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_52']:checked").length == 0) {
	      	$("#panel_eru_rb_52").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_52").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_52 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_52").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_52").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_52 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_53']:checked").length == 0) {
	      	$("#panel_eru_rb_53").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_53").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_53 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_53").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_53").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_53 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_54']:checked").length == 0) {
	      	$("#panel_eru_rb_54").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_54").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_54 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_54").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_54").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_54 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_55']:checked").length == 0) {
	      	$("#panel_eru_rb_55").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_55").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_55 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_55").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_55").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_55 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_56']:checked").length == 0) {
	      	$("#panel_eru_rb_56").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_56").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_56 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_56").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_56").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_56 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_57']:checked").length == 0) {
	      	$("#panel_eru_rb_57").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_57").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_57 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_57").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_57").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_57 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_58']:checked").length == 0) {
	      	$("#panel_eru_rb_58").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_58").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_58 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_58").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_58").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_58 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_59']:checked").length == 0) {
	      	$("#panel_eru_rb_59").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_59").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_59 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_59").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_59").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_59 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});