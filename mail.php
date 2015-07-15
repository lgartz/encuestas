<?php
// El mensaje
$mensaje = "Línea 1\r\nLínea 2\r\nLínea 3";

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

echo $mensaje;

// Enviarlo
mail('luisarturo1989@gmail.com', 'Mi título', $mensaje);
?>