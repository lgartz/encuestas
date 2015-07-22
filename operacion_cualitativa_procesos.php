<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Operación (Relación entre procesos)</title>
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
				<span class="navbar-brand">Operación de los servicios IT (Relación entre procesos) Caulitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="operacion_cualitativa_procesos_process.php" method="GET">
			<br><h1>Service Desk</h1>
<div class="form-group">
	<div id="panel_psc_ta_377" class="panel panel-primary">
		<div id="panel_head_psc_ta_377" class="panel-heading">
			<h4>¿El proceso de service Desk reporta todos los incidentes de forma manual o automática?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_377" class="panel-body">
			<textarea name="psc_ta_377" id="psc_ta_377" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_378" class="panel panel-primary">
		<div id="panel_head_psc_ta_378" class="panel-heading">
			<h4>¿El service Desk suministra todos los detalles básicos de los incidentes reportados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_378" class="panel-body">
			<textarea name="psc_ta_378" id="psc_ta_378" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_379" class="panel panel-primary">
		<div id="panel_head_psc_ta_379" class="panel-heading">
			<h4>¿Asigna el impacto y la prioridad inicial a los incidentes que son escalados al grupo de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_379" class="panel-body">
			<textarea name="psc_ta_379" id="psc_ta_379" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_380" class="panel panel-primary">
		<div id="panel_head_psc_ta_380" class="panel-heading">
			<h4>¿El service Desk realiza una investigación inicial del incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_380" class="panel-body">
			<textarea name="psc_ta_380" id="psc_ta_380" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_510" class="panel panel-primary">
		<div id="panel_head_psc_ta_510" class="panel-heading">
			<h4>¿El service Desk monitorea y escala los incidentes al grupo de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_510" class="panel-body">
			<textarea name="psc_ta_510" id="psc_ta_510" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_381" class="panel panel-primary">
		<div id="panel_head_psc_ta_381" class="panel-heading">
			<h4>¿El grupo de service Desk cierra y actualiza el registro de los incidentes solucionados por el grupo de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_381" class="panel-body">
			<textarea name="psc_ta_381" id="psc_ta_381" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_382" class="panel panel-primary">
		<div id="panel_head_psc_ta_382" class="panel-heading">
			<h4>¿El service Desk mantiene informado al cliente acerca de los escalamientos que realiza al proceso de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_382" class="panel-body">
			<textarea name="psc_ta_382" id="psc_ta_382" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_383" class="panel panel-primary">
		<div id="panel_head_psc_ta_383" class="panel-heading">
			<h4>¿El service Desk realiza un soporte de primer nivel de los incidentes reportados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_383" class="panel-body">
			<textarea name="psc_ta_383" id="psc_ta_383" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Change Management</h1>
<div class="form-group">
	<div id="panel_psc_ta_384" class="panel panel-primary">
		<div id="panel_head_psc_ta_384" class="panel-heading">
			<h4>¿Existe un proceso formal de RFC para la solución de un Incidente (Cambio Urgente) cuando es requerido?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_384" class="panel-body">
			<textarea name="psc_ta_384" id="psc_ta_384" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_385" class="panel panel-primary">
		<div id="panel_head_psc_ta_385" class="panel-heading">
			<h4>¿El grupo de IM asigna al proceso de Cambios los requerimientos de Cambio (RFC) solicitados por el usuario para su gestión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_385" class="panel-body">
			<textarea name="psc_ta_385" id="psc_ta_385" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_386" class="panel panel-primary">
		<div id="panel_head_psc_ta_386" class="panel-heading">
			<h4>¿El proceso de cambios Notifica al proceso de Administración de Incidentes la programación y ejecución de los cambios solicitados sean urgentes o estándar?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_386" class="panel-body">
			<textarea name="psc_ta_386" id="psc_ta_386" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_387" class="panel panel-primary">
		<div id="panel_head_psc_ta_387" class="panel-heading">
			<h4>¿Los incidentes causados por cambios implementados son relacionados con el registro de Cambio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_387" class="panel-body">
			<textarea name="psc_ta_387" id="psc_ta_387" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_388" class="panel panel-primary">
		<div id="panel_head_psc_ta_388" class="panel-heading">
			<h4>¿En el comité de evaluación de cambios críticos se encuentra el Administrador de Incidentes involucrado?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_388" class="panel-body">
			<textarea name="psc_ta_388" id="psc_ta_388" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_389" class="panel panel-primary">
		<div id="panel_head_psc_ta_389" class="panel-heading">
			<h4>¿Los registros de cambio creados a partir de una llamada de servicio son relacionados con el registro de llamada correspondiente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_389" class="panel-body">
			<textarea name="psc_ta_389" id="psc_ta_389" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Configuration Management </h1>
