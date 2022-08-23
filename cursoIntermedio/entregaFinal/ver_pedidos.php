<?php
include('header.php');

if(isset($_SESSION['usuario'])){
?>

<section class="contenedor_pedido">

    <?php
    include('conexion.php');

    $consulta = mysqli_query($conexion, "SELECT * FROM pedidos WHERE estado = \"En proceso\"");

    while($mostrar_datos = mysqli_fetch_assoc($consulta)){
    ?>

    <div class="caja_pedido">
        <p>Numero de pedido: <?php echo $mostrar_datos['id_pedido']?></p>
        <p>Nombre del Cliente: <?php echo $mostrar_datos['nombre_cliente']?></p>
        <img src="imagenes/<?php echo $mostrar_datos['imagen']?>" alt="<?php echo $mostrar_datos['imagen']?>">
        <p>Detalles: <?php echo $mostrar_datos['detalles']?></p>
        <p>Estado: <?php echo $mostrar_datos['estado']?></p>
        <a href="finalizar_pedido.php?id_pedido=<?php echo $mostrar_datos['id_pedido']?>">Finalizar Pedido</a>
    </div>

    <?php
    }

    if(isset($_GET['finalizado'])){
        echo "<h3 class=\"subtitulo\">El pedido fue Finalizado!</h3>";
    }

    mysqli_close($conexion);

}
else{
	header('Location: index.php?sesion');
}

    ?>

</section>

<?php
include('footer.php');
?>