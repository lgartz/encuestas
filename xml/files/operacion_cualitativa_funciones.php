<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
		$rolEncuestado="";
   		if(isset($_SESSION['rolEncuestado'])){
	      $rolEncuestado = $_SESSION['rolEncuestado'];
    	}    
		$_SESSION['idEncuesta'] = $idEncuesta;
	?>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<span class="navbar-brand">Operación de los servicios IT (Funciones) Cualitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="operacion_cualitativa_funciones_process.php" method="GET">
			<br><h1>FUNCIONES: Centro de servicio al usuario, Gestión Técnica, Gestión de aplicaciones, Posición organizacional, Posición de aplicaciones</h1>
<div class="form-group">
	<div id="panel_psc_ta_445" class="panel panel-primary">
		<div id="panel_head_psc_ta_445" class="panel-heading">
			<h4>¿Se cuenta con un centro de servicio al usuario - Service Desk debidamente conformado?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_445" class="panel-body">
			<textarea name="psc_ta_445" id="psc_ta_445" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_446" class="panel panel-primary">
		<div id="panel_head_psc_ta_446" class="panel-heading">
			<h4>¿El service Desk cuenta con personal dedicado al manejo de eventos de servicio, recibidos por llamadas telefónicas, interface en línea o reporte automático de la infraestructura de los eventos (sistemas de monitoreo y reporte de alarmas)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_446" class="panel-body">
			<textarea name="psc_ta_446" id="psc_ta_446" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_447" class="panel panel-primary">
		<div id="panel_head_psc_ta_447" class="panel-heading">
			<h4>¿El service Desk es el único punto de contacto para los usuarios en el día a día?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_447" class="panel-body">
			<textarea name="psc_ta_447" id="psc_ta_447" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_448" class="panel panel-primary">
		<div id="panel_head_psc_ta_448" class="panel-heading">
			<h4>¿El service Desk cuenta con una herramienta o software especial de gestión de incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_448" class="panel-body">
			<textarea name="psc_ta_448" id="psc_ta_448" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_449" class="panel panel-primary">
		<div id="panel_head_psc_ta_449" class="panel-heading">
			<h4>¿El service Desk es el centro de servicio al usuario para temas de gestión técnica, gestión de aplicaciones, gestión de operaciones de TI, soporte de terceros, cumplimiento de peticiones?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_449" class="panel-body">
			<textarea name="psc_ta_449" id="psc_ta_449" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_450" class="panel panel-primary">
		<div id="panel_head_psc_ta_450" class="panel-heading">
			<h4>¿Se tiene definido el rol de Incident Mangement?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_450" class="panel-body">
			<textarea name="psc_ta_450" id="psc_ta_450" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_451" class="panel panel-primary">
		<div id="panel_head_psc_ta_451" class="panel-heading">
			<h4>¿Existe métricas implementadas para analizar la operación del service Desk?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_451" class="panel-body">
			<textarea name="psc_ta_451" id="psc_ta_451" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_452" class="panel panel-primary">
		<div id="panel_head_psc_ta_452" class="panel-heading">
			<h4>¿La gestión técnica presta servicio en temas de servidores, red, almacenamiento, bases de datos, directorio de servicios, computadoras, impresión, middleware, Internet en sus diferentes niveles?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_452" class="panel-body">
			<textarea name="psc_ta_452" id="psc_ta_452" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_453" class="panel panel-primary">
		<div id="panel_head_psc_ta_453" class="panel-heading">
			<h4>¿Desde el service Desk se presta el soporte de primer nivel a las aplicaciones y se hacen los debidos escalamiento a los expertos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_453" class="panel-body">
			<textarea name="psc_ta_453" id="psc_ta_453" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_454" class="panel panel-primary">
		<div id="panel_head_psc_ta_454" class="panel-heading">
			<h4>¿El personal tiene turnos de operadores y soporte, para asegurar el monitoreo y soporte de los eventos en la infraestructura y servicios de TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_454" class="panel-body">
			<textarea name="psc_ta_454" id="psc_ta_454" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_455" class="panel panel-primary">
		<div id="panel_head_psc_ta_455" class="panel-heading">
			<h4>¿El datacenter cuenta con las características físicas, de seguridad física, elementos de disponibilidad (energía, aire acondicionado) apropiados para un centro de datos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_455" class="panel-body">
			<textarea name="psc_ta_455" id="psc_ta_455" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_456" class="panel panel-primary">
		<div id="panel_head_psc_ta_456" class="panel-heading">
			<h4>¿La gestión de facilidades gestiona todo lo relacionado con centro de datos, contratos, consolidación y sitios de recuperación?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_456" class="panel-body">
			<textarea name="psc_ta_456" id="psc_ta_456" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
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
	<script type="text/javascript" src="javascript/operacion_cualitativa_funciones.js"></script>
</body>
</html>

