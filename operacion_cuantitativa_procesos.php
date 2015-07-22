<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
				<span class="navbar-brand">Operación de los servicios IT (Relación entre procesos) Cauntitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="operacion_cuantitativa_procesos_process.php" method="GET">
			<br><h1>Service Desk</h1>
<div class="form-group">
	<div id="panel_eru_rb_331" class="panel panel-primary">
		<div id="panel_head_eru_rb_331" class="panel-heading">
			<h4>¿El proceso de service Desk reporta todos los incidentes de forma manual o automática?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_331" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_331_0" name="eru_rb_331" type="radio" value="eru_rb_331_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_331_1" name="eru_rb_331" type="radio" value="eru_rb_331_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_331_2" name="eru_rb_331" type="radio" value="eru_rb_331_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_331_3" name="eru_rb_331" type="radio" value="eru_rb_331_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_331_4" name="eru_rb_331" type="radio" value="eru_rb_331_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_331_5" name="eru_rb_331" type="radio" value="eru_rb_331_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_332" class="panel panel-primary">
		<div id="panel_head_eru_rb_332" class="panel-heading">
			<h4>¿El service Desk suministra todos los detalles básicos de los incidentes reportados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_332" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_332_0" name="eru_rb_332" type="radio" value="eru_rb_332_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_332_1" name="eru_rb_332" type="radio" value="eru_rb_332_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_332_2" name="eru_rb_332" type="radio" value="eru_rb_332_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_332_3" name="eru_rb_332" type="radio" value="eru_rb_332_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_332_4" name="eru_rb_332" type="radio" value="eru_rb_332_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_332_5" name="eru_rb_332" type="radio" value="eru_rb_332_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_333" class="panel panel-primary">
		<div id="panel_head_eru_rb_333" class="panel-heading">
			<h4>¿Asigna el impacto y la prioridad inicial a los incidentes que son escalados al grupo de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_333" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_333_0" name="eru_rb_333" type="radio" value="eru_rb_333_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_333_1" name="eru_rb_333" type="radio" value="eru_rb_333_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_333_2" name="eru_rb_333" type="radio" value="eru_rb_333_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_333_3" name="eru_rb_333" type="radio" value="eru_rb_333_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_333_4" name="eru_rb_333" type="radio" value="eru_rb_333_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_333_5" name="eru_rb_333" type="radio" value="eru_rb_333_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_334" class="panel panel-primary">
		<div id="panel_head_eru_rb_334" class="panel-heading">
			<h4>¿El service Desk realiza una investigación inicial del incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_334" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_334_0" name="eru_rb_334" type="radio" value="eru_rb_334_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_334_1" name="eru_rb_334" type="radio" value="eru_rb_334_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_334_2" name="eru_rb_334" type="radio" value="eru_rb_334_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_334_3" name="eru_rb_334" type="radio" value="eru_rb_334_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_334_4" name="eru_rb_334" type="radio" value="eru_rb_334_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_334_5" name="eru_rb_334" type="radio" value="eru_rb_334_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_335" class="panel panel-primary">
		<div id="panel_head_eru_rb_335" class="panel-heading">
			<h4>¿El service Desk monitorea y escala los incidentes al grupo de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_335" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_335_0" name="eru_rb_335" type="radio" value="eru_rb_335_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_335_1" name="eru_rb_335" type="radio" value="eru_rb_335_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_335_2" name="eru_rb_335" type="radio" value="eru_rb_335_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_335_3" name="eru_rb_335" type="radio" value="eru_rb_335_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_335_4" name="eru_rb_335" type="radio" value="eru_rb_335_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_335_5" name="eru_rb_335" type="radio" value="eru_rb_335_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_336" class="panel panel-primary">
		<div id="panel_head_eru_rb_336" class="panel-heading">
			<h4>¿El grupo de service Desk cierra y actualiza el registro de los incidentes solucionados por el grupo de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_336" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_336_0" name="eru_rb_336" type="radio" value="eru_rb_336_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_336_1" name="eru_rb_336" type="radio" value="eru_rb_336_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_336_2" name="eru_rb_336" type="radio" value="eru_rb_336_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_336_3" name="eru_rb_336" type="radio" value="eru_rb_336_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_336_4" name="eru_rb_336" type="radio" value="eru_rb_336_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_336_5" name="eru_rb_336" type="radio" value="eru_rb_336_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_337" class="panel panel-primary">
		<div id="panel_head_eru_rb_337" class="panel-heading">
			<h4>¿El service Desk mantiene informado al cliente acerca de los escalamientos que realiza al proceso de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_337" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_337_0" name="eru_rb_337" type="radio" value="eru_rb_337_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_337_1" name="eru_rb_337" type="radio" value="eru_rb_337_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_337_2" name="eru_rb_337" type="radio" value="eru_rb_337_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_337_3" name="eru_rb_337" type="radio" value="eru_rb_337_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_337_4" name="eru_rb_337" type="radio" value="eru_rb_337_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_337_5" name="eru_rb_337" type="radio" value="eru_rb_337_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_338" class="panel panel-primary">
		<div id="panel_head_eru_rb_338" class="panel-heading">
			<h4>¿El service Desk realiza un soporte de primer nivel de los incidentes reportados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_338" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_338_0" name="eru_rb_338" type="radio" value="eru_rb_338_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_338_1" name="eru_rb_338" type="radio" value="eru_rb_338_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_338_2" name="eru_rb_338" type="radio" value="eru_rb_338_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_338_3" name="eru_rb_338" type="radio" value="eru_rb_338_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_338_4" name="eru_rb_338" type="radio" value="eru_rb_338_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_338_5" name="eru_rb_338" type="radio" value="eru_rb_338_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Change Management</h1>
