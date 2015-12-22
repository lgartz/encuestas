<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ITIL - Mejora</title>
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
				<span class="navbar-brand">Mejora Continua de los Servicios TI Cualitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="mejora_cualitativa_process.php" method="GET">
			<br><h1>Objetivos</h1>
<div class="form-group">
	<div id="panel_psc_ta_481" class="panel panel-primary">
		<div id="panel_head_psc_ta_481" class="panel-heading">
			<h4>¿Constantemente se aprende las lecciones aprendidas en todos los procesos, con el fin de alinear los servicios de TI con los cambios que el negocio necesite ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_481" class="panel-body">
			<textarea name="psc_ta_481" id="psc_ta_481" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_482" class="panel panel-primary">
		<div id="panel_head_psc_ta_482" class="panel-heading">
			<h4>¿Se revisa, analiza y se ejecutan recomendaciones sobre las oportunidades de mejora en cada fase del ciclo de vida?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_482" class="panel-body">
			<textarea name="psc_ta_482" id="psc_ta_482" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_483" class="panel panel-primary">
		<div id="panel_head_psc_ta_483" class="panel-heading">
			<h4>¿Se evalúan los logros de los niveles de servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_483" class="panel-body">
			<textarea name="psc_ta_483" id="psc_ta_483" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_484" class="panel panel-primary">
		<div id="panel_head_psc_ta_484" class="panel-heading">
			<h4>¿Existen planes de mejoramiento para la calidad de los servicios de TI, la eficiencia, y el costo de la entrega de los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_484" class="panel-body">
			<textarea name="psc_ta_484" id="psc_ta_484" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_485" class="panel panel-primary">
		<div id="panel_head_psc_ta_485" class="panel-heading">
			<h4>¿Las mediciones realizadas a los procesos y servicios permite realizar estrategias de mejora para los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_485" class="panel-body">
			<textarea name="psc_ta_485" id="psc_ta_485" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Enfoque de la mejora continua</h1>
<div class="form-group">
	<div id="panel_psc_ta_486" class="panel panel-primary">
		<div id="panel_head_psc_ta_486" class="panel-heading">
			<h4>¿Para realizar un control de la calidad continua, permanentemente se planea, se hace, se verifica y se actúa (Ciclo Deaming PHVA) ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_486" class="panel-body">
			<textarea name="psc_ta_486" id="psc_ta_486" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_487" class="panel panel-primary">
		<div id="panel_head_psc_ta_487" class="panel-heading">
			<h4>¿El personal interno y externo tienen clara la visión de la institución con el fin de enfocar sus estrategias y actividades al cumplimiento de los logros ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_487" class="panel-body">
			<textarea name="psc_ta_487" id="psc_ta_487" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_488" class="panel panel-primary">
		<div id="panel_head_psc_ta_488" class="panel-heading">
			<h4>¿El equipo de trabajo se reúne con frecuencia para evaluar el cumplimiento de objetivos (en donde estamos ahora?) , definir iniciativas y planes de acción para mejorar la prestación del servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_488" class="panel-body">
			<textarea name="psc_ta_488" id="psc_ta_488" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_489" class="panel panel-primary">
		<div id="panel_head_psc_ta_489" class="panel-heading">
			<h4>¿Se tienen definidos los objetivos donde se defina con claridad donde quieren estar?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_489" class="panel-body">
			<textarea name="psc_ta_489" id="psc_ta_489" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_490" class="panel panel-primary">
		<div id="panel_head_psc_ta_490" class="panel-heading">
			<h4>¿Existen planes estratégicos donde se definan los planes para apoyar el logro de los objetivos del área y del negocio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_490" class="panel-body">
			<textarea name="psc_ta_490" id="psc_ta_490" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Valor del negocio</h1>
