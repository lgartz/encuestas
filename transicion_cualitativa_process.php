<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("mysql.hostinger.es","u391829043_admin","Qwer1234$","u391829043_encue");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$psc_ta_107 = $_GET["psc_ta_107"];
	$id_psc_ta_107 = "psc_ta_107";
	getSqlInsertPsu($encuestado,$id_psc_ta_107,$psc_ta_107);
	$psc_ta_108 = $_GET["psc_ta_108"];
	$id_psc_ta_108 = "psc_ta_108";
	getSqlInsertPsu($encuestado,$id_psc_ta_108,$psc_ta_108);
	$psc_ta_109 = $_GET["psc_ta_109"];
	$id_psc_ta_109 = "psc_ta_109";
	getSqlInsertPsu($encuestado,$id_psc_ta_109,$psc_ta_109);
	$psc_ta_110 = $_GET["psc_ta_110"];
	$id_psc_ta_110 = "psc_ta_110";
	getSqlInsertPsu($encuestado,$id_psc_ta_110,$psc_ta_110);
	$psc_ta_111 = $_GET["psc_ta_111"];
	$id_psc_ta_111 = "psc_ta_111";
	getSqlInsertPsu($encuestado,$id_psc_ta_111,$psc_ta_111);
	$psc_ta_112 = $_GET["psc_ta_112"];
	$id_psc_ta_112 = "psc_ta_112";
	getSqlInsertPsu($encuestado,$id_psc_ta_112,$psc_ta_112);
	$psc_ta_113 = $_GET["psc_ta_113"];
	$id_psc_ta_113 = "psc_ta_113";
	getSqlInsertPsu($encuestado,$id_psc_ta_113,$psc_ta_113);
	$psc_ta_114 = $_GET["psc_ta_114"];
	$id_psc_ta_114 = "psc_ta_114";
	getSqlInsertPsu($encuestado,$id_psc_ta_114,$psc_ta_114);
	$psc_ta_115 = $_GET["psc_ta_115"];
	$id_psc_ta_115 = "psc_ta_115";
	getSqlInsertPsu($encuestado,$id_psc_ta_115,$psc_ta_115);
	$psc_ta_116 = $_GET["psc_ta_116"];
	$id_psc_ta_116 = "psc_ta_116";
	getSqlInsertPsu($encuestado,$id_psc_ta_116,$psc_ta_116);
	$psc_ta_117 = $_GET["psc_ta_117"];
	$id_psc_ta_117 = "psc_ta_117";
	getSqlInsertPsu($encuestado,$id_psc_ta_117,$psc_ta_117);
	$psc_ta_118 = $_GET["psc_ta_118"];
	$id_psc_ta_118 = "psc_ta_118";
	getSqlInsertPsu($encuestado,$id_psc_ta_118,$psc_ta_118);
	$psc_ta_119 = $_GET["psc_ta_119"];
	$id_psc_ta_119 = "psc_ta_119";
	getSqlInsertPsu($encuestado,$id_psc_ta_119,$psc_ta_119);
	$psc_ta_120 = $_GET["psc_ta_120"];
	$id_psc_ta_120 = "psc_ta_120";
	getSqlInsertPsu($encuestado,$id_psc_ta_120,$psc_ta_120);
	$psc_ta_121 = $_GET["psc_ta_121"];
	$id_psc_ta_121 = "psc_ta_121";
	getSqlInsertPsu($encuestado,$id_psc_ta_121,$psc_ta_121);
	$psc_ta_122 = $_GET["psc_ta_122"];
	$id_psc_ta_122 = "psc_ta_122";
	getSqlInsertPsu($encuestado,$id_psc_ta_122,$psc_ta_122);
	$psc_ta_123 = $_GET["psc_ta_123"];
	$id_psc_ta_123 = "psc_ta_123";
	getSqlInsertPsu($encuestado,$id_psc_ta_123,$psc_ta_123);
	$psc_ta_124 = $_GET["psc_ta_124"];
	$id_psc_ta_124 = "psc_ta_124";
	getSqlInsertPsu($encuestado,$id_psc_ta_124,$psc_ta_124);
	$psc_ta_125 = $_GET["psc_ta_125"];
	$id_psc_ta_125 = "psc_ta_125";
	getSqlInsertPsu($encuestado,$id_psc_ta_125,$psc_ta_125);
	$psc_ta_126 = $_GET["psc_ta_126"];
	$id_psc_ta_126 = "psc_ta_126";
	getSqlInsertPsu($encuestado,$id_psc_ta_126,$psc_ta_126);
	$psc_ta_127 = $_GET["psc_ta_127"];
	$id_psc_ta_127 = "psc_ta_127";
	getSqlInsertPsu($encuestado,$id_psc_ta_127,$psc_ta_127);
	$psc_ta_128 = $_GET["psc_ta_128"];
	$id_psc_ta_128 = "psc_ta_128";
	getSqlInsertPsu($encuestado,$id_psc_ta_128,$psc_ta_128);
	$psc_ta_129 = $_GET["psc_ta_129"];
	$id_psc_ta_129 = "psc_ta_129";
	getSqlInsertPsu($encuestado,$id_psc_ta_129,$psc_ta_129);
	$psc_ta_130 = $_GET["psc_ta_130"];
	$id_psc_ta_130 = "psc_ta_130";
	getSqlInsertPsu($encuestado,$id_psc_ta_130,$psc_ta_130);
	$psc_ta_131 = $_GET["psc_ta_131"];
	$id_psc_ta_131 = "psc_ta_131";
	getSqlInsertPsu($encuestado,$id_psc_ta_131,$psc_ta_131);
	$psc_ta_132 = $_GET["psc_ta_132"];
	$id_psc_ta_132 = "psc_ta_132";
	getSqlInsertPsu($encuestado,$id_psc_ta_132,$psc_ta_132);
	$psc_ta_133 = $_GET["psc_ta_133"];
	$id_psc_ta_133 = "psc_ta_133";
	getSqlInsertPsu($encuestado,$id_psc_ta_133,$psc_ta_133);
	$psc_ta_134 = $_GET["psc_ta_134"];
	$id_psc_ta_134 = "psc_ta_134";
	getSqlInsertPsu($encuestado,$id_psc_ta_134,$psc_ta_134);	
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