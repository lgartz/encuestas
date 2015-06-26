$(function(){

	$("#loc_ul_8").sortable({
		beforeStop: function( event, ui ) {
			cambiarNumeros("#loc_ul_8");
		}
	});
	$("#loc_ul_8").disableSelection();
	
	$("#pfh_s_date_13").datepicker({
    	showAnim: "drop",
    	changeMonth: true,
        changeYear: true,        
        dateFormat: "dd/mm/yy",
        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ]
    });
	$("#psf_s_date_14").datepicker({
    	showAnim: "drop",
    	changeMonth: true,
        changeYear: true,        
        dateFormat: "dd/mm/yy",
        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ]
    });
    
    $( "#dialog-confirm" ).dialog({
      autoOpen: false,
      resizable: false,
      height:240,
      modal: true,
      buttons: {
        "Aceptar": function() {
          $( this ).dialog( "close" );
        }
      },
      show: {
        effect: "explode",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
    
    
    $("#enviar").click(function() {
	  result = validarDatosObligatorios();
	  if(!result){
	  	$("#dialog-confirm").dialog( "open" );
	  }
	  return result;
	});
	
	function validarDatosObligatorios(){
		resultado = true;
		if ($("input[name='smu_rb_1']:checked").length == 0) {
	      	$("#panel_smu_rb_1").removeClass( "panel-primary" );
	      	$("#panel_smu_rb_1").addClass( "panel-danger" );
	      	$("#panel_head_smu_rb_1 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_smu_rb_1").removeClass( "panel-danger" );
	      	$("#panel_smu_rb_1").addClass( "panel-primary" );
	      	$("#panel_head_smu_rb_1 h4 small b").addClass("message_error");
	   	}
	   	if($("select[name='smu_s_2']").val()==""){
	   		$("#panel_smu_s_2").removeClass( "panel-primary" );
	      	$("#panel_smu_s_2").addClass( "panel-danger" );
	      	$("#panel_head_smu_s_2 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_smu_s_2").removeClass( "panel-danger" );
	   		$("#panel_smu_s_2").addClass( "panel-primary" );	        		
	      	$("#panel_head_smu_s_2 h4 small b").addClass("message_error");
	   	}
	   	if($("input[name='smr_cb_3[]']:checked").length == 0){
	   		$("#panel_smr_cb_3").removeClass( "panel-primary" );
	      	$("#panel_smr_cb_3").addClass( "panel-danger" );
	      	$("#panel_head_smr_cb_3 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_smr_cb_3").removeClass( "panel-danger" );
	      	$("#panel_smr_cb_3").addClass( "panel-primary" );
	      	$("#panel_head_smr_cb_3 h4 small b").addClass("message_error");
	   	}
	   	if($("select[name='smr_sm_4[]'] option:selected").length == 0){
	   		$("#panel_smr_sm_4").removeClass( "panel-primary" );
	      	$("#panel_smr_sm_4").addClass( "panel-danger" );
	      	$("#panel_head_smr_sm_4 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_smr_sm_4").removeClass( "panel-danger" );
	      	$("#panel_smr_sm_4").addClass( "panel-primary" );
	      	$("#panel_head_smr_sm_4 h4 small b").addClass("message_error");
	   	}
		if($("input[name='mmr_rb_5_1']:checked").length == 0||$("input[name='mmr_rb_5_2']:checked").length == 0||$("input[name='mmr_rb_5_3']:checked").length == 0||$("input[name='mmr_rb_5_4']:checked").length == 0){
			$("#panel_mmr_rb_5").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_5").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_5 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_5").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_5").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_5 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_cb_6_1[]']:checked").length == 0||$("input[name='mmr_cb_6_2[]']:checked").length == 0||$("input[name='mmr_cb_6_3[]']:checked").length == 0){
			$("#panel_mmr_cb_6").removeClass( "panel-primary" );
	      	$("#panel_mmr_cb_6").addClass( "panel-danger" );
	      	$("#panel_head_mmr_cb_6 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_cb_6").removeClass( "panel-danger" );
	      	$("#panel_mmr_cb_6").addClass( "panel-primary" );
	      	$("#panel_head_mmr_cb_6 h4 small b").addClass("message_error");
		}
		if($("select[name='mmr_s_7_1_1']").val() == ""||$("select[name='mmr_s_7_1_2']").val() == ""||$("select[name='mmr_s_7_2_1']").val() == ""||$("select[name='mmr_s_7_2_2']").val() == ""||$("select[name='mmr_s_7_3_1']").val() == ""||$("select[name='mmr_s_7_3_2']").val() == ""||$("select[name='mmr_s_7_4_1']").val() == ""||$("select[name='mmr_s_7_4_2']").val() == ""||$("select[name='mmr_s_7_5_1']").val() == ""||$("select[name='mmr_s_7_5_2']").val() == ""){
			$("#panel_mmr_s_7").removeClass( "panel-primary" );
	      	$("#panel_mmr_s_7").addClass( "panel-danger" );
	      	$("#panel_head_mmr_s_7 h4 small b").removeClass("message_error");
		}else{
			$("#panel_mmr_s_7").removeClass( "panel-danger" );
	      	$("#panel_mmr_s_7").addClass( "panel-primary" );
	      	$("#panel_head_mmr_s_7 h4 small b").addClass("message_error");
		}
		if ($("input[name='eru_rb_9']:checked").length == 0) {
	      	$("#panel_eru_rb_9").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_9").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_9 h4 small b").removeClass("message_error");
	   	}else{
	   		$("#panel_eru_rb_9").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_9").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_9 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_10']").val().trim() == "") {
	      	$("#panel_psu_t_10").removeClass( "panel-primary" );
	      	$("#panel_psu_t_10").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_10 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_10").removeClass( "panel-danger" );
	      	$("#panel_psu_t_10").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_10 h4 small b").addClass("message_error");
	   	}
		if($("input[name='psm_t_11_1']").val().trim() == ""||$("input[name='psm_t_11_2']").val().trim() == ""||$("input[name='psm_t_11_3']").val().trim() == ""){
			$("#panel_psm_t_11").removeClass( "panel-primary" );
	      	$("#panel_psm_t_11").addClass( "panel-danger" );
	      	$("#panel_head_psm_t_11 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_psm_t_11").removeClass( "panel-danger" );
	      	$("#panel_psm_t_11").addClass( "panel-primary" );
	      	$("#panel_head_psm_t_11 h4 small b").addClass("message_error");
		}
	   	if ($("textarea[name='psc_ta_12']").val().trim() == "") {
	      	$("#panel_psc_ta_12").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_12").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_12 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_12").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_12").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_12 h4 small b").addClass("message_error");
	   	}
	   	if ($("input[name='pfh_s_date_13']").val().trim() == "" || $("select[name='pfh_s_hour_13']").val()=="" || $("select[name='pfh_s_minute_13']").val()=="") {
	   		$("#panel_pfh_s_13").removeClass( "panel-primary" );
	      	$("#panel_pfh_s_13").addClass( "panel-danger" );
	      	$("#panel_head_pfh_s_13 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_pfh_s_13").removeClass( "panel-danger" );
	      	$("#panel_pfh_s_13").addClass( "panel-primary" );
	      	$("#panel_head_pfh_s_13 h4 small b").addClass("message_error");
	   	}
	   	if ($("input[name='psf_s_date_14']").val().trim() == "") {
	   		$("#panel_psf_s_14").removeClass( "panel-primary" );
	      	$("#panel_psf_s_14").addClass( "panel-danger" );
	      	$("#panel_head_psf_s_14 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psf_s_14").removeClass( "panel-danger" );
	      	$("#panel_psf_s_14").addClass( "panel-primary" );
	      	$("#panel_head_psf_s_14 h4 small b").addClass("message_error");
	   	}
	   	if ($("select[name='psh_s_hour_15']").val()=="" || $("select[name='psh_s_minute_15']").val()=="") {
	   		$("#panel_psh_s_15").removeClass( "panel-primary" );
	      	$("#panel_psh_s_15").addClass( "panel-danger" );
	      	$("#panel_head_psh_s_15 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psh_s_15").removeClass( "panel-danger" );
	      	$("#panel_psh_s_15").addClass( "panel-primary" );
	      	$("#panel_head_psh_s_15 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}
	
	function cambiarNumeros(id){
    	$lista =  $( id+" li div span" ).toArray();
		$num = 1;
		for (var i = 0; i < $lista.length; i++) {			
			if ((i%2) == 0){
				$lista[i].innerHTML = $num;
				$num = $num+1;
			};
		};	
    };
    
    
    
});