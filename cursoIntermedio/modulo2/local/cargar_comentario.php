<?php 

//Este archivo es usado por "agregar comewntario" para ordenar lo que viene en el formulario por post y escribir en el archivo "archivo_comentario.txt"

$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$comentario = $_POST['comentario'];

$texto = "<br> <div class=\"comentario_contenedor\"> <h4 class=\"comentario_contenedor_item\">Nombre: " . $nombre . "</h4> <br> <h4 class=\"comentario_contenedor_item\">Correo: " . $correo . "</h4> <br> <p class=\"comentario_contenedor_item\"> Comentario: " . $comentario . " </p> </div> <br> \n";

$archivo_comentarios = fopen("archivo_comentarios.txt", "a");

fwrite($archivo_comentarios, $texto);

fclose($archivo_comentarios);

header("Location: agregar_comentarios.php?ok");