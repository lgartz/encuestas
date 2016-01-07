<?php
	// Se incluye la conexion
	include("conexion.php");
	// Crear connection
	$conn = connect_with_mysql("localhost","root","","encuestas");
	session_start();
	$encuesta = $_SESSION['idEncuesta'];
	$encuestado = $_SESSION['idEncuestado'];
	
	$psc_ta_239 = $_GET["psc_ta_239"];
	$id_psc_ta_239 = "psc_ta_239";
	getSqlInsertPsu($encuestado,$id_psc_ta_239,$psc_ta_239);
	$psc_ta_240 = $_GET["psc_ta_240"];
	$id_psc_ta_240 = "psc_ta_240";
	getSqlInsertPsu($encuestado,$id_psc_ta_240,$psc_ta_240);
	$psc_ta_241 = $_GET["psc_ta_241"];
	$id_psc_ta_241 = "psc_ta_241";
	getSqlInsertPsu($encuestado,$id_psc_ta_241,$psc_ta_241);
	$psc_ta_242 = $_GET["psc_ta_242"];
	$id_psc_ta_242 = "psc_ta_242";
	getSqlInsertPsu($encuestado,$id_psc_ta_242,$psc_ta_242);
	$psc_ta_243 = $_GET["psc_ta_243"];
	$id_psc_ta_243 = "psc_ta_243";
	getSqlInsertPsu($encuestado,$id_psc_ta_243,$psc_ta_243);
	$psc_ta_244 = $_GET["psc_ta_244"];
	$id_psc_ta_244 = "psc_ta_244";
	getSqlInsertPsu($encuestado,$id_psc_ta_244,$psc_ta_244);
	$psc_ta_245 = $_GET["psc_ta_245"];
	$id_psc_ta_245 = "psc_ta_245";
	getSqlInsertPsu($encuestado,$id_psc_ta_245,$psc_ta_245);
	$psc_ta_246 = $_GET["psc_ta_246"];
	$id_psc_ta_246 = "psc_ta_246";
	getSqlInsertPsu($encuestado,$id_psc_ta_246,$psc_ta_246);
	$psc_ta_247 = $_GET["psc_ta_247"];
	$id_psc_ta_247 = "psc_ta_247";
	getSqlInsertPsu($encuestado,$id_psc_ta_247,$psc_ta_247);
	$psc_ta_248 = $_GET["psc_ta_248"];
	$id_psc_ta_248 = "psc_ta_248";
	getSqlInsertPsu($encuestado,$id_psc_ta_248,$psc_ta_248);
	$psc_ta_249 = $_GET["psc_ta_249"];
	$id_psc_ta_249 = "psc_ta_249";
	getSqlInsertPsu($encuestado,$id_psc_ta_249,$psc_ta_249);
	$psc_ta_250 = $_GET["psc_ta_250"];
	$id_psc_ta_250 = "psc_ta_250";
	getSqlInsertPsu($encuestado,$id_psc_ta_250,$psc_ta_250);
	$psc_ta_251 = $_GET["psc_ta_251"];
	$id_psc_ta_251 = "psc_ta_251";
	getSqlInsertPsu($encuestado,$id_psc_ta_251,$psc_ta_251);
	$psc_ta_252 = $_GET["psc_ta_252"];
	$id_psc_ta_252 = "psc_ta_252";
	getSqlInsertPsu($encuestado,$id_psc_ta_252,$psc_ta_252);
	$psc_ta_253 = $_GET["psc_ta_253"];
	$id_psc_ta_253 = "psc_ta_253";
	getSqlInsertPsu($encuestado,$id_psc_ta_253,$psc_ta_253);
	$psc_ta_254 = $_GET["psc_ta_254"];
	$id_psc_ta_254 = "psc_ta_254";
	getSqlInsertPsu($encuestado,$id_psc_ta_254,$psc_ta_254);
	$psc_ta_255 = $_GET["psc_ta_255"];
	$id_psc_ta_255 = "psc_ta_255";
	getSqlInsertPsu($encuestado,$id_psc_ta_255,$psc_ta_255);
	$psc_ta_256 = $_GET["psc_ta_256"];
	$id_psc_ta_256 = "psc_ta_256";
	getSqlInsertPsu($encuestado,$id_psc_ta_256,$psc_ta_256);
	$psc_ta_257 = $_GET["psc_ta_257"];
	$id_psc_ta_257 = "psc_ta_257";
	getSqlInsertPsu($encuestado,$id_psc_ta_257,$psc_ta_257);
	$psc_ta_258 = $_GET["psc_ta_258"];
	$id_psc_ta_258 = "psc_ta_258";
	getSqlInsertPsu($encuestado,$id_psc_ta_258,$psc_ta_258);
	$psc_ta_259 = $_GET["psc_ta_259"];
	$id_psc_ta_259 = "psc_ta_259";
	getSqlInsertPsu($encuestado,$id_psc_ta_259,$psc_ta_259);
	$psc_ta_260 = $_GET["psc_ta_260"];
	$id_psc_ta_260 = "psc_ta_260";
	getSqlInsertPsu($encuestado,$id_psc_ta_260,$psc_ta_260);
	$psc_ta_261 = $_GET["psc_ta_261"];
	$id_psc_ta_261 = "psc_ta_261";
	getSqlInsertPsu($encuestado,$id_psc_ta_261,$psc_ta_261);
	$psc_ta_262 = $_GET["psc_ta_262"];
	$id_psc_ta_262 = "psc_ta_262";
	getSqlInsertPsu($encuestado,$id_psc_ta_262,$psc_ta_262);
	$psc_ta_263 = $_GET["psc_ta_263"];
	$id_psc_ta_263 = "psc_ta_263";
	getSqlInsertPsu($encuestado,$id_psc_ta_263,$psc_ta_263);
	$psc_ta_264 = $_GET["psc_ta_264"];
	$id_psc_ta_264 = "psc_ta_264";
	getSqlInsertPsu($encuestado,$id_psc_ta_264,$psc_ta_264);
	$psc_ta_265 = $_GET["psc_ta_265"];
	$id_psc_ta_265 = "psc_ta_265";
	getSqlInsertPsu($encuestado,$id_psc_ta_265,$psc_ta_265);
	$psc_ta_266 = $_GET["psc_ta_266"];
	$id_psc_ta_266 = "psc_ta_266";
	getSqlInsertPsu($encuestado,$id_psc_ta_266,$psc_ta_266);
	$psc_ta_267 = $_GET["psc_ta_267"];
	$id_psc_ta_267 = "psc_ta_267";
	getSqlInsertPsu($encuestado,$id_psc_ta_267,$psc_ta_267);
	$psc_ta_268 = $_GET["psc_ta_268"];
	$id_psc_ta_268 = "psc_ta_268";
	getSqlInsertPsu($encuestado,$id_psc_ta_268,$psc_ta_268);
	$psc_ta_269 = $_GET["psc_ta_269"];
	$id_psc_ta_269 = "psc_ta_269";
	getSqlInsertPsu($encuestado,$id_psc_ta_269,$psc_ta_269);
	$psc_ta_270 = $_GET["psc_ta_270"];
	$id_psc_ta_270 = "psc_ta_270";
	getSqlInsertPsu($encuestado,$id_psc_ta_270,$psc_ta_270);
	$psc_ta_271 = $_GET["psc_ta_271"];
	$id_psc_ta_271 = "psc_ta_271";
	getSqlInsertPsu($encuestado,$id_psc_ta_271,$psc_ta_271);
	$psc_ta_272 = $_GET["psc_ta_272"];
	$id_psc_ta_272 = "psc_ta_272";
	getSqlInsertPsu($encuestado,$id_psc_ta_272,$psc_ta_272);
	$psc_ta_273 = $_GET["psc_ta_273"];
	$id_psc_ta_273 = "psc_ta_273";
	getSqlInsertPsu($encuestado,$id_psc_ta_273,$psc_ta_273);
	$psc_ta_274 = $_GET["psc_ta_274"];
	$id_psc_ta_274 = "psc_ta_274";
	getSqlInsertPsu($encuestado,$id_psc_ta_274,$psc_ta_274);
	$psc_ta_275 = $_GET["psc_ta_275"];
	$id_psc_ta_275 = "psc_ta_275";
	getSqlInsertPsu($encuestado,$id_psc_ta_275,$psc_ta_275);
	$psc_ta_276 = $_GET["psc_ta_276"];
	$id_psc_ta_276 = "psc_ta_276";
	getSqlInsertPsu($encuestado,$id_psc_ta_276,$psc_ta_276);
	$psc_ta_277 = $_GET["psc_ta_277"];
	$id_psc_ta_277 = "psc_ta_277";
	getSqlInsertPsu($encuestado,$id_psc_ta_277,$psc_ta_277);
	$psc_ta_278 = $_GET["psc_ta_278"];
	$id_psc_ta_278 = "psc_ta_278";
	getSqlInsertPsu($encuestado,$id_psc_ta_278,$psc_ta_278);
	$psc_ta_279 = $_GET["psc_ta_279"];
	$id_psc_ta_279 = "psc_ta_279";
	getSqlInsertPsu($encuestado,$id_psc_ta_279,$psc_ta_279);
	$psc_ta_280 = $_GET["psc_ta_280"];
	$id_psc_ta_280 = "psc_ta_280";
	getSqlInsertPsu($encuestado,$id_psc_ta_280,$psc_ta_280);
	$psc_ta_281 = $_GET["psc_ta_281"];
	$id_psc_ta_281 = "psc_ta_281";
	getSqlInsertPsu($encuestado,$id_psc_ta_281,$psc_ta_281);
	$psc_ta_282 = $_GET["psc_ta_282"];
	$id_psc_ta_282 = "psc_ta_282";
	getSqlInsertPsu($encuestado,$id_psc_ta_282,$psc_ta_282);
	$psc_ta_283 = $_GET["psc_ta_283"];
	$id_psc_ta_283 = "psc_ta_283";
	getSqlInsertPsu($encuestado,$id_psc_ta_283,$psc_ta_283);
	$psc_ta_284 = $_GET["psc_ta_284"];
	$id_psc_ta_284 = "psc_ta_284";
	getSqlInsertPsu($encuestado,$id_psc_ta_284,$psc_ta_284);
	$psc_ta_285 = $_GET["psc_ta_285"];
	$id_psc_ta_285 = "psc_ta_285";
	getSqlInsertPsu($encuestado,$id_psc_ta_285,$psc_ta_285);
	$psc_ta_286 = $_GET["psc_ta_286"];
	$id_psc_ta_286 = "psc_ta_286";
	getSqlInsertPsu($encuestado,$id_psc_ta_286,$psc_ta_286);
	$psc_ta_287 = $_GET["psc_ta_287"];
	$id_psc_ta_287 = "psc_ta_287";
	getSqlInsertPsu($encuestado,$id_psc_ta_287,$psc_ta_287);
	$psc_ta_288 = $_GET["psc_ta_288"];
	$id_psc_ta_288 = "psc_ta_288";
	getSqlInsertPsu($encuestado,$id_psc_ta_288,$psc_ta_288);
	$psc_ta_289 = $_GET["psc_ta_289"];
	$id_psc_ta_289 = "psc_ta_289";
	getSqlInsertPsu($encuestado,$id_psc_ta_289,$psc_ta_289);
	$psc_ta_290 = $_GET["psc_ta_290"];
	$id_psc_ta_290 = "psc_ta_290";
	getSqlInsertPsu($encuestado,$id_psc_ta_290,$psc_ta_290);
	$psc_ta_291 = $_GET["psc_ta_291"];
	$id_psc_ta_291 = "psc_ta_291";
	getSqlInsertPsu($encuestado,$id_psc_ta_291,$psc_ta_291);
	$psc_ta_292 = $_GET["psc_ta_292"];
	$id_psc_ta_292 = "psc_ta_292";
	getSqlInsertPsu($encuestado,$id_psc_ta_292,$psc_ta_292);
	$psc_ta_293 = $_GET["psc_ta_293"];
	$id_psc_ta_293 = "psc_ta_293";
	getSqlInsertPsu($encuestado,$id_psc_ta_293,$psc_ta_293);
	$psc_ta_294 = $_GET["psc_ta_294"];
	$id_psc_ta_294 = "psc_ta_294";
	getSqlInsertPsu($encuestado,$id_psc_ta_294,$psc_ta_294);
	$psc_ta_295 = $_GET["psc_ta_295"];
	$id_psc_ta_295 = "psc_ta_295";
	getSqlInsertPsu($encuestado,$id_psc_ta_295,$psc_ta_295);
	$psc_ta_296 = $_GET["psc_ta_296"];
	$id_psc_ta_296 = "psc_ta_296";
	getSqlInsertPsu($encuestado,$id_psc_ta_296,$psc_ta_296);
	$psc_ta_297 = $_GET["psc_ta_297"];
	$id_psc_ta_297 = "psc_ta_297";
	getSqlInsertPsu($encuestado,$id_psc_ta_297,$psc_ta_297);
	$psc_ta_298 = $_GET["psc_ta_298"];
	$id_psc_ta_298 = "psc_ta_298";
	getSqlInsertPsu($encuestado,$id_psc_ta_298,$psc_ta_298);
	$psc_ta_299 = $_GET["psc_ta_299"];
	$id_psc_ta_299 = "psc_ta_299";
	getSqlInsertPsu($encuestado,$id_psc_ta_299,$psc_ta_299);
	$psc_ta_300 = $_GET["psc_ta_300"];
	$id_psc_ta_300 = "psc_ta_300";
	getSqlInsertPsu($encuestado,$id_psc_ta_300,$psc_ta_300);
	$psc_ta_301 = $_GET["psc_ta_301"];
	$id_psc_ta_301 = "psc_ta_301";
	getSqlInsertPsu($encuestado,$id_psc_ta_301,$psc_ta_301);
	$psc_ta_302 = $_GET["psc_ta_302"];
	$id_psc_ta_302 = "psc_ta_302";
	getSqlInsertPsu($encuestado,$id_psc_ta_302,$psc_ta_302);
	$psc_ta_303 = $_GET["psc_ta_303"];
	$id_psc_ta_303 = "psc_ta_303";
	getSqlInsertPsu($encuestado,$id_psc_ta_303,$psc_ta_303);
	$psc_ta_304 = $_GET["psc_ta_304"];
	$id_psc_ta_304 = "psc_ta_304";
	getSqlInsertPsu($encuestado,$id_psc_ta_304,$psc_ta_304);
	$psc_ta_305 = $_GET["psc_ta_305"];
	$id_psc_ta_305 = "psc_ta_305";
	getSqlInsertPsu($encuestado,$id_psc_ta_305,$psc_ta_305);
	$psc_ta_306 = $_GET["psc_ta_306"];
	$id_psc_ta_306 = "psc_ta_306";
	getSqlInsertPsu($encuestado,$id_psc_ta_306,$psc_ta_306);
	$psc_ta_307 = $_GET["psc_ta_307"];
	$id_psc_ta_307 = "psc_ta_307";
	getSqlInsertPsu($encuestado,$id_psc_ta_307,$psc_ta_307);
	$psc_ta_308 = $_GET["psc_ta_308"];
	$id_psc_ta_308 = "psc_ta_308";
	getSqlInsertPsu($encuestado,$id_psc_ta_308,$psc_ta_308);
	$psc_ta_309 = $_GET["psc_ta_309"];
	$id_psc_ta_309 = "psc_ta_309";
	getSqlInsertPsu($encuestado,$id_psc_ta_309,$psc_ta_309);
	$psc_ta_310 = $_GET["psc_ta_310"];
	$id_psc_ta_310 = "psc_ta_310";
	getSqlInsertPsu($encuestado,$id_psc_ta_310,$psc_ta_310);
	$psc_ta_311 = $_GET["psc_ta_311"];
	$id_psc_ta_311 = "psc_ta_311";
	getSqlInsertPsu($encuestado,$id_psc_ta_311,$psc_ta_311);
	$psc_ta_312 = $_GET["psc_ta_312"];
	$id_psc_ta_312 = "psc_ta_312";
	getSqlInsertPsu($encuestado,$id_psc_ta_312,$psc_ta_312);
	$psc_ta_313 = $_GET["psc_ta_313"];
	$id_psc_ta_313 = "psc_ta_313";
	getSqlInsertPsu($encuestado,$id_psc_ta_313,$psc_ta_313);
	$psc_ta_314 = $_GET["psc_ta_314"];
	$id_psc_ta_314 = "psc_ta_314";
	getSqlInsertPsu($encuestado,$id_psc_ta_314,$psc_ta_314);
	$psc_ta_315 = $_GET["psc_ta_315"];
	$id_psc_ta_315 = "psc_ta_315";
	getSqlInsertPsu($encuestado,$id_psc_ta_315,$psc_ta_315);
	$psc_ta_316 = $_GET["psc_ta_316"];
	$id_psc_ta_316 = "psc_ta_316";
	getSqlInsertPsu($encuestado,$id_psc_ta_316,$psc_ta_316);
	$psc_ta_317 = $_GET["psc_ta_317"];
	$id_psc_ta_317 = "psc_ta_317";
	getSqlInsertPsu($encuestado,$id_psc_ta_317,$psc_ta_317);
	$psc_ta_318 = $_GET["psc_ta_318"];
	$id_psc_ta_318 = "psc_ta_318";
	getSqlInsertPsu($encuestado,$id_psc_ta_318,$psc_ta_318);
	$psc_ta_319 = $_GET["psc_ta_319"];
	$id_psc_ta_319 = "psc_ta_319";
	getSqlInsertPsu($encuestado,$id_psc_ta_319,$psc_ta_319);
	$psc_ta_320 = $_GET["psc_ta_320"];
	$id_psc_ta_320 = "psc_ta_320";
	getSqlInsertPsu($encuestado,$id_psc_ta_320,$psc_ta_320);
	$psc_ta_321 = $_GET["psc_ta_321"];
	$id_psc_ta_321 = "psc_ta_321";
	getSqlInsertPsu($encuestado,$id_psc_ta_321,$psc_ta_321);
	$psc_ta_322 = $_GET["psc_ta_322"];
	$id_psc_ta_322 = "psc_ta_322";
	getSqlInsertPsu($encuestado,$id_psc_ta_322,$psc_ta_322);
	$psc_ta_323 = $_GET["psc_ta_323"];
	$id_psc_ta_323 = "psc_ta_323";
	getSqlInsertPsu($encuestado,$id_psc_ta_323,$psc_ta_323);
	$psc_ta_324 = $_GET["psc_ta_324"];
	$id_psc_ta_324 = "psc_ta_324";
	getSqlInsertPsu($encuestado,$id_psc_ta_324,$psc_ta_324);
	$psc_ta_325 = $_GET["psc_ta_325"];
	$id_psc_ta_325 = "psc_ta_325";
	getSqlInsertPsu($encuestado,$id_psc_ta_325,$psc_ta_325);
	$psc_ta_326 = $_GET["psc_ta_326"];
	$id_psc_ta_326 = "psc_ta_326";
	getSqlInsertPsu($encuestado,$id_psc_ta_326,$psc_ta_326);
	$psc_ta_327 = $_GET["psc_ta_327"];
	$id_psc_ta_327 = "psc_ta_327";
	getSqlInsertPsu($encuestado,$id_psc_ta_327,$psc_ta_327);
	$psc_ta_328 = $_GET["psc_ta_328"];
	$id_psc_ta_328 = "psc_ta_328";
	getSqlInsertPsu($encuestado,$id_psc_ta_328,$psc_ta_328);
	$psc_ta_329 = $_GET["psc_ta_329"];
	$id_psc_ta_329 = "psc_ta_329";
	getSqlInsertPsu($encuestado,$id_psc_ta_329,$psc_ta_329);
	$psc_ta_330 = $_GET["psc_ta_330"];
	$id_psc_ta_330 = "psc_ta_330";
	getSqlInsertPsu($encuestado,$id_psc_ta_330,$psc_ta_330);	
	// Cerrar Conexion
	$sql = "UPDATE encuestado_has_encuesta SET encuestado_has_encuesta_respuesta = '1' WHERE encuestado_id = '".$encuestado."' AND encuesta_id = '".$encuesta."';";
	insert($sql);
	close_connect_with_mysql($conn);
	
	function getSqlInsertSmu($encuestado, $opcion){
		$sql = "INSERT INTO ressmu (ressmu_encuestado_id, ressmu_opsmu_id) VALUES ('".$encuestado."','".$opcion."');";
		insert($sql);
	}
	
	function getSqlInsertSmr($encuestado, $opciones){
		$tam = count($opciones);
		for($i = 0; $i < $tam; $i++) {
	    	$sql = "INSERT INTO ressmu (ressmu_encuestado_id, ressmu_opsmu_id) VALUES ('".$encuestado."','".$opciones[$i]."');";
	    	insert($sql);
		}
	}
	
	function getSqlInsertEru($encuestado, $opcion){
		$value = explode("_",$opcion);
		$sql = "INSERT INTO reseru(reseru_pregunta_id, reseru_encuestado_id, reseru_valor) VALUES ('".$value[0]."_".$value[1]."_".$value[2]."','".$encuestado."','".$value[3]."');";
		insert($sql);
	}
	
	function getSqlInsertPsu ($encuestado, $pregunta, $comentario){
		$sql = "INSERT INTO respsu (respsu_encuestado_id, respsu_pregunta_id, respsu_id, respsu_comentario) VALUES ('".$encuestado."','".$pregunta."',null,'".$comentario."');";
		insert($sql);
	}
	
	function getSqlInsertPsm ($encuestado, $pregunta, $comentario){
		$value = explode("_",$pregunta);
		$sql = "INSERT INTO respsu (respsu_encuestado_id, respsu_pregunta_id, respsu_id, respsu_comentario) VALUES ('".$encuestado."','".$value[0]."_".$value[1]."_".$value[2]."','".$pregunta."','".$comentario."');";
		insert($sql);
	}
	
	function getSqlInsertPfh ($encuestado, $opcion){
		$value = explode("_",$opcion);
		$fecha = $_GET[$value[0]."_".$value[1]."_date_".$value[2]];
		$hora = $_GET[$value[0]."_".$value[1]."_hour_".$value[2]];
		$minuto = $_GET[$value[0]."_".$value[1]."_minute_".$value[2]];
		$sql = "INSERT INTO respfh(respfh_pregunta_id, respfh_encuestado_id, respfh_fecha, respfh_hora) VALUES ('".$opcion."','".$encuestado."','".$fecha."','".$hora.":".$minuto."');";
		insert($sql);
	}
	
	function getSqlInsertPsf ($encuestado, $opcion){
		$value = explode("_",$opcion);
		$fecha = $_GET[$value[0]."_".$value[1]."_date_".$value[2]];
		$sql = "INSERT INTO respfh(respfh_pregunta_id, respfh_encuestado_id, respfh_fecha, respfh_hora) VALUES ('".$opcion."','".$encuestado."','".$fecha."',null);";
		insert($sql);
	}
	
	function getSqlInsertPsh ($encuestado, $opcion){
		$value = explode("_",$opcion);
		$hora = $_GET[$value[0]."_".$value[1]."_hour_".$value[2]];
		$minuto = $_GET[$value[0]."_".$value[1]."_minute_".$value[2]];
		$sql = "INSERT INTO respfh(respfh_pregunta_id, respfh_encuestado_id, respfh_fecha, respfh_hora) VALUES ('".$opcion."','".$encuestado."',null,'".$hora.":".$minuto."');";
		insert($sql);
	}
	
	function getSqlInsertMmr ($encuestado, $opcion){
		$sql = "INSERT INTO resmmr(resmmr_opmmr_id, resmmr_encuestado_id) VALUES ('".$opcion."','".$encuestado."');";
		insert($sql);
	}
	
	function getSqlInsertMmrCb ($encuestado, $opciones){
		$tam = count($opciones);
		for($i = 0; $i < $tam; $i++) {
	    	$sql = "INSERT INTO resmmr(resmmr_opmmr_id, resmmr_encuestado_id) VALUES ('".$opciones[$i]."','".$encuestado."');";
	    	insert($sql);
		}
	}
	
	function getSqlInsertMmrS ($encuestado, $opcion){
		$sql = "INSERT INTO resmmrs(resmmrs_opmmrs_id, resmmrs_encuestado_id) VALUES ('".$opcion."','".$encuestado."');";
		insert($sql);	
	}
	
	function insert ($sql){
		if (mysql_query($sql)) {
			return true;
		}else{
			return false;	
		}			
	}
	
	header('Location: sucess.php');
?>