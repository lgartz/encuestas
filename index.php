<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Encuesta</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/encuestas.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Encuestas</a>
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
								<input id="fresa" name="optionsRadios" type="radio" checked>
								Fresa	
							</label>
						</div>
						<div class="radio">
							<label class="form-control">
								<input id="chicle" name="optionsRadios" type="radio" >
								Chicle
							</label>
						</div>
						<div class="radio">
							<label class="form-control">
								<input id="arequipe" name="optionsRadios" type="radio" >
								Arequipe
							</label>
						</div>
						<div class="radio" >
							<label class="form-control">
								<input id="arequipe" name="optionsRadios" type="radio" >
								Queso
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
						<select name="selectHelados" id="selectHelados" class="form-control">
							<option value="Fresa">Fresa</option>
							<option value="Arequipe">Arequipe</option>
							<option value="Chicle">Chicle</option>
							<option value="Queso">Queso</option>
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
								<input type="checkbox">
								Fresa						
							</label>
						</div>
						<div class="checkbox">
							<label class="form-control">
								<input type="checkbox">
								Chicle						
							</label>
						</div>
						<div class="checkbox">
							<label class="form-control">
								<input type="checkbox">
								Arequipe						
							</label>
						</div>
						<div class="checkbox">
							<label class="form-control">
								<input type="checkbox">
								Queso					
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
						<select multiple name="selectHelado" id="selectHelado" class="form-control">
							<option class="form-control">Fresa</option>
							<option class="form-control">Arequipe</option>
							<option class="form-control">Chicle</option>
							<option class="form-control">Queso</option>
						</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>¿Cual es su sabor de helado favorito para cada miembro de su familia?</h4>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover ">
								<tr class="active">
									<th class="th-center"></th>
									<th class="th-center">Arequipe</th>
									<th class="th-center">Fresa</th>
									<th class="th-center">Chicle</th>
									<th class="th-center">Queso</th>
									<th class="th-center">Coco</th>
								</tr>
								<tr>
									<th>Papa</th>
									<td class="td-center"><input id="papaRadio1" name="optionsRadios1" type="radio" class="form-control	"></td>
									<td class="td-center"><input id="papaRadio2" name="optionsRadios1" type="radio" class="form-control"></td>
									<td class="td-center"><input id="papaRadio3" name="optionsRadios1" type="radio" class="form-control"></td>
									<td class="td-center"><input id="papaRadio4" name="optionsRadios1" type="radio" class="form-control"></td>
									<td class="td-center"><input id="papaRadio5" name="optionsRadios1" type="radio" class="form-control"></td>
								</tr>
								<tr>
									<th>Mama</th>
									<td class="td-center"><input id="mamaRadio1" name="optionsRadios2" type="radio" class="form-control"></td>
									<td class="td-center"><input id="mamaRadio2" name="optionsRadios2" type="radio" class="form-control"></td>
									<td class="td-center"><input id="mamaRadio3" name="optionsRadios2" type="radio" class="form-control"></td>
									<td class="td-center"><input id="mamaRadio4" name="optionsRadios2" type="radio" class="form-control"></td>
									<td class="td-center"><input id="mamaRadio5" name="optionsRadios2" type="radio" class="form-control"></td>
								</tr>
								<tr>
									<th>Hermano</th>
									<td class="td-center"><input id="hermanoRadio1" name="optionsRadios3" type="radio" class="form-control"></td>
									<td class="td-center"><input id="hermanoRadio2" name="optionsRadios3" type="radio" class="form-control"></td>
									<td class="td-center"><input id="hermanoRadio3" name="optionsRadios3" type="radio" class="form-control"></td>
									<td class="td-center"><input id="hermanoRadio4" name="optionsRadios3" type="radio" class="form-control"></td>
									<td class="td-center"><input id="hermanoRadio5" name="optionsRadios3" type="radio" class="form-control"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>¿Cual es su sabor de helado favorito para cada miembro de su familia?</h4>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover ">
								<tr class="active">
									<th class="th-center"></th>
									<th class="th-center">Arequipe</th>
									<th class="th-center">Fresa</th>
									<th class="th-center">Chicle</th>
									<th class="th-center">Queso</th>
									<th class="th-center">Coco</th>
								</tr>
								<tr>
									<th>Papa</th>
									<td class="td-center"><input id="papaCheck1" type="checkbox" class="form-control	"></td>
									<td class="td-center"><input id="papaCheck2" type="checkbox" class="form-control"></td>
									<td class="td-center"><input id="papaCheck3" type="checkbox" class="form-control"></td>
									<td class="td-center"><input id="papaCheck4" type="checkbox" class="form-control"></td>
									<td class="td-center"><input id="papaCheck5" type="checkbox" class="form-control"></td>
								</tr>
								<tr>
									<th>Mama</th>
									<td class="td-center"><input id="mamaCheck1" type="checkbox" class="form-control"></td>
									<td class="td-center"><input id="mamaCheck2" type="checkbox" class="form-control"></td>
									<td class="td-center"><input id="mamaCheck3" type="checkbox" class="form-control"></td>
									<td class="td-center"><input id="mamaCheck4" type="checkbox" class="form-control"></td>
									<td class="td-center"><input id="mamaCheck5" type="checkbox" class="form-control"></td>
								</tr>
								<tr>
									<th>Hermano</th>
									<td class="td-center"><input id="hermanoCheck1" type="checkbox" class="form-control"></td>
									<td class="td-center"><input id="hermanoCheck2" type="checkbox" class="form-control"></td>
									<td class="td-center"><input id="hermanoCheck3" type="checkbox" class="form-control"></td>
									<td class="td-center"><input id="hermanoCheck4" type="checkbox" class="form-control"></td>
									<td class="td-center"><input id="hermanoCheck5" type="checkbox" class="form-control"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>Evalue las siguientes preguntas </h4>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover ">
								<tr class="active">
									<th class="th-center">Pregunta</th>
									<th class="th-center">Nada Importante</th>
									<th class="th-center">Poco Importante</th>
									<th class="th-center">Importante</th>
									<th class="th-center">Bastante Importante</th>
									<th class="th-center">Muy Importante</th>
								</tr>
								<tr>
									<th>1. ¿Que tan Importante es su Educacion?</th>
									<td class="td-center"><input id="educacion1" name="optionsRadios4" type="radio" class="form-control	"></td>
									<td class="td-center"><input id="educacion2" name="optionsRadios4" type="radio" class="form-control"></td>
									<td class="td-center"><input id="educacion3" name="optionsRadios4" type="radio" class="form-control"></td>
									<td class="td-center"><input id="educacion4" name="optionsRadios4" type="radio" class="form-control"></td>
									<td class="td-center"><input id="educacion5" name="optionsRadios4" type="radio" class="form-control"></td>
								</tr>
								<tr>
									<th>2. ¿Que tan Importante es su Familia?</th>
									<td class="td-center"><input id="familia1" name="optionsRadios5" type="radio" class="form-control"></td>
									<td class="td-center"><input id="familia2" name="optionsRadios5" type="radio" class="form-control"></td>
									<td class="td-center"><input id="familia3" name="optionsRadios5" type="radio" class="form-control"></td>
									<td class="td-center"><input id="familia4" name="optionsRadios5" type="radio" class="form-control"></td>
									<td class="td-center"><input id="familia5" name="optionsRadios5" type="radio" class="form-control"></td>
								</tr>
								<tr>
									<th>3. ¿Que tan Importante es su Religion?</th>
									<td class="td-center"><input id="religion1" name="optionsRadios6" type="radio" class="form-control"></td>
									<td class="td-center"><input id="religion2" name="optionsRadios6" type="radio" class="form-control"></td>
									<td class="td-center"><input id="religion3" name="optionsRadios6" type="radio" class="form-control"></td>
									<td class="td-center"><input id="religion4" name="optionsRadios6" type="radio" class="form-control"></td>
									<td class="td-center"><input id="religion5" name="optionsRadios6" type="radio" class="form-control"></td>
								</tr>
								<tr>
									<th>4. ¿Que tan Importante es su Ejercicio Fisico?</th>
									<td class="td-center"><input id="ejercicio1" name="optionsRadios7" type="radio" class="form-control"></td>
									<td class="td-center"><input id="ejercicio2" name="optionsRadios7" type="radio" class="form-control"></td>
									<td class="td-center"><input id="ejercicio3" name="optionsRadios7" type="radio" class="form-control"></td>
									<td class="td-center"><input id="ejercicio4" name="optionsRadios7" type="radio" class="form-control"></td>
									<td class="td-center"><input id="ejercicio5" name="optionsRadios7" type="radio" class="form-control"></td>
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
									<th class="th-center">Sabor</th>
									<th class="th-center">Textura</th>
									<th class="th-center">Sabor</th>
								</tr>
								<tr>
									<th>Chocolate</th>
									<td>
										<select name="textura" id="texturaChocolate" class="form-control">
											<option value="Liso">Liso</option>
											<option value="Rugoso">Rugoso</option>
											<option value="Esponjoso">Esponjoso</option>
										</select>
									</td>
									<td>
										<select name="sabor" id="saborChocolate" class="form-control">
											<option value="Dulce">Dulce</option>
											<option value="Amargo">Amargo</option>
											<option value="Agridulce">Agridulce</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>Fresa</th>
									<td>
										<select name="textura" id="texturaFresa" class="form-control">
											<option value="Liso">Liso</option>
											<option value="Rugoso">Rugoso</option>
											<option value="Esponjoso">Esponjoso</option>
										</select>
									</td>
									<td>
										<select name="sabor" id="saborFresa" class="form-control">
											<option value="Dulce">Dulce</option>
											<option value="Amargo">Amargo</option>
											<option value="Agridulce">Agridulce</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>Coco</th>
									<td>
										<select name="textura" id="texturaCoco" class="form-control">
											<option value="Liso">Liso</option>
											<option value="Rugoso">Rugoso</option>
											<option value="Esponjoso">Esponjoso</option>
										</select>
									</td>
									<td>
										<select name="sabor" id="saborCoco" class="form-control">
											<option value="Dulce">Dulce</option>
											<option value="Amargo">Amargo</option>
											<option value="Agridulce">Agridulce</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>Queso</th>
									<td>
										<select name="textura" id="texturaQueso" class="form-control">
											<option value="Liso">Liso</option>
											<option value="Rugoso">Rugoso</option>
											<option value="Esponjoso">Esponjoso</option>
										</select>
									</td>
									<td>
										<select name="sabor" id="saborQueso" class="form-control">
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
						<ul id="clasificacion" class="list-unstyled">
							<li>
								<div class="input-group">
								  <span class="input-group-addon" id="listArequipe">1</span>
								  <span class="form-control" aria-describedby="listArequipe">Arequipe</span>								  
								</div>
							</li>
							<li>
								<div class="input-group">
								  <span class="input-group-addon" id="listFresa">2</span>
								  <span class="form-control" aria-describedby="listFresa">Fresa</span>
								</div>
							</li>
							<li>
								<div class="input-group">
								  <span class="input-group-addon" id="listQueso">3</span>
								  <span class="form-control" aria-describedby="listQueso">Queso</span>
								</div>
							</li>
							<li>
								<div class="input-group">
								  <span class="input-group-addon" id="listCoco">4</span>
								  <span class="form-control" aria-describedby="listCoco">Coco</span>
								</div>
							</li>
							<li>
								<div class="input-group">
								  <span class="input-group-addon" id="listChocolate">5</span>
								  <span class="form-control" aria-describedby="listChocolate">Chocolate</span>
								</div>
							</li>
							<li>
								<div class="input-group">
								  <span class="input-group-addon" id="listLimon">6</span>
								  <span class="form-control" aria-describedby="listLimon">Limon</span>
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
									<td class="td-center"><input id="probabilidad0" name="optionsProbabilidad" type="radio" class="form-control"></td>
									<td class="td-center"><input id="probabilidad1" name="optionsProbabilidad" type="radio" class="form-control"></td>
									<td class="td-center"><input id="probabilidad2" name="optionsProbabilidad" type="radio" class="form-control"></td>
									<td class="td-center"><input id="probabilidad3" name="optionsProbabilidad" type="radio" class="form-control"></td>
									<td class="td-center"><input id="probabilidad4" name="optionsProbabilidad" type="radio" class="form-control"></td>
									<td class="td-center"><input id="probabilidad5" name="optionsProbabilidad" type="radio" class="form-control"></td>
									<td class="td-center"><input id="probabilidad6" name="optionsProbabilidad" type="radio" class="form-control"></td>
									<td class="td-center"><input id="probabilidad7" name="optionsProbabilidad" type="radio" class="form-control"></td>
									<td class="td-center"><input id="probabilidad8" name="optionsProbabilidad" type="radio" class="form-control"></td>
									<td class="td-center"><input id="probabilidad9" name="optionsProbabilidad" type="radio" class="form-control"></td>
									<td class="td-center"><input id="probabilidad10" name="optionsProbabilidad" type="radio" class="form-control"></td>
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
						<input id="marcaFavorita" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
							<span class="input-group-addon" >1</span>
							<input id="preg1" type="text" class="form-control" placeholder="Escriba su respuesta...">
						</div>
						<br/>
						<div class="input-group">
							<span class="input-group-addon" >2</span>
							<input id="preg12" type="text" class="form-control" placeholder="Escriba su respuesta...">
						</div>
						<br/>
						<div class="input-group">
							<span class="input-group-addon" >3</span>
							<input id="preg3" type="text" class="form-control" placeholder="Escriba su respuesta...">
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
						<textarea name="comentarios" id="comentarios" cols="30" rows="10" class="form-control" placeholder="Escriba su comentario..."></textarea>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>¿Cuando fue el ultimo dia y hora en comer su helado?</h4>
					</div>
					<div class="panel-body">
						<div class="visible-xs">
							<label for="fecha2">Fecha:</label>
							<input id="fecha2" type="text" class="form-control" placeholder="Escriba la fecha...">
							<label for="hora2">Hora:</label>
							<div class="col col-xs-12">
								<div class="col col-xs-5">
									<select name="hora2" id="hora2" class="form-control">
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
								<div class="col col-xs-2" >:</div>
								<div class="col col-xs-5">
									<select name="minuto2" id="minuto2" class="form-control">
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
						<div class="input-group hidden-xs">
							<div class="input-group-addon">Fecha:</div>
							<input id="fecha1" type="text" class="form-control" placeholder="Escriba la fecha...">
							<div class="input-group-addon" >Hora:</div>
							<select name="hora" id="hora" class="form-control">
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
							<div class="input-group-addon" >:</div>
							<select name="minuto" id="minuto" class="form-control">
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
			<button id="next" type="button" class="btn btn-primary btn-sm">
				Siguiente <span class="glyphicon glyphicon-forward"></span>
			</button>
		</form>
	</div>		
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="javascript/encuestas.js"></script>	
</body>
</html>