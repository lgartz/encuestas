<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
				<span class="navbar-brand">Transición de los Servicios TI - Cuantitativa</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="transicion_cuantitativa_process.php" method="GET">
			<br><h1>Activos del Servicio y Gestión de la Configuración</h1>
<div class="form-group">
	<div id="panel_eru_rb_79" class="panel panel-primary">
		<div id="panel_head_eru_rb_79" class="panel-heading">
			<h4>¿Existe una base de datos de configuración (CMDB) debidamente actualizada?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_79" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_79_0" name="eru_rb_79" type="radio" value="eru_rb_79_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_79_1" name="eru_rb_79" type="radio" value="eru_rb_79_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_79_2" name="eru_rb_79" type="radio" value="eru_rb_79_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_79_3" name="eru_rb_79" type="radio" value="eru_rb_79_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_79_4" name="eru_rb_79" type="radio" value="eru_rb_79_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_79_5" name="eru_rb_79" type="radio" value="eru_rb_79_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_80" class="panel panel-primary">
		<div id="panel_head_eru_rb_80" class="panel-heading">
			<h4>¿Se encuentran debidamente registrados todos los elementos de configuración en la CMDB (hardware, software, documentación, personal de soporte, módulo de software, etc.)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_80" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_80_0" name="eru_rb_80" type="radio" value="eru_rb_80_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_80_1" name="eru_rb_80" type="radio" value="eru_rb_80_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_80_2" name="eru_rb_80" type="radio" value="eru_rb_80_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_80_3" name="eru_rb_80" type="radio" value="eru_rb_80_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_80_4" name="eru_rb_80" type="radio" value="eru_rb_80_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_80_5" name="eru_rb_80" type="radio" value="eru_rb_80_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_81" class="panel panel-primary">
		<div id="panel_head_eru_rb_81" class="panel-heading">
			<h4>¿El sistema de gestión de la configuración permite fácilmente evaluar el impacto de los cambios propuestos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_81" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_81_0" name="eru_rb_81" type="radio" value="eru_rb_81_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_81_1" name="eru_rb_81" type="radio" value="eru_rb_81_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_81_2" name="eru_rb_81" type="radio" value="eru_rb_81_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_81_3" name="eru_rb_81" type="radio" value="eru_rb_81_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_81_4" name="eru_rb_81" type="radio" value="eru_rb_81_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_81_5" name="eru_rb_81" type="radio" value="eru_rb_81_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_82" class="panel panel-primary">
		<div id="panel_head_eru_rb_82" class="panel-heading">
			<h4>¿El sistema de gestión de la configuración es actualizado durante el ciclo de los cambios ejecutados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_82" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_82_0" name="eru_rb_82" type="radio" value="eru_rb_82_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_82_1" name="eru_rb_82" type="radio" value="eru_rb_82_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_82_2" name="eru_rb_82" type="radio" value="eru_rb_82_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_82_3" name="eru_rb_82" type="radio" value="eru_rb_82_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_82_4" name="eru_rb_82" type="radio" value="eru_rb_82_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_82_5" name="eru_rb_82" type="radio" value="eru_rb_82_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_83" class="panel panel-primary">
		<div id="panel_head_eru_rb_83" class="panel-heading">
			<h4>¿El área de TI cuenta con una Biblioteca definitiva de medios- DML donde se almacena las licencias, versiones definitivas y aprobadas de todo el software de los elementos de configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_83" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_83_0" name="eru_rb_83" type="radio" value="eru_rb_83_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_83_1" name="eru_rb_83" type="radio" value="eru_rb_83_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_83_2" name="eru_rb_83" type="radio" value="eru_rb_83_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_83_3" name="eru_rb_83" type="radio" value="eru_rb_83_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_83_4" name="eru_rb_83" type="radio" value="eru_rb_83_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_83_5" name="eru_rb_83" type="radio" value="eru_rb_83_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_84" class="panel panel-primary">
		<div id="panel_head_eru_rb_84" class="panel-heading">
			<h4>¿La DML se encuentra en un lugar seguro y su acceso es controlado de forma lógica y física?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_84" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_84_0" name="eru_rb_84" type="radio" value="eru_rb_84_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_84_1" name="eru_rb_84" type="radio" value="eru_rb_84_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_84_2" name="eru_rb_84" type="radio" value="eru_rb_84_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_84_3" name="eru_rb_84" type="radio" value="eru_rb_84_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_84_4" name="eru_rb_84" type="radio" value="eru_rb_84_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_84_5" name="eru_rb_84" type="radio" value="eru_rb_84_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Gestión de implementación y versión</h1>
