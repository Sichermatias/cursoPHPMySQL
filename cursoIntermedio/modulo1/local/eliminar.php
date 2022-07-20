<?php 

//Archivo usado en "mostrar.php" para eliminar el personaje seleccionado de la base de datos

include("conexion.php");

$id_personaje = $_GET['id'];

mysqli_query($conexion_db, "DELETE FROM personajes WHERE id = $id_personaje");

header("Location: mostrar.php?borrado");

mysqli_close($conexion_db);