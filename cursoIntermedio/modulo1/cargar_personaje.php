<?php 
$nombre_per = $_POST['nombre'];
$apellido_per = $_POST['apellido'];
$imagen_per = $_POST['imagen'];
$descripcion_per = $_POST['descripcion'];

include('conexion.php');

mysqli_query($conexion_db, "INSERT INTO personajes VALUES (DEFAULT, '$nombre_per', '$apellido_per', '$imagen_per', '$descripcion_per') ");

mysqli_close($conexion_db);

header("Location:index.php?ok");


