<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
		$_SESSION['idEncuesta'] = $idEncuesta;
	?>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<span class="navbar-brand">Estrategia para los servicios IT Cauntitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="estrategia_cuantitativa_process.php" method="GET">
			<br><h1>Gestión del portafolio de servicios</h1>
<div class="form-group">
	<div id="panel_eru_rb_1" class="panel panel-primary">
		<div id="panel_head_eru_rb_1" class="panel-heading">
			<h4>¿Hay Relación entre los planes de negocio y las estrategias de los servicios de TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_1" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_1_0" name="eru_rb_1" type="radio" value="eru_rb_1_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_1_1" name="eru_rb_1" type="radio" value="eru_rb_1_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_1_2" name="eru_rb_1" type="radio" value="eru_rb_1_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_1_3" name="eru_rb_1" type="radio" value="eru_rb_1_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_1_4" name="eru_rb_1" type="radio" value="eru_rb_1_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_1_5" name="eru_rb_1" type="radio" value="eru_rb_1_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_2" class="panel panel-primary">
		<div id="panel_head_eru_rb_2" class="panel-heading">
			<h4>¿Existe definición y documentación de la cartera de servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_2" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_2_0" name="eru_rb_2" type="radio" value="eru_rb_2_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_2_1" name="eru_rb_2" type="radio" value="eru_rb_2_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_2_2" name="eru_rb_2" type="radio" value="eru_rb_2_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_2_3" name="eru_rb_2" type="radio" value="eru_rb_2_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_2_4" name="eru_rb_2" type="radio" value="eru_rb_2_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_2_5" name="eru_rb_2" type="radio" value="eru_rb_2_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_3" class="panel panel-primary">
		<div id="panel_head_eru_rb_3" class="panel-heading">
			<h4>¿Se tienen definidos los objetivos y expectativas de desempeño hacia el servicio de los clientes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_3" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_3_0" name="eru_rb_3" type="radio" value="eru_rb_3_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_3_1" name="eru_rb_3" type="radio" value="eru_rb_3_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_3_2" name="eru_rb_3" type="radio" value="eru_rb_3_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_3_3" name="eru_rb_3" type="radio" value="eru_rb_3_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_3_4" name="eru_rb_3" type="radio" value="eru_rb_3_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_3_5" name="eru_rb_3" type="radio" value="eru_rb_3_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_4" class="panel panel-primary">
		<div id="panel_head_eru_rb_4" class="panel-heading">
			<h4>¿Se identifican, seleccionan y priorizan oportunidades de servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_4" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_4_0" name="eru_rb_4" type="radio" value="eru_rb_4_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_4_1" name="eru_rb_4" type="radio" value="eru_rb_4_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_4_2" name="eru_rb_4" type="radio" value="eru_rb_4_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_4_3" name="eru_rb_4" type="radio" value="eru_rb_4_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_4_4" name="eru_rb_4" type="radio" value="eru_rb_4_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_4_5" name="eru_rb_4" type="radio" value="eru_rb_4_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_5" class="panel panel-primary">
		<div id="panel_head_eru_rb_5" class="panel-heading">
			<h4>¿Se evalúan con frecuencia el cumplimiento de los objetivos de los servicios de TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_5" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_5_0" name="eru_rb_5" type="radio" value="eru_rb_5_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_5_1" name="eru_rb_5" type="radio" value="eru_rb_5_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_5_2" name="eru_rb_5" type="radio" value="eru_rb_5_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_5_3" name="eru_rb_5" type="radio" value="eru_rb_5_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_5_4" name="eru_rb_5" type="radio" value="eru_rb_5_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_5_5" name="eru_rb_5" type="radio" value="eru_rb_5_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_6" class="panel panel-primary">
		<div id="panel_head_eru_rb_6" class="panel-heading">
			<h4>¿La cartera de servicios esta asociadas a las áreas funcionales del negocio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_6" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_6_0" name="eru_rb_6" type="radio" value="eru_rb_6_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_6_1" name="eru_rb_6" type="radio" value="eru_rb_6_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_6_2" name="eru_rb_6" type="radio" value="eru_rb_6_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_6_3" name="eru_rb_6" type="radio" value="eru_rb_6_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_6_4" name="eru_rb_6" type="radio" value="eru_rb_6_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_6_5" name="eru_rb_6" type="radio" value="eru_rb_6_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_7" class="panel panel-primary">
		<div id="panel_head_eru_rb_7" class="panel-heading">
			<h4>¿Existe clasificación de tipos de proveedores por servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_7" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_7_0" name="eru_rb_7" type="radio" value="eru_rb_7_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_7_1" name="eru_rb_7" type="radio" value="eru_rb_7_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_7_2" name="eru_rb_7" type="radio" value="eru_rb_7_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_7_3" name="eru_rb_7" type="radio" value="eru_rb_7_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_7_4" name="eru_rb_7" type="radio" value="eru_rb_7_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_7_5" name="eru_rb_7" type="radio" value="eru_rb_7_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_8" class="panel panel-primary">
		<div id="panel_head_eru_rb_8" class="panel-heading">
			<h4>¿Está definido el Portafolio de Servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_8" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_8_0" name="eru_rb_8" type="radio" value="eru_rb_8_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_8_1" name="eru_rb_8" type="radio" value="eru_rb_8_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_8_2" name="eru_rb_8" type="radio" value="eru_rb_8_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_8_3" name="eru_rb_8" type="radio" value="eru_rb_8_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_8_4" name="eru_rb_8" type="radio" value="eru_rb_8_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_8_5" name="eru_rb_8" type="radio" value="eru_rb_8_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_9" class="panel panel-primary">
		<div id="panel_head_eru_rb_9" class="panel-heading">
			<h4>¿Los retos, riesgos y factores críticos de éxito de los procesos están documentados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_9" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_9_0" name="eru_rb_9" type="radio" value="eru_rb_9_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_1" name="eru_rb_9" type="radio" value="eru_rb_9_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_2" name="eru_rb_9" type="radio" value="eru_rb_9_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_3" name="eru_rb_9" type="radio" value="eru_rb_9_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_4" name="eru_rb_9" type="radio" value="eru_rb_9_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_5" name="eru_rb_9" type="radio" value="eru_rb_9_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Gestión Financiera</h1>
