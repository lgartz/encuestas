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
		if ($("input[name='eru_rb_79']:checked").length == 0) {
	      	$("#panel_eru_rb_79").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_79").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_79 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_79").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_79").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_79 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_80']:checked").length == 0) {
	      	$("#panel_eru_rb_80").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_80").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_80 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_80").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_80").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_80 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_81']:checked").length == 0) {
	      	$("#panel_eru_rb_81").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_81").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_81 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_81").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_81").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_81 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_82']:checked").length == 0) {
	      	$("#panel_eru_rb_82").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_82").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_82 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_82").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_82").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_82 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_83']:checked").length == 0) {
	      	$("#panel_eru_rb_83").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_83").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_83 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_83").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_83").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_83 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_84']:checked").length == 0) {
	      	$("#panel_eru_rb_84").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_84").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_84 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_84").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_84").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_84 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_85']:checked").length == 0) {
	      	$("#panel_eru_rb_85").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_85").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_85 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_85").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_85").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_85 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_86']:checked").length == 0) {
	      	$("#panel_eru_rb_86").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_86").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_86 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_86").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_86").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_86 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_87']:checked").length == 0) {
	      	$("#panel_eru_rb_87").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_87").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_87 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_87").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_87").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_87 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_88']:checked").length == 0) {
	      	$("#panel_eru_rb_88").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_88").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_88 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_88").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_88").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_88 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_89']:checked").length == 0) {
	      	$("#panel_eru_rb_89").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_89").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_89 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_89").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_89").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_89 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_90']:checked").length == 0) {
	      	$("#panel_eru_rb_90").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_90").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_90 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_90").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_90").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_90 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_91']:checked").length == 0) {
	      	$("#panel_eru_rb_91").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_91").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_91 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_91").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_91").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_91 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_92']:checked").length == 0) {
	      	$("#panel_eru_rb_92").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_92").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_92 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_92").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_92").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_92 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_93']:checked").length == 0) {
	      	$("#panel_eru_rb_93").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_93").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_93 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_93").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_93").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_93 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_94']:checked").length == 0) {
	      	$("#panel_eru_rb_94").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_94").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_94 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_94").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_94").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_94 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_95']:checked").length == 0) {
	      	$("#panel_eru_rb_95").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_95").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_95 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_95").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_95").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_95 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_96']:checked").length == 0) {
	      	$("#panel_eru_rb_96").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_96").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_96 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_96").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_96").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_96 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_97']:checked").length == 0) {
	      	$("#panel_eru_rb_97").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_97").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_97 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_97").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_97").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_97 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_98']:checked").length == 0) {
	      	$("#panel_eru_rb_98").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_98").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_98 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_98").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_98").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_98 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_99']:checked").length == 0) {
	      	$("#panel_eru_rb_99").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_99").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_99 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_99").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_99").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_99 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_100']:checked").length == 0) {
	      	$("#panel_eru_rb_100").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_100").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_100 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_100").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_100").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_100 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_101']:checked").length == 0) {
	      	$("#panel_eru_rb_101").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_101").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_101 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_101").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_101").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_101 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_102']:checked").length == 0) {
	      	$("#panel_eru_rb_102").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_102").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_102 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_102").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_102").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_102 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_103']:checked").length == 0) {
	      	$("#panel_eru_rb_103").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_103").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_103 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_103").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_103").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_103 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_104']:checked").length == 0) {
	      	$("#panel_eru_rb_104").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_104").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_104 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_104").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_104").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_104 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_105']:checked").length == 0) {
	      	$("#panel_eru_rb_105").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_105").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_105 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_105").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_105").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_105 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_106']:checked").length == 0) {
	      	$("#panel_eru_rb_106").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_106").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_106 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_106").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_106").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_106 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});