<div class="form-group">
	<div id="panel_eru_rb_85" class="panel panel-primary">
		<div id="panel_head_eru_rb_85" class="panel-heading">
			<h4>¿Hay planes claros y compresibles de la versión e implantación para minimizar el impacto sobre la operación de los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_85" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_85_0" name="eru_rb_85" type="radio" value="eru_rb_85_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_85_1" name="eru_rb_85" type="radio" value="eru_rb_85_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_85_2" name="eru_rb_85" type="radio" value="eru_rb_85_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_85_3" name="eru_rb_85" type="radio" value="eru_rb_85_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_85_4" name="eru_rb_85" type="radio" value="eru_rb_85_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_85_5" name="eru_rb_85" type="radio" value="eru_rb_85_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_86" class="panel panel-primary">
		<div id="panel_head_eru_rb_86" class="panel-heading">
			<h4>¿Se tiene definido el rol del Gestor de implementación y Versión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_86" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_86_0" name="eru_rb_86" type="radio" value="eru_rb_86_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_86_1" name="eru_rb_86" type="radio" value="eru_rb_86_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_86_2" name="eru_rb_86" type="radio" value="eru_rb_86_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_86_3" name="eru_rb_86" type="radio" value="eru_rb_86_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_86_4" name="eru_rb_86" type="radio" value="eru_rb_86_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_86_5" name="eru_rb_86" type="radio" value="eru_rb_86_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_87" class="panel panel-primary">
		<div id="panel_head_eru_rb_87" class="panel-heading">
			<h4>¿Existen herramientas o procesos definidos para la distribución y actualización de software?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_87" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_87_0" name="eru_rb_87" type="radio" value="eru_rb_87_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_87_1" name="eru_rb_87" type="radio" value="eru_rb_87_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_87_2" name="eru_rb_87" type="radio" value="eru_rb_87_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_87_3" name="eru_rb_87" type="radio" value="eru_rb_87_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_87_4" name="eru_rb_87" type="radio" value="eru_rb_87_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_87_5" name="eru_rb_87" type="radio" value="eru_rb_87_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Gestión de cambio</h1>
