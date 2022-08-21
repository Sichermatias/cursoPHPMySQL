<?php
//Archivo en el cual se muestran los personajes cargado en la base de datos

include('header.php');
?>

<section class="contenedor_personaje">
	
	<?php 
	include('conexion.php');
	
	$consulta_db = mysqli_query($conexion_db, "SELECT * FROM personajes");

	while($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
	?>

	<div class="caja_personajes">
		<h4> <?php echo $mostrar_datos['nombre'] . " " . $mostrar_datos['apellido']; ?> </h4>

		<img src="imagenes/<?php echo $mostrar_datos['imagen']; ?>" alt="superheroe">

		<p> <?php echo $mostrar_datos['descripcion']; ?> </p>

		<p> <a href="eliminar.php?id=<?php echo $mostrar_datos['id']; ?>">Eliminar</a> </p>

	</div>


</section> 

	<?php
	} 
	
	if (isset($_GET['borrado'])) {
		echo "<h3 class=\"subtitulo\">Personaje borrado con exito</h3>";
	}
	
	mysqli_close($conexion_db);

	include('footer.php');
	?>
