<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>encuesta2</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">			
	<link rel="stylesheet" href="css/encuestas.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<span class="navbar-brand">Encuesta Helados 2</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="prueba2_process.php" method="GET">
			<div class="form-group">
	<div id="panel_smu_rb_16" class="panel panel-primary">
		<div id="panel_head_smu_rb_16" class="panel-heading">
			<h4>¿Cual es su sabor de helado favorito? <small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta pregunta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_smu_rb_16" class="panel-body">	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_16_1" name="smu_rb_16" type="radio" value="smu_rb_16_1">
					Fresa
				</label>
			</div>	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_16_2" name="smu_rb_16" type="radio" value="smu_rb_16_2">
					Chicle
				</label>
			</div>	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_16_3" name="smu_rb_16" type="radio" value="smu_rb_16_3">
					Arequipe
				</label>
			</div>	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_16_4" name="smu_rb_16" type="radio" value="smu_rb_16_4">
					Queso
				</label>
			</div>	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_16_5" name="smu_rb_16" type="radio" value="smu_rb_16_5">
					Feijoa
				</label>
			</div>	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_16_6" name="smu_rb_16" type="radio" value="smu_rb_16_6">
					Mani
				</label>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_smu_s_17" class="panel panel-primary">
		<div id="panel_head_smu_s_17" class="panel-heading">
			<h4>¿Cual es su sabor de helado favorito? <small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta pregunta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_smu_s_17" class="panel-body">
			<select name="smu_s_17" id="smu_s_17" class="form-control">
				<option value="" selected>--Seleccione una opci&oacute;n--</option>
				<option id="smu_s_17_1" value="smu_s_17_1">Fresa</option>
				<option id="smu_s_17_2" value="smu_s_17_2">Chicle</option>
				<option id="smu_s_17_3" value="smu_s_17_3">Arequipe</option>
				<option id="smu_s_17_4" value="smu_s_17_4">Queso</option>
				<option id="smu_s_17_5" value="smu_s_17_5">Feijoa</option>
				<option id="smu_s_17_6" value="smu_s_17_6">Mani</option>
			</select>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_smr_cb_18" class="panel panel-primary">
		<div id="panel_head_smr_cb_18" class="panel-heading">
			<h4>¿Cuales son sus sabores de helado favoritos? <small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta pregunta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_smr_cb_18" class="panel-body">
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_18_1" name="smr_cb_18[]" type="checkbox" value="smr_cb_18_1">
					Fresa
				</label>
			</div>
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_18_2" name="smr_cb_18[]" type="checkbox" value="smr_cb_18_2">
					Chicle
				</label>
			</div>
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_18_3" name="smr_cb_18[]" type="checkbox" value="smr_cb_18_3">
					Arequipe
				</label>
			</div>
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_18_4" name="smr_cb_18[]" type="checkbox" value="smr_cb_18_4">
					Queso
				</label>
			</div>
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_18_5" name="smr_cb_18[]" type="checkbox" value="smr_cb_18_5">
					Feijoa
				</label>
			</div>
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_18_6" name="smr_cb_18[]" type="checkbox" value="smr_cb_18_6">
					Mani
				</label>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_smr_sm_19" class="panel panel-primary">
		<div id="panel_head_smr_sm_19" class="panel-heading">
			<h4>¿Cuales son sus sabores de helado favoritos? <small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta pregunta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_smr_sm_19" class="panel-body">
			<select multiple id="smr_sm_19" name="smr_sm_19[]" class="form-control">
				<option id="smr_sm_19_1" class="form-control" value="smr_sm_19_1">Fresa</option>
				<option id="smr_sm_19_2" class="form-control" value="smr_sm_19_2">Chicle</option>
				<option id="smr_sm_19_3" class="form-control" value="smr_sm_19_3">Arequipe</option>
				<option id="smr_sm_19_4" class="form-control" value="smr_sm_19_4">Queso</option>
				<option id="smr_sm_19_5" class="form-control" value="smr_sm_19_5">Feijoa</option>
				<option id="smr_sm_19_6" class="form-control" value="smr_sm_19_6">Mani</option>	
			</select>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_rb_20" class="panel panel-primary">
		<div id="panel_head_mmr_rb_20" class="panel-heading">
			<h4>Evalue las siguientes preguntas<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_rb_20" class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover ">
					<tr class="active">
						<th class="th-center"></th>
						<th class="th-center">Nada Importante</th>
						<th class="th-center">Poco Importante</th>
						<th class="th-center">Importante</th>
						<th class="th-center">Bastante Importante</th>
						<th class="th-center">Muy Importante</th>
					</tr>
					<tr>
						<th>¿Que tan Importante es su Educacion?</th>
						<td class="td-center"><input id="mmr_rb_20_1_1" name="mmr_rb_20_1" type="radio"  value="mmr_rb_20_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_1_2" name="mmr_rb_20_1" type="radio"  value="mmr_rb_20_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_1_3" name="mmr_rb_20_1" type="radio"  value="mmr_rb_20_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_1_4" name="mmr_rb_20_1" type="radio"  value="mmr_rb_20_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_1_5" name="mmr_rb_20_1" type="radio"  value="mmr_rb_20_1_5" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Que tan Importante es su Familia?</th>
						<td class="td-center"><input id="mmr_rb_20_2_1" name="mmr_rb_20_2" type="radio"  value="mmr_rb_20_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_2_2" name="mmr_rb_20_2" type="radio"  value="mmr_rb_20_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_2_3" name="mmr_rb_20_2" type="radio"  value="mmr_rb_20_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_2_4" name="mmr_rb_20_2" type="radio"  value="mmr_rb_20_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_2_5" name="mmr_rb_20_2" type="radio"  value="mmr_rb_20_2_5" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Que tan Importante es su Religion?</th>
						<td class="td-center"><input id="mmr_rb_20_3_1" name="mmr_rb_20_3" type="radio"  value="mmr_rb_20_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_3_2" name="mmr_rb_20_3" type="radio"  value="mmr_rb_20_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_3_3" name="mmr_rb_20_3" type="radio"  value="mmr_rb_20_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_3_4" name="mmr_rb_20_3" type="radio"  value="mmr_rb_20_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_3_5" name="mmr_rb_20_3" type="radio"  value="mmr_rb_20_3_5" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Que tan Importante es su Ejercicio Fisico?</th>
						<td class="td-center"><input id="mmr_rb_20_4_1" name="mmr_rb_20_4" type="radio"  value="mmr_rb_20_4_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_4_2" name="mmr_rb_20_4" type="radio"  value="mmr_rb_20_4_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_4_3" name="mmr_rb_20_4" type="radio"  value="mmr_rb_20_4_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_4_4" name="mmr_rb_20_4" type="radio"  value="mmr_rb_20_4_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_20_4_5" name="mmr_rb_20_4" type="radio"  value="mmr_rb_20_4_5" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_cb_21" class="panel panel-primary">
		<div id="panel_head_mmr_cb_21" class="panel-heading">
			<h4>¿Cuales sabores de helado son los favoritos para cada miembro de su familia?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_cb_21" class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover ">
					<tr class="active">
						<th class="th-center"></th>
						<th class="th-center">Arequipe</th>
						<th class="th-center">Fresa</th>
						<th class="th-center">Chicle</th>
						<th class="th-center">Coco</th>
						<th class="th-center">Queso</th>
					</tr>
					<tr>
						<th>Papa</th>
						<td class="td-center"><input id="mmr_cb_21_1_1" name="mmr_cb_21_1[]" type="checkbox" value="mmr_cb_21_1_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_1_2" name="mmr_cb_21_1[]" type="checkbox" value="mmr_cb_21_1_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_1_3" name="mmr_cb_21_1[]" type="checkbox" value="mmr_cb_21_1_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_1_4" name="mmr_cb_21_1[]" type="checkbox" value="mmr_cb_21_1_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_1_5" name="mmr_cb_21_1[]" type="checkbox" value="mmr_cb_21_1_5" class="form-control"></td>
					</tr>
					<tr>
						<th>Mama</th>
						<td class="td-center"><input id="mmr_cb_21_2_1" name="mmr_cb_21_2[]" type="checkbox" value="mmr_cb_21_2_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_2_2" name="mmr_cb_21_2[]" type="checkbox" value="mmr_cb_21_2_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_2_3" name="mmr_cb_21_2[]" type="checkbox" value="mmr_cb_21_2_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_2_4" name="mmr_cb_21_2[]" type="checkbox" value="mmr_cb_21_2_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_2_5" name="mmr_cb_21_2[]" type="checkbox" value="mmr_cb_21_2_5" class="form-control"></td>
					</tr>
					<tr>
						<th>Hermana</th>
						<td class="td-center"><input id="mmr_cb_21_3_1" name="mmr_cb_21_3[]" type="checkbox" value="mmr_cb_21_3_1" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_3_2" name="mmr_cb_21_3[]" type="checkbox" value="mmr_cb_21_3_2" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_3_3" name="mmr_cb_21_3[]" type="checkbox" value="mmr_cb_21_3_3" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_3_4" name="mmr_cb_21_3[]" type="checkbox" value="mmr_cb_21_3_4" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_21_3_5" name="mmr_cb_21_3[]" type="checkbox" value="mmr_cb_21_3_5" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_mmr_s_22" class="panel panel-primary">
		<div id="panel_head_mmr_s_22" class="panel-heading">
			<h4>Segun los siguientes sabores de helados seleccione el tipo de textura y sabor que prefiere<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Todas la filas son obligatorias</b></small></h4>
		</div>
		<div id="panel_body_mmr_s_22" class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<tr class="active">
						<th class="th-center"></th>
						<th class="th-center">textura</th>
						<th class="th-center">sabor</th>
					</tr>
					<tr>
						<th>Arequipe</th>
						<td>
							<select id="mmr_s_22_1_1" name="mmr_s_22_1_1" class="form-control">
							<option value="">--Seleccione una opci&oacute;n--</option>
							<option value="mmr_s_22_1_1_1">Liso</option>
							<option value="mmr_s_22_1_1_2">Rugoso</option>
							<option value="mmr_s_22_1_1_3">Esponjoso</option>
							</select>
						</td>
						<td>
							<select id="mmr_s_22_1_2" name="mmr_s_22_1_2" class="form-control">
							<option value="">--Seleccione una opci&oacute;n--</option>
							<option value="mmr_s_22_1_2_1">Dulce</option>
							<option value="mmr_s_22_1_2_2">Amargo</option>
							<option value="mmr_s_22_1_2_3">Agridulce</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Fresa</th>
						<td>
							<select id="mmr_s_22_2_1" name="mmr_s_22_2_1" class="form-control">
							<option value="">--Seleccione una opci&oacute;n--</option>
							<option value="mmr_s_22_2_1_1">Liso</option>
							<option value="mmr_s_22_2_1_2">Rugoso</option>
							<option value="mmr_s_22_2_1_3">Esponjoso</option>
							</select>
						</td>
						<td>
							<select id="mmr_s_22_2_2" name="mmr_s_22_2_2" class="form-control">
							<option value="">--Seleccione una opci&oacute;n--</option>
							<option value="mmr_s_22_2_2_1">Dulce</option>
							<option value="mmr_s_22_2_2_2">Amargo</option>
							<option value="mmr_s_22_2_2_3">Agridulce</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Chicle</th>
						<td>
							<select id="mmr_s_22_3_1" name="mmr_s_22_3_1" class="form-control">
							<option value="">--Seleccione una opci&oacute;n--</option>
							<option value="mmr_s_22_3_1_1">Liso</option>
							<option value="mmr_s_22_3_1_2">Rugoso</option>
							<option value="mmr_s_22_3_1_3">Esponjoso</option>
							</select>
						</td>
						<td>
							<select id="mmr_s_22_3_2" name="mmr_s_22_3_2" class="form-control">
							<option value="">--Seleccione una opci&oacute;n--</option>
							<option value="mmr_s_22_3_2_1">Dulce</option>
							<option value="mmr_s_22_3_2_2">Amargo</option>
							<option value="mmr_s_22_3_2_3">Agridulce</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Coco</th>
						<td>
							<select id="mmr_s_22_4_1" name="mmr_s_22_4_1" class="form-control">
							<option value="">--Seleccione una opci&oacute;n--</option>
							<option value="mmr_s_22_4_1_1">Liso</option>
							<option value="mmr_s_22_4_1_2">Rugoso</option>
							<option value="mmr_s_22_4_1_3">Esponjoso</option>
							</select>
						</td>
						<td>
							<select id="mmr_s_22_4_2" name="mmr_s_22_4_2" class="form-control">
							<option value="">--Seleccione una opci&oacute;n--</option>
							<option value="mmr_s_22_4_2_1">Dulce</option>
							<option value="mmr_s_22_4_2_2">Amargo</option>
							<option value="mmr_s_22_4_2_3">Agridulce</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Queso</th>
						<td>
							<select id="mmr_s_22_5_1" name="mmr_s_22_5_1" class="form-control">
							<option value="">--Seleccione una opci&oacute;n--</option>
							<option value="mmr_s_22_5_1_1">Liso</option>
							<option value="mmr_s_22_5_1_2">Rugoso</option>
							<option value="mmr_s_22_5_1_3">Esponjoso</option>
							</select>
						</td>
						<td>
							<select id="mmr_s_22_5_2" name="mmr_s_22_5_2" class="form-control">
							<option value="">--Seleccione una opci&oacute;n--</option>
							<option value="mmr_s_22_5_2_1">Dulce</option>
							<option value="mmr_s_22_5_2_2">Amargo</option>
							<option value="mmr_s_22_5_2_3">Agridulce</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Clasifique los siguientes elementos, segun su favoritismo</h4>
		</div>
		<div class="panel-body">
			<ul id="loc_ul_23" name="loc_ul_23" class="list-unstyled">
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_23_1">1</span>
					  	<span class="form-control" aria-describedby="loc_ul_23_1">Fresa</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_23_2">2</span>
					  	<span class="form-control" aria-describedby="loc_ul_23_2">Chicle</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_23_3">3</span>
					  	<span class="form-control" aria-describedby="loc_ul_23_3">Arequipe</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_23_4">4</span>
					  	<span class="form-control" aria-describedby="loc_ul_23_4">Queso</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_23_5">5</span>
					  	<span class="form-control" aria-describedby="loc_ul_23_5">Feijoa</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_23_6">6</span>
					  	<span class="form-control" aria-describedby="loc_ul_23_6">Mani</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_23_7">7</span>
					  	<span class="form-control" aria-describedby="loc_ul_23_7">Limon</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_23_8">8</span>
					  	<span class="form-control" aria-describedby="loc_ul_23_8">Coco</span>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_eru_rb_24" class="panel panel-primary">
		<div id="panel_head_eru_rb_24" class="panel-heading">
			<h4>¿Que tan probable es que recomiende el helado de fresa?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_eru_rb_24" class="panel-body">						
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
						<td class="td-center">&nbsp;6</td>
						<td class="td-center">&nbsp;7</td>
						<td class="td-center">&nbsp;8</td>
						<td class="td-center">&nbsp;9</td>
						<td class="td-center">10</td>
						<td></td>
					</tr>
					<tr>
						<th class="th-center" class="form-control">Nada Probable</th>
						<td class="td-center"><input id="eru_rb_24_0" name="eru_rb_24" type="radio" value="eru_rb_24_0" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_24_1" name="eru_rb_24" type="radio" value="eru_rb_24_1" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_24_2" name="eru_rb_24" type="radio" value="eru_rb_24_2" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_24_3" name="eru_rb_24" type="radio" value="eru_rb_24_3" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_24_4" name="eru_rb_24" type="radio" value="eru_rb_24_4" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_24_5" name="eru_rb_24" type="radio" value="eru_rb_24_5" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_24_6" name="eru_rb_24" type="radio" value="eru_rb_24_6" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_24_7" name="eru_rb_24" type="radio" value="eru_rb_24_7" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_24_8" name="eru_rb_24" type="radio" value="eru_rb_24_8" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_24_9" name="eru_rb_24" type="radio" value="eru_rb_24_9" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_24_10" name="eru_rb_24" type="radio" value="eru_rb_24_10" class="form-control"></td>
						<th class="th-center" class="form-control">Muy Probable</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psu_t_25" class="panel panel-primary">
		<div id="panel_head_psu_t_25" class="panel-heading">
			<h4>¿Cual es su marca de helado favorita?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psu_t_25" class="panel-body">
			<input id="psu_t_25" name="psu_t_25" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psm_t_26" class="panel panel-primary">
		<div id="panel_head_psm_t_26" class="panel-heading">
			<h4>¿Cuales son sus tres marcas de helado?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psm_t_26" class="panel-body">
			<div class="input-group">
				<span class="input-group-addon">1</span>
				<input id="psm_t_26_1" name="psm_t_26_1" type="text" class="form-control" placeholder="Escriba su respuesta...">
			</div>
			<div class="input-group">
				<span class="input-group-addon">2</span>
				<input id="psm_t_26_2" name="psm_t_26_2" type="text" class="form-control" placeholder="Escriba su respuesta...">
			</div>
			<div class="input-group">
				<span class="input-group-addon">3</span>
				<input id="psm_t_26_3" name="psm_t_26_3" type="text" class="form-control" placeholder="Escriba su respuesta...">
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psc_ta_27" class="panel panel-primary">
		<div id="panel_head_psc_ta_27" class="panel-heading">
			<h4>¿Que es lo que mas le gusta de su helado favorito?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psc_ta_27" class="panel-body">
			<textarea name="psc_ta_27" id="psc_ta_27" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_pfh_s_28" class="panel panel-primary">
		<div id="panel_head_pfh_s_28" class="panel-heading">
			<h4>¿Cuando fue el ultimo dia y hora en comer su helado?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_pfh_s_28" class="panel-body">
			<label for="pfh_s_date_28">Fecha:</label>
			<input id="pfh_s_date_28" name="pfh_s_date_28" type="text" class="form-control" placeholder="Ingrese la fecha...">
			<label for="pfh_s_hour_28">Hora:</label>
			<div class="row">
				<div class="col col-sm-5">					
					<select id="pfh_s_hour_28" name="pfh_s_hour_28" class="form-control">
						<option value="">--Seleccione una opci&oacute;n</option>
						<?php 
							$cero = "0";
							for ($i=0; $i<24; $i++) { 
								if ($i<10) {
									echo '<option value="'.$i.'">'.$cero.$i.'</option>';	
								}else{
									echo '<option value="'.$i.'">'.$i.'</option>';
								}
										
							}
						?>								
					</select>
				</div>
				<div class="col col-sm-2 td-center" >:</div>
				<div class="col col-sm-5">
					<select id="pfh_s_minute_28" name="pfh_s_minute_28" class="form-control">
						<option value="">--Seleccione una opci&oacute;n</option>
						<?php 
							$cero = "0";
							for ($i=0; $i<60; $i++) { 
								if ($i<10) {
									echo '<option value="'.$cero.$i.'">'.$cero.$i.'</option>';	
								}else{
									echo '<option value="'.$i.'">'.$i.'</option>';
								}
							}
						?>								
					</select>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psf_s_29" class="panel panel-primary">
		<div id="panel_head_psf_s_29" class="panel-heading">
			<h4>¿Cuando fue el ultimo dia en comer su helado?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psf_s_29" class="panel-body">
			<label for="psf_s_date_29">Fecha:</label>
			<input id="psf_s_date_29" name="psf_s_date_29" type="text" class="form-control" placeholder="Ingrese la fecha...">
		</div>
	</div>
