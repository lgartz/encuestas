<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Transición</title>
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
				<span class="navbar-brand">Transición de los Servicios TI - Cuantitativa Version 2</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="transicion_cuantitativa_v2_process.php" method="GET">
			<div class="form-group">
	<div id="panel_mmr_rb_135" class="panel panel-primary">
		<div id="panel_head_mmr_rb_135" class="panel-heading">
			<h4>Activos del Servicio y Gestión de la Configuración<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_135" class="panel-body">
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
						<th>¿Existe una base de datos de configuración (CMDB) debidamente actualizada?</th>
						<td class="td-center"><input id="mmr_rb_135_1_1" name="mmr_rb_135_1" type="radio"  value="mmr_rb_135_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_1_2" name="mmr_rb_135_1" type="radio"  value="mmr_rb_135_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_1_3" name="mmr_rb_135_1" type="radio"  value="mmr_rb_135_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_1_4" name="mmr_rb_135_1" type="radio"  value="mmr_rb_135_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_1_5" name="mmr_rb_135_1" type="radio"  value="mmr_rb_135_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_1_6" name="mmr_rb_135_1" type="radio"  value="mmr_rb_135_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se encuentran debidamente registrados todos los elementos de configuración en la CMDB (hardware, software, documentación, personal de soporte, módulo de software, etc.)?</th>
						<td class="td-center"><input id="mmr_rb_135_2_1" name="mmr_rb_135_2" type="radio"  value="mmr_rb_135_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_2_2" name="mmr_rb_135_2" type="radio"  value="mmr_rb_135_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_2_3" name="mmr_rb_135_2" type="radio"  value="mmr_rb_135_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_2_4" name="mmr_rb_135_2" type="radio"  value="mmr_rb_135_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_2_5" name="mmr_rb_135_2" type="radio"  value="mmr_rb_135_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_2_6" name="mmr_rb_135_2" type="radio"  value="mmr_rb_135_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El sistema de gestión de la configuración permite fácilmente evaluar el impacto de los cambios propuestos?</th>
						<td class="td-center"><input id="mmr_rb_135_3_1" name="mmr_rb_135_3" type="radio"  value="mmr_rb_135_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_3_2" name="mmr_rb_135_3" type="radio"  value="mmr_rb_135_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_3_3" name="mmr_rb_135_3" type="radio"  value="mmr_rb_135_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_3_4" name="mmr_rb_135_3" type="radio"  value="mmr_rb_135_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_3_5" name="mmr_rb_135_3" type="radio"  value="mmr_rb_135_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_3_6" name="mmr_rb_135_3" type="radio"  value="mmr_rb_135_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El sistema de gestión de la configuración es actualizado durante el ciclo de los cambios ejecutados?</th>
						<td class="td-center"><input id="mmr_rb_135_4_1" name="mmr_rb_135_4" type="radio"  value="mmr_rb_135_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_4_2" name="mmr_rb_135_4" type="radio"  value="mmr_rb_135_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_4_3" name="mmr_rb_135_4" type="radio"  value="mmr_rb_135_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_4_4" name="mmr_rb_135_4" type="radio"  value="mmr_rb_135_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_4_5" name="mmr_rb_135_4" type="radio"  value="mmr_rb_135_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_4_6" name="mmr_rb_135_4" type="radio"  value="mmr_rb_135_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El área de TI cuenta con una Biblioteca definitiva de medios- DML donde se almacena las licencias, versiones definitivas y aprobadas de todo el software de los elementos de configuración?</th>
						<td class="td-center"><input id="mmr_rb_135_5_1" name="mmr_rb_135_5" type="radio"  value="mmr_rb_135_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_5_2" name="mmr_rb_135_5" type="radio"  value="mmr_rb_135_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_5_3" name="mmr_rb_135_5" type="radio"  value="mmr_rb_135_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_5_4" name="mmr_rb_135_5" type="radio"  value="mmr_rb_135_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_5_5" name="mmr_rb_135_5" type="radio"  value="mmr_rb_135_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_5_6" name="mmr_rb_135_5" type="radio"  value="mmr_rb_135_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿La DML se encuentra en un lugar seguro y su acceso es controlado de forma lógica y física?</th>
						<td class="td-center"><input id="mmr_rb_135_6_1" name="mmr_rb_135_6" type="radio"  value="mmr_rb_135_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_6_2" name="mmr_rb_135_6" type="radio"  value="mmr_rb_135_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_6_3" name="mmr_rb_135_6" type="radio"  value="mmr_rb_135_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_6_4" name="mmr_rb_135_6" type="radio"  value="mmr_rb_135_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_6_5" name="mmr_rb_135_6" type="radio"  value="mmr_rb_135_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_135_6_6" name="mmr_rb_135_6" type="radio"  value="mmr_rb_135_6_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_136" class="panel panel-primary">
		<div id="panel_head_mmr_rb_136" class="panel-heading">
			<h4>Gestión de implementación y versión<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_136" class="panel-body">
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
						<th>¿Hay planes claros y compresibles de la versión e implantación para minimizar el impacto sobre la operación de los servicios?</th>
						<td class="td-center"><input id="mmr_rb_136_1_1" name="mmr_rb_136_1" type="radio"  value="mmr_rb_136_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_1_2" name="mmr_rb_136_1" type="radio"  value="mmr_rb_136_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_1_3" name="mmr_rb_136_1" type="radio"  value="mmr_rb_136_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_1_4" name="mmr_rb_136_1" type="radio"  value="mmr_rb_136_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_1_5" name="mmr_rb_136_1" type="radio"  value="mmr_rb_136_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_1_6" name="mmr_rb_136_1" type="radio"  value="mmr_rb_136_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tiene definido el rol del Gestor de implementación y Versión?</th>
						<td class="td-center"><input id="mmr_rb_136_2_1" name="mmr_rb_136_2" type="radio"  value="mmr_rb_136_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_2_2" name="mmr_rb_136_2" type="radio"  value="mmr_rb_136_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_2_3" name="mmr_rb_136_2" type="radio"  value="mmr_rb_136_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_2_4" name="mmr_rb_136_2" type="radio"  value="mmr_rb_136_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_2_5" name="mmr_rb_136_2" type="radio"  value="mmr_rb_136_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_2_6" name="mmr_rb_136_2" type="radio"  value="mmr_rb_136_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existen herramientas o procesos definidos para la distribución y actualización de software?</th>
						<td class="td-center"><input id="mmr_rb_136_3_1" name="mmr_rb_136_3" type="radio"  value="mmr_rb_136_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_3_2" name="mmr_rb_136_3" type="radio"  value="mmr_rb_136_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_3_3" name="mmr_rb_136_3" type="radio"  value="mmr_rb_136_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_3_4" name="mmr_rb_136_3" type="radio"  value="mmr_rb_136_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_3_5" name="mmr_rb_136_3" type="radio"  value="mmr_rb_136_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_136_3_6" name="mmr_rb_136_3" type="radio"  value="mmr_rb_136_3_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_137" class="panel panel-primary">
		<div id="panel_head_mmr_rb_137" class="panel-heading">
			<h4>Gestión de cambio<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_137" class="panel-body">
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
						<th>¿Está definido el proceso de gestión del cambio y el rol del gestor del cambio?</th>
						<td class="td-center"><input id="mmr_rb_137_1_1" name="mmr_rb_137_1" type="radio"  value="mmr_rb_137_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_1_2" name="mmr_rb_137_1" type="radio"  value="mmr_rb_137_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_1_3" name="mmr_rb_137_1" type="radio"  value="mmr_rb_137_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_1_4" name="mmr_rb_137_1" type="radio"  value="mmr_rb_137_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_1_5" name="mmr_rb_137_1" type="radio"  value="mmr_rb_137_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_1_6" name="mmr_rb_137_1" type="radio"  value="mmr_rb_137_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe comité del cambio que evalúa el impacto del cambio y hace toda la gestión de control del mismo?</th>
						<td class="td-center"><input id="mmr_rb_137_2_1" name="mmr_rb_137_2" type="radio"  value="mmr_rb_137_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_2_2" name="mmr_rb_137_2" type="radio"  value="mmr_rb_137_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_2_3" name="mmr_rb_137_2" type="radio"  value="mmr_rb_137_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_2_4" name="mmr_rb_137_2" type="radio"  value="mmr_rb_137_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_2_5" name="mmr_rb_137_2" type="radio"  value="mmr_rb_137_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_2_6" name="mmr_rb_137_2" type="radio"  value="mmr_rb_137_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los cambios están categorizados (Estándar, normal, emergencia)?</th>
						<td class="td-center"><input id="mmr_rb_137_3_1" name="mmr_rb_137_3" type="radio"  value="mmr_rb_137_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_3_2" name="mmr_rb_137_3" type="radio"  value="mmr_rb_137_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_3_3" name="mmr_rb_137_3" type="radio"  value="mmr_rb_137_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_3_4" name="mmr_rb_137_3" type="radio"  value="mmr_rb_137_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_3_5" name="mmr_rb_137_3" type="radio"  value="mmr_rb_137_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_3_6" name="mmr_rb_137_3" type="radio"  value="mmr_rb_137_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los cambios son registrados y revisados por el comité en un formato estándar?</th>
						<td class="td-center"><input id="mmr_rb_137_4_1" name="mmr_rb_137_4" type="radio"  value="mmr_rb_137_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_4_2" name="mmr_rb_137_4" type="radio"  value="mmr_rb_137_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_4_3" name="mmr_rb_137_4" type="radio"  value="mmr_rb_137_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_4_4" name="mmr_rb_137_4" type="radio"  value="mmr_rb_137_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_4_5" name="mmr_rb_137_4" type="radio"  value="mmr_rb_137_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_4_6" name="mmr_rb_137_4" type="radio"  value="mmr_rb_137_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El comité evalúa el impacto de los cambios y la relación con otros?</th>
						<td class="td-center"><input id="mmr_rb_137_5_1" name="mmr_rb_137_5" type="radio"  value="mmr_rb_137_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_5_2" name="mmr_rb_137_5" type="radio"  value="mmr_rb_137_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_5_3" name="mmr_rb_137_5" type="radio"  value="mmr_rb_137_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_5_4" name="mmr_rb_137_5" type="radio"  value="mmr_rb_137_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_5_5" name="mmr_rb_137_5" type="radio"  value="mmr_rb_137_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_5_6" name="mmr_rb_137_5" type="radio"  value="mmr_rb_137_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El comité del cambio exige autorización de las ventanas de mantenimiento de las áreas del negocio para la ejecución de los cambios, con el fin de coordinar las actividades, de tal forma que afecten lo menos posible la operación?</th>
						<td class="td-center"><input id="mmr_rb_137_6_1" name="mmr_rb_137_6" type="radio"  value="mmr_rb_137_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_6_2" name="mmr_rb_137_6" type="radio"  value="mmr_rb_137_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_6_3" name="mmr_rb_137_6" type="radio"  value="mmr_rb_137_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_6_4" name="mmr_rb_137_6" type="radio"  value="mmr_rb_137_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_6_5" name="mmr_rb_137_6" type="radio"  value="mmr_rb_137_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_6_6" name="mmr_rb_137_6" type="radio"  value="mmr_rb_137_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de gestión del cambio esta diseñado y planeado en relación con la implementación y versión, con los procesos de activos de servicio y gestión de la configuración?</th>
						<td class="td-center"><input id="mmr_rb_137_7_1" name="mmr_rb_137_7" type="radio"  value="mmr_rb_137_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_7_2" name="mmr_rb_137_7" type="radio"  value="mmr_rb_137_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_7_3" name="mmr_rb_137_7" type="radio"  value="mmr_rb_137_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_7_4" name="mmr_rb_137_7" type="radio"  value="mmr_rb_137_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_7_5" name="mmr_rb_137_7" type="radio"  value="mmr_rb_137_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_7_6" name="mmr_rb_137_7" type="radio"  value="mmr_rb_137_7_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Al comité del cambio asiste los expertos de cada área para evaluar el impacto y riesgos de lo cambios a ejecutar?</th>
						<td class="td-center"><input id="mmr_rb_137_8_1" name="mmr_rb_137_8" type="radio"  value="mmr_rb_137_8_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_8_2" name="mmr_rb_137_8" type="radio"  value="mmr_rb_137_8_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_8_3" name="mmr_rb_137_8" type="radio"  value="mmr_rb_137_8_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_8_4" name="mmr_rb_137_8" type="radio"  value="mmr_rb_137_8_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_8_5" name="mmr_rb_137_8" type="radio"  value="mmr_rb_137_8_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_8_6" name="mmr_rb_137_8" type="radio"  value="mmr_rb_137_8_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se exige que los cambios tengan planes de retorno (rollback)?</th>
						<td class="td-center"><input id="mmr_rb_137_9_1" name="mmr_rb_137_9" type="radio"  value="mmr_rb_137_9_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_9_2" name="mmr_rb_137_9" type="radio"  value="mmr_rb_137_9_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_9_3" name="mmr_rb_137_9" type="radio"  value="mmr_rb_137_9_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_9_4" name="mmr_rb_137_9" type="radio"  value="mmr_rb_137_9_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_9_5" name="mmr_rb_137_9" type="radio"  value="mmr_rb_137_9_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_9_6" name="mmr_rb_137_9" type="radio"  value="mmr_rb_137_9_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El gestor o comité de cambio filtra los cambios que han sido rechazados, incompletos o en revisión?</th>
						<td class="td-center"><input id="mmr_rb_137_10_1" name="mmr_rb_137_10" type="radio"  value="mmr_rb_137_10_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_10_2" name="mmr_rb_137_10" type="radio"  value="mmr_rb_137_10_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_10_3" name="mmr_rb_137_10" type="radio"  value="mmr_rb_137_10_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_10_4" name="mmr_rb_137_10" type="radio"  value="mmr_rb_137_10_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_10_5" name="mmr_rb_137_10" type="radio"  value="mmr_rb_137_10_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_10_6" name="mmr_rb_137_10" type="radio"  value="mmr_rb_137_10_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Para cualquier cambio de servicios o infraestructura, se obtiene una autorización formal de la autoridad de cambio, que puede ser un rol, persona o grupo de personas?</th>
						<td class="td-center"><input id="mmr_rb_137_11_1" name="mmr_rb_137_11" type="radio"  value="mmr_rb_137_11_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_11_2" name="mmr_rb_137_11" type="radio"  value="mmr_rb_137_11_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_11_3" name="mmr_rb_137_11" type="radio"  value="mmr_rb_137_11_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_11_4" name="mmr_rb_137_11" type="radio"  value="mmr_rb_137_11_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_11_5" name="mmr_rb_137_11" type="radio"  value="mmr_rb_137_11_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_11_6" name="mmr_rb_137_11" type="radio"  value="mmr_rb_137_11_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se realiza una revisión post implementación de los cambios realizados para validar que el cambio haya logrado sus objetivos y no existan efectos secundarios inesperados?</th>
						<td class="td-center"><input id="mmr_rb_137_12_1" name="mmr_rb_137_12" type="radio"  value="mmr_rb_137_12_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_12_2" name="mmr_rb_137_12" type="radio"  value="mmr_rb_137_12_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_12_3" name="mmr_rb_137_12" type="radio"  value="mmr_rb_137_12_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_12_4" name="mmr_rb_137_12" type="radio"  value="mmr_rb_137_12_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_12_5" name="mmr_rb_137_12" type="radio"  value="mmr_rb_137_12_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_12_6" name="mmr_rb_137_12" type="radio"  value="mmr_rb_137_12_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tienen definidos indicadores clave de rendimiento (KPI's) para la gestión del cambio?</th>
						<td class="td-center"><input id="mmr_rb_137_13_1" name="mmr_rb_137_13" type="radio"  value="mmr_rb_137_13_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_13_2" name="mmr_rb_137_13" type="radio"  value="mmr_rb_137_13_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_13_3" name="mmr_rb_137_13" type="radio"  value="mmr_rb_137_13_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_13_4" name="mmr_rb_137_13" type="radio"  value="mmr_rb_137_13_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_13_5" name="mmr_rb_137_13" type="radio"  value="mmr_rb_137_13_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_13_6" name="mmr_rb_137_13" type="radio"  value="mmr_rb_137_13_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe cultura de Gestión del Cambio a lo largo de la organización, donde no este permitidos los cambios no autorizados?</th>
						<td class="td-center"><input id="mmr_rb_137_14_1" name="mmr_rb_137_14" type="radio"  value="mmr_rb_137_14_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_14_2" name="mmr_rb_137_14" type="radio"  value="mmr_rb_137_14_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_14_3" name="mmr_rb_137_14" type="radio"  value="mmr_rb_137_14_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_14_4" name="mmr_rb_137_14" type="radio"  value="mmr_rb_137_14_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_14_5" name="mmr_rb_137_14" type="radio"  value="mmr_rb_137_14_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_137_14_6" name="mmr_rb_137_14" type="radio"  value="mmr_rb_137_14_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_138" class="panel panel-primary">
		<div id="panel_head_mmr_rb_138" class="panel-heading">
			<h4>Pruebas<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_138" class="panel-body">
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
						<th>¿Se cuenta con procesos de pruebas para la implementación de los componentes de servicios próximos a entrar en ambiente de producción?</th>
						<td class="td-center"><input id="mmr_rb_138_1_1" name="mmr_rb_138_1" type="radio"  value="mmr_rb_138_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_1_2" name="mmr_rb_138_1" type="radio"  value="mmr_rb_138_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_1_3" name="mmr_rb_138_1" type="radio"  value="mmr_rb_138_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_1_4" name="mmr_rb_138_1" type="radio"  value="mmr_rb_138_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_1_5" name="mmr_rb_138_1" type="radio"  value="mmr_rb_138_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_1_6" name="mmr_rb_138_1" type="radio"  value="mmr_rb_138_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Si se cumple con los criterios de aceptación de servicio, se realiza una validación del rendimiento del servicio para el cumplimiento de los acuerdos de niveles de servicio, una vez puesto en producción?</th>
						<td class="td-center"><input id="mmr_rb_138_2_1" name="mmr_rb_138_2" type="radio"  value="mmr_rb_138_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_2_2" name="mmr_rb_138_2" type="radio"  value="mmr_rb_138_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_2_3" name="mmr_rb_138_2" type="radio"  value="mmr_rb_138_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_2_4" name="mmr_rb_138_2" type="radio"  value="mmr_rb_138_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_2_5" name="mmr_rb_138_2" type="radio"  value="mmr_rb_138_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_2_6" name="mmr_rb_138_2" type="radio"  value="mmr_rb_138_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Para el despliegue de un servicio nuevo se evalúa previamente la preparación y disponibilidad de los recursos (humanos, tecnológicos, stakeholders, etc)?</th>
						<td class="td-center"><input id="mmr_rb_138_3_1" name="mmr_rb_138_3" type="radio"  value="mmr_rb_138_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_3_2" name="mmr_rb_138_3" type="radio"  value="mmr_rb_138_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_3_3" name="mmr_rb_138_3" type="radio"  value="mmr_rb_138_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_3_4" name="mmr_rb_138_3" type="radio"  value="mmr_rb_138_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_3_5" name="mmr_rb_138_3" type="radio"  value="mmr_rb_138_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_3_6" name="mmr_rb_138_3" type="radio"  value="mmr_rb_138_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los componentes son probados aisladamente para validar que son entregados según las especificaciones para generar los resultados esperados?</th>
						<td class="td-center"><input id="mmr_rb_138_4_1" name="mmr_rb_138_4" type="radio"  value="mmr_rb_138_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_4_2" name="mmr_rb_138_4" type="radio"  value="mmr_rb_138_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_4_3" name="mmr_rb_138_4" type="radio"  value="mmr_rb_138_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_4_4" name="mmr_rb_138_4" type="radio"  value="mmr_rb_138_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_4_5" name="mmr_rb_138_4" type="radio"  value="mmr_rb_138_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_4_6" name="mmr_rb_138_4" type="radio"  value="mmr_rb_138_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tiene registro de la evidencia de pruebas de los componentes y servicios?</th>
						<td class="td-center"><input id="mmr_rb_138_5_1" name="mmr_rb_138_5" type="radio"  value="mmr_rb_138_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_5_2" name="mmr_rb_138_5" type="radio"  value="mmr_rb_138_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_5_3" name="mmr_rb_138_5" type="radio"  value="mmr_rb_138_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_5_4" name="mmr_rb_138_5" type="radio"  value="mmr_rb_138_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_5_5" name="mmr_rb_138_5" type="radio"  value="mmr_rb_138_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_138_5_6" name="mmr_rb_138_5" type="radio"  value="mmr_rb_138_5_6" class="form-control"></td>
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
	<script type="text/javascript" src="javascript/transicion_cuantitativa_v2.js"></script>
</body>
</html>

