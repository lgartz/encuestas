$(function(){
	
	$("#pfh_s_date_28").datepicker({
    	showAnim: "drop",
    	changeMonth: true,
        changeYear: true,        
        dateFormat: "dd/mm/yy",
        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ]
    });
	$("#psf_s_date_29").datepicker({
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
		if ($("input[name='smu_rb_16']:checked").length == 0) {
	      	$("#panel_smu_rb_16").removeClass( "panel-primary" );
	      	$("#panel_smu_rb_16").addClass( "panel-danger" );
	      	$("#panel_head_smu_rb_16 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_smu_rb_16").removeClass( "panel-danger" );
	      	$("#panel_smu_rb_16").addClass( "panel-primary" );
	      	$("#panel_head_smu_rb_16 h4 small b").addClass("message_error");
	   	}
	   	if($("select[name='smu_s_17']").val()==""){
	   		$("#panel_smu_s_17").removeClass( "panel-primary" );
	      	$("#panel_smu_s_17").addClass( "panel-danger" );
	      	$("#panel_head_smu_s_17 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_smu_s_17").removeClass( "panel-danger" );
	   		$("#panel_smu_s_17").addClass( "panel-primary" );	        		
	      	$("#panel_head_smu_s_17 h4 small b").addClass("message_error");
	   	}
	   	if($("input[name='smr_cb_18[]']:checked").length == 0){
	   		$("#panel_smr_cb_18").removeClass( "panel-primary" );
	      	$("#panel_smr_cb_18").addClass( "panel-danger" );
	      	$("#panel_head_smr_cb_18 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_smr_cb_18").removeClass( "panel-danger" );
	      	$("#panel_smr_cb_18").addClass( "panel-primary" );
	      	$("#panel_head_smr_cb_18 h4 small b").addClass("message_error");
	   	}
	   	if($("select[name='smr_sm_19[]'] option:selected").length == 0){
	   		$("#panel_smr_sm_19").removeClass( "panel-primary" );
	      	$("#panel_smr_sm_19").addClass( "panel-danger" );
	      	$("#panel_head_smr_sm_19 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_smr_sm_19").removeClass( "panel-danger" );
	      	$("#panel_smr_sm_19").addClass( "panel-primary" );
	      	$("#panel_head_smr_sm_19 h4 small b").addClass("message_error");
	   	}
		if($("input[name='mmr_rb_20_1']:checked").length == 0||$("input[name='mmr_rb_20_2']:checked").length == 0||$("input[name='mmr_rb_20_3']:checked").length == 0||$("input[name='mmr_rb_20_4']:checked").length == 0){
			$("#panel_mmr_rb_20").removeClass( "panel-primary" );
	      	$("#panel_mmr_rb_20").addClass( "panel-danger" );
	      	$("#panel_head_mmr_rb_20 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_rb_20").removeClass( "panel-danger" );
	      	$("#panel_mmr_rb_20").addClass( "panel-primary" );
	      	$("#panel_head_mmr_rb_20 h4 small b").addClass("message_error");
		}
		if($("input[name='mmr_cb_21_1[]']:checked").length == 0||$("input[name='mmr_cb_21_2[]']:checked").length == 0||$("input[name='mmr_cb_21_3[]']:checked").length == 0){
			$("#panel_mmr_cb_21").removeClass( "panel-primary" );
	      	$("#panel_mmr_cb_21").addClass( "panel-danger" );
	      	$("#panel_head_mmr_cb_21 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_cb_21").removeClass( "panel-danger" );
	      	$("#panel_mmr_cb_21").addClass( "panel-primary" );
	      	$("#panel_head_mmr_cb_21 h4 small b").addClass("message_error");
		}
		if($("select[name='mmr_s_22_1_1']").val() == ""||$("select[name='mmr_s_22_1_2']").val() == ""||$("select[name='mmr_s_22_2_1']").val() == ""||$("select[name='mmr_s_22_2_2']").val() == ""||$("select[name='mmr_s_22_3_1']").val() == ""||$("select[name='mmr_s_22_3_2']").val() == ""||$("select[name='mmr_s_22_4_1']").val() == ""||$("select[name='mmr_s_22_4_2']").val() == ""||$("select[name='mmr_s_22_5_1']").val() == ""||$("select[name='mmr_s_22_5_2']").val() == ""){
			$("#panel_mmr_s_22").removeClass( "panel-primary" );
	      	$("#panel_mmr_s_22").addClass( "panel-danger" );
	      	$("#panel_head_mmr_s_22 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_mmr_s_22").removeClass( "panel-danger" );
	      	$("#panel_mmr_s_22").addClass( "panel-primary" );
	      	$("#panel_head_mmr_s_22 h4 small b").addClass("message_error");
		}
		if ($("input[name='eru_rb_24']:checked").length == 0) {
	      	$("#panel_eru_rb_24").removeClass( "panel-primary" );
	      	$("#panel_eru_rb_24").addClass( "panel-danger" );
	      	$("#panel_head_eru_rb_24 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_eru_rb_24").removeClass( "panel-danger" );
	      	$("#panel_eru_rb_24").addClass( "panel-primary" );
	      	$("#panel_head_eru_rb_24 h4 small b").addClass("message_error");
	   	}
		if ($("input[name='psu_t_25']").val().trim() == "") {
	      	$("#panel_psu_t_25").removeClass( "panel-primary" );
	      	$("#panel_psu_t_25").addClass( "panel-danger" );
	      	$("#panel_head_psu_t_25 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psu_t_25").removeClass( "panel-danger" );
	      	$("#panel_psu_t_25").addClass( "panel-primary" );
	      	$("#panel_head_psu_t_25 h4 small b").addClass("message_error");
	   	}
		if($("input[name='psm_t_26_1']").val().trim() == ""||$("input[name='psm_t_26_2']").val().trim() == ""||$("input[name='psm_t_26_3']").val().trim() == ""){
			$("#panel_psm_t_26").removeClass( "panel-primary" );
	      	$("#panel_psm_t_26").addClass( "panel-danger" );
	      	$("#panel_head_psm_t_26 h4 small b").removeClass("message_error");
	      	resultado = false;
		}else{
			$("#panel_psm_t_26").removeClass( "panel-danger" );
	      	$("#panel_psm_t_26").addClass( "panel-primary" );
	      	$("#panel_head_psm_t_26 h4 small b").addClass("message_error");
		}
	   	if ($("textarea[name='psc_ta_27']").val().trim() == "") {
	      	$("#panel_psc_ta_27").removeClass( "panel-primary" );
	      	$("#panel_psc_ta_27").addClass( "panel-danger" );
	      	$("#panel_head_psc_ta_27 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psc_ta_27").removeClass( "panel-danger" );
	      	$("#panel_psc_ta_27").addClass( "panel-primary" );
	      	$("#panel_head_psc_ta_27 h4 small b").addClass("message_error");
	   	}
	   	if ($("input[name='pfh_s_date_28']").val().trim() == "" || $("select[name='pfh_s_hour_28']").val()=="" || $("select[name='pfh_s_minute_28']").val()=="") {
	   		$("#panel_pfh_s_28").removeClass( "panel-primary" );
	      	$("#panel_pfh_s_28").addClass( "panel-danger" );
	      	$("#panel_head_pfh_s_28 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_pfh_s_28").removeClass( "panel-danger" );
	      	$("#panel_pfh_s_28").addClass( "panel-primary" );
	      	$("#panel_head_pfh_s_28 h4 small b").addClass("message_error");
	   	}
	   	if ($("input[name='psf_s_date_29']").val().trim() == "") {
	   		$("#panel_psf_s_29").removeClass( "panel-primary" );
	      	$("#panel_psf_s_29").addClass( "panel-danger" );
	      	$("#panel_head_psf_s_29 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psf_s_29").removeClass( "panel-danger" );
	      	$("#panel_psf_s_29").addClass( "panel-primary" );
	      	$("#panel_head_psf_s_29 h4 small b").addClass("message_error");
	   	}
	   	if ($("select[name='psh_s_hour_30']").val()=="" || $("select[name='psh_s_minute_30']").val()=="") {
	   		$("#panel_psh_s_30").removeClass( "panel-primary" );
	      	$("#panel_psh_s_30").addClass( "panel-danger" );
	      	$("#panel_head_psh_s_30 h4 small b").removeClass("message_error");
	      	resultado = false;
	   	}else{
	   		$("#panel_psh_s_30").removeClass( "panel-danger" );
	      	$("#panel_psh_s_30").addClass( "panel-primary" );
	      	$("#panel_head_psh_s_30 h4 small b").addClass("message_error");
	   	}
		return resultado;
	}   
    
});