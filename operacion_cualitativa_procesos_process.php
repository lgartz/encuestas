<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$psc_ta_377 = $_GET["psc_ta_377"];
	$id_psc_ta_377 = "psc_ta_377";
	getSqlInsertPsu($encuestado,$id_psc_ta_377,$psc_ta_377);
	$psc_ta_378 = $_GET["psc_ta_378"];
	$id_psc_ta_378 = "psc_ta_378";
	getSqlInsertPsu($encuestado,$id_psc_ta_378,$psc_ta_378);
	$psc_ta_379 = $_GET["psc_ta_379"];
	$id_psc_ta_379 = "psc_ta_379";
	getSqlInsertPsu($encuestado,$id_psc_ta_379,$psc_ta_379);
	$psc_ta_380 = $_GET["psc_ta_380"];
	$id_psc_ta_380 = "psc_ta_380";
	getSqlInsertPsu($encuestado,$id_psc_ta_380,$psc_ta_380);
	$psc_ta_510 = $_GET["psc_ta_510"];
	$id_psc_ta_510 = "psc_ta_510";
	getSqlInsertPsu($encuestado,$id_psc_ta_510,$psc_ta_510);
	$psc_ta_381 = $_GET["psc_ta_381"];
	$id_psc_ta_381 = "psc_ta_381";
	getSqlInsertPsu($encuestado,$id_psc_ta_381,$psc_ta_381);
	$psc_ta_382 = $_GET["psc_ta_382"];
	$id_psc_ta_382 = "psc_ta_382";
	getSqlInsertPsu($encuestado,$id_psc_ta_382,$psc_ta_382);
	$psc_ta_383 = $_GET["psc_ta_383"];
	$id_psc_ta_383 = "psc_ta_383";
	getSqlInsertPsu($encuestado,$id_psc_ta_383,$psc_ta_383);
	$psc_ta_384 = $_GET["psc_ta_384"];
	$id_psc_ta_384 = "psc_ta_384";
	getSqlInsertPsu($encuestado,$id_psc_ta_384,$psc_ta_384);
	$psc_ta_385 = $_GET["psc_ta_385"];
	$id_psc_ta_385 = "psc_ta_385";
	getSqlInsertPsu($encuestado,$id_psc_ta_385,$psc_ta_385);
	$psc_ta_386 = $_GET["psc_ta_386"];
	$id_psc_ta_386 = "psc_ta_386";
	getSqlInsertPsu($encuestado,$id_psc_ta_386,$psc_ta_386);
	$psc_ta_387 = $_GET["psc_ta_387"];
	$id_psc_ta_387 = "psc_ta_387";
	getSqlInsertPsu($encuestado,$id_psc_ta_387,$psc_ta_387);
	$psc_ta_388 = $_GET["psc_ta_388"];
	$id_psc_ta_388 = "psc_ta_388";
	getSqlInsertPsu($encuestado,$id_psc_ta_388,$psc_ta_388);
	$psc_ta_389 = $_GET["psc_ta_389"];
	$id_psc_ta_389 = "psc_ta_389";
	getSqlInsertPsu($encuestado,$id_psc_ta_389,$psc_ta_389);
	$psc_ta_390 = $_GET["psc_ta_390"];
	$id_psc_ta_390 = "psc_ta_390";
	getSqlInsertPsu($encuestado,$id_psc_ta_390,$psc_ta_390);
	$psc_ta_391 = $_GET["psc_ta_391"];
	$id_psc_ta_391 = "psc_ta_391";
	getSqlInsertPsu($encuestado,$id_psc_ta_391,$psc_ta_391);
	$psc_ta_392 = $_GET["psc_ta_392"];
	$id_psc_ta_392 = "psc_ta_392";
	getSqlInsertPsu($encuestado,$id_psc_ta_392,$psc_ta_392);
	$psc_ta_393 = $_GET["psc_ta_393"];
	$id_psc_ta_393 = "psc_ta_393";
	getSqlInsertPsu($encuestado,$id_psc_ta_393,$psc_ta_393);
	$psc_ta_394 = $_GET["psc_ta_394"];
	$id_psc_ta_394 = "psc_ta_394";
	getSqlInsertPsu($encuestado,$id_psc_ta_394,$psc_ta_394);
	$psc_ta_395 = $_GET["psc_ta_395"];
	$id_psc_ta_395 = "psc_ta_395";
	getSqlInsertPsu($encuestado,$id_psc_ta_395,$psc_ta_395);
	$psc_ta_396 = $_GET["psc_ta_396"];
	$id_psc_ta_396 = "psc_ta_396";
	getSqlInsertPsu($encuestado,$id_psc_ta_396,$psc_ta_396);
	$psc_ta_397 = $_GET["psc_ta_397"];
	$id_psc_ta_397 = "psc_ta_397";
	getSqlInsertPsu($encuestado,$id_psc_ta_397,$psc_ta_397);
	$psc_ta_398 = $_GET["psc_ta_398"];
	$id_psc_ta_398 = "psc_ta_398";
	getSqlInsertPsu($encuestado,$id_psc_ta_398,$psc_ta_398);
	$psc_ta_399 = $_GET["psc_ta_399"];
	$id_psc_ta_399 = "psc_ta_399";
	getSqlInsertPsu($encuestado,$id_psc_ta_399,$psc_ta_399);
	$psc_ta_400 = $_GET["psc_ta_400"];
	$id_psc_ta_400 = "psc_ta_400";
	getSqlInsertPsu($encuestado,$id_psc_ta_400,$psc_ta_400);
	$psc_ta_401 = $_GET["psc_ta_401"];
	$id_psc_ta_401 = "psc_ta_401";
	getSqlInsertPsu($encuestado,$id_psc_ta_401,$psc_ta_401);
	$psc_ta_402 = $_GET["psc_ta_402"];
	$id_psc_ta_402 = "psc_ta_402";
	getSqlInsertPsu($encuestado,$id_psc_ta_402,$psc_ta_402);
	$psc_ta_403 = $_GET["psc_ta_403"];
	$id_psc_ta_403 = "psc_ta_403";
	getSqlInsertPsu($encuestado,$id_psc_ta_403,$psc_ta_403);
	$psc_ta_404 = $_GET["psc_ta_404"];
	$id_psc_ta_404 = "psc_ta_404";
	getSqlInsertPsu($encuestado,$id_psc_ta_404,$psc_ta_404);
	$psc_ta_405 = $_GET["psc_ta_405"];
	$id_psc_ta_405 = "psc_ta_405";
	getSqlInsertPsu($encuestado,$id_psc_ta_405,$psc_ta_405);
	$psc_ta_406 = $_GET["psc_ta_406"];
	$id_psc_ta_406 = "psc_ta_406";
	getSqlInsertPsu($encuestado,$id_psc_ta_406,$psc_ta_406);
	$psc_ta_407 = $_GET["psc_ta_407"];
	$id_psc_ta_407 = "psc_ta_407";
	getSqlInsertPsu($encuestado,$id_psc_ta_407,$psc_ta_407);
	$psc_ta_408 = $_GET["psc_ta_408"];
	$id_psc_ta_408 = "psc_ta_408";
	getSqlInsertPsu($encuestado,$id_psc_ta_408,$psc_ta_408);
	$psc_ta_409 = $_GET["psc_ta_409"];
	$id_psc_ta_409 = "psc_ta_409";
	getSqlInsertPsu($encuestado,$id_psc_ta_409,$psc_ta_409);
	$psc_ta_410 = $_GET["psc_ta_410"];
	$id_psc_ta_410 = "psc_ta_410";
	getSqlInsertPsu($encuestado,$id_psc_ta_410,$psc_ta_410);
	$psc_ta_411 = $_GET["psc_ta_411"];
	$id_psc_ta_411 = "psc_ta_411";
	getSqlInsertPsu($encuestado,$id_psc_ta_411,$psc_ta_411);
	$psc_ta_412 = $_GET["psc_ta_412"];
	$id_psc_ta_412 = "psc_ta_412";
	getSqlInsertPsu($encuestado,$id_psc_ta_412,$psc_ta_412);
	$psc_ta_413 = $_GET["psc_ta_413"];
	$id_psc_ta_413 = "psc_ta_413";
	getSqlInsertPsu($encuestado,$id_psc_ta_413,$psc_ta_413);
	$psc_ta_414 = $_GET["psc_ta_414"];
	$id_psc_ta_414 = "psc_ta_414";
	getSqlInsertPsu($encuestado,$id_psc_ta_414,$psc_ta_414);
	$psc_ta_415 = $_GET["psc_ta_415"];
	$id_psc_ta_415 = "psc_ta_415";
	getSqlInsertPsu($encuestado,$id_psc_ta_415,$psc_ta_415);
	$psc_ta_416 = $_GET["psc_ta_416"];
	$id_psc_ta_416 = "psc_ta_416";
	getSqlInsertPsu($encuestado,$id_psc_ta_416,$psc_ta_416);
	$psc_ta_417 = $_GET["psc_ta_417"];
	$id_psc_ta_417 = "psc_ta_417";
	getSqlInsertPsu($encuestado,$id_psc_ta_417,$psc_ta_417);
	$psc_ta_418 = $_GET["psc_ta_418"];
	$id_psc_ta_418 = "psc_ta_418";
	getSqlInsertPsu($encuestado,$id_psc_ta_418,$psc_ta_418);
	$psc_ta_419 = $_GET["psc_ta_419"];
	$id_psc_ta_419 = "psc_ta_419";
	getSqlInsertPsu($encuestado,$id_psc_ta_419,$psc_ta_419);
	$psc_ta_420 = $_GET["psc_ta_420"];
	$id_psc_ta_420 = "psc_ta_420";
	getSqlInsertPsu($encuestado,$id_psc_ta_420,$psc_ta_420);
	$psc_ta_421 = $_GET["psc_ta_421"];
	$id_psc_ta_421 = "psc_ta_421";
	getSqlInsertPsu($encuestado,$id_psc_ta_421,$psc_ta_421);	
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