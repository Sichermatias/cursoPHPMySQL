<?php
//Archivo utilizado para ver los comentarios carrgados en "archivo_comentarios.txt"

include('header.php'); ?>

<section class="contenedor_comentario">
	
	<?php
	$archivo_comentarios = fopen("archivo_comentarios.txt", "r");
	
	while(!feof($archivo_comentarios)) {
		echo fgets($archivo_comentarios);
	}
	
	fclose($archivo_comentarios);
	?>

</section>

<?php include('footer.php'); ?>