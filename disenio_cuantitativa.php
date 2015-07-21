<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
		<form action="disenio_cuantitativa_process.php" method="GET">
			<br><h1>Gestión de los proveedores</h1>
<div class="form-group">
	<div id="panel_eru_rb_44" class="panel panel-primary">
		<div id="panel_head_eru_rb_44" class="panel-heading">
			<h4>¿Existe una base de datos de proveedores y contratos?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_44" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_44_0" name="eru_rb_44" type="radio" value="eru_rb_44_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_44_1" name="eru_rb_44" type="radio" value="eru_rb_44_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_44_2" name="eru_rb_44" type="radio" value="eru_rb_44_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_44_3" name="eru_rb_44" type="radio" value="eru_rb_44_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_44_4" name="eru_rb_44" type="radio" value="eru_rb_44_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_44_5" name="eru_rb_44" type="radio" value="eru_rb_44_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_45" class="panel panel-primary">
		<div id="panel_head_eru_rb_45" class="panel-heading">
			<h4>¿Está definido el procesos de selección y contratación de servicios de TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_45" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_45_0" name="eru_rb_45" type="radio" value="eru_rb_45_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_45_1" name="eru_rb_45" type="radio" value="eru_rb_45_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_45_2" name="eru_rb_45" type="radio" value="eru_rb_45_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_45_3" name="eru_rb_45" type="radio" value="eru_rb_45_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_45_4" name="eru_rb_45" type="radio" value="eru_rb_45_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_45_5" name="eru_rb_45" type="radio" value="eru_rb_45_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_46" class="panel panel-primary">
		<div id="panel_head_eru_rb_46" class="panel-heading">
			<h4>¿Se realiza un procesos de seguimiento y medición del comportamiento de los proveedores basados en métricas de desempeño?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_46" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_46_0" name="eru_rb_46" type="radio" value="eru_rb_46_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_46_1" name="eru_rb_46" type="radio" value="eru_rb_46_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_46_2" name="eru_rb_46" type="radio" value="eru_rb_46_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_46_3" name="eru_rb_46" type="radio" value="eru_rb_46_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_46_4" name="eru_rb_46" type="radio" value="eru_rb_46_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_46_5" name="eru_rb_46" type="radio" value="eru_rb_46_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_47" class="panel panel-primary">
		<div id="panel_head_eru_rb_47" class="panel-heading">
			<h4>¿Los proveedores se categorizan por valor de importancia contra riesgo e impacto (estratégicos, tácticos, mecánica, operacionales)?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_47" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_47_0" name="eru_rb_47" type="radio" value="eru_rb_47_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_47_1" name="eru_rb_47" type="radio" value="eru_rb_47_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_47_2" name="eru_rb_47" type="radio" value="eru_rb_47_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_47_3" name="eru_rb_47" type="radio" value="eru_rb_47_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_47_4" name="eru_rb_47" type="radio" value="eru_rb_47_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_47_5" name="eru_rb_47" type="radio" value="eru_rb_47_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_48" class="panel panel-primary">
		<div id="panel_head_eru_rb_48" class="panel-heading">
			<h4>¿El proceso de compras está alineado con la estrategia, procesos, términos estándar y condiciones de los abastecimientos corporativos ?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_48" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_48_0" name="eru_rb_48" type="radio" value="eru_rb_48_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_48_1" name="eru_rb_48" type="radio" value="eru_rb_48_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_48_2" name="eru_rb_48" type="radio" value="eru_rb_48_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_48_3" name="eru_rb_48" type="radio" value="eru_rb_48_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_48_4" name="eru_rb_48" type="radio" value="eru_rb_48_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_48_5" name="eru_rb_48" type="radio" value="eru_rb_48_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Gestión de la capacidad</h1>
