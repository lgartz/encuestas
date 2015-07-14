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
	   	if ($("textarea[name='psc_ta_21']").val().trim() == "") {
	      	$("#panel_psc_ta_21").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_21").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_21 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_21").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_21").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_21 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_22']").val().trim() == "") {
	      	$("#panel_psc_ta_22").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_22").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_22 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_22").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_22").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_22 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_23']").val().trim() == "") {
	      	$("#panel_psc_ta_23").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_23").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_23 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_23").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_23").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_23 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_24']").val().trim() == "") {
	      	$("#panel_psc_ta_24").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_24").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_24 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_24").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_24").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_24 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_25']").val().trim() == "") {
	      	$("#panel_psc_ta_25").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_25").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_25 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_25").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_25").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_25 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_26']").val().trim() == "") {
	      	$("#panel_psc_ta_26").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_26").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_26 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_26").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_26").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_26 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_27']").val().trim() == "") {
	      	$("#panel_psc_ta_27").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_27").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_27 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_27").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_27").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_27 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_28']").val().trim() == "") {
	      	$("#panel_psc_ta_28").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_28").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_28 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_28").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_28").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_28 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_29']").val().trim() == "") {
	      	$("#panel_psc_ta_29").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_29").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_29 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_29").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_29").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_29 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_30']").val().trim() == "") {
	      	$("#panel_psc_ta_30").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_30").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_30 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_30").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_30").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_30 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_31']").val().trim() == "") {
	      	$("#panel_psc_ta_31").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_31").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_31 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_31").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_31").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_31 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_32']").val().trim() == "") {
	      	$("#panel_psc_ta_32").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_32").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_32 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_32").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_32").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_32 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_33']").val().trim() == "") {
	      	$("#panel_psc_ta_33").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_33").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_33 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_33").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_33").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_33 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_34']").val().trim() == "") {
	      	$("#panel_psc_ta_34").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_34").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_34 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_34").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_34").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_34 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_35']").val().trim() == "") {
	      	$("#panel_psc_ta_35").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_35").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_35 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_35").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_35").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_35 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_36']").val().trim() == "") {
	      	$("#panel_psc_ta_36").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_36").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_36 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_36").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_36").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_36 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_37']").val().trim() == "") {
	      	$("#panel_psc_ta_37").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_37").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_37 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_37").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_37").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_37 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_38']").val().trim() == "") {
	      	$("#panel_psc_ta_38").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_38").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_38 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_38").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_38").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_38 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_39']").val().trim() == "") {
	      	$("#panel_psc_ta_39").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_39").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_39 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_39").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_39").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_39 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_40']").val().trim() == "") {
	      	$("#panel_psc_ta_40").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_40").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_40 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_40").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_40").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_40 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});