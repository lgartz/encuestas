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
		if($("input[name='mmr_rb_60_1']:checked").length == 0||$("input[name='mmr_rb_60_2']:checked").length == 0||$("input[name='mmr_rb_60_3']:checked").length == 0||$("input[name='mmr_rb_60_4']:checked").length == 0||$("input[name='mmr_rb_60_5']:checked").length == 0){
			$("#panel_mmr_rb_60").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_60").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_60 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_60").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_60").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_60 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_61_1']:checked").length == 0||$("input[name='mmr_rb_61_2']:checked").length == 0||$("input[name='mmr_rb_61_3']:checked").length == 0||$("input[name='mmr_rb_61_4']:checked").length == 0||$("input[name='mmr_rb_61_5']:checked").length == 0||$("input[name='mmr_rb_61_6']:checked").length == 0){
			$("#panel_mmr_rb_61").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_61").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_61 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_61").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_61").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_61 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_62_1']:checked").length == 0||$("input[name='mmr_rb_62_2']:checked").length == 0||$("input[name='mmr_rb_62_3']:checked").length == 0||$("input[name='mmr_rb_62_4']:checked").length == 0||$("input[name='mmr_rb_62_5']:checked").length == 0){
			$("#panel_mmr_rb_62").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_62").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_62 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_62").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_62").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_62 h4 small b").addClass("message_error");
		}
		return resultado;
	}   
    
});