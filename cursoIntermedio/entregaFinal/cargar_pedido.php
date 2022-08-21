<?php

$nombre_cliente = $_POST['nombre_cliente'];
$nombre_trago = $_POST['nombre_trago'];

$nombre_imagen = $_FILES['imagen']['name'];
$tamano_imagen = $_FILES['imagen']['size'];
$tipo_imagen = $_FILES['imagen']['type'];
$temporal_imagen = $_FILES['imagen']['tmp_name'];

$destino = 'imagenes/' . $nombre_imagen;

$detalles = $_POST['detalle_trago'];
$estado = "En proceso";

if($tipo_imagen != 'image/jpeg' && $tipo_imagen != 'image/jpg' && $tipo_imagen != 'image/png'){
	header('Location: realizar_pedidos.php?errorFormato');
}
elseif($tamano_imagen > 200000){
	header('Location: realizar_pedidos.php?errorTamanio');
}
else{
	move_uploaded_file($temporal_imagen, $destino);
	
	include('conexion.php');
	
	mysqli_query($conexion, "INSERT INTO pedidos VALUES (DEFAULT, '$nombre_cliente', '$nombre_trago', '$nombre_imagen', '$detalles', '$estado')" );
	
	mysqli_close($conexion);
	
	header("Location: realizar_pedidos.php?ok");
}
