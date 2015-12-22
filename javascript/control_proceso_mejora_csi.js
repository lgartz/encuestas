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
		if ($("input[name='psu_t_674']").val().trim() == "") {
	      	$("#panel_psu_t_674").removeClass( "panel-primary" );
	      	$("#panel_psu_t_674").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_674 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_674").removeClass( "panel-danger" );
	      	$("#panel_psu_t_674").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_674 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_675']").val().trim() == "") {
	      	$("#panel_psu_t_675").removeClass( "panel-primary" );
	      	$("#panel_psu_t_675").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_675 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_675").removeClass( "panel-danger" );
	      	$("#panel_psu_t_675").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_675 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_676']").val().trim() == "") {
	      	$("#panel_psu_t_676").removeClass( "panel-primary" );
	      	$("#panel_psu_t_676").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_676 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_676").removeClass( "panel-danger" );
	      	$("#panel_psu_t_676").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_676 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_677']").val().trim() == "") {
	      	$("#panel_psu_t_677").removeClass( "panel-primary" );
	      	$("#panel_psu_t_677").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_677 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_677").removeClass( "panel-danger" );
	      	$("#panel_psu_t_677").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_677 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_678']").val().trim() == "") {
	      	$("#panel_psu_t_678").removeClass( "panel-primary" );
	      	$("#panel_psu_t_678").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_678 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_678").removeClass( "panel-danger" );
	      	$("#panel_psu_t_678").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_678 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_679']").val().trim() == "") {
	      	$("#panel_psu_t_679").removeClass( "panel-primary" );
	      	$("#panel_psu_t_679").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_679 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_679").removeClass( "panel-danger" );
	      	$("#panel_psu_t_679").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_679 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_680']").val().trim() == "") {
	      	$("#panel_psu_t_680").removeClass( "panel-primary" );
	      	$("#panel_psu_t_680").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_680 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_680").removeClass( "panel-danger" );
	      	$("#panel_psu_t_680").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_680 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_681']").val().trim() == "") {
	      	$("#panel_psu_t_681").removeClass( "panel-primary" );
	      	$("#panel_psu_t_681").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_681 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_681").removeClass( "panel-danger" );
	      	$("#panel_psu_t_681").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_681 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_682']").val().trim() == "") {
	      	$("#panel_psu_t_682").removeClass( "panel-primary" );
	      	$("#panel_psu_t_682").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_682 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_682").removeClass( "panel-danger" );
	      	$("#panel_psu_t_682").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_682 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_683']").val().trim() == "") {
	      	$("#panel_psu_t_683").removeClass( "panel-primary" );
	      	$("#panel_psu_t_683").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_683 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_683").removeClass( "panel-danger" );
	      	$("#panel_psu_t_683").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_683 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_684']").val().trim() == "") {
	      	$("#panel_psu_t_684").removeClass( "panel-primary" );
	      	$("#panel_psu_t_684").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_684 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_684").removeClass( "panel-danger" );
	      	$("#panel_psu_t_684").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_684 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_685']").val().trim() == "") {
	      	$("#panel_psu_t_685").removeClass( "panel-primary" );
	      	$("#panel_psu_t_685").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_685 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_685").removeClass( "panel-danger" );
	      	$("#panel_psu_t_685").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_685 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_686']").val().trim() == "") {
	      	$("#panel_psu_t_686").removeClass( "panel-primary" );
	      	$("#panel_psu_t_686").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_686 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_686").removeClass( "panel-danger" );
	      	$("#panel_psu_t_686").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_686 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});