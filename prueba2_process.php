<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$smu_rb_16 = $_GET["smu_rb_16"];
	getSqlInsertSmu($encuestado,$smu_rb_16);
	$smu_s_17 = $_GET["smu_s_17"];
	getSqlInsertSmu($encuestado,$smu_s_17);
	$smr_cb_18 = $_GET["smr_cb_18"];
	getSqlInsertSmr($encuestado, $smr_cb_18);
	$smr_sm_19 = $_GET["smr_sm_19"];
	getSqlInsertSmr($encuestado, $smr_sm_19);
	$mmr_rb_20_1 = $_GET["mmr_rb_20_1"];
	getSqlInsertMmr ($encuestado, $mmr_rb_20_1);
	$mmr_rb_20_2 = $_GET["mmr_rb_20_2"];
	getSqlInsertMmr ($encuestado, $mmr_rb_20_2);
	$mmr_rb_20_3 = $_GET["mmr_rb_20_3"];
	getSqlInsertMmr ($encuestado, $mmr_rb_20_3);
	$mmr_rb_20_4 = $_GET["mmr_rb_20_4"];
	getSqlInsertMmr ($encuestado, $mmr_rb_20_4);
	$mmr_cb_21_1 = $_GET["mmr_cb_21_1"];
	getSqlInsertMmrCb($encuestado, $mmr_cb_21_1);
	$mmr_cb_21_2 = $_GET["mmr_cb_21_2"];
	getSqlInsertMmrCb($encuestado, $mmr_cb_21_2);
	$mmr_cb_21_3 = $_GET["mmr_cb_21_3"];
	getSqlInsertMmrCb($encuestado, $mmr_cb_21_3);
	$mmr_s_22_1_1 = $_GET["mmr_s_22_1_1"];
	getSqlInsertMmrS($encuestado, $mmr_s_22_1_1);
	$mmr_s_22_1_2 = $_GET["mmr_s_22_1_2"];
	getSqlInsertMmrS($encuestado, $mmr_s_22_1_2);
	$mmr_s_22_2_1 = $_GET["mmr_s_22_2_1"];
	getSqlInsertMmrS($encuestado, $mmr_s_22_2_1);
	$mmr_s_22_2_2 = $_GET["mmr_s_22_2_2"];
	getSqlInsertMmrS($encuestado, $mmr_s_22_2_2);
	$mmr_s_22_3_1 = $_GET["mmr_s_22_3_1"];
	getSqlInsertMmrS($encuestado, $mmr_s_22_3_1);
	$mmr_s_22_3_2 = $_GET["mmr_s_22_3_2"];
	getSqlInsertMmrS($encuestado, $mmr_s_22_3_2);
	$mmr_s_22_4_1 = $_GET["mmr_s_22_4_1"];
	getSqlInsertMmrS($encuestado, $mmr_s_22_4_1);
	$mmr_s_22_4_2 = $_GET["mmr_s_22_4_2"];
	getSqlInsertMmrS($encuestado, $mmr_s_22_4_2);
	$mmr_s_22_5_1 = $_GET["mmr_s_22_5_1"];
	getSqlInsertMmrS($encuestado, $mmr_s_22_5_1);
	$mmr_s_22_5_2 = $_GET["mmr_s_22_5_2"];
	getSqlInsertMmrS($encuestado, $mmr_s_22_5_2);
	$eru_rb_24 = $_GET["eru_rb_24"];
	getSqlInsertEru($encuestado,$eru_rb_24);
	$psu_t_25 = $_GET["psu_t_25"];
	$id_psu_t_25 = "psu_t_25";
	getSqlInsertPsu($encuestado,$id_psu_t_25,$psu_t_25);
	$psm_t_26_1 = $_GET["psm_t_26_1"];
	$id_psm_t_26_1 = "psm_t_26_1";
	getSqlInsertPsm ($encuestado, $id_psm_t_26_1, $psm_t_26_1);
	$psm_t_26_2 = $_GET["psm_t_26_2"];
	$id_psm_t_26_2 = "psm_t_26_2";
	getSqlInsertPsm ($encuestado, $id_psm_t_26_2, $psm_t_26_2);
	$psm_t_26_3 = $_GET["psm_t_26_3"];
	$id_psm_t_26_3 = "psm_t_26_3";
	getSqlInsertPsm ($encuestado, $id_psm_t_26_3, $psm_t_26_3);
	$psc_ta_27 = $_GET["psc_ta_27"];
	$id_psc_ta_27 = "psc_ta_27";
	getSqlInsertPsu($encuestado,$id_psc_ta_27,$psc_ta_27);
	$id_pfh_s_28 = "pfh_s_28";
	getSqlInsertPfh ($encuestado, $id_pfh_s_28);
	$id_psf_s_29 = "psf_s_29";
	getSqlInsertPsf ($encuestado, $id_psf_s_29);
	$id_psh_s_30 = "psh_s_30";
	getSqlInsertPsh ($encuestado, $id_psh_s_30);	
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