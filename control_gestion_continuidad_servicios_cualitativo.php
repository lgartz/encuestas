<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Control Proceso - Gestión de la Continuidad de Servicios TI - Cualitativo</title>
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
				<span class="navbar-brand">Control Proceso - Gestión de la Continuidad de Servicios TI - Cualitativo</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="control_gestion_continuidad_servicios_cualitativo_process.php" method="GET">
			<div class="form-group">
	<div id="panel_psu_t_560" class="panel panel-primary">
		<div id="panel_head_psu_t_560" class="panel-heading">
			<h4>La gestión de la continuidad de servicios TI de su compañia garantiza la puesta en marcha de los planes preestablecidos<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_560" class="panel-body">
			<input id="psu_t_560" name="psu_t_560" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_561" class="panel panel-primary">
		<div id="panel_head_psu_t_561" class="panel-heading">
			<h4>La gestión de la continuidad de servicios TI de su compañia garantiza la supervisión de los planes preestablecidos<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_561" class="panel-body">
			<input id="psu_t_561" name="psu_t_561" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_562" class="panel panel-primary">
		<div id="panel_head_psu_t_562" class="panel-heading">
			<h4>La gestión de la continuidad de servicios TI de su compañia garantiza la coordinación con la gestión de continuidad del negocio<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_562" class="panel-body">
			<input id="psu_t_562" name="psu_t_562" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_563" class="panel panel-primary">
		<div id="panel_head_psu_t_563" class="panel-heading">
			<h4>La gestión de la continuidad de servicios TI de su compañia garantiza la asignación de recursos necesarios<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_563" class="panel-body">
			<input id="psu_t_563" name="psu_t_563" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<br><h1>Documentación</h1>
<div class="form-group">
	<div id="panel_psu_t_564" class="panel panel-primary">
		<div id="panel_head_psu_t_564" class="panel-heading">
			<h4>¿Los informes generados en el proceso incluye análisis sobre nuevos riesgos y evaluación de su impacto?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_564" class="panel-body">
			<input id="psu_t_564" name="psu_t_564" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_565" class="panel panel-primary">
		<div id="panel_head_psu_t_565" class="panel-heading">
			<h4>Los informes generados en el proceso incluye evaluación de los simulacros de desastre realizados<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_565" class="panel-body">
			<input id="psu_t_565" name="psu_t_565" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_566" class="panel panel-primary">
		<div id="panel_head_psu_t_566" class="panel-heading">
			<h4>Los informes generados en el proceso incluye actividades de prevención y recuperación realizadas<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_566" class="panel-body">
			<input id="psu_t_566" name="psu_t_566" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_567" class="panel panel-primary">
		<div id="panel_head_psu_t_567" class="panel-heading">
			<h4>Los informes generados en el proceso incluye costes asociados a los planes de prevención y recuperación<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_567" class="panel-body">
			<input id="psu_t_567" name="psu_t_567" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_568" class="panel panel-primary">
		<div id="panel_head_psu_t_568" class="panel-heading">
			<h4>Los informes generados en el proceso incluye preparación y capacitación del personal TI respecto a los planes y procedimientos de prevención y recuperación<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_568" class="panel-body">
			<input id="psu_t_568" name="psu_t_568" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
	<script type="text/javascript" src="javascript/control_gestion_continuidad_servicios_cualitativo.js"></script>
</body>
</html>