<div class="form-group">
	<div id="panel_eru_rb_339" class="panel panel-primary">
		<div id="panel_head_eru_rb_339" class="panel-heading">
			<h4>¿Existe un proceso formal de RFC para la solución de un Incidente (Cambio Urgente) cuando es requerido?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_339" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_339_0" name="eru_rb_339" type="radio" value="eru_rb_339_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_339_1" name="eru_rb_339" type="radio" value="eru_rb_339_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_339_2" name="eru_rb_339" type="radio" value="eru_rb_339_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_339_3" name="eru_rb_339" type="radio" value="eru_rb_339_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_339_4" name="eru_rb_339" type="radio" value="eru_rb_339_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_339_5" name="eru_rb_339" type="radio" value="eru_rb_339_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_340" class="panel panel-primary">
		<div id="panel_head_eru_rb_340" class="panel-heading">
			<h4>¿El grupo de IM asigna al proceso de Cambios los requerimientos de Cambio (RFC) solicitados por el usuario para su gestión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_340" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_340_0" name="eru_rb_340" type="radio" value="eru_rb_340_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_340_1" name="eru_rb_340" type="radio" value="eru_rb_340_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_340_2" name="eru_rb_340" type="radio" value="eru_rb_340_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_340_3" name="eru_rb_340" type="radio" value="eru_rb_340_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_340_4" name="eru_rb_340" type="radio" value="eru_rb_340_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_340_5" name="eru_rb_340" type="radio" value="eru_rb_340_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_341" class="panel panel-primary">
		<div id="panel_head_eru_rb_341" class="panel-heading">
			<h4>¿El proceso de cambios Notifica al proceso de Administración de Incidentes la programación y ejecución de los cambios solicitados sean urgentes o estándar?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_341" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_341_0" name="eru_rb_341" type="radio" value="eru_rb_341_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_341_1" name="eru_rb_341" type="radio" value="eru_rb_341_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_341_2" name="eru_rb_341" type="radio" value="eru_rb_341_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_341_3" name="eru_rb_341" type="radio" value="eru_rb_341_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_341_4" name="eru_rb_341" type="radio" value="eru_rb_341_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_341_5" name="eru_rb_341" type="radio" value="eru_rb_341_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_342" class="panel panel-primary">
		<div id="panel_head_eru_rb_342" class="panel-heading">
			<h4>¿Los incidentes causados por cambios implementados son relacionados con el registro de Cambio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_342" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_342_0" name="eru_rb_342" type="radio" value="eru_rb_342_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_342_1" name="eru_rb_342" type="radio" value="eru_rb_342_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_342_2" name="eru_rb_342" type="radio" value="eru_rb_342_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_342_3" name="eru_rb_342" type="radio" value="eru_rb_342_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_342_4" name="eru_rb_342" type="radio" value="eru_rb_342_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_342_5" name="eru_rb_342" type="radio" value="eru_rb_342_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_343" class="panel panel-primary">
		<div id="panel_head_eru_rb_343" class="panel-heading">
			<h4>¿En el comité de evaluación de cambios críticos se encuentra el Administrador de Incidentes involucrado?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_343" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_343_0" name="eru_rb_343" type="radio" value="eru_rb_343_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_343_1" name="eru_rb_343" type="radio" value="eru_rb_343_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_343_2" name="eru_rb_343" type="radio" value="eru_rb_343_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_343_3" name="eru_rb_343" type="radio" value="eru_rb_343_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_343_4" name="eru_rb_343" type="radio" value="eru_rb_343_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_343_5" name="eru_rb_343" type="radio" value="eru_rb_343_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_344" class="panel panel-primary">
		<div id="panel_head_eru_rb_344" class="panel-heading">
			<h4>¿Los registros de cambio creados a partir de una llamada de servicio son relacionados con el registro de llamada correspondiente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_344" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_344_0" name="eru_rb_344" type="radio" value="eru_rb_344_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_344_1" name="eru_rb_344" type="radio" value="eru_rb_344_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_344_2" name="eru_rb_344" type="radio" value="eru_rb_344_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_344_3" name="eru_rb_344" type="radio" value="eru_rb_344_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_344_4" name="eru_rb_344" type="radio" value="eru_rb_344_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_344_5" name="eru_rb_344" type="radio" value="eru_rb_344_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Configuration Management </h1>
