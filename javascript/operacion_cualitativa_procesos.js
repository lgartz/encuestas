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
	   	if ($("textarea[name='psc_ta_377']").val().trim() == "") {
	      	$("#panel_psc_ta_377").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_377").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_377 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_377").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_377").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_377 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_378']").val().trim() == "") {
	      	$("#panel_psc_ta_378").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_378").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_378 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_378").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_378").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_378 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_379']").val().trim() == "") {
	      	$("#panel_psc_ta_379").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_379").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_379 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_379").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_379").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_379 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_380']").val().trim() == "") {
	      	$("#panel_psc_ta_380").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_380").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_380 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_380").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_380").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_380 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_380']").val().trim() == "") {
	      	$("#panel_psc_ta_380").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_380").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_380 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_380").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_380").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_380 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_381']").val().trim() == "") {
	      	$("#panel_psc_ta_381").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_381").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_381 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_381").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_381").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_381 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_382']").val().trim() == "") {
	      	$("#panel_psc_ta_382").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_382").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_382 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_382").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_382").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_382 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_383']").val().trim() == "") {
	      	$("#panel_psc_ta_383").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_383").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_383 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_383").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_383").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_383 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_384']").val().trim() == "") {
	      	$("#panel_psc_ta_384").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_384").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_384 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_384").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_384").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_384 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_385']").val().trim() == "") {
	      	$("#panel_psc_ta_385").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_385").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_385 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_385").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_385").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_385 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_386']").val().trim() == "") {
	      	$("#panel_psc_ta_386").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_386").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_386 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_386").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_386").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_386 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_387']").val().trim() == "") {
	      	$("#panel_psc_ta_387").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_387").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_387 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_387").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_387").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_387 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_388']").val().trim() == "") {
	      	$("#panel_psc_ta_388").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_388").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_388 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_388").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_388").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_388 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_389']").val().trim() == "") {
	      	$("#panel_psc_ta_389").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_389").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_389 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_389").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_389").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_389 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_390']").val().trim() == "") {
	      	$("#panel_psc_ta_390").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_390").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_390 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_390").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_390").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_390 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_391']").val().trim() == "") {
	      	$("#panel_psc_ta_391").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_391").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_391 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_391").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_391").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_391 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_392']").val().trim() == "") {
	      	$("#panel_psc_ta_392").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_392").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_392 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_392").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_392").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_392 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_393']").val().trim() == "") {
	      	$("#panel_psc_ta_393").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_393").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_393 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_393").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_393").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_393 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_394']").val().trim() == "") {
	      	$("#panel_psc_ta_394").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_394").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_394 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_394").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_394").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_394 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_395']").val().trim() == "") {
	      	$("#panel_psc_ta_395").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_395").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_395 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_395").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_395").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_395 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_396']").val().trim() == "") {
	      	$("#panel_psc_ta_396").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_396").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_396 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_396").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_396").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_396 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_397']").val().trim() == "") {
	      	$("#panel_psc_ta_397").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_397").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_397 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_397").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_397").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_397 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_398']").val().trim() == "") {
	      	$("#panel_psc_ta_398").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_398").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_398 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_398").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_398").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_398 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_399']").val().trim() == "") {
	      	$("#panel_psc_ta_399").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_399").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_399 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_399").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_399").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_399 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_400']").val().trim() == "") {
	      	$("#panel_psc_ta_400").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_400").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_400 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_400").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_400").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_400 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_401']").val().trim() == "") {
	      	$("#panel_psc_ta_401").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_401").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_401 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_401").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_401").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_401 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_402']").val().trim() == "") {
	      	$("#panel_psc_ta_402").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_402").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_402 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_402").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_402").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_402 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_403']").val().trim() == "") {
	      	$("#panel_psc_ta_403").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_403").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_403 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_403").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_403").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_403 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_404']").val().trim() == "") {
	      	$("#panel_psc_ta_404").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_404").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_404 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_404").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_404").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_404 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_405']").val().trim() == "") {
	      	$("#panel_psc_ta_405").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_405").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_405 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_405").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_405").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_405 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_406']").val().trim() == "") {
	      	$("#panel_psc_ta_406").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_406").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_406 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_406").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_406").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_406 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_407']").val().trim() == "") {
	      	$("#panel_psc_ta_407").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_407").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_407 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_407").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_407").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_407 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_408']").val().trim() == "") {
	      	$("#panel_psc_ta_408").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_408").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_408 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_408").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_408").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_408 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_409']").val().trim() == "") {
	      	$("#panel_psc_ta_409").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_409").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_409 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_409").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_409").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_409 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_410']").val().trim() == "") {
	      	$("#panel_psc_ta_410").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_410").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_410 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_410").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_410").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_410 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_411']").val().trim() == "") {
	      	$("#panel_psc_ta_411").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_411").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_411 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_411").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_411").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_411 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_412']").val().trim() == "") {
	      	$("#panel_psc_ta_412").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_412").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_412 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_412").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_412").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_412 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_413']").val().trim() == "") {
	      	$("#panel_psc_ta_413").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_413").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_413 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_413").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_413").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_413 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_414']").val().trim() == "") {
	      	$("#panel_psc_ta_414").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_414").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_414 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_414").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_414").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_414 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_415']").val().trim() == "") {
	      	$("#panel_psc_ta_415").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_415").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_415 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_415").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_415").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_415 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_416']").val().trim() == "") {
	      	$("#panel_psc_ta_416").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_416").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_416 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_416").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_416").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_416 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_417']").val().trim() == "") {
	      	$("#panel_psc_ta_417").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_417").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_417 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_417").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_417").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_417 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_418']").val().trim() == "") {
	      	$("#panel_psc_ta_418").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_418").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_418 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_418").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_418").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_418 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_419']").val().trim() == "") {
	      	$("#panel_psc_ta_419").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_419").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_419 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_419").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_419").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_419 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_420']").val().trim() == "") {
	      	$("#panel_psc_ta_420").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_420").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_420 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_420").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_420").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_420 h4 small b").addClass("message_error");
	   	}
	   	if ($("textarea[name='psc_ta_421']").val().trim() == "") {
	      	$("#panel_psc_ta_421").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_421").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_421 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_421").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_421").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_421 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});