<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Operación (Actividades)</title>
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
				<span class="navbar-brand">Operación de los servicios IT (Actividades) Cualitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="operacion_cualitativa_actividades_process.php" method="GET">
			<br><h1>Detección y Registro </h1>
<div class="form-group">
	<div id="panel_psc_ta_239" class="panel panel-primary">
		<div id="panel_head_psc_ta_239" class="panel-heading">
			<h4>¿Existe una Base de Datos única para el registro de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_239" class="panel-body">
			<textarea name="psc_ta_239" id="psc_ta_239" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_240" class="panel panel-primary">
		<div id="panel_head_psc_ta_240" class="panel-heading">
			<h4>¿Existe un identificador único para cada incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_240" class="panel-body">
			<textarea name="psc_ta_240" id="psc_ta_240" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_241" class="panel panel-primary">
		<div id="panel_head_psc_ta_241" class="panel-heading">
			<h4>¿La documentación registrada de Incidentes esta estandarizada (Ej: Descripción, Información, historial)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_241" class="panel-body">
			<textarea name="psc_ta_241" id="psc_ta_241" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_242" class="panel panel-primary">
		<div id="panel_head_psc_ta_242" class="panel-heading">
			<h4>¿Existe un único punto de contacto para el reporte de todos los incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_242" class="panel-body">
			<textarea name="psc_ta_242" id="psc_ta_242" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_243" class="panel panel-primary">
		<div id="panel_head_psc_ta_243" class="panel-heading">
			<h4>¿Todos los incidentes son reportados al único punto de contacto?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_243" class="panel-body">
			<textarea name="psc_ta_243" id="psc_ta_243" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_244" class="panel panel-primary">
		<div id="panel_head_psc_ta_244" class="panel-heading">
			<h4>¿Los medios de acceso al único punto de contacto están al alcance de todos los usuarios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_244" class="panel-body">
			<textarea name="psc_ta_244" id="psc_ta_244" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_245" class="panel panel-primary">
		<div id="panel_head_psc_ta_245" class="panel-heading">
			<h4>¿Todos los incidentes son registrados con su elemento de Configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_245" class="panel-body">
			<textarea name="psc_ta_245" id="psc_ta_245" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_246" class="panel panel-primary">
		<div id="panel_head_psc_ta_246" class="panel-heading">
			<h4>¿Las inconsistencias de la CMDB son detectadas y reportadas a Configuration Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_246" class="panel-body">
			<textarea name="psc_ta_246" id="psc_ta_246" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_247" class="panel panel-primary">
		<div id="panel_head_psc_ta_247" class="panel-heading">
			<h4>¿Esta identificada claramente la información o campos mínimos requeridos para el registro de un incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_247" class="panel-body">
			<textarea name="psc_ta_247" id="psc_ta_247" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_248" class="panel panel-primary">
		<div id="panel_head_psc_ta_248" class="panel-heading">
			<h4>¿Está disponible la herramienta de gestión de llamadas por medio Web para que los usuarios finales hagan su propio registro y consultas de incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_248" class="panel-body">
			<textarea name="psc_ta_248" id="psc_ta_248" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_249" class="panel panel-primary">
		<div id="panel_head_psc_ta_249" class="panel-heading">
			<h4>¿Los usuarios finales conocen y realizan su propio registro de incidentes por medio Web (40% óptimo)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_249" class="panel-body">
			<textarea name="psc_ta_249" id="psc_ta_249" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_250" class="panel panel-primary">
		<div id="panel_head_psc_ta_250" class="panel-heading">
			<h4>¿Se controla la duplicidad de registro de incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_250" class="panel-body">
			<textarea name="psc_ta_250" id="psc_ta_250" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_251" class="panel panel-primary">
		<div id="panel_head_psc_ta_251" class="panel-heading">
			<h4>¿El reporte de Incidentes por medio e-mail se realiza a través de un formulario predefinido?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_251" class="panel-body">
			<textarea name="psc_ta_251" id="psc_ta_251" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_252" class="panel panel-primary">
		<div id="panel_head_psc_ta_252" class="panel-heading">
			<h4>¿Todos los incidentes que no son detectados automáticamente son registrados en la herramienta de gestión a través del Service Desk?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_252" class="panel-body">
			<textarea name="psc_ta_252" id="psc_ta_252" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_253" class="panel panel-primary">
		<div id="panel_head_psc_ta_253" class="panel-heading">
			<h4>¿Los eventos automáticos registrados que no afectan o degradan el servicio (no son incidentes) son reportados a Operación management para su solución?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_253" class="panel-body">
			<textarea name="psc_ta_253" id="psc_ta_253" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Clasificación y Soporte Inicial</h1>