<div class="form-group">
	<div id="panel_eru_rb_345" class="panel panel-primary">
		<div id="panel_head_eru_rb_345" class="panel-heading">
			<h4>¿Todos los elementos de configuración se encuentran en la base de datos de configuración (CMDB)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_345" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_345_0" name="eru_rb_345" type="radio" value="eru_rb_345_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_345_1" name="eru_rb_345" type="radio" value="eru_rb_345_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_345_2" name="eru_rb_345" type="radio" value="eru_rb_345_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_345_3" name="eru_rb_345" type="radio" value="eru_rb_345_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_345_4" name="eru_rb_345" type="radio" value="eru_rb_345_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_345_5" name="eru_rb_345" type="radio" value="eru_rb_345_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_346" class="panel panel-primary">
		<div id="panel_head_eru_rb_346" class="panel-heading">
			<h4>¿Todos los incidentes están relacionados con su correspondiente elemento de configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_346" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_346_0" name="eru_rb_346" type="radio" value="eru_rb_346_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_346_1" name="eru_rb_346" type="radio" value="eru_rb_346_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_346_2" name="eru_rb_346" type="radio" value="eru_rb_346_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_346_3" name="eru_rb_346" type="radio" value="eru_rb_346_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_346_4" name="eru_rb_346" type="radio" value="eru_rb_346_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_346_5" name="eru_rb_346" type="radio" value="eru_rb_346_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_347" class="panel panel-primary">
		<div id="panel_head_eru_rb_347" class="panel-heading">
			<h4>¿Las inconsistencias encontradas en la CMDB por proceso de Administración de Incidentes son reportadas a la administración de Configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_347" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_347_0" name="eru_rb_347" type="radio" value="eru_rb_347_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_347_1" name="eru_rb_347" type="radio" value="eru_rb_347_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_347_2" name="eru_rb_347" type="radio" value="eru_rb_347_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_347_3" name="eru_rb_347" type="radio" value="eru_rb_347_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_347_4" name="eru_rb_347" type="radio" value="eru_rb_347_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_347_5" name="eru_rb_347" type="radio" value="eru_rb_347_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_348" class="panel panel-primary">
		<div id="panel_head_eru_rb_348" class="panel-heading">
			<h4>¿La base de datos de personas se encuentra actualizada?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_348" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_348_0" name="eru_rb_348" type="radio" value="eru_rb_348_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_348_1" name="eru_rb_348" type="radio" value="eru_rb_348_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_348_2" name="eru_rb_348" type="radio" value="eru_rb_348_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_348_3" name="eru_rb_348" type="radio" value="eru_rb_348_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_348_4" name="eru_rb_348" type="radio" value="eru_rb_348_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_348_5" name="eru_rb_348" type="radio" value="eru_rb_348_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_349" class="panel panel-primary">
		<div id="panel_head_eru_rb_349" class="panel-heading">
			<h4>¿Las personas registradas en la CMDB están relacionadas con sus elementos de configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_349" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_349_0" name="eru_rb_349" type="radio" value="eru_rb_349_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_349_1" name="eru_rb_349" type="radio" value="eru_rb_349_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_349_2" name="eru_rb_349" type="radio" value="eru_rb_349_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_349_3" name="eru_rb_349" type="radio" value="eru_rb_349_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_349_4" name="eru_rb_349" type="radio" value="eru_rb_349_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_349_5" name="eru_rb_349" type="radio" value="eru_rb_349_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Problem Management</h1>
