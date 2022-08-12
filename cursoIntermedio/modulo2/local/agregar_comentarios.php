<?php 

//Este archivo es el formulario que agrega comentarios usando "cargar_comentario".

include('header.php');
?>

<section class="contenedor_comentario">
	<form action="cargar_comentario.php" method="post" class="formulario">
		<input type="text" name="nombre" required placeholder="Nombre">
		<br>
		<input type="email" name="email" required placeholder="Correo Electronico">
		<br>
		<textarea name="comentario" id="" cols="70" rows="10"></textarea>
		<br>
		<input type="submit" value="Comentar">
	</form>

	<?php
		if(isset($_GET['ok'])) {
			echo "<h3 class=\"subtitulo\">Comentario cargado con exito</h3>";
		}
	?>

</section>

<?php include('footer.php'); ?>