<div class="form-group">
	<div id="panel_psc_ta_254" class="panel panel-primary">
		<div id="panel_head_psc_ta_254" class="panel-heading">
			<h4>¿Los SLAs de los servicios prestados están claramente definidos y entendidos por los diferentes grupos de soporte?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_254" class="panel-body">
			<textarea name="psc_ta_254" id="psc_ta_254" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_255" class="panel panel-primary">
		<div id="panel_head_psc_ta_255" class="panel-heading">
			<h4>¿Los SLAs están parametrizados correctamente en la herramienta de gestión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_255" class="panel-body">
			<textarea name="psc_ta_255" id="psc_ta_255" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_256" class="panel panel-primary">
		<div id="panel_head_psc_ta_256" class="panel-heading">
			<h4>¿Todos los incidentes están relacionados con el Servicio afectado y su nivel de servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_256" class="panel-body">
			<textarea name="psc_ta_256" id="psc_ta_256" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_257" class="panel panel-primary">
		<div id="panel_head_psc_ta_257" class="panel-heading">
			<h4>¿La categoría del registro es seleccionada correctamente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_257" class="panel-body">
			<textarea name="psc_ta_257" id="psc_ta_257" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_258" class="panel panel-primary">
		<div id="panel_head_psc_ta_258" class="panel-heading">
			<h4>¿El árbol de clasificación de incidentes está definido y parametrizados en la herramienta (según el estándar)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_258" class="panel-body">
			<textarea name="psc_ta_258" id="psc_ta_258" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_259" class="panel panel-primary">
		<div id="panel_head_psc_ta_259" class="panel-heading">
			<h4>¿El único punto de contacto conoce el estándar de clasificación y lo utiliza correctamente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_259" class="panel-body">
			<textarea name="psc_ta_259" id="psc_ta_259" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_260" class="panel panel-primary">
		<div id="panel_head_psc_ta_260" class="panel-heading">
			<h4>¿El único punto de contacto define la prioridad del incidente basado en el impacto al negocio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_260" class="panel-body">
			<textarea name="psc_ta_260" id="psc_ta_260" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_261" class="panel panel-primary">
		<div id="panel_head_psc_ta_261" class="panel-heading">
			<h4>¿Se asignan las prioridades con una matriz de Impacto / Urgencia?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_261" class="panel-body">
			<textarea name="psc_ta_261" id="psc_ta_261" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_262" class="panel panel-primary">
		<div id="panel_head_psc_ta_262" class="panel-heading">
			<h4>¿Los grupos solucionadores están identificados y registrados en la herramienta de gestión junto con sus alcances?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_262" class="panel-body">
			<textarea name="psc_ta_262" id="psc_ta_262" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_263" class="panel panel-primary">
		<div id="panel_head_psc_ta_263" class="panel-heading">
			<h4>¿Los alcances de cada grupo solucionador son claros para el único punto de contacto y para el grupo de IM?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_263" class="panel-body">
			<textarea name="psc_ta_263" id="psc_ta_263" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_264" class="panel panel-primary">
		<div id="panel_head_psc_ta_264" class="panel-heading">
			<h4>¿Están definidos los Checklist para los incidentes frecuentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_264" class="panel-body">
			<textarea name="psc_ta_264" id="psc_ta_264" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_265" class="panel panel-primary">
		<div id="panel_head_psc_ta_265" class="panel-heading">
			<h4>¿Están definidas las plantillas de documentación para los incidentes frecuentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_265" class="panel-body">
			<textarea name="psc_ta_265" id="psc_ta_265" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_266" class="panel panel-primary">
		<div id="panel_head_psc_ta_266" class="panel-heading">
			<h4>¿Existe una Base de Datos con Errores Conocidos y problemas y sus soluciones - KEDB (definitivas o temporales) con acceso al único punto de contacto y al proceso de IM?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_266" class="panel-body">
			<textarea name="psc_ta_266" id="psc_ta_266" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_267" class="panel panel-primary">
		<div id="panel_head_psc_ta_267" class="panel-heading">
			<h4>¿Existe una Base de Datos con Errores Conocidos y problemas y sus soluciones - KEDB (definitivas o temporales) con acceso al único punto de contacto y al proceso de IM?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_267" class="panel-body">
			<textarea name="psc_ta_267" id="psc_ta_267" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_268" class="panel panel-primary">
		<div id="panel_head_psc_ta_268" class="panel-heading">
			<h4>¿En la herramienta de gestión se realiza la relación de incidentes con errores conocidos o problemas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_268" class="panel-body">
			<textarea name="psc_ta_268" id="psc_ta_268" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_269" class="panel panel-primary">
		<div id="panel_head_psc_ta_269" class="panel-heading">
			<h4>¿Existe una Base de datos de FAQs con acceso a todo el personal del proceso de incidentes y Usuarios Autorizados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_269" class="panel-body">
			<textarea name="psc_ta_269" id="psc_ta_269" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_270" class="panel panel-primary">
		<div id="panel_head_psc_ta_270" class="panel-heading">
			<h4>¿Se notifica al proceso de problemas la existencia de un posible problema (Incidente con Causa Raíz desconocida o Incidente Crítico)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_270" class="panel-body">
			<textarea name="psc_ta_270" id="psc_ta_270" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_271" class="panel panel-primary">
		<div id="panel_head_psc_ta_271" class="panel-heading">
			<h4>¿Existe una herramienta de control remoto para el único punto de contacto?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_271" class="panel-body">
			<textarea name="psc_ta_271" id="psc_ta_271" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_272" class="panel panel-primary">
		<div id="panel_head_psc_ta_272" class="panel-heading">
			<h4>¿El grupo de IM soluciona requerimientos de Reset o desbloqueo de password?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_272" class="panel-body">
			<textarea name="psc_ta_272" id="psc_ta_272" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_273" class="panel panel-primary">
		<div id="panel_head_psc_ta_273" class="panel-heading">
			<h4>¿Se realiza correlación de llamadas de usuario con incidentes de plataforma?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_273" class="panel-body">
			<textarea name="psc_ta_273" id="psc_ta_273" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Investigación y Diagnóstico</h1>