</div>
<div class="form-group">
	<div id="panel_psh_s_30" class="panel panel-primary">
		<div id="panel_head_psh_s_30" class="panel-heading">
			<h4>¿Cual es su hora favorita del dia para comer un helado?<small style="color:red;"><b class="message_error"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>Esta respuesta es obligatoria</b></small></h4>
		</div>
		<div id="panel_body_psh_s_30" class="panel-body">
			<label >Hora:</label>
			<div class="row">
				<div class="col col-sm-5">						
					<select id="psh_s_hour_30" name="psh_s_hour_30" class="form-control">
						<option value="">--Seleccione una opci&oacute;n</option>
						<?php 
							$cero = "0";
							for ($i=0; $i<24; $i++) { 
								if ($i<10) {
									echo '<option value="'.$i.'">'.$cero.$i.'</option>';	
								}else{
									echo '<option value="'.$i.'">'.$i.'</option>';
								}
										
							}
						?>								
					</select>
				</div>
				<div class="col col-sm-2 td-center" >:</div>
				<div class="col col-sm-5">
					<select id="psh_s_minute_30" name="psh_s_minute_30" class="form-control">
						<option value="">--Seleccione una opci&oacute;n</option>
						<?php 
							$cero = "0";
							for ($i=0; $i<60; $i++) { 
								if ($i<10) {
									echo '<option value="'.$cero.$i.'">'.$cero.$i.'</option>';	
								}else{
									echo '<option value="'.$i.'">'.$i.'</option>';
								}
							}
						?>								
					</select>
				</div>
			</div>
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
	<script type="text/javascript" src="javascript/prueba2.js"></script>
</body>
</html>

