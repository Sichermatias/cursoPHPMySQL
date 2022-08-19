<?php

session_start();

$usuarioODni = $_POST['usuario_dni'];
$contrasena = $_POST['clave'];

include('conexion.php');

$consulta = mysqli_query($conexion, "SELECT * FROM `usuarios`");

if((($usuarioODni == 20123456)||($usuarioODni == 'admin'))&& $contrasena == 'admin123'){
	$_SESSION['usuario'] = $usuarioODni;
	header('location: mostrar_contenido.php');
}
else{
	header('location: index.php?error');
}

?>