<div class="form-group">
	<div id="panel_psc_ta_274" class="panel panel-primary">
		<div id="panel_head_psc_ta_274" class="panel-heading">
			<h4>¿Para incidentes críticos la notificación al nivel solucionador se realiza telefónicamente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_274" class="panel-body">
			<textarea name="psc_ta_274" id="psc_ta_274" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_275" class="panel panel-primary">
		<div id="panel_head_psc_ta_275" class="panel-heading">
			<h4>¿Los incidentes se atienden por orden de prioridad ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_275" class="panel-body">
			<textarea name="psc_ta_275" id="psc_ta_275" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_276" class="panel panel-primary">
		<div id="panel_head_psc_ta_276" class="panel-heading">
			<h4>¿Se realiza la actualización continua de la historia del incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_276" class="panel-body">
			<textarea name="psc_ta_276" id="psc_ta_276" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_277" class="panel panel-primary">
		<div id="panel_head_psc_ta_277" class="panel-heading">
			<h4>¿El único punto de contacto mantiene informado al cliente sobre el progreso de la solución (Cambio de Estado, Cambio de grupo solucionador, cambio en tiempo estimado de solución)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_277" class="panel-body">
			<textarea name="psc_ta_277" id="psc_ta_277" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_278" class="panel panel-primary">
		<div id="panel_head_psc_ta_278" class="panel-heading">
			<h4>¿El estado registrado del incidente refleja la situación actual del mismo?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_278" class="panel-body">
			<textarea name="psc_ta_278" id="psc_ta_278" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_279" class="panel panel-primary">
		<div id="panel_head_psc_ta_279" class="panel-heading">
			<h4>¿Si es requerido, el único punto de contacto re-evalúa el impacto y prioridad asignada acorde con los SLAs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_279" class="panel-body">
			<textarea name="psc_ta_279" id="psc_ta_279" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_280" class="panel panel-primary">
		<div id="panel_head_psc_ta_280" class="panel-heading">
			<h4>¿El único punto de contacto realiza un monitoreo continuo a la solución del incidente y notifica al Incidente Manager incumplimiento en los tiempos de solución según los SLAs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_280" class="panel-body">
			<textarea name="psc_ta_280" id="psc_ta_280" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_281" class="panel panel-primary">
		<div id="panel_head_psc_ta_281" class="panel-heading">
			<h4>¿El Inicident Manager vigila el cumplimiento de los tiempos de solución de los incidentes según los SLAs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_281" class="panel-body">
			<textarea name="psc_ta_281" id="psc_ta_281" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_282" class="panel panel-primary">
		<div id="panel_head_psc_ta_282" class="panel-heading">
			<h4>¿Los especialistas notifican y registran nuevos problemas encontrados y son asignados al proceso correspondiente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_282" class="panel-body">
			<textarea name="psc_ta_282" id="psc_ta_282" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_283" class="panel panel-primary">
		<div id="panel_head_psc_ta_283" class="panel-heading">
			<h4>¿El 2 nivel de soporte realiza el escalamiento a 3 nivel de soporte cuando es requerido?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_283" class="panel-body">
			<textarea name="psc_ta_283" id="psc_ta_283" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_284" class="panel panel-primary">
		<div id="panel_head_psc_ta_284" class="panel-heading">
			<h4>¿Siempre existe una verificación de Incidentes pasados con el mismo Síntoma o relación con un error conocido o problema?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_284" class="panel-body">
			<textarea name="psc_ta_284" id="psc_ta_284" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_285" class="panel panel-primary">
		<div id="panel_head_psc_ta_285" class="panel-heading">
			<h4>¿Existe una matriz de Escalamiento funcional y jerárquico con sus responsables y tiempos definidos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_285" class="panel-body">
			<textarea name="psc_ta_285" id="psc_ta_285" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_286" class="panel panel-primary">
		<div id="panel_head_psc_ta_286" class="panel-heading">
			<h4>¿Está definido el ciclo de vida de un incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_286" class="panel-body">
			<textarea name="psc_ta_286" id="psc_ta_286" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Resolver el incidente y recuperar el servicio</h1>