<div class="form-group">
	<div id="panel_psc_ta_390" class="panel panel-primary">
		<div id="panel_head_psc_ta_390" class="panel-heading">
			<h4>¿Todos los elementos de configuración se encuentran en la base de datos de configuración (CMDB)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_390" class="panel-body">
			<textarea name="psc_ta_390" id="psc_ta_390" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_391" class="panel panel-primary">
		<div id="panel_head_psc_ta_391" class="panel-heading">
			<h4>¿Todos los incidentes están relacionados con su correspondiente elemento de configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_391" class="panel-body">
			<textarea name="psc_ta_391" id="psc_ta_391" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_392" class="panel panel-primary">
		<div id="panel_head_psc_ta_392" class="panel-heading">
			<h4>¿Las inconsistencias encontradas en la CMDB por proceso de Administración de Incidentes son reportadas a la administración de Configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_392" class="panel-body">
			<textarea name="psc_ta_392" id="psc_ta_392" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_393" class="panel panel-primary">
		<div id="panel_head_psc_ta_393" class="panel-heading">
			<h4>¿La base de datos de personas se encuentra actualizada?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_393" class="panel-body">
			<textarea name="psc_ta_393" id="psc_ta_393" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_394" class="panel panel-primary">
		<div id="panel_head_psc_ta_394" class="panel-heading">
			<h4>¿Las personas registradas en la CMDB están relacionadas con sus elementos de configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_394" class="panel-body">
			<textarea name="psc_ta_394" id="psc_ta_394" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Problem Management</h1>
<div class="form-group">
	<div id="panel_psc_ta_395" class="panel panel-primary">
		<div id="panel_head_psc_ta_395" class="panel-heading">
			<h4>¿Todo nuevo error conocido es reportado al proceso de Administración de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_395" class="panel-body">
			<textarea name="psc_ta_395" id="psc_ta_395" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_396" class="panel panel-primary">
		<div id="panel_head_psc_ta_396" class="panel-heading">
			<h4>¿Existe una base de datos de Errores conocidos y Problemas - KEDB?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_396" class="panel-body">
			<textarea name="psc_ta_396" id="psc_ta_396" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_397" class="panel panel-primary">
		<div id="panel_head_psc_ta_397" class="panel-heading">
			<h4>¿Todos los errores conocidos contienen una Solución temporal registrada con acceso al proceso de IM?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_397" class="panel-body">
			<textarea name="psc_ta_397" id="psc_ta_397" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_398" class="panel panel-primary">
		<div id="panel_head_psc_ta_398" class="panel-heading">
			<h4>¿El proceso de Administración de incidentes genera reportes de tendencias para el análisis de problemas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_398" class="panel-body">
			<textarea name="psc_ta_398" id="psc_ta_398" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_399" class="panel panel-primary">
		<div id="panel_head_psc_ta_399" class="panel-heading">
			<h4>¿Los incidentes críticos son escalados a la Administración de Problemas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_399" class="panel-body">
			<textarea name="psc_ta_399" id="psc_ta_399" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_400" class="panel panel-primary">
		<div id="panel_head_psc_ta_400" class="panel-heading">
			<h4>¿Los incidentes con causa raíz desconocida son escalados a la Administración de Problemas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_400" class="panel-body">
			<textarea name="psc_ta_400" id="psc_ta_400" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_401" class="panel panel-primary">
		<div id="panel_head_psc_ta_401" class="panel-heading">
			<h4>¿Las soluciones temporales son suministradas siempre por la Administración de Problemas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_401" class="panel-body">
			<textarea name="psc_ta_401" id="psc_ta_401" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_402" class="panel panel-primary">
		<div id="panel_head_psc_ta_402" class="panel-heading">
			<h4>¿Los registros de incidentes se relacionan con los registros de problemas si el incidente corresponde a un Error Conocido o Problema en la infraestructura soportada?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_402" class="panel-body">
			<textarea name="psc_ta_402" id="psc_ta_402" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_403" class="panel panel-primary">
		<div id="panel_head_psc_ta_403" class="panel-heading">
			<h4>¿Se cuenta con un sistema de gestión del servicio de conocimiento o base de datos de conocimiento para incidentes y soluciones conocidos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_403" class="panel-body">
			<textarea name="psc_ta_403" id="psc_ta_403" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_404" class="panel panel-primary">
		<div id="panel_head_psc_ta_404" class="panel-heading">
			<h4>¿La base de datos de conocimiento se mantiene actualizada con los incidentes que se presentan?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_404" class="panel-body">
			<textarea name="psc_ta_404" id="psc_ta_404" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Release Management</h1>
