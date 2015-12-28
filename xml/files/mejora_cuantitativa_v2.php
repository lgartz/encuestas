<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Mejora</title>
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
				<span class="navbar-brand">Mejora Continua de los Servicios TI Cuantitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="mejora_cuantitativa_v2_process.php" method="GET">
			<div class="form-group">
	<div id="panel_mmr_rb_505" class="panel panel-primary">
		<div id="panel_head_mmr_rb_505" class="panel-heading">
			<h4>Objetivos<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_505" class="panel-body">
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
						<th>¿Constantemente se aprende las lecciones aprendidas en todos los procesos, con el fin de alinear los servicios de TI con los cambios que el negocio necesite ?</th>
						<td class="td-center"><input id="mmr_rb_505_1_1" name="mmr_rb_505_1" type="radio"  value="mmr_rb_505_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_1_2" name="mmr_rb_505_1" type="radio"  value="mmr_rb_505_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_1_3" name="mmr_rb_505_1" type="radio"  value="mmr_rb_505_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_1_4" name="mmr_rb_505_1" type="radio"  value="mmr_rb_505_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_1_5" name="mmr_rb_505_1" type="radio"  value="mmr_rb_505_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_1_6" name="mmr_rb_505_1" type="radio"  value="mmr_rb_505_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se revisa, analiza y se ejecutan recomendaciones sobre las oportunidades de mejora en cada fase del ciclo de vida?</th>
						<td class="td-center"><input id="mmr_rb_505_2_1" name="mmr_rb_505_2" type="radio"  value="mmr_rb_505_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_2_2" name="mmr_rb_505_2" type="radio"  value="mmr_rb_505_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_2_3" name="mmr_rb_505_2" type="radio"  value="mmr_rb_505_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_2_4" name="mmr_rb_505_2" type="radio"  value="mmr_rb_505_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_2_5" name="mmr_rb_505_2" type="radio"  value="mmr_rb_505_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_2_6" name="mmr_rb_505_2" type="radio"  value="mmr_rb_505_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se evalúan los logros de los niveles de servicio?</th>
						<td class="td-center"><input id="mmr_rb_505_3_1" name="mmr_rb_505_3" type="radio"  value="mmr_rb_505_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_3_2" name="mmr_rb_505_3" type="radio"  value="mmr_rb_505_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_3_3" name="mmr_rb_505_3" type="radio"  value="mmr_rb_505_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_3_4" name="mmr_rb_505_3" type="radio"  value="mmr_rb_505_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_3_5" name="mmr_rb_505_3" type="radio"  value="mmr_rb_505_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_3_6" name="mmr_rb_505_3" type="radio"  value="mmr_rb_505_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existen planes de mejoramiento para la calidad de los servicios de TI, la eficiencia, y el costo de la entrega de los servicios?</th>
						<td class="td-center"><input id="mmr_rb_505_4_1" name="mmr_rb_505_4" type="radio"  value="mmr_rb_505_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_4_2" name="mmr_rb_505_4" type="radio"  value="mmr_rb_505_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_4_3" name="mmr_rb_505_4" type="radio"  value="mmr_rb_505_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_4_4" name="mmr_rb_505_4" type="radio"  value="mmr_rb_505_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_4_5" name="mmr_rb_505_4" type="radio"  value="mmr_rb_505_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_4_6" name="mmr_rb_505_4" type="radio"  value="mmr_rb_505_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Las mediciones realizadas a los procesos y servicios permite realizar estrategias de mejora para los servicios?</th>
						<td class="td-center"><input id="mmr_rb_505_5_1" name="mmr_rb_505_5" type="radio"  value="mmr_rb_505_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_5_2" name="mmr_rb_505_5" type="radio"  value="mmr_rb_505_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_5_3" name="mmr_rb_505_5" type="radio"  value="mmr_rb_505_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_5_4" name="mmr_rb_505_5" type="radio"  value="mmr_rb_505_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_5_5" name="mmr_rb_505_5" type="radio"  value="mmr_rb_505_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_505_5_6" name="mmr_rb_505_5" type="radio"  value="mmr_rb_505_5_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_506" class="panel panel-primary">
		<div id="panel_head_mmr_rb_506" class="panel-heading">
			<h4>Enfoque de la mejora continua<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_506" class="panel-body">
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
						<th>¿Para realizar un control de la calidad continua, permanentemente se planea, se hace, se verifica y se actúa (Ciclo Deaming PHVA) ?</th>
						<td class="td-center"><input id="mmr_rb_506_1_1" name="mmr_rb_506_1" type="radio"  value="mmr_rb_506_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_1_2" name="mmr_rb_506_1" type="radio"  value="mmr_rb_506_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_1_3" name="mmr_rb_506_1" type="radio"  value="mmr_rb_506_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_1_4" name="mmr_rb_506_1" type="radio"  value="mmr_rb_506_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_1_5" name="mmr_rb_506_1" type="radio"  value="mmr_rb_506_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_1_6" name="mmr_rb_506_1" type="radio"  value="mmr_rb_506_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El personal interno y externo tienen clara la visión de la institución con el fin de enfocar sus estrategias y actividades al cumplimiento de los logros ?</th>
						<td class="td-center"><input id="mmr_rb_506_2_1" name="mmr_rb_506_2" type="radio"  value="mmr_rb_506_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_2_2" name="mmr_rb_506_2" type="radio"  value="mmr_rb_506_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_2_3" name="mmr_rb_506_2" type="radio"  value="mmr_rb_506_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_2_4" name="mmr_rb_506_2" type="radio"  value="mmr_rb_506_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_2_5" name="mmr_rb_506_2" type="radio"  value="mmr_rb_506_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_2_6" name="mmr_rb_506_2" type="radio"  value="mmr_rb_506_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿El equipo de trabajo se reúne con frecuencia para evaluar el cumplimiento de objetivos (en donde estamos ahora?) , definir iniciativas y planes de acción para mejorar la prestación del servicio?</th>
						<td class="td-center"><input id="mmr_rb_506_3_1" name="mmr_rb_506_3" type="radio"  value="mmr_rb_506_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_3_2" name="mmr_rb_506_3" type="radio"  value="mmr_rb_506_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_3_3" name="mmr_rb_506_3" type="radio"  value="mmr_rb_506_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_3_4" name="mmr_rb_506_3" type="radio"  value="mmr_rb_506_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_3_5" name="mmr_rb_506_3" type="radio"  value="mmr_rb_506_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_3_6" name="mmr_rb_506_3" type="radio"  value="mmr_rb_506_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se tienen definidos los objetivos donde se defina con claridad donde quieren estar?</th>
						<td class="td-center"><input id="mmr_rb_506_4_1" name="mmr_rb_506_4" type="radio"  value="mmr_rb_506_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_4_2" name="mmr_rb_506_4" type="radio"  value="mmr_rb_506_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_4_3" name="mmr_rb_506_4" type="radio"  value="mmr_rb_506_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_4_4" name="mmr_rb_506_4" type="radio"  value="mmr_rb_506_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_4_5" name="mmr_rb_506_4" type="radio"  value="mmr_rb_506_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_4_6" name="mmr_rb_506_4" type="radio"  value="mmr_rb_506_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existen planes estratégicos donde se definan los planes para apoyar el logro de los objetivos del área y del negocio?</th>
						<td class="td-center"><input id="mmr_rb_506_5_1" name="mmr_rb_506_5" type="radio"  value="mmr_rb_506_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_5_2" name="mmr_rb_506_5" type="radio"  value="mmr_rb_506_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_5_3" name="mmr_rb_506_5" type="radio"  value="mmr_rb_506_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_5_4" name="mmr_rb_506_5" type="radio"  value="mmr_rb_506_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_5_5" name="mmr_rb_506_5" type="radio"  value="mmr_rb_506_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_506_5_6" name="mmr_rb_506_5" type="radio"  value="mmr_rb_506_5_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_507" class="panel panel-primary">
		<div id="panel_head_mmr_rb_507" class="panel-heading">
			<h4>Valor del negocio<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_507" class="panel-body">
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
						<th>¿Los objetivos son medidos por medio de métricas bien definida?</th>
						<td class="td-center"><input id="mmr_rb_507_1_1" name="mmr_rb_507_1" type="radio"  value="mmr_rb_507_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_1_2" name="mmr_rb_507_1" type="radio"  value="mmr_rb_507_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_1_3" name="mmr_rb_507_1" type="radio"  value="mmr_rb_507_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_1_4" name="mmr_rb_507_1" type="radio"  value="mmr_rb_507_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_1_5" name="mmr_rb_507_1" type="radio"  value="mmr_rb_507_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_1_6" name="mmr_rb_507_1" type="radio"  value="mmr_rb_507_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Las acciones correctivas y cambios se ejecutan basadas en los resultados de las métricas?</th>
						<td class="td-center"><input id="mmr_rb_507_2_1" name="mmr_rb_507_2" type="radio"  value="mmr_rb_507_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_2_2" name="mmr_rb_507_2" type="radio"  value="mmr_rb_507_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_2_3" name="mmr_rb_507_2" type="radio"  value="mmr_rb_507_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_2_4" name="mmr_rb_507_2" type="radio"  value="mmr_rb_507_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_2_5" name="mmr_rb_507_2" type="radio"  value="mmr_rb_507_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_2_6" name="mmr_rb_507_2" type="radio"  value="mmr_rb_507_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existen evidencias que faciliten evaluar los resultados y justificar las acciones de mejora?</th>
						<td class="td-center"><input id="mmr_rb_507_3_1" name="mmr_rb_507_3" type="radio"  value="mmr_rb_507_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_3_2" name="mmr_rb_507_3" type="radio"  value="mmr_rb_507_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_3_3" name="mmr_rb_507_3" type="radio"  value="mmr_rb_507_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_3_4" name="mmr_rb_507_3" type="radio"  value="mmr_rb_507_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_3_5" name="mmr_rb_507_3" type="radio"  value="mmr_rb_507_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_507_3_6" name="mmr_rb_507_3" type="radio"  value="mmr_rb_507_3_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_508" class="panel panel-primary">
		<div id="panel_head_mmr_rb_508" class="panel-heading">
			<h4>Línea Base<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_508" class="panel-body">
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
						<th>¿Existen evidencias y registros históricos a manera de marcas de referencia o puntos de partida, con los cuales se puedan observar los cambios?</th>
						<td class="td-center"><input id="mmr_rb_508_1_1" name="mmr_rb_508_1" type="radio"  value="mmr_rb_508_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_1_2" name="mmr_rb_508_1" type="radio"  value="mmr_rb_508_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_1_3" name="mmr_rb_508_1" type="radio"  value="mmr_rb_508_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_1_4" name="mmr_rb_508_1" type="radio"  value="mmr_rb_508_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_1_5" name="mmr_rb_508_1" type="radio"  value="mmr_rb_508_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_1_6" name="mmr_rb_508_1" type="radio"  value="mmr_rb_508_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los datos históricos contienen información estratégica?</th>
						<td class="td-center"><input id="mmr_rb_508_2_1" name="mmr_rb_508_2" type="radio"  value="mmr_rb_508_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_2_2" name="mmr_rb_508_2" type="radio"  value="mmr_rb_508_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_2_3" name="mmr_rb_508_2" type="radio"  value="mmr_rb_508_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_2_4" name="mmr_rb_508_2" type="radio"  value="mmr_rb_508_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_2_5" name="mmr_rb_508_2" type="radio"  value="mmr_rb_508_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_2_6" name="mmr_rb_508_2" type="radio"  value="mmr_rb_508_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los datos históricos contienen información táctica?</th>
						<td class="td-center"><input id="mmr_rb_508_3_1" name="mmr_rb_508_3" type="radio"  value="mmr_rb_508_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_3_2" name="mmr_rb_508_3" type="radio"  value="mmr_rb_508_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_3_3" name="mmr_rb_508_3" type="radio"  value="mmr_rb_508_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_3_4" name="mmr_rb_508_3" type="radio"  value="mmr_rb_508_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_3_5" name="mmr_rb_508_3" type="radio"  value="mmr_rb_508_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_3_6" name="mmr_rb_508_3" type="radio"  value="mmr_rb_508_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Los datos históricos contienen información operacional?</th>
						<td class="td-center"><input id="mmr_rb_508_4_1" name="mmr_rb_508_4" type="radio"  value="mmr_rb_508_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_4_2" name="mmr_rb_508_4" type="radio"  value="mmr_rb_508_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_4_3" name="mmr_rb_508_4" type="radio"  value="mmr_rb_508_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_4_4" name="mmr_rb_508_4" type="radio"  value="mmr_rb_508_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_4_5" name="mmr_rb_508_4" type="radio"  value="mmr_rb_508_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_508_4_6" name="mmr_rb_508_4" type="radio"  value="mmr_rb_508_4_6" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_509" class="panel panel-primary">
		<div id="panel_head_mmr_rb_509" class="panel-heading">
			<h4>Métricas y medidas<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_509" class="panel-body">
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
						<th>¿Se cuentan con métricas de tecnología existente en el negocio (índice de sistematización, nivel de automatización de procesos, inversión en tecnología, etc)?</th>
						<td class="td-center"><input id="mmr_rb_509_1_1" name="mmr_rb_509_1" type="radio"  value="mmr_rb_509_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_1_2" name="mmr_rb_509_1" type="radio"  value="mmr_rb_509_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_1_3" name="mmr_rb_509_1" type="radio"  value="mmr_rb_509_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_1_4" name="mmr_rb_509_1" type="radio"  value="mmr_rb_509_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_1_5" name="mmr_rb_509_1" type="radio"  value="mmr_rb_509_1_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_1_6" name="mmr_rb_509_1" type="radio"  value="mmr_rb_509_1_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Están definidas las métricas de servicio ?</th>
						<td class="td-center"><input id="mmr_rb_509_2_1" name="mmr_rb_509_2" type="radio"  value="mmr_rb_509_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_2_2" name="mmr_rb_509_2" type="radio"  value="mmr_rb_509_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_2_3" name="mmr_rb_509_2" type="radio"  value="mmr_rb_509_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_2_4" name="mmr_rb_509_2" type="radio"  value="mmr_rb_509_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_2_5" name="mmr_rb_509_2" type="radio"  value="mmr_rb_509_2_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_2_6" name="mmr_rb_509_2" type="radio"  value="mmr_rb_509_2_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Existen métricas de procesos y métricas de actividades para los procesos de la gestión de servicios?</th>
						<td class="td-center"><input id="mmr_rb_509_3_1" name="mmr_rb_509_3" type="radio"  value="mmr_rb_509_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_3_2" name="mmr_rb_509_3" type="radio"  value="mmr_rb_509_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_3_3" name="mmr_rb_509_3" type="radio"  value="mmr_rb_509_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_3_4" name="mmr_rb_509_3" type="radio"  value="mmr_rb_509_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_3_5" name="mmr_rb_509_3" type="radio"  value="mmr_rb_509_3_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_3_6" name="mmr_rb_509_3" type="radio"  value="mmr_rb_509_3_6" class="form-control"></td>
					</tr>
					<tr>
						<th>Para reunir y procesar los datos se tiene definido: ¿Quien lo hace? ¿Cómo? ¿ Cuando? ¿Integridad de los datos?</th>
						<td class="td-center"><input id="mmr_rb_509_4_1" name="mmr_rb_509_4" type="radio"  value="mmr_rb_509_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_4_2" name="mmr_rb_509_4" type="radio"  value="mmr_rb_509_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_4_3" name="mmr_rb_509_4" type="radio"  value="mmr_rb_509_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_4_4" name="mmr_rb_509_4" type="radio"  value="mmr_rb_509_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_4_5" name="mmr_rb_509_4" type="radio"  value="mmr_rb_509_4_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_4_6" name="mmr_rb_509_4" type="radio"  value="mmr_rb_509_4_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿En el procesamiento de datos está definido: la frecuencia, los formatos, el sistema y la precisión?</th>
						<td class="td-center"><input id="mmr_rb_509_5_1" name="mmr_rb_509_5" type="radio"  value="mmr_rb_509_5_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_5_2" name="mmr_rb_509_5" type="radio"  value="mmr_rb_509_5_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_5_3" name="mmr_rb_509_5" type="radio"  value="mmr_rb_509_5_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_5_4" name="mmr_rb_509_5" type="radio"  value="mmr_rb_509_5_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_5_5" name="mmr_rb_509_5" type="radio"  value="mmr_rb_509_5_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_5_6" name="mmr_rb_509_5" type="radio"  value="mmr_rb_509_5_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿En el análisis de los datos se tienen definidos las relaciones, tendencias, objetivos alcanzados y acciones correctivas?</th>
						<td class="td-center"><input id="mmr_rb_509_6_1" name="mmr_rb_509_6" type="radio"  value="mmr_rb_509_6_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_6_2" name="mmr_rb_509_6" type="radio"  value="mmr_rb_509_6_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_6_3" name="mmr_rb_509_6" type="radio"  value="mmr_rb_509_6_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_6_4" name="mmr_rb_509_6" type="radio"  value="mmr_rb_509_6_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_6_5" name="mmr_rb_509_6" type="radio"  value="mmr_rb_509_6_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_6_6" name="mmr_rb_509_6" type="radio"  value="mmr_rb_509_6_6" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Se presentan planes de acción de mejoramiento basados en las métricas?</th>
						<td class="td-center"><input id="mmr_rb_509_7_1" name="mmr_rb_509_7" type="radio"  value="mmr_rb_509_7_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_7_2" name="mmr_rb_509_7" type="radio"  value="mmr_rb_509_7_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_7_3" name="mmr_rb_509_7" type="radio"  value="mmr_rb_509_7_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_7_4" name="mmr_rb_509_7" type="radio"  value="mmr_rb_509_7_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_7_5" name="mmr_rb_509_7" type="radio"  value="mmr_rb_509_7_5" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_509_7_6" name="mmr_rb_509_7" type="radio"  value="mmr_rb_509_7_6" class="form-control"></td>
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
	<script type="text/javascript" src="javascript/mejora_cuantitativa_v2.js"></script>
</body>
</html>