<div class="form-group">
	<div id="panel_psc_ta_287" class="panel panel-primary">
		<div id="panel_head_psc_ta_287" class="panel-heading">
			<h4>¿La documentación de la solución contiene todas las instrucciones ejecutadas para la recuperación del incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_287" class="panel-body">
			<textarea name="psc_ta_287" id="psc_ta_287" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_288" class="panel panel-primary">
		<div id="panel_head_psc_ta_288" class="panel-heading">
			<h4>¿Los n-niveles solucionadores notifican al único punto de contacto cuando realizan la recuperación del incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_288" class="panel-body">
			<textarea name="psc_ta_288" id="psc_ta_288" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_289" class="panel panel-primary">
		<div id="panel_head_psc_ta_289" class="panel-heading">
			<h4>¿Se notifica al n-nivel del escalamiento jerárquico alcanzado sobre la solución del incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_289" class="panel-body">
			<textarea name="psc_ta_289" id="psc_ta_289" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_290" class="panel panel-primary">
		<div id="panel_head_psc_ta_290" class="panel-heading">
			<h4>¿Se realiza una re-clasificación del incidente cuando sea requerido?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_290" class="panel-body">
			<textarea name="psc_ta_290" id="psc_ta_290" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_291" class="panel panel-primary">
		<div id="panel_head_psc_ta_291" class="panel-heading">
			<h4>¿La fecha registrada de solución está acorde con la fecha de la implementación de la solución?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_291" class="panel-body">
			<textarea name="psc_ta_291" id="psc_ta_291" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_292" class="panel panel-primary">
		<div id="panel_head_psc_ta_292" class="panel-heading">
			<h4>¿Una solución temporal que restaure el servicio resuelve el incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_292" class="panel-body">
			<textarea name="psc_ta_292" id="psc_ta_292" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_293" class="panel panel-primary">
		<div id="panel_head_psc_ta_293" class="panel-heading">
			<h4>¿Existen procedimientos para la solución de un incidente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_293" class="panel-body">
			<textarea name="psc_ta_293" id="psc_ta_293" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Confirmación y Cierre</h1>
