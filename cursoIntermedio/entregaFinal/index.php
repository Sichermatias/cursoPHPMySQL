<?php
include('header.php');
?>
    
<section class="contenedor_cargar">

<h3 class="subtitulo">Ingreso</h3>

<form action="validar.php" method="POST" class="formulario">
    <input type="text" name="usuario" required placeholder="Usuario">
    <br>
    <input type="password" name="clave" required placeholder="Contraseña">
    <br>
    <input type="submit" value="Iniciar Sesion">
</form>

<?php
if (isset($_GET['error'])) {
    echo "<h3 class=\"subtitulo\">Usuario o Contraseña incorrectos</h3>";
}
?>

</section>

</body>
</html>