<div class="form-group">
	<div id="panel_eru_rb_88" class="panel panel-primary">
		<div id="panel_head_eru_rb_88" class="panel-heading">
			<h4>¿Está definido el proceso de gestión del cambio y el rol del gestor del cambio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_88" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_88_0" name="eru_rb_88" type="radio" value="eru_rb_88_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_88_1" name="eru_rb_88" type="radio" value="eru_rb_88_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_88_2" name="eru_rb_88" type="radio" value="eru_rb_88_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_88_3" name="eru_rb_88" type="radio" value="eru_rb_88_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_88_4" name="eru_rb_88" type="radio" value="eru_rb_88_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_88_5" name="eru_rb_88" type="radio" value="eru_rb_88_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_89" class="panel panel-primary">
		<div id="panel_head_eru_rb_89" class="panel-heading">
			<h4>¿Existe comité del cambio que evalúa el impacto del cambio y hace toda la gestión de control del mismo?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_89" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_89_0" name="eru_rb_89" type="radio" value="eru_rb_89_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_89_1" name="eru_rb_89" type="radio" value="eru_rb_89_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_89_2" name="eru_rb_89" type="radio" value="eru_rb_89_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_89_3" name="eru_rb_89" type="radio" value="eru_rb_89_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_89_4" name="eru_rb_89" type="radio" value="eru_rb_89_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_89_5" name="eru_rb_89" type="radio" value="eru_rb_89_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_90" class="panel panel-primary">
		<div id="panel_head_eru_rb_90" class="panel-heading">
			<h4>¿Los cambios están categorizados (Estándar, normal, emergencia)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_90" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_90_0" name="eru_rb_90" type="radio" value="eru_rb_90_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_90_1" name="eru_rb_90" type="radio" value="eru_rb_90_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_90_2" name="eru_rb_90" type="radio" value="eru_rb_90_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_90_3" name="eru_rb_90" type="radio" value="eru_rb_90_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_90_4" name="eru_rb_90" type="radio" value="eru_rb_90_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_90_5" name="eru_rb_90" type="radio" value="eru_rb_90_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_91" class="panel panel-primary">
		<div id="panel_head_eru_rb_91" class="panel-heading">
			<h4>¿Los cambios son registrados y revisados por el comité en un formato estándar?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_91" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_91_0" name="eru_rb_91" type="radio" value="eru_rb_91_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_91_1" name="eru_rb_91" type="radio" value="eru_rb_91_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_91_2" name="eru_rb_91" type="radio" value="eru_rb_91_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_91_3" name="eru_rb_91" type="radio" value="eru_rb_91_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_91_4" name="eru_rb_91" type="radio" value="eru_rb_91_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_91_5" name="eru_rb_91" type="radio" value="eru_rb_91_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_92" class="panel panel-primary">
		<div id="panel_head_eru_rb_92" class="panel-heading">
			<h4>¿El comité evalúa el impacto de los cambios y la relación con otros?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_92" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_92_0" name="eru_rb_92" type="radio" value="eru_rb_92_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_92_1" name="eru_rb_92" type="radio" value="eru_rb_92_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_92_2" name="eru_rb_92" type="radio" value="eru_rb_92_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_92_3" name="eru_rb_92" type="radio" value="eru_rb_92_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_92_4" name="eru_rb_92" type="radio" value="eru_rb_92_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_92_5" name="eru_rb_92" type="radio" value="eru_rb_92_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_93" class="panel panel-primary">
		<div id="panel_head_eru_rb_93" class="panel-heading">
			<h4>¿El comité del cambio exige autorización de las ventanas de mantenimiento de las áreas del negocio para la ejecución de los cambios, con el fin de coordinar las actividades, de tal forma que afecten lo menos posible la operación?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_93" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_93_0" name="eru_rb_93" type="radio" value="eru_rb_93_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_93_1" name="eru_rb_93" type="radio" value="eru_rb_93_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_93_2" name="eru_rb_93" type="radio" value="eru_rb_93_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_93_3" name="eru_rb_93" type="radio" value="eru_rb_93_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_93_4" name="eru_rb_93" type="radio" value="eru_rb_93_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_93_5" name="eru_rb_93" type="radio" value="eru_rb_93_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_94" class="panel panel-primary">
		<div id="panel_head_eru_rb_94" class="panel-heading">
			<h4>¿El proceso de gestión del cambio esta diseñado y planeado en relación con la implementación y versión, con los procesos de activos de servicio y gestión de la configuración?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_94" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_94_0" name="eru_rb_94" type="radio" value="eru_rb_94_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_94_1" name="eru_rb_94" type="radio" value="eru_rb_94_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_94_2" name="eru_rb_94" type="radio" value="eru_rb_94_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_94_3" name="eru_rb_94" type="radio" value="eru_rb_94_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_94_4" name="eru_rb_94" type="radio" value="eru_rb_94_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_94_5" name="eru_rb_94" type="radio" value="eru_rb_94_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_95" class="panel panel-primary">
		<div id="panel_head_eru_rb_95" class="panel-heading">
			<h4>¿Al comité del cambio asiste los expertos de cada área para evaluar el impacto y riesgos de lo cambios a ejecutar?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_95" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_95_0" name="eru_rb_95" type="radio" value="eru_rb_95_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_95_1" name="eru_rb_95" type="radio" value="eru_rb_95_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_95_2" name="eru_rb_95" type="radio" value="eru_rb_95_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_95_3" name="eru_rb_95" type="radio" value="eru_rb_95_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_95_4" name="eru_rb_95" type="radio" value="eru_rb_95_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_95_5" name="eru_rb_95" type="radio" value="eru_rb_95_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_96" class="panel panel-primary">
		<div id="panel_head_eru_rb_96" class="panel-heading">
			<h4>¿Se exige que los cambios tengan planes de retorno (rollback)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_96" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_96_0" name="eru_rb_96" type="radio" value="eru_rb_96_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_96_1" name="eru_rb_96" type="radio" value="eru_rb_96_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_96_2" name="eru_rb_96" type="radio" value="eru_rb_96_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_96_3" name="eru_rb_96" type="radio" value="eru_rb_96_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_96_4" name="eru_rb_96" type="radio" value="eru_rb_96_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_96_5" name="eru_rb_96" type="radio" value="eru_rb_96_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_97" class="panel panel-primary">
		<div id="panel_head_eru_rb_97" class="panel-heading">
			<h4>¿El gestor o comité de cambio filtra los cambios que han sido rechazados, incompletos o en revisión?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_97" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_97_0" name="eru_rb_97" type="radio" value="eru_rb_97_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_97_1" name="eru_rb_97" type="radio" value="eru_rb_97_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_97_2" name="eru_rb_97" type="radio" value="eru_rb_97_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_97_3" name="eru_rb_97" type="radio" value="eru_rb_97_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_97_4" name="eru_rb_97" type="radio" value="eru_rb_97_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_97_5" name="eru_rb_97" type="radio" value="eru_rb_97_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_98" class="panel panel-primary">
		<div id="panel_head_eru_rb_98" class="panel-heading">
			<h4>¿Para cualquier cambio de servicios o infraestructura, se obtiene una autorización formal de la autoridad de cambio, que puede ser un rol, persona o grupo de personas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_98" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_98_0" name="eru_rb_98" type="radio" value="eru_rb_98_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_98_1" name="eru_rb_98" type="radio" value="eru_rb_98_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_98_2" name="eru_rb_98" type="radio" value="eru_rb_98_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_98_3" name="eru_rb_98" type="radio" value="eru_rb_98_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_98_4" name="eru_rb_98" type="radio" value="eru_rb_98_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_98_5" name="eru_rb_98" type="radio" value="eru_rb_98_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_99" class="panel panel-primary">
		<div id="panel_head_eru_rb_99" class="panel-heading">
			<h4>¿Se realiza una revisión post implementación de los cambios realizados para validar que el cambio haya logrado sus objetivos y no existan efectos secundarios inesperados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_99" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_99_0" name="eru_rb_99" type="radio" value="eru_rb_99_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_99_1" name="eru_rb_99" type="radio" value="eru_rb_99_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_99_2" name="eru_rb_99" type="radio" value="eru_rb_99_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_99_3" name="eru_rb_99" type="radio" value="eru_rb_99_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_99_4" name="eru_rb_99" type="radio" value="eru_rb_99_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_99_5" name="eru_rb_99" type="radio" value="eru_rb_99_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_100" class="panel panel-primary">
		<div id="panel_head_eru_rb_100" class="panel-heading">
			<h4>¿Se tienen definidos indicadores clave de rendimiento (KPIs) para la gestión del cambio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_100" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_100_0" name="eru_rb_100" type="radio" value="eru_rb_100_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_100_1" name="eru_rb_100" type="radio" value="eru_rb_100_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_100_2" name="eru_rb_100" type="radio" value="eru_rb_100_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_100_3" name="eru_rb_100" type="radio" value="eru_rb_100_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_100_4" name="eru_rb_100" type="radio" value="eru_rb_100_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_100_5" name="eru_rb_100" type="radio" value="eru_rb_100_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_101" class="panel panel-primary">
		<div id="panel_head_eru_rb_101" class="panel-heading">
			<h4>¿Existe cultura de Gestión del Cambio a lo largo de la organización, donde no este permitidos los cambios no autorizados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_101" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_101_0" name="eru_rb_101" type="radio" value="eru_rb_101_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_101_1" name="eru_rb_101" type="radio" value="eru_rb_101_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_101_2" name="eru_rb_101" type="radio" value="eru_rb_101_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_101_3" name="eru_rb_101" type="radio" value="eru_rb_101_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_101_4" name="eru_rb_101" type="radio" value="eru_rb_101_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_101_5" name="eru_rb_101" type="radio" value="eru_rb_101_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Pruebas</h1>
