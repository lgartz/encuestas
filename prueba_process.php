<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","prueba");
	
		
	  		
	$smu_rb_1 = $_GET["smu_rb_1"];
	getSqlInsertSmu("1",$smu_rb_1);
	
	  		
	  		    		
	
		
	  		
	$smu_s_2 = $_GET["smu_s_2"];
	getSqlInsertSmu("1",$smu_s_2);
	
	  		
	  		    		
	
		
	  		
	$smr_cb_3 = $_GET["smr_cb_3"];
	getSqlInsertSmr("1", $smr_cb_3);
	  		
	  		    		
	
		
	  		
	$smr_sm_4 = $_GET["smr_sm_4"];
	getSqlInsertSmr("1", $smr_sm_4);
	  		
	  		    		
	
			    		
	
			    		
	
			    		
	
		
	  		
	$eru_rb_9 = $_GET["eru_rb_9"];
	getSqlInsertEru("1",$eru_rb_9);
	  		
	  		    		
	
		
		  	
	$psu_t_10 = $_GET["psu_t_10"];
	$id_psu_t_10 = "psu_t_10";
	getSqlInsertPsu("1",$id_psu_t_10,$psu_t_10); 	
		  	
	  		    		
	
		
		  	
	$psm_t_11_1 = $_GET["psm_t_11_1"];
	$id_psm_t_11_1 = "psm_t_11_1";
	getSqlInsertPsm ("1", $id_psm_t_11_1, $psm_t_11_1);	
		  	
	$psm_t_11_2 = $_GET["psm_t_11_2"];
	$id_psm_t_11_2 = "psm_t_11_2";
	getSqlInsertPsm ("1", $id_psm_t_11_2, $psm_t_11_2);	
		  	
	$psm_t_11_3 = $_GET["psm_t_11_3"];
	$id_psm_t_11_3 = "psm_t_11_3";
	getSqlInsertPsm ("1", $id_psm_t_11_3, $psm_t_11_3);	
		  	
	  		    		
	
		
			
	$psc_ta_12 = $_GET["psc_ta_12"];
	$id_psc_ta_12 = "psc_ta_12";
	getSqlInsertPsu("1",$id_psc_ta_12,$psc_ta_12);
			
			    		
	
		
			
	$id_pfh_s_13 = "pfh_s_13";
	getSqlInsertPfh ("1", $id_pfh_s_13);
			
			    		
	
		
			
	$id_psf_s_14 = "psf_s_14";
	getSqlInsertPsf ("1", $id_psf_s_14);
			
			    		
	
		
			
	$id_psh_s_15 = "psh_s_15";
	getSqlInsertPsh ("1", $id_psh_s_15);
			
	  		    		
		
	// Cerrar Conexion
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
	
	function insert ($sql){
		echo "<h3>".$sql."</h3>";
		//if (mysql_query($sql)) {
		//	echo "<h1>Inserto exitosamente</h1>";
		//	echo $sql;
		//}else{
		//	echo "<h1>No inserto</h1>";
		//	echo $sql;
		//}
	}
	
?>