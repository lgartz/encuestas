<?php
// El mensaje
$mensaje = "L�nea 1\r\nL�nea 2\r\nL�nea 3";

// Si cualquier l�nea es m�s larga de 70 caracteres, se deber�a usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

echo $mensaje;

// Enviarlo
mail('luisarturo1989@gmail.com', 'Mi t�tulo', $mensaje);
?>