<div class="form-group">
	<div id="panel_eru_rb_350" class="panel panel-primary">
		<div id="panel_head_eru_rb_350" class="panel-heading">
			<h4>¿Todo nuevo error conocido es reportado al proceso de Administración de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_350" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_350_0" name="eru_rb_350" type="radio" value="eru_rb_350_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_350_1" name="eru_rb_350" type="radio" value="eru_rb_350_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_350_2" name="eru_rb_350" type="radio" value="eru_rb_350_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_350_3" name="eru_rb_350" type="radio" value="eru_rb_350_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_350_4" name="eru_rb_350" type="radio" value="eru_rb_350_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_350_5" name="eru_rb_350" type="radio" value="eru_rb_350_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_351" class="panel panel-primary">
		<div id="panel_head_eru_rb_351" class="panel-heading">
			<h4>¿Existe una base de datos de Errores conocidos y Problemas - KEDB?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_351" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_351_0" name="eru_rb_351" type="radio" value="eru_rb_351_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_351_1" name="eru_rb_351" type="radio" value="eru_rb_351_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_351_2" name="eru_rb_351" type="radio" value="eru_rb_351_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_351_3" name="eru_rb_351" type="radio" value="eru_rb_351_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_351_4" name="eru_rb_351" type="radio" value="eru_rb_351_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_351_5" name="eru_rb_351" type="radio" value="eru_rb_351_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_352" class="panel panel-primary">
		<div id="panel_head_eru_rb_352" class="panel-heading">
			<h4>¿Todos los errores conocidos contienen una Solución temporal registrada con acceso al proceso de IM?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_352" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_352_0" name="eru_rb_352" type="radio" value="eru_rb_352_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_352_1" name="eru_rb_352" type="radio" value="eru_rb_352_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_352_2" name="eru_rb_352" type="radio" value="eru_rb_352_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_352_3" name="eru_rb_352" type="radio" value="eru_rb_352_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_352_4" name="eru_rb_352" type="radio" value="eru_rb_352_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_352_5" name="eru_rb_352" type="radio" value="eru_rb_352_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_353" class="panel panel-primary">
		<div id="panel_head_eru_rb_353" class="panel-heading">
			<h4>¿El proceso de Administración de incidentes genera reportes de tendencias para el análisis de problemas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_353" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_353_0" name="eru_rb_353" type="radio" value="eru_rb_353_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_353_1" name="eru_rb_353" type="radio" value="eru_rb_353_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_353_2" name="eru_rb_353" type="radio" value="eru_rb_353_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_353_3" name="eru_rb_353" type="radio" value="eru_rb_353_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_353_4" name="eru_rb_353" type="radio" value="eru_rb_353_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_353_5" name="eru_rb_353" type="radio" value="eru_rb_353_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_354" class="panel panel-primary">
		<div id="panel_head_eru_rb_354" class="panel-heading">
			<h4>¿Los incidentes críticos son escalados a la Administración de Problemas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_354" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_354_0" name="eru_rb_354" type="radio" value="eru_rb_354_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_354_1" name="eru_rb_354" type="radio" value="eru_rb_354_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_354_2" name="eru_rb_354" type="radio" value="eru_rb_354_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_354_3" name="eru_rb_354" type="radio" value="eru_rb_354_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_354_4" name="eru_rb_354" type="radio" value="eru_rb_354_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_354_5" name="eru_rb_354" type="radio" value="eru_rb_354_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_355" class="panel panel-primary">
		<div id="panel_head_eru_rb_355" class="panel-heading">
			<h4>¿Los incidentes con causa raíz desconocida son escalados a la Administración de Problemas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_355" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_355_0" name="eru_rb_355" type="radio" value="eru_rb_355_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_355_1" name="eru_rb_355" type="radio" value="eru_rb_355_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_355_2" name="eru_rb_355" type="radio" value="eru_rb_355_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_355_3" name="eru_rb_355" type="radio" value="eru_rb_355_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_355_4" name="eru_rb_355" type="radio" value="eru_rb_355_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_355_5" name="eru_rb_355" type="radio" value="eru_rb_355_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_356" class="panel panel-primary">
		<div id="panel_head_eru_rb_356" class="panel-heading">
			<h4>¿Las soluciones temporales son suministradas siempre por la Administración de Problemas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_356" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_356_0" name="eru_rb_356" type="radio" value="eru_rb_356_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_356_1" name="eru_rb_356" type="radio" value="eru_rb_356_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_356_2" name="eru_rb_356" type="radio" value="eru_rb_356_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_356_3" name="eru_rb_356" type="radio" value="eru_rb_356_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_356_4" name="eru_rb_356" type="radio" value="eru_rb_356_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_356_5" name="eru_rb_356" type="radio" value="eru_rb_356_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_357" class="panel panel-primary">
		<div id="panel_head_eru_rb_357" class="panel-heading">
			<h4>¿Los registros de incidentes se relacionan con los registros de problemas si el incidente corresponde a un Error Conocido o Problema en la infraestructura soportada?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_357" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_357_0" name="eru_rb_357" type="radio" value="eru_rb_357_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_357_1" name="eru_rb_357" type="radio" value="eru_rb_357_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_357_2" name="eru_rb_357" type="radio" value="eru_rb_357_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_357_3" name="eru_rb_357" type="radio" value="eru_rb_357_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_357_4" name="eru_rb_357" type="radio" value="eru_rb_357_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_357_5" name="eru_rb_357" type="radio" value="eru_rb_357_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_358" class="panel panel-primary">
		<div id="panel_head_eru_rb_358" class="panel-heading">
			<h4>¿Se cuenta con un sistema de gestión del servicio de conocimiento o base de datos de conocimiento para incidentes y soluciones conocidos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_358" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_358_0" name="eru_rb_358" type="radio" value="eru_rb_358_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_358_1" name="eru_rb_358" type="radio" value="eru_rb_358_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_358_2" name="eru_rb_358" type="radio" value="eru_rb_358_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_358_3" name="eru_rb_358" type="radio" value="eru_rb_358_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_358_4" name="eru_rb_358" type="radio" value="eru_rb_358_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_358_5" name="eru_rb_358" type="radio" value="eru_rb_358_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_359" class="panel panel-primary">
		<div id="panel_head_eru_rb_359" class="panel-heading">
			<h4>¿La base de datos de conocimiento se mantiene actualizada con los incidentes que se presentan?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_359" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_359_0" name="eru_rb_359" type="radio" value="eru_rb_359_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_359_1" name="eru_rb_359" type="radio" value="eru_rb_359_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_359_2" name="eru_rb_359" type="radio" value="eru_rb_359_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_359_3" name="eru_rb_359" type="radio" value="eru_rb_359_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_359_4" name="eru_rb_359" type="radio" value="eru_rb_359_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_359_5" name="eru_rb_359" type="radio" value="eru_rb_359_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Release Management</h1>
