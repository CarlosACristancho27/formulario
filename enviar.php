<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];


$destinatario = "piratemankgn04@gmail.com";
$asunto = "Prueba de Envio de Formulario";

$carta = "De: $nombre, $apellido \n";
$carta .= "Cedula: $cedula \n";
$carta .= "Correo: $email \n";
$carta .= "Telefono: $telefono ";

mail($destinario, $asunto, $carta);
header('Location: mensaje.html')

?>