<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Control Proceso - Proceso de Mejora CSI - Cualitativo</title>
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
				<span class="navbar-brand">Control Proceso - proceso de mejora CSI - Cualitativo</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="control_proceso_mejora_csi_process.php" method="GET">
			<div class="form-group">
	<div id="panel_psu_t_674" class="panel panel-primary">
		<div id="panel_head_psu_t_674" class="panel-heading">
			<h4>¿Para el proceso de mejora CSI conoce los objetivos de los propios planes de mejora?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_674" class="panel-body">
			<input id="psu_t_674" name="psu_t_674" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_675" class="panel panel-primary">
		<div id="panel_head_psu_t_675" class="panel-heading">
			<h4>¿Para el proceso de mejora CSI conoce las métricas que se aplicaran para evaluar dicho proceso?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_675" class="panel-body">
			<input id="psu_t_675" name="psu_t_675" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_676" class="panel panel-primary">
		<div id="panel_head_psu_t_676" class="panel-heading">
			<h4>¿Para el proceso de mejora CSI sabe cuales son los datos que son necesarios recopilar?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_676" class="panel-body">
			<input id="psu_t_676" name="psu_t_676" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_677" class="panel panel-primary">
		<div id="panel_head_psu_t_677" class="panel-heading">
			<h4>¿Para el proceso de mejora CSI sabe cual es la información y conocimiento que se generan de ellos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_677" class="panel-body">
			<input id="psu_t_677" name="psu_t_677" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_678" class="panel panel-primary">
		<div id="panel_head_psu_t_678" class="panel-heading">
			<h4>¿Para el proceso de mejora CSI sabe cuales son los informes o inteligencia que se esperan generar?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_678" class="panel-body">
			<input id="psu_t_678" name="psu_t_678" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_679" class="panel panel-primary">
		<div id="panel_head_psu_t_679" class="panel-heading">
			<h4>¿Para el proceso de mejora CSI sabe como se implementarán dichos cambios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_679" class="panel-body">
			<input id="psu_t_679" name="psu_t_679" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_680" class="panel panel-primary">
		<div id="panel_head_psu_t_680" class="panel-heading">
			<h4>¿Genera documentación del proceso de mejora CSI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_680" class="panel-body">
			<input id="psu_t_680" name="psu_t_680" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_681" class="panel panel-primary">
		<div id="panel_head_psu_t_681" class="panel-heading">
			<h4>¿El responsable (gestor del CSI) gestionar toda la comunicación asociada al proceso?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_681" class="panel-body">
			<input id="psu_t_681" name="psu_t_681" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_682" class="panel panel-primary">
		<div id="panel_head_psu_t_682" class="panel-heading">
			<h4>¿El responsable (gestor del CSI) asigna y monitoriza los recursos disponibles?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_682" class="panel-body">
			<input id="psu_t_682" name="psu_t_682" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_683" class="panel panel-primary">
		<div id="panel_head_psu_t_683" class="panel-heading">
			<h4>¿El responsable (gestor del CSI) asigna y monitoriza los recursos disponibles?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_683" class="panel-body">
			<input id="psu_t_683" name="psu_t_683" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_684" class="panel panel-primary">
		<div id="panel_head_psu_t_684" class="panel-heading">
			<h4>¿El responsable (gestor del CSI) determina las principales áreas de mejora en colaboración con la dirección y los propietarios de los diferentes servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_684" class="panel-body">
			<input id="psu_t_684" name="psu_t_684" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_685" class="panel panel-primary">
		<div id="panel_head_psu_t_685" class="panel-heading">
			<h4>¿El responsable (gestor del CSI) elabora el plan de mejora del servicio en colaboración con la Gestión de Niveles de Servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_685" class="panel-body">
			<input id="psu_t_685" name="psu_t_685" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_686" class="panel panel-primary">
		<div id="panel_head_psu_t_686" class="panel-heading">
			<h4>¿El responsable (gestor del CSI) supervisa todo el proceso y garantiza que se adecúa a los objetivos propuesto en concepto y forma?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_686" class="panel-body">
			<input id="psu_t_686" name="psu_t_686" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
	<script type="text/javascript" src="javascript/control_proceso_mejora_csi.js"></script>
</body>
</html>

