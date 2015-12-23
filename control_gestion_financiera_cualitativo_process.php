<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$psu_t_510 = $_GET["psu_t_510"];
	$id_psu_t_510 = "psu_t_510";
	getSqlInsertPsu($encuestado,$id_psu_t_510,$psu_t_510);
	$psu_t_511 = $_GET["psu_t_511"];
	$id_psu_t_511 = "psu_t_511";
	getSqlInsertPsu($encuestado,$id_psu_t_511,$psu_t_511);
	$psu_t_512 = $_GET["psu_t_512"];
	$id_psu_t_512 = "psu_t_512";
	getSqlInsertPsu($encuestado,$id_psu_t_512,$psu_t_512);
	$psu_t_513 = $_GET["psu_t_513"];
	$id_psu_t_513 = "psu_t_513";
	getSqlInsertPsu($encuestado,$id_psu_t_513,$psu_t_513);
	$psu_t_514 = $_GET["psu_t_514"];
	$id_psu_t_514 = "psu_t_514";
	getSqlInsertPsu($encuestado,$id_psu_t_514,$psu_t_514);
	$psu_t_515 = $_GET["psu_t_515"];
	$id_psu_t_515 = "psu_t_515";
	getSqlInsertPsu($encuestado,$id_psu_t_515,$psu_t_515);
	$psu_t_516 = $_GET["psu_t_516"];
	$id_psu_t_516 = "psu_t_516";
	getSqlInsertPsu($encuestado,$id_psu_t_516,$psu_t_516);
	$psu_t_517 = $_GET["psu_t_517"];
	$id_psu_t_517 = "psu_t_517";
	getSqlInsertPsu($encuestado,$id_psu_t_517,$psu_t_517);
	$psu_t_518 = $_GET["psu_t_518"];
	$id_psu_t_518 = "psu_t_518";
	getSqlInsertPsu($encuestado,$id_psu_t_518,$psu_t_518);
	$psu_t_519 = $_GET["psu_t_519"];
	$id_psu_t_519 = "psu_t_519";
	getSqlInsertPsu($encuestado,$id_psu_t_519,$psu_t_519);
	$psu_t_520 = $_GET["psu_t_520"];
	$id_psu_t_520 = "psu_t_520";
	getSqlInsertPsu($encuestado,$id_psu_t_520,$psu_t_520);
	$psu_t_521 = $_GET["psu_t_521"];
	$id_psu_t_521 = "psu_t_521";
	getSqlInsertPsu($encuestado,$id_psu_t_521,$psu_t_521);
	$psu_t_522 = $_GET["psu_t_522"];
	$id_psu_t_522 = "psu_t_522";
	getSqlInsertPsu($encuestado,$id_psu_t_522,$psu_t_522);
	$psu_t_523 = $_GET["psu_t_523"];
	$id_psu_t_523 = "psu_t_523";
	getSqlInsertPsu($encuestado,$id_psu_t_523,$psu_t_523);
	$psu_t_524 = $_GET["psu_t_524"];
	$id_psu_t_524 = "psu_t_524";
	getSqlInsertPsu($encuestado,$id_psu_t_524,$psu_t_524);	
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