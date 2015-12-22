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
		<form action="mejora_cuantitativa_process.php" method="GET">
			<br><h1>Objetivos</h1>
<div class="form-group">
	<div id="panel_eru_rb_458" class="panel panel-primary">
		<div id="panel_head_eru_rb_458" class="panel-heading">
			<h4>¿Constantemente se aprende las lecciones aprendidas en todos los procesos, con el fin de alinear los servicios de TI con los cambios que el negocio necesite ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_458" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_458_0" name="eru_rb_458" type="radio" value="eru_rb_458_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_458_1" name="eru_rb_458" type="radio" value="eru_rb_458_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_458_2" name="eru_rb_458" type="radio" value="eru_rb_458_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_458_3" name="eru_rb_458" type="radio" value="eru_rb_458_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_458_4" name="eru_rb_458" type="radio" value="eru_rb_458_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_458_5" name="eru_rb_458" type="radio" value="eru_rb_458_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_459" class="panel panel-primary">
		<div id="panel_head_eru_rb_459" class="panel-heading">
			<h4>¿Se revisa, analiza y se ejecutan recomendaciones sobre las oportunidades de mejora en cada fase del ciclo de vida?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_459" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_459_0" name="eru_rb_459" type="radio" value="eru_rb_459_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_459_1" name="eru_rb_459" type="radio" value="eru_rb_459_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_459_2" name="eru_rb_459" type="radio" value="eru_rb_459_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_459_3" name="eru_rb_459" type="radio" value="eru_rb_459_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_459_4" name="eru_rb_459" type="radio" value="eru_rb_459_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_459_5" name="eru_rb_459" type="radio" value="eru_rb_459_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_460" class="panel panel-primary">
		<div id="panel_head_eru_rb_460" class="panel-heading">
			<h4>¿Se evalúan los logros de los niveles de servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_460" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_460_0" name="eru_rb_460" type="radio" value="eru_rb_460_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_460_1" name="eru_rb_460" type="radio" value="eru_rb_460_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_460_2" name="eru_rb_460" type="radio" value="eru_rb_460_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_460_3" name="eru_rb_460" type="radio" value="eru_rb_460_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_460_4" name="eru_rb_460" type="radio" value="eru_rb_460_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_460_5" name="eru_rb_460" type="radio" value="eru_rb_460_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_511" class="panel panel-primary">
		<div id="panel_head_eru_rb_511" class="panel-heading">
			<h4>¿Existen planes de mejoramiento para la calidad de los servicios de TI, la eficiencia, y el costo de la entrega de los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_511" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_511_0" name="eru_rb_511" type="radio" value="eru_rb_511_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_511_1" name="eru_rb_511" type="radio" value="eru_rb_511_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_511_2" name="eru_rb_511" type="radio" value="eru_rb_511_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_511_3" name="eru_rb_511" type="radio" value="eru_rb_511_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_511_4" name="eru_rb_511" type="radio" value="eru_rb_511_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_511_5" name="eru_rb_511" type="radio" value="eru_rb_511_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_461" class="panel panel-primary">
		<div id="panel_head_eru_rb_461" class="panel-heading">
			<h4>¿Las mediciones realizadas a los procesos y servicios permite realizar estrategias de mejora para los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_461" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_461_0" name="eru_rb_461" type="radio" value="eru_rb_461_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_461_1" name="eru_rb_461" type="radio" value="eru_rb_461_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_461_2" name="eru_rb_461" type="radio" value="eru_rb_461_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_461_3" name="eru_rb_461" type="radio" value="eru_rb_461_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_461_4" name="eru_rb_461" type="radio" value="eru_rb_461_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_461_5" name="eru_rb_461" type="radio" value="eru_rb_461_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Enfoque de la mejora continua</h1>