<div class="form-group">
	<div id="panel_eru_rb_102" class="panel panel-primary">
		<div id="panel_head_eru_rb_102" class="panel-heading">
			<h4>¿Se cuenta con procesos de pruebas para la implementación de los componentes de servicios próximos a entrar en ambiente de producción?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_102" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_102_0" name="eru_rb_102" type="radio" value="eru_rb_102_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_102_1" name="eru_rb_102" type="radio" value="eru_rb_102_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_102_2" name="eru_rb_102" type="radio" value="eru_rb_102_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_102_3" name="eru_rb_102" type="radio" value="eru_rb_102_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_102_4" name="eru_rb_102" type="radio" value="eru_rb_102_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_102_5" name="eru_rb_102" type="radio" value="eru_rb_102_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_103" class="panel panel-primary">
		<div id="panel_head_eru_rb_103" class="panel-heading">
			<h4>¿Si se cumple con los criterios de aceptación de servicio, se realiza una validación del rendimiento del servicio para el cumplimiento de los acuerdos de niveles de servicio, una vez puesto en producción?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_103" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_103_0" name="eru_rb_103" type="radio" value="eru_rb_103_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_103_1" name="eru_rb_103" type="radio" value="eru_rb_103_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_103_2" name="eru_rb_103" type="radio" value="eru_rb_103_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_103_3" name="eru_rb_103" type="radio" value="eru_rb_103_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_103_4" name="eru_rb_103" type="radio" value="eru_rb_103_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_103_5" name="eru_rb_103" type="radio" value="eru_rb_103_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_104" class="panel panel-primary">
		<div id="panel_head_eru_rb_104" class="panel-heading">
			<h4>¿Para el despliegue de un servicio nuevo se evalúa previamente la preparación y disponibilidad de los recursos (humanos, tecnológicos, stakeholders, etc)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_104" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_104_0" name="eru_rb_104" type="radio" value="eru_rb_104_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_104_1" name="eru_rb_104" type="radio" value="eru_rb_104_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_104_2" name="eru_rb_104" type="radio" value="eru_rb_104_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_104_3" name="eru_rb_104" type="radio" value="eru_rb_104_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_104_4" name="eru_rb_104" type="radio" value="eru_rb_104_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_104_5" name="eru_rb_104" type="radio" value="eru_rb_104_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_105" class="panel panel-primary">
		<div id="panel_head_eru_rb_105" class="panel-heading">
			<h4>¿Los componentes son probados aisladamente para validar que son entregados según las especificaciones para generar los resultados esperados?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_105" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_105_0" name="eru_rb_105" type="radio" value="eru_rb_105_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_105_1" name="eru_rb_105" type="radio" value="eru_rb_105_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_105_2" name="eru_rb_105" type="radio" value="eru_rb_105_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_105_3" name="eru_rb_105" type="radio" value="eru_rb_105_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_105_4" name="eru_rb_105" type="radio" value="eru_rb_105_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_105_5" name="eru_rb_105" type="radio" value="eru_rb_105_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_106" class="panel panel-primary">
		<div id="panel_head_eru_rb_106" class="panel-heading">
			<h4>¿Se tiene registro de la evidencia de pruebas de los componentes y servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_106" class="panel-body">						
			<div class="table-responsive">
				<table class="table table-striped table-hover ">
					<tr>
						<td></td>
						<td class="td-center">&nbsp;0</td>
						<td class="td-center">&nbsp;1</td>
						<td class="td-center">&nbsp;2</td>
						<td class="td-center">&nbsp;3</td>
						<td class="td-center">&nbsp;4</td>
						<td class="td-center">&nbsp;5</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada factible</th>
						<td class="td-center"><input id="eru_rb_106_0" name="eru_rb_106" type="radio" value="eru_rb_106_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_106_1" name="eru_rb_106" type="radio" value="eru_rb_106_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_106_2" name="eru_rb_106" type="radio" value="eru_rb_106_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_106_3" name="eru_rb_106" type="radio" value="eru_rb_106_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_106_4" name="eru_rb_106" type="radio" value="eru_rb_106_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_106_5" name="eru_rb_106" type="radio" value="eru_rb_106_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
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
	<script type="text/javascript" src="javascript/transicion_cuantitativa.js"></script>
</body>
</html>

