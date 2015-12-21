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
	   	if ($("textarea[name='psc_ta_107']").val().trim() == "") {
	      	$("#panel_psc_ta_107").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_107").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_107 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_107").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_107").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_107 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_108']").val().trim() == "") {
	      	$("#panel_psc_ta_108").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_108").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_108 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_108").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_108").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_108 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_109']").val().trim() == "") {
	      	$("#panel_psc_ta_109").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_109").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_109 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_109").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_109").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_109 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_110']").val().trim() == "") {
	      	$("#panel_psc_ta_110").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_110").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_110 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_110").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_110").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_110 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_111']").val().trim() == "") {
	      	$("#panel_psc_ta_111").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_111").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_111 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_111").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_111").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_111 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_112']").val().trim() == "") {
	      	$("#panel_psc_ta_112").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_112").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_112 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_112").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_112").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_112 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_113']").val().trim() == "") {
	      	$("#panel_psc_ta_113").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_113").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_113 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_113").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_113").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_113 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_114']").val().trim() == "") {
	      	$("#panel_psc_ta_114").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_114").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_114 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_114").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_114").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_114 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_115']").val().trim() == "") {
	      	$("#panel_psc_ta_115").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_115").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_115 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_115").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_115").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_115 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_116']").val().trim() == "") {
	      	$("#panel_psc_ta_116").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_116").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_116 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_116").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_116").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_116 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_117']").val().trim() == "") {
	      	$("#panel_psc_ta_117").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_117").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_117 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_117").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_117").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_117 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_118']").val().trim() == "") {
	      	$("#panel_psc_ta_118").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_118").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_118 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_118").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_118").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_118 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_119']").val().trim() == "") {
	      	$("#panel_psc_ta_119").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_119").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_119 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_119").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_119").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_119 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_120']").val().trim() == "") {
	      	$("#panel_psc_ta_120").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_120").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_120 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_120").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_120").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_120 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_121']").val().trim() == "") {
	      	$("#panel_psc_ta_121").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_121").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_121 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_121").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_121").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_121 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_122']").val().trim() == "") {
	      	$("#panel_psc_ta_122").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_122").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_122 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_122").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_122").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_122 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_123']").val().trim() == "") {
	      	$("#panel_psc_ta_123").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_123").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_123 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_123").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_123").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_123 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_124']").val().trim() == "") {
	      	$("#panel_psc_ta_124").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_124").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_124 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_124").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_124").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_124 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_125']").val().trim() == "") {
	      	$("#panel_psc_ta_125").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_125").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_125 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_125").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_125").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_125 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_126']").val().trim() == "") {
	      	$("#panel_psc_ta_126").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_126").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_126 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_126").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_126").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_126 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_127']").val().trim() == "") {
	      	$("#panel_psc_ta_127").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_127").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_127 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_127").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_127").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_127 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_128']").val().trim() == "") {
	      	$("#panel_psc_ta_128").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_128").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_128 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_128").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_128").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_128 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_129']").val().trim() == "") {
	      	$("#panel_psc_ta_129").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_129").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_129 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_129").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_129").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_129 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_130']").val().trim() == "") {
	      	$("#panel_psc_ta_130").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_130").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_130 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_130").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_130").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_130 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_131']").val().trim() == "") {
	      	$("#panel_psc_ta_131").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_131").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_131 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_131").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_131").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_131 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_132']").val().trim() == "") {
	      	$("#panel_psc_ta_132").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_132").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_132 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_132").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_132").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_132 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_133']").val().trim() == "") {
	      	$("#panel_psc_ta_133").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_133").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_133 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_133").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_133").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_133 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_134']").val().trim() == "") {
	      	$("#panel_psc_ta_134").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_134").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_134 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_134").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_134").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_134 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});