<div class="form-group">
	<div id="panel_eru_rb_10" class="panel panel-primary">
		<div id="panel_head_eru_rb_10" class="panel-heading">
			<h4>¿Se realiza un adecuado manejo de costos y riesgos asociados a la cartera de servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_10" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_10_0" name="eru_rb_10" type="radio" value="eru_rb_10_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_10_1" name="eru_rb_10" type="radio" value="eru_rb_10_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_10_2" name="eru_rb_10" type="radio" value="eru_rb_10_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_10_3" name="eru_rb_10" type="radio" value="eru_rb_10_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_10_4" name="eru_rb_10" type="radio" value="eru_rb_10_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_10_5" name="eru_rb_10" type="radio" value="eru_rb_10_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_11" class="panel panel-primary">
		<div id="panel_head_eru_rb_11" class="panel-heading">
			<h4>¿Existe planeación y control de presupuesto para la prestación de los servicios de TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_11" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_11_0" name="eru_rb_11" type="radio" value="eru_rb_11_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_11_1" name="eru_rb_11" type="radio" value="eru_rb_11_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_11_2" name="eru_rb_11" type="radio" value="eru_rb_11_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_11_3" name="eru_rb_11" type="radio" value="eru_rb_11_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_11_4" name="eru_rb_11" type="radio" value="eru_rb_11_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_11_5" name="eru_rb_11" type="radio" value="eru_rb_11_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_12" class="panel panel-primary">
		<div id="panel_head_eru_rb_12" class="panel-heading">
			<h4>¿Existe centro de costos asignados a las áreas del negocio para la prestación de los servicios o se realiza cobros por los servicios de TI (Asignación costo / incidente)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_12" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_12_0" name="eru_rb_12" type="radio" value="eru_rb_12_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_12_1" name="eru_rb_12" type="radio" value="eru_rb_12_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_12_2" name="eru_rb_12" type="radio" value="eru_rb_12_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_12_3" name="eru_rb_12" type="radio" value="eru_rb_12_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_12_4" name="eru_rb_12" type="radio" value="eru_rb_12_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_12_5" name="eru_rb_12" type="radio" value="eru_rb_12_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_13" class="panel panel-primary">
		<div id="panel_head_eru_rb_13" class="panel-heading">
			<h4>¿Dentro del servicio, hay clasificadores que designan el propósito final del costo (Capital/operacional, Directo/indirecto, Fijo/variable, Unidades de coste, Recurso humano/equipos)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_13" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_13_0" name="eru_rb_13" type="radio" value="eru_rb_13_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_13_1" name="eru_rb_13" type="radio" value="eru_rb_13_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_13_2" name="eru_rb_13" type="radio" value="eru_rb_13_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_13_3" name="eru_rb_13" type="radio" value="eru_rb_13_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_13_4" name="eru_rb_13" type="radio" value="eru_rb_13_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_13_5" name="eru_rb_13" type="radio" value="eru_rb_13_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_14" class="panel panel-primary">
		<div id="panel_head_eru_rb_14" class="panel-heading">
			<h4>¿Existe una implementación del procesos de gestión financiera de los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_14" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_14_0" name="eru_rb_14" type="radio" value="eru_rb_14_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_14_1" name="eru_rb_14" type="radio" value="eru_rb_14_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_14_2" name="eru_rb_14" type="radio" value="eru_rb_14_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_14_3" name="eru_rb_14" type="radio" value="eru_rb_14_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_14_4" name="eru_rb_14" type="radio" value="eru_rb_14_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_14_5" name="eru_rb_14" type="radio" value="eru_rb_14_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Gestión de la demanda</h1>
