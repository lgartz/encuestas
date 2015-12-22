<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("mysql.hostinger.es","u391829043_admin","Qwer1234$","u391829043_encue");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$mmr_rb_422_1 = $_GET["mmr_rb_422_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_422_1);
	$mmr_rb_422_2 = $_GET["mmr_rb_422_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_422_2);
	$mmr_rb_422_3 = $_GET["mmr_rb_422_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_422_3);
	$mmr_rb_422_4 = $_GET["mmr_rb_422_4"];
	getSqlInsertMmr ($encuestado, $mmr_rb_422_4);
	$mmr_rb_422_5 = $_GET["mmr_rb_422_5"];
	getSqlInsertMmr ($encuestado, $mmr_rb_422_5);
	$mmr_rb_422_6 = $_GET["mmr_rb_422_6"];
	getSqlInsertMmr ($encuestado, $mmr_rb_422_6);
	$mmr_rb_422_7 = $_GET["mmr_rb_422_7"];
	getSqlInsertMmr ($encuestado, $mmr_rb_422_7);
	$mmr_rb_422_8 = $_GET["mmr_rb_422_8"];
	getSqlInsertMmr ($encuestado, $mmr_rb_422_8);
	$mmr_rb_423_1 = $_GET["mmr_rb_423_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_423_1);
	$mmr_rb_423_2 = $_GET["mmr_rb_423_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_423_2);
	$mmr_rb_423_3 = $_GET["mmr_rb_423_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_423_3);
	$mmr_rb_423_4 = $_GET["mmr_rb_423_4"];
	getSqlInsertMmr ($encuestado, $mmr_rb_423_4);
	$mmr_rb_423_5 = $_GET["mmr_rb_423_5"];
	getSqlInsertMmr ($encuestado, $mmr_rb_423_5);
	$mmr_rb_423_6 = $_GET["mmr_rb_423_6"];
	getSqlInsertMmr ($encuestado, $mmr_rb_423_6);
	$mmr_rb_424_1 = $_GET["mmr_rb_424_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_424_1);
	$mmr_rb_424_2 = $_GET["mmr_rb_424_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_424_2);
	$mmr_rb_424_3 = $_GET["mmr_rb_424_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_424_3);
	$mmr_rb_424_4 = $_GET["mmr_rb_424_4"];
	getSqlInsertMmr ($encuestado, $mmr_rb_424_4);
	$mmr_rb_424_5 = $_GET["mmr_rb_424_5"];
	getSqlInsertMmr ($encuestado, $mmr_rb_424_5);
	$mmr_rb_425_1 = $_GET["mmr_rb_425_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_425_1);
	$mmr_rb_425_2 = $_GET["mmr_rb_425_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_425_2);
	$mmr_rb_425_3 = $_GET["mmr_rb_425_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_425_3);
	$mmr_rb_425_4 = $_GET["mmr_rb_425_4"];
	getSqlInsertMmr ($encuestado, $mmr_rb_425_4);
	$mmr_rb_425_5 = $_GET["mmr_rb_425_5"];
	getSqlInsertMmr ($encuestado, $mmr_rb_425_5);
	$mmr_rb_425_6 = $_GET["mmr_rb_425_6"];
	getSqlInsertMmr ($encuestado, $mmr_rb_425_6);
	$mmr_rb_425_7 = $_GET["mmr_rb_425_7"];
	getSqlInsertMmr ($encuestado, $mmr_rb_425_7);
	$mmr_rb_425_8 = $_GET["mmr_rb_425_8"];
	getSqlInsertMmr ($encuestado, $mmr_rb_425_8);
	$mmr_rb_425_9 = $_GET["mmr_rb_425_9"];
	getSqlInsertMmr ($encuestado, $mmr_rb_425_9);
	$mmr_rb_425_10 = $_GET["mmr_rb_425_10"];
	getSqlInsertMmr ($encuestado, $mmr_rb_425_10);
	$mmr_rb_426_1 = $_GET["mmr_rb_426_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_426_1);
	$mmr_rb_426_2 = $_GET["mmr_rb_426_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_426_2);
	$mmr_rb_427_1 = $_GET["mmr_rb_427_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_427_1);
	$mmr_rb_427_2 = $_GET["mmr_rb_427_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_427_2);
	$mmr_rb_427_3 = $_GET["mmr_rb_427_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_427_3);
	$mmr_rb_428_1 = $_GET["mmr_rb_428_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_428_1);
	$mmr_rb_428_2 = $_GET["mmr_rb_428_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_428_2);
	$mmr_rb_428_3 = $_GET["mmr_rb_428_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_428_3);
	$mmr_rb_428_4 = $_GET["mmr_rb_428_4"];
	getSqlInsertMmr ($encuestado, $mmr_rb_428_4);
	$mmr_rb_429_1 = $_GET["mmr_rb_429_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_429_1);
	$mmr_rb_429_2 = $_GET["mmr_rb_429_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_429_2);
	$mmr_rb_430_1 = $_GET["mmr_rb_430_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_430_1);
	$mmr_rb_431_1 = $_GET["mmr_rb_431_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_431_1);
	$mmr_rb_431_2 = $_GET["mmr_rb_431_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_431_2);
	$mmr_rb_432_1 = $_GET["mmr_rb_432_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_432_1);
	$mmr_rb_432_2 = $_GET["mmr_rb_432_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_432_2);
	$mmr_rb_432_3 = $_GET["mmr_rb_432_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_432_3);	
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