<?php  

// Llamando a los campos
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Datos para el correo
$destinatario = "contacto@amktradingsa.com";
$asunto = "Mensaje de Contacto | AMK Trading";

$carta = "De: $name \n";
$carta .= "Correo Electrónico: $email \n";
$carta .= "Teléfono: $phone \n";
$carta .= "Mensaje: $message";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensajenviado.html');

?>