<div class="form-group">
	<div id="panel_eru_rb_462" class="panel panel-primary">
		<div id="panel_head_eru_rb_462" class="panel-heading">
			<h4>¿Para realizar un control de la calidad continua, permanentemente se planea, se hace, se verifica y se actúa (Ciclo Deaming PHVA) ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_462" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_462_0" name="eru_rb_462" type="radio" value="eru_rb_462_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_462_1" name="eru_rb_462" type="radio" value="eru_rb_462_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_462_2" name="eru_rb_462" type="radio" value="eru_rb_462_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_462_3" name="eru_rb_462" type="radio" value="eru_rb_462_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_462_4" name="eru_rb_462" type="radio" value="eru_rb_462_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_462_5" name="eru_rb_462" type="radio" value="eru_rb_462_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_463" class="panel panel-primary">
		<div id="panel_head_eru_rb_463" class="panel-heading">
			<h4>¿El personal interno y externo tienen clara la visión de la institución con el fin de enfocar sus estrategias y actividades al cumplimiento de los logros ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_463" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_463_0" name="eru_rb_463" type="radio" value="eru_rb_463_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_463_1" name="eru_rb_463" type="radio" value="eru_rb_463_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_463_2" name="eru_rb_463" type="radio" value="eru_rb_463_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_463_3" name="eru_rb_463" type="radio" value="eru_rb_463_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_463_4" name="eru_rb_463" type="radio" value="eru_rb_463_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_463_5" name="eru_rb_463" type="radio" value="eru_rb_463_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_464" class="panel panel-primary">
		<div id="panel_head_eru_rb_464" class="panel-heading">
			<h4>¿El equipo de trabajo se reúne con frecuencia para evaluar el cumplimiento de objetivos (en donde estamos ahora?) , definir iniciativas y planes de acción para mejorar la prestación del servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_464" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_464_0" name="eru_rb_464" type="radio" value="eru_rb_464_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_464_1" name="eru_rb_464" type="radio" value="eru_rb_464_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_464_2" name="eru_rb_464" type="radio" value="eru_rb_464_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_464_3" name="eru_rb_464" type="radio" value="eru_rb_464_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_464_4" name="eru_rb_464" type="radio" value="eru_rb_464_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_464_5" name="eru_rb_464" type="radio" value="eru_rb_464_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_465" class="panel panel-primary">
		<div id="panel_head_eru_rb_465" class="panel-heading">
			<h4>¿Se tienen definidos los objetivos donde se defina con claridad donde quieren estar?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_465" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_465_0" name="eru_rb_465" type="radio" value="eru_rb_465_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_465_1" name="eru_rb_465" type="radio" value="eru_rb_465_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_465_2" name="eru_rb_465" type="radio" value="eru_rb_465_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_465_3" name="eru_rb_465" type="radio" value="eru_rb_465_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_465_4" name="eru_rb_465" type="radio" value="eru_rb_465_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_465_5" name="eru_rb_465" type="radio" value="eru_rb_465_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_466" class="panel panel-primary">
		<div id="panel_head_eru_rb_466" class="panel-heading">
			<h4>¿Existen planes estratégicos donde se definan los planes para apoyar el logro de los objetivos del área y del negocio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_466" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_466_0" name="eru_rb_466" type="radio" value="eru_rb_466_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_466_1" name="eru_rb_466" type="radio" value="eru_rb_466_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_466_2" name="eru_rb_466" type="radio" value="eru_rb_466_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_466_3" name="eru_rb_466" type="radio" value="eru_rb_466_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_466_4" name="eru_rb_466" type="radio" value="eru_rb_466_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_466_5" name="eru_rb_466" type="radio" value="eru_rb_466_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Valor del negocio</h1>
<div class="form-group">
	<div id="panel_eru_rb_467" class="panel panel-primary">
		<div id="panel_head_eru_rb_467" class="panel-heading">
			<h4>¿Los objetivos son medidos por medio de métricas bien definida?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_467" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_467_0" name="eru_rb_467" type="radio" value="eru_rb_467_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_467_1" name="eru_rb_467" type="radio" value="eru_rb_467_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_467_2" name="eru_rb_467" type="radio" value="eru_rb_467_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_467_3" name="eru_rb_467" type="radio" value="eru_rb_467_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_467_4" name="eru_rb_467" type="radio" value="eru_rb_467_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_467_5" name="eru_rb_467" type="radio" value="eru_rb_467_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_468" class="panel panel-primary">
		<div id="panel_head_eru_rb_468" class="panel-heading">
			<h4>¿Las acciones correctivas y cambios se ejecutan basadas en los resultados de las métricas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_468" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_468_0" name="eru_rb_468" type="radio" value="eru_rb_468_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_468_1" name="eru_rb_468" type="radio" value="eru_rb_468_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_468_2" name="eru_rb_468" type="radio" value="eru_rb_468_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_468_3" name="eru_rb_468" type="radio" value="eru_rb_468_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_468_4" name="eru_rb_468" type="radio" value="eru_rb_468_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_468_5" name="eru_rb_468" type="radio" value="eru_rb_468_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_469" class="panel panel-primary">
		<div id="panel_head_eru_rb_469" class="panel-heading">
			<h4>¿Existen evidencias que faciliten evaluar los resultados y justificar las acciones de mejora?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_469" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_469_0" name="eru_rb_469" type="radio" value="eru_rb_469_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_469_1" name="eru_rb_469" type="radio" value="eru_rb_469_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_469_2" name="eru_rb_469" type="radio" value="eru_rb_469_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_469_3" name="eru_rb_469" type="radio" value="eru_rb_469_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_469_4" name="eru_rb_469" type="radio" value="eru_rb_469_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_469_5" name="eru_rb_469" type="radio" value="eru_rb_469_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Línea Base</h1>
