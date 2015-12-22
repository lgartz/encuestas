<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Operación (Funciones)</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">			
	<link rel="stylesheet" href="css/encuestas.css">
</head>
<body>
	<?php
		if (!$_GET["idEncuesta"]) {
			header('Location: fail.php');
		}
		$idEncuesta = $_GET["idEncuesta"];
		session_start();
		$rolEncuestado="";
   		if(isset($_SESSION['rolEncuestado'])){
	      $rolEncuestado = $_SESSION['rolEncuestado'];
    	}    
		$_SESSION['idEncuesta'] = $idEncuesta;
	?>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<span class="navbar-brand">Operación de los servicios IT (Funciones) Cuantitativa Version 2</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="operacion_cuantitativa_funciones_v2_process.php" method="GET">
			<div class="form-group">
	<div id="panel_mmr_rb_457" class="panel panel-primary">
		<div id="panel_head_mmr_rb_457" class="panel-heading">
			<h4>FUNCIONES: Centro de servicio al usuario, Gestión Técnica, Gestión de aplicaciones, Posición organizacional, Posición de aplicaciones<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_457" class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover ">
					<tr class="active">
						<th class="th-center"></th>
						<th class="th-center">Nada Factible</th>
						<th class="th-center">Poco Factible</th>
						<th class="th-center">Algo Factible</th>
						<th class="th-center">Factible</th>
						<th class="th-center">Bastante Factible</th>
						<th class="th-center">Muy Factible</th>
					</tr>
					<tr>
						<th>¿Se cuenta con un centro de servicio al usuario - Service Desk debidamente conformado?</th>
						<td class="td-center"><input id="mmr_rb_457_1_1" name="mmr_rb_457_1" type="radio"  value="mmr_rb_457_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_1_2" name="mmr_rb_457_1" type="radio"  value="mmr_rb_457_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_1_3" name="mmr_rb_457_1" type="radio"  value="mmr_rb_457_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_1_4" name="mmr_rb_457_1" type="radio"  value="mmr_rb_457_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_1_5" name="mmr_rb_457_1" type="radio"  value="mmr_rb_457_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_1_6" name="mmr_rb_457_1" type="radio"  value="mmr_rb_457_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El service Desk cuenta con personal dedicado al manejo de eventos de servicio, recibidos por llamadas telefónicas, interface en línea o reporte automático de la infraestructura de los eventos (sistemas de monitoreo y reporte de alarmas)?</th>
						<td class="td-center"><input id="mmr_rb_457_2_1" name="mmr_rb_457_2" type="radio"  value="mmr_rb_457_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_2_2" name="mmr_rb_457_2" type="radio"  value="mmr_rb_457_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_2_3" name="mmr_rb_457_2" type="radio"  value="mmr_rb_457_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_2_4" name="mmr_rb_457_2" type="radio"  value="mmr_rb_457_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_2_5" name="mmr_rb_457_2" type="radio"  value="mmr_rb_457_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_2_6" name="mmr_rb_457_2" type="radio"  value="mmr_rb_457_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El service Desk es el único punto de contacto para los usuarios en el día a día?</th>
						<td class="td-center"><input id="mmr_rb_457_3_1" name="mmr_rb_457_3" type="radio"  value="mmr_rb_457_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_3_2" name="mmr_rb_457_3" type="radio"  value="mmr_rb_457_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_3_3" name="mmr_rb_457_3" type="radio"  value="mmr_rb_457_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_3_4" name="mmr_rb_457_3" type="radio"  value="mmr_rb_457_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_3_5" name="mmr_rb_457_3" type="radio"  value="mmr_rb_457_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_3_6" name="mmr_rb_457_3" type="radio"  value="mmr_rb_457_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El service Desk cuenta con una herramienta o software especial de gestión de incidentes?</th>
						<td class="td-center"><input id="mmr_rb_457_4_1" name="mmr_rb_457_4" type="radio"  value="mmr_rb_457_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_4_2" name="mmr_rb_457_4" type="radio"  value="mmr_rb_457_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_4_3" name="mmr_rb_457_4" type="radio"  value="mmr_rb_457_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_4_4" name="mmr_rb_457_4" type="radio"  value="mmr_rb_457_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_4_5" name="mmr_rb_457_4" type="radio"  value="mmr_rb_457_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_4_6" name="mmr_rb_457_4" type="radio"  value="mmr_rb_457_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El service Desk es el centro de servicio al usuario para temas de gestión técnica, gestión de aplicaciones, gestión de operaciones de TI, soporte de terceros, cumplimiento de peticiones?</th>
						<td class="td-center"><input id="mmr_rb_457_5_1" name="mmr_rb_457_5" type="radio"  value="mmr_rb_457_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_5_2" name="mmr_rb_457_5" type="radio"  value="mmr_rb_457_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_5_3" name="mmr_rb_457_5" type="radio"  value="mmr_rb_457_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_5_4" name="mmr_rb_457_5" type="radio"  value="mmr_rb_457_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_5_5" name="mmr_rb_457_5" type="radio"  value="mmr_rb_457_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_5_6" name="mmr_rb_457_5" type="radio"  value="mmr_rb_457_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tiene definido el rol de Incident Mangement?</th>
						<td class="td-center"><input id="mmr_rb_457_6_1" name="mmr_rb_457_6" type="radio"  value="mmr_rb_457_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_6_2" name="mmr_rb_457_6" type="radio"  value="mmr_rb_457_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_6_3" name="mmr_rb_457_6" type="radio"  value="mmr_rb_457_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_6_4" name="mmr_rb_457_6" type="radio"  value="mmr_rb_457_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_6_5" name="mmr_rb_457_6" type="radio"  value="mmr_rb_457_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_6_6" name="mmr_rb_457_6" type="radio"  value="mmr_rb_457_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe métricas implementadas para analizar la operación del service Desk?</th>
						<td class="td-center"><input id="mmr_rb_457_7_1" name="mmr_rb_457_7" type="radio"  value="mmr_rb_457_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_7_2" name="mmr_rb_457_7" type="radio"  value="mmr_rb_457_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_7_3" name="mmr_rb_457_7" type="radio"  value="mmr_rb_457_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_7_4" name="mmr_rb_457_7" type="radio"  value="mmr_rb_457_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_7_5" name="mmr_rb_457_7" type="radio"  value="mmr_rb_457_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_7_6" name="mmr_rb_457_7" type="radio"  value="mmr_rb_457_7_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿La gestión técnica presta servicio en temas de servidores, red, almacenamiento, bases de datos, directorio de servicios, computadoras, impresión, middleware, Internet en sus diferentes niveles?</th>
						<td class="td-center"><input id="mmr_rb_457_8_1" name="mmr_rb_457_8" type="radio"  value="mmr_rb_457_8_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_8_2" name="mmr_rb_457_8" type="radio"  value="mmr_rb_457_8_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_8_3" name="mmr_rb_457_8" type="radio"  value="mmr_rb_457_8_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_8_4" name="mmr_rb_457_8" type="radio"  value="mmr_rb_457_8_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_8_5" name="mmr_rb_457_8" type="radio"  value="mmr_rb_457_8_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_8_6" name="mmr_rb_457_8" type="radio"  value="mmr_rb_457_8_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Desde el service Desk se presta el soporte de primer nivel a las aplicaciones y se hacen los debidos escalamiento a los expertos?</th>
						<td class="td-center"><input id="mmr_rb_457_9_1" name="mmr_rb_457_9" type="radio"  value="mmr_rb_457_9_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_9_2" name="mmr_rb_457_9" type="radio"  value="mmr_rb_457_9_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_9_3" name="mmr_rb_457_9" type="radio"  value="mmr_rb_457_9_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_9_4" name="mmr_rb_457_9" type="radio"  value="mmr_rb_457_9_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_9_5" name="mmr_rb_457_9" type="radio"  value="mmr_rb_457_9_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_9_6" name="mmr_rb_457_9" type="radio"  value="mmr_rb_457_9_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El personal tiene turnos de operadores y soporte, para asegurar el monitoreo y soporte de los eventos en la infraestructura y servicios de TI?</th>
						<td class="td-center"><input id="mmr_rb_457_10_1" name="mmr_rb_457_10" type="radio"  value="mmr_rb_457_10_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_10_2" name="mmr_rb_457_10" type="radio"  value="mmr_rb_457_10_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_10_3" name="mmr_rb_457_10" type="radio"  value="mmr_rb_457_10_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_10_4" name="mmr_rb_457_10" type="radio"  value="mmr_rb_457_10_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_10_5" name="mmr_rb_457_10" type="radio"  value="mmr_rb_457_10_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_10_6" name="mmr_rb_457_10" type="radio"  value="mmr_rb_457_10_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El datacenter cuenta con las características físicas, de seguridad física, elementos de disponibilidad (energía, aire acondicionado) apropiados para un centro de datos?</th>
						<td class="td-center"><input id="mmr_rb_457_11_1" name="mmr_rb_457_11" type="radio"  value="mmr_rb_457_11_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_11_2" name="mmr_rb_457_11" type="radio"  value="mmr_rb_457_11_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_11_3" name="mmr_rb_457_11" type="radio"  value="mmr_rb_457_11_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_11_4" name="mmr_rb_457_11" type="radio"  value="mmr_rb_457_11_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_11_5" name="mmr_rb_457_11" type="radio"  value="mmr_rb_457_11_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_11_6" name="mmr_rb_457_11" type="radio"  value="mmr_rb_457_11_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿La gestión de facilidades gestiona todo lo relacionado con centro de datos, contratos, consolidación y sitios de recuperación?</th>
						<td class="td-center"><input id="mmr_rb_457_12_1" name="mmr_rb_457_12" type="radio"  value="mmr_rb_457_12_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_12_2" name="mmr_rb_457_12" type="radio"  value="mmr_rb_457_12_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_12_3" name="mmr_rb_457_12" type="radio"  value="mmr_rb_457_12_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_12_4" name="mmr_rb_457_12" type="radio"  value="mmr_rb_457_12_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_12_5" name="mmr_rb_457_12" type="radio"  value="mmr_rb_457_12_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_457_12_6" name="mmr_rb_457_12" type="radio"  value="mmr_rb_457_12_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

		<div class="form-group">
			<div class="row">
			  <?php 
			    if (strcmp($rolEncuestado, "1") !== 0) {
			      echo '<div class="col col-xs-3"></div>';
			      echo '<div class="col col-xs-2">';
            echo '<button id="enviar" type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp;Enviar</button>';
            echo '</div>';
            echo '<div class="col col-xs-2">';
            echo '<button id="cancelar" type="reset" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span>&nbsp;Limpiar</button>';
            echo '</div>';
            echo '<div class="col col-xs-2">';
            echo '<a href="encuestas.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>&nbsp;Regresar</a>';
            echo '</div>';
            echo '<div class="col col-xs-3"></div>';
			    }else{
            echo '<div class="col col-xs-5"></div>';
            echo '<div class="col col-xs-2">';
            echo '<a href="encuestas.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>&nbsp;Regresar</a>';
            echo '</div>';
            echo '<div class="col col-xs-5"></div>';
			    }
			  ?>				
			</div>
		</div>
		</form>
	</div>
	<div id="dialog-confirm" title="Preguntas inconsistentes">
  		<p>Existen preguntas a&uacute;n sin resolver o por completar, por favor revise e intente de nuevo</p>
	</div>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="javascript/operacion_cuantitativa_funciones_v2.js"></script>
</body>
</html>

