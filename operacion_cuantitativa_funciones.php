<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
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
		$_SESSION['idEncuesta'] = $idEncuesta;
	?>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<span class="navbar-brand">Operación de los servicios IT (Funciones) Cuantitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="operacion_cuantitativa_funciones_process.php" method="GET">
			<br><h1>FUNCIONES: Centro de servicio al usuario, Gestión Técnica, Gestión de aplicaciones, Posición organizacional, Posición de aplicaciones</h1>
<div class="form-group">
	<div id="panel_eru_rb_433" class="panel panel-primary">
		<div id="panel_head_eru_rb_433" class="panel-heading">
			<h4>¿Se cuenta con un centro de servicio al usuario - Service Desk debidamente conformado?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_433" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_433_0" name="eru_rb_433" type="radio" value="eru_rb_433_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_433_1" name="eru_rb_433" type="radio" value="eru_rb_433_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_433_2" name="eru_rb_433" type="radio" value="eru_rb_433_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_433_3" name="eru_rb_433" type="radio" value="eru_rb_433_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_433_4" name="eru_rb_433" type="radio" value="eru_rb_433_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_433_5" name="eru_rb_433" type="radio" value="eru_rb_433_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_434" class="panel panel-primary">
		<div id="panel_head_eru_rb_434" class="panel-heading">
			<h4>¿El service Desk cuenta con personal dedicado al manejo de eventos de servicio, recibidos por llamadas telefónicas, interface en línea o reporte automático de la infraestructura de los eventos (sistemas de monitoreo y reporte de alarmas)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_434" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_434_0" name="eru_rb_434" type="radio" value="eru_rb_434_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_434_1" name="eru_rb_434" type="radio" value="eru_rb_434_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_434_2" name="eru_rb_434" type="radio" value="eru_rb_434_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_434_3" name="eru_rb_434" type="radio" value="eru_rb_434_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_434_4" name="eru_rb_434" type="radio" value="eru_rb_434_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_434_5" name="eru_rb_434" type="radio" value="eru_rb_434_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_435" class="panel panel-primary">
		<div id="panel_head_eru_rb_435" class="panel-heading">
			<h4>¿El service Desk es el único punto de contacto para los usuarios en el día a día?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_435" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_435_0" name="eru_rb_435" type="radio" value="eru_rb_435_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_435_1" name="eru_rb_435" type="radio" value="eru_rb_435_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_435_2" name="eru_rb_435" type="radio" value="eru_rb_435_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_435_3" name="eru_rb_435" type="radio" value="eru_rb_435_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_435_4" name="eru_rb_435" type="radio" value="eru_rb_435_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_435_5" name="eru_rb_435" type="radio" value="eru_rb_435_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_436" class="panel panel-primary">
		<div id="panel_head_eru_rb_436" class="panel-heading">
			<h4>¿El service Desk cuenta con una herramienta o software especial de gestión de incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_436" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_436_0" name="eru_rb_436" type="radio" value="eru_rb_436_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_436_1" name="eru_rb_436" type="radio" value="eru_rb_436_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_436_2" name="eru_rb_436" type="radio" value="eru_rb_436_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_436_3" name="eru_rb_436" type="radio" value="eru_rb_436_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_436_4" name="eru_rb_436" type="radio" value="eru_rb_436_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_436_5" name="eru_rb_436" type="radio" value="eru_rb_436_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_437" class="panel panel-primary">
		<div id="panel_head_eru_rb_437" class="panel-heading">
			<h4>¿El service Desk es el centro de servicio al usuario para temas de gestión técnica, gestión de aplicaciones, gestión de operaciones de TI, soporte de terceros, cumplimiento de peticiones?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_437" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_437_0" name="eru_rb_437" type="radio" value="eru_rb_437_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_437_1" name="eru_rb_437" type="radio" value="eru_rb_437_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_437_2" name="eru_rb_437" type="radio" value="eru_rb_437_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_437_3" name="eru_rb_437" type="radio" value="eru_rb_437_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_437_4" name="eru_rb_437" type="radio" value="eru_rb_437_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_437_5" name="eru_rb_437" type="radio" value="eru_rb_437_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_438" class="panel panel-primary">
		<div id="panel_head_eru_rb_438" class="panel-heading">
			<h4>¿Se tiene definido el rol de Incident Mangement?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_438" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_438_0" name="eru_rb_438" type="radio" value="eru_rb_438_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_438_1" name="eru_rb_438" type="radio" value="eru_rb_438_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_438_2" name="eru_rb_438" type="radio" value="eru_rb_438_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_438_3" name="eru_rb_438" type="radio" value="eru_rb_438_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_438_4" name="eru_rb_438" type="radio" value="eru_rb_438_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_438_5" name="eru_rb_438" type="radio" value="eru_rb_438_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_439" class="panel panel-primary">
		<div id="panel_head_eru_rb_439" class="panel-heading">
			<h4>¿Existe métricas implementadas para analizar la operación del service Desk?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_439" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_439_0" name="eru_rb_439" type="radio" value="eru_rb_439_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_439_1" name="eru_rb_439" type="radio" value="eru_rb_439_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_439_2" name="eru_rb_439" type="radio" value="eru_rb_439_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_439_3" name="eru_rb_439" type="radio" value="eru_rb_439_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_439_4" name="eru_rb_439" type="radio" value="eru_rb_439_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_439_5" name="eru_rb_439" type="radio" value="eru_rb_439_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_440" class="panel panel-primary">
		<div id="panel_head_eru_rb_440" class="panel-heading">
			<h4>¿La gestión técnica presta servicio en temas de servidores, red, almacenamiento, bases de datos, directorio de servicios, computadoras, impresión, middleware, Internet en sus diferentes niveles?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_440" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_440_0" name="eru_rb_440" type="radio" value="eru_rb_440_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_440_1" name="eru_rb_440" type="radio" value="eru_rb_440_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_440_2" name="eru_rb_440" type="radio" value="eru_rb_440_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_440_3" name="eru_rb_440" type="radio" value="eru_rb_440_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_440_4" name="eru_rb_440" type="radio" value="eru_rb_440_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_440_5" name="eru_rb_440" type="radio" value="eru_rb_440_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_441" class="panel panel-primary">
		<div id="panel_head_eru_rb_441" class="panel-heading">
			<h4>¿Desde el service Desk se presta el soporte de primer nivel a las aplicaciones y se hacen los debidos escalamiento a los expertos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_441" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_441_0" name="eru_rb_441" type="radio" value="eru_rb_441_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_441_1" name="eru_rb_441" type="radio" value="eru_rb_441_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_441_2" name="eru_rb_441" type="radio" value="eru_rb_441_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_441_3" name="eru_rb_441" type="radio" value="eru_rb_441_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_441_4" name="eru_rb_441" type="radio" value="eru_rb_441_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_441_5" name="eru_rb_441" type="radio" value="eru_rb_441_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_442" class="panel panel-primary">
		<div id="panel_head_eru_rb_442" class="panel-heading">
			<h4>¿El personal tiene turnos de operadores y soporte, para asegurar el monitoreo y soporte de los eventos en la infraestructura y servicios de TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_442" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_442_0" name="eru_rb_442" type="radio" value="eru_rb_442_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_442_1" name="eru_rb_442" type="radio" value="eru_rb_442_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_442_2" name="eru_rb_442" type="radio" value="eru_rb_442_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_442_3" name="eru_rb_442" type="radio" value="eru_rb_442_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_442_4" name="eru_rb_442" type="radio" value="eru_rb_442_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_442_5" name="eru_rb_442" type="radio" value="eru_rb_442_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_443" class="panel panel-primary">
		<div id="panel_head_eru_rb_443" class="panel-heading">
			<h4>¿El datacenter cuenta con las características físicas, de seguridad física, elementos de disponibilidad (energía, aire acondicionado) apropiados para un centro de datos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_443" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_443_0" name="eru_rb_443" type="radio" value="eru_rb_443_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_443_1" name="eru_rb_443" type="radio" value="eru_rb_443_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_443_2" name="eru_rb_443" type="radio" value="eru_rb_443_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_443_3" name="eru_rb_443" type="radio" value="eru_rb_443_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_443_4" name="eru_rb_443" type="radio" value="eru_rb_443_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_443_5" name="eru_rb_443" type="radio" value="eru_rb_443_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_444" class="panel panel-primary">
		<div id="panel_head_eru_rb_444" class="panel-heading">
			<h4>¿La gestión de facilidades gestiona todo lo relacionado con centro de datos, contratos, consolidación y sitios de recuperación?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_444" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_444_0" name="eru_rb_444" type="radio" value="eru_rb_444_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_444_1" name="eru_rb_444" type="radio" value="eru_rb_444_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_444_2" name="eru_rb_444" type="radio" value="eru_rb_444_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_444_3" name="eru_rb_444" type="radio" value="eru_rb_444_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_444_4" name="eru_rb_444" type="radio" value="eru_rb_444_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_444_5" name="eru_rb_444" type="radio" value="eru_rb_444_5" class="form-control"></td>
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
	<script type="text/javascript" src="javascript/operacion_cuantitativa_funciones.js"></script>
</body>
</html>

