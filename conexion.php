<?php
	
	/**
	* Funcion encargada de conectar con la base de datos
	*/
	function connect_with_mysql ($servername, $username, $passbd, $dbname){
		$conn = mysql_connect($servername,$username,$passbd);
		if (!$conn) {
			die('No pudo conectarse: '.mysql_error());
			exit();
		}
		if (!mysql_select_db($dbname,$conn)) { 
		    die ("Error seleccionando la base de datos: ".mysql_error()); 
			exit(); 
		}
		return $conn;
	}

	/**
	* Funcion encargada de desconectar la conexion con la base de datos
	*/
	function close_connect_with_mysql($conn){
		mysql_close($conn);
	}
	
?>