<div class="form-group">
	<div id="panel_eru_rb_470" class="panel panel-primary">
		<div id="panel_head_eru_rb_470" class="panel-heading">
			<h4>¿Existen evidencias y registros históricos a manera de marcas de referencia o puntos de partida, con los cuales se puedan observar los cambios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_470" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_470_0" name="eru_rb_470" type="radio" value="eru_rb_470_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_470_1" name="eru_rb_470" type="radio" value="eru_rb_470_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_470_2" name="eru_rb_470" type="radio" value="eru_rb_470_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_470_3" name="eru_rb_470" type="radio" value="eru_rb_470_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_470_4" name="eru_rb_470" type="radio" value="eru_rb_470_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_470_5" name="eru_rb_470" type="radio" value="eru_rb_470_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_471" class="panel panel-primary">
		<div id="panel_head_eru_rb_471" class="panel-heading">
			<h4>¿Los datos históricos contienen información estratégica?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_471" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_471_0" name="eru_rb_471" type="radio" value="eru_rb_471_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_471_1" name="eru_rb_471" type="radio" value="eru_rb_471_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_471_2" name="eru_rb_471" type="radio" value="eru_rb_471_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_471_3" name="eru_rb_471" type="radio" value="eru_rb_471_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_471_4" name="eru_rb_471" type="radio" value="eru_rb_471_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_471_5" name="eru_rb_471" type="radio" value="eru_rb_471_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_472" class="panel panel-primary">
		<div id="panel_head_eru_rb_472" class="panel-heading">
			<h4>¿Los datos históricos contienen información táctica?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_472" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_472_0" name="eru_rb_472" type="radio" value="eru_rb_472_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_472_1" name="eru_rb_472" type="radio" value="eru_rb_472_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_472_2" name="eru_rb_472" type="radio" value="eru_rb_472_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_472_3" name="eru_rb_472" type="radio" value="eru_rb_472_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_472_4" name="eru_rb_472" type="radio" value="eru_rb_472_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_472_5" name="eru_rb_472" type="radio" value="eru_rb_472_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_473" class="panel panel-primary">
		<div id="panel_head_eru_rb_473" class="panel-heading">
			<h4>¿Los datos históricos contienen información operacional?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_473" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_473_0" name="eru_rb_473" type="radio" value="eru_rb_473_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_473_1" name="eru_rb_473" type="radio" value="eru_rb_473_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_473_2" name="eru_rb_473" type="radio" value="eru_rb_473_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_473_3" name="eru_rb_473" type="radio" value="eru_rb_473_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_473_4" name="eru_rb_473" type="radio" value="eru_rb_473_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_473_5" name="eru_rb_473" type="radio" value="eru_rb_473_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Métricas y medidas</h1>
