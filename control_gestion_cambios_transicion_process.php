<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$psu_t_584 = $_GET["psu_t_584"];
	$id_psu_t_584 = "psu_t_584";
	getSqlInsertPsu($encuestado,$id_psu_t_584,$psu_t_584);
	$psu_t_585 = $_GET["psu_t_585"];
	$id_psu_t_585 = "psu_t_585";
	getSqlInsertPsu($encuestado,$id_psu_t_585,$psu_t_585);
	$psu_t_586 = $_GET["psu_t_586"];
	$id_psu_t_586 = "psu_t_586";
	getSqlInsertPsu($encuestado,$id_psu_t_586,$psu_t_586);
	$psu_t_587 = $_GET["psu_t_587"];
	$id_psu_t_587 = "psu_t_587";
	getSqlInsertPsu($encuestado,$id_psu_t_587,$psu_t_587);
	$psu_t_588 = $_GET["psu_t_588"];
	$id_psu_t_588 = "psu_t_588";
	getSqlInsertPsu($encuestado,$id_psu_t_588,$psu_t_588);
	$psu_t_589 = $_GET["psu_t_589"];
	$id_psu_t_589 = "psu_t_589";
	getSqlInsertPsu($encuestado,$id_psu_t_589,$psu_t_589);
	$psu_t_590 = $_GET["psu_t_590"];
	$id_psu_t_590 = "psu_t_590";
	getSqlInsertPsu($encuestado,$id_psu_t_590,$psu_t_590);
	$psu_t_591 = $_GET["psu_t_591"];
	$id_psu_t_591 = "psu_t_591";
	getSqlInsertPsu($encuestado,$id_psu_t_591,$psu_t_591);
	$psu_t_592 = $_GET["psu_t_592"];
	$id_psu_t_592 = "psu_t_592";
	getSqlInsertPsu($encuestado,$id_psu_t_592,$psu_t_592);
	$psu_t_593 = $_GET["psu_t_593"];
	$id_psu_t_593 = "psu_t_593";
	getSqlInsertPsu($encuestado,$id_psu_t_593,$psu_t_593);
	$psu_t_594 = $_GET["psu_t_594"];
	$id_psu_t_594 = "psu_t_594";
	getSqlInsertPsu($encuestado,$id_psu_t_594,$psu_t_594);
	$psu_t_595 = $_GET["psu_t_595"];
	$id_psu_t_595 = "psu_t_595";
	getSqlInsertPsu($encuestado,$id_psu_t_595,$psu_t_595);	
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