<?php include('header.php')?>

<body>
	<section class="contenedor_cargar">
		
		<h2>Cargar Personaje</h2>

		<form action="cargar_personaje.php" method="POST" class="formulario">
			<input type="text" name="nombre" required placeholder="Nombre">
			<br>
			<input type="text" name="apellido" required placeholder="Apellido">
			<br>
			<input type="text" name="imagen" required placeholder="Imagen">
			<br>
			<textarea name="descripcion" id="" cols="50" rows="10"></textarea>
			<br>
			<input type="submit" value="Cargar Personaje">
		</form>

		<?php
		if (isset($_GET['ok'])){
			echo "<h3>Personaje cargado con exito</h3>";
		}
		?>

	</section>

</body>
</html>