<div class="form-group">
	<div id="panel_eru_rb_15" class="panel panel-primary">
		<div id="panel_head_eru_rb_15" class="panel-heading">
			<h4>¿Con frecuencia se evalúa el estado de la demanda de los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_15" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_15_0" name="eru_rb_15" type="radio" value="eru_rb_15_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_15_1" name="eru_rb_15" type="radio" value="eru_rb_15_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_15_2" name="eru_rb_15" type="radio" value="eru_rb_15_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_15_3" name="eru_rb_15" type="radio" value="eru_rb_15_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_15_4" name="eru_rb_15" type="radio" value="eru_rb_15_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_15_5" name="eru_rb_15" type="radio" value="eru_rb_15_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_16" class="panel panel-primary">
		<div id="panel_head_eru_rb_16" class="panel-heading">
			<h4>¿Hay una definición clara de las áreas usuarias versus servicios prestados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_16" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_16_0" name="eru_rb_16" type="radio" value="eru_rb_16_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_16_1" name="eru_rb_16" type="radio" value="eru_rb_16_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_16_2" name="eru_rb_16" type="radio" value="eru_rb_16_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_16_3" name="eru_rb_16" type="radio" value="eru_rb_16_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_16_4" name="eru_rb_16" type="radio" value="eru_rb_16_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_16_5" name="eru_rb_16" type="radio" value="eru_rb_16_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_17" class="panel panel-primary">
		<div id="panel_head_eru_rb_17" class="panel-heading">
			<h4>¿Permanentemente se realiza análisis de patrones de actividades del negocio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_17" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_17_0" name="eru_rb_17" type="radio" value="eru_rb_17_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_17_1" name="eru_rb_17" type="radio" value="eru_rb_17_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_17_2" name="eru_rb_17" type="radio" value="eru_rb_17_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_17_3" name="eru_rb_17" type="radio" value="eru_rb_17_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_17_4" name="eru_rb_17" type="radio" value="eru_rb_17_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_17_5" name="eru_rb_17" type="radio" value="eru_rb_17_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_18" class="panel panel-primary">
		<div id="panel_head_eru_rb_18" class="panel-heading">
			<h4>¿Con frecuencia se identifican, seleccionan y priorizan oportunidades de servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_18" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_18_0" name="eru_rb_18" type="radio" value="eru_rb_18_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_18_1" name="eru_rb_18" type="radio" value="eru_rb_18_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_18_2" name="eru_rb_18" type="radio" value="eru_rb_18_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_18_3" name="eru_rb_18" type="radio" value="eru_rb_18_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_18_4" name="eru_rb_18" type="radio" value="eru_rb_18_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_18_5" name="eru_rb_18" type="radio" value="eru_rb_18_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_19" class="panel panel-primary">
		<div id="panel_head_eru_rb_19" class="panel-heading">
			<h4>¿Los servicios se priorizan de acuerdo al activos estratégico de la organización?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_19" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_19_0" name="eru_rb_19" type="radio" value="eru_rb_19_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_19_1" name="eru_rb_19" type="radio" value="eru_rb_19_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_19_2" name="eru_rb_19" type="radio" value="eru_rb_19_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_19_3" name="eru_rb_19" type="radio" value="eru_rb_19_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_19_4" name="eru_rb_19" type="radio" value="eru_rb_19_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_19_5" name="eru_rb_19" type="radio" value="eru_rb_19_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_20" class="panel panel-primary">
		<div id="panel_head_eru_rb_20" class="panel-heading">
			<h4>¿Existe la definición del rol de atención al cliente que evalúa permanentemente la satisfacción y necesidades de las áreas usuarias?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_20" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_20_0" name="eru_rb_20" type="radio" value="eru_rb_20_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_20_1" name="eru_rb_20" type="radio" value="eru_rb_20_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_20_2" name="eru_rb_20" type="radio" value="eru_rb_20_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_20_3" name="eru_rb_20" type="radio" value="eru_rb_20_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_20_4" name="eru_rb_20" type="radio" value="eru_rb_20_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_20_5" name="eru_rb_20" type="radio" value="eru_rb_20_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
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
	<script type="text/javascript" src="javascript/estrategia_cuantitativa.js"></script>
</body>
</html>

