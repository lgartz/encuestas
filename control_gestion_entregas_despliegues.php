<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Control Proceso - Gestión de Entregas y Despliegues - Cualitativo</title>
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
				<span class="navbar-brand">Control Proceso - Gestión de Entregas y Despliegues - Cualitativo</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="control_gestion_entregas_despliegues_process.php" method="GET">
			<br><h1>Documentación</h1>
<div class="form-group">
	<div id="panel_psu_t_604" class="panel panel-primary">
		<div id="panel_head_psu_t_604" class="panel-heading">
			<h4>¿Genera informes que indiquen, lanzamientos de nuevas versiones?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_604" class="panel-body">
			<input id="psu_t_604" name="psu_t_604" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_605" class="panel panel-primary">
		<div id="panel_head_psu_t_605" class="panel-heading">
			<h4>¿Genera informes que indiquen, back-outs y razones de los mismos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_605" class="panel-body">
			<input id="psu_t_605" name="psu_t_605" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_606" class="panel panel-primary">
		<div id="panel_head_psu_t_606" class="panel-heading">
			<h4>¿Genera informes que indiquen, incidencias asociadas a nuevas versiones?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_606" class="panel-body">
			<input id="psu_t_606" name="psu_t_606" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_607" class="panel panel-primary">
		<div id="panel_head_psu_t_607" class="panel-heading">
			<h4>¿Genera informes que indiquen, cumplimientos de los plazos previstos para cada despliegue?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_607" class="panel-body">
			<input id="psu_t_607" name="psu_t_607" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_608" class="panel panel-primary">
		<div id="panel_head_psu_t_608" class="panel-heading">
			<h4>¿Genera informes que indiquen, asignación de recursos en cada caso?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_608" class="panel-body">
			<input id="psu_t_608" name="psu_t_608" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_609" class="panel panel-primary">
		<div id="panel_head_psu_t_609" class="panel-heading">
			<h4>¿Genera informes que indiquen, corrección y alcance de la CMDB y la DS?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_609" class="panel-body">
			<input id="psu_t_609" name="psu_t_609" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_610" class="panel panel-primary">
		<div id="panel_head_psu_t_610" class="panel-heading">
			<h4>¿Genera informes que indiquen, existencia de versiones ilegales de software?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_610" class="panel-body">
			<input id="psu_t_610" name="psu_t_610" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_611" class="panel panel-primary">
		<div id="panel_head_psu_t_611" class="panel-heading">
			<h4>¿Genera informes que indiquen, adecuado registro de las nuevas versiones en la CMDB?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_611" class="panel-body">
			<input id="psu_t_611" name="psu_t_611" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_612" class="panel panel-primary">
		<div id="panel_head_psu_t_612" class="panel-heading">
			<h4>¿Genera informes que indiquen, incidencias provocadas por uso incorrecto (formación inadecuada) de la nueva versión por parte de los usuarios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_612" class="panel-body">
			<input id="psu_t_612" name="psu_t_612" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_613" class="panel panel-primary">
		<div id="panel_head_psu_t_613" class="panel-heading">
			<h4>¿Genera informes que indiquen, disponibilidad del servicio durante y tras el proceso de lanzamiento de la nueva versión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_613" class="panel-body">
			<input id="psu_t_613" name="psu_t_613" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
	<script type="text/javascript" src="javascript/control_gestion_entregas_despliegues.js"></script>
</body>
</html>

