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
	   	if ($("textarea[name='psc_ta_63']").val().trim() == "") {
	      	$("#panel_psc_ta_63").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_63").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_63 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_63").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_63").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_63 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_64']").val().trim() == "") {
	      	$("#panel_psc_ta_64").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_64").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_64 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_64").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_64").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_64 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_65']").val().trim() == "") {
	      	$("#panel_psc_ta_65").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_65").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_65 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_65").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_65").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_65 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_66']").val().trim() == "") {
	      	$("#panel_psc_ta_66").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_66").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_66 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_66").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_66").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_66 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_67']").val().trim() == "") {
	      	$("#panel_psc_ta_67").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_67").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_67 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_67").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_67").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_67 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_68']").val().trim() == "") {
	      	$("#panel_psc_ta_68").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_68").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_68 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_68").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_68").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_68 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_69']").val().trim() == "") {
	      	$("#panel_psc_ta_69").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_69").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_69 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_69").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_69").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_69 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_70']").val().trim() == "") {
	      	$("#panel_psc_ta_70").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_70").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_70 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_70").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_70").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_70 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_71']").val().trim() == "") {
	      	$("#panel_psc_ta_71").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_71").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_71 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_71").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_71").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_71 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_72']").val().trim() == "") {
	      	$("#panel_psc_ta_72").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_72").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_72 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_72").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_72").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_72 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_73']").val().trim() == "") {
	      	$("#panel_psc_ta_73").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_73").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_73 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_73").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_73").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_73 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_74']").val().trim() == "") {
	      	$("#panel_psc_ta_74").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_74").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_74 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_74").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_74").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_74 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_75']").val().trim() == "") {
	      	$("#panel_psc_ta_75").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_75").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_75 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_75").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_75").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_75 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_76']").val().trim() == "") {
	      	$("#panel_psc_ta_76").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_76").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_76 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_76").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_76").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_76 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_77']").val().trim() == "") {
	      	$("#panel_psc_ta_77").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_77").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_77 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_77").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_77").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_77 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_78']").val().trim() == "") {
	      	$("#panel_psc_ta_78").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_78").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_78 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_78").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_78").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_78 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});