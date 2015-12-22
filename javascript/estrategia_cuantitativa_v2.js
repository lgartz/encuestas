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
		if($("input[name='mmr_rb_41_1']:checked").length == 0||$("input[name='mmr_rb_41_2']:checked").length == 0||$("input[name='mmr_rb_41_3']:checked").length == 0||$("input[name='mmr_rb_41_4']:checked").length == 0||$("input[name='mmr_rb_41_5']:checked").length == 0||$("input[name='mmr_rb_41_6']:checked").length == 0||$("input[name='mmr_rb_41_7']:checked").length == 0||$("input[name='mmr_rb_41_8']:checked").length == 0||$("input[name='mmr_rb_41_9']:checked").length == 0){
			$("#panel_mmr_rb_41").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_41").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_41 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_41").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_41").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_41 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_42_1']:checked").length == 0||$("input[name='mmr_rb_42_2']:checked").length == 0||$("input[name='mmr_rb_42_3']:checked").length == 0||$("input[name='mmr_rb_42_4']:checked").length == 0||$("input[name='mmr_rb_42_5']:checked").length == 0){
			$("#panel_mmr_rb_42").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_42").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_42 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_42").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_42").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_42 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_43_1']:checked").length == 0||$("input[name='mmr_rb_43_2']:checked").length == 0||$("input[name='mmr_rb_43_3']:checked").length == 0||$("input[name='mmr_rb_43_4']:checked").length == 0||$("input[name='mmr_rb_43_5']:checked").length == 0||$("input[name='mmr_rb_43_6']:checked").length == 0){
			$("#panel_mmr_rb_43").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_43").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_43 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_43").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_43").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_43 h4 small b").addClass("message_error");
		}
		return resultado;
	}   
    
});