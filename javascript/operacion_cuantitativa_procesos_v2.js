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
		if($("input[name='mmr_rb_422_1']:checked").length == 0||$("input[name='mmr_rb_422_2']:checked").length == 0||$("input[name='mmr_rb_422_3']:checked").length == 0||$("input[name='mmr_rb_422_4']:checked").length == 0||$("input[name='mmr_rb_422_5']:checked").length == 0||$("input[name='mmr_rb_422_6']:checked").length == 0||$("input[name='mmr_rb_422_7']:checked").length == 0||$("input[name='mmr_rb_422_8']:checked").length == 0){
			$("#panel_mmr_rb_422").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_422").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_422 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_422").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_422").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_422 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_423_1']:checked").length == 0||$("input[name='mmr_rb_423_2']:checked").length == 0||$("input[name='mmr_rb_423_3']:checked").length == 0||$("input[name='mmr_rb_423_4']:checked").length == 0||$("input[name='mmr_rb_423_5']:checked").length == 0||$("input[name='mmr_rb_423_6']:checked").length == 0){
			$("#panel_mmr_rb_423").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_423").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_423 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_423").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_423").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_423 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_424_1']:checked").length == 0||$("input[name='mmr_rb_424_2']:checked").length == 0||$("input[name='mmr_rb_424_3']:checked").length == 0||$("input[name='mmr_rb_424_4']:checked").length == 0||$("input[name='mmr_rb_424_5']:checked").length == 0){
			$("#panel_mmr_rb_424").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_424").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_424 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_424").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_424").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_424 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_425_1']:checked").length == 0||$("input[name='mmr_rb_425_2']:checked").length == 0||$("input[name='mmr_rb_425_3']:checked").length == 0||$("input[name='mmr_rb_425_4']:checked").length == 0||$("input[name='mmr_rb_425_5']:checked").length == 0||$("input[name='mmr_rb_425_6']:checked").length == 0||$("input[name='mmr_rb_425_7']:checked").length == 0||$("input[name='mmr_rb_425_8']:checked").length == 0||$("input[name='mmr_rb_425_9']:checked").length == 0||$("input[name='mmr_rb_425_10']:checked").length == 0){
			$("#panel_mmr_rb_425").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_425").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_425 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_425").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_425").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_425 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_426_1']:checked").length == 0||$("input[name='mmr_rb_426_2']:checked").length == 0){
			$("#panel_mmr_rb_426").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_426").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_426 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_426").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_426").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_426 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_427_1']:checked").length == 0||$("input[name='mmr_rb_427_2']:checked").length == 0||$("input[name='mmr_rb_427_3']:checked").length == 0){
			$("#panel_mmr_rb_427").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_427").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_427 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_427").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_427").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_427 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_428_1']:checked").length == 0||$("input[name='mmr_rb_428_2']:checked").length == 0||$("input[name='mmr_rb_428_3']:checked").length == 0||$("input[name='mmr_rb_428_4']:checked").length == 0){
			$("#panel_mmr_rb_428").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_428").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_428 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_428").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_428").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_428 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_429_1']:checked").length == 0||$("input[name='mmr_rb_429_2']:checked").length == 0){
			$("#panel_mmr_rb_429").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_429").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_429 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_429").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_429").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_429 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_430_1']:checked").length == 0){
			$("#panel_mmr_rb_430").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_430").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_430 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_430").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_430").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_430 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_431_1']:checked").length == 0||$("input[name='mmr_rb_431_2']:checked").length == 0){
			$("#panel_mmr_rb_431").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_431").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_431 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_431").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_431").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_431 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_432_1']:checked").length == 0||$("input[name='mmr_rb_432_2']:checked").length == 0||$("input[name='mmr_rb_432_3']:checked").length == 0){
			$("#panel_mmr_rb_432").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_432").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_432 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_432").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_432").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_432 h4 small b").addClass("message_error");
		}
		return resultado;
	}   
    
});