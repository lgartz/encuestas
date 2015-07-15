<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Transición</title>
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
				<span class="navbar-brand">Transición de los Servicios TI - Cualitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="transicion_cualitativa_process.php" method="GET">
			<br><h1>Activos del Servicio y Gestión de la Configuración</h1>
<div class="form-group">
	<div id="panel_psc_ta_107" class="panel panel-primary">
		<div id="panel_head_psc_ta_107" class="panel-heading">
			<h4>¿Existe una base de datos de configuración (CMDB) debidamente actualizada?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_107" class="panel-body">
			<textarea name="psc_ta_107" id="psc_ta_107" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_108" class="panel panel-primary">
		<div id="panel_head_psc_ta_108" class="panel-heading">
			<h4>¿Se encuentran debidamente registrados todos los elementos de configuración en la CMDB (hardware, software, documentación, personal de soporte, módulo de software, etc.)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_108" class="panel-body">
			<textarea name="psc_ta_108" id="psc_ta_108" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_109" class="panel panel-primary">
		<div id="panel_head_psc_ta_109" class="panel-heading">
			<h4>¿El sistema de gestión de la configuración permite fácilmente evaluar el impacto de los cambios propuestos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_109" class="panel-body">
			<textarea name="psc_ta_109" id="psc_ta_109" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_110" class="panel panel-primary">
		<div id="panel_head_psc_ta_110" class="panel-heading">
			<h4>¿El sistema de gestión de la configuración es actualizado durante el ciclo de los cambios ejecutados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_110" class="panel-body">
			<textarea name="psc_ta_110" id="psc_ta_110" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_111" class="panel panel-primary">
		<div id="panel_head_psc_ta_111" class="panel-heading">
			<h4>¿El área de TI cuenta con una Biblioteca definitiva de medios- DML donde se almacena las licencias, versiones definitivas y aprobadas de todo el software de los elementos de configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_111" class="panel-body">
			<textarea name="psc_ta_111" id="psc_ta_111" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_112" class="panel panel-primary">
		<div id="panel_head_psc_ta_112" class="panel-heading">
			<h4>¿La DML se encuentra en un lugar seguro y su acceso es controlado de forma lógica y física?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_112" class="panel-body">
			<textarea name="psc_ta_112" id="psc_ta_112" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Gestión de implementación y versión</h1>
<div class="form-group">
	<div id="panel_psc_ta_113" class="panel panel-primary">
		<div id="panel_head_psc_ta_113" class="panel-heading">
			<h4>¿Hay planes claros y compresibles de la versión e implantación para minimizar el impacto sobre la operación de los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_113" class="panel-body">
			<textarea name="psc_ta_113" id="psc_ta_113" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_114" class="panel panel-primary">
		<div id="panel_head_psc_ta_114" class="panel-heading">
			<h4>¿Se tiene definido el rol del Gestor de implementación y Versión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_114" class="panel-body">
			<textarea name="psc_ta_114" id="psc_ta_114" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_115" class="panel panel-primary">
		<div id="panel_head_psc_ta_115" class="panel-heading">
			<h4>¿Existen herramientas o procesos definidos para la distribución y actualización de software?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_115" class="panel-body">
			<textarea name="psc_ta_115" id="psc_ta_115" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Gestión de cambio</h1>
