<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("mysql.hostinger.es","u391829043_admin","Qwer1234$","u391829043_encue");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$mmr_rb_505_1 = $_GET["mmr_rb_505_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_505_1);
	$mmr_rb_505_2 = $_GET["mmr_rb_505_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_505_2);
	$mmr_rb_505_3 = $_GET["mmr_rb_505_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_505_3);
	$mmr_rb_505_4 = $_GET["mmr_rb_505_4"];
	getSqlInsertMmr ($encuestado, $mmr_rb_505_4);
	$mmr_rb_505_5 = $_GET["mmr_rb_505_5"];
	getSqlInsertMmr ($encuestado, $mmr_rb_505_5);
	$mmr_rb_506_1 = $_GET["mmr_rb_506_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_506_1);
	$mmr_rb_506_2 = $_GET["mmr_rb_506_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_506_2);
	$mmr_rb_506_3 = $_GET["mmr_rb_506_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_506_3);
	$mmr_rb_506_4 = $_GET["mmr_rb_506_4"];
	getSqlInsertMmr ($encuestado, $mmr_rb_506_4);
	$mmr_rb_506_5 = $_GET["mmr_rb_506_5"];
	getSqlInsertMmr ($encuestado, $mmr_rb_506_5);
	$mmr_rb_507_1 = $_GET["mmr_rb_507_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_507_1);
	$mmr_rb_507_2 = $_GET["mmr_rb_507_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_507_2);
	$mmr_rb_507_3 = $_GET["mmr_rb_507_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_507_3);
	$mmr_rb_508_1 = $_GET["mmr_rb_508_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_508_1);
	$mmr_rb_508_2 = $_GET["mmr_rb_508_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_508_2);
	$mmr_rb_508_3 = $_GET["mmr_rb_508_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_508_3);
	$mmr_rb_508_4 = $_GET["mmr_rb_508_4"];
	getSqlInsertMmr ($encuestado, $mmr_rb_508_4);
	$mmr_rb_509_1 = $_GET["mmr_rb_509_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_509_1);
	$mmr_rb_509_2 = $_GET["mmr_rb_509_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_509_2);
	$mmr_rb_509_3 = $_GET["mmr_rb_509_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_509_3);
	$mmr_rb_509_4 = $_GET["mmr_rb_509_4"];
	getSqlInsertMmr ($encuestado, $mmr_rb_509_4);
	$mmr_rb_509_5 = $_GET["mmr_rb_509_5"];
	getSqlInsertMmr ($encuestado, $mmr_rb_509_5);
	$mmr_rb_509_6 = $_GET["mmr_rb_509_6"];
	getSqlInsertMmr ($encuestado, $mmr_rb_509_6);
	$mmr_rb_509_7 = $_GET["mmr_rb_509_7"];
	getSqlInsertMmr ($encuestado, $mmr_rb_509_7);	
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