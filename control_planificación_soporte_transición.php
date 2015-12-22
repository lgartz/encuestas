<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Control Proceso - Planificación y Soporte a la Transición - Cualitativo</title>
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
				<span class="navbar-brand">Control Proceso - Planificación y Soporte a la Transición - Cualitativo</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="control_planificación_soporte_transición_process.php" method="GET">
			<br><h1>Indicadores</h1>
<div class="form-group">
	<div id="panel_psu_t_579" class="panel panel-primary">
		<div id="panel_head_psu_t_579" class="panel-heading">
			<h4>¿El jefe de proyecto controla y mide el número de proyectos gestionados es decir, el número de versiones desplegadas (rollout) que han sido objeto de planificación y soporte?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_579" class="panel-body">
			<input id="psu_t_579" name="psu_t_579" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_580" class="panel panel-primary">
		<div id="panel_head_psu_t_580" class="panel-heading">
			<h4>¿El jefe de proyecto controla y mide el número de proyectos gestionados es decir, el número de versiones desplegadas (rollout) que han sido objeto de planificación y soporte?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_580" class="panel-body">
			<input id="psu_t_580" name="psu_t_580" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_581" class="panel panel-primary">
		<div id="panel_head_psu_t_581" class="panel-heading">
			<h4>¿El jefe de proyecto controla y mide el porcentaje de entregas que se ajustaron a lo acordado con el cliente en cuanto a coste, calidad y alcance?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_581" class="panel-body">
			<input id="psu_t_581" name="psu_t_581" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_582" class="panel panel-primary">
		<div id="panel_head_psu_t_582" class="panel-heading">
			<h4>¿El jefe de proyecto controla y mide el ajuste al presupuesto del proyecto, comparando el consumo de recursos humanos y financieros previstos con los que se usaron realmente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_582" class="panel-body">
			<input id="psu_t_582" name="psu_t_582" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_583" class="panel panel-primary">
		<div id="panel_head_psu_t_583" class="panel-heading">
			<h4>¿El jefe de proyecto controla y mide el retrasos en proyectos, comparando las fechas de entrega reales con las que en un principio se habían definido en la planificación?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_583" class="panel-body">
			<input id="psu_t_583" name="psu_t_583" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
	<script type="text/javascript" src="javascript/control_planificación_soporte_transición.js"></script>
</body>
</html>

