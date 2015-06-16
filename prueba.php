<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>encuesta1</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">			
	<link rel="stylesheet" href="css/encuestas.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<span class="navbar-brand">Encuesta Helados 1</span>
			</div>
		</nav>
	</header>
	<div class="container">
		<form action="#">
			<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>¿Cual es su sabor de helado favorito?</h4>
		</div>
		<div class="panel-body">	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_1_" name="smu_rb_1" type="radio" value="Fresa">
					Fresa
				</label>
			</div>	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_1_" name="smu_rb_1" type="radio" value="Chicle">
					Chicle
				</label>
			</div>	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_1_" name="smu_rb_1" type="radio" value="Arequipe">
					Arequipe
				</label>
			</div>	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_1_" name="smu_rb_1" type="radio" value="Queso">
					Queso
				</label>
			</div>	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_1_" name="smu_rb_1" type="radio" value="Feijoa">
					Feijoa
				</label>
			</div>	
			<div class="radio">
				<label class="form-control">
					<input id="smu_rb_1_" name="smu_rb_1" type="radio" value="Mani">
					Mani
				</label>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>¿Cual es su sabor de helado favorito?</h4>
		</div>
		<div class="panel-body">
			<select name="smu_s_2" id="smu_s_2" class="form-control">
				<option value="Fresa">Fresa</option>
				<option value="Chicle">Chicle</option>
				<option value="Arequipe">Arequipe</option>
				<option value="Queso">Queso</option>
				<option value="Feijoa">Feijoa</option>
				<option value="Mani">Mani</option>
			</select>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>¿Cuales son sus sabores de helado favoritos?</h4>
		</div>
		<div class="panel-body">
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_3" name="smr_cb_3" type="checkbox" value="Fresa">
					Fresa
				</label>
			</div>
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_3" name="smr_cb_3" type="checkbox" value="Chicle">
					Chicle
				</label>
			</div>
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_3" name="smr_cb_3" type="checkbox" value="Arequipe">
					Arequipe
				</label>
			</div>
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_3" name="smr_cb_3" type="checkbox" value="Queso">
					Queso
				</label>
			</div>
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_3" name="smr_cb_3" type="checkbox" value="Feijoa">
					Feijoa
				</label>
			</div>
			<div class="checkbox">
				<label class="form-control">
					<input id="smr_cb_3" name="smr_cb_3" type="checkbox" value="Mani">
					Mani
				</label>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>¿Cuales son sus sabores de helado favoritos?</h4>
		</div>
		<div class="panel-body">
			<select multiple id="smr_sm_4" name="smr_sm_4" class="form-control">
				<option class="form-control">Fresa</option>
				<option class="form-control">Chicle</option>
				<option class="form-control">Arequipe</option>
				<option class="form-control">Queso</option>
				<option class="form-control">Feijoa</option>
				<option class="form-control">Mani</option>			
			</select>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Evalue las siguientes preguntas</h4>
		</div>
		<div class="panel-body">
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
						<td class="td-center"><input id="mmr_rb_5_1_1" name="mmr_rb_5_1" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_1_2" name="mmr_rb_5_1" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_1_3" name="mmr_rb_5_1" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_1_4" name="mmr_rb_5_1" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_1_5" name="mmr_rb_5_1" type="radio" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Que tan Importante es su Familia?</th>
						<td class="td-center"><input id="mmr_rb_5_2_1" name="mmr_rb_5_2" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_2_2" name="mmr_rb_5_2" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_2_3" name="mmr_rb_5_2" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_2_4" name="mmr_rb_5_2" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_2_5" name="mmr_rb_5_2" type="radio" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Que tan Importante es su Religion?</th>
						<td class="td-center"><input id="mmr_rb_5_3_1" name="mmr_rb_5_3" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_3_2" name="mmr_rb_5_3" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_3_3" name="mmr_rb_5_3" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_3_4" name="mmr_rb_5_3" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_3_5" name="mmr_rb_5_3" type="radio" class="form-control"></td>
					</tr>
					<tr>
						<th>¿Que tan Importante es su Ejercicio Fisico?</th>
						<td class="td-center"><input id="mmr_rb_5_4_1" name="mmr_rb_5_4" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_4_2" name="mmr_rb_5_4" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_4_3" name="mmr_rb_5_4" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_4_4" name="mmr_rb_5_4" type="radio" class="form-control"></td>
						<td class="td-center"><input id="mmr_rb_5_4_5" name="mmr_rb_5_4" type="radio" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>¿Cuales sabores de helado son los favoritos para cada miembro de su familia?</h4>
		</div>
		<div class="panel-body">
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
						<td class="td-center"><input id="mmr_cb_6_1_1" name="mmr_cb_6_1" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_1_2" name="mmr_cb_6_1" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_1_3" name="mmr_cb_6_1" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_1_4" name="mmr_cb_6_1" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_1_5" name="mmr_cb_6_1" type="checkbox" class="form-control"></td>
					</tr>
					<tr>
						<th>Mama</th>
						<td class="td-center"><input id="mmr_cb_6_2_1" name="mmr_cb_6_2" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_2_2" name="mmr_cb_6_2" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_2_3" name="mmr_cb_6_2" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_2_4" name="mmr_cb_6_2" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_2_5" name="mmr_cb_6_2" type="checkbox" class="form-control"></td>
					</tr>
					<tr>
						<th>Hermana</th>
						<td class="td-center"><input id="mmr_cb_6_3_1" name="mmr_cb_6_3" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_3_2" name="mmr_cb_6_3" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_3_3" name="mmr_cb_6_3" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_3_4" name="mmr_cb_6_3" type="checkbox" class="form-control"></td>
						<td class="td-center"><input id="mmr_cb_6_3_5" name="mmr_cb_6_3" type="checkbox" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>Segun los siguientes sabores de helados seleccione el tipo de textura y sabor que prefiere</h4>
		</div>
		<div class="panel-body">
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
							<select id="mmr_s_7_1_1" name="mmr_s_7_1_1" class="form-control">
								<option value="Liso">Liso</option>
								<option value="Rugoso">Rugoso</option>
								<option value="Esponjoso">Esponjoso</option>
							</select>
						</td>
						<td>
							<select id="mmr_s_7_1_2" name="mmr_s_7_1_2" class="form-control">
								<option value="Dulce">Dulce</option>
								<option value="Amargo">Amargo</option>
								<option value="Agridulce">Agridulce</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Fresa</th>
						<td>
							<select id="mmr_s_7_2_1" name="mmr_s_7_2_1" class="form-control">
								<option value="Liso">Liso</option>
								<option value="Rugoso">Rugoso</option>
								<option value="Esponjoso">Esponjoso</option>
							</select>
						</td>
						<td>
							<select id="mmr_s_7_2_2" name="mmr_s_7_2_2" class="form-control">
								<option value="Dulce">Dulce</option>
								<option value="Amargo">Amargo</option>
								<option value="Agridulce">Agridulce</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Chicle</th>
						<td>
							<select id="mmr_s_7_3_1" name="mmr_s_7_3_1" class="form-control">
								<option value="Liso">Liso</option>
								<option value="Rugoso">Rugoso</option>
								<option value="Esponjoso">Esponjoso</option>
							</select>
						</td>
						<td>
							<select id="mmr_s_7_3_2" name="mmr_s_7_3_2" class="form-control">
								<option value="Dulce">Dulce</option>
								<option value="Amargo">Amargo</option>
								<option value="Agridulce">Agridulce</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Coco</th>
						<td>
							<select id="mmr_s_7_4_1" name="mmr_s_7_4_1" class="form-control">
								<option value="Liso">Liso</option>
								<option value="Rugoso">Rugoso</option>
								<option value="Esponjoso">Esponjoso</option>
							</select>
						</td>
						<td>
							<select id="mmr_s_7_4_2" name="mmr_s_7_4_2" class="form-control">
								<option value="Dulce">Dulce</option>
								<option value="Amargo">Amargo</option>
								<option value="Agridulce">Agridulce</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>Queso</th>
						<td>
							<select id="mmr_s_7_5_1" name="mmr_s_7_5_1" class="form-control">
								<option value="Liso">Liso</option>
								<option value="Rugoso">Rugoso</option>
								<option value="Esponjoso">Esponjoso</option>
							</select>
						</td>
						<td>
							<select id="mmr_s_7_5_2" name="mmr_s_7_5_2" class="form-control">
								<option value="Dulce">Dulce</option>
								<option value="Amargo">Amargo</option>
								<option value="Agridulce">Agridulce</option>
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
			<ul id="loc_ul_8" class="list-unstyled">
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_8_1">1</span>
					  	<span class="form-control" aria-describedby="loc_ul_8_1">Fresa</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_8_2">2</span>
					  	<span class="form-control" aria-describedby="loc_ul_8_2">Chicle</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_8_3">3</span>
					  	<span class="form-control" aria-describedby="loc_ul_8_3">Arequipe</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_8_4">4</span>
					  	<span class="form-control" aria-describedby="loc_ul_8_4">Queso</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_8_5">5</span>
					  	<span class="form-control" aria-describedby="loc_ul_8_5">Feijoa</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_8_6">6</span>
					  	<span class="form-control" aria-describedby="loc_ul_8_6">Mani</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_8_7">7</span>
					  	<span class="form-control" aria-describedby="loc_ul_8_7">Limon</span>
					</div>
				</li>
				<li>
					<div class="input-group">
						<span class="input-group-addon" id="loc_ul_8_8">8</span>
					  	<span class="form-control" aria-describedby="loc_ul_8_8">Coco</span>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>¿Que tan probable es que recomiende el helado de fresa?</h4>
		</div>
		<div class="panel-body">						
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
						<td class="td-center"><input id="eru_rb_9_0" name="eru_rb_9" type="radio" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_1" name="eru_rb_9" type="radio" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_2" name="eru_rb_9" type="radio" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_3" name="eru_rb_9" type="radio" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_4" name="eru_rb_9" type="radio" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_5" name="eru_rb_9" type="radio" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_6" name="eru_rb_9" type="radio" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_7" name="eru_rb_9" type="radio" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_8" name="eru_rb_9" type="radio" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_9" name="eru_rb_9" type="radio" class="form-control"></td>
						<td class="td-center"><input id="eru_rb_9_10" name="eru_rb_9" type="radio" class="form-control"></td>
						<th class="th-center" class="form-control">Muy Probable</th>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>¿Cual es su marca de helado favorita?</h4>
		</div>
		<div class="panel-body">
			<input id="psu_t_10" name="psu_t_10" type="text" class="form-control" placeholder="Escriba su respuesta...">
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>¿Cuales son sus tres marcas de helado?</h4>
		</div>
		<div class="panel-body">
			<div class="input-group">
				<span class="input-group-addon">1</span>
				<input id="psm_t_11_1" name="psm_t_11_1" type="text" class="form-control" placeholder="Escriba su respuesta...">
			</div>
			<div class="input-group">
				<span class="input-group-addon">2</span>
				<input id="psm_t_11_2" name="psm_t_11_2" type="text" class="form-control" placeholder="Escriba su respuesta...">
			</div>
			<div class="input-group">
				<span class="input-group-addon">3</span>
				<input id="psm_t_11_3" name="psm_t_11_3" type="text" class="form-control" placeholder="Escriba su respuesta...">
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>¿Que es lo que mas le gusta de su helado favorito?</h4>
		</div>
		<div class="panel-body">
			<textarea name="psc_ta_12" id="psc_ta_12" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>¿Cuando fue el ultimo dia y hora en comer su helado?</h4>
		</div>
		<div class="panel-body">
			<label for="pfh_s_date_13">Fecha:</label>
			<input id="pfh_s_date_13" name="pfh_s_date_13" type="text" class="form-control" placeholder="Ingrese la fecha...">
			<label for="pfh_s_hour_13">Hora:</label>
			<div class="row">
				<div class="col col-sm-5">					
					<select name="pfh_s_hour13" id="pfh_s_hour_13" name="pfh_s_hour_13" class="form-control">
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
					<select name="pfh_s_minute13" id="pfh_s_minute_13" name="pfh_s_minute_13" class="form-control">
						<?php 
							$cero = "0";
							for ($i=0; $i<60; $i++) { 
								if ($i<10) {
									echo '<option value="'.$i.'">'.$cero.$i.'</option>';	
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
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h4>¿Cual es su hora favorita del dia para comer un helado?</h4>
		</div>
		<div class="panel-body">
			<label >Hora:</label>
			<div class="row">
				<div class="col col-sm-5">						
					<select id="psh_s_hour_14" name="psh_s_hour_14" class="form-control">
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
					<select id="psh_s_minute_14" name="psh_s_minute_14" class="form-control">
						<?php 
							$cero = "0";
							for ($i=0; $i<60; $i++) { 
								if ($i<10) {
									echo '<option value="'.$i.'">'.$cero.$i.'</option>';	
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

		</form>
	</div>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="javascript/prueba.js"></script>
</body>
</html>

