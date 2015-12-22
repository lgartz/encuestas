<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Estrategia</title>
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
				<span class="navbar-brand">Estrategia para los servicios IT Cauntitativa Version 2</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="estrategia_cuantitativa_v2_process.php" method="GET">
			<div class="form-group">
	<div id="panel_mmr_rb_41" class="panel panel-primary">
		<div id="panel_head_mmr_rb_41" class="panel-heading">
			<h4>Gestión del portafolio de servicios<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_41" class="panel-body">
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
						<th>¿Hay Relación entre los planes de negocio y las estrategias de los servicios de TI?</th>
						<td class="td-center"><input id="mmr_rb_41_1_1" name="mmr_rb_41_1" type="radio"  value="mmr_rb_41_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_1_2" name="mmr_rb_41_1" type="radio"  value="mmr_rb_41_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_1_3" name="mmr_rb_41_1" type="radio"  value="mmr_rb_41_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_1_4" name="mmr_rb_41_1" type="radio"  value="mmr_rb_41_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_1_5" name="mmr_rb_41_1" type="radio"  value="mmr_rb_41_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_1_6" name="mmr_rb_41_1" type="radio"  value="mmr_rb_41_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe definición y documentación de la cartera de servicios?</th>
						<td class="td-center"><input id="mmr_rb_41_2_1" name="mmr_rb_41_2" type="radio"  value="mmr_rb_41_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_2_2" name="mmr_rb_41_2" type="radio"  value="mmr_rb_41_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_2_3" name="mmr_rb_41_2" type="radio"  value="mmr_rb_41_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_2_4" name="mmr_rb_41_2" type="radio"  value="mmr_rb_41_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_2_5" name="mmr_rb_41_2" type="radio"  value="mmr_rb_41_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_2_6" name="mmr_rb_41_2" type="radio"  value="mmr_rb_41_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tienen definidos los objetivos y expectativas de desempeño hacia el servicio de los clientes?</th>
						<td class="td-center"><input id="mmr_rb_41_3_1" name="mmr_rb_41_3" type="radio"  value="mmr_rb_41_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_3_2" name="mmr_rb_41_3" type="radio"  value="mmr_rb_41_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_3_3" name="mmr_rb_41_3" type="radio"  value="mmr_rb_41_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_3_4" name="mmr_rb_41_3" type="radio"  value="mmr_rb_41_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_3_5" name="mmr_rb_41_3" type="radio"  value="mmr_rb_41_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_3_6" name="mmr_rb_41_3" type="radio"  value="mmr_rb_41_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se identifican, seleccionan y priorizan oportunidades de servicio?</th>
						<td class="td-center"><input id="mmr_rb_41_4_1" name="mmr_rb_41_4" type="radio"  value="mmr_rb_41_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_4_2" name="mmr_rb_41_4" type="radio"  value="mmr_rb_41_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_4_3" name="mmr_rb_41_4" type="radio"  value="mmr_rb_41_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_4_4" name="mmr_rb_41_4" type="radio"  value="mmr_rb_41_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_4_5" name="mmr_rb_41_4" type="radio"  value="mmr_rb_41_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_4_6" name="mmr_rb_41_4" type="radio"  value="mmr_rb_41_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se evalúan con frecuencia el cumplimiento de los objetivos de los servicios de TI?</th>
						<td class="td-center"><input id="mmr_rb_41_5_1" name="mmr_rb_41_5" type="radio"  value="mmr_rb_41_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_5_2" name="mmr_rb_41_5" type="radio"  value="mmr_rb_41_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_5_3" name="mmr_rb_41_5" type="radio"  value="mmr_rb_41_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_5_4" name="mmr_rb_41_5" type="radio"  value="mmr_rb_41_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_5_5" name="mmr_rb_41_5" type="radio"  value="mmr_rb_41_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_5_6" name="mmr_rb_41_5" type="radio"  value="mmr_rb_41_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿La cartera de servicios esta asociadas a las áreas funcionales del negocio?</th>
						<td class="td-center"><input id="mmr_rb_41_6_1" name="mmr_rb_41_6" type="radio"  value="mmr_rb_41_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_6_2" name="mmr_rb_41_6" type="radio"  value="mmr_rb_41_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_6_3" name="mmr_rb_41_6" type="radio"  value="mmr_rb_41_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_6_4" name="mmr_rb_41_6" type="radio"  value="mmr_rb_41_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_6_5" name="mmr_rb_41_6" type="radio"  value="mmr_rb_41_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_6_6" name="mmr_rb_41_6" type="radio"  value="mmr_rb_41_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe clasificación de tipos de proveedores por servicio?</th>
						<td class="td-center"><input id="mmr_rb_41_7_1" name="mmr_rb_41_7" type="radio"  value="mmr_rb_41_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_7_2" name="mmr_rb_41_7" type="radio"  value="mmr_rb_41_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_7_3" name="mmr_rb_41_7" type="radio"  value="mmr_rb_41_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_7_4" name="mmr_rb_41_7" type="radio"  value="mmr_rb_41_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_7_5" name="mmr_rb_41_7" type="radio"  value="mmr_rb_41_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_7_6" name="mmr_rb_41_7" type="radio"  value="mmr_rb_41_7_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Está definido el Portafolio de Servicios?</th>
						<td class="td-center"><input id="mmr_rb_41_8_1" name="mmr_rb_41_8" type="radio"  value="mmr_rb_41_8_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_8_2" name="mmr_rb_41_8" type="radio"  value="mmr_rb_41_8_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_8_3" name="mmr_rb_41_8" type="radio"  value="mmr_rb_41_8_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_8_4" name="mmr_rb_41_8" type="radio"  value="mmr_rb_41_8_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_8_5" name="mmr_rb_41_8" type="radio"  value="mmr_rb_41_8_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_8_6" name="mmr_rb_41_8" type="radio"  value="mmr_rb_41_8_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los retos, riesgos y factores críticos de éxito de los procesos están documentados?</th>
						<td class="td-center"><input id="mmr_rb_41_9_1" name="mmr_rb_41_9" type="radio"  value="mmr_rb_41_9_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_9_2" name="mmr_rb_41_9" type="radio"  value="mmr_rb_41_9_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_9_3" name="mmr_rb_41_9" type="radio"  value="mmr_rb_41_9_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_9_4" name="mmr_rb_41_9" type="radio"  value="mmr_rb_41_9_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_9_5" name="mmr_rb_41_9" type="radio"  value="mmr_rb_41_9_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_41_9_6" name="mmr_rb_41_9" type="radio"  value="mmr_rb_41_9_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_42" class="panel panel-primary">
		<div id="panel_head_mmr_rb_42" class="panel-heading">
			<h4>Gestión Financiera<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_42" class="panel-body">
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
						<th>¿Se realiza un adecuado manejo de costos y riesgos asociados a la cartera de servicios?</th>
						<td class="td-center"><input id="mmr_rb_42_1_1" name="mmr_rb_42_1" type="radio"  value="mmr_rb_42_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_1_2" name="mmr_rb_42_1" type="radio"  value="mmr_rb_42_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_1_3" name="mmr_rb_42_1" type="radio"  value="mmr_rb_42_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_1_4" name="mmr_rb_42_1" type="radio"  value="mmr_rb_42_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_1_5" name="mmr_rb_42_1" type="radio"  value="mmr_rb_42_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_1_6" name="mmr_rb_42_1" type="radio"  value="mmr_rb_42_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe planeación y control de presupuesto para la prestación de los servicios de TI?</th>
						<td class="td-center"><input id="mmr_rb_42_2_1" name="mmr_rb_42_2" type="radio"  value="mmr_rb_42_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_2_2" name="mmr_rb_42_2" type="radio"  value="mmr_rb_42_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_2_3" name="mmr_rb_42_2" type="radio"  value="mmr_rb_42_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_2_4" name="mmr_rb_42_2" type="radio"  value="mmr_rb_42_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_2_5" name="mmr_rb_42_2" type="radio"  value="mmr_rb_42_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_2_6" name="mmr_rb_42_2" type="radio"  value="mmr_rb_42_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe centro de costos asignados a las áreas del negocio para la prestación de los servicios o se realiza cobros por los servicios de TI (Asignación costo / incidente)?</th>
						<td class="td-center"><input id="mmr_rb_42_3_1" name="mmr_rb_42_3" type="radio"  value="mmr_rb_42_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_3_2" name="mmr_rb_42_3" type="radio"  value="mmr_rb_42_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_3_3" name="mmr_rb_42_3" type="radio"  value="mmr_rb_42_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_3_4" name="mmr_rb_42_3" type="radio"  value="mmr_rb_42_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_3_5" name="mmr_rb_42_3" type="radio"  value="mmr_rb_42_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_3_6" name="mmr_rb_42_3" type="radio"  value="mmr_rb_42_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Dentro del servicio, hay clasificadores que designan el propósito final del costo (Capital/operacional, Directo/indirecto, Fijo/variable, Unidades de coste, Recurso humano/equipos)?</th>
						<td class="td-center"><input id="mmr_rb_42_4_1" name="mmr_rb_42_4" type="radio"  value="mmr_rb_42_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_4_2" name="mmr_rb_42_4" type="radio"  value="mmr_rb_42_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_4_3" name="mmr_rb_42_4" type="radio"  value="mmr_rb_42_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_4_4" name="mmr_rb_42_4" type="radio"  value="mmr_rb_42_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_4_5" name="mmr_rb_42_4" type="radio"  value="mmr_rb_42_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_4_6" name="mmr_rb_42_4" type="radio"  value="mmr_rb_42_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe una implementación del procesos de gestión financiera de los servicios?</th>
						<td class="td-center"><input id="mmr_rb_42_5_1" name="mmr_rb_42_5" type="radio"  value="mmr_rb_42_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_5_2" name="mmr_rb_42_5" type="radio"  value="mmr_rb_42_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_5_3" name="mmr_rb_42_5" type="radio"  value="mmr_rb_42_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_5_4" name="mmr_rb_42_5" type="radio"  value="mmr_rb_42_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_5_5" name="mmr_rb_42_5" type="radio"  value="mmr_rb_42_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_42_5_6" name="mmr_rb_42_5" type="radio"  value="mmr_rb_42_5_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_43" class="panel panel-primary">
		<div id="panel_head_mmr_rb_43" class="panel-heading">
			<h4>Gestión de la demanda<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_43" class="panel-body">
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
						<th>¿Con frecuencia se evalúa el estado de la demanda de los servicios?</th>
						<td class="td-center"><input id="mmr_rb_43_1_1" name="mmr_rb_43_1" type="radio"  value="mmr_rb_43_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_1_2" name="mmr_rb_43_1" type="radio"  value="mmr_rb_43_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_1_3" name="mmr_rb_43_1" type="radio"  value="mmr_rb_43_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_1_4" name="mmr_rb_43_1" type="radio"  value="mmr_rb_43_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_1_5" name="mmr_rb_43_1" type="radio"  value="mmr_rb_43_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_1_6" name="mmr_rb_43_1" type="radio"  value="mmr_rb_43_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Hay una definición clara de las áreas usuarias versus servicios prestados?</th>
						<td class="td-center"><input id="mmr_rb_43_2_1" name="mmr_rb_43_2" type="radio"  value="mmr_rb_43_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_2_2" name="mmr_rb_43_2" type="radio"  value="mmr_rb_43_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_2_3" name="mmr_rb_43_2" type="radio"  value="mmr_rb_43_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_2_4" name="mmr_rb_43_2" type="radio"  value="mmr_rb_43_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_2_5" name="mmr_rb_43_2" type="radio"  value="mmr_rb_43_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_2_6" name="mmr_rb_43_2" type="radio"  value="mmr_rb_43_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Permanentemente se realiza análisis de patrones de actividades del negocio?</th>
						<td class="td-center"><input id="mmr_rb_43_3_1" name="mmr_rb_43_3" type="radio"  value="mmr_rb_43_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_3_2" name="mmr_rb_43_3" type="radio"  value="mmr_rb_43_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_3_3" name="mmr_rb_43_3" type="radio"  value="mmr_rb_43_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_3_4" name="mmr_rb_43_3" type="radio"  value="mmr_rb_43_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_3_5" name="mmr_rb_43_3" type="radio"  value="mmr_rb_43_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_3_6" name="mmr_rb_43_3" type="radio"  value="mmr_rb_43_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Con frecuencia se identifican, seleccionan y priorizan oportunidades de servicios?</th>
						<td class="td-center"><input id="mmr_rb_43_4_1" name="mmr_rb_43_4" type="radio"  value="mmr_rb_43_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_4_2" name="mmr_rb_43_4" type="radio"  value="mmr_rb_43_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_4_3" name="mmr_rb_43_4" type="radio"  value="mmr_rb_43_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_4_4" name="mmr_rb_43_4" type="radio"  value="mmr_rb_43_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_4_5" name="mmr_rb_43_4" type="radio"  value="mmr_rb_43_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_4_6" name="mmr_rb_43_4" type="radio"  value="mmr_rb_43_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los servicios se priorizan de acuerdo al activos estratégico de la organización?</th>
						<td class="td-center"><input id="mmr_rb_43_5_1" name="mmr_rb_43_5" type="radio"  value="mmr_rb_43_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_5_2" name="mmr_rb_43_5" type="radio"  value="mmr_rb_43_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_5_3" name="mmr_rb_43_5" type="radio"  value="mmr_rb_43_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_5_4" name="mmr_rb_43_5" type="radio"  value="mmr_rb_43_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_5_5" name="mmr_rb_43_5" type="radio"  value="mmr_rb_43_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_5_6" name="mmr_rb_43_5" type="radio"  value="mmr_rb_43_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existe la definición del rol de atención al cliente que evalúa permanentemente la satisfacción y necesidades de las áreas usuarias?</th>
						<td class="td-center"><input id="mmr_rb_43_6_1" name="mmr_rb_43_6" type="radio"  value="mmr_rb_43_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_6_2" name="mmr_rb_43_6" type="radio"  value="mmr_rb_43_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_6_3" name="mmr_rb_43_6" type="radio"  value="mmr_rb_43_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_6_4" name="mmr_rb_43_6" type="radio"  value="mmr_rb_43_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_6_5" name="mmr_rb_43_6" type="radio"  value="mmr_rb_43_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_43_6_6" name="mmr_rb_43_6" type="radio"  value="mmr_rb_43_6_6" class="form-control"></td>
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
	<script type="text/javascript" src="javascript/estrategia_cuantitativa_v2.js"></script>
</body>
</html>