<div class="form-group">
	<div id="panel_psc_ta_294" class="panel panel-primary">
		<div id="panel_head_psc_ta_294" class="panel-heading">
			<h4>¿Se categoriza el motivo del cierre (Código de Cierre)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_294" class="panel-body">
			<textarea name="psc_ta_294" id="psc_ta_294" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_295" class="panel panel-primary">
		<div id="panel_head_psc_ta_295" class="panel-heading">
			<h4>¿Se verifica la correcta documentación del incidente en cuanto a (Categoría, Clasificación, Descripción, Elemento de Configuración, SLA, Prioridad, Solución, Código de Cierre)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_295" class="panel-body">
			<textarea name="psc_ta_295" id="psc_ta_295" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_296" class="panel panel-primary">
		<div id="panel_head_psc_ta_296" class="panel-heading">
			<h4>¿Se identifican los casos que son FAQs?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_296" class="panel-body">
			<textarea name="psc_ta_296" id="psc_ta_296" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_297" class="panel panel-primary">
		<div id="panel_head_psc_ta_297" class="panel-heading">
			<h4>¿Se identifican nuevas plantillas para documentación de Incidentes y se solicita su creación?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_297" class="panel-body">
			<textarea name="psc_ta_297" id="psc_ta_297" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Confirmación y Cierre</h1>
<div class="form-group">
	<div id="panel_psc_ta_298" class="panel panel-primary">
		<div id="panel_head_psc_ta_298" class="panel-heading">
			<h4>¿Se notifica al service Desk cuando el incidente queda pendiente de una acción de por parte de él?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_298" class="panel-body">
			<textarea name="psc_ta_298" id="psc_ta_298" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_299" class="panel panel-primary">
		<div id="panel_head_psc_ta_299" class="panel-heading">
			<h4>¿Los reportes de gestión son divulgados al Cliente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_299" class="panel-body">
			<textarea name="psc_ta_299" id="psc_ta_299" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_300" class="panel panel-primary">
		<div id="panel_head_psc_ta_300" class="panel-heading">
			<h4>¿El Incidente Manager detecta y escala fallas del proceso?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_300" class="panel-body">
			<textarea name="psc_ta_300" id="psc_ta_300" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_301" class="panel panel-primary">
		<div id="panel_head_psc_ta_301" class="panel-heading">
			<h4>¿Se notifica al usuario el cierre del incidente ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_301" class="panel-body">
			<textarea name="psc_ta_301" id="psc_ta_301" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_302" class="panel panel-primary">
		<div id="panel_head_psc_ta_302" class="panel-heading">
			<h4>¿Los cambios en los alcances de los servicios son notificados a los usuario finales?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_302" class="panel-body">
			<textarea name="psc_ta_302" id="psc_ta_302" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_303" class="panel panel-primary">
		<div id="panel_head_psc_ta_303" class="panel-heading">
			<h4>¿Los analistas de primer nivel realizan el seguimiento a todos los incidentes desde el registro hasta el cierre?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_303" class="panel-body">
			<textarea name="psc_ta_303" id="psc_ta_303" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_304" class="panel panel-primary">
		<div id="panel_head_psc_ta_304" class="panel-heading">
			<h4>¿El cierre de todos los incidentes es realizado con autorización del Incident Manager?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_304" class="panel-body">
			<textarea name="psc_ta_304" id="psc_ta_304" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Organización</h1>
