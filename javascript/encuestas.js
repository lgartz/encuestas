$(function(){
	alert("Hola amigos");
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

});