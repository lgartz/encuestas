<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$eru_rb_331 = $_GET["eru_rb_331"];
	getSqlInsertEru($encuestado,$eru_rb_331);
	$eru_rb_332 = $_GET["eru_rb_332"];
	getSqlInsertEru($encuestado,$eru_rb_332);
	$eru_rb_333 = $_GET["eru_rb_333"];
	getSqlInsertEru($encuestado,$eru_rb_333);
	$eru_rb_334 = $_GET["eru_rb_334"];
	getSqlInsertEru($encuestado,$eru_rb_334);
	$eru_rb_335 = $_GET["eru_rb_335"];
	getSqlInsertEru($encuestado,$eru_rb_335);
	$eru_rb_336 = $_GET["eru_rb_336"];
	getSqlInsertEru($encuestado,$eru_rb_336);
	$eru_rb_337 = $_GET["eru_rb_337"];
	getSqlInsertEru($encuestado,$eru_rb_337);
	$eru_rb_338 = $_GET["eru_rb_338"];
	getSqlInsertEru($encuestado,$eru_rb_338);
	$eru_rb_339 = $_GET["eru_rb_339"];
	getSqlInsertEru($encuestado,$eru_rb_339);
	$eru_rb_340 = $_GET["eru_rb_340"];
	getSqlInsertEru($encuestado,$eru_rb_340);
	$eru_rb_341 = $_GET["eru_rb_341"];
	getSqlInsertEru($encuestado,$eru_rb_341);
	$eru_rb_342 = $_GET["eru_rb_342"];
	getSqlInsertEru($encuestado,$eru_rb_342);
	$eru_rb_343 = $_GET["eru_rb_343"];
	getSqlInsertEru($encuestado,$eru_rb_343);
	$eru_rb_344 = $_GET["eru_rb_344"];
	getSqlInsertEru($encuestado,$eru_rb_344);
	$eru_rb_345 = $_GET["eru_rb_345"];
	getSqlInsertEru($encuestado,$eru_rb_345);
	$eru_rb_346 = $_GET["eru_rb_346"];
	getSqlInsertEru($encuestado,$eru_rb_346);
	$eru_rb_347 = $_GET["eru_rb_347"];
	getSqlInsertEru($encuestado,$eru_rb_347);
	$eru_rb_348 = $_GET["eru_rb_348"];
	getSqlInsertEru($encuestado,$eru_rb_348);
	$eru_rb_349 = $_GET["eru_rb_349"];
	getSqlInsertEru($encuestado,$eru_rb_349);
	$eru_rb_350 = $_GET["eru_rb_350"];
	getSqlInsertEru($encuestado,$eru_rb_350);
	$eru_rb_351 = $_GET["eru_rb_351"];
	getSqlInsertEru($encuestado,$eru_rb_351);
	$eru_rb_352 = $_GET["eru_rb_352"];
	getSqlInsertEru($encuestado,$eru_rb_352);
	$eru_rb_353 = $_GET["eru_rb_353"];
	getSqlInsertEru($encuestado,$eru_rb_353);
	$eru_rb_354 = $_GET["eru_rb_354"];
	getSqlInsertEru($encuestado,$eru_rb_354);
	$eru_rb_355 = $_GET["eru_rb_355"];
	getSqlInsertEru($encuestado,$eru_rb_355);
	$eru_rb_356 = $_GET["eru_rb_356"];
	getSqlInsertEru($encuestado,$eru_rb_356);
	$eru_rb_357 = $_GET["eru_rb_357"];
	getSqlInsertEru($encuestado,$eru_rb_357);
	$eru_rb_358 = $_GET["eru_rb_358"];
	getSqlInsertEru($encuestado,$eru_rb_358);
	$eru_rb_359 = $_GET["eru_rb_359"];
	getSqlInsertEru($encuestado,$eru_rb_359);
	$eru_rb_360 = $_GET["eru_rb_360"];
	getSqlInsertEru($encuestado,$eru_rb_360);
	$eru_rb_361 = $_GET["eru_rb_361"];
	getSqlInsertEru($encuestado,$eru_rb_361);
	$eru_rb_362 = $_GET["eru_rb_362"];
	getSqlInsertEru($encuestado,$eru_rb_362);
	$eru_rb_363 = $_GET["eru_rb_363"];
	getSqlInsertEru($encuestado,$eru_rb_363);
	$eru_rb_364 = $_GET["eru_rb_364"];
	getSqlInsertEru($encuestado,$eru_rb_364);
	$eru_rb_365 = $_GET["eru_rb_365"];
	getSqlInsertEru($encuestado,$eru_rb_365);
	$eru_rb_366 = $_GET["eru_rb_366"];
	getSqlInsertEru($encuestado,$eru_rb_366);
	$eru_rb_367 = $_GET["eru_rb_367"];
	getSqlInsertEru($encuestado,$eru_rb_367);
	$eru_rb_368 = $_GET["eru_rb_368"];
	getSqlInsertEru($encuestado,$eru_rb_368);
	$eru_rb_369 = $_GET["eru_rb_369"];
	getSqlInsertEru($encuestado,$eru_rb_369);
	$eru_rb_370 = $_GET["eru_rb_370"];
	getSqlInsertEru($encuestado,$eru_rb_370);
	$eru_rb_371 = $_GET["eru_rb_371"];
	getSqlInsertEru($encuestado,$eru_rb_371);
	$eru_rb_372 = $_GET["eru_rb_372"];
	getSqlInsertEru($encuestado,$eru_rb_372);
	$eru_rb_373 = $_GET["eru_rb_373"];
	getSqlInsertEru($encuestado,$eru_rb_373);
	$eru_rb_374 = $_GET["eru_rb_374"];
	getSqlInsertEru($encuestado,$eru_rb_374);
	$eru_rb_375 = $_GET["eru_rb_375"];
	getSqlInsertEru($encuestado,$eru_rb_375);
	$eru_rb_376 = $_GET["eru_rb_376"];
	getSqlInsertEru($encuestado,$eru_rb_376);	
	// Cerrar Conexion
	$sql = "UPDATE encuestado_has_encuesta SET encuestado_has_encuesta_respuesta = '1' WHERE encuestado_id = '".$encuestado."' AND encuesta_id = '".$encuesta."';";
	insert($sql);
	close_connect_with_mysql($conn);
	
	function getSqlInsertSmu($encuestado, $opcion){
		$sql = "INSERT INTO ressmu (ressmu_encuestado_id, ressmu_opsmu_id) VALUES ('".$encuestado."','".$opcion."');";
		insert($sql);
	}
	
	function getSqlInsertSmr($encuestado, $opciones){
		$tam = count($opciones);
		for($i = 0; $i < $tam; $i++) {
	    	$sql = "INSERT INTO ressmu (ressmu_encuestado_id, ressmu_opsmu_id) VALUES ('".$encuestado."','".$opciones[$i]."');";
	    	insert($sql);
		}
	}
	
	function getSqlInsertEru($encuestado, $opcion){
		$value = explode("_",$opcion);
		$sql = "INSERT INTO reseru(reseru_pregunta_id, reseru_encuestado_id, reseru_valor) VALUES ('".$value[0]."_".$value[1]."_".$value[2]."','".$encuestado."','".$value[3]."');";
		insert($sql);
	}
	
	function getSqlInsertPsu ($encuestado, $pregunta, $comentario){
		$sql = "INSERT INTO respsu (respsu_encuestado_id, respsu_pregunta_id, respsu_id, respsu_comentario) VALUES ('".$encuestado."','".$pregunta."',null,'".$comentario."');";
		insert($sql);
	}
	
	function getSqlInsertPsm ($encuestado, $pregunta, $comentario){
		$value = explode("_",$pregunta);
		$sql = "INSERT INTO respsu (respsu_encuestado_id, respsu_pregunta_id, respsu_id, respsu_comentario) VALUES ('".$encuestado."','".$value[0]."_".$value[1]."_".$value[2]."','".$pregunta."','".$comentario."');";
		insert($sql);
	}
	
	function getSqlInsertPfh ($encuestado, $opcion){
		$value = explode("_",$opcion);
		$fecha = $_GET[$value[0]."_".$value[1]."_date_".$value[2]];
		$hora = $_GET[$value[0]."_".$value[1]."_hour_".$value[2]];
		$minuto = $_GET[$value[0]."_".$value[1]."_minute_".$value[2]];
		$sql = "INSERT INTO respfh(respfh_pregunta_id, respfh_encuestado_id, respfh_fecha, respfh_hora) VALUES ('".$opcion."','".$encuestado."','".$fecha."','".$hora.":".$minuto."');";
		insert($sql);
	}
	
	function getSqlInsertPsf ($encuestado, $opcion){
		$value = explode("_",$opcion);
		$fecha = $_GET[$value[0]."_".$value[1]."_date_".$value[2]];
		$sql = "INSERT INTO respfh(respfh_pregunta_id, respfh_encuestado_id, respfh_fecha, respfh_hora) VALUES ('".$opcion."','".$encuestado."','".$fecha."',null);";
		insert($sql);
	}
	
	function getSqlInsertPsh ($encuestado, $opcion){
		$value = explode("_",$opcion);
		$hora = $_GET[$value[0]."_".$value[1]."_hour_".$value[2]];
		$minuto = $_GET[$value[0]."_".$value[1]."_minute_".$value[2]];
		$sql = "INSERT INTO respfh(respfh_pregunta_id, respfh_encuestado_id, respfh_fecha, respfh_hora) VALUES ('".$opcion."','".$encuestado."',null,'".$hora.":".$minuto."');";
		insert($sql);
	}
	
	function getSqlInsertMmr ($encuestado, $opcion){
		$sql = "INSERT INTO resmmr(resmmr_opmmr_id, resmmr_encuestado_id) VALUES ('".$opcion."','".$encuestado."');";
		insert($sql);
	}
	
	function getSqlInsertMmrCb ($encuestado, $opciones){
		$tam = count($opciones);
		for($i = 0; $i < $tam; $i++) {
	    	$sql = "INSERT INTO resmmr(resmmr_opmmr_id, resmmr_encuestado_id) VALUES ('".$opciones[$i]."','".$encuestado."');";
	    	insert($sql);
		}
	}
	
	function getSqlInsertMmrS ($encuestado, $opcion){
		$sql = "INSERT INTO resmmrs(resmmrs_opmmrs_id, resmmrs_encuestado_id) VALUES ('".$opcion."','".$encuestado."');";
		insert($sql);	
	}
	
	function insert ($sql){
		if (mysql_query($sql)) {
			return true;
		}else{
			return false;	
		}			
	}
	
	header('Location: sucess.php');
?>