<div class="form-group">
	<div id="panel_eru_rb_474" class="panel panel-primary">
		<div id="panel_head_eru_rb_474" class="panel-heading">
			<h4>¿Se cuentan con métricas de tecnología existente en el negocio (índice de sistematización, nivel de automatización de procesos, inversión en tecnología, etc)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_474" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_474_0" name="eru_rb_474" type="radio" value="eru_rb_474_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_474_1" name="eru_rb_474" type="radio" value="eru_rb_474_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_474_2" name="eru_rb_474" type="radio" value="eru_rb_474_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_474_3" name="eru_rb_474" type="radio" value="eru_rb_474_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_474_4" name="eru_rb_474" type="radio" value="eru_rb_474_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_474_5" name="eru_rb_474" type="radio" value="eru_rb_474_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_475" class="panel panel-primary">
		<div id="panel_head_eru_rb_475" class="panel-heading">
			<h4>¿Están definidas las métricas de servicio ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_475" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_475_0" name="eru_rb_475" type="radio" value="eru_rb_475_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_475_1" name="eru_rb_475" type="radio" value="eru_rb_475_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_475_2" name="eru_rb_475" type="radio" value="eru_rb_475_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_475_3" name="eru_rb_475" type="radio" value="eru_rb_475_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_475_4" name="eru_rb_475" type="radio" value="eru_rb_475_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_475_5" name="eru_rb_475" type="radio" value="eru_rb_475_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_476" class="panel panel-primary">
		<div id="panel_head_eru_rb_476" class="panel-heading">
			<h4>¿Existen métricas de procesos y métricas de actividades para los procesos de la gestión de servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_476" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_476_0" name="eru_rb_476" type="radio" value="eru_rb_476_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_476_1" name="eru_rb_476" type="radio" value="eru_rb_476_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_476_2" name="eru_rb_476" type="radio" value="eru_rb_476_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_476_3" name="eru_rb_476" type="radio" value="eru_rb_476_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_476_4" name="eru_rb_476" type="radio" value="eru_rb_476_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_476_5" name="eru_rb_476" type="radio" value="eru_rb_476_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_477" class="panel panel-primary">
		<div id="panel_head_eru_rb_477" class="panel-heading">
			<h4>Para reunir y procesar los datos se tiene definido: ¿Quien lo hace? ¿Cómo? ¿ Cuando? ¿Integridad de los datos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_477" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_477_0" name="eru_rb_477" type="radio" value="eru_rb_477_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_477_1" name="eru_rb_477" type="radio" value="eru_rb_477_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_477_2" name="eru_rb_477" type="radio" value="eru_rb_477_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_477_3" name="eru_rb_477" type="radio" value="eru_rb_477_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_477_4" name="eru_rb_477" type="radio" value="eru_rb_477_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_477_5" name="eru_rb_477" type="radio" value="eru_rb_477_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_478" class="panel panel-primary">
		<div id="panel_head_eru_rb_478" class="panel-heading">
			<h4>¿En el procesamiento de datos está definido: la frecuencia, los formatos, el sistema y la precisión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_478" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_478_0" name="eru_rb_478" type="radio" value="eru_rb_478_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_478_1" name="eru_rb_478" type="radio" value="eru_rb_478_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_478_2" name="eru_rb_478" type="radio" value="eru_rb_478_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_478_3" name="eru_rb_478" type="radio" value="eru_rb_478_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_478_4" name="eru_rb_478" type="radio" value="eru_rb_478_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_478_5" name="eru_rb_478" type="radio" value="eru_rb_478_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_479" class="panel panel-primary">
		<div id="panel_head_eru_rb_479" class="panel-heading">
			<h4>¿En el análisis de los datos se tienen definidos las relaciones, tendencias, objetivos alcanzados y acciones correctivas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_479" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_479_0" name="eru_rb_479" type="radio" value="eru_rb_479_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_479_1" name="eru_rb_479" type="radio" value="eru_rb_479_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_479_2" name="eru_rb_479" type="radio" value="eru_rb_479_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_479_3" name="eru_rb_479" type="radio" value="eru_rb_479_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_479_4" name="eru_rb_479" type="radio" value="eru_rb_479_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_479_5" name="eru_rb_479" type="radio" value="eru_rb_479_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_480" class="panel panel-primary">
		<div id="panel_head_eru_rb_480" class="panel-heading">
			<h4>¿Se presentan planes de acción de mejoramiento basados en las métricas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_480" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_480_0" name="eru_rb_480" type="radio" value="eru_rb_480_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_480_1" name="eru_rb_480" type="radio" value="eru_rb_480_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_480_2" name="eru_rb_480" type="radio" value="eru_rb_480_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_480_3" name="eru_rb_480" type="radio" value="eru_rb_480_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_480_4" name="eru_rb_480" type="radio" value="eru_rb_480_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_480_5" name="eru_rb_480" type="radio" value="eru_rb_480_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
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
	<script type="text/javascript" src="javascript/mejora_cuantitativa.js"></script>
</body>
</html>