<div class="form-group">
	<div id="panel_eru_rb_360" class="panel panel-primary">
		<div id="panel_head_eru_rb_360" class="panel-heading">
			<h4>¿El grupo de Incident Management escala al grupo de Release todos los reportes y logs de error de los usuarios finales por la implementación de un nuevo release?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_360" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_360_0" name="eru_rb_360" type="radio" value="eru_rb_360_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_360_1" name="eru_rb_360" type="radio" value="eru_rb_360_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_360_2" name="eru_rb_360" type="radio" value="eru_rb_360_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_360_3" name="eru_rb_360" type="radio" value="eru_rb_360_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_360_4" name="eru_rb_360" type="radio" value="eru_rb_360_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_360_5" name="eru_rb_360" type="radio" value="eru_rb_360_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_361" class="panel panel-primary">
		<div id="panel_head_eru_rb_361" class="panel-heading">
			<h4>¿El grupo de Incident Management chequea que las implementaciones realizadas por Release sean exitosas ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_361" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_361_0" name="eru_rb_361" type="radio" value="eru_rb_361_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_361_1" name="eru_rb_361" type="radio" value="eru_rb_361_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_361_2" name="eru_rb_361" type="radio" value="eru_rb_361_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_361_3" name="eru_rb_361" type="radio" value="eru_rb_361_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_361_4" name="eru_rb_361" type="radio" value="eru_rb_361_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_361_5" name="eru_rb_361" type="radio" value="eru_rb_361_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Availability Management </h1>
