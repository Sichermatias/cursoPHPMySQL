<?php
//Archivo index, utilizado para cargar personajes. Utiliza el archivo "cargar_personaje.php"

session_start();
if(isset($_SESSION['admin'])){
	
	include('header.php');
?>
	
	<body>
		<section class="contenedor_cargar">
	
			<h3 class="subtitulo">Cargar Personaje</h3>
	
			<form action="cargar_personaje.php" method="POST" class="formulario" enctype="multipart/form-data">
				<input type="text" name="nombre" required placeholder="Nombre">
				<br>
				<input type="text" name="apellido" required placeholder="Apellido">
				<br>
				<input type="file" name="imagen" placeholder="Imagen">
				<br>
				<textarea name="descripcion" id="" cols="50" rows="10"></textarea>
				<br>
				<input type="submit" value="Cargar Personaje">
			</form>
	
			<?php
			if (isset($_GET['ok'])) {
				echo "<h3 class=\"subtitulo\">Personaje cargado con exito</h3>";
			}
			?>
		</section>
		
	</body>
		
	<?php include('footer.php') ?>
		
	</html>

<?php
}
else{
	header('Location: index.php');
}

?>
