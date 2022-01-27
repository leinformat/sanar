<?php
if(isset($_POST['correo'])) {

// Datos del Correo de Destino y remitente
$email_to = "contacto@gruposanar.com.co";
$email_subject = $_POST['correo'];

// validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['correo']) ||
!isset($_POST['telefono']) ||
!isset($_POST['mensaje'])) {

header('location: ../index.php?error1');

die();
}

$email_message = "Grupo Preferencial Sanar Ips:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['correo'] . "\n";
$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP

@mail($email_to, $email_subject, $email_message);

header('location: ../index.php?error2#contacto');
}
?>