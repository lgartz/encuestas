<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Operación (Actividades)</title>
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
		$_SESSION['idEncuesta'] = $idEncuesta;
	?>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<span class="navbar-brand">Operación de los servicios IT (Actividades) Cauntitativa version 2</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="operacion_cuantitativa_actividades_v2_process.php" method="GET">
			<div class="form-group">
	<div id="panel_mmr_rb_231" class="panel panel-primary">
		<div id="panel_head_mmr_rb_231" class="panel-heading">
			<h4>Detección y Registro<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_231" class="panel-body">
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
						<th>¿Existe una Base de Datos única para el registro de Incidentes?</th>
						<td class="td-center"><input id="mmr_rb_231_1_1" name="mmr_rb_231_1" type="radio"  value="mmr_rb_231_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_1_2" name="mmr_rb_231_1" type="radio"  value="mmr_rb_231_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_1_3" name="mmr_rb_231_1" type="radio"  value="mmr_rb_231_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_1_4" name="mmr_rb_231_1" type="radio"  value="mmr_rb_231_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_1_5" name="mmr_rb_231_1" type="radio"  value="mmr_rb_231_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_1_6" name="mmr_rb_231_1" type="radio"  value="mmr_rb_231_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe un identificador único para cada incidente?</th>
						<td class="td-center"><input id="mmr_rb_231_2_1" name="mmr_rb_231_2" type="radio"  value="mmr_rb_231_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_2_2" name="mmr_rb_231_2" type="radio"  value="mmr_rb_231_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_2_3" name="mmr_rb_231_2" type="radio"  value="mmr_rb_231_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_2_4" name="mmr_rb_231_2" type="radio"  value="mmr_rb_231_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_2_5" name="mmr_rb_231_2" type="radio"  value="mmr_rb_231_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_2_6" name="mmr_rb_231_2" type="radio"  value="mmr_rb_231_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿La documentación registrada de Incidentes esta estandarizada (Ej.: Descripción, Información, historial)?</th>
						<td class="td-center"><input id="mmr_rb_231_3_1" name="mmr_rb_231_3" type="radio"  value="mmr_rb_231_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_3_2" name="mmr_rb_231_3" type="radio"  value="mmr_rb_231_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_3_3" name="mmr_rb_231_3" type="radio"  value="mmr_rb_231_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_3_4" name="mmr_rb_231_3" type="radio"  value="mmr_rb_231_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_3_5" name="mmr_rb_231_3" type="radio"  value="mmr_rb_231_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_3_6" name="mmr_rb_231_3" type="radio"  value="mmr_rb_231_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe un único punto de contacto para el reporte de todos los incidentes?</th>
						<td class="td-center"><input id="mmr_rb_231_4_1" name="mmr_rb_231_4" type="radio"  value="mmr_rb_231_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_4_2" name="mmr_rb_231_4" type="radio"  value="mmr_rb_231_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_4_3" name="mmr_rb_231_4" type="radio"  value="mmr_rb_231_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_4_4" name="mmr_rb_231_4" type="radio"  value="mmr_rb_231_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_4_5" name="mmr_rb_231_4" type="radio"  value="mmr_rb_231_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_4_6" name="mmr_rb_231_4" type="radio"  value="mmr_rb_231_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Todos los incidentes son reportados al único punto de contacto?</th>
						<td class="td-center"><input id="mmr_rb_231_5_1" name="mmr_rb_231_5" type="radio"  value="mmr_rb_231_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_5_2" name="mmr_rb_231_5" type="radio"  value="mmr_rb_231_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_5_3" name="mmr_rb_231_5" type="radio"  value="mmr_rb_231_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_5_4" name="mmr_rb_231_5" type="radio"  value="mmr_rb_231_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_5_5" name="mmr_rb_231_5" type="radio"  value="mmr_rb_231_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_5_6" name="mmr_rb_231_5" type="radio"  value="mmr_rb_231_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los medios de acceso al único punto de contacto están al alcance de todos los usuarios?</th>
						<td class="td-center"><input id="mmr_rb_231_6_1" name="mmr_rb_231_6" type="radio"  value="mmr_rb_231_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_6_2" name="mmr_rb_231_6" type="radio"  value="mmr_rb_231_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_6_3" name="mmr_rb_231_6" type="radio"  value="mmr_rb_231_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_6_4" name="mmr_rb_231_6" type="radio"  value="mmr_rb_231_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_6_5" name="mmr_rb_231_6" type="radio"  value="mmr_rb_231_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_6_6" name="mmr_rb_231_6" type="radio"  value="mmr_rb_231_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Todos los incidentes son registrados con su elemento de Configuración?</th>
						<td class="td-center"><input id="mmr_rb_231_7_1" name="mmr_rb_231_7" type="radio"  value="mmr_rb_231_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_7_2" name="mmr_rb_231_7" type="radio"  value="mmr_rb_231_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_7_3" name="mmr_rb_231_7" type="radio"  value="mmr_rb_231_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_7_4" name="mmr_rb_231_7" type="radio"  value="mmr_rb_231_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_7_5" name="mmr_rb_231_7" type="radio"  value="mmr_rb_231_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_7_6" name="mmr_rb_231_7" type="radio"  value="mmr_rb_231_7_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Las inconsistencias de la CMDB son detectadas y reportadas a Configuration Management?</th>
						<td class="td-center"><input id="mmr_rb_231_8_1" name="mmr_rb_231_8" type="radio"  value="mmr_rb_231_8_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_8_2" name="mmr_rb_231_8" type="radio"  value="mmr_rb_231_8_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_8_3" name="mmr_rb_231_8" type="radio"  value="mmr_rb_231_8_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_8_4" name="mmr_rb_231_8" type="radio"  value="mmr_rb_231_8_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_8_5" name="mmr_rb_231_8" type="radio"  value="mmr_rb_231_8_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_8_6" name="mmr_rb_231_8" type="radio"  value="mmr_rb_231_8_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Esta identificada claramente la información o campos mínimos requeridos para el registro de un incidente?</th>
						<td class="td-center"><input id="mmr_rb_231_9_1" name="mmr_rb_231_9" type="radio"  value="mmr_rb_231_9_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_9_2" name="mmr_rb_231_9" type="radio"  value="mmr_rb_231_9_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_9_3" name="mmr_rb_231_9" type="radio"  value="mmr_rb_231_9_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_9_4" name="mmr_rb_231_9" type="radio"  value="mmr_rb_231_9_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_9_5" name="mmr_rb_231_9" type="radio"  value="mmr_rb_231_9_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_9_6" name="mmr_rb_231_9" type="radio"  value="mmr_rb_231_9_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Está disponible la herramienta de gestión de llamadas por medio Web para que los usuarios finales hagan su propio registro y consultas de incidentes?</th>
						<td class="td-center"><input id="mmr_rb_231_10_1" name="mmr_rb_231_10" type="radio"  value="mmr_rb_231_10_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_10_2" name="mmr_rb_231_10" type="radio"  value="mmr_rb_231_10_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_10_3" name="mmr_rb_231_10" type="radio"  value="mmr_rb_231_10_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_10_4" name="mmr_rb_231_10" type="radio"  value="mmr_rb_231_10_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_10_5" name="mmr_rb_231_10" type="radio"  value="mmr_rb_231_10_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_10_6" name="mmr_rb_231_10" type="radio"  value="mmr_rb_231_10_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los usuarios finales conocen y realizan su propio registro de incidentes por medio Web (40% óptimo)?</th>
						<td class="td-center"><input id="mmr_rb_231_11_1" name="mmr_rb_231_11" type="radio"  value="mmr_rb_231_11_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_11_2" name="mmr_rb_231_11" type="radio"  value="mmr_rb_231_11_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_11_3" name="mmr_rb_231_11" type="radio"  value="mmr_rb_231_11_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_11_4" name="mmr_rb_231_11" type="radio"  value="mmr_rb_231_11_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_11_5" name="mmr_rb_231_11" type="radio"  value="mmr_rb_231_11_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_11_6" name="mmr_rb_231_11" type="radio"  value="mmr_rb_231_11_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se controla la duplicidad de registro de incidentes?</th>
						<td class="td-center"><input id="mmr_rb_231_12_1" name="mmr_rb_231_12" type="radio"  value="mmr_rb_231_12_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_12_2" name="mmr_rb_231_12" type="radio"  value="mmr_rb_231_12_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_12_3" name="mmr_rb_231_12" type="radio"  value="mmr_rb_231_12_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_12_4" name="mmr_rb_231_12" type="radio"  value="mmr_rb_231_12_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_12_5" name="mmr_rb_231_12" type="radio"  value="mmr_rb_231_12_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_12_6" name="mmr_rb_231_12" type="radio"  value="mmr_rb_231_12_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El reporte de Incidentes por medio e-mail se realiza a través de un formulario predefinido?</th>
						<td class="td-center"><input id="mmr_rb_231_13_1" name="mmr_rb_231_13" type="radio"  value="mmr_rb_231_13_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_13_2" name="mmr_rb_231_13" type="radio"  value="mmr_rb_231_13_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_13_3" name="mmr_rb_231_13" type="radio"  value="mmr_rb_231_13_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_13_4" name="mmr_rb_231_13" type="radio"  value="mmr_rb_231_13_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_13_5" name="mmr_rb_231_13" type="radio"  value="mmr_rb_231_13_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_13_6" name="mmr_rb_231_13" type="radio"  value="mmr_rb_231_13_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Todos los incidentes que no son detectados automáticamente son registrados en la herramienta de gestión a través del Service Desk?</th>
						<td class="td-center"><input id="mmr_rb_231_14_1" name="mmr_rb_231_14" type="radio"  value="mmr_rb_231_14_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_14_2" name="mmr_rb_231_14" type="radio"  value="mmr_rb_231_14_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_14_3" name="mmr_rb_231_14" type="radio"  value="mmr_rb_231_14_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_14_4" name="mmr_rb_231_14" type="radio"  value="mmr_rb_231_14_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_14_5" name="mmr_rb_231_14" type="radio"  value="mmr_rb_231_14_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_14_6" name="mmr_rb_231_14" type="radio"  value="mmr_rb_231_14_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los eventos automáticos registrados que no afectan o degradan el servicio (no son incidentes) son reportados a Operación management para su solución?</th>
						<td class="td-center"><input id="mmr_rb_231_15_1" name="mmr_rb_231_15" type="radio"  value="mmr_rb_231_15_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_15_2" name="mmr_rb_231_15" type="radio"  value="mmr_rb_231_15_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_15_3" name="mmr_rb_231_15" type="radio"  value="mmr_rb_231_15_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_15_4" name="mmr_rb_231_15" type="radio"  value="mmr_rb_231_15_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_15_5" name="mmr_rb_231_15" type="radio"  value="mmr_rb_231_15_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_231_15_6" name="mmr_rb_231_15" type="radio"  value="mmr_rb_231_15_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_232" class="panel panel-primary">
		<div id="panel_head_mmr_rb_232" class="panel-heading">
			<h4>Clasificación y Soporte Inicial<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_232" class="panel-body">
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
						<th>Los SLAs de los servicios prestados están claramente definidos y entendidos por los diferentes grupos de soporte</th>
						<td class="td-center"><input id="mmr_rb_232_1_1" name="mmr_rb_232_1" type="radio"  value="mmr_rb_232_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_1_2" name="mmr_rb_232_1" type="radio"  value="mmr_rb_232_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_1_3" name="mmr_rb_232_1" type="radio"  value="mmr_rb_232_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_1_4" name="mmr_rb_232_1" type="radio"  value="mmr_rb_232_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_1_5" name="mmr_rb_232_1" type="radio"  value="mmr_rb_232_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_1_6" name="mmr_rb_232_1" type="radio"  value="mmr_rb_232_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>Los SLAs están parametrizados correctamente en la herramienta de gestión</th>
						<td class="td-center"><input id="mmr_rb_232_2_1" name="mmr_rb_232_2" type="radio"  value="mmr_rb_232_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_2_2" name="mmr_rb_232_2" type="radio"  value="mmr_rb_232_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_2_3" name="mmr_rb_232_2" type="radio"  value="mmr_rb_232_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_2_4" name="mmr_rb_232_2" type="radio"  value="mmr_rb_232_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_2_5" name="mmr_rb_232_2" type="radio"  value="mmr_rb_232_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_2_6" name="mmr_rb_232_2" type="radio"  value="mmr_rb_232_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>Todos los incidentes están relacionados con el Servicio afectado y su nivel de servicio</th>
						<td class="td-center"><input id="mmr_rb_232_3_1" name="mmr_rb_232_3" type="radio"  value="mmr_rb_232_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_3_2" name="mmr_rb_232_3" type="radio"  value="mmr_rb_232_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_3_3" name="mmr_rb_232_3" type="radio"  value="mmr_rb_232_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_3_4" name="mmr_rb_232_3" type="radio"  value="mmr_rb_232_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_3_5" name="mmr_rb_232_3" type="radio"  value="mmr_rb_232_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_3_6" name="mmr_rb_232_3" type="radio"  value="mmr_rb_232_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>La categoría del registro es seleccionada correctamente</th>
						<td class="td-center"><input id="mmr_rb_232_4_1" name="mmr_rb_232_4" type="radio"  value="mmr_rb_232_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_4_2" name="mmr_rb_232_4" type="radio"  value="mmr_rb_232_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_4_3" name="mmr_rb_232_4" type="radio"  value="mmr_rb_232_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_4_4" name="mmr_rb_232_4" type="radio"  value="mmr_rb_232_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_4_5" name="mmr_rb_232_4" type="radio"  value="mmr_rb_232_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_4_6" name="mmr_rb_232_4" type="radio"  value="mmr_rb_232_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>El árbol de clasificación de incidentes está definido y parametrizados en la herramienta (según el estándar)</th>
						<td class="td-center"><input id="mmr_rb_232_5_1" name="mmr_rb_232_5" type="radio"  value="mmr_rb_232_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_5_2" name="mmr_rb_232_5" type="radio"  value="mmr_rb_232_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_5_3" name="mmr_rb_232_5" type="radio"  value="mmr_rb_232_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_5_4" name="mmr_rb_232_5" type="radio"  value="mmr_rb_232_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_5_5" name="mmr_rb_232_5" type="radio"  value="mmr_rb_232_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_5_6" name="mmr_rb_232_5" type="radio"  value="mmr_rb_232_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>El único punto de contacto conoce el estándar de clasificación y lo utiliza correctamente</th>
						<td class="td-center"><input id="mmr_rb_232_6_1" name="mmr_rb_232_6" type="radio"  value="mmr_rb_232_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_6_2" name="mmr_rb_232_6" type="radio"  value="mmr_rb_232_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_6_3" name="mmr_rb_232_6" type="radio"  value="mmr_rb_232_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_6_4" name="mmr_rb_232_6" type="radio"  value="mmr_rb_232_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_6_5" name="mmr_rb_232_6" type="radio"  value="mmr_rb_232_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_6_6" name="mmr_rb_232_6" type="radio"  value="mmr_rb_232_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El único punto de contacto define la prioridad del incidente basado en el impacto al negocio?</th>
						<td class="td-center"><input id="mmr_rb_232_7_1" name="mmr_rb_232_7" type="radio"  value="mmr_rb_232_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_7_2" name="mmr_rb_232_7" type="radio"  value="mmr_rb_232_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_7_3" name="mmr_rb_232_7" type="radio"  value="mmr_rb_232_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_7_4" name="mmr_rb_232_7" type="radio"  value="mmr_rb_232_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_7_5" name="mmr_rb_232_7" type="radio"  value="mmr_rb_232_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_7_6" name="mmr_rb_232_7" type="radio"  value="mmr_rb_232_7_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se asignan las prioridades con una matriz de Impacto / Urgencia?</th>
						<td class="td-center"><input id="mmr_rb_232_8_1" name="mmr_rb_232_8" type="radio"  value="mmr_rb_232_8_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_8_2" name="mmr_rb_232_8" type="radio"  value="mmr_rb_232_8_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_8_3" name="mmr_rb_232_8" type="radio"  value="mmr_rb_232_8_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_8_4" name="mmr_rb_232_8" type="radio"  value="mmr_rb_232_8_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_8_5" name="mmr_rb_232_8" type="radio"  value="mmr_rb_232_8_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_8_6" name="mmr_rb_232_8" type="radio"  value="mmr_rb_232_8_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los grupos solucionadores están identificados y registrados en la herramienta de gestión junto con sus alcances?</th>
						<td class="td-center"><input id="mmr_rb_232_9_1" name="mmr_rb_232_9" type="radio"  value="mmr_rb_232_9_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_9_2" name="mmr_rb_232_9" type="radio"  value="mmr_rb_232_9_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_9_3" name="mmr_rb_232_9" type="radio"  value="mmr_rb_232_9_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_9_4" name="mmr_rb_232_9" type="radio"  value="mmr_rb_232_9_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_9_5" name="mmr_rb_232_9" type="radio"  value="mmr_rb_232_9_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_9_6" name="mmr_rb_232_9" type="radio"  value="mmr_rb_232_9_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los alcances de cada grupo solucionador son claros para el único punto de contacto y para el grupo de IM?</th>
						<td class="td-center"><input id="mmr_rb_232_10_1" name="mmr_rb_232_10" type="radio"  value="mmr_rb_232_10_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_10_2" name="mmr_rb_232_10" type="radio"  value="mmr_rb_232_10_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_10_3" name="mmr_rb_232_10" type="radio"  value="mmr_rb_232_10_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_10_4" name="mmr_rb_232_10" type="radio"  value="mmr_rb_232_10_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_10_5" name="mmr_rb_232_10" type="radio"  value="mmr_rb_232_10_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_10_6" name="mmr_rb_232_10" type="radio"  value="mmr_rb_232_10_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Están definidos los Checklist para los incidentes frecuentes?</th>
						<td class="td-center"><input id="mmr_rb_232_11_1" name="mmr_rb_232_11" type="radio"  value="mmr_rb_232_11_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_11_2" name="mmr_rb_232_11" type="radio"  value="mmr_rb_232_11_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_11_3" name="mmr_rb_232_11" type="radio"  value="mmr_rb_232_11_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_11_4" name="mmr_rb_232_11" type="radio"  value="mmr_rb_232_11_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_11_5" name="mmr_rb_232_11" type="radio"  value="mmr_rb_232_11_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_11_6" name="mmr_rb_232_11" type="radio"  value="mmr_rb_232_11_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Están definidas las plantillas de documentación para los incidentes frecuentes?</th>
						<td class="td-center"><input id="mmr_rb_232_12_1" name="mmr_rb_232_12" type="radio"  value="mmr_rb_232_12_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_12_2" name="mmr_rb_232_12" type="radio"  value="mmr_rb_232_12_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_12_3" name="mmr_rb_232_12" type="radio"  value="mmr_rb_232_12_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_12_4" name="mmr_rb_232_12" type="radio"  value="mmr_rb_232_12_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_12_5" name="mmr_rb_232_12" type="radio"  value="mmr_rb_232_12_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_12_6" name="mmr_rb_232_12" type="radio"  value="mmr_rb_232_12_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe una Base de Datos con Errores Conocidos y problemas y sus soluciones - KEDB (definitivas o temporales) con acceso al único punto de contacto y al proceso de IM?</th>
						<td class="td-center"><input id="mmr_rb_232_13_1" name="mmr_rb_232_13" type="radio"  value="mmr_rb_232_13_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_13_2" name="mmr_rb_232_13" type="radio"  value="mmr_rb_232_13_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_13_3" name="mmr_rb_232_13" type="radio"  value="mmr_rb_232_13_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_13_4" name="mmr_rb_232_13" type="radio"  value="mmr_rb_232_13_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_13_5" name="mmr_rb_232_13" type="radio"  value="mmr_rb_232_13_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_13_6" name="mmr_rb_232_13" type="radio"  value="mmr_rb_232_13_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿En la herramienta de gestión se realiza la relación de incidentes con errores conocidos o problemas?</th>
						<td class="td-center"><input id="mmr_rb_232_14_1" name="mmr_rb_232_14" type="radio"  value="mmr_rb_232_14_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_14_2" name="mmr_rb_232_14" type="radio"  value="mmr_rb_232_14_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_14_3" name="mmr_rb_232_14" type="radio"  value="mmr_rb_232_14_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_14_4" name="mmr_rb_232_14" type="radio"  value="mmr_rb_232_14_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_14_5" name="mmr_rb_232_14" type="radio"  value="mmr_rb_232_14_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_14_6" name="mmr_rb_232_14" type="radio"  value="mmr_rb_232_14_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe una Base de datos de FAQs con acceso a todo el personal del proceso de incidentes y Usuarios Autorizados?</th>
						<td class="td-center"><input id="mmr_rb_232_15_1" name="mmr_rb_232_15" type="radio"  value="mmr_rb_232_15_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_15_2" name="mmr_rb_232_15" type="radio"  value="mmr_rb_232_15_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_15_3" name="mmr_rb_232_15" type="radio"  value="mmr_rb_232_15_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_15_4" name="mmr_rb_232_15" type="radio"  value="mmr_rb_232_15_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_15_5" name="mmr_rb_232_15" type="radio"  value="mmr_rb_232_15_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_15_6" name="mmr_rb_232_15" type="radio"  value="mmr_rb_232_15_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se notifica al proceso de problemas la existencia de un posible problema (Incidente con Causa Raíz desconocida o Incidente Crítico)?</th>
						<td class="td-center"><input id="mmr_rb_232_16_1" name="mmr_rb_232_16" type="radio"  value="mmr_rb_232_16_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_16_2" name="mmr_rb_232_16" type="radio"  value="mmr_rb_232_16_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_16_3" name="mmr_rb_232_16" type="radio"  value="mmr_rb_232_16_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_16_4" name="mmr_rb_232_16" type="radio"  value="mmr_rb_232_16_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_16_5" name="mmr_rb_232_16" type="radio"  value="mmr_rb_232_16_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_16_6" name="mmr_rb_232_16" type="radio"  value="mmr_rb_232_16_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe una herramienta de control remoto para el único punto de contacto?</th>
						<td class="td-center"><input id="mmr_rb_232_17_1" name="mmr_rb_232_17" type="radio"  value="mmr_rb_232_17_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_17_2" name="mmr_rb_232_17" type="radio"  value="mmr_rb_232_17_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_17_3" name="mmr_rb_232_17" type="radio"  value="mmr_rb_232_17_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_17_4" name="mmr_rb_232_17" type="radio"  value="mmr_rb_232_17_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_17_5" name="mmr_rb_232_17" type="radio"  value="mmr_rb_232_17_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_17_6" name="mmr_rb_232_17" type="radio"  value="mmr_rb_232_17_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El grupo de IM soluciona requerimientos de Reset o desbloqueo de password?</th>
						<td class="td-center"><input id="mmr_rb_232_18_1" name="mmr_rb_232_18" type="radio"  value="mmr_rb_232_18_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_18_2" name="mmr_rb_232_18" type="radio"  value="mmr_rb_232_18_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_18_3" name="mmr_rb_232_18" type="radio"  value="mmr_rb_232_18_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_18_4" name="mmr_rb_232_18" type="radio"  value="mmr_rb_232_18_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_18_5" name="mmr_rb_232_18" type="radio"  value="mmr_rb_232_18_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_18_6" name="mmr_rb_232_18" type="radio"  value="mmr_rb_232_18_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se realiza correlación de llamadas de usuario con incidentes de plataforma?</th>
						<td class="td-center"><input id="mmr_rb_232_19_1" name="mmr_rb_232_19" type="radio"  value="mmr_rb_232_19_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_19_2" name="mmr_rb_232_19" type="radio"  value="mmr_rb_232_19_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_19_3" name="mmr_rb_232_19" type="radio"  value="mmr_rb_232_19_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_19_4" name="mmr_rb_232_19" type="radio"  value="mmr_rb_232_19_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_19_5" name="mmr_rb_232_19" type="radio"  value="mmr_rb_232_19_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_232_19_6" name="mmr_rb_232_19" type="radio"  value="mmr_rb_232_19_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_233" class="panel panel-primary">
		<div id="panel_head_mmr_rb_233" class="panel-heading">
			<h4>Investigación y Diagnóstico<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_233" class="panel-body">
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
						<th>¿Para incidentes críticos la notificación al nivel solucionador se realiza telefónicamente?</th>
						<td class="td-center"><input id="mmr_rb_233_1_1" name="mmr_rb_233_1" type="radio"  value="mmr_rb_233_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_1_2" name="mmr_rb_233_1" type="radio"  value="mmr_rb_233_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_1_3" name="mmr_rb_233_1" type="radio"  value="mmr_rb_233_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_1_4" name="mmr_rb_233_1" type="radio"  value="mmr_rb_233_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_1_5" name="mmr_rb_233_1" type="radio"  value="mmr_rb_233_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_1_6" name="mmr_rb_233_1" type="radio"  value="mmr_rb_233_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los incidentes se atienden por orden de prioridad?</th>
						<td class="td-center"><input id="mmr_rb_233_2_1" name="mmr_rb_233_2" type="radio"  value="mmr_rb_233_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_2_2" name="mmr_rb_233_2" type="radio"  value="mmr_rb_233_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_2_3" name="mmr_rb_233_2" type="radio"  value="mmr_rb_233_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_2_4" name="mmr_rb_233_2" type="radio"  value="mmr_rb_233_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_2_5" name="mmr_rb_233_2" type="radio"  value="mmr_rb_233_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_2_6" name="mmr_rb_233_2" type="radio"  value="mmr_rb_233_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se realiza la actualización continua de la historia del incidente?</th>
						<td class="td-center"><input id="mmr_rb_233_3_1" name="mmr_rb_233_3" type="radio"  value="mmr_rb_233_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_3_2" name="mmr_rb_233_3" type="radio"  value="mmr_rb_233_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_3_3" name="mmr_rb_233_3" type="radio"  value="mmr_rb_233_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_3_4" name="mmr_rb_233_3" type="radio"  value="mmr_rb_233_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_3_5" name="mmr_rb_233_3" type="radio"  value="mmr_rb_233_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_3_6" name="mmr_rb_233_3" type="radio"  value="mmr_rb_233_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El único punto de contacto mantiene informado al cliente sobre el progreso de la solución (Cambio de Estado, Cambio de grupo solucionador, cambio en tiempo estimado de solución)?</th>
						<td class="td-center"><input id="mmr_rb_233_4_1" name="mmr_rb_233_4" type="radio"  value="mmr_rb_233_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_4_2" name="mmr_rb_233_4" type="radio"  value="mmr_rb_233_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_4_3" name="mmr_rb_233_4" type="radio"  value="mmr_rb_233_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_4_4" name="mmr_rb_233_4" type="radio"  value="mmr_rb_233_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_4_5" name="mmr_rb_233_4" type="radio"  value="mmr_rb_233_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_4_6" name="mmr_rb_233_4" type="radio"  value="mmr_rb_233_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El estado registrado del incidente refleja la situación actual del mismo?</th>
						<td class="td-center"><input id="mmr_rb_233_5_1" name="mmr_rb_233_5" type="radio"  value="mmr_rb_233_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_5_2" name="mmr_rb_233_5" type="radio"  value="mmr_rb_233_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_5_3" name="mmr_rb_233_5" type="radio"  value="mmr_rb_233_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_5_4" name="mmr_rb_233_5" type="radio"  value="mmr_rb_233_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_5_5" name="mmr_rb_233_5" type="radio"  value="mmr_rb_233_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_5_6" name="mmr_rb_233_5" type="radio"  value="mmr_rb_233_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Si es requerido, el único punto de contacto re-evalúa el impacto y prioridad asignada acorde con los SLAs?</th>
						<td class="td-center"><input id="mmr_rb_233_6_1" name="mmr_rb_233_6" type="radio"  value="mmr_rb_233_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_6_2" name="mmr_rb_233_6" type="radio"  value="mmr_rb_233_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_6_3" name="mmr_rb_233_6" type="radio"  value="mmr_rb_233_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_6_4" name="mmr_rb_233_6" type="radio"  value="mmr_rb_233_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_6_5" name="mmr_rb_233_6" type="radio"  value="mmr_rb_233_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_6_6" name="mmr_rb_233_6" type="radio"  value="mmr_rb_233_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El único punto de contacto realiza un monitoreo continuo a la solución del incidente y notifica al Incidente Manager incumplimiento en los tiempos de solución según los SLAs?</th>
						<td class="td-center"><input id="mmr_rb_233_7_1" name="mmr_rb_233_7" type="radio"  value="mmr_rb_233_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_7_2" name="mmr_rb_233_7" type="radio"  value="mmr_rb_233_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_7_3" name="mmr_rb_233_7" type="radio"  value="mmr_rb_233_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_7_4" name="mmr_rb_233_7" type="radio"  value="mmr_rb_233_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_7_5" name="mmr_rb_233_7" type="radio"  value="mmr_rb_233_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_7_6" name="mmr_rb_233_7" type="radio"  value="mmr_rb_233_7_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El Inicident Manager vigila el cumplimiento de los tiempos de solución de los incidentes según los SLAs?</th>
						<td class="td-center"><input id="mmr_rb_233_8_1" name="mmr_rb_233_8" type="radio"  value="mmr_rb_233_8_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_8_2" name="mmr_rb_233_8" type="radio"  value="mmr_rb_233_8_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_8_3" name="mmr_rb_233_8" type="radio"  value="mmr_rb_233_8_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_8_4" name="mmr_rb_233_8" type="radio"  value="mmr_rb_233_8_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_8_5" name="mmr_rb_233_8" type="radio"  value="mmr_rb_233_8_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_8_6" name="mmr_rb_233_8" type="radio"  value="mmr_rb_233_8_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los especialistas notifican y registran nuevos problemas encontrados y son asignados al proceso correspondiente?</th>
						<td class="td-center"><input id="mmr_rb_233_9_1" name="mmr_rb_233_9" type="radio"  value="mmr_rb_233_9_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_9_2" name="mmr_rb_233_9" type="radio"  value="mmr_rb_233_9_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_9_3" name="mmr_rb_233_9" type="radio"  value="mmr_rb_233_9_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_9_4" name="mmr_rb_233_9" type="radio"  value="mmr_rb_233_9_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_9_5" name="mmr_rb_233_9" type="radio"  value="mmr_rb_233_9_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_9_6" name="mmr_rb_233_9" type="radio"  value="mmr_rb_233_9_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El 2 nivel de soporte realiza el escalamiento a 3 nivel de soporte cuando es requerido?</th>
						<td class="td-center"><input id="mmr_rb_233_10_1" name="mmr_rb_233_10" type="radio"  value="mmr_rb_233_10_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_10_2" name="mmr_rb_233_10" type="radio"  value="mmr_rb_233_10_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_10_3" name="mmr_rb_233_10" type="radio"  value="mmr_rb_233_10_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_10_4" name="mmr_rb_233_10" type="radio"  value="mmr_rb_233_10_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_10_5" name="mmr_rb_233_10" type="radio"  value="mmr_rb_233_10_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_10_6" name="mmr_rb_233_10" type="radio"  value="mmr_rb_233_10_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Siempre existe una verificación de Incidentes pasados con el mismo Síntoma o relación con un error conocido o problema?</th>
						<td class="td-center"><input id="mmr_rb_233_11_1" name="mmr_rb_233_11" type="radio"  value="mmr_rb_233_11_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_11_2" name="mmr_rb_233_11" type="radio"  value="mmr_rb_233_11_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_11_3" name="mmr_rb_233_11" type="radio"  value="mmr_rb_233_11_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_11_4" name="mmr_rb_233_11" type="radio"  value="mmr_rb_233_11_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_11_5" name="mmr_rb_233_11" type="radio"  value="mmr_rb_233_11_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_11_6" name="mmr_rb_233_11" type="radio"  value="mmr_rb_233_11_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe una matriz de Escalamiento funcional y jerárquico con sus responsables y tiempos definidos?</th>
						<td class="td-center"><input id="mmr_rb_233_12_1" name="mmr_rb_233_12" type="radio"  value="mmr_rb_233_12_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_12_2" name="mmr_rb_233_12" type="radio"  value="mmr_rb_233_12_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_12_3" name="mmr_rb_233_12" type="radio"  value="mmr_rb_233_12_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_12_4" name="mmr_rb_233_12" type="radio"  value="mmr_rb_233_12_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_12_5" name="mmr_rb_233_12" type="radio"  value="mmr_rb_233_12_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_12_6" name="mmr_rb_233_12" type="radio"  value="mmr_rb_233_12_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Está definido el ciclo de vida de un incidente?</th>
						<td class="td-center"><input id="mmr_rb_233_13_1" name="mmr_rb_233_13" type="radio"  value="mmr_rb_233_13_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_13_2" name="mmr_rb_233_13" type="radio"  value="mmr_rb_233_13_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_13_3" name="mmr_rb_233_13" type="radio"  value="mmr_rb_233_13_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_13_4" name="mmr_rb_233_13" type="radio"  value="mmr_rb_233_13_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_13_5" name="mmr_rb_233_13" type="radio"  value="mmr_rb_233_13_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_233_13_6" name="mmr_rb_233_13" type="radio"  value="mmr_rb_233_13_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_234" class="panel panel-primary">
		<div id="panel_head_mmr_rb_234" class="panel-heading">
			<h4>Resolver el incidente y recuperar el servicio<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_234" class="panel-body">
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
						<th>¿La documentación de la solución contiene todas las instrucciones ejecutadas para la recuperación del incidente?</th>
						<td class="td-center"><input id="mmr_rb_234_1_1" name="mmr_rb_234_1" type="radio"  value="mmr_rb_234_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_1_2" name="mmr_rb_234_1" type="radio"  value="mmr_rb_234_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_1_3" name="mmr_rb_234_1" type="radio"  value="mmr_rb_234_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_1_4" name="mmr_rb_234_1" type="radio"  value="mmr_rb_234_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_1_5" name="mmr_rb_234_1" type="radio"  value="mmr_rb_234_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_1_6" name="mmr_rb_234_1" type="radio"  value="mmr_rb_234_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los n-niveles solucionadores notifican al único punto de contacto cuando realizan la recuperación del incidente?</th>
						<td class="td-center"><input id="mmr_rb_234_2_1" name="mmr_rb_234_2" type="radio"  value="mmr_rb_234_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_2_2" name="mmr_rb_234_2" type="radio"  value="mmr_rb_234_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_2_3" name="mmr_rb_234_2" type="radio"  value="mmr_rb_234_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_2_4" name="mmr_rb_234_2" type="radio"  value="mmr_rb_234_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_2_5" name="mmr_rb_234_2" type="radio"  value="mmr_rb_234_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_2_6" name="mmr_rb_234_2" type="radio"  value="mmr_rb_234_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se notifica al n-nivel del escalamiento jerárquico alcanzado sobre la solución del incidente?</th>
						<td class="td-center"><input id="mmr_rb_234_3_1" name="mmr_rb_234_3" type="radio"  value="mmr_rb_234_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_3_2" name="mmr_rb_234_3" type="radio"  value="mmr_rb_234_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_3_3" name="mmr_rb_234_3" type="radio"  value="mmr_rb_234_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_3_4" name="mmr_rb_234_3" type="radio"  value="mmr_rb_234_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_3_5" name="mmr_rb_234_3" type="radio"  value="mmr_rb_234_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_3_6" name="mmr_rb_234_3" type="radio"  value="mmr_rb_234_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se realiza una re-clasificación del incidente cuando sea requerido?</th>
						<td class="td-center"><input id="mmr_rb_234_4_1" name="mmr_rb_234_4" type="radio"  value="mmr_rb_234_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_4_2" name="mmr_rb_234_4" type="radio"  value="mmr_rb_234_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_4_3" name="mmr_rb_234_4" type="radio"  value="mmr_rb_234_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_4_4" name="mmr_rb_234_4" type="radio"  value="mmr_rb_234_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_4_5" name="mmr_rb_234_4" type="radio"  value="mmr_rb_234_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_4_6" name="mmr_rb_234_4" type="radio"  value="mmr_rb_234_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿La fecha registrada de solución está acorde con la fecha de la implementación de la solución?</th>
						<td class="td-center"><input id="mmr_rb_234_5_1" name="mmr_rb_234_5" type="radio"  value="mmr_rb_234_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_5_2" name="mmr_rb_234_5" type="radio"  value="mmr_rb_234_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_5_3" name="mmr_rb_234_5" type="radio"  value="mmr_rb_234_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_5_4" name="mmr_rb_234_5" type="radio"  value="mmr_rb_234_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_5_5" name="mmr_rb_234_5" type="radio"  value="mmr_rb_234_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_5_6" name="mmr_rb_234_5" type="radio"  value="mmr_rb_234_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Una solución temporal que restaure el servicio resuelve el incidente?</th>
						<td class="td-center"><input id="mmr_rb_234_6_1" name="mmr_rb_234_6" type="radio"  value="mmr_rb_234_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_6_2" name="mmr_rb_234_6" type="radio"  value="mmr_rb_234_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_6_3" name="mmr_rb_234_6" type="radio"  value="mmr_rb_234_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_6_4" name="mmr_rb_234_6" type="radio"  value="mmr_rb_234_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_6_5" name="mmr_rb_234_6" type="radio"  value="mmr_rb_234_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_6_6" name="mmr_rb_234_6" type="radio"  value="mmr_rb_234_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existen procedimientos para la solución de un incidente?</th>
						<td class="td-center"><input id="mmr_rb_234_7_1" name="mmr_rb_234_7" type="radio"  value="mmr_rb_234_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_7_2" name="mmr_rb_234_7" type="radio"  value="mmr_rb_234_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_7_3" name="mmr_rb_234_7" type="radio"  value="mmr_rb_234_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_7_4" name="mmr_rb_234_7" type="radio"  value="mmr_rb_234_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_7_5" name="mmr_rb_234_7" type="radio"  value="mmr_rb_234_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_234_7_6" name="mmr_rb_234_7" type="radio"  value="mmr_rb_234_7_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_235" class="panel panel-primary">
		<div id="panel_head_mmr_rb_235" class="panel-heading">
			<h4>Confirmación y Cierre<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_235" class="panel-body">
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
						<th>¿Se categoriza el motivo del cierre (Código de Cierre)?</th>
						<td class="td-center"><input id="mmr_rb_235_1_1" name="mmr_rb_235_1" type="radio"  value="mmr_rb_235_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_1_2" name="mmr_rb_235_1" type="radio"  value="mmr_rb_235_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_1_3" name="mmr_rb_235_1" type="radio"  value="mmr_rb_235_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_1_4" name="mmr_rb_235_1" type="radio"  value="mmr_rb_235_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_1_5" name="mmr_rb_235_1" type="radio"  value="mmr_rb_235_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_1_6" name="mmr_rb_235_1" type="radio"  value="mmr_rb_235_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se verifica la correcta documentación del incidente en cuanto a (Categoría, Clasificación, Descripción, Elemento de Configuración, SLA, Prioridad, Solución, Código de Cierre)?</th>
						<td class="td-center"><input id="mmr_rb_235_2_1" name="mmr_rb_235_2" type="radio"  value="mmr_rb_235_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_2_2" name="mmr_rb_235_2" type="radio"  value="mmr_rb_235_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_2_3" name="mmr_rb_235_2" type="radio"  value="mmr_rb_235_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_2_4" name="mmr_rb_235_2" type="radio"  value="mmr_rb_235_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_2_5" name="mmr_rb_235_2" type="radio"  value="mmr_rb_235_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_2_6" name="mmr_rb_235_2" type="radio"  value="mmr_rb_235_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se identifican los casos que son FAQs?</th>
						<td class="td-center"><input id="mmr_rb_235_3_1" name="mmr_rb_235_3" type="radio"  value="mmr_rb_235_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_3_2" name="mmr_rb_235_3" type="radio"  value="mmr_rb_235_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_3_3" name="mmr_rb_235_3" type="radio"  value="mmr_rb_235_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_3_4" name="mmr_rb_235_3" type="radio"  value="mmr_rb_235_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_3_5" name="mmr_rb_235_3" type="radio"  value="mmr_rb_235_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_3_6" name="mmr_rb_235_3" type="radio"  value="mmr_rb_235_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se identifican nuevas plantillas para documentación de Incidentes y se solicita su creación?</th>
						<td class="td-center"><input id="mmr_rb_235_4_1" name="mmr_rb_235_4" type="radio"  value="mmr_rb_235_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_4_2" name="mmr_rb_235_4" type="radio"  value="mmr_rb_235_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_4_3" name="mmr_rb_235_4" type="radio"  value="mmr_rb_235_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_4_4" name="mmr_rb_235_4" type="radio"  value="mmr_rb_235_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_4_5" name="mmr_rb_235_4" type="radio"  value="mmr_rb_235_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_235_4_6" name="mmr_rb_235_4" type="radio"  value="mmr_rb_235_4_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_236" class="panel panel-primary">
		<div id="panel_head_mmr_rb_236" class="panel-heading">
			<h4>Apropiamiento, Seguimiento y Comunicación<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_236" class="panel-body">
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
						<th>¿Se notifica al service Desk cuando el incidente queda pendiente de una acción de por parte de él?</th>
						<td class="td-center"><input id="mmr_rb_236_1_1" name="mmr_rb_236_1" type="radio"  value="mmr_rb_236_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_1_2" name="mmr_rb_236_1" type="radio"  value="mmr_rb_236_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_1_3" name="mmr_rb_236_1" type="radio"  value="mmr_rb_236_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_1_4" name="mmr_rb_236_1" type="radio"  value="mmr_rb_236_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_1_5" name="mmr_rb_236_1" type="radio"  value="mmr_rb_236_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_1_6" name="mmr_rb_236_1" type="radio"  value="mmr_rb_236_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los reportes de gestión son divulgados al Cliente?</th>
						<td class="td-center"><input id="mmr_rb_236_2_1" name="mmr_rb_236_2" type="radio"  value="mmr_rb_236_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_2_2" name="mmr_rb_236_2" type="radio"  value="mmr_rb_236_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_2_3" name="mmr_rb_236_2" type="radio"  value="mmr_rb_236_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_2_4" name="mmr_rb_236_2" type="radio"  value="mmr_rb_236_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_2_5" name="mmr_rb_236_2" type="radio"  value="mmr_rb_236_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_2_6" name="mmr_rb_236_2" type="radio"  value="mmr_rb_236_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El Incidente Manager detecta y escala fallas del proceso?</th>
						<td class="td-center"><input id="mmr_rb_236_3_1" name="mmr_rb_236_3" type="radio"  value="mmr_rb_236_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_3_2" name="mmr_rb_236_3" type="radio"  value="mmr_rb_236_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_3_3" name="mmr_rb_236_3" type="radio"  value="mmr_rb_236_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_3_4" name="mmr_rb_236_3" type="radio"  value="mmr_rb_236_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_3_5" name="mmr_rb_236_3" type="radio"  value="mmr_rb_236_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_3_6" name="mmr_rb_236_3" type="radio"  value="mmr_rb_236_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se notifica al usuario el cierre del incidente?</th>
						<td class="td-center"><input id="mmr_rb_236_4_1" name="mmr_rb_236_4" type="radio"  value="mmr_rb_236_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_4_2" name="mmr_rb_236_4" type="radio"  value="mmr_rb_236_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_4_3" name="mmr_rb_236_4" type="radio"  value="mmr_rb_236_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_4_4" name="mmr_rb_236_4" type="radio"  value="mmr_rb_236_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_4_5" name="mmr_rb_236_4" type="radio"  value="mmr_rb_236_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_4_6" name="mmr_rb_236_4" type="radio"  value="mmr_rb_236_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los cambios en los alcances de los servicios son notificados a los usuario finales?</th>
						<td class="td-center"><input id="mmr_rb_236_5_1" name="mmr_rb_236_5" type="radio"  value="mmr_rb_236_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_5_2" name="mmr_rb_236_5" type="radio"  value="mmr_rb_236_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_5_3" name="mmr_rb_236_5" type="radio"  value="mmr_rb_236_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_5_4" name="mmr_rb_236_5" type="radio"  value="mmr_rb_236_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_5_5" name="mmr_rb_236_5" type="radio"  value="mmr_rb_236_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_5_6" name="mmr_rb_236_5" type="radio"  value="mmr_rb_236_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los analistas de primer nivel realizan el seguimiento a todos los incidentes desde el registro hasta el cierre?</th>
						<td class="td-center"><input id="mmr_rb_236_6_1" name="mmr_rb_236_6" type="radio"  value="mmr_rb_236_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_6_2" name="mmr_rb_236_6" type="radio"  value="mmr_rb_236_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_6_3" name="mmr_rb_236_6" type="radio"  value="mmr_rb_236_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_6_4" name="mmr_rb_236_6" type="radio"  value="mmr_rb_236_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_6_5" name="mmr_rb_236_6" type="radio"  value="mmr_rb_236_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_6_6" name="mmr_rb_236_6" type="radio"  value="mmr_rb_236_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El cierre de todos los incidentes es realizado con autorización del Incident Manager?</th>
						<td class="td-center"><input id="mmr_rb_236_7_1" name="mmr_rb_236_7" type="radio"  value="mmr_rb_236_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_7_2" name="mmr_rb_236_7" type="radio"  value="mmr_rb_236_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_7_3" name="mmr_rb_236_7" type="radio"  value="mmr_rb_236_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_7_4" name="mmr_rb_236_7" type="radio"  value="mmr_rb_236_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_7_5" name="mmr_rb_236_7" type="radio"  value="mmr_rb_236_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_236_7_6" name="mmr_rb_236_7" type="radio"  value="mmr_rb_236_7_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_237" class="panel panel-primary">
		<div id="panel_head_mmr_rb_237" class="panel-heading">
			<h4>Organización<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_237" class="panel-body">
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
						<th>¿Existe un Dueño de Proceso de Incident Management?</th>
						<td class="td-center"><input id="mmr_rb_237_1_1" name="mmr_rb_237_1" type="radio"  value="mmr_rb_237_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_1_2" name="mmr_rb_237_1" type="radio"  value="mmr_rb_237_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_1_3" name="mmr_rb_237_1" type="radio"  value="mmr_rb_237_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_1_4" name="mmr_rb_237_1" type="radio"  value="mmr_rb_237_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_1_5" name="mmr_rb_237_1" type="radio"  value="mmr_rb_237_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_1_6" name="mmr_rb_237_1" type="radio"  value="mmr_rb_237_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Esta identificado el rol Administrador de Incidentes?</th>
						<td class="td-center"><input id="mmr_rb_237_2_1" name="mmr_rb_237_2" type="radio"  value="mmr_rb_237_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_2_2" name="mmr_rb_237_2" type="radio"  value="mmr_rb_237_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_2_3" name="mmr_rb_237_2" type="radio"  value="mmr_rb_237_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_2_4" name="mmr_rb_237_2" type="radio"  value="mmr_rb_237_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_2_5" name="mmr_rb_237_2" type="radio"  value="mmr_rb_237_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_2_6" name="mmr_rb_237_2" type="radio"  value="mmr_rb_237_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Están identificados los grupos y especialistas solucionadores para todos los servicios soportados?</th>
						<td class="td-center"><input id="mmr_rb_237_3_1" name="mmr_rb_237_3" type="radio"  value="mmr_rb_237_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_3_2" name="mmr_rb_237_3" type="radio"  value="mmr_rb_237_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_3_3" name="mmr_rb_237_3" type="radio"  value="mmr_rb_237_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_3_4" name="mmr_rb_237_3" type="radio"  value="mmr_rb_237_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_3_5" name="mmr_rb_237_3" type="radio"  value="mmr_rb_237_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_3_6" name="mmr_rb_237_3" type="radio"  value="mmr_rb_237_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Está documentada la Matriz de Escalamiento funcional (por Impacto, con Tiempos escalamiento entre niveles) para el proceso de IM?</th>
						<td class="td-center"><input id="mmr_rb_237_4_1" name="mmr_rb_237_4" type="radio"  value="mmr_rb_237_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_4_2" name="mmr_rb_237_4" type="radio"  value="mmr_rb_237_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_4_3" name="mmr_rb_237_4" type="radio"  value="mmr_rb_237_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_4_4" name="mmr_rb_237_4" type="radio"  value="mmr_rb_237_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_4_5" name="mmr_rb_237_4" type="radio"  value="mmr_rb_237_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_4_6" name="mmr_rb_237_4" type="radio"  value="mmr_rb_237_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Está documentada la Matriz de Escalamiento Jerárquico (por Impacto, con Tiempo de escalamiento entre niveles)?</th>
						<td class="td-center"><input id="mmr_rb_237_5_1" name="mmr_rb_237_5" type="radio"  value="mmr_rb_237_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_5_2" name="mmr_rb_237_5" type="radio"  value="mmr_rb_237_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_5_3" name="mmr_rb_237_5" type="radio"  value="mmr_rb_237_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_5_4" name="mmr_rb_237_5" type="radio"  value="mmr_rb_237_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_5_5" name="mmr_rb_237_5" type="radio"  value="mmr_rb_237_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_5_6" name="mmr_rb_237_5" type="radio"  value="mmr_rb_237_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Están identificados los Usuarios Autorizados por Servicio?</th>
						<td class="td-center"><input id="mmr_rb_237_6_1" name="mmr_rb_237_6" type="radio"  value="mmr_rb_237_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_6_2" name="mmr_rb_237_6" type="radio"  value="mmr_rb_237_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_6_3" name="mmr_rb_237_6" type="radio"  value="mmr_rb_237_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_6_4" name="mmr_rb_237_6" type="radio"  value="mmr_rb_237_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_6_5" name="mmr_rb_237_6" type="radio"  value="mmr_rb_237_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_6_6" name="mmr_rb_237_6" type="radio"  value="mmr_rb_237_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Están identificados los usuarios VIPs dentro de la organización del cliente y documentados en la herramienta de gestión?</th>
						<td class="td-center"><input id="mmr_rb_237_7_1" name="mmr_rb_237_7" type="radio"  value="mmr_rb_237_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_7_2" name="mmr_rb_237_7" type="radio"  value="mmr_rb_237_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_7_3" name="mmr_rb_237_7" type="radio"  value="mmr_rb_237_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_7_4" name="mmr_rb_237_7" type="radio"  value="mmr_rb_237_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_7_5" name="mmr_rb_237_7" type="radio"  value="mmr_rb_237_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_7_6" name="mmr_rb_237_7" type="radio"  value="mmr_rb_237_7_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Las responsabilidades de cada rol están definidas y son conocidas por cada persona involucrada?</th>
						<td class="td-center"><input id="mmr_rb_237_8_1" name="mmr_rb_237_8" type="radio"  value="mmr_rb_237_8_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_8_2" name="mmr_rb_237_8" type="radio"  value="mmr_rb_237_8_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_8_3" name="mmr_rb_237_8" type="radio"  value="mmr_rb_237_8_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_8_4" name="mmr_rb_237_8" type="radio"  value="mmr_rb_237_8_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_8_5" name="mmr_rb_237_8" type="radio"  value="mmr_rb_237_8_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_8_6" name="mmr_rb_237_8" type="radio"  value="mmr_rb_237_8_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El Administrador de Incidentes está entrenado en el proceso de Administración de Incidentes y los procesos relacionados?</th>
						<td class="td-center"><input id="mmr_rb_237_9_1" name="mmr_rb_237_9" type="radio"  value="mmr_rb_237_9_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_9_2" name="mmr_rb_237_9" type="radio"  value="mmr_rb_237_9_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_9_3" name="mmr_rb_237_9" type="radio"  value="mmr_rb_237_9_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_9_4" name="mmr_rb_237_9" type="radio"  value="mmr_rb_237_9_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_9_5" name="mmr_rb_237_9" type="radio"  value="mmr_rb_237_9_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_9_6" name="mmr_rb_237_9" type="radio"  value="mmr_rb_237_9_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los analistas y especialistas están entrenados en el proceso de administración de incidentes y los procesos relacionados?</th>
						<td class="td-center"><input id="mmr_rb_237_10_1" name="mmr_rb_237_10" type="radio"  value="mmr_rb_237_10_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_10_2" name="mmr_rb_237_10" type="radio"  value="mmr_rb_237_10_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_10_3" name="mmr_rb_237_10" type="radio"  value="mmr_rb_237_10_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_10_4" name="mmr_rb_237_10" type="radio"  value="mmr_rb_237_10_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_10_5" name="mmr_rb_237_10" type="radio"  value="mmr_rb_237_10_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_10_6" name="mmr_rb_237_10" type="radio"  value="mmr_rb_237_10_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existen métricas de productividad individual para los roles Administrador de Incidentes, Especialistas y Analistas?</th>
						<td class="td-center"><input id="mmr_rb_237_11_1" name="mmr_rb_237_11" type="radio"  value="mmr_rb_237_11_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_11_2" name="mmr_rb_237_11" type="radio"  value="mmr_rb_237_11_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_11_3" name="mmr_rb_237_11" type="radio"  value="mmr_rb_237_11_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_11_4" name="mmr_rb_237_11" type="radio"  value="mmr_rb_237_11_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_11_5" name="mmr_rb_237_11" type="radio"  value="mmr_rb_237_11_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_11_6" name="mmr_rb_237_11" type="radio"  value="mmr_rb_237_11_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El porcentaje de asignación a la administración de incidentes es evaluado para cada rol?</th>
						<td class="td-center"><input id="mmr_rb_237_12_1" name="mmr_rb_237_12" type="radio"  value="mmr_rb_237_12_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_12_2" name="mmr_rb_237_12" type="radio"  value="mmr_rb_237_12_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_12_3" name="mmr_rb_237_12" type="radio"  value="mmr_rb_237_12_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_12_4" name="mmr_rb_237_12" type="radio"  value="mmr_rb_237_12_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_12_5" name="mmr_rb_237_12" type="radio"  value="mmr_rb_237_12_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_12_6" name="mmr_rb_237_12" type="radio"  value="mmr_rb_237_12_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe un plan de carrera para cada rol?</th>
						<td class="td-center"><input id="mmr_rb_237_13_1" name="mmr_rb_237_13" type="radio"  value="mmr_rb_237_13_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_13_2" name="mmr_rb_237_13" type="radio"  value="mmr_rb_237_13_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_13_3" name="mmr_rb_237_13" type="radio"  value="mmr_rb_237_13_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_13_4" name="mmr_rb_237_13" type="radio"  value="mmr_rb_237_13_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_13_5" name="mmr_rb_237_13" type="radio"  value="mmr_rb_237_13_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_13_6" name="mmr_rb_237_13" type="radio"  value="mmr_rb_237_13_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El personal de administración de incidentes está motivado?</th>
						<td class="td-center"><input id="mmr_rb_237_14_1" name="mmr_rb_237_14" type="radio"  value="mmr_rb_237_14_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_14_2" name="mmr_rb_237_14" type="radio"  value="mmr_rb_237_14_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_14_3" name="mmr_rb_237_14" type="radio"  value="mmr_rb_237_14_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_14_4" name="mmr_rb_237_14" type="radio"  value="mmr_rb_237_14_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_14_5" name="mmr_rb_237_14" type="radio"  value="mmr_rb_237_14_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_14_6" name="mmr_rb_237_14" type="radio"  value="mmr_rb_237_14_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se realizan reuniones quincenales con el grupo de IM y los especialistas para dar retroalimentación de la operación de administración de Incidentes?</th>
						<td class="td-center"><input id="mmr_rb_237_15_1" name="mmr_rb_237_15" type="radio"  value="mmr_rb_237_15_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_15_2" name="mmr_rb_237_15" type="radio"  value="mmr_rb_237_15_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_15_3" name="mmr_rb_237_15" type="radio"  value="mmr_rb_237_15_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_15_4" name="mmr_rb_237_15" type="radio"  value="mmr_rb_237_15_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_15_5" name="mmr_rb_237_15" type="radio"  value="mmr_rb_237_15_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_237_15_6" name="mmr_rb_237_15" type="radio"  value="mmr_rb_237_15_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_238" class="panel panel-primary">
		<div id="panel_head_mmr_rb_238" class="panel-heading">
			<h4>Métricas y Reportes<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_238" class="panel-body">
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
						<th>¿Existen métricas de productividad individual para el rol de Administración de Incidentes?</th>
						<td class="td-center"><input id="mmr_rb_238_1_1" name="mmr_rb_238_1" type="radio"  value="mmr_rb_238_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_1_2" name="mmr_rb_238_1" type="radio"  value="mmr_rb_238_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_1_3" name="mmr_rb_238_1" type="radio"  value="mmr_rb_238_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_1_4" name="mmr_rb_238_1" type="radio"  value="mmr_rb_238_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_1_5" name="mmr_rb_238_1" type="radio"  value="mmr_rb_238_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_1_6" name="mmr_rb_238_1" type="radio"  value="mmr_rb_238_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tienen reuniones periódicas para revisar las métricas que existen actualmente?</th>
						<td class="td-center"><input id="mmr_rb_238_2_1" name="mmr_rb_238_2" type="radio"  value="mmr_rb_238_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_2_2" name="mmr_rb_238_2" type="radio"  value="mmr_rb_238_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_2_3" name="mmr_rb_238_2" type="radio"  value="mmr_rb_238_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_2_4" name="mmr_rb_238_2" type="radio"  value="mmr_rb_238_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_2_5" name="mmr_rb_238_2" type="radio"  value="mmr_rb_238_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_2_6" name="mmr_rb_238_2" type="radio"  value="mmr_rb_238_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se analiza la carga laboral para los roles del proceso de Administración de Incidentes regularmente?</th>
						<td class="td-center"><input id="mmr_rb_238_3_1" name="mmr_rb_238_3" type="radio"  value="mmr_rb_238_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_3_2" name="mmr_rb_238_3" type="radio"  value="mmr_rb_238_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_3_3" name="mmr_rb_238_3" type="radio"  value="mmr_rb_238_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_3_4" name="mmr_rb_238_3" type="radio"  value="mmr_rb_238_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_3_5" name="mmr_rb_238_3" type="radio"  value="mmr_rb_238_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_3_6" name="mmr_rb_238_3" type="radio"  value="mmr_rb_238_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tienen estadísticas por número de incidentes identificados mensualmente?</th>
						<td class="td-center"><input id="mmr_rb_238_4_1" name="mmr_rb_238_4" type="radio"  value="mmr_rb_238_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_4_2" name="mmr_rb_238_4" type="radio"  value="mmr_rb_238_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_4_3" name="mmr_rb_238_4" type="radio"  value="mmr_rb_238_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_4_4" name="mmr_rb_238_4" type="radio"  value="mmr_rb_238_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_4_5" name="mmr_rb_238_4" type="radio"  value="mmr_rb_238_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_4_6" name="mmr_rb_238_4" type="radio"  value="mmr_rb_238_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tienen estadísticas por número total de incidentes abiertos?</th>
						<td class="td-center"><input id="mmr_rb_238_5_1" name="mmr_rb_238_5" type="radio"  value="mmr_rb_238_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_5_2" name="mmr_rb_238_5" type="radio"  value="mmr_rb_238_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_5_3" name="mmr_rb_238_5" type="radio"  value="mmr_rb_238_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_5_4" name="mmr_rb_238_5" type="radio"  value="mmr_rb_238_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_5_5" name="mmr_rb_238_5" type="radio"  value="mmr_rb_238_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_5_6" name="mmr_rb_238_5" type="radio"  value="mmr_rb_238_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tienen estadísticas por número de incidentes cerrados mensualmente?</th>
						<td class="td-center"><input id="mmr_rb_238_6_1" name="mmr_rb_238_6" type="radio"  value="mmr_rb_238_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_6_2" name="mmr_rb_238_6" type="radio"  value="mmr_rb_238_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_6_3" name="mmr_rb_238_6" type="radio"  value="mmr_rb_238_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_6_4" name="mmr_rb_238_6" type="radio"  value="mmr_rb_238_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_6_5" name="mmr_rb_238_6" type="radio"  value="mmr_rb_238_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_6_6" name="mmr_rb_238_6" type="radio"  value="mmr_rb_238_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tienen estadísticas por número de incidentes escalados con su owner?</th>
						<td class="td-center"><input id="mmr_rb_238_7_1" name="mmr_rb_238_7" type="radio"  value="mmr_rb_238_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_7_2" name="mmr_rb_238_7" type="radio"  value="mmr_rb_238_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_7_3" name="mmr_rb_238_7" type="radio"  value="mmr_rb_238_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_7_4" name="mmr_rb_238_7" type="radio"  value="mmr_rb_238_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_7_5" name="mmr_rb_238_7" type="radio"  value="mmr_rb_238_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_7_6" name="mmr_rb_238_7" type="radio"  value="mmr_rb_238_7_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tienen estadísticas por número de Requerimientos de Cambios creados por el Administrador de Incidentes para ser evaluados por el Administrador de Cambios?</th>
						<td class="td-center"><input id="mmr_rb_238_8_1" name="mmr_rb_238_8" type="radio"  value="mmr_rb_238_8_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_8_2" name="mmr_rb_238_8" type="radio"  value="mmr_rb_238_8_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_8_3" name="mmr_rb_238_8" type="radio"  value="mmr_rb_238_8_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_8_4" name="mmr_rb_238_8" type="radio"  value="mmr_rb_238_8_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_8_5" name="mmr_rb_238_8" type="radio"  value="mmr_rb_238_8_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_8_6" name="mmr_rb_238_8" type="radio"  value="mmr_rb_238_8_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tienen estadísticas por porcentaje de incidentes que fueron evitados por cumplimiento de labores proactivas?</th>
						<td class="td-center"><input id="mmr_rb_238_9_1" name="mmr_rb_238_9" type="radio"  value="mmr_rb_238_9_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_9_2" name="mmr_rb_238_9" type="radio"  value="mmr_rb_238_9_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_9_3" name="mmr_rb_238_9" type="radio"  value="mmr_rb_238_9_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_9_4" name="mmr_rb_238_9" type="radio"  value="mmr_rb_238_9_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_9_5" name="mmr_rb_238_9" type="radio"  value="mmr_rb_238_9_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_9_6" name="mmr_rb_238_9" type="radio"  value="mmr_rb_238_9_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se trazan metas y objetivos para el proceso de Administración de Incidentes?</th>
						<td class="td-center"><input id="mmr_rb_238_10_1" name="mmr_rb_238_10" type="radio"  value="mmr_rb_238_10_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_10_2" name="mmr_rb_238_10" type="radio"  value="mmr_rb_238_10_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_10_3" name="mmr_rb_238_10" type="radio"  value="mmr_rb_238_10_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_10_4" name="mmr_rb_238_10" type="radio"  value="mmr_rb_238_10_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_10_5" name="mmr_rb_238_10" type="radio"  value="mmr_rb_238_10_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_238_10_6" name="mmr_rb_238_10" type="radio"  value="mmr_rb_238_10_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

		<div class="form-group">
			<div class="row">
				<div class="col col-xs-3"></div>
				<div class="col col-xs-2">
					<button id="enviar" type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp;Enviar</button>
				</div>
				<div class="col col-xs-2">
					<button id="cancelar" type="reset" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span>&nbsp;Limpiar</button>
				</div>
				<div class="col col-xs-2">
					<a href="encuestas.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>&nbsp;Regresar</a>
				</div>
				<div class="col col-xs-3"></div>
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
	<script type="text/javascript" src="javascript/operacion_cuantitativa_actividades_v2.js"></script>
</body>
</html>

