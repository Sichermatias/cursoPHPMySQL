<?php

$nombre_form = $_POST['nombre'];
$usuario_form = $_POST['usuario'];
$email_form = $_POST['email'];
$contrasenia_form = $_POST['contrasenia'];

$cuerpo_mail = "Nombre: " . $nombre_form . "\r\n"
. "Usuario: " . $usuario_form . "\r\n"
. "Correo Electronico: " . $email_form . "\r\n"
. "Gracias por haberte registrado en nuestra pagina!";

mail($email_form, "Registro exitoso!", $cuerpo_mail);

$conexion = mysqli_connect("localhost", "root", "", "php_inicial_entrega2") or exit ("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO usuarios VALUES (DEFAULT, '$nombre_form', '$usuario_form', '$email_form', '$contrasenia_form')");

mysqli_close($conexion);

?>