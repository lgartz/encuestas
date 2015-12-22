<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Control Proceso - Gestión de Cambios - Cualitativo</title>
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
				<span class="navbar-brand">Control Proceso - Gestión de Cambios - Cualitativo</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="control_gestion_cambios_transicion_process.php" method="GET">
			<br><h1>Documentación</h1>
<div class="form-group">
	<div id="panel_psu_t_584" class="panel panel-primary">
		<div id="panel_head_psu_t_584" class="panel-heading">
			<h4>Genera informes que indiquen, los RFCs solicitados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_584" class="panel-body">
			<input id="psu_t_584" name="psu_t_584" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_585" class="panel panel-primary">
		<div id="panel_head_psu_t_585" class="panel-heading">
			<h4>¿Genera informes que indiquen, los RFCs ha sido aceptados y aprobados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_585" class="panel-body">
			<input id="psu_t_585" name="psu_t_585" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_586" class="panel panel-primary">
		<div id="panel_head_psu_t_586" class="panel-heading">
			<h4>¿Genera informes que indiquen, como clasifica los cambios realizados por impacto, prioridad?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_586" class="panel-body">
			<input id="psu_t_586" name="psu_t_586" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_587" class="panel panel-primary">
		<div id="panel_head_psu_t_587" class="panel-heading">
			<h4>¿Genera informes que indiquen, el tiempo promedio de los cambios dependiendo su impacto, prioridad?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_587" class="panel-body">
			<input id="psu_t_587" name="psu_t_587" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_588" class="panel panel-primary">
		<div id="panel_head_psu_t_588" class="panel-heading">
			<h4>¿Genera informes que indiquen, la cantidad de cambios de emergencia realizados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_588" class="panel-body">
			<input id="psu_t_588" name="psu_t_588" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_589" class="panel panel-primary">
		<div id="panel_head_psu_t_589" class="panel-heading">
			<h4>¿Genera informes que indiquen, la cantidad de cambios de emergencia realizados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_589" class="panel-body">
			<input id="psu_t_589" name="psu_t_589" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_590" class="panel panel-primary">
		<div id="panel_head_psu_t_590" class="panel-heading">
			<h4>¿Genera informes que indiquen, el porcentaje de cambios exitosos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_590" class="panel-body">
			<input id="psu_t_590" name="psu_t_590" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_591" class="panel panel-primary">
		<div id="panel_head_psu_t_591" class="panel-heading">
			<h4>¿Genera informes que indiquen, el porcentaje de cambios exitosos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_591" class="panel-body">
			<input id="psu_t_591" name="psu_t_591" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_592" class="panel panel-primary">
		<div id="panel_head_psu_t_592" class="panel-heading">
			<h4>¿Genera informes que indiquen, el númerode back-outs con una detallada explicación de los mismos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_592" class="panel-body">
			<input id="psu_t_592" name="psu_t_592" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_593" class="panel panel-primary">
		<div id="panel_head_psu_t_593" class="panel-heading">
			<h4>¿Genera informes que indiquen, las evaluaciones post-implementación?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_593" class="panel-body">
			<input id="psu_t_593" name="psu_t_593" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_594" class="panel panel-primary">
		<div id="panel_head_psu_t_594" class="panel-heading">
			<h4>¿Genera informes que indiquen, el porcentajes de cambios cerrados sin incidencias ulteriores?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_594" class="panel-body">
			<input id="psu_t_594" name="psu_t_594" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_595" class="panel panel-primary">
		<div id="panel_head_psu_t_595" class="panel-heading">
			<h4>¿Genera informes que indiquen, las incidencias asociadas a cambios realizados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_595" class="panel-body">
			<input id="psu_t_595" name="psu_t_595" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
	<script type="text/javascript" src="javascript/control_gestion_cambios_transicion.js"></script>
</body>
</html>

