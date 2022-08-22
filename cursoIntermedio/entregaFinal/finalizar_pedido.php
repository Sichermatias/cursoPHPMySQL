<?php 
include('conexion.php');

$id_pedido = $_GET['id_pedido'];

mysqli_query($conexion, "UPDATE pedidos SET estado = 'Finalizado' WHERE id_pedido = $id_pedido");

header('Location: ver_pedidos.php?finalizado');

mysqli_close($conexion);