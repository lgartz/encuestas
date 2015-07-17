<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
				<span class="navbar-brand">Operación de los servicios IT (Actividades) Cauntitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="operacion_cuantitativa_actividades_process.php" method="GET">
			<br><h1>Detección y Registro </h1>
<div class="form-group">
	<div id="panel_eru_rb_139" class="panel panel-primary">
		<div id="panel_head_eru_rb_139" class="panel-heading">
			<h4>¿Existe una Base de Datos única para el registro de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_139" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_139_0" name="eru_rb_139" type="radio" value="eru_rb_139_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_139_1" name="eru_rb_139" type="radio" value="eru_rb_139_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_139_2" name="eru_rb_139" type="radio" value="eru_rb_139_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_139_3" name="eru_rb_139" type="radio" value="eru_rb_139_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_139_4" name="eru_rb_139" type="radio" value="eru_rb_139_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_139_5" name="eru_rb_139" type="radio" value="eru_rb_139_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_140" class="panel panel-primary">
		<div id="panel_head_eru_rb_140" class="panel-heading">
			<h4>¿Existe un identificador único para cada incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_140" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_140_0" name="eru_rb_140" type="radio" value="eru_rb_140_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_140_1" name="eru_rb_140" type="radio" value="eru_rb_140_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_140_2" name="eru_rb_140" type="radio" value="eru_rb_140_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_140_3" name="eru_rb_140" type="radio" value="eru_rb_140_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_140_4" name="eru_rb_140" type="radio" value="eru_rb_140_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_140_5" name="eru_rb_140" type="radio" value="eru_rb_140_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_141" class="panel panel-primary">
		<div id="panel_head_eru_rb_141" class="panel-heading">
			<h4>¿La documentación registrada de Incidentes esta estandarizada (Ej.: Descripción, Información, historial)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_141" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_141_0" name="eru_rb_141" type="radio" value="eru_rb_141_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_141_1" name="eru_rb_141" type="radio" value="eru_rb_141_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_141_2" name="eru_rb_141" type="radio" value="eru_rb_141_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_141_3" name="eru_rb_141" type="radio" value="eru_rb_141_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_141_4" name="eru_rb_141" type="radio" value="eru_rb_141_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_141_5" name="eru_rb_141" type="radio" value="eru_rb_141_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_142" class="panel panel-primary">
		<div id="panel_head_eru_rb_142" class="panel-heading">
			<h4>¿Existe un único punto de contacto para el reporte de todos los incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_142" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_142_0" name="eru_rb_142" type="radio" value="eru_rb_142_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_142_1" name="eru_rb_142" type="radio" value="eru_rb_142_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_142_2" name="eru_rb_142" type="radio" value="eru_rb_142_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_142_3" name="eru_rb_142" type="radio" value="eru_rb_142_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_142_4" name="eru_rb_142" type="radio" value="eru_rb_142_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_142_5" name="eru_rb_142" type="radio" value="eru_rb_142_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_143" class="panel panel-primary">
		<div id="panel_head_eru_rb_143" class="panel-heading">
			<h4>¿Todos los incidentes son reportados al único punto de contacto?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_143" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_143_0" name="eru_rb_143" type="radio" value="eru_rb_143_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_143_1" name="eru_rb_143" type="radio" value="eru_rb_143_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_143_2" name="eru_rb_143" type="radio" value="eru_rb_143_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_143_3" name="eru_rb_143" type="radio" value="eru_rb_143_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_143_4" name="eru_rb_143" type="radio" value="eru_rb_143_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_143_5" name="eru_rb_143" type="radio" value="eru_rb_143_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_144" class="panel panel-primary">
		<div id="panel_head_eru_rb_144" class="panel-heading">
			<h4>¿Los medios de acceso al único punto de contacto están al alcance de todos los usuarios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_144" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_144_0" name="eru_rb_144" type="radio" value="eru_rb_144_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_144_1" name="eru_rb_144" type="radio" value="eru_rb_144_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_144_2" name="eru_rb_144" type="radio" value="eru_rb_144_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_144_3" name="eru_rb_144" type="radio" value="eru_rb_144_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_144_4" name="eru_rb_144" type="radio" value="eru_rb_144_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_144_5" name="eru_rb_144" type="radio" value="eru_rb_144_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_145" class="panel panel-primary">
		<div id="panel_head_eru_rb_145" class="panel-heading">
			<h4>¿Todos los incidentes son registrados con su elemento de Configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_145" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_145_0" name="eru_rb_145" type="radio" value="eru_rb_145_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_145_1" name="eru_rb_145" type="radio" value="eru_rb_145_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_145_2" name="eru_rb_145" type="radio" value="eru_rb_145_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_145_3" name="eru_rb_145" type="radio" value="eru_rb_145_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_145_4" name="eru_rb_145" type="radio" value="eru_rb_145_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_145_5" name="eru_rb_145" type="radio" value="eru_rb_145_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_146" class="panel panel-primary">
		<div id="panel_head_eru_rb_146" class="panel-heading">
			<h4>¿Las inconsistencias de la CMDB son detectadas y reportadas a Configuration Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_146" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_146_0" name="eru_rb_146" type="radio" value="eru_rb_146_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_146_1" name="eru_rb_146" type="radio" value="eru_rb_146_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_146_2" name="eru_rb_146" type="radio" value="eru_rb_146_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_146_3" name="eru_rb_146" type="radio" value="eru_rb_146_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_146_4" name="eru_rb_146" type="radio" value="eru_rb_146_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_146_5" name="eru_rb_146" type="radio" value="eru_rb_146_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_147" class="panel panel-primary">
		<div id="panel_head_eru_rb_147" class="panel-heading">
			<h4>¿Esta identificada claramente la información o campos mínimos requeridos para el registro de un incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_147" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_147_0" name="eru_rb_147" type="radio" value="eru_rb_147_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_147_1" name="eru_rb_147" type="radio" value="eru_rb_147_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_147_2" name="eru_rb_147" type="radio" value="eru_rb_147_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_147_3" name="eru_rb_147" type="radio" value="eru_rb_147_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_147_4" name="eru_rb_147" type="radio" value="eru_rb_147_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_147_5" name="eru_rb_147" type="radio" value="eru_rb_147_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_148" class="panel panel-primary">
		<div id="panel_head_eru_rb_148" class="panel-heading">
			<h4>¿Está disponible la herramienta de gestión de llamadas por medio Web para que los usuarios finales hagan su propio registro y consultas de incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_148" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_148_0" name="eru_rb_148" type="radio" value="eru_rb_148_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_148_1" name="eru_rb_148" type="radio" value="eru_rb_148_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_148_2" name="eru_rb_148" type="radio" value="eru_rb_148_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_148_3" name="eru_rb_148" type="radio" value="eru_rb_148_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_148_4" name="eru_rb_148" type="radio" value="eru_rb_148_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_148_5" name="eru_rb_148" type="radio" value="eru_rb_148_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_149" class="panel panel-primary">
		<div id="panel_head_eru_rb_149" class="panel-heading">
			<h4>¿Los usuarios finales conocen y realizan su propio registro de incidentes por medio Web (40% óptimo)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_149" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_149_0" name="eru_rb_149" type="radio" value="eru_rb_149_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_149_1" name="eru_rb_149" type="radio" value="eru_rb_149_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_149_2" name="eru_rb_149" type="radio" value="eru_rb_149_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_149_3" name="eru_rb_149" type="radio" value="eru_rb_149_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_149_4" name="eru_rb_149" type="radio" value="eru_rb_149_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_149_5" name="eru_rb_149" type="radio" value="eru_rb_149_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_150" class="panel panel-primary">
		<div id="panel_head_eru_rb_150" class="panel-heading">
			<h4>¿Se controla la duplicidad de registro de incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_150" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_150_0" name="eru_rb_150" type="radio" value="eru_rb_150_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_150_1" name="eru_rb_150" type="radio" value="eru_rb_150_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_150_2" name="eru_rb_150" type="radio" value="eru_rb_150_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_150_3" name="eru_rb_150" type="radio" value="eru_rb_150_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_150_4" name="eru_rb_150" type="radio" value="eru_rb_150_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_150_5" name="eru_rb_150" type="radio" value="eru_rb_150_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_151" class="panel panel-primary">
		<div id="panel_head_eru_rb_151" class="panel-heading">
			<h4>¿El reporte de Incidentes por medio e-mail se realiza a través de un formulario predefinido?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_151" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_151_0" name="eru_rb_151" type="radio" value="eru_rb_151_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_151_1" name="eru_rb_151" type="radio" value="eru_rb_151_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_151_2" name="eru_rb_151" type="radio" value="eru_rb_151_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_151_3" name="eru_rb_151" type="radio" value="eru_rb_151_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_151_4" name="eru_rb_151" type="radio" value="eru_rb_151_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_151_5" name="eru_rb_151" type="radio" value="eru_rb_151_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_152" class="panel panel-primary">
		<div id="panel_head_eru_rb_152" class="panel-heading">
			<h4>¿Todos los incidentes que no son detectados automáticamente son registrados en la herramienta de gestión a través del Service Desk?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_152" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_152_0" name="eru_rb_152" type="radio" value="eru_rb_152_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_152_1" name="eru_rb_152" type="radio" value="eru_rb_152_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_152_2" name="eru_rb_152" type="radio" value="eru_rb_152_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_152_3" name="eru_rb_152" type="radio" value="eru_rb_152_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_152_4" name="eru_rb_152" type="radio" value="eru_rb_152_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_152_5" name="eru_rb_152" type="radio" value="eru_rb_152_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_153" class="panel panel-primary">
		<div id="panel_head_eru_rb_153" class="panel-heading">
			<h4>¿Los eventos automáticos registrados que no afectan o degradan el servicio (no son incidentes) son reportados a Operación management para su solución?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_153" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_153_0" name="eru_rb_153" type="radio" value="eru_rb_153_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_153_1" name="eru_rb_153" type="radio" value="eru_rb_153_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_153_2" name="eru_rb_153" type="radio" value="eru_rb_153_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_153_3" name="eru_rb_153" type="radio" value="eru_rb_153_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_153_4" name="eru_rb_153" type="radio" value="eru_rb_153_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_153_5" name="eru_rb_153" type="radio" value="eru_rb_153_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Clasificación y Soporte Inicial</h1>
