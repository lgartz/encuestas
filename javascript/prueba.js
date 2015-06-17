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
    
    
    $("#enviar").click(function() {
	  validarDatosObligatorios();
	  return false;
	});
	
	function validarDatosObligatorios(){
	
		
			
		if ($("input[name='smu_rb_1']:checked").length == 0) {
	      		$("#panel_smu_rb_1").removeClass( "panel-primary" );
	      		$("#panel_smu_rb_1").addClass( "panel-danger" );
	      		$("#panel_head_smu_rb_1 h4 small b").removeClass("message_error")
	   	}else{
	   		$("#panel_smu_rb_1").removeClass( "panel-danger" );
	      		$("#panel_smu_rb_1").addClass( "panel-primary" );
	      		$("#panel_head_smu_rb_1 h4 small b").addClass("message_error")
	   	}
	   		
	   	
	 
		
	   		
	   	if($("select[name='smu_s_2']").val()==""){
	   		$("#panel_smu_s_2").removeClass( "panel-primary" );
	      		$("#panel_smu_s_2").addClass( "panel-danger" );
	      		$("#panel_head_smu_s_2 h4 small b").removeClass("message_error")
	   	}else{
	   		$("#panel_smu_s_2").removeClass( "panel-danger" );
	   		$("#panel_smu_s_2").addClass( "panel-primary" );	        		
	      		$("#panel_head_smu_s_2 h4 small b").addClass("message_error")
	   	}
	   		
	   	
	 
		
	   		
	   	if($("input[name='smr_cb_3']:checked").length == 0){
	   		$("#panel_smr_cb_3").removeClass( "panel-primary" );
	      		$("#panel_smr_cb_3").addClass( "panel-danger" );
	      		$("#panel_head_smr_cb_3 h4 small b").removeClass("message_error")
	   	}else{
	   		$("#panel_smr_cb_3").removeClass( "panel-danger" );
	      		$("#panel_smr_cb_3").addClass( "panel-primary" );
	      		$("#panel_head_smr_cb_3 h4 small b").addClass("message_error")
	   	}
	   		
	   	
	 
		
	   		
	   	if($("select[name='smr_sm_4'] option:selected").length == 0){
	   		$("#panel_smr_sm_4").removeClass( "panel-primary" );
	      		$("#panel_smr_sm_4").addClass( "panel-danger" );
	      		$("#panel_head_smr_sm_4 h4 small b").removeClass("message_error")
	   	}else{
	   		$("#panel_smr_sm_4").removeClass( "panel-danger" );
	      		$("#panel_smr_sm_4").addClass( "panel-primary" );
	      		$("#panel_head_smr_sm_4 h4 small b").addClass("message_error")
	   	}
	   		
	   	
	 
		
	   		
	   	if ($("input[name='mmr_rb_5_1']:checked").length == 0||$("input[name='mmr_rb_5_2']:checked").length == 0||$("input[name='mmr_rb_5_3']:checked").length == 0||$("input[name='mmr_rb_5_4']:checked").length == 0) {
       		$("#panel_mmr_rb_5").removeClass( "panel-primary" );
        	$("#panel_mmr_rb_5").addClass( "panel-danger" );
        	$("#panel_head_mmr_rb_5 h4 small b").removeClass("message_error")
    	}else{
    		$("#panel_mmr_rb_5").removeClass( "panel-danger" );
        	$("#panel_mmr_rb_5").addClass( "panel-primary" );
        	$("#panel_head_mmr_rb_5 h4 small b").addClass("message_error")
    	}
    	
	 
		
    	
    	
	 
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