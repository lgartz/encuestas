<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Control Proceso - Gestión de la Capacidad - Cualitativo</title>
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
				<span class="navbar-brand">Control Proceso - Gestión de la Capacidad - Cualitativo</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="control_gestion_capacidad_cualitativo_process.php" method="GET">
			<br><h1>Documentación</h1>
<div class="form-group">
	<div id="panel_psu_t_545" class="panel panel-primary">
		<div id="panel_head_psu_t_545" class="panel-heading">
			<h4>¿Los documentos generados en el proceso de gestión de la capacidad incluyen informacion sobre el uso de recursos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_545" class="panel-body">
			<input id="psu_t_545" name="psu_t_545" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_546" class="panel panel-primary">
		<div id="panel_head_psu_t_546" class="panel-heading">
			<h4>¿Los documentos generados en el proceso de gestión de la capacidad incluyen informacion sobre desviaciones de la capacidad real sobre la planificada?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_546" class="panel-body">
			<input id="psu_t_546" name="psu_t_546" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_547" class="panel panel-primary">
		<div id="panel_head_psu_t_547" class="panel-heading">
			<h4>¿Los documentos generados en el proceso de gestión de la capacidad incluyen informacion sobre análisis de tendencias en el uso de la capacidad?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_547" class="panel-body">
			<input id="psu_t_547" name="psu_t_547" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_548" class="panel panel-primary">
		<div id="panel_head_psu_t_548" class="panel-heading">
			<h4>¿Los documentos generados en el proceso de gestión de la capacidad incluyen informacion sobre métricas establecidas para el análisis de la capacidad y monitorización del rendimiento?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_548" class="panel-body">
			<input id="psu_t_548" name="psu_t_548" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_549" class="panel panel-primary">
		<div id="panel_head_psu_t_549" class="panel-heading">
			<h4>¿Los documentos generados en el proceso de gestión de la capacidad incluyen informacion sobre el impacto en la calidad del servicio, disponibilidad y otros procesos TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_549" class="panel-body">
			<input id="psu_t_549" name="psu_t_549" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<br><h1>Indicadores</h1>
<div class="form-group">
	<div id="panel_psu_t_550" class="panel panel-primary">
		<div id="panel_head_psu_t_550" class="panel-heading">
			<h4>Dispone de una correcta previsión de las necesidades de capacidad<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_550" class="panel-body">
			<input id="psu_t_550" name="psu_t_550" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_551" class="panel panel-primary">
		<div id="panel_head_psu_t_551" class="panel-heading">
			<h4>Dispone de reducción en los costes asociados a la capacidad<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_551" class="panel-body">
			<input id="psu_t_551" name="psu_t_551" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_552" class="panel panel-primary">
		<div id="panel_head_psu_t_552" class="panel-heading">
			<h4>Dispone de los más altos niveles de disponibilidad y seguridad<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_552" class="panel-body">
			<input id="psu_t_552" name="psu_t_552" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_553" class="panel panel-primary">
		<div id="panel_head_psu_t_553" class="panel-heading">
			<h4>Dispone de una mayor satisfacción de los usuarios y clientes<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_553" class="panel-body">
			<input id="psu_t_553" name="psu_t_553" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_554" class="panel panel-primary">
		<div id="panel_head_psu_t_554" class="panel-heading">
			<h4>Dispone de cumplimiento de los SLAs<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_554" class="panel-body">
			<input id="psu_t_554" name="psu_t_554" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
	<script type="text/javascript" src="javascript/control_gestion_capacidad_cualitativo.js"></script>
</body>
</html>

