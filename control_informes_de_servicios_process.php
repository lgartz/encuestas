<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("mysql.hostinger.es","u391829043_admin","Qwer1234$","u391829043_encue");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$psu_t_687 = $_GET["psu_t_687"];
	$id_psu_t_687 = "psu_t_687";
	getSqlInsertPsu($encuestado,$id_psu_t_687,$psu_t_687);
	$psu_t_688 = $_GET["psu_t_688"];
	$id_psu_t_688 = "psu_t_688";
	getSqlInsertPsu($encuestado,$id_psu_t_688,$psu_t_688);
	$psu_t_689 = $_GET["psu_t_689"];
	$id_psu_t_689 = "psu_t_689";
	getSqlInsertPsu($encuestado,$id_psu_t_689,$psu_t_689);
	$psu_t_690 = $_GET["psu_t_690"];
	$id_psu_t_690 = "psu_t_690";
	getSqlInsertPsu($encuestado,$id_psu_t_690,$psu_t_690);
	$psu_t_691 = $_GET["psu_t_691"];
	$id_psu_t_691 = "psu_t_691";
	getSqlInsertPsu($encuestado,$id_psu_t_691,$psu_t_691);
	$psu_t_692 = $_GET["psu_t_692"];
	$id_psu_t_692 = "psu_t_692";
	getSqlInsertPsu($encuestado,$id_psu_t_692,$psu_t_692);
	$psu_t_693 = $_GET["psu_t_693"];
	$id_psu_t_693 = "psu_t_693";
	getSqlInsertPsu($encuestado,$id_psu_t_693,$psu_t_693);
	$psu_t_694 = $_GET["psu_t_694"];
	$id_psu_t_694 = "psu_t_694";
	getSqlInsertPsu($encuestado,$id_psu_t_694,$psu_t_694);
	$psu_t_695 = $_GET["psu_t_695"];
	$id_psu_t_695 = "psu_t_695";
	getSqlInsertPsu($encuestado,$id_psu_t_695,$psu_t_695);
	$psu_t_696 = $_GET["psu_t_696"];
	$id_psu_t_696 = "psu_t_696";
	getSqlInsertPsu($encuestado,$id_psu_t_696,$psu_t_696);
	$psu_t_697 = $_GET["psu_t_697"];
	$id_psu_t_697 = "psu_t_697";
	getSqlInsertPsu($encuestado,$id_psu_t_697,$psu_t_697);	
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