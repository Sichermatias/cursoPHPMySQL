<?php

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

include('conexion.php');

$consulta = mysqli_query($conexion_db, "SELECT * FROM administradores WHERE usuario = 'administrador' AND clave = 'admin123';");

if($_POST['usuario'] == 'administrador' && $_POST['clave'] == 'admin123'){
	$_SESSION['admin'] = $_POST['usuario'];
	header('Location: carga.php');
} else{
	header('Location: index.php?error');
}