<div class="form-group">
	<div id="panel_eru_rb_154" class="panel panel-primary">
		<div id="panel_head_eru_rb_154" class="panel-heading">
			<h4>¿Los SLAs de los servicios prestados están claramente definidos y entendidos por los diferentes grupos de soporte?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_154" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_154_0" name="eru_rb_154" type="radio" value="eru_rb_154_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_154_1" name="eru_rb_154" type="radio" value="eru_rb_154_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_154_2" name="eru_rb_154" type="radio" value="eru_rb_154_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_154_3" name="eru_rb_154" type="radio" value="eru_rb_154_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_154_4" name="eru_rb_154" type="radio" value="eru_rb_154_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_154_5" name="eru_rb_154" type="radio" value="eru_rb_154_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_155" class="panel panel-primary">
		<div id="panel_head_eru_rb_155" class="panel-heading">
			<h4>¿Los SLAs están parametrizados correctamente en la herramienta de gestión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_155" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_155_0" name="eru_rb_155" type="radio" value="eru_rb_155_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_155_1" name="eru_rb_155" type="radio" value="eru_rb_155_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_155_2" name="eru_rb_155" type="radio" value="eru_rb_155_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_155_3" name="eru_rb_155" type="radio" value="eru_rb_155_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_155_4" name="eru_rb_155" type="radio" value="eru_rb_155_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_155_5" name="eru_rb_155" type="radio" value="eru_rb_155_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_156" class="panel panel-primary">
		<div id="panel_head_eru_rb_156" class="panel-heading">
			<h4>¿Todos los incidentes están relacionados con el Servicio afectado y su nivel de servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_156" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_156_0" name="eru_rb_156" type="radio" value="eru_rb_156_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_156_1" name="eru_rb_156" type="radio" value="eru_rb_156_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_156_2" name="eru_rb_156" type="radio" value="eru_rb_156_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_156_3" name="eru_rb_156" type="radio" value="eru_rb_156_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_156_4" name="eru_rb_156" type="radio" value="eru_rb_156_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_156_5" name="eru_rb_156" type="radio" value="eru_rb_156_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_157" class="panel panel-primary">
		<div id="panel_head_eru_rb_157" class="panel-heading">
			<h4>¿La categoría del registro es seleccionada correctamente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_157" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_157_0" name="eru_rb_157" type="radio" value="eru_rb_157_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_157_1" name="eru_rb_157" type="radio" value="eru_rb_157_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_157_2" name="eru_rb_157" type="radio" value="eru_rb_157_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_157_3" name="eru_rb_157" type="radio" value="eru_rb_157_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_157_4" name="eru_rb_157" type="radio" value="eru_rb_157_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_157_5" name="eru_rb_157" type="radio" value="eru_rb_157_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_158" class="panel panel-primary">
		<div id="panel_head_eru_rb_158" class="panel-heading">
			<h4>¿El árbol de clasificación de incidentes está definido y parametrizados en la herramienta (según el estándar)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_158" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_158_0" name="eru_rb_158" type="radio" value="eru_rb_158_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_158_1" name="eru_rb_158" type="radio" value="eru_rb_158_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_158_2" name="eru_rb_158" type="radio" value="eru_rb_158_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_158_3" name="eru_rb_158" type="radio" value="eru_rb_158_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_158_4" name="eru_rb_158" type="radio" value="eru_rb_158_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_158_5" name="eru_rb_158" type="radio" value="eru_rb_158_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_159" class="panel panel-primary">
		<div id="panel_head_eru_rb_159" class="panel-heading">
			<h4>¿El único punto de contacto conoce el estándar de clasificación y lo utiliza correctamente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_159" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_159_0" name="eru_rb_159" type="radio" value="eru_rb_159_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_159_1" name="eru_rb_159" type="radio" value="eru_rb_159_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_159_2" name="eru_rb_159" type="radio" value="eru_rb_159_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_159_3" name="eru_rb_159" type="radio" value="eru_rb_159_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_159_4" name="eru_rb_159" type="radio" value="eru_rb_159_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_159_5" name="eru_rb_159" type="radio" value="eru_rb_159_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_160" class="panel panel-primary">
		<div id="panel_head_eru_rb_160" class="panel-heading">
			<h4>¿El único punto de contacto define la prioridad del incidente basado en el impacto al negocio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_160" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_160_0" name="eru_rb_160" type="radio" value="eru_rb_160_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_160_1" name="eru_rb_160" type="radio" value="eru_rb_160_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_160_2" name="eru_rb_160" type="radio" value="eru_rb_160_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_160_3" name="eru_rb_160" type="radio" value="eru_rb_160_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_160_4" name="eru_rb_160" type="radio" value="eru_rb_160_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_160_5" name="eru_rb_160" type="radio" value="eru_rb_160_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_161" class="panel panel-primary">
		<div id="panel_head_eru_rb_161" class="panel-heading">
			<h4>¿Se asignan las prioridades con una matriz de Impacto / Urgencia?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_161" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_161_0" name="eru_rb_161" type="radio" value="eru_rb_161_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_161_1" name="eru_rb_161" type="radio" value="eru_rb_161_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_161_2" name="eru_rb_161" type="radio" value="eru_rb_161_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_161_3" name="eru_rb_161" type="radio" value="eru_rb_161_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_161_4" name="eru_rb_161" type="radio" value="eru_rb_161_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_161_5" name="eru_rb_161" type="radio" value="eru_rb_161_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_162" class="panel panel-primary">
		<div id="panel_head_eru_rb_162" class="panel-heading">
			<h4>¿Los grupos solucionadores están identificados y registrados en la herramienta de gestión junto con sus alcances?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_162" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_162_0" name="eru_rb_162" type="radio" value="eru_rb_162_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_162_1" name="eru_rb_162" type="radio" value="eru_rb_162_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_162_2" name="eru_rb_162" type="radio" value="eru_rb_162_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_162_3" name="eru_rb_162" type="radio" value="eru_rb_162_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_162_4" name="eru_rb_162" type="radio" value="eru_rb_162_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_162_5" name="eru_rb_162" type="radio" value="eru_rb_162_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_163" class="panel panel-primary">
		<div id="panel_head_eru_rb_163" class="panel-heading">
			<h4>¿Los alcances de cada grupo solucionador son claros para el único punto de contacto y para el grupo de IM?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_163" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_163_0" name="eru_rb_163" type="radio" value="eru_rb_163_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_163_1" name="eru_rb_163" type="radio" value="eru_rb_163_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_163_2" name="eru_rb_163" type="radio" value="eru_rb_163_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_163_3" name="eru_rb_163" type="radio" value="eru_rb_163_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_163_4" name="eru_rb_163" type="radio" value="eru_rb_163_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_163_5" name="eru_rb_163" type="radio" value="eru_rb_163_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_164" class="panel panel-primary">
		<div id="panel_head_eru_rb_164" class="panel-heading">
			<h4>¿Están definidos los Checklist para los incidentes frecuentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_164" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_164_0" name="eru_rb_164" type="radio" value="eru_rb_164_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_164_1" name="eru_rb_164" type="radio" value="eru_rb_164_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_164_2" name="eru_rb_164" type="radio" value="eru_rb_164_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_164_3" name="eru_rb_164" type="radio" value="eru_rb_164_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_164_4" name="eru_rb_164" type="radio" value="eru_rb_164_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_164_5" name="eru_rb_164" type="radio" value="eru_rb_164_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_165" class="panel panel-primary">
		<div id="panel_head_eru_rb_165" class="panel-heading">
			<h4>¿Están definidas las plantillas de documentación para los incidentes frecuentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_165" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_165_0" name="eru_rb_165" type="radio" value="eru_rb_165_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_165_1" name="eru_rb_165" type="radio" value="eru_rb_165_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_165_2" name="eru_rb_165" type="radio" value="eru_rb_165_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_165_3" name="eru_rb_165" type="radio" value="eru_rb_165_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_165_4" name="eru_rb_165" type="radio" value="eru_rb_165_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_165_5" name="eru_rb_165" type="radio" value="eru_rb_165_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_166" class="panel panel-primary">
		<div id="panel_head_eru_rb_166" class="panel-heading">
			<h4>¿Existe una Base de Datos con Errores Conocidos y problemas y sus soluciones - KEDB (definitivas o temporales) con acceso al único punto de contacto y al proceso de IM?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_166" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_166_0" name="eru_rb_166" type="radio" value="eru_rb_166_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_166_1" name="eru_rb_166" type="radio" value="eru_rb_166_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_166_2" name="eru_rb_166" type="radio" value="eru_rb_166_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_166_3" name="eru_rb_166" type="radio" value="eru_rb_166_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_166_4" name="eru_rb_166" type="radio" value="eru_rb_166_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_166_5" name="eru_rb_166" type="radio" value="eru_rb_166_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_167" class="panel panel-primary">
		<div id="panel_head_eru_rb_167" class="panel-heading">
			<h4>¿Existe una Base de Datos con Errores Conocidos y problemas y sus soluciones - KEDB (definitivas o temporales) con acceso al único punto de contacto y al proceso de IM?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_167" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_167_0" name="eru_rb_167" type="radio" value="eru_rb_167_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_167_1" name="eru_rb_167" type="radio" value="eru_rb_167_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_167_2" name="eru_rb_167" type="radio" value="eru_rb_167_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_167_3" name="eru_rb_167" type="radio" value="eru_rb_167_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_167_4" name="eru_rb_167" type="radio" value="eru_rb_167_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_167_5" name="eru_rb_167" type="radio" value="eru_rb_167_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_168" class="panel panel-primary">
		<div id="panel_head_eru_rb_168" class="panel-heading">
			<h4>¿En la herramienta de gestión se realiza la relación de incidentes con errores conocidos o problemas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_168" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_168_0" name="eru_rb_168" type="radio" value="eru_rb_168_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_168_1" name="eru_rb_168" type="radio" value="eru_rb_168_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_168_2" name="eru_rb_168" type="radio" value="eru_rb_168_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_168_3" name="eru_rb_168" type="radio" value="eru_rb_168_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_168_4" name="eru_rb_168" type="radio" value="eru_rb_168_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_168_5" name="eru_rb_168" type="radio" value="eru_rb_168_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_169" class="panel panel-primary">
		<div id="panel_head_eru_rb_169" class="panel-heading">
			<h4>¿Existe una Base de datos de FAQs con acceso a todo el personal del proceso de incidentes y Usuarios Autorizados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_169" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_169_0" name="eru_rb_169" type="radio" value="eru_rb_169_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_169_1" name="eru_rb_169" type="radio" value="eru_rb_169_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_169_2" name="eru_rb_169" type="radio" value="eru_rb_169_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_169_3" name="eru_rb_169" type="radio" value="eru_rb_169_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_169_4" name="eru_rb_169" type="radio" value="eru_rb_169_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_169_5" name="eru_rb_169" type="radio" value="eru_rb_169_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_170" class="panel panel-primary">
		<div id="panel_head_eru_rb_170" class="panel-heading">
			<h4>¿Se notifica al proceso de problemas la existencia de un posible problema (Incidente con Causa Raíz desconocida o Incidente Crítico)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_170" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_170_0" name="eru_rb_170" type="radio" value="eru_rb_170_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_170_1" name="eru_rb_170" type="radio" value="eru_rb_170_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_170_2" name="eru_rb_170" type="radio" value="eru_rb_170_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_170_3" name="eru_rb_170" type="radio" value="eru_rb_170_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_170_4" name="eru_rb_170" type="radio" value="eru_rb_170_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_170_5" name="eru_rb_170" type="radio" value="eru_rb_170_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_171" class="panel panel-primary">
		<div id="panel_head_eru_rb_171" class="panel-heading">
			<h4>¿Existe una herramienta de control remoto para el único punto de contacto?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_171" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_171_0" name="eru_rb_171" type="radio" value="eru_rb_171_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_171_1" name="eru_rb_171" type="radio" value="eru_rb_171_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_171_2" name="eru_rb_171" type="radio" value="eru_rb_171_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_171_3" name="eru_rb_171" type="radio" value="eru_rb_171_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_171_4" name="eru_rb_171" type="radio" value="eru_rb_171_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_171_5" name="eru_rb_171" type="radio" value="eru_rb_171_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_172" class="panel panel-primary">
		<div id="panel_head_eru_rb_172" class="panel-heading">
			<h4>¿El grupo de IM soluciona requerimientos de Reset o desbloqueo de password?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_172" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_172_0" name="eru_rb_172" type="radio" value="eru_rb_172_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_172_1" name="eru_rb_172" type="radio" value="eru_rb_172_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_172_2" name="eru_rb_172" type="radio" value="eru_rb_172_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_172_3" name="eru_rb_172" type="radio" value="eru_rb_172_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_172_4" name="eru_rb_172" type="radio" value="eru_rb_172_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_172_5" name="eru_rb_172" type="radio" value="eru_rb_172_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_173" class="panel panel-primary">
		<div id="panel_head_eru_rb_173" class="panel-heading">
			<h4>¿Se realiza correlación de llamadas de usuario con incidentes de plataforma?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_173" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_173_0" name="eru_rb_173" type="radio" value="eru_rb_173_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_173_1" name="eru_rb_173" type="radio" value="eru_rb_173_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_173_2" name="eru_rb_173" type="radio" value="eru_rb_173_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_173_3" name="eru_rb_173" type="radio" value="eru_rb_173_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_173_4" name="eru_rb_173" type="radio" value="eru_rb_173_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_173_5" name="eru_rb_173" type="radio" value="eru_rb_173_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Investigación y Diagnóstico</h1>
