<?php
include('header.php');

if(isset($_SESSION['usuario'])){

?>

<section class="contenedor_productos">
	
	<h3 class="subtitulo">Nuestos Tragos:</h3>
	
	<?php 
	include('conexion.php');
	
	$consulta = mysqli_query($conexion, "SELECT * FROM productos");
	
	while($mostrar_datos = mysqli_fetch_assoc($consulta)) {
		?>
		
		<div class="caja_producto">
			<h4> <?php echo $mostrar_datos['nombre']?> </h4>
			
			<p> <?php echo $mostrar_datos['descripcion']; ?> </p>
			
		</div>
		
		<?php
	}
	mysqli_close($conexion);
}
else{
	header('Location: index.php?sesion');
}
		?>
</section> 