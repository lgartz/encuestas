<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Diseño</title>
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
				<span class="navbar-brand">Diseño de los Servicios TI - Cuantitativa Version 2</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="disenio_cuantitativa_v2_process.php" method="GET">
			<div class="form-group">
	<div id="panel_mmr_rb_60" class="panel panel-primary">
		<div id="panel_head_mmr_rb_60" class="panel-heading">
			<h4>Gestión de los proveedores<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_60" class="panel-body">
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
						<th>¿Existe una base de datos de proveedores y contratos?</th>
						<td class="td-center"><input id="mmr_rb_60_1_1" name="mmr_rb_60_1" type="radio"  value="mmr_rb_60_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_1_2" name="mmr_rb_60_1" type="radio"  value="mmr_rb_60_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_1_3" name="mmr_rb_60_1" type="radio"  value="mmr_rb_60_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_1_4" name="mmr_rb_60_1" type="radio"  value="mmr_rb_60_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_1_5" name="mmr_rb_60_1" type="radio"  value="mmr_rb_60_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_1_6" name="mmr_rb_60_1" type="radio"  value="mmr_rb_60_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Está definido el procesos de selección y contratación de servicios de TI?</th>
						<td class="td-center"><input id="mmr_rb_60_2_1" name="mmr_rb_60_2" type="radio"  value="mmr_rb_60_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_2_2" name="mmr_rb_60_2" type="radio"  value="mmr_rb_60_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_2_3" name="mmr_rb_60_2" type="radio"  value="mmr_rb_60_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_2_4" name="mmr_rb_60_2" type="radio"  value="mmr_rb_60_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_2_5" name="mmr_rb_60_2" type="radio"  value="mmr_rb_60_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_2_6" name="mmr_rb_60_2" type="radio"  value="mmr_rb_60_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se realiza un procesos de seguimiento y medición del comportamiento de los proveedores basados en métricas de desempeño?</th>
						<td class="td-center"><input id="mmr_rb_60_3_1" name="mmr_rb_60_3" type="radio"  value="mmr_rb_60_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_3_2" name="mmr_rb_60_3" type="radio"  value="mmr_rb_60_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_3_3" name="mmr_rb_60_3" type="radio"  value="mmr_rb_60_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_3_4" name="mmr_rb_60_3" type="radio"  value="mmr_rb_60_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_3_5" name="mmr_rb_60_3" type="radio"  value="mmr_rb_60_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_3_6" name="mmr_rb_60_3" type="radio"  value="mmr_rb_60_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los proveedores se categorizan por valor de importancia contra riesgo e impacto (estratégicos, tácticos, mecánica, operacionales)?</th>
						<td class="td-center"><input id="mmr_rb_60_4_1" name="mmr_rb_60_4" type="radio"  value="mmr_rb_60_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_4_2" name="mmr_rb_60_4" type="radio"  value="mmr_rb_60_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_4_3" name="mmr_rb_60_4" type="radio"  value="mmr_rb_60_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_4_4" name="mmr_rb_60_4" type="radio"  value="mmr_rb_60_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_4_5" name="mmr_rb_60_4" type="radio"  value="mmr_rb_60_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_4_6" name="mmr_rb_60_4" type="radio"  value="mmr_rb_60_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El proceso de compras está alineado con la estrategia, procesos, términos estándar y condiciones de los abastecimientos corporativos?</th>
						<td class="td-center"><input id="mmr_rb_60_5_1" name="mmr_rb_60_5" type="radio"  value="mmr_rb_60_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_5_2" name="mmr_rb_60_5" type="radio"  value="mmr_rb_60_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_5_3" name="mmr_rb_60_5" type="radio"  value="mmr_rb_60_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_5_4" name="mmr_rb_60_5" type="radio"  value="mmr_rb_60_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_5_5" name="mmr_rb_60_5" type="radio"  value="mmr_rb_60_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_60_5_6" name="mmr_rb_60_5" type="radio"  value="mmr_rb_60_5_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_61" class="panel panel-primary">
		<div id="panel_head_mmr_rb_61" class="panel-heading">
			<h4>Gestión de la capacidad<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_61" class="panel-body">
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
						<th>¿Existen métricas definidas para medir la eficiencia de los procesos de servicio?</th>
						<td class="td-center"><input id="mmr_rb_61_1_1" name="mmr_rb_61_1" type="radio"  value="mmr_rb_61_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_1_2" name="mmr_rb_61_1" type="radio"  value="mmr_rb_61_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_1_3" name="mmr_rb_61_1" type="radio"  value="mmr_rb_61_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_1_4" name="mmr_rb_61_1" type="radio"  value="mmr_rb_61_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_1_5" name="mmr_rb_61_1" type="radio"  value="mmr_rb_61_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_1_6" name="mmr_rb_61_1" type="radio"  value="mmr_rb_61_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se implementan medidas proactivas para mejorar el rendimiento de los servicios?</th>
						<td class="td-center"><input id="mmr_rb_61_2_1" name="mmr_rb_61_2" type="radio"  value="mmr_rb_61_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_2_2" name="mmr_rb_61_2" type="radio"  value="mmr_rb_61_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_2_3" name="mmr_rb_61_2" type="radio"  value="mmr_rb_61_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_2_4" name="mmr_rb_61_2" type="radio"  value="mmr_rb_61_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_2_5" name="mmr_rb_61_2" type="radio"  value="mmr_rb_61_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_2_6" name="mmr_rb_61_2" type="radio"  value="mmr_rb_61_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tiene definido un plan de capacidad que refleje las necesidades actuales y futuras?</th>
						<td class="td-center"><input id="mmr_rb_61_3_1" name="mmr_rb_61_3" type="radio"  value="mmr_rb_61_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_3_2" name="mmr_rb_61_3" type="radio"  value="mmr_rb_61_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_3_3" name="mmr_rb_61_3" type="radio"  value="mmr_rb_61_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_3_4" name="mmr_rb_61_3" type="radio"  value="mmr_rb_61_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_3_5" name="mmr_rb_61_3" type="radio"  value="mmr_rb_61_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_3_6" name="mmr_rb_61_3" type="radio"  value="mmr_rb_61_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿La planeación tecnológica se realiza basados en la capacidad actual y futura de los servicios de TI?</th>
						<td class="td-center"><input id="mmr_rb_61_4_1" name="mmr_rb_61_4" type="radio"  value="mmr_rb_61_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_4_2" name="mmr_rb_61_4" type="radio"  value="mmr_rb_61_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_4_3" name="mmr_rb_61_4" type="radio"  value="mmr_rb_61_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_4_4" name="mmr_rb_61_4" type="radio"  value="mmr_rb_61_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_4_5" name="mmr_rb_61_4" type="radio"  value="mmr_rb_61_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_4_6" name="mmr_rb_61_4" type="radio"  value="mmr_rb_61_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se lleva un registro y se realiza análisis del monitoreo del rendimiento de los servicios, para asegurar una capacidad adecuada de TI para alcanzar los niveles de servicio satisfactorio de los clientes?</th>
						<td class="td-center"><input id="mmr_rb_61_5_1" name="mmr_rb_61_5" type="radio"  value="mmr_rb_61_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_5_2" name="mmr_rb_61_5" type="radio"  value="mmr_rb_61_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_5_3" name="mmr_rb_61_5" type="radio"  value="mmr_rb_61_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_5_4" name="mmr_rb_61_5" type="radio"  value="mmr_rb_61_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_5_5" name="mmr_rb_61_5" type="radio"  value="mmr_rb_61_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_5_6" name="mmr_rb_61_5" type="radio"  value="mmr_rb_61_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Está definido y documentado la máxima capacidad actual de cada componente?</th>
						<td class="td-center"><input id="mmr_rb_61_6_1" name="mmr_rb_61_6" type="radio"  value="mmr_rb_61_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_6_2" name="mmr_rb_61_6" type="radio"  value="mmr_rb_61_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_6_3" name="mmr_rb_61_6" type="radio"  value="mmr_rb_61_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_6_4" name="mmr_rb_61_6" type="radio"  value="mmr_rb_61_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_6_5" name="mmr_rb_61_6" type="radio"  value="mmr_rb_61_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_61_6_6" name="mmr_rb_61_6" type="radio"  value="mmr_rb_61_6_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_62" class="panel panel-primary">
		<div id="panel_head_mmr_rb_62" class="panel-heading">
			<h4>Gestión  de la continuidad de los servicios de TI<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_62" class="panel-body">
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
						<th>¿Los planes de continuidad y recuperación de servicios de TI están documentados, actualizados y probados?</th>
						<td class="td-center"><input id="mmr_rb_62_1_1" name="mmr_rb_62_1" type="radio"  value="mmr_rb_62_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_1_2" name="mmr_rb_62_1" type="radio"  value="mmr_rb_62_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_1_3" name="mmr_rb_62_1" type="radio"  value="mmr_rb_62_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_1_4" name="mmr_rb_62_1" type="radio"  value="mmr_rb_62_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_1_5" name="mmr_rb_62_1" type="radio"  value="mmr_rb_62_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_1_6" name="mmr_rb_62_1" type="radio"  value="mmr_rb_62_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se realiza con frecuencia un análisis de riesgos e impacto del negocio para asegurar que los planes de continuidad permitan mantener la operación del mismo ?</th>
						<td class="td-center"><input id="mmr_rb_62_2_1" name="mmr_rb_62_2" type="radio"  value="mmr_rb_62_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_2_2" name="mmr_rb_62_2" type="radio"  value="mmr_rb_62_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_2_3" name="mmr_rb_62_2" type="radio"  value="mmr_rb_62_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_2_4" name="mmr_rb_62_2" type="radio"  value="mmr_rb_62_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_2_5" name="mmr_rb_62_2" type="radio"  value="mmr_rb_62_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_2_6" name="mmr_rb_62_2" type="radio"  value="mmr_rb_62_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se asesora a las demás áreas del negocio sobre gestión del riesgo y asuntos relacionados con la continuidad y recuperación?</th>
						<td class="td-center"><input id="mmr_rb_62_3_1" name="mmr_rb_62_3" type="radio"  value="mmr_rb_62_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_3_2" name="mmr_rb_62_3" type="radio"  value="mmr_rb_62_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_3_3" name="mmr_rb_62_3" type="radio"  value="mmr_rb_62_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_3_4" name="mmr_rb_62_3" type="radio"  value="mmr_rb_62_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_3_5" name="mmr_rb_62_3" type="radio"  value="mmr_rb_62_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_3_6" name="mmr_rb_62_3" type="radio"  value="mmr_rb_62_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe presupuesto asignado a los planes de continuidad?</th>
						<td class="td-center"><input id="mmr_rb_62_4_1" name="mmr_rb_62_4" type="radio"  value="mmr_rb_62_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_4_2" name="mmr_rb_62_4" type="radio"  value="mmr_rb_62_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_4_3" name="mmr_rb_62_4" type="radio"  value="mmr_rb_62_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_4_4" name="mmr_rb_62_4" type="radio"  value="mmr_rb_62_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_4_5" name="mmr_rb_62_4" type="radio"  value="mmr_rb_62_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_4_6" name="mmr_rb_62_4" type="radio"  value="mmr_rb_62_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe un plan de comunicación, educación, concientización y entrenamientos del plan de continuidad hacia las áreas ?</th>
						<td class="td-center"><input id="mmr_rb_62_5_1" name="mmr_rb_62_5" type="radio"  value="mmr_rb_62_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_5_2" name="mmr_rb_62_5" type="radio"  value="mmr_rb_62_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_5_3" name="mmr_rb_62_5" type="radio"  value="mmr_rb_62_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_5_4" name="mmr_rb_62_5" type="radio"  value="mmr_rb_62_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_5_5" name="mmr_rb_62_5" type="radio"  value="mmr_rb_62_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_62_5_6" name="mmr_rb_62_5" type="radio"  value="mmr_rb_62_5_6" class="form-control"></td>
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
	<script type="text/javascript" src="javascript/disenio_cuantitativa_v2.js"></script>
</body>
</html>