<div class="form-group">
	<div id="panel_eru_rb_174" class="panel panel-primary">
		<div id="panel_head_eru_rb_174" class="panel-heading">
			<h4>¿Para incidentes críticos la notificación al nivel solucionador se realiza telefónicamente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_174" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_174_0" name="eru_rb_174" type="radio" value="eru_rb_174_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_174_1" name="eru_rb_174" type="radio" value="eru_rb_174_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_174_2" name="eru_rb_174" type="radio" value="eru_rb_174_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_174_3" name="eru_rb_174" type="radio" value="eru_rb_174_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_174_4" name="eru_rb_174" type="radio" value="eru_rb_174_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_174_5" name="eru_rb_174" type="radio" value="eru_rb_174_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_175" class="panel panel-primary">
		<div id="panel_head_eru_rb_175" class="panel-heading">
			<h4>¿Los incidentes se atienden por orden de prioridad ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_175" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_175_0" name="eru_rb_175" type="radio" value="eru_rb_175_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_175_1" name="eru_rb_175" type="radio" value="eru_rb_175_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_175_2" name="eru_rb_175" type="radio" value="eru_rb_175_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_175_3" name="eru_rb_175" type="radio" value="eru_rb_175_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_175_4" name="eru_rb_175" type="radio" value="eru_rb_175_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_175_5" name="eru_rb_175" type="radio" value="eru_rb_175_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_176" class="panel panel-primary">
		<div id="panel_head_eru_rb_176" class="panel-heading">
			<h4>¿Se realiza la actualización continua de la historia del incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_176" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_176_0" name="eru_rb_176" type="radio" value="eru_rb_176_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_176_1" name="eru_rb_176" type="radio" value="eru_rb_176_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_176_2" name="eru_rb_176" type="radio" value="eru_rb_176_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_176_3" name="eru_rb_176" type="radio" value="eru_rb_176_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_176_4" name="eru_rb_176" type="radio" value="eru_rb_176_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_176_5" name="eru_rb_176" type="radio" value="eru_rb_176_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_177" class="panel panel-primary">
		<div id="panel_head_eru_rb_177" class="panel-heading">
			<h4>¿El único punto de contacto mantiene informado al cliente sobre el progreso de la solución (Cambio de Estado, Cambio de grupo solucionador, cambio en tiempo estimado de solución)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_177" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_177_0" name="eru_rb_177" type="radio" value="eru_rb_177_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_177_1" name="eru_rb_177" type="radio" value="eru_rb_177_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_177_2" name="eru_rb_177" type="radio" value="eru_rb_177_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_177_3" name="eru_rb_177" type="radio" value="eru_rb_177_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_177_4" name="eru_rb_177" type="radio" value="eru_rb_177_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_177_5" name="eru_rb_177" type="radio" value="eru_rb_177_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_178" class="panel panel-primary">
		<div id="panel_head_eru_rb_178" class="panel-heading">
			<h4>¿El estado registrado del incidente refleja la situación actual del mismo?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_178" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_178_0" name="eru_rb_178" type="radio" value="eru_rb_178_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_178_1" name="eru_rb_178" type="radio" value="eru_rb_178_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_178_2" name="eru_rb_178" type="radio" value="eru_rb_178_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_178_3" name="eru_rb_178" type="radio" value="eru_rb_178_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_178_4" name="eru_rb_178" type="radio" value="eru_rb_178_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_178_5" name="eru_rb_178" type="radio" value="eru_rb_178_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_179" class="panel panel-primary">
		<div id="panel_head_eru_rb_179" class="panel-heading">
			<h4>¿Si es requerido, el único punto de contacto re-evalúa el impacto y prioridad asignada acorde con los SLAs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_179" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_179_0" name="eru_rb_179" type="radio" value="eru_rb_179_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_179_1" name="eru_rb_179" type="radio" value="eru_rb_179_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_179_2" name="eru_rb_179" type="radio" value="eru_rb_179_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_179_3" name="eru_rb_179" type="radio" value="eru_rb_179_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_179_4" name="eru_rb_179" type="radio" value="eru_rb_179_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_179_5" name="eru_rb_179" type="radio" value="eru_rb_179_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_180" class="panel panel-primary">
		<div id="panel_head_eru_rb_180" class="panel-heading">
			<h4>¿El único punto de contacto realiza un monitoreo continuo a la solución del incidente y notifica al Incidente Manager incumplimiento en los tiempos de solución según los SLAs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_180" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_180_0" name="eru_rb_180" type="radio" value="eru_rb_180_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_180_1" name="eru_rb_180" type="radio" value="eru_rb_180_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_180_2" name="eru_rb_180" type="radio" value="eru_rb_180_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_180_3" name="eru_rb_180" type="radio" value="eru_rb_180_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_180_4" name="eru_rb_180" type="radio" value="eru_rb_180_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_180_5" name="eru_rb_180" type="radio" value="eru_rb_180_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_181" class="panel panel-primary">
		<div id="panel_head_eru_rb_181" class="panel-heading">
			<h4>¿El Inicident Manager vigila el cumplimiento de los tiempos de solución de los incidentes según los SLAs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_181" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_181_0" name="eru_rb_181" type="radio" value="eru_rb_181_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_181_1" name="eru_rb_181" type="radio" value="eru_rb_181_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_181_2" name="eru_rb_181" type="radio" value="eru_rb_181_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_181_3" name="eru_rb_181" type="radio" value="eru_rb_181_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_181_4" name="eru_rb_181" type="radio" value="eru_rb_181_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_181_5" name="eru_rb_181" type="radio" value="eru_rb_181_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_182" class="panel panel-primary">
		<div id="panel_head_eru_rb_182" class="panel-heading">
			<h4>¿Los especialistas notifican y registran nuevos problemas encontrados y son asignados al proceso correspondiente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_182" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_182_0" name="eru_rb_182" type="radio" value="eru_rb_182_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_182_1" name="eru_rb_182" type="radio" value="eru_rb_182_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_182_2" name="eru_rb_182" type="radio" value="eru_rb_182_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_182_3" name="eru_rb_182" type="radio" value="eru_rb_182_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_182_4" name="eru_rb_182" type="radio" value="eru_rb_182_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_182_5" name="eru_rb_182" type="radio" value="eru_rb_182_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_183" class="panel panel-primary">
		<div id="panel_head_eru_rb_183" class="panel-heading">
			<h4>¿El 2 nivel de soporte realiza el escalamiento a 3 nivel de soporte cuando es requerido?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_183" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_183_0" name="eru_rb_183" type="radio" value="eru_rb_183_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_183_1" name="eru_rb_183" type="radio" value="eru_rb_183_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_183_2" name="eru_rb_183" type="radio" value="eru_rb_183_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_183_3" name="eru_rb_183" type="radio" value="eru_rb_183_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_183_4" name="eru_rb_183" type="radio" value="eru_rb_183_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_183_5" name="eru_rb_183" type="radio" value="eru_rb_183_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_184" class="panel panel-primary">
		<div id="panel_head_eru_rb_184" class="panel-heading">
			<h4>¿Siempre existe una verificación de Incidentes pasados con el mismo Síntoma o relación con un error conocido o problema?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_184" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_184_0" name="eru_rb_184" type="radio" value="eru_rb_184_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_184_1" name="eru_rb_184" type="radio" value="eru_rb_184_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_184_2" name="eru_rb_184" type="radio" value="eru_rb_184_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_184_3" name="eru_rb_184" type="radio" value="eru_rb_184_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_184_4" name="eru_rb_184" type="radio" value="eru_rb_184_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_184_5" name="eru_rb_184" type="radio" value="eru_rb_184_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_185" class="panel panel-primary">
		<div id="panel_head_eru_rb_185" class="panel-heading">
			<h4>¿Existe una matriz de Escalamiento funcional y jerárquico con sus responsables y tiempos definidos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_185" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_185_0" name="eru_rb_185" type="radio" value="eru_rb_185_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_185_1" name="eru_rb_185" type="radio" value="eru_rb_185_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_185_2" name="eru_rb_185" type="radio" value="eru_rb_185_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_185_3" name="eru_rb_185" type="radio" value="eru_rb_185_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_185_4" name="eru_rb_185" type="radio" value="eru_rb_185_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_185_5" name="eru_rb_185" type="radio" value="eru_rb_185_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_186" class="panel panel-primary">
		<div id="panel_head_eru_rb_186" class="panel-heading">
			<h4>¿Está definido el ciclo de vida de un incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_186" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_186_0" name="eru_rb_186" type="radio" value="eru_rb_186_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_186_1" name="eru_rb_186" type="radio" value="eru_rb_186_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_186_2" name="eru_rb_186" type="radio" value="eru_rb_186_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_186_3" name="eru_rb_186" type="radio" value="eru_rb_186_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_186_4" name="eru_rb_186" type="radio" value="eru_rb_186_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_186_5" name="eru_rb_186" type="radio" value="eru_rb_186_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Resolver el incidente y recuperar el servicio</h1>
