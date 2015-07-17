<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Operación (Relación entre procesos)</title>
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
				<span class="navbar-brand">Operación de los servicios IT (Relación entre procesos) Cuantitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="operacion_cuantitativa_procesos_v2_process.php" method="GET">
			<div class="form-group">
	<div id="panel_mmr_rb_422" class="panel panel-primary">
		<div id="panel_head_mmr_rb_422" class="panel-heading">
			<h4>Service Desk<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_422" class="panel-body">
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
						<th>¿El proceso de service Desk reporta todos los incidentes de forma manual o automática?</th>
						<td class="td-center"><input id="mmr_rb_422_1_1" name="mmr_rb_422_1" type="radio"  value="mmr_rb_422_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_1_2" name="mmr_rb_422_1" type="radio"  value="mmr_rb_422_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_1_3" name="mmr_rb_422_1" type="radio"  value="mmr_rb_422_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_1_4" name="mmr_rb_422_1" type="radio"  value="mmr_rb_422_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_1_5" name="mmr_rb_422_1" type="radio"  value="mmr_rb_422_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_1_6" name="mmr_rb_422_1" type="radio"  value="mmr_rb_422_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El service Desk suministra todos los detalles básicos de los incidentes reportados?</th>
						<td class="td-center"><input id="mmr_rb_422_2_1" name="mmr_rb_422_2" type="radio"  value="mmr_rb_422_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_2_2" name="mmr_rb_422_2" type="radio"  value="mmr_rb_422_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_2_3" name="mmr_rb_422_2" type="radio"  value="mmr_rb_422_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_2_4" name="mmr_rb_422_2" type="radio"  value="mmr_rb_422_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_2_5" name="mmr_rb_422_2" type="radio"  value="mmr_rb_422_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_2_6" name="mmr_rb_422_2" type="radio"  value="mmr_rb_422_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Asigna el impacto y la prioridad inicial a los incidentes que son escalados al grupo de Incident Management?</th>
						<td class="td-center"><input id="mmr_rb_422_3_1" name="mmr_rb_422_3" type="radio"  value="mmr_rb_422_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_3_2" name="mmr_rb_422_3" type="radio"  value="mmr_rb_422_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_3_3" name="mmr_rb_422_3" type="radio"  value="mmr_rb_422_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_3_4" name="mmr_rb_422_3" type="radio"  value="mmr_rb_422_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_3_5" name="mmr_rb_422_3" type="radio"  value="mmr_rb_422_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_3_6" name="mmr_rb_422_3" type="radio"  value="mmr_rb_422_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El service Desk realiza una investigación inicial del incidente?</th>
						<td class="td-center"><input id="mmr_rb_422_4_1" name="mmr_rb_422_4" type="radio"  value="mmr_rb_422_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_4_2" name="mmr_rb_422_4" type="radio"  value="mmr_rb_422_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_4_3" name="mmr_rb_422_4" type="radio"  value="mmr_rb_422_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_4_4" name="mmr_rb_422_4" type="radio"  value="mmr_rb_422_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_4_5" name="mmr_rb_422_4" type="radio"  value="mmr_rb_422_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_4_6" name="mmr_rb_422_4" type="radio"  value="mmr_rb_422_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El service Desk monitorea y escala los incidentes al grupo de Incident Management?</th>
						<td class="td-center"><input id="mmr_rb_422_5_1" name="mmr_rb_422_5" type="radio"  value="mmr_rb_422_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_5_2" name="mmr_rb_422_5" type="radio"  value="mmr_rb_422_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_5_3" name="mmr_rb_422_5" type="radio"  value="mmr_rb_422_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_5_4" name="mmr_rb_422_5" type="radio"  value="mmr_rb_422_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_5_5" name="mmr_rb_422_5" type="radio"  value="mmr_rb_422_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_5_6" name="mmr_rb_422_5" type="radio"  value="mmr_rb_422_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El grupo de service Desk cierra y actualiza el registro de los incidentes solucionados por el grupo de Incident Management?</th>
						<td class="td-center"><input id="mmr_rb_422_6_1" name="mmr_rb_422_6" type="radio"  value="mmr_rb_422_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_6_2" name="mmr_rb_422_6" type="radio"  value="mmr_rb_422_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_6_3" name="mmr_rb_422_6" type="radio"  value="mmr_rb_422_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_6_4" name="mmr_rb_422_6" type="radio"  value="mmr_rb_422_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_6_5" name="mmr_rb_422_6" type="radio"  value="mmr_rb_422_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_6_6" name="mmr_rb_422_6" type="radio"  value="mmr_rb_422_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El service Desk mantiene informado al cliente acerca de los escalamientos que realiza al proceso de Incident Management?</th>
						<td class="td-center"><input id="mmr_rb_422_7_1" name="mmr_rb_422_7" type="radio"  value="mmr_rb_422_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_7_2" name="mmr_rb_422_7" type="radio"  value="mmr_rb_422_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_7_3" name="mmr_rb_422_7" type="radio"  value="mmr_rb_422_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_7_4" name="mmr_rb_422_7" type="radio"  value="mmr_rb_422_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_7_5" name="mmr_rb_422_7" type="radio"  value="mmr_rb_422_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_7_6" name="mmr_rb_422_7" type="radio"  value="mmr_rb_422_7_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El service Desk realiza un soporte de primer nivel de los incidentes reportados?</th>
						<td class="td-center"><input id="mmr_rb_422_8_1" name="mmr_rb_422_8" type="radio"  value="mmr_rb_422_8_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_8_2" name="mmr_rb_422_8" type="radio"  value="mmr_rb_422_8_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_8_3" name="mmr_rb_422_8" type="radio"  value="mmr_rb_422_8_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_8_4" name="mmr_rb_422_8" type="radio"  value="mmr_rb_422_8_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_8_5" name="mmr_rb_422_8" type="radio"  value="mmr_rb_422_8_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_422_8_6" name="mmr_rb_422_8" type="radio"  value="mmr_rb_422_8_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_423" class="panel panel-primary">
		<div id="panel_head_mmr_rb_423" class="panel-heading">
			<h4>Change Management<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_423" class="panel-body">
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
						<th>¿Existe un proceso formal de RFC para la solución de un Incidente (Cambio Urgente) cuando es requerido?</th>
						<td class="td-center"><input id="mmr_rb_423_1_1" name="mmr_rb_423_1" type="radio"  value="mmr_rb_423_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_1_2" name="mmr_rb_423_1" type="radio"  value="mmr_rb_423_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_1_3" name="mmr_rb_423_1" type="radio"  value="mmr_rb_423_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_1_4" name="mmr_rb_423_1" type="radio"  value="mmr_rb_423_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_1_5" name="mmr_rb_423_1" type="radio"  value="mmr_rb_423_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_1_6" name="mmr_rb_423_1" type="radio"  value="mmr_rb_423_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El grupo de IM asigna al proceso de Cambios los requerimientos de Cambio (RFC) solicitados por el usuario para su gestión?</th>
						<td class="td-center"><input id="mmr_rb_423_2_1" name="mmr_rb_423_2" type="radio"  value="mmr_rb_423_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_2_2" name="mmr_rb_423_2" type="radio"  value="mmr_rb_423_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_2_3" name="mmr_rb_423_2" type="radio"  value="mmr_rb_423_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_2_4" name="mmr_rb_423_2" type="radio"  value="mmr_rb_423_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_2_5" name="mmr_rb_423_2" type="radio"  value="mmr_rb_423_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_2_6" name="mmr_rb_423_2" type="radio"  value="mmr_rb_423_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de cambios Notifica al proceso de Administración de Incidentes la programación y ejecución de los cambios solicitados sean urgentes o estándar?</th>
						<td class="td-center"><input id="mmr_rb_423_3_1" name="mmr_rb_423_3" type="radio"  value="mmr_rb_423_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_3_2" name="mmr_rb_423_3" type="radio"  value="mmr_rb_423_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_3_3" name="mmr_rb_423_3" type="radio"  value="mmr_rb_423_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_3_4" name="mmr_rb_423_3" type="radio"  value="mmr_rb_423_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_3_5" name="mmr_rb_423_3" type="radio"  value="mmr_rb_423_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_3_6" name="mmr_rb_423_3" type="radio"  value="mmr_rb_423_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los incidentes causados por cambios implementados son relacionados con el registro de Cambio?</th>
						<td class="td-center"><input id="mmr_rb_423_4_1" name="mmr_rb_423_4" type="radio"  value="mmr_rb_423_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_4_2" name="mmr_rb_423_4" type="radio"  value="mmr_rb_423_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_4_3" name="mmr_rb_423_4" type="radio"  value="mmr_rb_423_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_4_4" name="mmr_rb_423_4" type="radio"  value="mmr_rb_423_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_4_5" name="mmr_rb_423_4" type="radio"  value="mmr_rb_423_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_4_6" name="mmr_rb_423_4" type="radio"  value="mmr_rb_423_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿En el comité de evaluación de cambios críticos se encuentra el Administrador de Incidentes involucrado?</th>
						<td class="td-center"><input id="mmr_rb_423_5_1" name="mmr_rb_423_5" type="radio"  value="mmr_rb_423_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_5_2" name="mmr_rb_423_5" type="radio"  value="mmr_rb_423_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_5_3" name="mmr_rb_423_5" type="radio"  value="mmr_rb_423_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_5_4" name="mmr_rb_423_5" type="radio"  value="mmr_rb_423_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_5_5" name="mmr_rb_423_5" type="radio"  value="mmr_rb_423_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_5_6" name="mmr_rb_423_5" type="radio"  value="mmr_rb_423_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los registros de cambio creados a partir de una llamada de servicio son relacionados con el registro de llamada correspondiente?</th>
						<td class="td-center"><input id="mmr_rb_423_6_1" name="mmr_rb_423_6" type="radio"  value="mmr_rb_423_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_6_2" name="mmr_rb_423_6" type="radio"  value="mmr_rb_423_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_6_3" name="mmr_rb_423_6" type="radio"  value="mmr_rb_423_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_6_4" name="mmr_rb_423_6" type="radio"  value="mmr_rb_423_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_6_5" name="mmr_rb_423_6" type="radio"  value="mmr_rb_423_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_423_6_6" name="mmr_rb_423_6" type="radio"  value="mmr_rb_423_6_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_424" class="panel panel-primary">
		<div id="panel_head_mmr_rb_424" class="panel-heading">
			<h4>Configuration Management<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_424" class="panel-body">
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
						<th>¿Todos los elementos de configuración se encuentran en la base de datos de configuración (CMDB)?</th>
						<td class="td-center"><input id="mmr_rb_424_1_1" name="mmr_rb_424_1" type="radio"  value="mmr_rb_424_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_1_2" name="mmr_rb_424_1" type="radio"  value="mmr_rb_424_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_1_3" name="mmr_rb_424_1" type="radio"  value="mmr_rb_424_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_1_4" name="mmr_rb_424_1" type="radio"  value="mmr_rb_424_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_1_5" name="mmr_rb_424_1" type="radio"  value="mmr_rb_424_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_1_6" name="mmr_rb_424_1" type="radio"  value="mmr_rb_424_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Todos los incidentes están relacionados con su correspondiente elemento de configuración?</th>
						<td class="td-center"><input id="mmr_rb_424_2_1" name="mmr_rb_424_2" type="radio"  value="mmr_rb_424_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_2_2" name="mmr_rb_424_2" type="radio"  value="mmr_rb_424_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_2_3" name="mmr_rb_424_2" type="radio"  value="mmr_rb_424_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_2_4" name="mmr_rb_424_2" type="radio"  value="mmr_rb_424_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_2_5" name="mmr_rb_424_2" type="radio"  value="mmr_rb_424_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_2_6" name="mmr_rb_424_2" type="radio"  value="mmr_rb_424_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Las inconsistencias encontradas en la CMDB por proceso de Administración de Incidentes son reportadas a la administración de Configuración?</th>
						<td class="td-center"><input id="mmr_rb_424_3_1" name="mmr_rb_424_3" type="radio"  value="mmr_rb_424_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_3_2" name="mmr_rb_424_3" type="radio"  value="mmr_rb_424_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_3_3" name="mmr_rb_424_3" type="radio"  value="mmr_rb_424_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_3_4" name="mmr_rb_424_3" type="radio"  value="mmr_rb_424_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_3_5" name="mmr_rb_424_3" type="radio"  value="mmr_rb_424_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_3_6" name="mmr_rb_424_3" type="radio"  value="mmr_rb_424_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿La base de datos de personas se encuentra actualizada?</th>
						<td class="td-center"><input id="mmr_rb_424_4_1" name="mmr_rb_424_4" type="radio"  value="mmr_rb_424_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_4_2" name="mmr_rb_424_4" type="radio"  value="mmr_rb_424_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_4_3" name="mmr_rb_424_4" type="radio"  value="mmr_rb_424_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_4_4" name="mmr_rb_424_4" type="radio"  value="mmr_rb_424_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_4_5" name="mmr_rb_424_4" type="radio"  value="mmr_rb_424_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_4_6" name="mmr_rb_424_4" type="radio"  value="mmr_rb_424_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Las personas registradas en la CMDB están relacionadas con sus elementos de configuración?</th>
						<td class="td-center"><input id="mmr_rb_424_5_1" name="mmr_rb_424_5" type="radio"  value="mmr_rb_424_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_5_2" name="mmr_rb_424_5" type="radio"  value="mmr_rb_424_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_5_3" name="mmr_rb_424_5" type="radio"  value="mmr_rb_424_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_5_4" name="mmr_rb_424_5" type="radio"  value="mmr_rb_424_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_5_5" name="mmr_rb_424_5" type="radio"  value="mmr_rb_424_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_424_5_6" name="mmr_rb_424_5" type="radio"  value="mmr_rb_424_5_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_425" class="panel panel-primary">
		<div id="panel_head_mmr_rb_425" class="panel-heading">
			<h4>Problem Management<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_425" class="panel-body">
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
						<th>¿Todo nuevo error conocido es reportado al proceso de Administración de Incidentes?</th>
						<td class="td-center"><input id="mmr_rb_425_1_1" name="mmr_rb_425_1" type="radio"  value="mmr_rb_425_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_1_2" name="mmr_rb_425_1" type="radio"  value="mmr_rb_425_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_1_3" name="mmr_rb_425_1" type="radio"  value="mmr_rb_425_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_1_4" name="mmr_rb_425_1" type="radio"  value="mmr_rb_425_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_1_5" name="mmr_rb_425_1" type="radio"  value="mmr_rb_425_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_1_6" name="mmr_rb_425_1" type="radio"  value="mmr_rb_425_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe una base de datos de Errores conocidos y Problemas - KEDB?</th>
						<td class="td-center"><input id="mmr_rb_425_2_1" name="mmr_rb_425_2" type="radio"  value="mmr_rb_425_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_2_2" name="mmr_rb_425_2" type="radio"  value="mmr_rb_425_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_2_3" name="mmr_rb_425_2" type="radio"  value="mmr_rb_425_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_2_4" name="mmr_rb_425_2" type="radio"  value="mmr_rb_425_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_2_5" name="mmr_rb_425_2" type="radio"  value="mmr_rb_425_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_2_6" name="mmr_rb_425_2" type="radio"  value="mmr_rb_425_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Todos los errores conocidos contienen una Solución temporal registrada con acceso al proceso de IM?</th>
						<td class="td-center"><input id="mmr_rb_425_3_1" name="mmr_rb_425_3" type="radio"  value="mmr_rb_425_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_3_2" name="mmr_rb_425_3" type="radio"  value="mmr_rb_425_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_3_3" name="mmr_rb_425_3" type="radio"  value="mmr_rb_425_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_3_4" name="mmr_rb_425_3" type="radio"  value="mmr_rb_425_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_3_5" name="mmr_rb_425_3" type="radio"  value="mmr_rb_425_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_3_6" name="mmr_rb_425_3" type="radio"  value="mmr_rb_425_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de Administración de incidentes genera reportes de tendencias para el análisis de problemas?</th>
						<td class="td-center"><input id="mmr_rb_425_4_1" name="mmr_rb_425_4" type="radio"  value="mmr_rb_425_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_4_2" name="mmr_rb_425_4" type="radio"  value="mmr_rb_425_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_4_3" name="mmr_rb_425_4" type="radio"  value="mmr_rb_425_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_4_4" name="mmr_rb_425_4" type="radio"  value="mmr_rb_425_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_4_5" name="mmr_rb_425_4" type="radio"  value="mmr_rb_425_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_4_6" name="mmr_rb_425_4" type="radio"  value="mmr_rb_425_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los incidentes críticos son escalados a la Administración de Problemas?</th>
						<td class="td-center"><input id="mmr_rb_425_5_1" name="mmr_rb_425_5" type="radio"  value="mmr_rb_425_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_5_2" name="mmr_rb_425_5" type="radio"  value="mmr_rb_425_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_5_3" name="mmr_rb_425_5" type="radio"  value="mmr_rb_425_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_5_4" name="mmr_rb_425_5" type="radio"  value="mmr_rb_425_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_5_5" name="mmr_rb_425_5" type="radio"  value="mmr_rb_425_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_5_6" name="mmr_rb_425_5" type="radio"  value="mmr_rb_425_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los incidentes con causa raíz desconocida son escalados a la Administración de Problemas?</th>
						<td class="td-center"><input id="mmr_rb_425_6_1" name="mmr_rb_425_6" type="radio"  value="mmr_rb_425_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_6_2" name="mmr_rb_425_6" type="radio"  value="mmr_rb_425_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_6_3" name="mmr_rb_425_6" type="radio"  value="mmr_rb_425_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_6_4" name="mmr_rb_425_6" type="radio"  value="mmr_rb_425_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_6_5" name="mmr_rb_425_6" type="radio"  value="mmr_rb_425_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_6_6" name="mmr_rb_425_6" type="radio"  value="mmr_rb_425_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Las soluciones temporales son suministradas siempre por la Administración de Problemas?</th>
						<td class="td-center"><input id="mmr_rb_425_7_1" name="mmr_rb_425_7" type="radio"  value="mmr_rb_425_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_7_2" name="mmr_rb_425_7" type="radio"  value="mmr_rb_425_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_7_3" name="mmr_rb_425_7" type="radio"  value="mmr_rb_425_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_7_4" name="mmr_rb_425_7" type="radio"  value="mmr_rb_425_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_7_5" name="mmr_rb_425_7" type="radio"  value="mmr_rb_425_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_7_6" name="mmr_rb_425_7" type="radio"  value="mmr_rb_425_7_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los registros de incidentes se relacionan con los registros de problemas si el incidente corresponde a un Error Conocido o Problema en la infraestructura soportada?</th>
						<td class="td-center"><input id="mmr_rb_425_8_1" name="mmr_rb_425_8" type="radio"  value="mmr_rb_425_8_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_8_2" name="mmr_rb_425_8" type="radio"  value="mmr_rb_425_8_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_8_3" name="mmr_rb_425_8" type="radio"  value="mmr_rb_425_8_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_8_4" name="mmr_rb_425_8" type="radio"  value="mmr_rb_425_8_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_8_5" name="mmr_rb_425_8" type="radio"  value="mmr_rb_425_8_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_8_6" name="mmr_rb_425_8" type="radio"  value="mmr_rb_425_8_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se cuenta con un sistema de gestión del servicio de conocimiento o base de datos de conocimiento para incidentes y soluciones conocidos?</th>
						<td class="td-center"><input id="mmr_rb_425_9_1" name="mmr_rb_425_9" type="radio"  value="mmr_rb_425_9_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_9_2" name="mmr_rb_425_9" type="radio"  value="mmr_rb_425_9_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_9_3" name="mmr_rb_425_9" type="radio"  value="mmr_rb_425_9_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_9_4" name="mmr_rb_425_9" type="radio"  value="mmr_rb_425_9_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_9_5" name="mmr_rb_425_9" type="radio"  value="mmr_rb_425_9_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_9_6" name="mmr_rb_425_9" type="radio"  value="mmr_rb_425_9_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿La base de datos de conocimiento se mantiene actualizada con los incidentes que se presentan?</th>
						<td class="td-center"><input id="mmr_rb_425_10_1" name="mmr_rb_425_10" type="radio"  value="mmr_rb_425_10_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_10_2" name="mmr_rb_425_10" type="radio"  value="mmr_rb_425_10_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_10_3" name="mmr_rb_425_10" type="radio"  value="mmr_rb_425_10_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_10_4" name="mmr_rb_425_10" type="radio"  value="mmr_rb_425_10_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_10_5" name="mmr_rb_425_10" type="radio"  value="mmr_rb_425_10_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_425_10_6" name="mmr_rb_425_10" type="radio"  value="mmr_rb_425_10_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_426" class="panel panel-primary">
		<div id="panel_head_mmr_rb_426" class="panel-heading">
			<h4>Release Management<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_426" class="panel-body">
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
						<th>¿El grupo de Incident Management escala al grupo de Release todos los reportes y logs de error de los usuarios finales por la implementación de un nuevo release?</th>
						<td class="td-center"><input id="mmr_rb_426_1_1" name="mmr_rb_426_1" type="radio"  value="mmr_rb_426_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_426_1_2" name="mmr_rb_426_1" type="radio"  value="mmr_rb_426_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_426_1_3" name="mmr_rb_426_1" type="radio"  value="mmr_rb_426_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_426_1_4" name="mmr_rb_426_1" type="radio"  value="mmr_rb_426_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_426_1_5" name="mmr_rb_426_1" type="radio"  value="mmr_rb_426_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_426_1_6" name="mmr_rb_426_1" type="radio"  value="mmr_rb_426_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El grupo de Incident Management chequea que las implementaciones realizadas por Release sean exitosas ?</th>
						<td class="td-center"><input id="mmr_rb_426_2_1" name="mmr_rb_426_2" type="radio"  value="mmr_rb_426_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_426_2_2" name="mmr_rb_426_2" type="radio"  value="mmr_rb_426_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_426_2_3" name="mmr_rb_426_2" type="radio"  value="mmr_rb_426_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_426_2_4" name="mmr_rb_426_2" type="radio"  value="mmr_rb_426_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_426_2_5" name="mmr_rb_426_2" type="radio"  value="mmr_rb_426_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_426_2_6" name="mmr_rb_426_2" type="radio"  value="mmr_rb_426_2_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_427" class="panel panel-primary">
		<div id="panel_head_mmr_rb_427" class="panel-heading">
			<h4>Availability Management<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_427" class="panel-body">
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
						<th>¿El proceso de availability Management vela por revisar y avisar acerca de pobres diagnósticos en una incidencia, herramientas, scripts, procedimientos que nos son claros para subir un servicio o procedimientos de escalamiento que no son claros?</th>
						<td class="td-center"><input id="mmr_rb_427_1_1" name="mmr_rb_427_1" type="radio"  value="mmr_rb_427_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_1_2" name="mmr_rb_427_1" type="radio"  value="mmr_rb_427_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_1_3" name="mmr_rb_427_1" type="radio"  value="mmr_rb_427_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_1_4" name="mmr_rb_427_1" type="radio"  value="mmr_rb_427_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_1_5" name="mmr_rb_427_1" type="radio"  value="mmr_rb_427_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_1_6" name="mmr_rb_427_1" type="radio"  value="mmr_rb_427_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de Incident Management entrega información al proceso de Availability acerca de la disponibilidad de los niveles de servicio pactados en los SLAs ?</th>
						<td class="td-center"><input id="mmr_rb_427_2_1" name="mmr_rb_427_2" type="radio"  value="mmr_rb_427_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_2_2" name="mmr_rb_427_2" type="radio"  value="mmr_rb_427_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_2_3" name="mmr_rb_427_2" type="radio"  value="mmr_rb_427_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_2_4" name="mmr_rb_427_2" type="radio"  value="mmr_rb_427_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_2_5" name="mmr_rb_427_2" type="radio"  value="mmr_rb_427_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_2_6" name="mmr_rb_427_2" type="radio"  value="mmr_rb_427_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los tiempos muertos de indisponibilidad de un servicio son tratados en conjunto con el proceso de Availability para que este sea menor e impacte menos al usuario?</th>
						<td class="td-center"><input id="mmr_rb_427_3_1" name="mmr_rb_427_3" type="radio"  value="mmr_rb_427_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_3_2" name="mmr_rb_427_3" type="radio"  value="mmr_rb_427_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_3_3" name="mmr_rb_427_3" type="radio"  value="mmr_rb_427_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_3_4" name="mmr_rb_427_3" type="radio"  value="mmr_rb_427_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_3_5" name="mmr_rb_427_3" type="radio"  value="mmr_rb_427_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_427_3_6" name="mmr_rb_427_3" type="radio"  value="mmr_rb_427_3_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_428" class="panel panel-primary">
		<div id="panel_head_mmr_rb_428" class="panel-heading">
			<h4>Capacity Management<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_428" class="panel-body">
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
						<th>¿El proceso de Incident Management proporciona un índice de desempeño al proceso de Capacity, monitoreando los incidentes cuando estos aparecen?</th>
						<td class="td-center"><input id="mmr_rb_428_1_1" name="mmr_rb_428_1" type="radio"  value="mmr_rb_428_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_1_2" name="mmr_rb_428_1" type="radio"  value="mmr_rb_428_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_1_3" name="mmr_rb_428_1" type="radio"  value="mmr_rb_428_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_1_4" name="mmr_rb_428_1" type="radio"  value="mmr_rb_428_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_1_5" name="mmr_rb_428_1" type="radio"  value="mmr_rb_428_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_1_6" name="mmr_rb_428_1" type="radio"  value="mmr_rb_428_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de Capacity proporciona información relacionada con las herramientas de diagnóstico como modelos y scripts de la simulación para solucionar incidentes?</th>
						<td class="td-center"><input id="mmr_rb_428_2_1" name="mmr_rb_428_2" type="radio"  value="mmr_rb_428_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_2_2" name="mmr_rb_428_2" type="radio"  value="mmr_rb_428_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_2_3" name="mmr_rb_428_2" type="radio"  value="mmr_rb_428_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_2_4" name="mmr_rb_428_2" type="radio"  value="mmr_rb_428_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_2_5" name="mmr_rb_428_2" type="radio"  value="mmr_rb_428_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_2_6" name="mmr_rb_428_2" type="radio"  value="mmr_rb_428_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de Incident Management asegura que los incidentes son solucionados dentro de los niveles de capacidad mencionados en los SLAs?</th>
						<td class="td-center"><input id="mmr_rb_428_3_1" name="mmr_rb_428_3" type="radio"  value="mmr_rb_428_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_3_2" name="mmr_rb_428_3" type="radio"  value="mmr_rb_428_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_3_3" name="mmr_rb_428_3" type="radio"  value="mmr_rb_428_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_3_4" name="mmr_rb_428_3" type="radio"  value="mmr_rb_428_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_3_5" name="mmr_rb_428_3" type="radio"  value="mmr_rb_428_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_3_6" name="mmr_rb_428_3" type="radio"  value="mmr_rb_428_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de Incident Management proporciona al proceso de capacidad información acerca de la relación de capacidad de incidentes. Por ejemplo: listados no disponibles debido a la escasez de impresoras, o información no almacenada en discos ?</th>
						<td class="td-center"><input id="mmr_rb_428_4_1" name="mmr_rb_428_4" type="radio"  value="mmr_rb_428_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_4_2" name="mmr_rb_428_4" type="radio"  value="mmr_rb_428_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_4_3" name="mmr_rb_428_4" type="radio"  value="mmr_rb_428_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_4_4" name="mmr_rb_428_4" type="radio"  value="mmr_rb_428_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_4_5" name="mmr_rb_428_4" type="radio"  value="mmr_rb_428_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_428_4_6" name="mmr_rb_428_4" type="radio"  value="mmr_rb_428_4_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_429" class="panel panel-primary">
		<div id="panel_head_mmr_rb_429" class="panel-heading">
			<h4>Continuity Management<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_429" class="panel-body">
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
						<th>¿El grupo de Continuity Management entrega planes de continuidad del negocio (BCP) al proceso de Incident Management?</th>
						<td class="td-center"><input id="mmr_rb_429_1_1" name="mmr_rb_429_1" type="radio"  value="mmr_rb_429_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_429_1_2" name="mmr_rb_429_1" type="radio"  value="mmr_rb_429_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_429_1_3" name="mmr_rb_429_1" type="radio"  value="mmr_rb_429_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_429_1_4" name="mmr_rb_429_1" type="radio"  value="mmr_rb_429_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_429_1_5" name="mmr_rb_429_1" type="radio"  value="mmr_rb_429_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_429_1_6" name="mmr_rb_429_1" type="radio"  value="mmr_rb_429_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de Incident Management se acoge a los lineamientos que tiene el BCP?</th>
						<td class="td-center"><input id="mmr_rb_429_2_1" name="mmr_rb_429_2" type="radio"  value="mmr_rb_429_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_429_2_2" name="mmr_rb_429_2" type="radio"  value="mmr_rb_429_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_429_2_3" name="mmr_rb_429_2" type="radio"  value="mmr_rb_429_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_429_2_4" name="mmr_rb_429_2" type="radio"  value="mmr_rb_429_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_429_2_5" name="mmr_rb_429_2" type="radio"  value="mmr_rb_429_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_429_2_6" name="mmr_rb_429_2" type="radio"  value="mmr_rb_429_2_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_430" class="panel panel-primary">
		<div id="panel_head_mmr_rb_430" class="panel-heading">
			<h4>Financial Management<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_430" class="panel-body">
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
						<th>¿La cantidad de tiempo, esfuerzo y el dinero que se gasta en resolver un incidente proporcionando a su vez Workarounds es registrado en la herramienta en donde se encuentran registrados estos?</th>
						<td class="td-center"><input id="mmr_rb_430_1_1" name="mmr_rb_430_1" type="radio"  value="mmr_rb_430_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_430_1_2" name="mmr_rb_430_1" type="radio"  value="mmr_rb_430_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_430_1_3" name="mmr_rb_430_1" type="radio"  value="mmr_rb_430_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_430_1_4" name="mmr_rb_430_1" type="radio"  value="mmr_rb_430_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_430_1_5" name="mmr_rb_430_1" type="radio"  value="mmr_rb_430_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_430_1_6" name="mmr_rb_430_1" type="radio"  value="mmr_rb_430_1_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_431" class="panel panel-primary">
		<div id="panel_head_mmr_rb_431" class="panel-heading">
			<h4>Service level Management<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_431" class="panel-body">
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
						<th>¿El proceso de IM proporciona reportes que permiten al grupo de niveles de servicio revisar objetivamente y regularmente los SLAs pactados ?</th>
						<td class="td-center"><input id="mmr_rb_431_1_1" name="mmr_rb_431_1" type="radio"  value="mmr_rb_431_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_431_1_2" name="mmr_rb_431_1" type="radio"  value="mmr_rb_431_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_431_1_3" name="mmr_rb_431_1" type="radio"  value="mmr_rb_431_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_431_1_4" name="mmr_rb_431_1" type="radio"  value="mmr_rb_431_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_431_1_5" name="mmr_rb_431_1" type="radio"  value="mmr_rb_431_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_431_1_6" name="mmr_rb_431_1" type="radio"  value="mmr_rb_431_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de IM retroalimenta al proceso de Service Level Management acerca de inconsistencias, incumplimientos o acuerdos no alcanzables de los SLAs, OLAs y UCs?</th>
						<td class="td-center"><input id="mmr_rb_431_2_1" name="mmr_rb_431_2" type="radio"  value="mmr_rb_431_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_431_2_2" name="mmr_rb_431_2" type="radio"  value="mmr_rb_431_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_431_2_3" name="mmr_rb_431_2" type="radio"  value="mmr_rb_431_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_431_2_4" name="mmr_rb_431_2" type="radio"  value="mmr_rb_431_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_431_2_5" name="mmr_rb_431_2" type="radio"  value="mmr_rb_431_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_431_2_6" name="mmr_rb_431_2" type="radio"  value="mmr_rb_431_2_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_432" class="panel panel-primary">
		<div id="panel_head_mmr_rb_432" class="panel-heading">
			<h4>Security Management<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_432" class="panel-body">
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
						<th>¿El proceso de seguridad especifica mediante un documento al proceso de Incident Management las medidas para prevenir incidentes de seguridad?</th>
						<td class="td-center"><input id="mmr_rb_432_1_1" name="mmr_rb_432_1" type="radio"  value="mmr_rb_432_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_1_2" name="mmr_rb_432_1" type="radio"  value="mmr_rb_432_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_1_3" name="mmr_rb_432_1" type="radio"  value="mmr_rb_432_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_1_4" name="mmr_rb_432_1" type="radio"  value="mmr_rb_432_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_1_5" name="mmr_rb_432_1" type="radio"  value="mmr_rb_432_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_1_6" name="mmr_rb_432_1" type="radio"  value="mmr_rb_432_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de Security trabaja en conjunto con el proceso de Incident Management para resolver incidentes de Seguridad?</th>
						<td class="td-center"><input id="mmr_rb_432_2_1" name="mmr_rb_432_2" type="radio"  value="mmr_rb_432_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_2_2" name="mmr_rb_432_2" type="radio"  value="mmr_rb_432_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_2_3" name="mmr_rb_432_2" type="radio"  value="mmr_rb_432_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_2_4" name="mmr_rb_432_2" type="radio"  value="mmr_rb_432_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_2_5" name="mmr_rb_432_2" type="radio"  value="mmr_rb_432_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_2_6" name="mmr_rb_432_2" type="radio"  value="mmr_rb_432_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de Incident management conoce las políticas del manejo de incidentes de seguridad?</th>
						<td class="td-center"><input id="mmr_rb_432_3_1" name="mmr_rb_432_3" type="radio"  value="mmr_rb_432_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_3_2" name="mmr_rb_432_3" type="radio"  value="mmr_rb_432_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_3_3" name="mmr_rb_432_3" type="radio"  value="mmr_rb_432_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_3_4" name="mmr_rb_432_3" type="radio"  value="mmr_rb_432_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_3_5" name="mmr_rb_432_3" type="radio"  value="mmr_rb_432_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_432_3_6" name="mmr_rb_432_3" type="radio"  value="mmr_rb_432_3_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

		<div class="form-group">
			<button id="enviar" type="submit" class="btn btn-primary">Enviar</button>
			<button id="cancelar" type="reset" class="btn btn-primary">Cancelar</button>
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
	<script type="text/javascript" src="javascript/operacion_cuantitativa_procesos_v2.js"></script>
</body>
</html>

