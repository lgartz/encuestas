<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Diseño</title>
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
				<span class="navbar-brand">Diseño de los Servicios TI - Cuantitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="disenio_cualitativa_process.php" method="GET">
			<br><h1>Gestión de los  proveedores</h1>
<div class="form-group">
	<div id="panel_psc_ta_63" class="panel panel-primary">
		<div id="panel_head_psc_ta_63" class="panel-heading">
			<h4>¿Existe una base de datos de proveedores y contratos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_63" class="panel-body">
			<textarea name="psc_ta_63" id="psc_ta_63" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_64" class="panel panel-primary">
		<div id="panel_head_psc_ta_64" class="panel-heading">
			<h4>¿Está definido el procesos de selección y contratación de servicios de TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_64" class="panel-body">
			<textarea name="psc_ta_64" id="psc_ta_64" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_65" class="panel panel-primary">
		<div id="panel_head_psc_ta_65" class="panel-heading">
			<h4>¿Se realiza un procesos de seguimiento y medición del comportamiento de los proveedores basados en métricas de desempeño?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_65" class="panel-body">
			<textarea name="psc_ta_65" id="psc_ta_65" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_66" class="panel panel-primary">
		<div id="panel_head_psc_ta_66" class="panel-heading">
			<h4>¿Los proveedores se categorizan por valor de importancia contra riesgo e impacto (estratégicos, tácticos, mecánica, operacionales)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_66" class="panel-body">
			<textarea name="psc_ta_66" id="psc_ta_66" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_67" class="panel panel-primary">
		<div id="panel_head_psc_ta_67" class="panel-heading">
			<h4>¿El proceso de compras está alineado con la estrategia, procesos, términos estándar y condiciones de los abastecimientos corporativos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_67" class="panel-body">
			<textarea name="psc_ta_67" id="psc_ta_67" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Gestión de la capacidad</h1>
<div class="form-group">
	<div id="panel_psc_ta_68" class="panel panel-primary">
		<div id="panel_head_psc_ta_68" class="panel-heading">
			<h4>¿Existen métricas definidas para medir la eficiencia de los procesos de servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_68" class="panel-body">
			<textarea name="psc_ta_68" id="psc_ta_68" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_69" class="panel panel-primary">
		<div id="panel_head_psc_ta_69" class="panel-heading">
			<h4>¿Se implementan medidas proactivas para mejorar el rendimiento de los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_69" class="panel-body">
			<textarea name="psc_ta_69" id="psc_ta_69" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_70" class="panel panel-primary">
		<div id="panel_head_psc_ta_70" class="panel-heading">
			<h4>¿Se tiene definido un plan de capacidad que refleje las necesidades actuales y futuras 1?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_70" class="panel-body">
			<textarea name="psc_ta_70" id="psc_ta_70" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_71" class="panel panel-primary">
		<div id="panel_head_psc_ta_71" class="panel-heading">
			<h4>¿La planeación tecnológica se realiza basados en la capacidad actual y futura de los servicios de TI ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_71" class="panel-body">
			<textarea name="psc_ta_71" id="psc_ta_71" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_72" class="panel panel-primary">
		<div id="panel_head_psc_ta_72" class="panel-heading">
			<h4>¿Se lleva un registro y se realiza análisis del monitoreo del rendimiento de los servicios, para asegurar una capacidad adecuada de TI para alcanzar los niveles de servicio satisfactorio de los clientes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_72" class="panel-body">
			<textarea name="psc_ta_72" id="psc_ta_72" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_73" class="panel panel-primary">
		<div id="panel_head_psc_ta_73" class="panel-heading">
			<h4>¿Está definido y documentado la máxima capacidad actual de cada componente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_73" class="panel-body">
			<textarea name="psc_ta_73" id="psc_ta_73" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Gestión de la continuidad de los servicios de TI</h1>
<div class="form-group">
	<div id="panel_psc_ta_74" class="panel panel-primary">
		<div id="panel_head_psc_ta_74" class="panel-heading">
			<h4>¿Los planes de continuidad y recuperación de servicios de TI están documentados, actualizados y probados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_74" class="panel-body">
			<textarea name="psc_ta_74" id="psc_ta_74" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_75" class="panel panel-primary">
		<div id="panel_head_psc_ta_75" class="panel-heading">
			<h4>¿Se realiza con frecuencia un análisis de riesgos e impacto del negocio para asegurar que los planes de continuidad permitan mantener la operación del mismo?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_75" class="panel-body">
			<textarea name="psc_ta_75" id="psc_ta_75" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_76" class="panel panel-primary">
		<div id="panel_head_psc_ta_76" class="panel-heading">
			<h4>¿Se asesora a las demás áreas del negocio sobre gestión del riesgo y asuntos relacionados con la continuidad y recuperación?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_76" class="panel-body">
			<textarea name="psc_ta_76" id="psc_ta_76" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_77" class="panel panel-primary">
		<div id="panel_head_psc_ta_77" class="panel-heading">
			<h4>¿Existe presupuesto asignado a los planes de continuidad ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_77" class="panel-body">
			<textarea name="psc_ta_77" id="psc_ta_77" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_78" class="panel panel-primary">
		<div id="panel_head_psc_ta_78" class="panel-heading">
			<h4>¿Existe un plan de comunicación, educación, concientización y entrenamientos del plan de continuidad hacia las áreas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_78" class="panel-body">
			<textarea name="psc_ta_78" id="psc_ta_78" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
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
	<script type="text/javascript" src="javascript/disenio_cualitativa.js"></script>
</body>
</html>