<div class="form-group">
	<div id="panel_eru_rb_49" class="panel panel-primary">
		<div id="panel_head_eru_rb_49" class="panel-heading">
			<h4>¿Existen métricas definidas para medir la eficiencia de los procesos de servicio?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_49" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_49_0" name="eru_rb_49" type="radio" value="eru_rb_49_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_49_1" name="eru_rb_49" type="radio" value="eru_rb_49_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_49_2" name="eru_rb_49" type="radio" value="eru_rb_49_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_49_3" name="eru_rb_49" type="radio" value="eru_rb_49_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_49_4" name="eru_rb_49" type="radio" value="eru_rb_49_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_49_5" name="eru_rb_49" type="radio" value="eru_rb_49_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_50" class="panel panel-primary">
		<div id="panel_head_eru_rb_50" class="panel-heading">
			<h4>¿Se implementan medidas proactivas para mejorar el rendimiento de los servicios?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_50" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_50_0" name="eru_rb_50" type="radio" value="eru_rb_50_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_50_1" name="eru_rb_50" type="radio" value="eru_rb_50_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_50_2" name="eru_rb_50" type="radio" value="eru_rb_50_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_50_3" name="eru_rb_50" type="radio" value="eru_rb_50_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_50_4" name="eru_rb_50" type="radio" value="eru_rb_50_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_50_5" name="eru_rb_50" type="radio" value="eru_rb_50_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_51" class="panel panel-primary">
		<div id="panel_head_eru_rb_51" class="panel-heading">
			<h4>¿Se tiene definido un plan de capacidad que refleje las necesidades actuales y futuras?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_51" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_51_0" name="eru_rb_51" type="radio" value="eru_rb_51_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_51_1" name="eru_rb_51" type="radio" value="eru_rb_51_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_51_2" name="eru_rb_51" type="radio" value="eru_rb_51_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_51_3" name="eru_rb_51" type="radio" value="eru_rb_51_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_51_4" name="eru_rb_51" type="radio" value="eru_rb_51_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_51_5" name="eru_rb_51" type="radio" value="eru_rb_51_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_52" class="panel panel-primary">
		<div id="panel_head_eru_rb_52" class="panel-heading">
			<h4>¿La planeación tecnológica se realiza basados en la capacidad actual y futura de los servicios de TI?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_52" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_52_0" name="eru_rb_52" type="radio" value="eru_rb_52_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_52_1" name="eru_rb_52" type="radio" value="eru_rb_52_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_52_2" name="eru_rb_52" type="radio" value="eru_rb_52_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_52_3" name="eru_rb_52" type="radio" value="eru_rb_52_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_52_4" name="eru_rb_52" type="radio" value="eru_rb_52_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_52_5" name="eru_rb_52" type="radio" value="eru_rb_52_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_53" class="panel panel-primary">
		<div id="panel_head_eru_rb_53" class="panel-heading">
			<h4>¿Se lleva un registro y se realiza análisis del monitoreo del rendimiento de los servicios, para asegurar una capacidad adecuada de TI para alcanzar los niveles de servicio satisfactorio de los clientes?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_53" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_53_0" name="eru_rb_53" type="radio" value="eru_rb_53_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_53_1" name="eru_rb_53" type="radio" value="eru_rb_53_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_53_2" name="eru_rb_53" type="radio" value="eru_rb_53_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_53_3" name="eru_rb_53" type="radio" value="eru_rb_53_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_53_4" name="eru_rb_53" type="radio" value="eru_rb_53_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_53_5" name="eru_rb_53" type="radio" value="eru_rb_53_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_54" class="panel panel-primary">
		<div id="panel_head_eru_rb_54" class="panel-heading">
			<h4>¿Está definido y documentado la máxima capacidad actual de cada componente?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_54" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_54_0" name="eru_rb_54" type="radio" value="eru_rb_54_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_54_1" name="eru_rb_54" type="radio" value="eru_rb_54_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_54_2" name="eru_rb_54" type="radio" value="eru_rb_54_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_54_3" name="eru_rb_54" type="radio" value="eru_rb_54_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_54_4" name="eru_rb_54" type="radio" value="eru_rb_54_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_54_5" name="eru_rb_54" type="radio" value="eru_rb_54_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<br><h1>Gestión de la continuidad de los servicios de TI</h1>
