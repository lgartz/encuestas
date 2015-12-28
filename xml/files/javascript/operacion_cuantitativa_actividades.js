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
		if ($("input[name='eru_rb_139']:checked").length == 0) {
	      	$("#panel_eru_rb_139").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_139").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_139 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_139").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_139").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_139 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_140']:checked").length == 0) {
	      	$("#panel_eru_rb_140").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_140").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_140 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_140").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_140").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_140 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_141']:checked").length == 0) {
	      	$("#panel_eru_rb_141").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_141").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_141 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_141").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_141").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_141 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_142']:checked").length == 0) {
	      	$("#panel_eru_rb_142").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_142").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_142 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_142").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_142").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_142 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_143']:checked").length == 0) {
	      	$("#panel_eru_rb_143").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_143").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_143 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_143").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_143").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_143 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_144']:checked").length == 0) {
	      	$("#panel_eru_rb_144").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_144").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_144 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_144").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_144").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_144 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_145']:checked").length == 0) {
	      	$("#panel_eru_rb_145").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_145").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_145 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_145").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_145").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_145 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_146']:checked").length == 0) {
	      	$("#panel_eru_rb_146").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_146").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_146 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_146").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_146").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_146 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_147']:checked").length == 0) {
	      	$("#panel_eru_rb_147").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_147").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_147 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_147").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_147").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_147 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_148']:checked").length == 0) {
	      	$("#panel_eru_rb_148").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_148").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_148 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_148").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_148").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_148 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_149']:checked").length == 0) {
	      	$("#panel_eru_rb_149").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_149").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_149 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_149").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_149").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_149 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_150']:checked").length == 0) {
	      	$("#panel_eru_rb_150").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_150").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_150 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_150").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_150").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_150 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_151']:checked").length == 0) {
	      	$("#panel_eru_rb_151").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_151").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_151 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_151").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_151").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_151 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_152']:checked").length == 0) {
	      	$("#panel_eru_rb_152").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_152").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_152 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_152").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_152").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_152 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_153']:checked").length == 0) {
	      	$("#panel_eru_rb_153").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_153").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_153 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_153").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_153").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_153 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_154']:checked").length == 0) {
	      	$("#panel_eru_rb_154").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_154").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_154 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_154").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_154").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_154 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_155']:checked").length == 0) {
	      	$("#panel_eru_rb_155").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_155").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_155 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_155").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_155").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_155 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_156']:checked").length == 0) {
	      	$("#panel_eru_rb_156").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_156").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_156 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_156").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_156").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_156 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_157']:checked").length == 0) {
	      	$("#panel_eru_rb_157").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_157").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_157 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_157").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_157").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_157 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_158']:checked").length == 0) {
	      	$("#panel_eru_rb_158").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_158").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_158 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_158").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_158").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_158 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_159']:checked").length == 0) {
	      	$("#panel_eru_rb_159").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_159").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_159 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_159").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_159").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_159 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_160']:checked").length == 0) {
	      	$("#panel_eru_rb_160").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_160").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_160 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_160").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_160").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_160 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_161']:checked").length == 0) {
	      	$("#panel_eru_rb_161").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_161").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_161 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_161").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_161").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_161 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_162']:checked").length == 0) {
	      	$("#panel_eru_rb_162").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_162").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_162 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_162").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_162").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_162 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_163']:checked").length == 0) {
	      	$("#panel_eru_rb_163").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_163").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_163 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_163").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_163").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_163 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_164']:checked").length == 0) {
	      	$("#panel_eru_rb_164").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_164").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_164 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_164").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_164").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_164 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_165']:checked").length == 0) {
	      	$("#panel_eru_rb_165").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_165").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_165 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_165").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_165").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_165 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_166']:checked").length == 0) {
	      	$("#panel_eru_rb_166").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_166").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_166 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_166").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_166").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_166 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_167']:checked").length == 0) {
	      	$("#panel_eru_rb_167").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_167").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_167 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_167").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_167").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_167 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_168']:checked").length == 0) {
	      	$("#panel_eru_rb_168").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_168").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_168 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_168").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_168").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_168 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_169']:checked").length == 0) {
	      	$("#panel_eru_rb_169").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_169").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_169 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_169").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_169").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_169 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_170']:checked").length == 0) {
	      	$("#panel_eru_rb_170").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_170").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_170 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_170").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_170").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_170 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_171']:checked").length == 0) {
	      	$("#panel_eru_rb_171").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_171").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_171 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_171").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_171").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_171 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_172']:checked").length == 0) {
	      	$("#panel_eru_rb_172").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_172").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_172 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_172").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_172").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_172 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_173']:checked").length == 0) {
	      	$("#panel_eru_rb_173").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_173").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_173 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_173").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_173").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_173 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_174']:checked").length == 0) {
	      	$("#panel_eru_rb_174").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_174").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_174 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_174").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_174").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_174 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_175']:checked").length == 0) {
	      	$("#panel_eru_rb_175").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_175").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_175 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_175").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_175").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_175 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_176']:checked").length == 0) {
	      	$("#panel_eru_rb_176").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_176").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_176 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_176").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_176").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_176 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_177']:checked").length == 0) {
	      	$("#panel_eru_rb_177").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_177").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_177 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_177").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_177").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_177 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_178']:checked").length == 0) {
	      	$("#panel_eru_rb_178").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_178").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_178 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_178").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_178").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_178 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_179']:checked").length == 0) {
	      	$("#panel_eru_rb_179").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_179").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_179 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_179").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_179").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_179 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_180']:checked").length == 0) {
	      	$("#panel_eru_rb_180").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_180").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_180 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_180").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_180").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_180 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_181']:checked").length == 0) {
	      	$("#panel_eru_rb_181").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_181").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_181 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_181").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_181").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_181 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_182']:checked").length == 0) {
	      	$("#panel_eru_rb_182").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_182").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_182 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_182").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_182").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_182 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_183']:checked").length == 0) {
	      	$("#panel_eru_rb_183").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_183").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_183 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_183").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_183").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_183 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_184']:checked").length == 0) {
	      	$("#panel_eru_rb_184").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_184").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_184 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_184").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_184").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_184 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_185']:checked").length == 0) {
	      	$("#panel_eru_rb_185").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_185").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_185 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_185").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_185").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_185 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_186']:checked").length == 0) {
	      	$("#panel_eru_rb_186").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_186").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_186 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_186").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_186").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_186 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_187']:checked").length == 0) {
	      	$("#panel_eru_rb_187").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_187").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_187 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_187").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_187").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_187 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_188']:checked").length == 0) {
	      	$("#panel_eru_rb_188").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_188").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_188 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_188").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_188").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_188 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_189']:checked").length == 0) {
	      	$("#panel_eru_rb_189").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_189").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_189 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_189").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_189").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_189 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_190']:checked").length == 0) {
	      	$("#panel_eru_rb_190").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_190").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_190 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_190").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_190").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_190 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_191']:checked").length == 0) {
	      	$("#panel_eru_rb_191").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_191").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_191 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_191").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_191").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_191 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_192']:checked").length == 0) {
	      	$("#panel_eru_rb_192").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_192").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_192 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_192").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_192").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_192 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_193']:checked").length == 0) {
	      	$("#panel_eru_rb_193").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_193").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_193 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_193").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_193").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_193 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_194']:checked").length == 0) {
	      	$("#panel_eru_rb_194").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_194").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_194 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_194").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_194").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_194 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_195']:checked").length == 0) {
	      	$("#panel_eru_rb_195").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_195").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_195 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_195").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_195").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_195 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_196']:checked").length == 0) {
	      	$("#panel_eru_rb_196").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_196").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_196 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_196").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_196").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_196 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_197']:checked").length == 0) {
	      	$("#panel_eru_rb_197").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_197").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_197 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_197").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_197").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_197 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_198']:checked").length == 0) {
	      	$("#panel_eru_rb_198").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_198").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_198 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_198").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_198").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_198 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_199']:checked").length == 0) {
	      	$("#panel_eru_rb_199").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_199").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_199 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_199").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_199").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_199 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_200']:checked").length == 0) {
	      	$("#panel_eru_rb_200").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_200").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_200 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_200").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_200").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_200 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_201']:checked").length == 0) {
	      	$("#panel_eru_rb_201").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_201").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_201 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_201").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_201").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_201 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_202']:checked").length == 0) {
	      	$("#panel_eru_rb_202").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_202").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_202 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_202").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_202").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_202 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_203']:checked").length == 0) {
	      	$("#panel_eru_rb_203").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_203").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_203 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_203").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_203").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_203 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_204']:checked").length == 0) {
	      	$("#panel_eru_rb_204").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_204").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_204 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_204").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_204").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_204 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_205']:checked").length == 0) {
	      	$("#panel_eru_rb_205").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_205").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_205 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_205").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_205").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_205 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_206']:checked").length == 0) {
	      	$("#panel_eru_rb_206").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_206").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_206 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_206").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_206").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_206 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_207']:checked").length == 0) {
	      	$("#panel_eru_rb_207").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_207").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_207 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_207").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_207").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_207 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_208']:checked").length == 0) {
	      	$("#panel_eru_rb_208").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_208").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_208 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_208").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_208").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_208 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_209']:checked").length == 0) {
	      	$("#panel_eru_rb_209").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_209").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_209 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_209").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_209").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_209 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_210']:checked").length == 0) {
	      	$("#panel_eru_rb_210").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_210").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_210 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_210").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_210").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_210 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_211']:checked").length == 0) {
	      	$("#panel_eru_rb_211").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_211").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_211 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_211").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_211").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_211 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_212']:checked").length == 0) {
	      	$("#panel_eru_rb_212").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_212").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_212 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_212").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_212").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_212 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_213']:checked").length == 0) {
	      	$("#panel_eru_rb_213").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_213").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_213 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_213").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_213").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_213 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_214']:checked").length == 0) {
	      	$("#panel_eru_rb_214").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_214").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_214 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_214").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_214").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_214 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_215']:checked").length == 0) {
	      	$("#panel_eru_rb_215").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_215").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_215 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_215").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_215").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_215 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_216']:checked").length == 0) {
	      	$("#panel_eru_rb_216").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_216").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_216 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_216").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_216").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_216 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_217']:checked").length == 0) {
	      	$("#panel_eru_rb_217").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_217").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_217 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_217").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_217").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_217 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_218']:checked").length == 0) {
	      	$("#panel_eru_rb_218").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_218").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_218 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_218").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_218").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_218 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_219']:checked").length == 0) {
	      	$("#panel_eru_rb_219").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_219").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_219 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_219").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_219").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_219 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_220']:checked").length == 0) {
	      	$("#panel_eru_rb_220").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_220").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_220 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_220").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_220").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_220 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_221']:checked").length == 0) {
	      	$("#panel_eru_rb_221").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_221").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_221 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_221").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_221").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_221 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_222']:checked").length == 0) {
	      	$("#panel_eru_rb_222").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_222").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_222 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_222").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_222").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_222 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_223']:checked").length == 0) {
	      	$("#panel_eru_rb_223").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_223").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_223 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_223").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_223").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_223 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_224']:checked").length == 0) {
	      	$("#panel_eru_rb_224").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_224").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_224 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_224").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_224").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_224 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_225']:checked").length == 0) {
	      	$("#panel_eru_rb_225").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_225").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_225 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_225").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_225").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_225 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_226']:checked").length == 0) {
	      	$("#panel_eru_rb_226").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_226").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_226 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_226").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_226").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_226 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_227']:checked").length == 0) {
	      	$("#panel_eru_rb_227").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_227").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_227 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_227").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_227").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_227 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_228']:checked").length == 0) {
	      	$("#panel_eru_rb_228").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_228").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_228 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_228").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_228").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_228 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_229']:checked").length == 0) {
	      	$("#panel_eru_rb_229").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_229").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_229 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_229").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_229").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_229 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_230']:checked").length == 0) {
	      	$("#panel_eru_rb_230").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_230").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_230 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_230").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_230").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_230 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});