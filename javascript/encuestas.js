$(function(){	
	$("#clasificacion").sortable({
		beforeStop: function( event, ui ) {
			cambiarNumeros();
		}
	});

    $("#clasificacion").disableSelection();
    

    function cambiarNumeros(){
    	$lista =  $( "#clasificacion li div span" ).toArray();
		$num = 1;
		for (var i = 0; i < $lista.length; i++) {			
			if ((i%2) == 0){
				$lista[i].innerHTML = $num;
				$num = $num+1;
			};
		};	
    };
    $("#fecha1").datepicker({
    	showAnim: "drop",
    	changeMonth: true,
        changeYear: true,        
        dateFormat: "dd/mm/yy",
        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ]
    }
    );
    $("#fecha2").datepicker(
    	{
    	showAnim: "drop",
    	changeMonth: true,
        changeYear: true,        
        dateFormat: "dd/mm/yy",
        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
        monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ]
    });
    alert('Prueba Nueva');
});