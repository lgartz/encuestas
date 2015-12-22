<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Control Proceso - Informes de Servicios TI - Cualitativo</title>
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
				<span class="navbar-brand">Control Proceso - Informes de Servicios TI - Cualitativo</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="control_informes_de_servicios_process.php" method="GET">
			<br><h1>Documentación</h1>
<div class="form-group">
	<div id="panel_psu_t_687" class="panel panel-primary">
		<div id="panel_head_psu_t_687" class="panel-heading">
			<h4>¿Los documetos generados incluyen calendarios de entrega de toda la documentación aportada, descripción individual de los informes generados, destinatarios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_687" class="panel-body">
			<input id="psu_t_687" name="psu_t_687" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_688" class="panel panel-primary">
		<div id="panel_head_psu_t_688" class="panel-heading">
			<h4>¿Los documetos generados incluyen informes sobre las características y calidad de los datos recogidos, origen, calidad de los mismos, periodicidad (continua, diaria, semanal, mensual), recogida manual o automática?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_688" class="panel-body">
			<input id="psu_t_688" name="psu_t_688" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_689" class="panel panel-primary">
		<div id="panel_head_psu_t_689" class="panel-heading">
			<h4>¿Los documetos generados incluyen metodologías utilizadas para el procesado y análisis de los datos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_689" class="panel-body">
			<input id="psu_t_689" name="psu_t_689" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_690" class="panel panel-primary">
		<div id="panel_head_psu_t_690" class="panel-heading">
			<h4>¿Los documetos generados incluyen recursos utilizados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_690" class="panel-body">
			<input id="psu_t_690" name="psu_t_690" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_691" class="panel panel-primary">
		<div id="panel_head_psu_t_691" class="panel-heading">
			<h4>¿Los documetos generados incluyen feedback recibido (dirección, gestores y propietarios de servicios y procesos, personal técnico)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_691" class="panel-body">
			<input id="psu_t_691" name="psu_t_691" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_692" class="panel panel-primary">
		<div id="panel_head_psu_t_692" class="panel-heading">
			<h4>¿Los documetos generados incluyen propuestas de mejora?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_692" class="panel-body">
			<input id="psu_t_692" name="psu_t_692" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_693" class="panel panel-primary">
		<div id="panel_head_psu_t_693" class="panel-heading">
			<h4>¿Se verifica que los informes estén correctamente escritos en un lenguaje sencillo y directo?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_693" class="panel-body">
			<input id="psu_t_693" name="psu_t_693" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_694" class="panel panel-primary">
		<div id="panel_head_psu_t_694" class="panel-heading">
			<h4>¿Se verifica que los informes contengan toda la información necesaria?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_694" class="panel-body">
			<input id="psu_t_694" name="psu_t_694" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_695" class="panel panel-primary">
		<div id="panel_head_psu_t_695" class="panel-heading">
			<h4>¿Se verifica que los informes contengan gráficos y diagramas que faciliten el entendimiento de la información?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_695" class="panel-body">
			<input id="psu_t_695" name="psu_t_695" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_696" class="panel panel-primary">
		<div id="panel_head_psu_t_696" class="panel-heading">
			<h4>¿Se verifica que los informes tengan una dimensión y profundidad acorde con las necesidades y conocimientos de sus destinatarios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_696" class="panel-body">
			<input id="psu_t_696" name="psu_t_696" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_697" class="panel panel-primary">
		<div id="panel_head_psu_t_697" class="panel-heading">
			<h4>¿Se verifica que los informes sean fácilmente accesibles a todas las personas a las que van dirigidos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_697" class="panel-body">
			<input id="psu_t_697" name="psu_t_697" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
	<script type="text/javascript" src="javascript/control_informes_de_servicios.js"></script>
</body>
</html>