<div class="form-group">
	<div id="panel_psc_ta_305" class="panel panel-primary">
		<div id="panel_head_psc_ta_305" class="panel-heading">
			<h4>¿Existe un Dueño de Proceso de Incident Management?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_305" class="panel-body">
			<textarea name="psc_ta_305" id="psc_ta_305" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_306" class="panel panel-primary">
		<div id="panel_head_psc_ta_306" class="panel-heading">
			<h4>¿Esta identificado el rol Administrador de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_306" class="panel-body">
			<textarea name="psc_ta_306" id="psc_ta_306" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_307" class="panel panel-primary">
		<div id="panel_head_psc_ta_307" class="panel-heading">
			<h4>¿Están identificados los grupos y especialistas solucionadores para todos los servicios soportados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_307" class="panel-body">
			<textarea name="psc_ta_307" id="psc_ta_307" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_308" class="panel panel-primary">
		<div id="panel_head_psc_ta_308" class="panel-heading">
			<h4>¿Está documentada la Matriz de Escalamiento funcional (por Impacto, con Tiempos escalamiento entre niveles) para el proceso de IM?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_308" class="panel-body">
			<textarea name="psc_ta_308" id="psc_ta_308" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_309" class="panel panel-primary">
		<div id="panel_head_psc_ta_309" class="panel-heading">
			<h4>¿Está documentada la Matriz de Escalamiento Jerárquico (por Impacto, con Tiempo de escalamiento entre niveles)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_309" class="panel-body">
			<textarea name="psc_ta_309" id="psc_ta_309" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_310" class="panel panel-primary">
		<div id="panel_head_psc_ta_310" class="panel-heading">
			<h4>¿Está documentada la Matriz de Escalamiento Jerárquico (por Impacto, con Tiempo de escalamiento entre niveles)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_310" class="panel-body">
			<textarea name="psc_ta_310" id="psc_ta_310" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_311" class="panel panel-primary">
		<div id="panel_head_psc_ta_311" class="panel-heading">
			<h4>¿Están identificados los Usuarios Autorizados por Servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_311" class="panel-body">
			<textarea name="psc_ta_311" id="psc_ta_311" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_312" class="panel panel-primary">
		<div id="panel_head_psc_ta_312" class="panel-heading">
			<h4>¿Están identificados los usuarios VIPs dentro de la organización del cliente y documentados en la herramienta de gestión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_312" class="panel-body">
			<textarea name="psc_ta_312" id="psc_ta_312" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_313" class="panel panel-primary">
		<div id="panel_head_psc_ta_313" class="panel-heading">
			<h4>¿Las responsabilidades de cada rol están definidas y son conocidas por cada persona involucrada?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_313" class="panel-body">
			<textarea name="psc_ta_313" id="psc_ta_313" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_314" class="panel panel-primary">
		<div id="panel_head_psc_ta_314" class="panel-heading">
			<h4>¿El Administrador de Incidentes está entrenado en el proceso de Administración de Incidentes y los procesos relacionados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_314" class="panel-body">
			<textarea name="psc_ta_314" id="psc_ta_314" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_315" class="panel panel-primary">
		<div id="panel_head_psc_ta_315" class="panel-heading">
			<h4>¿Los analistas y especialistas están entrenados en el proceso de administración de incidentes y los procesos relacionados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_315" class="panel-body">
			<textarea name="psc_ta_315" id="psc_ta_315" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_316" class="panel panel-primary">
		<div id="panel_head_psc_ta_316" class="panel-heading">
			<h4>¿Existen métricas de productividad individual para los roles Administrador de Incidentes, Especialistas y Analistas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_316" class="panel-body">
			<textarea name="psc_ta_316" id="psc_ta_316" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_317" class="panel panel-primary">
		<div id="panel_head_psc_ta_317" class="panel-heading">
			<h4>¿El porcentaje de asignación a la administración de incidentes es evaluado para cada rol?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_317" class="panel-body">
			<textarea name="psc_ta_317" id="psc_ta_317" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_318" class="panel panel-primary">
		<div id="panel_head_psc_ta_318" class="panel-heading">
			<h4>¿Existe un plan de carrera para cada rol ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_318" class="panel-body">
			<textarea name="psc_ta_318" id="psc_ta_318" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_319" class="panel panel-primary">
		<div id="panel_head_psc_ta_319" class="panel-heading">
			<h4>¿El personal de administración de incidentes está motivado?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_319" class="panel-body">
			<textarea name="psc_ta_319" id="psc_ta_319" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_320" class="panel panel-primary">
		<div id="panel_head_psc_ta_320" class="panel-heading">
			<h4>¿Se realizan reuniones quincenales con el grupo de IM y los especialistas para dar retroalimentación de la operación de administración de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_320" class="panel-body">
			<textarea name="psc_ta_320" id="psc_ta_320" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Métricas y Reportes</h1>
