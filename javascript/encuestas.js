$(function(){	
	$("#loc_ul_8").sortable({
		beforeStop: function( event, ui ) {
			cambiarNumeros("#loc_ul_8");
		}
	});

    $("#loc_ul_8").disableSelection();
    
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
    
    $("#pfh_s_date_13").datepicker({
    	showAnim: "drop",
    	changeMonth: true,
        changeYear: true,        
        dateFormat: "dd/mm/yy",
        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ]
    }
    );
    
    $("#psh_s_date_14").datepicker(
    	{
    	showAnim: "drop",
    	changeMonth: true,
        changeYear: true,        
        dateFormat: "dd/mm/yy",
        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ]
    });
    
    alert('Prueba Nueva --');
});