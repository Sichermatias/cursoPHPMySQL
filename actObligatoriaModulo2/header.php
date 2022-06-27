<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP MySQL Inicial</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>
	
    <?php
    const NOMBRE_CURSO = 'Curso PHP y MySQL Inicial';
	$item1 = 'Presentacion';
	$item2 = 'Modalidad';
	$item3 = 'Objetivos';
	$item4 = 'Informacion adicional';
    
	const MI_NOMBRE = 'Matias Sicher';
    ?>

    <body class="text-bg-primary p-3">

	<header>
		<nav class="navbar navbar-expand-lg text-bg-dark p-3 rounded">
			<div class="container-fluid">
				<a class="navbar-brand text-light bg-dark" href="#"><?php echo NOMBRE_CURSO; ?></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-link active text-light bg-dark" aria-current="page" href="index.php"><?php echo $item1 ?></a>
						<a class="nav-link text-light bg-dark" href="index.php"><?php echo $item2 ?></a>
						<a class="nav-link text-light bg-dark" href="index.php"><?php echo $item3 ?></a>
						<a class="nav-link text-light bg-dark" href="index.php"><?php echo $item4 ?></a>
						<a class="nav-link text-light bg-dark" href="dinamica.php">Una Pagina Dinamica</a>
						<a class="nav-link text-light bg-dark" href="registro.php">Registro</a>
					</div>
				</div>
			</div>
		</nav>
	</header>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>