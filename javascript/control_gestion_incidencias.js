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
		if ($("input[name='psu_t_641']").val().trim() == "") {
	      	$("#panel_psu_t_641").removeClass( "panel-primary" );
	      	$("#panel_psu_t_641").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_641 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_641").removeClass( "panel-danger" );
	      	$("#panel_psu_t_641").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_641 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_642']").val().trim() == "") {
	      	$("#panel_psu_t_642").removeClass( "panel-primary" );
	      	$("#panel_psu_t_642").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_642 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_642").removeClass( "panel-danger" );
	      	$("#panel_psu_t_642").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_642 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_643']").val().trim() == "") {
	      	$("#panel_psu_t_643").removeClass( "panel-primary" );
	      	$("#panel_psu_t_643").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_643 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_643").removeClass( "panel-danger" );
	      	$("#panel_psu_t_643").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_643 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_644']").val().trim() == "") {
	      	$("#panel_psu_t_644").removeClass( "panel-primary" );
	      	$("#panel_psu_t_644").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_644 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_644").removeClass( "panel-danger" );
	      	$("#panel_psu_t_644").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_644 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_645']").val().trim() == "") {
	      	$("#panel_psu_t_645").removeClass( "panel-primary" );
	      	$("#panel_psu_t_645").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_645 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_645").removeClass( "panel-danger" );
	      	$("#panel_psu_t_645").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_645 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_646']").val().trim() == "") {
	      	$("#panel_psu_t_646").removeClass( "panel-primary" );
	      	$("#panel_psu_t_646").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_646 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_646").removeClass( "panel-danger" );
	      	$("#panel_psu_t_646").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_646 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_647']").val().trim() == "") {
	      	$("#panel_psu_t_647").removeClass( "panel-primary" );
	      	$("#panel_psu_t_647").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_647 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_647").removeClass( "panel-danger" );
	      	$("#panel_psu_t_647").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_647 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_648']").val().trim() == "") {
	      	$("#panel_psu_t_648").removeClass( "panel-primary" );
	      	$("#panel_psu_t_648").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_648 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_648").removeClass( "panel-danger" );
	      	$("#panel_psu_t_648").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_648 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_649']").val().trim() == "") {
	      	$("#panel_psu_t_649").removeClass( "panel-primary" );
	      	$("#panel_psu_t_649").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_649 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_649").removeClass( "panel-danger" );
	      	$("#panel_psu_t_649").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_649 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_652']").val().trim() == "") {
	      	$("#panel_psu_t_652").removeClass( "panel-primary" );
	      	$("#panel_psu_t_652").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_652 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_652").removeClass( "panel-danger" );
	      	$("#panel_psu_t_652").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_652 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_653']").val().trim() == "") {
	      	$("#panel_psu_t_653").removeClass( "panel-primary" );
	      	$("#panel_psu_t_653").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_653 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_653").removeClass( "panel-danger" );
	      	$("#panel_psu_t_653").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_653 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_654']").val().trim() == "") {
	      	$("#panel_psu_t_654").removeClass( "panel-primary" );
	      	$("#panel_psu_t_654").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_654 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_654").removeClass( "panel-danger" );
	      	$("#panel_psu_t_654").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_654 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_654']").val().trim() == "") {
	      	$("#panel_psu_t_654").removeClass( "panel-primary" );
	      	$("#panel_psu_t_654").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_654 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_654").removeClass( "panel-danger" );
	      	$("#panel_psu_t_654").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_654 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_655']").val().trim() == "") {
	      	$("#panel_psu_t_655").removeClass( "panel-primary" );
	      	$("#panel_psu_t_655").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_655 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_655").removeClass( "panel-danger" );
	      	$("#panel_psu_t_655").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_655 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_650']").val().trim() == "") {
	      	$("#panel_psc_ta_650").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_650").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_650 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_650").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_650").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_650 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_651']").val().trim() == "") {
	      	$("#panel_psc_ta_651").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_651").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_651 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_651").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_651").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_651 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});