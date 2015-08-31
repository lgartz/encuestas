<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("mysql.hostinger.es","u391829043_admin","Qwer1234$","u391829043_encue");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$psu_t_641 = $_GET["psu_t_641"];
	$id_psu_t_641 = "psu_t_641";
	getSqlInsertPsu($encuestado,$id_psu_t_641,$psu_t_641);
	$psu_t_642 = $_GET["psu_t_642"];
	$id_psu_t_642 = "psu_t_642";
	getSqlInsertPsu($encuestado,$id_psu_t_642,$psu_t_642);
	$psu_t_643 = $_GET["psu_t_643"];
	$id_psu_t_643 = "psu_t_643";
	getSqlInsertPsu($encuestado,$id_psu_t_643,$psu_t_643);
	$psu_t_644 = $_GET["psu_t_644"];
	$id_psu_t_644 = "psu_t_644";
	getSqlInsertPsu($encuestado,$id_psu_t_644,$psu_t_644);
	$psu_t_645 = $_GET["psu_t_645"];
	$id_psu_t_645 = "psu_t_645";
	getSqlInsertPsu($encuestado,$id_psu_t_645,$psu_t_645);
	$psu_t_646 = $_GET["psu_t_646"];
	$id_psu_t_646 = "psu_t_646";
	getSqlInsertPsu($encuestado,$id_psu_t_646,$psu_t_646);
	$psu_t_647 = $_GET["psu_t_647"];
	$id_psu_t_647 = "psu_t_647";
	getSqlInsertPsu($encuestado,$id_psu_t_647,$psu_t_647);
	$psu_t_648 = $_GET["psu_t_648"];
	$id_psu_t_648 = "psu_t_648";
	getSqlInsertPsu($encuestado,$id_psu_t_648,$psu_t_648);
	$psu_t_649 = $_GET["psu_t_649"];
	$id_psu_t_649 = "psu_t_649";
	getSqlInsertPsu($encuestado,$id_psu_t_649,$psu_t_649);
	$psu_t_652 = $_GET["psu_t_652"];
	$id_psu_t_652 = "psu_t_652";
	getSqlInsertPsu($encuestado,$id_psu_t_652,$psu_t_652);
	$psu_t_653 = $_GET["psu_t_653"];
	$id_psu_t_653 = "psu_t_653";
	getSqlInsertPsu($encuestado,$id_psu_t_653,$psu_t_653);
	$psu_t_654 = $_GET["psu_t_654"];
	$id_psu_t_654 = "psu_t_654";
	getSqlInsertPsu($encuestado,$id_psu_t_654,$psu_t_654);
	$psu_t_654 = $_GET["psu_t_654"];
	$id_psu_t_654 = "psu_t_654";
	getSqlInsertPsu($encuestado,$id_psu_t_654,$psu_t_654);
	$psu_t_655 = $_GET["psu_t_655"];
	$id_psu_t_655 = "psu_t_655";
	getSqlInsertPsu($encuestado,$id_psu_t_655,$psu_t_655);
	$psc_ta_650 = $_GET["psc_ta_650"];
	$id_psc_ta_650 = "psc_ta_650";
	getSqlInsertPsu($encuestado,$id_psc_ta_650,$psc_ta_650);
	$psc_ta_651 = $_GET["psc_ta_651"];
	$id_psc_ta_651 = "psc_ta_651";
	getSqlInsertPsu($encuestado,$id_psc_ta_651,$psc_ta_651);	
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