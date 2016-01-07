<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$psc_ta_445 = $_GET["psc_ta_445"];
	$id_psc_ta_445 = "psc_ta_445";
	getSqlInsertPsu($encuestado,$id_psc_ta_445,$psc_ta_445);
	$psc_ta_446 = $_GET["psc_ta_446"];
	$id_psc_ta_446 = "psc_ta_446";
	getSqlInsertPsu($encuestado,$id_psc_ta_446,$psc_ta_446);
	$psc_ta_447 = $_GET["psc_ta_447"];
	$id_psc_ta_447 = "psc_ta_447";
	getSqlInsertPsu($encuestado,$id_psc_ta_447,$psc_ta_447);
	$psc_ta_448 = $_GET["psc_ta_448"];
	$id_psc_ta_448 = "psc_ta_448";
	getSqlInsertPsu($encuestado,$id_psc_ta_448,$psc_ta_448);
	$psc_ta_449 = $_GET["psc_ta_449"];
	$id_psc_ta_449 = "psc_ta_449";
	getSqlInsertPsu($encuestado,$id_psc_ta_449,$psc_ta_449);
	$psc_ta_450 = $_GET["psc_ta_450"];
	$id_psc_ta_450 = "psc_ta_450";
	getSqlInsertPsu($encuestado,$id_psc_ta_450,$psc_ta_450);
	$psc_ta_451 = $_GET["psc_ta_451"];
	$id_psc_ta_451 = "psc_ta_451";
	getSqlInsertPsu($encuestado,$id_psc_ta_451,$psc_ta_451);
	$psc_ta_452 = $_GET["psc_ta_452"];
	$id_psc_ta_452 = "psc_ta_452";
	getSqlInsertPsu($encuestado,$id_psc_ta_452,$psc_ta_452);
	$psc_ta_453 = $_GET["psc_ta_453"];
	$id_psc_ta_453 = "psc_ta_453";
	getSqlInsertPsu($encuestado,$id_psc_ta_453,$psc_ta_453);
	$psc_ta_454 = $_GET["psc_ta_454"];
	$id_psc_ta_454 = "psc_ta_454";
	getSqlInsertPsu($encuestado,$id_psc_ta_454,$psc_ta_454);
	$psc_ta_455 = $_GET["psc_ta_455"];
	$id_psc_ta_455 = "psc_ta_455";
	getSqlInsertPsu($encuestado,$id_psc_ta_455,$psc_ta_455);
	$psc_ta_456 = $_GET["psc_ta_456"];
	$id_psc_ta_456 = "psc_ta_456";
	getSqlInsertPsu($encuestado,$id_psc_ta_456,$psc_ta_456);	
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