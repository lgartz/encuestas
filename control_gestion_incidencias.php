<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Control Proceso - Gestión de Incidencias - Cualitativo</title>
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
				<span class="navbar-brand">Control Proceso - Gestión de Incidencias - Cualitativo</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="control_gestion_incidencias_process.php" method="GET">
			<br><h1>Documentación</h1>
<div class="form-group">
	<div id="panel_psu_t_641" class="panel panel-primary">
		<div id="panel_head_psu_t_641" class="panel-heading">
			<h4>¿Los clientes disponen de información puntual sobre los niveles de cumplimiento de los SLAs y que se adopten medidas correctivas en caso de incumplimiento?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_641" class="panel-body">
			<input id="psu_t_641" name="psu_t_641" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_642" class="panel panel-primary">
		<div id="panel_head_psu_t_642" class="panel-heading">
			<h4>¿Existe informacion que permite conocer el grado de satisfacción del cliente por el servicio prestado ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_642" class="panel-body">
			<input id="psu_t_642" name="psu_t_642" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_643" class="panel panel-primary">
		<div id="panel_head_psu_t_643" class="panel-heading">
			<h4>¿Existe informacion que permita supervisar el correcto funcionamiento de la primera línea de soporte y atención al cliente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_643" class="panel-body">
			<input id="psu_t_643" name="psu_t_643" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_644" class="panel panel-primary">
		<div id="panel_head_psu_t_644" class="panel-heading">
			<h4>¿Existe informacion que permita conocer si el proceso de escalado ha sido fiel a los protocolos preestablecidos y si se han evitado duplicidades en el proceso de gestión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_644" class="panel-body">
			<input id="psu_t_644" name="psu_t_644" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_645" class="panel panel-primary">
		<div id="panel_head_psu_t_645" class="panel-heading">
			<h4>¿Se dispone de información estadística que puede ser utilizada para hacer proyecciones futuras sobre asignación de recursos, costes asociados al servicio, etc?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_645" class="panel-body">
			<input id="psu_t_645" name="psu_t_645" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<br><h1>Infraestructura</h1>
<div class="form-group">
	<div id="panel_psu_t_646" class="panel panel-primary">
		<div id="panel_head_psu_t_646" class="panel-heading">
			<h4>¿Cuenta con un correcto sistema automatizado de registro de incidentes y relación con los clientes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_646" class="panel-body">
			<input id="psu_t_646" name="psu_t_646" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_647" class="panel panel-primary">
		<div id="panel_head_psu_t_647" class="panel-heading">
			<h4>¿Cuenta con un SKMS que permita comparar nuevos incidentes con incidentes ya registrados y resueltos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_647" class="panel-body">
			<input id="psu_t_647" name="psu_t_647" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_648" class="panel panel-primary">
		<div id="panel_head_psu_t_648" class="panel-heading">
			<h4>¿Cuenta con un SKMS actualizado que permita evitar escalados innecesarios, convertir el know how de los técnicos en un activo duradero de la empresa, poner directamente a disposición del cliente parte o la totalidad de estos datos (a la manera de FAQs) en una extranet, lo que puede permitir que a veces el usuario no necesite siquiera notificar la incidencia?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_648" class="panel-body">
			<input id="psu_t_648" name="psu_t_648" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_649" class="panel panel-primary">
		<div id="panel_head_psu_t_649" class="panel-heading">
			<h4>¿Cuenta con un CMDB que permita conocer todas las configuraciones actuales y el impacto que éstas puedan tener en la resolución del incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_649" class="panel-body">
			<input id="psu_t_649" name="psu_t_649" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<br><h1>Métricas</h1>
<div class="form-group">
	<div id="panel_psc_ta_650" class="panel panel-primary">
		<div id="panel_head_psc_ta_650" class="panel-heading">
			<h4>¿Cúal es el número de incidentes clasificados temporalmente y por prioridades?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_650" class="panel-body">
			<textarea name="psc_ta_650" id="psc_ta_650" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_651" class="panel panel-primary">
		<div id="panel_head_psc_ta_651" class="panel-heading">
			<h4>¿Cúal es el tiempo de resolución clasificados en función del impacto y la urgencia de los incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_651" class="panel-body">
			<textarea name="psc_ta_651" id="psc_ta_651" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_652" class="panel panel-primary">
		<div id="panel_head_psu_t_652" class="panel-heading">
			<h4>¿Cúal es el nivel de cumplimiento de los SLAs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_652" class="panel-body">
			<input id="psu_t_652" name="psu_t_652" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_653" class="panel panel-primary">
		<div id="panel_head_psu_t_653" class="panel-heading">
			<h4>¿Cuales son los costes asociados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_653" class="panel-body">
			<input id="psu_t_653" name="psu_t_653" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_654" class="panel panel-primary">
		<div id="panel_head_psu_t_654" class="panel-heading">
			<h4>¿Cúal es el uso de los recursos disponibles en el Centro de Servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_654" class="panel-body">
			<input id="psu_t_654" name="psu_t_654" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_654" class="panel panel-primary">
		<div id="panel_head_psu_t_654" class="panel-heading">
			<h4>¿Cúal es el porcentaje de incidentes, clasificados por prioridades, resueltos en primera instancia por el Centro de Servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_654" class="panel-body">
			<input id="psu_t_654" name="psu_t_654" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_655" class="panel panel-primary">
		<div id="panel_head_psu_t_655" class="panel-heading">
			<h4>¿Cúal es el grado de satisfacción del cliente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_655" class="panel-body">
			<input id="psu_t_655" name="psu_t_655" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
	<script type="text/javascript" src="javascript/control_gestion_incidencias.js"></script>
</body>
</html>