<div class="form-group">
	<div id="panel_eru_rb_362" class="panel panel-primary">
		<div id="panel_head_eru_rb_362" class="panel-heading">
			<h4>¿El proceso de availability Management vela por revisar y avisar acerca de pobres diagnósticos en una incidencia, herramientas, scripts, procedimientos que nos son claros para subir un servicio o procedimientos de escalamiento que no son claros?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_362" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_362_0" name="eru_rb_362" type="radio" value="eru_rb_362_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_362_1" name="eru_rb_362" type="radio" value="eru_rb_362_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_362_2" name="eru_rb_362" type="radio" value="eru_rb_362_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_362_3" name="eru_rb_362" type="radio" value="eru_rb_362_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_362_4" name="eru_rb_362" type="radio" value="eru_rb_362_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_362_5" name="eru_rb_362" type="radio" value="eru_rb_362_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_363" class="panel panel-primary">
		<div id="panel_head_eru_rb_363" class="panel-heading">
			<h4>¿El proceso de Incident Management entrega información al proceso de Availability acerca de la disponibilidad de los niveles de servicio pactados en los SLAs ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_363" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_363_0" name="eru_rb_363" type="radio" value="eru_rb_363_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_363_1" name="eru_rb_363" type="radio" value="eru_rb_363_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_363_2" name="eru_rb_363" type="radio" value="eru_rb_363_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_363_3" name="eru_rb_363" type="radio" value="eru_rb_363_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_363_4" name="eru_rb_363" type="radio" value="eru_rb_363_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_363_5" name="eru_rb_363" type="radio" value="eru_rb_363_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_364" class="panel panel-primary">
		<div id="panel_head_eru_rb_364" class="panel-heading">
			<h4>¿Los tiempos muertos de indisponibilidad de un servicio son tratados en conjunto con el proceso de Availability para que este sea menor e impacte menos al usuario?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_364" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_364_0" name="eru_rb_364" type="radio" value="eru_rb_364_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_364_1" name="eru_rb_364" type="radio" value="eru_rb_364_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_364_2" name="eru_rb_364" type="radio" value="eru_rb_364_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_364_3" name="eru_rb_364" type="radio" value="eru_rb_364_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_364_4" name="eru_rb_364" type="radio" value="eru_rb_364_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_364_5" name="eru_rb_364" type="radio" value="eru_rb_364_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Capacity Management</h1>