<div class="form-group">
	<div id="panel_psc_ta_405" class="panel panel-primary">
		<div id="panel_head_psc_ta_405" class="panel-heading">
			<h4>¿El grupo de Incident Management escala al grupo de Release todos los reportes y logs de error de los usuarios finales por la implementación de un nuevo release?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_405" class="panel-body">
			<textarea name="psc_ta_405" id="psc_ta_405" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_406" class="panel panel-primary">
		<div id="panel_head_psc_ta_406" class="panel-heading">
			<h4>¿El grupo de Incident Management chequea que las implementaciones realizadas por Release sean exitosas ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_406" class="panel-body">
			<textarea name="psc_ta_406" id="psc_ta_406" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Availability Management </h1>
<div class="form-group">
	<div id="panel_psc_ta_407" class="panel panel-primary">
		<div id="panel_head_psc_ta_407" class="panel-heading">
			<h4>¿El proceso de availability Management vela por revisar y avisar acerca de pobres diagnósticos en una incidencia, herramientas, scripts, procedimientos que nos son claros para subir un servicio o procedimientos de escalamiento que no son claros?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_407" class="panel-body">
			<textarea name="psc_ta_407" id="psc_ta_407" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_408" class="panel panel-primary">
		<div id="panel_head_psc_ta_408" class="panel-heading">
			<h4>¿El proceso de Incident Management entrega información al proceso de Availability acerca de la disponibilidad de los niveles de servicio pactados en los SLAs ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_408" class="panel-body">
			<textarea name="psc_ta_408" id="psc_ta_408" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_409" class="panel panel-primary">
		<div id="panel_head_psc_ta_409" class="panel-heading">
			<h4>¿Los tiempos muertos de indisponibilidad de un servicio son tratados en conjunto con el proceso de Availability para que este sea menor e impacte menos al usuario?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_409" class="panel-body">
			<textarea name="psc_ta_409" id="psc_ta_409" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Capacity Management</h1>