<div class="form-group">
	<div id="panel_psc_ta_116" class="panel panel-primary">
		<div id="panel_head_psc_ta_116" class="panel-heading">
			<h4>¿Está definido el proceso de gestión del cambio y el rol del gestor del cambio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_116" class="panel-body">
			<textarea name="psc_ta_116" id="psc_ta_116" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_117" class="panel panel-primary">
		<div id="panel_head_psc_ta_117" class="panel-heading">
			<h4>¿Existe comité del cambio que evalúa el impacto del cambio y hace toda la gestión de control del mismo?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_117" class="panel-body">
			<textarea name="psc_ta_117" id="psc_ta_117" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_118" class="panel panel-primary">
		<div id="panel_head_psc_ta_118" class="panel-heading">
			<h4>¿Los cambios están categorizados (Estándar, normal, emergencia)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_118" class="panel-body">
			<textarea name="psc_ta_118" id="psc_ta_118" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_119" class="panel panel-primary">
		<div id="panel_head_psc_ta_119" class="panel-heading">
			<h4>¿Los cambios son registrados y revisados por el comité en un formato estándar?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_119" class="panel-body">
			<textarea name="psc_ta_119" id="psc_ta_119" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_120" class="panel panel-primary">
		<div id="panel_head_psc_ta_120" class="panel-heading">
			<h4>¿El comité evalúa el impacto de los cambios y la relación con otros?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_120" class="panel-body">
			<textarea name="psc_ta_120" id="psc_ta_120" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_121" class="panel panel-primary">
		<div id="panel_head_psc_ta_121" class="panel-heading">
			<h4>¿El comité del cambio exige autorización de las ventanas de mantenimiento de las áreas del negocio para la ejecución de los cambios, con el fin de coordinar las actividades, de tal forma que afecten lo menos posible la operación?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_121" class="panel-body">
			<textarea name="psc_ta_121" id="psc_ta_121" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_122" class="panel panel-primary">
		<div id="panel_head_psc_ta_122" class="panel-heading">
			<h4>¿El proceso de gestión del cambio esta diseñado y planeado en relación con la implementación y versión, con los procesos de activos de servicio y gestión de la configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_122" class="panel-body">
			<textarea name="psc_ta_122" id="psc_ta_122" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_123" class="panel panel-primary">
		<div id="panel_head_psc_ta_123" class="panel-heading">
			<h4>¿Al comité del cambio asiste los expertos de cada área para evaluar el impacto y riesgos de lo cambios a ejecutar?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_123" class="panel-body">
			<textarea name="psc_ta_123" id="psc_ta_123" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_124" class="panel panel-primary">
		<div id="panel_head_psc_ta_124" class="panel-heading">
			<h4>¿Se exige que los cambios tengan planes de retorno (rollback)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_124" class="panel-body">
			<textarea name="psc_ta_124" id="psc_ta_124" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_125" class="panel panel-primary">
		<div id="panel_head_psc_ta_125" class="panel-heading">
			<h4>¿El gestor o comité de cambio filtra los cambios que han sido rechazados, incompletos o en revisión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_125" class="panel-body">
			<textarea name="psc_ta_125" id="psc_ta_125" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_126" class="panel panel-primary">
		<div id="panel_head_psc_ta_126" class="panel-heading">
			<h4>¿Para cualquier cambio de servicios o infraestructura, se obtiene una autorización formal de la autoridad de cambio, que puede ser un rol, persona o grupo de personas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_126" class="panel-body">
			<textarea name="psc_ta_126" id="psc_ta_126" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_127" class="panel panel-primary">
		<div id="panel_head_psc_ta_127" class="panel-heading">
			<h4>¿Se realiza una revisión post implementación de los cambios realizados para validar que el cambio haya logrado sus objetivos y no existan efectos secundarios inesperados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_127" class="panel-body">
			<textarea name="psc_ta_127" id="psc_ta_127" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_128" class="panel panel-primary">
		<div id="panel_head_psc_ta_128" class="panel-heading">
			<h4>¿Se tienen definidos indicadores clave de rendimiento (KPI's) para la gestión del cambio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_128" class="panel-body">
			<textarea name="psc_ta_128" id="psc_ta_128" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_129" class="panel panel-primary">
		<div id="panel_head_psc_ta_129" class="panel-heading">
			<h4>¿Existe cultura de Gestión del Cambio a lo largo de la organización, donde no este permitidos los cambios no autorizados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_129" class="panel-body">
			<textarea name="psc_ta_129" id="psc_ta_129" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Pruebas</h1>
<div class="form-group">
	<div id="panel_psc_ta_130" class="panel panel-primary">
		<div id="panel_head_psc_ta_130" class="panel-heading">
			<h4>¿Se cuenta con procesos de pruebas para la implementación de los componentes de servicios próximos a entrar en ambiente de producción?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_130" class="panel-body">
			<textarea name="psc_ta_130" id="psc_ta_130" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_131" class="panel panel-primary">
		<div id="panel_head_psc_ta_131" class="panel-heading">
			<h4>¿Si se cumple con los criterios de aceptación de servicio, se realiza una validación del rendimiento del servicio para el cumplimiento de los acuerdos de niveles de servicio, una vez puesto en producción?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_131" class="panel-body">
			<textarea name="psc_ta_131" id="psc_ta_131" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_132" class="panel panel-primary">
		<div id="panel_head_psc_ta_132" class="panel-heading">
			<h4>¿Para el despliegue de un servicio nuevo se evalúa previamente la preparación y disponibilidad de los recursos (humanos, tecnológicos, stakeholders, etc)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_132" class="panel-body">
			<textarea name="psc_ta_132" id="psc_ta_132" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_133" class="panel panel-primary">
		<div id="panel_head_psc_ta_133" class="panel-heading">
			<h4>¿Los componentes son probados aisladamente para validar que son entregados según las especificaciones para generar los resultados esperados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_133" class="panel-body">
			<textarea name="psc_ta_133" id="psc_ta_133" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_134" class="panel panel-primary">
		<div id="panel_head_psc_ta_134" class="panel-heading">
			<h4>¿Se tiene registro de la evidencia de pruebas de los componentes y servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_134" class="panel-body">
			<textarea name="psc_ta_134" id="psc_ta_134" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
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
	<script type="text/javascript" src="javascript/transicion_cualitativa.js"></script>
</body>
</html>