<div class="form-group">
	<div id="panel_eru_rb_365" class="panel panel-primary">
		<div id="panel_head_eru_rb_365" class="panel-heading">
			<h4>¿El proceso de Incident Management proporciona un índice de desempeño al proceso de Capacity, monitoreando los incidentes cuando estos aparecen?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_365" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_365_0" name="eru_rb_365" type="radio" value="eru_rb_365_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_365_1" name="eru_rb_365" type="radio" value="eru_rb_365_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_365_2" name="eru_rb_365" type="radio" value="eru_rb_365_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_365_3" name="eru_rb_365" type="radio" value="eru_rb_365_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_365_4" name="eru_rb_365" type="radio" value="eru_rb_365_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_365_5" name="eru_rb_365" type="radio" value="eru_rb_365_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_366" class="panel panel-primary">
		<div id="panel_head_eru_rb_366" class="panel-heading">
			<h4>¿El proceso de Capacity proporciona información relacionada con las herramientas de diagnóstico como modelos y scripts de la simulación para solucionar incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_366" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_366_0" name="eru_rb_366" type="radio" value="eru_rb_366_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_366_1" name="eru_rb_366" type="radio" value="eru_rb_366_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_366_2" name="eru_rb_366" type="radio" value="eru_rb_366_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_366_3" name="eru_rb_366" type="radio" value="eru_rb_366_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_366_4" name="eru_rb_366" type="radio" value="eru_rb_366_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_366_5" name="eru_rb_366" type="radio" value="eru_rb_366_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_367" class="panel panel-primary">
		<div id="panel_head_eru_rb_367" class="panel-heading">
			<h4>¿El proceso de Incident Management asegura que los incidentes son solucionados dentro de los niveles de capacidad mencionados en los SLAs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_367" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_367_0" name="eru_rb_367" type="radio" value="eru_rb_367_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_367_1" name="eru_rb_367" type="radio" value="eru_rb_367_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_367_2" name="eru_rb_367" type="radio" value="eru_rb_367_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_367_3" name="eru_rb_367" type="radio" value="eru_rb_367_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_367_4" name="eru_rb_367" type="radio" value="eru_rb_367_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_367_5" name="eru_rb_367" type="radio" value="eru_rb_367_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_368" class="panel panel-primary">
		<div id="panel_head_eru_rb_368" class="panel-heading">
			<h4>¿El proceso de Incident Management proporciona al proceso de capacidad información acerca de la relación de capacidad de incidentes Por ejemplo: listados no disponibles debido a la escasez de impresoras, o información no almacenada en discos ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_368" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_368_0" name="eru_rb_368" type="radio" value="eru_rb_368_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_368_1" name="eru_rb_368" type="radio" value="eru_rb_368_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_368_2" name="eru_rb_368" type="radio" value="eru_rb_368_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_368_3" name="eru_rb_368" type="radio" value="eru_rb_368_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_368_4" name="eru_rb_368" type="radio" value="eru_rb_368_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_368_5" name="eru_rb_368" type="radio" value="eru_rb_368_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Continuity Management</h1>
<div class="form-group">
	<div id="panel_eru_rb_369" class="panel panel-primary">
		<div id="panel_head_eru_rb_369" class="panel-heading">
			<h4>¿El grupo de Continuity Management entrega planes de continuidad del negocio (BCP) al proceso de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_369" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_369_0" name="eru_rb_369" type="radio" value="eru_rb_369_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_369_1" name="eru_rb_369" type="radio" value="eru_rb_369_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_369_2" name="eru_rb_369" type="radio" value="eru_rb_369_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_369_3" name="eru_rb_369" type="radio" value="eru_rb_369_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_369_4" name="eru_rb_369" type="radio" value="eru_rb_369_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_369_5" name="eru_rb_369" type="radio" value="eru_rb_369_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_370" class="panel panel-primary">
		<div id="panel_head_eru_rb_370" class="panel-heading">
			<h4>¿El proceso de Incident Management se acoge a los lineamientos que tiene el BCP?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_370" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_370_0" name="eru_rb_370" type="radio" value="eru_rb_370_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_370_1" name="eru_rb_370" type="radio" value="eru_rb_370_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_370_2" name="eru_rb_370" type="radio" value="eru_rb_370_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_370_3" name="eru_rb_370" type="radio" value="eru_rb_370_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_370_4" name="eru_rb_370" type="radio" value="eru_rb_370_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_370_5" name="eru_rb_370" type="radio" value="eru_rb_370_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Financial Management</h1>
<div class="form-group">
	<div id="panel_eru_rb_371" class="panel panel-primary">
		<div id="panel_head_eru_rb_371" class="panel-heading">
			<h4>¿La cantidad de tiempo, esfuerzo y el dinero que se gasta en resolver un incidente proporcionando a su vez Workarounds es registrado en la herramienta en donde se encuentran registrados estos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_371" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_371_0" name="eru_rb_371" type="radio" value="eru_rb_371_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_371_1" name="eru_rb_371" type="radio" value="eru_rb_371_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_371_2" name="eru_rb_371" type="radio" value="eru_rb_371_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_371_3" name="eru_rb_371" type="radio" value="eru_rb_371_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_371_4" name="eru_rb_371" type="radio" value="eru_rb_371_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_371_5" name="eru_rb_371" type="radio" value="eru_rb_371_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Service level Management</h1>
