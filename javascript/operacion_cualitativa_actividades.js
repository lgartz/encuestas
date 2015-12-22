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
	   	if ($("textarea[name='psc_ta_239']").val().trim() == "") {
	      	$("#panel_psc_ta_239").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_239").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_239 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_239").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_239").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_239 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_240']").val().trim() == "") {
	      	$("#panel_psc_ta_240").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_240").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_240 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_240").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_240").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_240 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_241']").val().trim() == "") {
	      	$("#panel_psc_ta_241").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_241").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_241 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_241").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_241").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_241 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_242']").val().trim() == "") {
	      	$("#panel_psc_ta_242").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_242").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_242 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_242").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_242").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_242 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_243']").val().trim() == "") {
	      	$("#panel_psc_ta_243").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_243").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_243 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_243").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_243").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_243 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_244']").val().trim() == "") {
	      	$("#panel_psc_ta_244").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_244").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_244 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_244").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_244").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_244 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_245']").val().trim() == "") {
	      	$("#panel_psc_ta_245").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_245").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_245 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_245").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_245").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_245 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_246']").val().trim() == "") {
	      	$("#panel_psc_ta_246").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_246").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_246 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_246").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_246").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_246 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_247']").val().trim() == "") {
	      	$("#panel_psc_ta_247").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_247").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_247 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_247").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_247").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_247 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_248']").val().trim() == "") {
	      	$("#panel_psc_ta_248").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_248").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_248 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_248").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_248").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_248 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_249']").val().trim() == "") {
	      	$("#panel_psc_ta_249").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_249").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_249 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_249").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_249").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_249 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_250']").val().trim() == "") {
	      	$("#panel_psc_ta_250").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_250").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_250 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_250").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_250").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_250 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_251']").val().trim() == "") {
	      	$("#panel_psc_ta_251").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_251").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_251 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_251").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_251").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_251 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_252']").val().trim() == "") {
	      	$("#panel_psc_ta_252").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_252").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_252 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_252").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_252").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_252 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_253']").val().trim() == "") {
	      	$("#panel_psc_ta_253").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_253").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_253 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_253").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_253").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_253 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_254']").val().trim() == "") {
	      	$("#panel_psc_ta_254").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_254").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_254 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_254").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_254").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_254 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_255']").val().trim() == "") {
	      	$("#panel_psc_ta_255").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_255").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_255 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_255").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_255").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_255 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_256']").val().trim() == "") {
	      	$("#panel_psc_ta_256").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_256").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_256 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_256").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_256").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_256 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_257']").val().trim() == "") {
	      	$("#panel_psc_ta_257").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_257").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_257 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_257").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_257").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_257 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_258']").val().trim() == "") {
	      	$("#panel_psc_ta_258").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_258").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_258 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_258").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_258").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_258 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_259']").val().trim() == "") {
	      	$("#panel_psc_ta_259").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_259").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_259 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_259").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_259").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_259 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_260']").val().trim() == "") {
	      	$("#panel_psc_ta_260").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_260").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_260 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_260").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_260").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_260 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_261']").val().trim() == "") {
	      	$("#panel_psc_ta_261").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_261").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_261 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_261").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_261").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_261 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_262']").val().trim() == "") {
	      	$("#panel_psc_ta_262").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_262").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_262 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_262").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_262").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_262 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_263']").val().trim() == "") {
	      	$("#panel_psc_ta_263").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_263").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_263 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_263").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_263").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_263 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_264']").val().trim() == "") {
	      	$("#panel_psc_ta_264").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_264").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_264 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_264").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_264").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_264 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_265']").val().trim() == "") {
	      	$("#panel_psc_ta_265").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_265").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_265 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_265").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_265").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_265 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_266']").val().trim() == "") {
	      	$("#panel_psc_ta_266").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_266").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_266 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_266").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_266").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_266 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_267']").val().trim() == "") {
	      	$("#panel_psc_ta_267").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_267").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_267 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_267").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_267").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_267 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_268']").val().trim() == "") {
	      	$("#panel_psc_ta_268").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_268").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_268 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_268").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_268").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_268 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_269']").val().trim() == "") {
	      	$("#panel_psc_ta_269").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_269").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_269 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_269").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_269").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_269 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_270']").val().trim() == "") {
	      	$("#panel_psc_ta_270").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_270").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_270 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_270").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_270").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_270 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_271']").val().trim() == "") {
	      	$("#panel_psc_ta_271").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_271").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_271 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_271").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_271").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_271 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_272']").val().trim() == "") {
	      	$("#panel_psc_ta_272").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_272").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_272 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_272").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_272").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_272 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_273']").val().trim() == "") {
	      	$("#panel_psc_ta_273").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_273").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_273 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_273").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_273").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_273 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_274']").val().trim() == "") {
	      	$("#panel_psc_ta_274").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_274").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_274 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_274").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_274").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_274 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_275']").val().trim() == "") {
	      	$("#panel_psc_ta_275").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_275").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_275 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_275").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_275").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_275 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_276']").val().trim() == "") {
	      	$("#panel_psc_ta_276").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_276").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_276 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_276").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_276").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_276 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_277']").val().trim() == "") {
	      	$("#panel_psc_ta_277").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_277").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_277 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_277").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_277").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_277 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_278']").val().trim() == "") {
	      	$("#panel_psc_ta_278").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_278").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_278 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_278").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_278").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_278 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_279']").val().trim() == "") {
	      	$("#panel_psc_ta_279").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_279").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_279 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_279").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_279").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_279 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_280']").val().trim() == "") {
	      	$("#panel_psc_ta_280").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_280").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_280 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_280").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_280").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_280 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_281']").val().trim() == "") {
	      	$("#panel_psc_ta_281").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_281").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_281 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_281").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_281").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_281 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_282']").val().trim() == "") {
	      	$("#panel_psc_ta_282").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_282").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_282 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_282").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_282").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_282 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_283']").val().trim() == "") {
	      	$("#panel_psc_ta_283").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_283").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_283 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_283").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_283").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_283 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_284']").val().trim() == "") {
	      	$("#panel_psc_ta_284").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_284").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_284 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_284").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_284").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_284 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_285']").val().trim() == "") {
	      	$("#panel_psc_ta_285").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_285").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_285 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_285").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_285").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_285 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_286']").val().trim() == "") {
	      	$("#panel_psc_ta_286").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_286").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_286 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_286").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_286").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_286 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_287']").val().trim() == "") {
	      	$("#panel_psc_ta_287").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_287").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_287 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_287").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_287").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_287 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_288']").val().trim() == "") {
	      	$("#panel_psc_ta_288").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_288").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_288 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_288").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_288").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_288 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_289']").val().trim() == "") {
	      	$("#panel_psc_ta_289").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_289").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_289 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_289").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_289").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_289 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_290']").val().trim() == "") {
	      	$("#panel_psc_ta_290").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_290").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_290 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_290").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_290").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_290 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_291']").val().trim() == "") {
	      	$("#panel_psc_ta_291").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_291").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_291 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_291").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_291").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_291 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_292']").val().trim() == "") {
	      	$("#panel_psc_ta_292").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_292").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_292 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_292").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_292").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_292 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_293']").val().trim() == "") {
	      	$("#panel_psc_ta_293").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_293").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_293 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_293").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_293").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_293 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_294']").val().trim() == "") {
	      	$("#panel_psc_ta_294").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_294").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_294 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_294").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_294").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_294 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_295']").val().trim() == "") {
	      	$("#panel_psc_ta_295").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_295").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_295 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_295").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_295").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_295 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_296']").val().trim() == "") {
	      	$("#panel_psc_ta_296").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_296").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_296 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_296").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_296").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_296 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_297']").val().trim() == "") {
	      	$("#panel_psc_ta_297").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_297").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_297 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_297").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_297").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_297 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_298']").val().trim() == "") {
	      	$("#panel_psc_ta_298").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_298").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_298 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_298").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_298").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_298 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_299']").val().trim() == "") {
	      	$("#panel_psc_ta_299").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_299").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_299 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_299").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_299").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_299 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_300']").val().trim() == "") {
	      	$("#panel_psc_ta_300").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_300").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_300 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_300").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_300").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_300 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_301']").val().trim() == "") {
	      	$("#panel_psc_ta_301").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_301").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_301 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_301").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_301").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_301 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_302']").val().trim() == "") {
	      	$("#panel_psc_ta_302").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_302").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_302 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_302").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_302").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_302 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_303']").val().trim() == "") {
	      	$("#panel_psc_ta_303").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_303").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_303 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_303").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_303").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_303 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_304']").val().trim() == "") {
	      	$("#panel_psc_ta_304").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_304").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_304 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_304").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_304").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_304 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_305']").val().trim() == "") {
	      	$("#panel_psc_ta_305").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_305").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_305 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_305").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_305").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_305 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_306']").val().trim() == "") {
	      	$("#panel_psc_ta_306").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_306").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_306 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_306").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_306").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_306 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_307']").val().trim() == "") {
	      	$("#panel_psc_ta_307").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_307").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_307 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_307").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_307").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_307 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_308']").val().trim() == "") {
	      	$("#panel_psc_ta_308").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_308").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_308 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_308").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_308").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_308 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_309']").val().trim() == "") {
	      	$("#panel_psc_ta_309").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_309").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_309 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_309").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_309").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_309 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_310']").val().trim() == "") {
	      	$("#panel_psc_ta_310").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_310").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_310 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_310").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_310").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_310 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_311']").val().trim() == "") {
	      	$("#panel_psc_ta_311").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_311").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_311 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_311").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_311").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_311 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_312']").val().trim() == "") {
	      	$("#panel_psc_ta_312").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_312").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_312 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_312").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_312").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_312 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_313']").val().trim() == "") {
	      	$("#panel_psc_ta_313").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_313").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_313 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_313").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_313").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_313 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_314']").val().trim() == "") {
	      	$("#panel_psc_ta_314").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_314").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_314 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_314").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_314").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_314 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_315']").val().trim() == "") {
	      	$("#panel_psc_ta_315").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_315").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_315 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_315").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_315").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_315 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_316']").val().trim() == "") {
	      	$("#panel_psc_ta_316").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_316").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_316 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_316").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_316").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_316 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_317']").val().trim() == "") {
	      	$("#panel_psc_ta_317").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_317").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_317 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_317").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_317").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_317 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_318']").val().trim() == "") {
	      	$("#panel_psc_ta_318").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_318").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_318 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_318").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_318").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_318 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_319']").val().trim() == "") {
	      	$("#panel_psc_ta_319").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_319").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_319 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_319").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_319").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_319 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_320']").val().trim() == "") {
	      	$("#panel_psc_ta_320").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_320").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_320 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_320").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_320").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_320 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_321']").val().trim() == "") {
	      	$("#panel_psc_ta_321").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_321").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_321 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_321").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_321").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_321 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_322']").val().trim() == "") {
	      	$("#panel_psc_ta_322").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_322").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_322 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_322").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_322").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_322 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_323']").val().trim() == "") {
	      	$("#panel_psc_ta_323").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_323").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_323 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_323").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_323").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_323 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_324']").val().trim() == "") {
	      	$("#panel_psc_ta_324").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_324").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_324 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_324").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_324").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_324 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_325']").val().trim() == "") {
	      	$("#panel_psc_ta_325").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_325").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_325 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_325").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_325").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_325 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_326']").val().trim() == "") {
	      	$("#panel_psc_ta_326").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_326").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_326 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_326").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_326").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_326 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_327']").val().trim() == "") {
	      	$("#panel_psc_ta_327").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_327").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_327 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_327").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_327").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_327 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_328']").val().trim() == "") {
	      	$("#panel_psc_ta_328").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_328").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_328 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_328").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_328").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_328 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_329']").val().trim() == "") {
	      	$("#panel_psc_ta_329").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_329").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_329 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_329").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_329").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_329 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_330']").val().trim() == "") {
	      	$("#panel_psc_ta_330").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_330").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_330 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_330").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_330").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_330 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});