<div class="form-group">
	<div id="panel_eru_rb_55" class="panel panel-primary">
		<div id="panel_head_eru_rb_55" class="panel-heading">
			<h4>¿Los planes de continuidad y recuperación de servicios de TI están documentados, actualizados y probados<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_55" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_55_0" name="eru_rb_55" type="radio" value="eru_rb_55_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_55_1" name="eru_rb_55" type="radio" value="eru_rb_55_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_55_2" name="eru_rb_55" type="radio" value="eru_rb_55_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_55_3" name="eru_rb_55" type="radio" value="eru_rb_55_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_55_4" name="eru_rb_55" type="radio" value="eru_rb_55_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_55_5" name="eru_rb_55" type="radio" value="eru_rb_55_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_56" class="panel panel-primary">
		<div id="panel_head_eru_rb_56" class="panel-heading">
			<h4>¿Se realiza con frecuencia un análisis de riesgos e impacto del negocio para asegurar que los planes de continuidad permitan mantener la operación del mismo?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_56" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_56_0" name="eru_rb_56" type="radio" value="eru_rb_56_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_56_1" name="eru_rb_56" type="radio" value="eru_rb_56_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_56_2" name="eru_rb_56" type="radio" value="eru_rb_56_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_56_3" name="eru_rb_56" type="radio" value="eru_rb_56_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_56_4" name="eru_rb_56" type="radio" value="eru_rb_56_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_56_5" name="eru_rb_56" type="radio" value="eru_rb_56_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_57" class="panel panel-primary">
		<div id="panel_head_eru_rb_57" class="panel-heading">
			<h4>¿Se asesora a las demás áreas del negocio sobre gestión del riesgo y asuntos relacionados con la continuidad y recuperación?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_57" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_57_0" name="eru_rb_57" type="radio" value="eru_rb_57_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_57_1" name="eru_rb_57" type="radio" value="eru_rb_57_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_57_2" name="eru_rb_57" type="radio" value="eru_rb_57_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_57_3" name="eru_rb_57" type="radio" value="eru_rb_57_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_57_4" name="eru_rb_57" type="radio" value="eru_rb_57_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_57_5" name="eru_rb_57" type="radio" value="eru_rb_57_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_58" class="panel panel-primary">
		<div id="panel_head_eru_rb_58" class="panel-heading">
			<h4>¿Existe presupuesto asignado a los planes de continuidad?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_58" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_58_0" name="eru_rb_58" type="radio" value="eru_rb_58_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_58_1" name="eru_rb_58" type="radio" value="eru_rb_58_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_58_2" name="eru_rb_58" type="radio" value="eru_rb_58_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_58_3" name="eru_rb_58" type="radio" value="eru_rb_58_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_58_4" name="eru_rb_58" type="radio" value="eru_rb_58_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_58_5" name="eru_rb_58" type="radio" value="eru_rb_58_5" class="form-control"></td>
						<th class="th-center" class="form-control">Muy factible</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_59" class="panel panel-primary">
		<div id="panel_head_eru_rb_59" class="panel-heading">
			<h4>¿Existe un plan de comunicación, educación, concientización y entrenamientos del plan de continuidad hacia las áreas?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_59" class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_59_0" name="eru_rb_59" type="radio" value="eru_rb_59_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_59_1" name="eru_rb_59" type="radio" value="eru_rb_59_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_59_2" name="eru_rb_59" type="radio" value="eru_rb_59_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_59_3" name="eru_rb_59" type="radio" value="eru_rb_59_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_59_4" name="eru_rb_59" type="radio" value="eru_rb_59_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_59_5" name="eru_rb_59" type="radio" value="eru_rb_59_5" class="form-control"></td>
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
	<script type="text/javascript" src="javascript/disenio_cuantitativa.js"></script>
</body>
</html>

