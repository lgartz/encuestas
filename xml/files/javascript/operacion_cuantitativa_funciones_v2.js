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
		if($("input[name='mmr_rb_457_1']:checked").length == 0||$("input[name='mmr_rb_457_2']:checked").length == 0||$("input[name='mmr_rb_457_3']:checked").length == 0||$("input[name='mmr_rb_457_4']:checked").length == 0||$("input[name='mmr_rb_457_5']:checked").length == 0||$("input[name='mmr_rb_457_6']:checked").length == 0||$("input[name='mmr_rb_457_7']:checked").length == 0||$("input[name='mmr_rb_457_8']:checked").length == 0||$("input[name='mmr_rb_457_9']:checked").length == 0||$("input[name='mmr_rb_457_10']:checked").length == 0||$("input[name='mmr_rb_457_11']:checked").length == 0||$("input[name='mmr_rb_457_12']:checked").length == 0){
			$("#panel_mmr_rb_457").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_457").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_457 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_457").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_457").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_457 h4 small b").addClass("message_error");
		}
		return resultado;
	}   
    
});