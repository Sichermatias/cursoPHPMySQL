<?php 
$nombre_per = $_POST['nombre'];
$apellido_per = $_POST['apellido'];
$imagen_per = $_POST['imagen'];
$descripcion_per = $_POST['descripcion'];

$conexion_db = mysqli_connect("localhost", "root", "", "phpIntermedio") or exit ("No se pudo conectar");

mysqli_query($conexion_db, "INSERT INTO personajes VALUES (DEFAULT, '$nombre_per', '$apellido_per', '$imagen_per', '$descripcion_per') ");

mysqli_close($conexion_db);

header("Location:index.php?ok");



?>