<div class="form-group">
	<div id="panel_eru_rb_187" class="panel panel-primary">
		<div id="panel_head_eru_rb_187" class="panel-heading">
			<h4>¿La documentación de la solución contiene todas las instrucciones ejecutadas para la recuperación del incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_187" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_187_0" name="eru_rb_187" type="radio" value="eru_rb_187_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_187_1" name="eru_rb_187" type="radio" value="eru_rb_187_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_187_2" name="eru_rb_187" type="radio" value="eru_rb_187_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_187_3" name="eru_rb_187" type="radio" value="eru_rb_187_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_187_4" name="eru_rb_187" type="radio" value="eru_rb_187_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_187_5" name="eru_rb_187" type="radio" value="eru_rb_187_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_188" class="panel panel-primary">
		<div id="panel_head_eru_rb_188" class="panel-heading">
			<h4>¿Los n-niveles solucionadores notifican al único punto de contacto cuando realizan la recuperación del incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_188" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_188_0" name="eru_rb_188" type="radio" value="eru_rb_188_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_188_1" name="eru_rb_188" type="radio" value="eru_rb_188_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_188_2" name="eru_rb_188" type="radio" value="eru_rb_188_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_188_3" name="eru_rb_188" type="radio" value="eru_rb_188_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_188_4" name="eru_rb_188" type="radio" value="eru_rb_188_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_188_5" name="eru_rb_188" type="radio" value="eru_rb_188_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_189" class="panel panel-primary">
		<div id="panel_head_eru_rb_189" class="panel-heading">
			<h4>¿Se notifica al n-nivel del escalamiento jerárquico alcanzado sobre la solución del incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_189" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_189_0" name="eru_rb_189" type="radio" value="eru_rb_189_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_189_1" name="eru_rb_189" type="radio" value="eru_rb_189_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_189_2" name="eru_rb_189" type="radio" value="eru_rb_189_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_189_3" name="eru_rb_189" type="radio" value="eru_rb_189_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_189_4" name="eru_rb_189" type="radio" value="eru_rb_189_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_189_5" name="eru_rb_189" type="radio" value="eru_rb_189_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_190" class="panel panel-primary">
		<div id="panel_head_eru_rb_190" class="panel-heading">
			<h4>¿Se realiza una re-clasificación del incidente cuando sea requerido?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_190" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_190_0" name="eru_rb_190" type="radio" value="eru_rb_190_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_190_1" name="eru_rb_190" type="radio" value="eru_rb_190_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_190_2" name="eru_rb_190" type="radio" value="eru_rb_190_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_190_3" name="eru_rb_190" type="radio" value="eru_rb_190_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_190_4" name="eru_rb_190" type="radio" value="eru_rb_190_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_190_5" name="eru_rb_190" type="radio" value="eru_rb_190_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_191" class="panel panel-primary">
		<div id="panel_head_eru_rb_191" class="panel-heading">
			<h4>¿La fecha registrada de solución está acorde con la fecha de la implementación de la solución?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_191" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_191_0" name="eru_rb_191" type="radio" value="eru_rb_191_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_191_1" name="eru_rb_191" type="radio" value="eru_rb_191_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_191_2" name="eru_rb_191" type="radio" value="eru_rb_191_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_191_3" name="eru_rb_191" type="radio" value="eru_rb_191_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_191_4" name="eru_rb_191" type="radio" value="eru_rb_191_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_191_5" name="eru_rb_191" type="radio" value="eru_rb_191_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_192" class="panel panel-primary">
		<div id="panel_head_eru_rb_192" class="panel-heading">
			<h4>¿Una solución temporal que restaure el servicio resuelve el incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_192" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_192_0" name="eru_rb_192" type="radio" value="eru_rb_192_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_192_1" name="eru_rb_192" type="radio" value="eru_rb_192_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_192_2" name="eru_rb_192" type="radio" value="eru_rb_192_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_192_3" name="eru_rb_192" type="radio" value="eru_rb_192_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_192_4" name="eru_rb_192" type="radio" value="eru_rb_192_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_192_5" name="eru_rb_192" type="radio" value="eru_rb_192_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_193" class="panel panel-primary">
		<div id="panel_head_eru_rb_193" class="panel-heading">
			<h4>¿Existen procedimientos para la solución de un incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_193" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_193_0" name="eru_rb_193" type="radio" value="eru_rb_193_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_193_1" name="eru_rb_193" type="radio" value="eru_rb_193_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_193_2" name="eru_rb_193" type="radio" value="eru_rb_193_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_193_3" name="eru_rb_193" type="radio" value="eru_rb_193_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_193_4" name="eru_rb_193" type="radio" value="eru_rb_193_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_193_5" name="eru_rb_193" type="radio" value="eru_rb_193_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Confirmación y Cierre</h1>
