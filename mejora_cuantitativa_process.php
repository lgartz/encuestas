<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$eru_rb_458 = $_GET["eru_rb_458"];
	getSqlInsertEru($encuestado,$eru_rb_458);
	$eru_rb_459 = $_GET["eru_rb_459"];
	getSqlInsertEru($encuestado,$eru_rb_459);
	$eru_rb_460 = $_GET["eru_rb_460"];
	getSqlInsertEru($encuestado,$eru_rb_460);
	$eru_rb_511 = $_GET["eru_rb_511"];
	getSqlInsertEru($encuestado,$eru_rb_511);
	$eru_rb_461 = $_GET["eru_rb_461"];
	getSqlInsertEru($encuestado,$eru_rb_461);
	$eru_rb_462 = $_GET["eru_rb_462"];
	getSqlInsertEru($encuestado,$eru_rb_462);
	$eru_rb_463 = $_GET["eru_rb_463"];
	getSqlInsertEru($encuestado,$eru_rb_463);
	$eru_rb_464 = $_GET["eru_rb_464"];
	getSqlInsertEru($encuestado,$eru_rb_464);
	$eru_rb_465 = $_GET["eru_rb_465"];
	getSqlInsertEru($encuestado,$eru_rb_465);
	$eru_rb_466 = $_GET["eru_rb_466"];
	getSqlInsertEru($encuestado,$eru_rb_466);
	$eru_rb_467 = $_GET["eru_rb_467"];
	getSqlInsertEru($encuestado,$eru_rb_467);
	$eru_rb_468 = $_GET["eru_rb_468"];
	getSqlInsertEru($encuestado,$eru_rb_468);
	$eru_rb_469 = $_GET["eru_rb_469"];
	getSqlInsertEru($encuestado,$eru_rb_469);
	$eru_rb_470 = $_GET["eru_rb_470"];
	getSqlInsertEru($encuestado,$eru_rb_470);
	$eru_rb_471 = $_GET["eru_rb_471"];
	getSqlInsertEru($encuestado,$eru_rb_471);
	$eru_rb_472 = $_GET["eru_rb_472"];
	getSqlInsertEru($encuestado,$eru_rb_472);
	$eru_rb_473 = $_GET["eru_rb_473"];
	getSqlInsertEru($encuestado,$eru_rb_473);
	$eru_rb_474 = $_GET["eru_rb_474"];
	getSqlInsertEru($encuestado,$eru_rb_474);
	$eru_rb_475 = $_GET["eru_rb_475"];
	getSqlInsertEru($encuestado,$eru_rb_475);
	$eru_rb_476 = $_GET["eru_rb_476"];
	getSqlInsertEru($encuestado,$eru_rb_476);
	$eru_rb_477 = $_GET["eru_rb_477"];
	getSqlInsertEru($encuestado,$eru_rb_477);
	$eru_rb_478 = $_GET["eru_rb_478"];
	getSqlInsertEru($encuestado,$eru_rb_478);
	$eru_rb_479 = $_GET["eru_rb_479"];
	getSqlInsertEru($encuestado,$eru_rb_479);
	$eru_rb_480 = $_GET["eru_rb_480"];
	getSqlInsertEru($encuestado,$eru_rb_480);	
	// Cerrar Conexion
	$sql = "UPDATE encuestado_has_encuesta SET encuestado_has_encuesta_respuesta = '1' WHERE encuestado_id = '".$encuestado."' AND encuesta_id = '".$encuesta."';";
	insert($sql);
	close_connect_with_mysql($conn);
	
	function getSqlInsertSmu($encuestado, $opcion){
		$sql = "INSERT INTO ressmu (ressmu_encuestado_id, ressmu_opsmurb_id) VALUES ('".$encuestado."','".$opcion."');";
		insert($sql);
	}
	
	function getSqlInsertSmr($encuestado, $opciones){
		$tam = count($opciones);
		for($i = 0; $i < $tam; $i++) {
	    	$sql = "INSERT INTO ressmu (ressmu_encuestado_id, ressmu_opsmurb_id) VALUES ('".$encuestado."','".$opciones[$i]."');";
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