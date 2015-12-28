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
		if($("input[name='mmr_rb_231_1']:checked").length == 0||$("input[name='mmr_rb_231_2']:checked").length == 0||$("input[name='mmr_rb_231_3']:checked").length == 0||$("input[name='mmr_rb_231_4']:checked").length == 0||$("input[name='mmr_rb_231_5']:checked").length == 0||$("input[name='mmr_rb_231_6']:checked").length == 0||$("input[name='mmr_rb_231_7']:checked").length == 0||$("input[name='mmr_rb_231_8']:checked").length == 0||$("input[name='mmr_rb_231_9']:checked").length == 0||$("input[name='mmr_rb_231_10']:checked").length == 0||$("input[name='mmr_rb_231_11']:checked").length == 0||$("input[name='mmr_rb_231_12']:checked").length == 0||$("input[name='mmr_rb_231_13']:checked").length == 0||$("input[name='mmr_rb_231_14']:checked").length == 0||$("input[name='mmr_rb_231_15']:checked").length == 0){
			$("#panel_mmr_rb_231").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_231").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_231 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_231").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_231").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_231 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_232_1']:checked").length == 0||$("input[name='mmr_rb_232_2']:checked").length == 0||$("input[name='mmr_rb_232_3']:checked").length == 0||$("input[name='mmr_rb_232_4']:checked").length == 0||$("input[name='mmr_rb_232_5']:checked").length == 0||$("input[name='mmr_rb_232_6']:checked").length == 0||$("input[name='mmr_rb_232_7']:checked").length == 0||$("input[name='mmr_rb_232_8']:checked").length == 0||$("input[name='mmr_rb_232_9']:checked").length == 0||$("input[name='mmr_rb_232_10']:checked").length == 0||$("input[name='mmr_rb_232_11']:checked").length == 0||$("input[name='mmr_rb_232_12']:checked").length == 0||$("input[name='mmr_rb_232_13']:checked").length == 0||$("input[name='mmr_rb_232_14']:checked").length == 0||$("input[name='mmr_rb_232_15']:checked").length == 0||$("input[name='mmr_rb_232_16']:checked").length == 0||$("input[name='mmr_rb_232_17']:checked").length == 0||$("input[name='mmr_rb_232_18']:checked").length == 0||$("input[name='mmr_rb_232_19']:checked").length == 0){
			$("#panel_mmr_rb_232").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_232").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_232 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_232").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_232").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_232 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_233_1']:checked").length == 0||$("input[name='mmr_rb_233_2']:checked").length == 0||$("input[name='mmr_rb_233_3']:checked").length == 0||$("input[name='mmr_rb_233_4']:checked").length == 0||$("input[name='mmr_rb_233_5']:checked").length == 0||$("input[name='mmr_rb_233_6']:checked").length == 0||$("input[name='mmr_rb_233_7']:checked").length == 0||$("input[name='mmr_rb_233_8']:checked").length == 0||$("input[name='mmr_rb_233_9']:checked").length == 0||$("input[name='mmr_rb_233_10']:checked").length == 0||$("input[name='mmr_rb_233_11']:checked").length == 0||$("input[name='mmr_rb_233_12']:checked").length == 0||$("input[name='mmr_rb_233_13']:checked").length == 0){
			$("#panel_mmr_rb_233").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_233").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_233 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_233").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_233").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_233 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_234_1']:checked").length == 0||$("input[name='mmr_rb_234_2']:checked").length == 0||$("input[name='mmr_rb_234_3']:checked").length == 0||$("input[name='mmr_rb_234_4']:checked").length == 0||$("input[name='mmr_rb_234_5']:checked").length == 0||$("input[name='mmr_rb_234_6']:checked").length == 0||$("input[name='mmr_rb_234_7']:checked").length == 0){
			$("#panel_mmr_rb_234").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_234").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_234 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_234").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_234").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_234 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_235_1']:checked").length == 0||$("input[name='mmr_rb_235_2']:checked").length == 0||$("input[name='mmr_rb_235_3']:checked").length == 0||$("input[name='mmr_rb_235_4']:checked").length == 0){
			$("#panel_mmr_rb_235").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_235").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_235 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_235").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_235").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_235 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_236_1']:checked").length == 0||$("input[name='mmr_rb_236_2']:checked").length == 0||$("input[name='mmr_rb_236_3']:checked").length == 0||$("input[name='mmr_rb_236_4']:checked").length == 0||$("input[name='mmr_rb_236_5']:checked").length == 0||$("input[name='mmr_rb_236_6']:checked").length == 0||$("input[name='mmr_rb_236_7']:checked").length == 0){
			$("#panel_mmr_rb_236").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_236").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_236 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_236").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_236").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_236 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_237_1']:checked").length == 0||$("input[name='mmr_rb_237_2']:checked").length == 0||$("input[name='mmr_rb_237_3']:checked").length == 0||$("input[name='mmr_rb_237_4']:checked").length == 0||$("input[name='mmr_rb_237_5']:checked").length == 0||$("input[name='mmr_rb_237_6']:checked").length == 0||$("input[name='mmr_rb_237_7']:checked").length == 0||$("input[name='mmr_rb_237_8']:checked").length == 0||$("input[name='mmr_rb_237_9']:checked").length == 0||$("input[name='mmr_rb_237_10']:checked").length == 0||$("input[name='mmr_rb_237_11']:checked").length == 0||$("input[name='mmr_rb_237_12']:checked").length == 0||$("input[name='mmr_rb_237_13']:checked").length == 0||$("input[name='mmr_rb_237_14']:checked").length == 0||$("input[name='mmr_rb_237_15']:checked").length == 0){
			$("#panel_mmr_rb_237").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_237").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_237 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_237").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_237").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_237 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_238_1']:checked").length == 0||$("input[name='mmr_rb_238_2']:checked").length == 0||$("input[name='mmr_rb_238_3']:checked").length == 0||$("input[name='mmr_rb_238_4']:checked").length == 0||$("input[name='mmr_rb_238_5']:checked").length == 0||$("input[name='mmr_rb_238_6']:checked").length == 0||$("input[name='mmr_rb_238_7']:checked").length == 0||$("input[name='mmr_rb_238_8']:checked").length == 0||$("input[name='mmr_rb_238_9']:checked").length == 0||$("input[name='mmr_rb_238_10']:checked").length == 0){
			$("#panel_mmr_rb_238").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_238").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_238 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_238").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_238").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_238 h4 small b").addClass("message_error");
		}
		return resultado;
	}   
    
});