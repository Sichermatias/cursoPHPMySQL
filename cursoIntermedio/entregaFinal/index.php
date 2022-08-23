<?php
include('header.php');

if(isset($_SESSION['usuario'])){
    header('Location: mostrar_contenido.php');
}
else{
    ?>
    
    <section class="contenedor_cargar_usuario">
        
        <h3 class="subtitulo">Ingreso</h3>
        
        <form action="validar_usuario.php" method="POST" class="formulario">
            <input type="text" name="usuario_dni" required placeholder="Usuario o DNI">
            <br>
            <input type="password" name="clave" required placeholder="Contraseña">
            <br>
            <input type="submit" value="Iniciar Sesion">
        </form>
        
        <?php
if (isset($_GET['error'])) {
    echo "<h3 class=\"subtitulo\">Usuario o Contraseña incorrectos</h3>";
}
if(isset($_GET['sesion'])){
    echo "<h3 class=\"subtitulo\">Para ver esta pagina debes iniciar sesion!</h3>";
}
}
?>

</section>

<?php
include('footer.php');
?>