<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Control Proceso - Gestión de Niveles de Servicio - Cualitativo</title>
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
				<span class="navbar-brand">Control Proceso - Gestión de Niveles de Servicio - Cualitativo</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="control_gestion_niveles_servicio_cualitativo_process.php" method="GET">
			<br><h1>Indicadores</h1>
<div class="form-group">
	<div id="panel_psu_t_537" class="panel panel-primary">
		<div id="panel_head_psu_t_537" class="panel-heading">
			<h4>¿Dispone de unos objetivos claros y contrastables?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_537" class="panel-body">
			<input id="psu_t_537" name="psu_t_537" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_538" class="panel panel-primary">
		<div id="panel_head_psu_t_538" class="panel-heading">
			<h4>¿Dispone de un equipo con experiencia liderado por un Gestor del Nivel de Servicio con la cualificación y experiencia necesarios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_538" class="panel-body">
			<input id="psu_t_538" name="psu_t_538" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_539" class="panel panel-primary">
		<div id="panel_head_psu_t_539" class="panel-heading">
			<h4>¿Dispone de una asignación clara de tareas y responsabilidades?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_539" class="panel-body">
			<input id="psu_t_539" name="psu_t_539" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_540" class="panel panel-primary">
		<div id="panel_head_psu_t_540" class="panel-heading">
			<h4>¿Dispone de una asignación clara de tareas y responsabilidades?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_540" class="panel-body">
			<input id="psu_t_540" name="psu_t_540" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_541" class="panel panel-primary">
		<div id="panel_head_psc_ta_541" class="panel-heading">
			<h4>¿Dispone de indicadores específicos de rendimiento (Porcentaje de servicios amparados bajo SLAs, Porcentaje de incumplimiento de los SLAs clasificados por su impacto en la calidad del servicio, SIPs elaborados e impacto de los mismos en la calidad del servicio, Encuestas de satisfacción del cliente)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_541" class="panel-body">
			<textarea name="psc_ta_541" id="psc_ta_541" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Documentación</h1>
<div class="form-group">
	<div id="panel_psu_t_542" class="panel panel-primary">
		<div id="panel_head_psu_t_542" class="panel-heading">
			<h4>¿Genera informes estadísticos de rendimiento donde se detallen los SLAs, OLAs y UCs elaborados y el nivel de cumplimiento de los mismos, costes promedio asociados al proceso, etc..?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_542" class="panel-body">
			<input id="psu_t_542" name="psu_t_542" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_543" class="panel panel-primary">
		<div id="panel_head_psu_t_543" class="panel-heading">
			<h4>¿Genera informes de Seguimiento donde se especifiquen las acciones de monitorización realizadas, sus resultados y el grado de satisfacción de los clientes con el servicio prestado?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_543" class="panel-body">
			<input id="psu_t_543" name="psu_t_543" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_544" class="panel panel-primary">
		<div id="panel_head_psu_t_544" class="panel-heading">
			<h4>¿Genera planes de Mejora (SIP): donde se especifiquen las acciones propuestas para la mejora del servicio TI y el impacto que estas han tenido en la calidad del servicio.?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_544" class="panel-body">
			<input id="psu_t_544" name="psu_t_544" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
	<script type="text/javascript" src="javascript/control_gestion_niveles_servicio_cualitativo.js"></script>
</body>
</html>

