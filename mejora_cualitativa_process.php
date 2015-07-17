<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$psc_ta_481 = $_GET["psc_ta_481"];
	$id_psc_ta_481 = "psc_ta_481";
	getSqlInsertPsu($encuestado,$id_psc_ta_481,$psc_ta_481);
	$psc_ta_482 = $_GET["psc_ta_482"];
	$id_psc_ta_482 = "psc_ta_482";
	getSqlInsertPsu($encuestado,$id_psc_ta_482,$psc_ta_482);
	$psc_ta_483 = $_GET["psc_ta_483"];
	$id_psc_ta_483 = "psc_ta_483";
	getSqlInsertPsu($encuestado,$id_psc_ta_483,$psc_ta_483);
	$psc_ta_484 = $_GET["psc_ta_484"];
	$id_psc_ta_484 = "psc_ta_484";
	getSqlInsertPsu($encuestado,$id_psc_ta_484,$psc_ta_484);
	$psc_ta_485 = $_GET["psc_ta_485"];
	$id_psc_ta_485 = "psc_ta_485";
	getSqlInsertPsu($encuestado,$id_psc_ta_485,$psc_ta_485);
	$psc_ta_486 = $_GET["psc_ta_486"];
	$id_psc_ta_486 = "psc_ta_486";
	getSqlInsertPsu($encuestado,$id_psc_ta_486,$psc_ta_486);
	$psc_ta_487 = $_GET["psc_ta_487"];
	$id_psc_ta_487 = "psc_ta_487";
	getSqlInsertPsu($encuestado,$id_psc_ta_487,$psc_ta_487);
	$psc_ta_488 = $_GET["psc_ta_488"];
	$id_psc_ta_488 = "psc_ta_488";
	getSqlInsertPsu($encuestado,$id_psc_ta_488,$psc_ta_488);
	$psc_ta_489 = $_GET["psc_ta_489"];
	$id_psc_ta_489 = "psc_ta_489";
	getSqlInsertPsu($encuestado,$id_psc_ta_489,$psc_ta_489);
	$psc_ta_490 = $_GET["psc_ta_490"];
	$id_psc_ta_490 = "psc_ta_490";
	getSqlInsertPsu($encuestado,$id_psc_ta_490,$psc_ta_490);
	$psc_ta_491 = $_GET["psc_ta_491"];
	$id_psc_ta_491 = "psc_ta_491";
	getSqlInsertPsu($encuestado,$id_psc_ta_491,$psc_ta_491);
	$psc_ta_492 = $_GET["psc_ta_492"];
	$id_psc_ta_492 = "psc_ta_492";
	getSqlInsertPsu($encuestado,$id_psc_ta_492,$psc_ta_492);
	$psc_ta_493 = $_GET["psc_ta_493"];
	$id_psc_ta_493 = "psc_ta_493";
	getSqlInsertPsu($encuestado,$id_psc_ta_493,$psc_ta_493);
	$psc_ta_494 = $_GET["psc_ta_494"];
	$id_psc_ta_494 = "psc_ta_494";
	getSqlInsertPsu($encuestado,$id_psc_ta_494,$psc_ta_494);
	$psc_ta_495 = $_GET["psc_ta_495"];
	$id_psc_ta_495 = "psc_ta_495";
	getSqlInsertPsu($encuestado,$id_psc_ta_495,$psc_ta_495);
	$psc_ta_496 = $_GET["psc_ta_496"];
	$id_psc_ta_496 = "psc_ta_496";
	getSqlInsertPsu($encuestado,$id_psc_ta_496,$psc_ta_496);
	$psc_ta_497 = $_GET["psc_ta_497"];
	$id_psc_ta_497 = "psc_ta_497";
	getSqlInsertPsu($encuestado,$id_psc_ta_497,$psc_ta_497);
	$psc_ta_498 = $_GET["psc_ta_498"];
	$id_psc_ta_498 = "psc_ta_498";
	getSqlInsertPsu($encuestado,$id_psc_ta_498,$psc_ta_498);
	$psc_ta_499 = $_GET["psc_ta_499"];
	$id_psc_ta_499 = "psc_ta_499";
	getSqlInsertPsu($encuestado,$id_psc_ta_499,$psc_ta_499);
	$psc_ta_500 = $_GET["psc_ta_500"];
	$id_psc_ta_500 = "psc_ta_500";
	getSqlInsertPsu($encuestado,$id_psc_ta_500,$psc_ta_500);
	$psc_ta_501 = $_GET["psc_ta_501"];
	$id_psc_ta_501 = "psc_ta_501";
	getSqlInsertPsu($encuestado,$id_psc_ta_501,$psc_ta_501);
	$psc_ta_502 = $_GET["psc_ta_502"];
	$id_psc_ta_502 = "psc_ta_502";
	getSqlInsertPsu($encuestado,$id_psc_ta_502,$psc_ta_502);
	$psc_ta_503 = $_GET["psc_ta_503"];
	$id_psc_ta_503 = "psc_ta_503";
	getSqlInsertPsu($encuestado,$id_psc_ta_503,$psc_ta_503);
	$psc_ta_504 = $_GET["psc_ta_504"];
	$id_psc_ta_504 = "psc_ta_504";
	getSqlInsertPsu($encuestado,$id_psc_ta_504,$psc_ta_504);	
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