<div class="form-group">
	<div id="panel_psc_ta_491" class="panel panel-primary">
		<div id="panel_head_psc_ta_491" class="panel-heading">
			<h4>¿Los objetivos son medidos por medio de métricas bien definida?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_491" class="panel-body">
			<textarea name="psc_ta_491" id="psc_ta_491" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_492" class="panel panel-primary">
		<div id="panel_head_psc_ta_492" class="panel-heading">
			<h4>¿Las acciones correctivas y cambios se ejecutan basadas en los resultados de las métricas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_492" class="panel-body">
			<textarea name="psc_ta_492" id="psc_ta_492" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_493" class="panel panel-primary">
		<div id="panel_head_psc_ta_493" class="panel-heading">
			<h4>¿Existen evidencias que faciliten evaluar los resultados y justificar las acciones de mejora?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_493" class="panel-body">
			<textarea name="psc_ta_493" id="psc_ta_493" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Línea Base</h1>
<div class="form-group">
	<div id="panel_psc_ta_494" class="panel panel-primary">
		<div id="panel_head_psc_ta_494" class="panel-heading">
			<h4>¿Existen evidencias y registros históricos a manera de marcas de referencia o puntos de partida, con los cuales se puedan observar los cambios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_494" class="panel-body">
			<textarea name="psc_ta_494" id="psc_ta_494" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_495" class="panel panel-primary">
		<div id="panel_head_psc_ta_495" class="panel-heading">
			<h4>¿Los datos históricos contienen información estratégica?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_495" class="panel-body">
			<textarea name="psc_ta_495" id="psc_ta_495" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_496" class="panel panel-primary">
		<div id="panel_head_psc_ta_496" class="panel-heading">
			<h4>¿Los datos históricos contienen información táctica?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_496" class="panel-body">
			<textarea name="psc_ta_496" id="psc_ta_496" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_497" class="panel panel-primary">
		<div id="panel_head_psc_ta_497" class="panel-heading">
			<h4>¿Los datos históricos contienen información operacional?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_497" class="panel-body">
			<textarea name="psc_ta_497" id="psc_ta_497" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<br><h1>Métricas y medidas</h1>
<div class="form-group">
	<div id="panel_psc_ta_498" class="panel panel-primary">
		<div id="panel_head_psc_ta_498" class="panel-heading">
			<h4>¿Se cuentan con métricas de tecnología existente en el negocio (índice de sistematización, nivel de automatización de procesos, inversión en tecnología, etc)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_498" class="panel-body">
			<textarea name="psc_ta_498" id="psc_ta_498" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_499" class="panel panel-primary">
		<div id="panel_head_psc_ta_499" class="panel-heading">
			<h4>¿Están definidas las métricas de servicio ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_499" class="panel-body">
			<textarea name="psc_ta_499" id="psc_ta_499" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_500" class="panel panel-primary">
		<div id="panel_head_psc_ta_500" class="panel-heading">
			<h4>¿Existen métricas de procesos y métricas de actividades para los procesos de la gestión de servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_500" class="panel-body">
			<textarea name="psc_ta_500" id="psc_ta_500" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_501" class="panel panel-primary">
		<div id="panel_head_psc_ta_501" class="panel-heading">
			<h4>Para reunir y procesar los datos se tiene definido: ¿Quien lo hace? ¿Cómo? ¿ Cuando? ¿Integridad de los datos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_501" class="panel-body">
			<textarea name="psc_ta_501" id="psc_ta_501" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_502" class="panel panel-primary">
		<div id="panel_head_psc_ta_502" class="panel-heading">
			<h4>¿En el procesamiento de datos está definido: la frecuencia, los formatos, el sistema y la precisión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_502" class="panel-body">
			<textarea name="psc_ta_502" id="psc_ta_502" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_503" class="panel panel-primary">
		<div id="panel_head_psc_ta_503" class="panel-heading">
			<h4>¿En el análisis de los datos se tienen definidos las relaciones, tendencias, objetivos alcanzados y acciones correctivas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_503" class="panel-body">
			<textarea name="psc_ta_503" id="psc_ta_503" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_504" class="panel panel-primary">
		<div id="panel_head_psc_ta_504" class="panel-heading">
			<h4>¿Se presentan planes de acción de mejoramiento basados en las métricas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_504" class="panel-body">
			<textarea name="psc_ta_504" id="psc_ta_504" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
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
	<script type="text/javascript" src="javascript/mejora_cualitativa.js"></script>
</body>
</html>

