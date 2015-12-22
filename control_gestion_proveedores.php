<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Control Proceso - Gestión de Proveedores - Cualitativo</title>
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
				<span class="navbar-brand">Control Proceso - Gestión de Proveedores - Cualitativo</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="control_gestion_proveedores_process.php" method="GET">
			<br><h1>Indicadores del nivel de calidad en los servicios</h1>
<div class="form-group">
	<div id="panel_psu_t_572" class="panel panel-primary">
		<div id="panel_head_psu_t_572" class="panel-heading">
			<h4>¿Ha evidenciado un incremento en el número de proveedores que alcanzan los objetivos establecidos en el contrato?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_572" class="panel-body">
			<input id="psu_t_572" name="psu_t_572" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_573" class="panel panel-primary">
		<div id="panel_head_psu_t_573" class="panel-heading">
			<h4>¿Se han reducción el número de incumplimientos de objetivos contractuales?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_573" class="panel-body">
			<input id="psu_t_573" name="psu_t_573" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<br><h1>Indicadores de las necesidades y objetivos</h1>
<div class="form-group">
	<div id="panel_psu_t_574" class="panel panel-primary">
		<div id="panel_head_psu_t_574" class="panel-heading">
			<h4>¿Ha incrementado el número de servicios y revisiones de contrato?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_574" class="panel-body">
			<input id="psu_t_574" name="psu_t_574" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_575" class="panel panel-primary">
		<div id="panel_head_psu_t_575" class="panel-heading">
			<h4>¿Ha notado un incremento en el número de proveedores y objetivos contractuales alineados con los objetivos contenidos en los SLA y SLR?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_575" class="panel-body">
			<input id="psu_t_575" name="psu_t_575" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<br><h1>Indicadores de disponibilidad</h1>
<div class="form-group">
	<div id="panel_psu_t_699" class="panel panel-primary">
		<div id="panel_head_psu_t_699" class="panel-heading">
			<h4>¿Ha reducido el número de interrupciones de servicio provocadas por los proveedores?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_699" class="panel-body">
			<input id="psu_t_699" name="psu_t_699" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_576" class="panel panel-primary">
		<div id="panel_head_psu_t_576" class="panel-heading">
			<h4>¿Ha reducido el número de amenazas de interrupción de servicio provocadas por proveedores?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_576" class="panel-body">
			<input id="psu_t_576" name="psu_t_576" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<br><h1>Indicadores de problemas en la gestión de proveedores</h1>
<div class="form-group">
	<div id="panel_psu_t_577" class="panel panel-primary">
		<div id="panel_head_psu_t_577" class="panel-heading">
			<h4>¿Ha evidenciado un incremento en el número de proveedores para los que se ha asignado un responsable?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_577" class="panel-body">
			<input id="psu_t_577" name="psu_t_577" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_578" class="panel panel-primary">
		<div id="panel_head_psu_t_578" class="panel-heading">
			<h4>¿Ha evidenciado incremento en el número de contratos en los que figura un responsable?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_578" class="panel-body">
			<input id="psu_t_578" name="psu_t_578" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
	<script type="text/javascript" src="javascript/control_gestion_proveedores.js"></script>
</body>
</html>

