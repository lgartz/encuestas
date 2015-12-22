<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Control Proceso - Gestión de Problemas - Cualitativo</title>
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
				<span class="navbar-brand">Control Proceso - Gestión de Problemas - Cualitativo</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="control_gestion_problemas_process.php" method="GET">
			<br><h1>Indicadores</h1>
<div class="form-group">
	<div id="panel_psu_t_663" class="panel panel-primary">
		<div id="panel_head_psu_t_663" class="panel-heading">
			<h4>¿Con el pasar del tiempo se genera una disminución del número de incidentes y una más rápida resolución de los mismos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_663" class="panel-body">
			<input id="psu_t_663" name="psu_t_663" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_664" class="panel panel-primary">
		<div id="panel_head_psu_t_664" class="panel-heading">
			<h4>¿Con el pasar del tiempo se genera una mayor eficacia en la resolución de problemas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_664" class="panel-body">
			<input id="psu_t_664" name="psu_t_664" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_665" class="panel panel-primary">
		<div id="panel_head_psu_t_665" class="panel-heading">
			<h4>¿Existe una gestión proactiva que permita identificar problemas potenciales antes de que éstos se manifiesten o provoquen una seria degradación de la calidad del servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_665" class="panel-body">
			<input id="psu_t_665" name="psu_t_665" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<br><h1>Documentación</h1>
<div class="form-group">
	<div id="panel_psu_t_666" class="panel panel-primary">
		<div id="panel_head_psu_t_666" class="panel-heading">
			<h4>¿Se generan informes de rendimiento de la gestión de problemas, donde se detalle el número de errores resueltos, la eficacia de las soluciones propuestas, los tiempos de respuesta y el impacto en la Gestión de Incidencias?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_666" class="panel-body">
			<input id="psu_t_666" name="psu_t_666" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_667" class="panel panel-primary">
		<div id="panel_head_psu_t_667" class="panel-heading">
			<h4>¿Se generan informes de gestión proactiva, donde se especifiquen las acciones ejercidas para la prevención de nuevos problemas y los resultados de los análisis realizados sobre la adecuación de las estructuras TI a las necesidades de la empresa?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_667" class="panel-body">
			<input id="psu_t_667" name="psu_t_667" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_668" class="panel panel-primary">
		<div id="panel_head_psu_t_668" class="panel-heading">
			<h4>¿Se generan informes de calidad de productos y servicios, donde se evalúe el impacto en la calidad del servicio de los productos y servicios contratados y que eventualmente pueda permitir adoptar decisiones informadas sobre cambios de proveedores, etc?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_668" class="panel-body">
			<input id="psu_t_668" name="psu_t_668" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
	<script type="text/javascript" src="javascript/control_gestion_problemas.js"></script>
</body>
</html>