<div class="form-group">
	<div id="panel_eru_rb_194" class="panel panel-primary">
		<div id="panel_head_eru_rb_194" class="panel-heading">
			<h4>¿Se categoriza el motivo del cierre (Código de Cierre)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_194" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_194_0" name="eru_rb_194" type="radio" value="eru_rb_194_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_194_1" name="eru_rb_194" type="radio" value="eru_rb_194_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_194_2" name="eru_rb_194" type="radio" value="eru_rb_194_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_194_3" name="eru_rb_194" type="radio" value="eru_rb_194_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_194_4" name="eru_rb_194" type="radio" value="eru_rb_194_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_194_5" name="eru_rb_194" type="radio" value="eru_rb_194_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_195" class="panel panel-primary">
		<div id="panel_head_eru_rb_195" class="panel-heading">
			<h4>¿Se verifica la correcta documentación del incidente en cuanto a (Categoría, Clasificación, Descripción, Elemento de Configuración, SLA, Prioridad, Solución, Código de Cierre)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_195" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_195_0" name="eru_rb_195" type="radio" value="eru_rb_195_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_195_1" name="eru_rb_195" type="radio" value="eru_rb_195_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_195_2" name="eru_rb_195" type="radio" value="eru_rb_195_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_195_3" name="eru_rb_195" type="radio" value="eru_rb_195_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_195_4" name="eru_rb_195" type="radio" value="eru_rb_195_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_195_5" name="eru_rb_195" type="radio" value="eru_rb_195_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_196" class="panel panel-primary">
		<div id="panel_head_eru_rb_196" class="panel-heading">
			<h4>¿Se identifican los casos que son FAQs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_196" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_196_0" name="eru_rb_196" type="radio" value="eru_rb_196_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_196_1" name="eru_rb_196" type="radio" value="eru_rb_196_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_196_2" name="eru_rb_196" type="radio" value="eru_rb_196_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_196_3" name="eru_rb_196" type="radio" value="eru_rb_196_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_196_4" name="eru_rb_196" type="radio" value="eru_rb_196_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_196_5" name="eru_rb_196" type="radio" value="eru_rb_196_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_197" class="panel panel-primary">
		<div id="panel_head_eru_rb_197" class="panel-heading">
			<h4>¿Se identifican nuevas plantillas para documentación de Incidentes y se solicita su creación?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_197" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_197_0" name="eru_rb_197" type="radio" value="eru_rb_197_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_197_1" name="eru_rb_197" type="radio" value="eru_rb_197_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_197_2" name="eru_rb_197" type="radio" value="eru_rb_197_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_197_3" name="eru_rb_197" type="radio" value="eru_rb_197_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_197_4" name="eru_rb_197" type="radio" value="eru_rb_197_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_197_5" name="eru_rb_197" type="radio" value="eru_rb_197_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Confirmación y Cierre</h1>