<div class="form-group">
	<div id="panel_eru_rb_372" class="panel panel-primary">
		<div id="panel_head_eru_rb_372" class="panel-heading">
			<h4>¿El proceso de IM proporciona reportes que permiten al grupo de niveles de servicio revisar objetivamente y regularmente los SLAs pactados ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_372" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_372_0" name="eru_rb_372" type="radio" value="eru_rb_372_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_372_1" name="eru_rb_372" type="radio" value="eru_rb_372_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_372_2" name="eru_rb_372" type="radio" value="eru_rb_372_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_372_3" name="eru_rb_372" type="radio" value="eru_rb_372_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_372_4" name="eru_rb_372" type="radio" value="eru_rb_372_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_372_5" name="eru_rb_372" type="radio" value="eru_rb_372_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_373" class="panel panel-primary">
		<div id="panel_head_eru_rb_373" class="panel-heading">
			<h4>¿El proceso de IM retroalimenta al proceso de Service Level Management acerca de inconsistencias, incumplimientos o acuerdos no alcanzables de los SLAs, OLAs y UCs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_373" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_373_0" name="eru_rb_373" type="radio" value="eru_rb_373_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_373_1" name="eru_rb_373" type="radio" value="eru_rb_373_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_373_2" name="eru_rb_373" type="radio" value="eru_rb_373_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_373_3" name="eru_rb_373" type="radio" value="eru_rb_373_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_373_4" name="eru_rb_373" type="radio" value="eru_rb_373_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_373_5" name="eru_rb_373" type="radio" value="eru_rb_373_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Security Management</h1>
<div class="form-group">
	<div id="panel_eru_rb_374" class="panel panel-primary">
		<div id="panel_head_eru_rb_374" class="panel-heading">
			<h4>¿El proceso de seguridad especifica mediante un documento al proceso de Incident Management las medidas para prevenir incidentes de seguridad?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_374" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_374_0" name="eru_rb_374" type="radio" value="eru_rb_374_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_374_1" name="eru_rb_374" type="radio" value="eru_rb_374_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_374_2" name="eru_rb_374" type="radio" value="eru_rb_374_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_374_3" name="eru_rb_374" type="radio" value="eru_rb_374_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_374_4" name="eru_rb_374" type="radio" value="eru_rb_374_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_374_5" name="eru_rb_374" type="radio" value="eru_rb_374_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_375" class="panel panel-primary">
		<div id="panel_head_eru_rb_375" class="panel-heading">
			<h4>¿El proceso de Security trabaja en conjunto con el proceso de Incident Management para resolver incidentes de Seguridad?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_375" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_375_0" name="eru_rb_375" type="radio" value="eru_rb_375_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_375_1" name="eru_rb_375" type="radio" value="eru_rb_375_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_375_2" name="eru_rb_375" type="radio" value="eru_rb_375_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_375_3" name="eru_rb_375" type="radio" value="eru_rb_375_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_375_4" name="eru_rb_375" type="radio" value="eru_rb_375_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_375_5" name="eru_rb_375" type="radio" value="eru_rb_375_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_376" class="panel panel-primary">
		<div id="panel_head_eru_rb_376" class="panel-heading">
			<h4>¿El proceso de Incident management conoce las políticas del manejo de incidentes de seguridad?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_376" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_376_0" name="eru_rb_376" type="radio" value="eru_rb_376_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_376_1" name="eru_rb_376" type="radio" value="eru_rb_376_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_376_2" name="eru_rb_376" type="radio" value="eru_rb_376_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_376_3" name="eru_rb_376" type="radio" value="eru_rb_376_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_376_4" name="eru_rb_376" type="radio" value="eru_rb_376_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_376_5" name="eru_rb_376" type="radio" value="eru_rb_376_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
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
	<script type="text/javascript" src="javascript/operacion_cuantitativa_procesos.js"></script>
</body>
</html>

