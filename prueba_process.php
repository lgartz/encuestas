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
	  		
	  	
	    		
	
		
	    		
	
		
	    		
	
		
	    		
	
		
	    		
	
		
	    		
	
		
	    		
	
		
	    		
	
		
	    		
	
		
	    		
		
	
	// Cerrar Conexion
	close_connect_with_mysql($conn);
	
	function getSqlInsertSmu($encuestado, $opcion){
		$sql = "INSERT INTO ressmu (ressmu_encuestado_id, ressmu_opsmurb_id) VALUES ('".$encuestado."','".$opcion."');";
		if (mysql_query($sql)) {
			echo "<h1>Inserto exitosamente</h1>";
			echo $sql;
		}else{
			echo "<h1>No inserto</h1>";
			echo $sql;
		}
	}
	
	function getSqlInsertSmr($encuestado, $opciones){
		$tam = count($opciones);
		for($i = 0; $i < $tam; $i++) {
	    	$sql = "INSERT INTO ressmu (ressmu_encuestado_id, ressmu_opsmurb_id) VALUES ('".$encuestado."','".$opciones[$i]."');";
	    	if (mysql_query($sql)) {
				echo "<h1>Inserto exitosamente</h1>";
				echo $sql;
			}else{
				echo "<h1>No inserto</h1>";
				echo $sql;
			}
		}
	}
?>