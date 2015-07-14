<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$psc_ta_21 = $_GET["psc_ta_21"];
	$id_psc_ta_21 = "psc_ta_21";
	getSqlInsertPsu($encuestado,$id_psc_ta_21,$psc_ta_21);
	$psc_ta_22 = $_GET["psc_ta_22"];
	$id_psc_ta_22 = "psc_ta_22";
	getSqlInsertPsu($encuestado,$id_psc_ta_22,$psc_ta_22);
	$psc_ta_23 = $_GET["psc_ta_23"];
	$id_psc_ta_23 = "psc_ta_23";
	getSqlInsertPsu($encuestado,$id_psc_ta_23,$psc_ta_23);
	$psc_ta_24 = $_GET["psc_ta_24"];
	$id_psc_ta_24 = "psc_ta_24";
	getSqlInsertPsu($encuestado,$id_psc_ta_24,$psc_ta_24);
	$psc_ta_25 = $_GET["psc_ta_25"];
	$id_psc_ta_25 = "psc_ta_25";
	getSqlInsertPsu($encuestado,$id_psc_ta_25,$psc_ta_25);
	$psc_ta_26 = $_GET["psc_ta_26"];
	$id_psc_ta_26 = "psc_ta_26";
	getSqlInsertPsu($encuestado,$id_psc_ta_26,$psc_ta_26);
	$psc_ta_27 = $_GET["psc_ta_27"];
	$id_psc_ta_27 = "psc_ta_27";
	getSqlInsertPsu($encuestado,$id_psc_ta_27,$psc_ta_27);
	$psc_ta_28 = $_GET["psc_ta_28"];
	$id_psc_ta_28 = "psc_ta_28";
	getSqlInsertPsu($encuestado,$id_psc_ta_28,$psc_ta_28);
	$psc_ta_29 = $_GET["psc_ta_29"];
	$id_psc_ta_29 = "psc_ta_29";
	getSqlInsertPsu($encuestado,$id_psc_ta_29,$psc_ta_29);
	$psc_ta_30 = $_GET["psc_ta_30"];
	$id_psc_ta_30 = "psc_ta_30";
	getSqlInsertPsu($encuestado,$id_psc_ta_30,$psc_ta_30);
	$psc_ta_31 = $_GET["psc_ta_31"];
	$id_psc_ta_31 = "psc_ta_31";
	getSqlInsertPsu($encuestado,$id_psc_ta_31,$psc_ta_31);
	$psc_ta_32 = $_GET["psc_ta_32"];
	$id_psc_ta_32 = "psc_ta_32";
	getSqlInsertPsu($encuestado,$id_psc_ta_32,$psc_ta_32);
	$psc_ta_33 = $_GET["psc_ta_33"];
	$id_psc_ta_33 = "psc_ta_33";
	getSqlInsertPsu($encuestado,$id_psc_ta_33,$psc_ta_33);
	$psc_ta_34 = $_GET["psc_ta_34"];
	$id_psc_ta_34 = "psc_ta_34";
	getSqlInsertPsu($encuestado,$id_psc_ta_34,$psc_ta_34);
	$psc_ta_35 = $_GET["psc_ta_35"];
	$id_psc_ta_35 = "psc_ta_35";
	getSqlInsertPsu($encuestado,$id_psc_ta_35,$psc_ta_35);
	$psc_ta_36 = $_GET["psc_ta_36"];
	$id_psc_ta_36 = "psc_ta_36";
	getSqlInsertPsu($encuestado,$id_psc_ta_36,$psc_ta_36);
	$psc_ta_37 = $_GET["psc_ta_37"];
	$id_psc_ta_37 = "psc_ta_37";
	getSqlInsertPsu($encuestado,$id_psc_ta_37,$psc_ta_37);
	$psc_ta_38 = $_GET["psc_ta_38"];
	$id_psc_ta_38 = "psc_ta_38";
	getSqlInsertPsu($encuestado,$id_psc_ta_38,$psc_ta_38);
	$psc_ta_39 = $_GET["psc_ta_39"];
	$id_psc_ta_39 = "psc_ta_39";
	getSqlInsertPsu($encuestado,$id_psc_ta_39,$psc_ta_39);
	$psc_ta_40 = $_GET["psc_ta_40"];
	$id_psc_ta_40 = "psc_ta_40";
	getSqlInsertPsu($encuestado,$id_psc_ta_40,$psc_ta_40);	
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