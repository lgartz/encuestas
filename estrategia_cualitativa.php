<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Estrategia</title>
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
				<span class="navbar-brand">Estrategia para los servicios IT Cualitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="estrategia_cualitativa_process.php" method="GET">
			<br><h1>Gestión del portafolio de servicios</h1>
<div class="form-group">
	<div id="panel_psc_ta_21" class="panel panel-primary">
		<div id="panel_head_psc_ta_21" class="panel-heading">
			<h4>¿Hay Relación entre los planes de negocio y las estrategias de los servicios de TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_21" class="panel-body">
			<textarea name="psc_ta_21" id="psc_ta_21" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_22" class="panel panel-primary">
		<div id="panel_head_psc_ta_22" class="panel-heading">
			<h4>¿Existe definición y documentación de la cartera de servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_22" class="panel-body">
			<textarea name="psc_ta_22" id="psc_ta_22" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_23" class="panel panel-primary">
		<div id="panel_head_psc_ta_23" class="panel-heading">
			<h4>¿Se tienen definidos los objetivos y expectativas de desempeño hacia el servicio de los clientes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_23" class="panel-body">
			<textarea name="psc_ta_23" id="psc_ta_23" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_24" class="panel panel-primary">
		<div id="panel_head_psc_ta_24" class="panel-heading">
			<h4>¿Se identifican, seleccionan y priorizan oportunidades de servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_24" class="panel-body">
			<textarea name="psc_ta_24" id="psc_ta_24" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_25" class="panel panel-primary">
		<div id="panel_head_psc_ta_25" class="panel-heading">
			<h4>¿Se evalúan con frecuencia el cumplimiento de los objetivos de los servicios de TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_25" class="panel-body">
			<textarea name="psc_ta_25" id="psc_ta_25" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_26" class="panel panel-primary">
		<div id="panel_head_psc_ta_26" class="panel-heading">
			<h4>¿La cartera de servicios esta asociadas a las áreas funcionales del negocio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_26" class="panel-body">
			<textarea name="psc_ta_26" id="psc_ta_26" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_27" class="panel panel-primary">
		<div id="panel_head_psc_ta_27" class="panel-heading">
			<h4>¿Existe clasificación de tipos de proveedores por servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_27" class="panel-body">
			<textarea name="psc_ta_27" id="psc_ta_27" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_28" class="panel panel-primary">
		<div id="panel_head_psc_ta_28" class="panel-heading">
			<h4>¿Está definido el Portafolio de Servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_28" class="panel-body">
			<textarea name="psc_ta_28" id="psc_ta_28" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_29" class="panel panel-primary">
		<div id="panel_head_psc_ta_29" class="panel-heading">
			<h4>¿Los retos, riesgos y factores críticos de éxito de los procesos están documentados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_29" class="panel-body">
			<textarea name="psc_ta_29" id="psc_ta_29" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Gestión Financiera</h1>
<div class="form-group">
	<div id="panel_psc_ta_30" class="panel panel-primary">
		<div id="panel_head_psc_ta_30" class="panel-heading">
			<h4>¿Se realiza un adecuado manejo de costos y riesgos asociados a la cartera de servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_30" class="panel-body">
			<textarea name="psc_ta_30" id="psc_ta_30" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_31" class="panel panel-primary">
		<div id="panel_head_psc_ta_31" class="panel-heading">
			<h4>¿Existe planeación y control de presupuesto para la prestación de los servicios de TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_31" class="panel-body">
			<textarea name="psc_ta_31" id="psc_ta_31" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_32" class="panel panel-primary">
		<div id="panel_head_psc_ta_32" class="panel-heading">
			<h4>¿Existe centro de costos asignados a las áreas del negocio para la prestación de los servicios o se realiza cobros por los servicios de TI (Asignación costo / incidente)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_32" class="panel-body">
			<textarea name="psc_ta_32" id="psc_ta_32" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_33" class="panel panel-primary">
		<div id="panel_head_psc_ta_33" class="panel-heading">
			<h4>¿Dentro del servicio, hay clasificadores que designan el propósito final del costo (Capital/operacional, Directo/indirecto, Fijo/variable, Unidades de coste, Recurso humano/equipos)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_33" class="panel-body">
			<textarea name="psc_ta_33" id="psc_ta_33" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_34" class="panel panel-primary">
		<div id="panel_head_psc_ta_34" class="panel-heading">
			<h4>¿Existe una implementación del procesos de gestión financiera de los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_34" class="panel-body">
			<textarea name="psc_ta_34" id="psc_ta_34" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Gestión de la demanda</h1>
<div class="form-group">
	<div id="panel_psc_ta_35" class="panel panel-primary">
		<div id="panel_head_psc_ta_35" class="panel-heading">
			<h4>¿Con frecuencia se evalúa el estado de la demanda de los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_35" class="panel-body">
			<textarea name="psc_ta_35" id="psc_ta_35" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_36" class="panel panel-primary">
		<div id="panel_head_psc_ta_36" class="panel-heading">
			<h4>¿Hay una definición clara de las áreas usuarias versus servicios prestados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_36" class="panel-body">
			<textarea name="psc_ta_36" id="psc_ta_36" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_37" class="panel panel-primary">
		<div id="panel_head_psc_ta_37" class="panel-heading">
			<h4>¿Permanentemente se realiza análisis de patrones de actividades del negocio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_37" class="panel-body">
			<textarea name="psc_ta_37" id="psc_ta_37" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_38" class="panel panel-primary">
		<div id="panel_head_psc_ta_38" class="panel-heading">
			<h4>¿Con frecuencia se identifican, seleccionan y priorizan oportunidades de servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_38" class="panel-body">
			<textarea name="psc_ta_38" id="psc_ta_38" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_39" class="panel panel-primary">
		<div id="panel_head_psc_ta_39" class="panel-heading">
			<h4>¿Los servicios se priorizan de acuerdo al activos estratégico de la organización?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_39" class="panel-body">
			<textarea name="psc_ta_39" id="psc_ta_39" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_40" class="panel panel-primary">
		<div id="panel_head_psc_ta_40" class="panel-heading">
			<h4>¿Existe la definición del rol de atención al cliente que evalúa permanentemente la satisfacción y necesidades de las áreas usuarias?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_40" class="panel-body">
			<textarea name="psc_ta_40" id="psc_ta_40" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>

		<div class="form-group">
			<button id="enviar" type="submit" class="btn btn-primary">Enviar</button>
			<button id="cancelar" type="reset" class="btn btn-primary">Cancelar</button>
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
	<script type="text/javascript" src="javascript/estrategia_cualitativa.js"></script>
</body>
</html>