<div class="form-group">
	<div id="panel_psc_ta_321" class="panel panel-primary">
		<div id="panel_head_psc_ta_321" class="panel-heading">
			<h4>¿Existen métricas de productividad individual para el rol de Administración de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_321" class="panel-body">
			<textarea name="psc_ta_321" id="psc_ta_321" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_322" class="panel panel-primary">
		<div id="panel_head_psc_ta_322" class="panel-heading">
			<h4>¿Se tienen reuniones periódicas para revisar las métricas que existen actualmente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_322" class="panel-body">
			<textarea name="psc_ta_322" id="psc_ta_322" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_323" class="panel panel-primary">
		<div id="panel_head_psc_ta_323" class="panel-heading">
			<h4>¿Se analiza la carga laboral para los roles del proceso de Administración de Incidentes regularmente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_323" class="panel-body">
			<textarea name="psc_ta_323" id="psc_ta_323" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_324" class="panel panel-primary">
		<div id="panel_head_psc_ta_324" class="panel-heading">
			<h4>¿Se tienen estadísticas por número de incidentes identificados mensualmente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_324" class="panel-body">
			<textarea name="psc_ta_324" id="psc_ta_324" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_325" class="panel panel-primary">
		<div id="panel_head_psc_ta_325" class="panel-heading">
			<h4>¿Se tienen estadísticas por número total de incidentes abiertos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_325" class="panel-body">
			<textarea name="psc_ta_325" id="psc_ta_325" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_326" class="panel panel-primary">
		<div id="panel_head_psc_ta_326" class="panel-heading">
			<h4>¿Se tienen estadísticas por número de incidentes cerrados mensualmente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_326" class="panel-body">
			<textarea name="psc_ta_326" id="psc_ta_326" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_327" class="panel panel-primary">
		<div id="panel_head_psc_ta_327" class="panel-heading">
			<h4>¿Se tienen estadísticas por número de incidentes escalados con su owner?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_327" class="panel-body">
			<textarea name="psc_ta_327" id="psc_ta_327" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_328" class="panel panel-primary">
		<div id="panel_head_psc_ta_328" class="panel-heading">
			<h4>¿Se tienen estadísticas por número de Requerimientos de Cambios creados por el Administrador de Incidentes para ser evaluados por el Administrador de Cambios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_328" class="panel-body">
			<textarea name="psc_ta_328" id="psc_ta_328" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_329" class="panel panel-primary">
		<div id="panel_head_psc_ta_329" class="panel-heading">
			<h4>¿Se tienen estadísticas por porcentaje de incidentes que fueron evitados por cumplimiento de labores proactivas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_329" class="panel-body">
			<textarea name="psc_ta_329" id="psc_ta_329" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_330" class="panel panel-primary">
		<div id="panel_head_psc_ta_330" class="panel-heading">
			<h4>¿Se trazan metas y objetivos para el proceso de Administración de Incidentes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_330" class="panel-body">
			<textarea name="psc_ta_330" id="psc_ta_330" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
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
	<script type="text/javascript" src="javascript/operacion_cualitativa_actividades.js"></script>
</body>
</html>