<div class="form-group">
	<div id="panel_eru_rb_198" class="panel panel-primary">
		<div id="panel_head_eru_rb_198" class="panel-heading">
			<h4>¿Se notifica al service Desk cuando el incidente queda pendiente de una acción de por parte de él?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_198" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_198_0" name="eru_rb_198" type="radio" value="eru_rb_198_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_198_1" name="eru_rb_198" type="radio" value="eru_rb_198_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_198_2" name="eru_rb_198" type="radio" value="eru_rb_198_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_198_3" name="eru_rb_198" type="radio" value="eru_rb_198_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_198_4" name="eru_rb_198" type="radio" value="eru_rb_198_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_198_5" name="eru_rb_198" type="radio" value="eru_rb_198_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_199" class="panel panel-primary">
		<div id="panel_head_eru_rb_199" class="panel-heading">
			<h4>¿Los reportes de gestión son divulgados al Cliente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_199" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_199_0" name="eru_rb_199" type="radio" value="eru_rb_199_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_199_1" name="eru_rb_199" type="radio" value="eru_rb_199_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_199_2" name="eru_rb_199" type="radio" value="eru_rb_199_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_199_3" name="eru_rb_199" type="radio" value="eru_rb_199_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_199_4" name="eru_rb_199" type="radio" value="eru_rb_199_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_199_5" name="eru_rb_199" type="radio" value="eru_rb_199_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_200" class="panel panel-primary">
		<div id="panel_head_eru_rb_200" class="panel-heading">
			<h4>¿El Incidente Manager detecta y escala fallas del proceso?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_200" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_200_0" name="eru_rb_200" type="radio" value="eru_rb_200_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_200_1" name="eru_rb_200" type="radio" value="eru_rb_200_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_200_2" name="eru_rb_200" type="radio" value="eru_rb_200_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_200_3" name="eru_rb_200" type="radio" value="eru_rb_200_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_200_4" name="eru_rb_200" type="radio" value="eru_rb_200_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_200_5" name="eru_rb_200" type="radio" value="eru_rb_200_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_201" class="panel panel-primary">
		<div id="panel_head_eru_rb_201" class="panel-heading">
			<h4>¿Se notifica al usuario el cierre del incidente ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_201" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_201_0" name="eru_rb_201" type="radio" value="eru_rb_201_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_201_1" name="eru_rb_201" type="radio" value="eru_rb_201_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_201_2" name="eru_rb_201" type="radio" value="eru_rb_201_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_201_3" name="eru_rb_201" type="radio" value="eru_rb_201_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_201_4" name="eru_rb_201" type="radio" value="eru_rb_201_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_201_5" name="eru_rb_201" type="radio" value="eru_rb_201_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_202" class="panel panel-primary">
		<div id="panel_head_eru_rb_202" class="panel-heading">
			<h4>¿Los cambios en los alcances de los servicios son notificados a los usuario finales?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_202" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_202_0" name="eru_rb_202" type="radio" value="eru_rb_202_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_202_1" name="eru_rb_202" type="radio" value="eru_rb_202_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_202_2" name="eru_rb_202" type="radio" value="eru_rb_202_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_202_3" name="eru_rb_202" type="radio" value="eru_rb_202_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_202_4" name="eru_rb_202" type="radio" value="eru_rb_202_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_202_5" name="eru_rb_202" type="radio" value="eru_rb_202_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_203" class="panel panel-primary">
		<div id="panel_head_eru_rb_203" class="panel-heading">
			<h4>¿Los analistas de primer nivel realizan el seguimiento a todos los incidentes desde el registro hasta el cierre?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_203" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_203_0" name="eru_rb_203" type="radio" value="eru_rb_203_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_203_1" name="eru_rb_203" type="radio" value="eru_rb_203_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_203_2" name="eru_rb_203" type="radio" value="eru_rb_203_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_203_3" name="eru_rb_203" type="radio" value="eru_rb_203_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_203_4" name="eru_rb_203" type="radio" value="eru_rb_203_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_203_5" name="eru_rb_203" type="radio" value="eru_rb_203_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_204" class="panel panel-primary">
		<div id="panel_head_eru_rb_204" class="panel-heading">
			<h4>¿El cierre de todos los incidentes es realizado con autorización del Incident Manager?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_204" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_204_0" name="eru_rb_204" type="radio" value="eru_rb_204_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_204_1" name="eru_rb_204" type="radio" value="eru_rb_204_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_204_2" name="eru_rb_204" type="radio" value="eru_rb_204_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_204_3" name="eru_rb_204" type="radio" value="eru_rb_204_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_204_4" name="eru_rb_204" type="radio" value="eru_rb_204_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_204_5" name="eru_rb_204" type="radio" value="eru_rb_204_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Organización</h1>
