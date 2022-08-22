<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="styles.css">
    <title>Entrega Final</title>
    <?php session_start()?>
</head>
<body>
    <header>
        <h1 class="titulo_principal"><a href="index.php">BA Drinks</a></h1>
        <nav class="botonera_principal">
            <ul>
                <li class="botonera__item"><a href="mostrar_contenido.php">Mostrar Contenido</a></li>
                <li class="botonera__item"><a href="realizar_pedidos.php">Realizar Pedido</a></li>
                <li class="botonera__item"><a href="ver_pedidos.php">Ver Pedidos</a></li>
                <li class="botonera__item"><a href="ver_pedidos_finalizados.php">Ver Pedidos Finalizados</a></li>
                <?php
                if(isset($_SESSION['usuario'])){
                ?>
                <li class="botonera__item"><a href="salir.php">Cerrar Sesion</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </header>