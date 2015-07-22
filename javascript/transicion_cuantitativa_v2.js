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
		if($("input[name='mmr_rb_135_1']:checked").length == 0||$("input[name='mmr_rb_135_2']:checked").length == 0||$("input[name='mmr_rb_135_3']:checked").length == 0||$("input[name='mmr_rb_135_4']:checked").length == 0||$("input[name='mmr_rb_135_5']:checked").length == 0||$("input[name='mmr_rb_135_6']:checked").length == 0){
			$("#panel_mmr_rb_135").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_135").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_135 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_135").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_135").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_135 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_136_1']:checked").length == 0||$("input[name='mmr_rb_136_2']:checked").length == 0||$("input[name='mmr_rb_136_3']:checked").length == 0){
			$("#panel_mmr_rb_136").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_136").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_136 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_136").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_136").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_136 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_137_1']:checked").length == 0||$("input[name='mmr_rb_137_2']:checked").length == 0||$("input[name='mmr_rb_137_3']:checked").length == 0||$("input[name='mmr_rb_137_4']:checked").length == 0||$("input[name='mmr_rb_137_5']:checked").length == 0||$("input[name='mmr_rb_137_6']:checked").length == 0||$("input[name='mmr_rb_137_7']:checked").length == 0||$("input[name='mmr_rb_137_8']:checked").length == 0||$("input[name='mmr_rb_137_9']:checked").length == 0||$("input[name='mmr_rb_137_10']:checked").length == 0||$("input[name='mmr_rb_137_11']:checked").length == 0||$("input[name='mmr_rb_137_12']:checked").length == 0||$("input[name='mmr_rb_137_13']:checked").length == 0||$("input[name='mmr_rb_137_14']:checked").length == 0){
			$("#panel_mmr_rb_137").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_137").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_137 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_137").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_137").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_137 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_138_1']:checked").length == 0||$("input[name='mmr_rb_138_2']:checked").length == 0||$("input[name='mmr_rb_138_3']:checked").length == 0||$("input[name='mmr_rb_138_4']:checked").length == 0||$("input[name='mmr_rb_138_5']:checked").length == 0){
			$("#panel_mmr_rb_138").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_138").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_138 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_138").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_138").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_138 h4 small b").addClass("message_error");
		}
		return resultado;
	}   
    
});