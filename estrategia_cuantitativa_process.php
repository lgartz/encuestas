<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$eru_rb_1 = $_GET["eru_rb_1"];
	getSqlInsertEru($encuestado,$eru_rb_1);
	$eru_rb_2 = $_GET["eru_rb_2"];
	getSqlInsertEru($encuestado,$eru_rb_2);
	$eru_rb_3 = $_GET["eru_rb_3"];
	getSqlInsertEru($encuestado,$eru_rb_3);
	$eru_rb_4 = $_GET["eru_rb_4"];
	getSqlInsertEru($encuestado,$eru_rb_4);
	$eru_rb_5 = $_GET["eru_rb_5"];
	getSqlInsertEru($encuestado,$eru_rb_5);
	$eru_rb_6 = $_GET["eru_rb_6"];
	getSqlInsertEru($encuestado,$eru_rb_6);
	$eru_rb_7 = $_GET["eru_rb_7"];
	getSqlInsertEru($encuestado,$eru_rb_7);
	$eru_rb_8 = $_GET["eru_rb_8"];
	getSqlInsertEru($encuestado,$eru_rb_8);
	$eru_rb_9 = $_GET["eru_rb_9"];
	getSqlInsertEru($encuestado,$eru_rb_9);
	$eru_rb_10 = $_GET["eru_rb_10"];
	getSqlInsertEru($encuestado,$eru_rb_10);
	$eru_rb_11 = $_GET["eru_rb_11"];
	getSqlInsertEru($encuestado,$eru_rb_11);
	$eru_rb_12 = $_GET["eru_rb_12"];
	getSqlInsertEru($encuestado,$eru_rb_12);
	$eru_rb_13 = $_GET["eru_rb_13"];
	getSqlInsertEru($encuestado,$eru_rb_13);
	$eru_rb_14 = $_GET["eru_rb_14"];
	getSqlInsertEru($encuestado,$eru_rb_14);
	$eru_rb_15 = $_GET["eru_rb_15"];
	getSqlInsertEru($encuestado,$eru_rb_15);
	$eru_rb_16 = $_GET["eru_rb_16"];
	getSqlInsertEru($encuestado,$eru_rb_16);
	$eru_rb_17 = $_GET["eru_rb_17"];
	getSqlInsertEru($encuestado,$eru_rb_17);
	$eru_rb_18 = $_GET["eru_rb_18"];
	getSqlInsertEru($encuestado,$eru_rb_18);
	$eru_rb_19 = $_GET["eru_rb_19"];
	getSqlInsertEru($encuestado,$eru_rb_19);
	$eru_rb_20 = $_GET["eru_rb_20"];
	getSqlInsertEru($encuestado,$eru_rb_20);	
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