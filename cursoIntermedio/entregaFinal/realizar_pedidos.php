<?php include('header.php')?>

<section class="contenedor_cargar_pedido">

<h3 class="subtitulo">Ingresar pedido</h3>

<form action="cargar_pedido.php" method="POST" class="formulario" enctype="multipart/form-data">
    <input type="text" name="nombre_cliente" required placeholder="Nombre del cliente">
    <br>
    <input type="text" name="nombre_trago" required placeholder="Nombre del trago">
    <br>
	<input type="file" name="imagen" required>
    <br>
    <textarea name="detalle_trago" cols="50" rows="5" placeholder="Ingrese algun detalle sobre su trago si asi lo desea"></textarea>
    <br>
    <input type="submit" value="Enviar pedido">
</form>

<?php
if (isset($_GET['ok'])) {
    echo "<h3 class=\"subtitulo\">El pedido fue realizado correctamente y esta en proceso!</h3>";
}
if (isset($_GET['errorFormato'])) {
    echo "<h3 class=\"subtitulo\">Imagen incorrecta. Verifique el tipo del archivo (debe ser jpg, jpeg o png)</h3>";
}
if (isset($_GET['errorTamanio'])) {
    echo "<h3 class=\"subtitulo\">Imagen incorrecta. Verifique el tamaño del archivo (max 200kb)</h3>";
}
?>

</section>