<div class="form-group">
	<div id="panel_eru_rb_205" class="panel panel-primary">
		<div id="panel_head_eru_rb_205" class="panel-heading">
			<h4>¿Existe un Dueño de Proceso de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_205" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_205_0" name="eru_rb_205" type="radio" value="eru_rb_205_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_205_1" name="eru_rb_205" type="radio" value="eru_rb_205_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_205_2" name="eru_rb_205" type="radio" value="eru_rb_205_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_205_3" name="eru_rb_205" type="radio" value="eru_rb_205_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_205_4" name="eru_rb_205" type="radio" value="eru_rb_205_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_205_5" name="eru_rb_205" type="radio" value="eru_rb_205_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_206" class="panel panel-primary">
		<div id="panel_head_eru_rb_206" class="panel-heading">
			<h4>¿Esta identificado el rol Administrador de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_206" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_206_0" name="eru_rb_206" type="radio" value="eru_rb_206_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_206_1" name="eru_rb_206" type="radio" value="eru_rb_206_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_206_2" name="eru_rb_206" type="radio" value="eru_rb_206_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_206_3" name="eru_rb_206" type="radio" value="eru_rb_206_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_206_4" name="eru_rb_206" type="radio" value="eru_rb_206_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_206_5" name="eru_rb_206" type="radio" value="eru_rb_206_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_207" class="panel panel-primary">
		<div id="panel_head_eru_rb_207" class="panel-heading">
			<h4>¿Están identificados los grupos y especialistas solucionadores para todos los servicios soportados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_207" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_207_0" name="eru_rb_207" type="radio" value="eru_rb_207_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_207_1" name="eru_rb_207" type="radio" value="eru_rb_207_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_207_2" name="eru_rb_207" type="radio" value="eru_rb_207_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_207_3" name="eru_rb_207" type="radio" value="eru_rb_207_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_207_4" name="eru_rb_207" type="radio" value="eru_rb_207_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_207_5" name="eru_rb_207" type="radio" value="eru_rb_207_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_208" class="panel panel-primary">
		<div id="panel_head_eru_rb_208" class="panel-heading">
			<h4>¿Está documentada la Matriz de Escalamiento funcional (por Impacto, con Tiempos escalamiento entre niveles) para el proceso de IM?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_208" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_208_0" name="eru_rb_208" type="radio" value="eru_rb_208_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_208_1" name="eru_rb_208" type="radio" value="eru_rb_208_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_208_2" name="eru_rb_208" type="radio" value="eru_rb_208_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_208_3" name="eru_rb_208" type="radio" value="eru_rb_208_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_208_4" name="eru_rb_208" type="radio" value="eru_rb_208_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_208_5" name="eru_rb_208" type="radio" value="eru_rb_208_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_209" class="panel panel-primary">
		<div id="panel_head_eru_rb_209" class="panel-heading">
			<h4>¿Está documentada la Matriz de Escalamiento Jerárquico (por Impacto, con Tiempo de escalamiento entre niveles)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_209" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_209_0" name="eru_rb_209" type="radio" value="eru_rb_209_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_209_1" name="eru_rb_209" type="radio" value="eru_rb_209_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_209_2" name="eru_rb_209" type="radio" value="eru_rb_209_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_209_3" name="eru_rb_209" type="radio" value="eru_rb_209_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_209_4" name="eru_rb_209" type="radio" value="eru_rb_209_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_209_5" name="eru_rb_209" type="radio" value="eru_rb_209_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_210" class="panel panel-primary">
		<div id="panel_head_eru_rb_210" class="panel-heading">
			<h4>¿Está documentada la Matriz de Escalamiento Jerárquico (por Impacto, con Tiempo de escalamiento entre niveles)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_210" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_210_0" name="eru_rb_210" type="radio" value="eru_rb_210_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_210_1" name="eru_rb_210" type="radio" value="eru_rb_210_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_210_2" name="eru_rb_210" type="radio" value="eru_rb_210_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_210_3" name="eru_rb_210" type="radio" value="eru_rb_210_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_210_4" name="eru_rb_210" type="radio" value="eru_rb_210_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_210_5" name="eru_rb_210" type="radio" value="eru_rb_210_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_211" class="panel panel-primary">
		<div id="panel_head_eru_rb_211" class="panel-heading">
			<h4>¿Están identificados los Usuarios Autorizados por Servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_211" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_211_0" name="eru_rb_211" type="radio" value="eru_rb_211_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_211_1" name="eru_rb_211" type="radio" value="eru_rb_211_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_211_2" name="eru_rb_211" type="radio" value="eru_rb_211_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_211_3" name="eru_rb_211" type="radio" value="eru_rb_211_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_211_4" name="eru_rb_211" type="radio" value="eru_rb_211_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_211_5" name="eru_rb_211" type="radio" value="eru_rb_211_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_212" class="panel panel-primary">
		<div id="panel_head_eru_rb_212" class="panel-heading">
			<h4>¿Están identificados los usuarios VIPs dentro de la organización del cliente y documentados en la herramienta de gestión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_212" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_212_0" name="eru_rb_212" type="radio" value="eru_rb_212_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_212_1" name="eru_rb_212" type="radio" value="eru_rb_212_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_212_2" name="eru_rb_212" type="radio" value="eru_rb_212_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_212_3" name="eru_rb_212" type="radio" value="eru_rb_212_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_212_4" name="eru_rb_212" type="radio" value="eru_rb_212_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_212_5" name="eru_rb_212" type="radio" value="eru_rb_212_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_213" class="panel panel-primary">
		<div id="panel_head_eru_rb_213" class="panel-heading">
			<h4>¿Las responsabilidades de cada rol están definidas y son conocidas por cada persona involucrada?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_213" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_213_0" name="eru_rb_213" type="radio" value="eru_rb_213_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_213_1" name="eru_rb_213" type="radio" value="eru_rb_213_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_213_2" name="eru_rb_213" type="radio" value="eru_rb_213_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_213_3" name="eru_rb_213" type="radio" value="eru_rb_213_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_213_4" name="eru_rb_213" type="radio" value="eru_rb_213_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_213_5" name="eru_rb_213" type="radio" value="eru_rb_213_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_214" class="panel panel-primary">
		<div id="panel_head_eru_rb_214" class="panel-heading">
			<h4>¿El Administrador de Incidentes está entrenado en el proceso de Administración de Incidentes y los procesos relacionados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_214" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_214_0" name="eru_rb_214" type="radio" value="eru_rb_214_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_214_1" name="eru_rb_214" type="radio" value="eru_rb_214_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_214_2" name="eru_rb_214" type="radio" value="eru_rb_214_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_214_3" name="eru_rb_214" type="radio" value="eru_rb_214_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_214_4" name="eru_rb_214" type="radio" value="eru_rb_214_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_214_5" name="eru_rb_214" type="radio" value="eru_rb_214_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_215" class="panel panel-primary">
		<div id="panel_head_eru_rb_215" class="panel-heading">
			<h4>¿Los analistas y especialistas están entrenados en el proceso de administración de incidentes y los procesos relacionados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_215" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_215_0" name="eru_rb_215" type="radio" value="eru_rb_215_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_215_1" name="eru_rb_215" type="radio" value="eru_rb_215_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_215_2" name="eru_rb_215" type="radio" value="eru_rb_215_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_215_3" name="eru_rb_215" type="radio" value="eru_rb_215_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_215_4" name="eru_rb_215" type="radio" value="eru_rb_215_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_215_5" name="eru_rb_215" type="radio" value="eru_rb_215_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_216" class="panel panel-primary">
		<div id="panel_head_eru_rb_216" class="panel-heading">
			<h4>¿Existen métricas de productividad individual para los roles Administrador de Incidentes, Especialistas y Analistas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_216" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_216_0" name="eru_rb_216" type="radio" value="eru_rb_216_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_216_1" name="eru_rb_216" type="radio" value="eru_rb_216_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_216_2" name="eru_rb_216" type="radio" value="eru_rb_216_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_216_3" name="eru_rb_216" type="radio" value="eru_rb_216_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_216_4" name="eru_rb_216" type="radio" value="eru_rb_216_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_216_5" name="eru_rb_216" type="radio" value="eru_rb_216_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_217" class="panel panel-primary">
		<div id="panel_head_eru_rb_217" class="panel-heading">
			<h4>¿El porcentaje de asignación a la administración de incidentes es evaluado para cada rol?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_217" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_217_0" name="eru_rb_217" type="radio" value="eru_rb_217_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_217_1" name="eru_rb_217" type="radio" value="eru_rb_217_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_217_2" name="eru_rb_217" type="radio" value="eru_rb_217_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_217_3" name="eru_rb_217" type="radio" value="eru_rb_217_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_217_4" name="eru_rb_217" type="radio" value="eru_rb_217_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_217_5" name="eru_rb_217" type="radio" value="eru_rb_217_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_218" class="panel panel-primary">
		<div id="panel_head_eru_rb_218" class="panel-heading">
			<h4>¿Existe un plan de carrera para cada rol ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_218" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_218_0" name="eru_rb_218" type="radio" value="eru_rb_218_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_218_1" name="eru_rb_218" type="radio" value="eru_rb_218_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_218_2" name="eru_rb_218" type="radio" value="eru_rb_218_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_218_3" name="eru_rb_218" type="radio" value="eru_rb_218_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_218_4" name="eru_rb_218" type="radio" value="eru_rb_218_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_218_5" name="eru_rb_218" type="radio" value="eru_rb_218_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_219" class="panel panel-primary">
		<div id="panel_head_eru_rb_219" class="panel-heading">
			<h4>¿El personal de administración de incidentes está motivado?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_219" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_219_0" name="eru_rb_219" type="radio" value="eru_rb_219_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_219_1" name="eru_rb_219" type="radio" value="eru_rb_219_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_219_2" name="eru_rb_219" type="radio" value="eru_rb_219_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_219_3" name="eru_rb_219" type="radio" value="eru_rb_219_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_219_4" name="eru_rb_219" type="radio" value="eru_rb_219_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_219_5" name="eru_rb_219" type="radio" value="eru_rb_219_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_220" class="panel panel-primary">
		<div id="panel_head_eru_rb_220" class="panel-heading">
			<h4>¿Se realizan reuniones quincenales con el grupo de IM y los especialistas para dar retroalimentación de la operación de administración de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_220" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_220_0" name="eru_rb_220" type="radio" value="eru_rb_220_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_220_1" name="eru_rb_220" type="radio" value="eru_rb_220_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_220_2" name="eru_rb_220" type="radio" value="eru_rb_220_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_220_3" name="eru_rb_220" type="radio" value="eru_rb_220_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_220_4" name="eru_rb_220" type="radio" value="eru_rb_220_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_220_5" name="eru_rb_220" type="radio" value="eru_rb_220_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Métricas y Reportes</h1>