<div class="form-group">
	<div id="panel_psc_ta_410" class="panel panel-primary">
		<div id="panel_head_psc_ta_410" class="panel-heading">
			<h4>¿El proceso de Incident Management proporciona un índice de desempeño al proceso de Capacity, monitoreando los incidentes cuando estos aparecen?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_410" class="panel-body">
			<textarea name="psc_ta_410" id="psc_ta_410" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_411" class="panel panel-primary">
		<div id="panel_head_psc_ta_411" class="panel-heading">
			<h4>¿El proceso de Capacity proporciona información relacionada con las herramientas de diagnóstico como modelos y scripts de la simulación para solucionar incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_411" class="panel-body">
			<textarea name="psc_ta_411" id="psc_ta_411" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_412" class="panel panel-primary">
		<div id="panel_head_psc_ta_412" class="panel-heading">
			<h4>¿El proceso de Incident Management asegura que los incidentes son solucionados dentro de los niveles de capacidad mencionados en los SLAs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_412" class="panel-body">
			<textarea name="psc_ta_412" id="psc_ta_412" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_413" class="panel panel-primary">
		<div id="panel_head_psc_ta_413" class="panel-heading">
			<h4>¿El proceso de Incident Management proporciona al proceso de capacidad información acerca de la relación de capacidad de incidentes Por ejemplo: listados no disponibles debido a la escasez de impresoras, o información no almacenada en discos ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_413" class="panel-body">
			<textarea name="psc_ta_413" id="psc_ta_413" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Continuity Management</h1>
<div class="form-group">
	<div id="panel_psc_ta_414" class="panel panel-primary">
		<div id="panel_head_psc_ta_414" class="panel-heading">
			<h4>¿El grupo de Continuity Management entrega planes de continuidad del negocio (BCP) al proceso de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_414" class="panel-body">
			<textarea name="psc_ta_414" id="psc_ta_414" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_415" class="panel panel-primary">
		<div id="panel_head_psc_ta_415" class="panel-heading">
			<h4>¿El proceso de Incident Management se acoge a los lineamientos que tiene el BCP?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_415" class="panel-body">
			<textarea name="psc_ta_415" id="psc_ta_415" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Financial Management</h1>
<div class="form-group">
	<div id="panel_psc_ta_416" class="panel panel-primary">
		<div id="panel_head_psc_ta_416" class="panel-heading">
			<h4>¿La cantidad de tiempo, esfuerzo y el dinero que se gasta en resolver un incidente proporcionando a su vez Workarounds es registrado en la herramienta en donde se encuentran registrados estos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_416" class="panel-body">
			<textarea name="psc_ta_416" id="psc_ta_416" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Service level Management</h1>
<div class="form-group">
	<div id="panel_psc_ta_417" class="panel panel-primary">
		<div id="panel_head_psc_ta_417" class="panel-heading">
			<h4>¿El proceso de IM proporciona reportes que permiten al grupo de niveles de servicio revisar objetivamente y regularmente los SLAs pactados ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_417" class="panel-body">
			<textarea name="psc_ta_417" id="psc_ta_417" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_418" class="panel panel-primary">
		<div id="panel_head_psc_ta_418" class="panel-heading">
			<h4>¿El proceso de IM retroalimenta al proceso de Service Level Management acerca de inconsistencias, incumplimientos o acuerdos no alcanzables de los SLAs, OLAs y UCs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_418" class="panel-body">
			<textarea name="psc_ta_418" id="psc_ta_418" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Security Management</h1>
<div class="form-group">
	<div id="panel_psc_ta_419" class="panel panel-primary">
		<div id="panel_head_psc_ta_419" class="panel-heading">
			<h4>¿El proceso de seguridad especifica mediante un documento al proceso de Incident Management las medidas para prevenir incidentes de seguridad?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_419" class="panel-body">
			<textarea name="psc_ta_419" id="psc_ta_419" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_420" class="panel panel-primary">
		<div id="panel_head_psc_ta_420" class="panel-heading">
			<h4>¿El proceso de Security trabaja en conjunto con el proceso de Incident Management para resolver incidentes de Seguridad?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_420" class="panel-body">
			<textarea name="psc_ta_420" id="psc_ta_420" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_421" class="panel panel-primary">
		<div id="panel_head_psc_ta_421" class="panel-heading">
			<h4>¿El proceso de Incident management conoce las políticas del manejo de incidentes de seguridad?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_421" class="panel-body">
			<textarea name="psc_ta_421" id="psc_ta_421" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
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
	<script type="text/javascript" src="javascript/operacion_cualitativa_procesos.js"></script>
</body>
</html>

