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
		if ($("input[name='eru_rb_331']:checked").length == 0) {
	      	$("#panel_eru_rb_331").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_331").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_331 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_331").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_331").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_331 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_332']:checked").length == 0) {
	      	$("#panel_eru_rb_332").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_332").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_332 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_332").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_332").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_332 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_333']:checked").length == 0) {
	      	$("#panel_eru_rb_333").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_333").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_333 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_333").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_333").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_333 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_334']:checked").length == 0) {
	      	$("#panel_eru_rb_334").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_334").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_334 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_334").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_334").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_334 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_335']:checked").length == 0) {
	      	$("#panel_eru_rb_335").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_335").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_335 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_335").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_335").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_335 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_336']:checked").length == 0) {
	      	$("#panel_eru_rb_336").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_336").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_336 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_336").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_336").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_336 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_337']:checked").length == 0) {
	      	$("#panel_eru_rb_337").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_337").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_337 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_337").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_337").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_337 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_338']:checked").length == 0) {
	      	$("#panel_eru_rb_338").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_338").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_338 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_338").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_338").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_338 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_339']:checked").length == 0) {
	      	$("#panel_eru_rb_339").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_339").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_339 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_339").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_339").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_339 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_340']:checked").length == 0) {
	      	$("#panel_eru_rb_340").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_340").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_340 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_340").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_340").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_340 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_341']:checked").length == 0) {
	      	$("#panel_eru_rb_341").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_341").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_341 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_341").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_341").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_341 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_342']:checked").length == 0) {
	      	$("#panel_eru_rb_342").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_342").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_342 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_342").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_342").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_342 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_343']:checked").length == 0) {
	      	$("#panel_eru_rb_343").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_343").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_343 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_343").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_343").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_343 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_344']:checked").length == 0) {
	      	$("#panel_eru_rb_344").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_344").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_344 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_344").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_344").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_344 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_345']:checked").length == 0) {
	      	$("#panel_eru_rb_345").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_345").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_345 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_345").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_345").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_345 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_346']:checked").length == 0) {
	      	$("#panel_eru_rb_346").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_346").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_346 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_346").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_346").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_346 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_347']:checked").length == 0) {
	      	$("#panel_eru_rb_347").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_347").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_347 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_347").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_347").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_347 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_348']:checked").length == 0) {
	      	$("#panel_eru_rb_348").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_348").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_348 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_348").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_348").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_348 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_349']:checked").length == 0) {
	      	$("#panel_eru_rb_349").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_349").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_349 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_349").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_349").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_349 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_350']:checked").length == 0) {
	      	$("#panel_eru_rb_350").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_350").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_350 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_350").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_350").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_350 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_351']:checked").length == 0) {
	      	$("#panel_eru_rb_351").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_351").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_351 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_351").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_351").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_351 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_352']:checked").length == 0) {
	      	$("#panel_eru_rb_352").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_352").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_352 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_352").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_352").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_352 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_353']:checked").length == 0) {
	      	$("#panel_eru_rb_353").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_353").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_353 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_353").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_353").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_353 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_354']:checked").length == 0) {
	      	$("#panel_eru_rb_354").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_354").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_354 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_354").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_354").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_354 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_355']:checked").length == 0) {
	      	$("#panel_eru_rb_355").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_355").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_355 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_355").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_355").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_355 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_356']:checked").length == 0) {
	      	$("#panel_eru_rb_356").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_356").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_356 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_356").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_356").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_356 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_357']:checked").length == 0) {
	      	$("#panel_eru_rb_357").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_357").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_357 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_357").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_357").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_357 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_358']:checked").length == 0) {
	      	$("#panel_eru_rb_358").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_358").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_358 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_358").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_358").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_358 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_359']:checked").length == 0) {
	      	$("#panel_eru_rb_359").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_359").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_359 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_359").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_359").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_359 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_360']:checked").length == 0) {
	      	$("#panel_eru_rb_360").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_360").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_360 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_360").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_360").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_360 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_361']:checked").length == 0) {
	      	$("#panel_eru_rb_361").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_361").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_361 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_361").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_361").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_361 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_362']:checked").length == 0) {
	      	$("#panel_eru_rb_362").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_362").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_362 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_362").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_362").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_362 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_363']:checked").length == 0) {
	      	$("#panel_eru_rb_363").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_363").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_363 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_363").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_363").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_363 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_364']:checked").length == 0) {
	      	$("#panel_eru_rb_364").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_364").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_364 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_364").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_364").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_364 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_365']:checked").length == 0) {
	      	$("#panel_eru_rb_365").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_365").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_365 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_365").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_365").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_365 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_366']:checked").length == 0) {
	      	$("#panel_eru_rb_366").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_366").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_366 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_366").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_366").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_366 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_367']:checked").length == 0) {
	      	$("#panel_eru_rb_367").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_367").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_367 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_367").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_367").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_367 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_368']:checked").length == 0) {
	      	$("#panel_eru_rb_368").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_368").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_368 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_368").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_368").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_368 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_369']:checked").length == 0) {
	      	$("#panel_eru_rb_369").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_369").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_369 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_369").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_369").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_369 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_370']:checked").length == 0) {
	      	$("#panel_eru_rb_370").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_370").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_370 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_370").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_370").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_370 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_371']:checked").length == 0) {
	      	$("#panel_eru_rb_371").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_371").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_371 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_371").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_371").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_371 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_372']:checked").length == 0) {
	      	$("#panel_eru_rb_372").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_372").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_372 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_372").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_372").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_372 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_373']:checked").length == 0) {
	      	$("#panel_eru_rb_373").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_373").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_373 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_373").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_373").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_373 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_374']:checked").length == 0) {
	      	$("#panel_eru_rb_374").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_374").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_374 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_374").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_374").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_374 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_375']:checked").length == 0) {
	      	$("#panel_eru_rb_375").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_375").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_375 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_375").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_375").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_375 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='eru_rb_376']:checked").length == 0) {
	      	$("#panel_eru_rb_376").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_376").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_376 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_376").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_376").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_376 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});