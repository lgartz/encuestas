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
		if($("input[name='mmr_rb_505_1']:checked").length == 0||$("input[name='mmr_rb_505_2']:checked").length == 0||$("input[name='mmr_rb_505_3']:checked").length == 0||$("input[name='mmr_rb_505_4']:checked").length == 0||$("input[name='mmr_rb_505_5']:checked").length == 0){
			$("#panel_mmr_rb_505").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_505").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_505 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_505").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_505").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_505 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_506_1']:checked").length == 0||$("input[name='mmr_rb_506_2']:checked").length == 0||$("input[name='mmr_rb_506_3']:checked").length == 0||$("input[name='mmr_rb_506_4']:checked").length == 0||$("input[name='mmr_rb_506_5']:checked").length == 0){
			$("#panel_mmr_rb_506").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_506").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_506 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_506").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_506").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_506 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_507_1']:checked").length == 0||$("input[name='mmr_rb_507_2']:checked").length == 0||$("input[name='mmr_rb_507_3']:checked").length == 0){
			$("#panel_mmr_rb_507").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_507").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_507 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_507").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_507").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_507 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_508_1']:checked").length == 0||$("input[name='mmr_rb_508_2']:checked").length == 0||$("input[name='mmr_rb_508_3']:checked").length == 0||$("input[name='mmr_rb_508_4']:checked").length == 0){
			$("#panel_mmr_rb_508").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_508").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_508 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_508").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_508").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_508 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_rb_509_1']:checked").length == 0||$("input[name='mmr_rb_509_2']:checked").length == 0||$("input[name='mmr_rb_509_3']:checked").length == 0||$("input[name='mmr_rb_509_4']:checked").length == 0||$("input[name='mmr_rb_509_5']:checked").length == 0||$("input[name='mmr_rb_509_6']:checked").length == 0||$("input[name='mmr_rb_509_7']:checked").length == 0){
			$("#panel_mmr_rb_509").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_509").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_509 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_509").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_509").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_509 h4 small b").addClass("message_error");
		}
		return resultado;
	}   
    
});