<div class="form-group">
	<div id="panel_eru_rb_221" class="panel panel-primary">
		<div id="panel_head_eru_rb_221" class="panel-heading">
			<h4>¿Existen métricas de productividad individual para el rol de Administración de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_221" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_221_0" name="eru_rb_221" type="radio" value="eru_rb_221_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_221_1" name="eru_rb_221" type="radio" value="eru_rb_221_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_221_2" name="eru_rb_221" type="radio" value="eru_rb_221_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_221_3" name="eru_rb_221" type="radio" value="eru_rb_221_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_221_4" name="eru_rb_221" type="radio" value="eru_rb_221_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_221_5" name="eru_rb_221" type="radio" value="eru_rb_221_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_222" class="panel panel-primary">
		<div id="panel_head_eru_rb_222" class="panel-heading">
			<h4>¿Se tienen reuniones periódicas para revisar las métricas que existen actualmente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_222" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_222_0" name="eru_rb_222" type="radio" value="eru_rb_222_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_222_1" name="eru_rb_222" type="radio" value="eru_rb_222_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_222_2" name="eru_rb_222" type="radio" value="eru_rb_222_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_222_3" name="eru_rb_222" type="radio" value="eru_rb_222_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_222_4" name="eru_rb_222" type="radio" value="eru_rb_222_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_222_5" name="eru_rb_222" type="radio" value="eru_rb_222_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_223" class="panel panel-primary">
		<div id="panel_head_eru_rb_223" class="panel-heading">
			<h4>¿Se analiza la carga laboral para los roles del proceso de Administración de Incidentes regularmente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_223" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_223_0" name="eru_rb_223" type="radio" value="eru_rb_223_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_223_1" name="eru_rb_223" type="radio" value="eru_rb_223_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_223_2" name="eru_rb_223" type="radio" value="eru_rb_223_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_223_3" name="eru_rb_223" type="radio" value="eru_rb_223_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_223_4" name="eru_rb_223" type="radio" value="eru_rb_223_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_223_5" name="eru_rb_223" type="radio" value="eru_rb_223_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_224" class="panel panel-primary">
		<div id="panel_head_eru_rb_224" class="panel-heading">
			<h4>¿Se tienen estadísticas por número de incidentes identificados mensualmente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_224" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_224_0" name="eru_rb_224" type="radio" value="eru_rb_224_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_224_1" name="eru_rb_224" type="radio" value="eru_rb_224_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_224_2" name="eru_rb_224" type="radio" value="eru_rb_224_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_224_3" name="eru_rb_224" type="radio" value="eru_rb_224_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_224_4" name="eru_rb_224" type="radio" value="eru_rb_224_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_224_5" name="eru_rb_224" type="radio" value="eru_rb_224_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_225" class="panel panel-primary">
		<div id="panel_head_eru_rb_225" class="panel-heading">
			<h4>¿Se tienen estadísticas por número total de incidentes abiertos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_225" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_225_0" name="eru_rb_225" type="radio" value="eru_rb_225_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_225_1" name="eru_rb_225" type="radio" value="eru_rb_225_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_225_2" name="eru_rb_225" type="radio" value="eru_rb_225_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_225_3" name="eru_rb_225" type="radio" value="eru_rb_225_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_225_4" name="eru_rb_225" type="radio" value="eru_rb_225_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_225_5" name="eru_rb_225" type="radio" value="eru_rb_225_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_226" class="panel panel-primary">
		<div id="panel_head_eru_rb_226" class="panel-heading">
			<h4>¿Se tienen estadísticas por número de incidentes cerrados mensualmente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_226" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_226_0" name="eru_rb_226" type="radio" value="eru_rb_226_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_226_1" name="eru_rb_226" type="radio" value="eru_rb_226_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_226_2" name="eru_rb_226" type="radio" value="eru_rb_226_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_226_3" name="eru_rb_226" type="radio" value="eru_rb_226_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_226_4" name="eru_rb_226" type="radio" value="eru_rb_226_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_226_5" name="eru_rb_226" type="radio" value="eru_rb_226_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_227" class="panel panel-primary">
		<div id="panel_head_eru_rb_227" class="panel-heading">
			<h4>¿Se tienen estadísticas por número de incidentes escalados con su owner?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_227" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_227_0" name="eru_rb_227" type="radio" value="eru_rb_227_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_227_1" name="eru_rb_227" type="radio" value="eru_rb_227_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_227_2" name="eru_rb_227" type="radio" value="eru_rb_227_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_227_3" name="eru_rb_227" type="radio" value="eru_rb_227_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_227_4" name="eru_rb_227" type="radio" value="eru_rb_227_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_227_5" name="eru_rb_227" type="radio" value="eru_rb_227_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_228" class="panel panel-primary">
		<div id="panel_head_eru_rb_228" class="panel-heading">
			<h4>¿Se tienen estadísticas por número de Requerimientos de Cambios creados por el Administrador de Incidentes para ser evaluados por el Administrador de Cambios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_228" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_228_0" name="eru_rb_228" type="radio" value="eru_rb_228_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_228_1" name="eru_rb_228" type="radio" value="eru_rb_228_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_228_2" name="eru_rb_228" type="radio" value="eru_rb_228_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_228_3" name="eru_rb_228" type="radio" value="eru_rb_228_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_228_4" name="eru_rb_228" type="radio" value="eru_rb_228_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_228_5" name="eru_rb_228" type="radio" value="eru_rb_228_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_229" class="panel panel-primary">
		<div id="panel_head_eru_rb_229" class="panel-heading">
			<h4>¿Se tienen estadísticas por porcentaje de incidentes que fueron evitados por cumplimiento de labores proactivas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_229" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_229_0" name="eru_rb_229" type="radio" value="eru_rb_229_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_229_1" name="eru_rb_229" type="radio" value="eru_rb_229_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_229_2" name="eru_rb_229" type="radio" value="eru_rb_229_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_229_3" name="eru_rb_229" type="radio" value="eru_rb_229_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_229_4" name="eru_rb_229" type="radio" value="eru_rb_229_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_229_5" name="eru_rb_229" type="radio" value="eru_rb_229_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_230" class="panel panel-primary">
		<div id="panel_head_eru_rb_230" class="panel-heading">
			<h4>¿Se trazan metas y objetivos para el proceso de Administración de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_230" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_230_0" name="eru_rb_230" type="radio" value="eru_rb_230_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_230_1" name="eru_rb_230" type="radio" value="eru_rb_230_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_230_2" name="eru_rb_230" type="radio" value="eru_rb_230_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_230_3" name="eru_rb_230" type="radio" value="eru_rb_230_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_230_4" name="eru_rb_230" type="radio" value="eru_rb_230_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_230_5" name="eru_rb_230" type="radio" value="eru_rb_230_5" class="form-control"></td>
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
	<script type="text/javascript" src="javascript/operacion_cuantitativa_actividades.js"></script>
</body>
</html>

