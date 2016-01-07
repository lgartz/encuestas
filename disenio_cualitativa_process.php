<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$psc_ta_63 = $_GET["psc_ta_63"];
	$id_psc_ta_63 = "psc_ta_63";
	getSqlInsertPsu($encuestado,$id_psc_ta_63,$psc_ta_63);
	$psc_ta_64 = $_GET["psc_ta_64"];
	$id_psc_ta_64 = "psc_ta_64";
	getSqlInsertPsu($encuestado,$id_psc_ta_64,$psc_ta_64);
	$psc_ta_65 = $_GET["psc_ta_65"];
	$id_psc_ta_65 = "psc_ta_65";
	getSqlInsertPsu($encuestado,$id_psc_ta_65,$psc_ta_65);
	$psc_ta_66 = $_GET["psc_ta_66"];
	$id_psc_ta_66 = "psc_ta_66";
	getSqlInsertPsu($encuestado,$id_psc_ta_66,$psc_ta_66);
	$psc_ta_67 = $_GET["psc_ta_67"];
	$id_psc_ta_67 = "psc_ta_67";
	getSqlInsertPsu($encuestado,$id_psc_ta_67,$psc_ta_67);
	$psc_ta_68 = $_GET["psc_ta_68"];
	$id_psc_ta_68 = "psc_ta_68";
	getSqlInsertPsu($encuestado,$id_psc_ta_68,$psc_ta_68);
	$psc_ta_69 = $_GET["psc_ta_69"];
	$id_psc_ta_69 = "psc_ta_69";
	getSqlInsertPsu($encuestado,$id_psc_ta_69,$psc_ta_69);
	$psc_ta_70 = $_GET["psc_ta_70"];
	$id_psc_ta_70 = "psc_ta_70";
	getSqlInsertPsu($encuestado,$id_psc_ta_70,$psc_ta_70);
	$psc_ta_71 = $_GET["psc_ta_71"];
	$id_psc_ta_71 = "psc_ta_71";
	getSqlInsertPsu($encuestado,$id_psc_ta_71,$psc_ta_71);
	$psc_ta_72 = $_GET["psc_ta_72"];
	$id_psc_ta_72 = "psc_ta_72";
	getSqlInsertPsu($encuestado,$id_psc_ta_72,$psc_ta_72);
	$psc_ta_73 = $_GET["psc_ta_73"];
	$id_psc_ta_73 = "psc_ta_73";
	getSqlInsertPsu($encuestado,$id_psc_ta_73,$psc_ta_73);
	$psc_ta_74 = $_GET["psc_ta_74"];
	$id_psc_ta_74 = "psc_ta_74";
	getSqlInsertPsu($encuestado,$id_psc_ta_74,$psc_ta_74);
	$psc_ta_75 = $_GET["psc_ta_75"];
	$id_psc_ta_75 = "psc_ta_75";
	getSqlInsertPsu($encuestado,$id_psc_ta_75,$psc_ta_75);
	$psc_ta_76 = $_GET["psc_ta_76"];
	$id_psc_ta_76 = "psc_ta_76";
	getSqlInsertPsu($encuestado,$id_psc_ta_76,$psc_ta_76);
	$psc_ta_77 = $_GET["psc_ta_77"];
	$id_psc_ta_77 = "psc_ta_77";
	getSqlInsertPsu($encuestado,$id_psc_ta_77,$psc_ta_77);
	$psc_ta_78 = $_GET["psc_ta_78"];
	$id_psc_ta_78 = "psc_ta_78";
	getSqlInsertPsu($encuestado,$id_psc_ta_78,$psc_ta_78);	
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