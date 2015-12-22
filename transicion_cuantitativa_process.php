<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$eru_rb_79 = $_GET["eru_rb_79"];
	getSqlInsertEru($encuestado,$eru_rb_79);
	$eru_rb_80 = $_GET["eru_rb_80"];
	getSqlInsertEru($encuestado,$eru_rb_80);
	$eru_rb_81 = $_GET["eru_rb_81"];
	getSqlInsertEru($encuestado,$eru_rb_81);
	$eru_rb_82 = $_GET["eru_rb_82"];
	getSqlInsertEru($encuestado,$eru_rb_82);
	$eru_rb_83 = $_GET["eru_rb_83"];
	getSqlInsertEru($encuestado,$eru_rb_83);
	$eru_rb_84 = $_GET["eru_rb_84"];
	getSqlInsertEru($encuestado,$eru_rb_84);
	$eru_rb_85 = $_GET["eru_rb_85"];
	getSqlInsertEru($encuestado,$eru_rb_85);
	$eru_rb_86 = $_GET["eru_rb_86"];
	getSqlInsertEru($encuestado,$eru_rb_86);
	$eru_rb_87 = $_GET["eru_rb_87"];
	getSqlInsertEru($encuestado,$eru_rb_87);
	$eru_rb_88 = $_GET["eru_rb_88"];
	getSqlInsertEru($encuestado,$eru_rb_88);
	$eru_rb_89 = $_GET["eru_rb_89"];
	getSqlInsertEru($encuestado,$eru_rb_89);
	$eru_rb_90 = $_GET["eru_rb_90"];
	getSqlInsertEru($encuestado,$eru_rb_90);
	$eru_rb_91 = $_GET["eru_rb_91"];
	getSqlInsertEru($encuestado,$eru_rb_91);
	$eru_rb_92 = $_GET["eru_rb_92"];
	getSqlInsertEru($encuestado,$eru_rb_92);
	$eru_rb_93 = $_GET["eru_rb_93"];
	getSqlInsertEru($encuestado,$eru_rb_93);
	$eru_rb_94 = $_GET["eru_rb_94"];
	getSqlInsertEru($encuestado,$eru_rb_94);
	$eru_rb_95 = $_GET["eru_rb_95"];
	getSqlInsertEru($encuestado,$eru_rb_95);
	$eru_rb_96 = $_GET["eru_rb_96"];
	getSqlInsertEru($encuestado,$eru_rb_96);
	$eru_rb_97 = $_GET["eru_rb_97"];
	getSqlInsertEru($encuestado,$eru_rb_97);
	$eru_rb_98 = $_GET["eru_rb_98"];
	getSqlInsertEru($encuestado,$eru_rb_98);
	$eru_rb_99 = $_GET["eru_rb_99"];
	getSqlInsertEru($encuestado,$eru_rb_99);
	$eru_rb_100 = $_GET["eru_rb_100"];
	getSqlInsertEru($encuestado,$eru_rb_100);
	$eru_rb_101 = $_GET["eru_rb_101"];
	getSqlInsertEru($encuestado,$eru_rb_101);
	$eru_rb_102 = $_GET["eru_rb_102"];
	getSqlInsertEru($encuestado,$eru_rb_102);
	$eru_rb_103 = $_GET["eru_rb_103"];
	getSqlInsertEru($encuestado,$eru_rb_103);
	$eru_rb_104 = $_GET["eru_rb_104"];
	getSqlInsertEru($encuestado,$eru_rb_104);
	$eru_rb_105 = $_GET["eru_rb_105"];
	getSqlInsertEru($encuestado,$eru_rb_105);
	$eru_rb_106 = $_GET["eru_rb_106"];
	getSqlInsertEru($encuestado,$eru_rb_106);	
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