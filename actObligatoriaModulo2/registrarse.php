<?php

$nombre_form = $_POST['nombre'];
$usuario_form = $_POST['usuario'];
$email_form = $_POST['email'];
$contrasenia_form = $_POST['contrasenia'];

$cuerpo_mail1 = "Nombre: " . $nombre_form . "\r\n"
. "Usuario: " . $usuario_form . "\r\n"
. "Correo Electronico: " . $email_form . "\r\n"
. "Gracias por haberte registrado en nuestra pagina!";

mail($email_form, "Registro exitoso!", $cuerpo_mail1);

$cuerpo_mail2 = "Nombre: " . $nombre_form . "\r\n"
. "Usuario: " . $usuario_form . "\r\n"
. "Correo Electronico: " . $email_form . "\r\n"
. "Este usuario se registro a la pagina!";

mail("sicher2001@gmail.com", "Nuevo Registro!", $cuerpo_mail2);

//$conexion = mysqli_connect("localhost", "root", "", "php_inicial_entrega2") or exit ("No se pudo conectar a la base de datos");

$conexion = mysqli_connect("localhost", "id18888947_mati", "qx2qgusg%(UYm{\|", "id18888947_php_inicial") or exit ("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO usuarios VALUES (DEFAULT, '$nombre_form', '$usuario_form', '$email_form', '$contrasenia_form')");

mysqli_close($conexion);

header("Location: registro.php?e=ok")

?>