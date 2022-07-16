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

	$textoPresentacion1 = 'El lenguaje PHP, conjuntamente con las bases de datos MySQL, permitirá crear sitios web dinámicos con posibilidad de enriquecer tu producto final y darle mayor interactividad.';
	$textoPresentacion2 = 'El módulo de PHP y MySQL Inicial que te permitirá interiorizarte en las bases de datos relacionales y dar los primeros pasos con el lenguaje PHP.';

	$modalidad = ': 100% Virtual';
	$item_modalidad1 = 'Material descargable';
	$item_modalidad2 = 'Acompañamiento de tutores';
	$item_modalidad3 = 'En vivo o acceso a las grabaciones';
	$item_modalidad4 = 'Foro para dudas 24hs!';

	$objetivoGeneral = 'Introducirse en el uso de las tecnologías necesarias para realizar sitios web dinámicos (MySQL + PHP)';
	$objetivoEspecifico1 = 'Armar aplicaciones web simples y dinámicas a través de código PHP y base de datos MySQL.';
	$objetivoEspecifico2 = 'Aprender a trabajar con la herramienta de administración y gestión de base de datos PHP MyAdmin.';
	$objetivoEspecifico3 = 'Aprender a trabajar con el motor de base de datos MySQL.';
	$objetivoEspecifico4 = 'Comprender el concepto y el uso de las bases de datos relacionales.';
	$objetivoEspecifico5 = 'Comprender el medio en el cual van a desenvolverse.';
	$objetivoEspecifico6 = 'Aprender los conceptos del lenguaje PHP.';


	$valor = 16942;
	$dolar =  119;
	$valorDolar = $valor/$dolar ; 
	
	$duracion = '9 semanas';
	$inicioDeCursada = '09/08/2022';

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
        				<a class="nav-link active text-light bg-dark" aria-current="page" href="#"><?php echo $item1 ?></a>
        				<a class="nav-link text-light bg-dark" href="#"><?php echo $item2 ?></a>
        				<a class="nav-link text-light bg-dark" href="#"><?php echo $item3 ?></a>
        				<a class="nav-link text-light bg-dark" href="#"><?php echo $item4 ?></a>
      					</div>
    				</div>
				</div>
			</nav>
		</header>

		<body>

			<br>

			<div class="card text-center card text-bg-light mb-3">
  				<div class="card-header">
				  <?php echo $item1; ?>
  				</div>
  				<div class="card-body">
    				<p class="card-text"><?php echo $textoPresentacion1 ?> <br> <?php echo $textoPresentacion2 ?></p>
  				</div>
			</div>

			<br>

			<div class="card text-center card text-bg-light mb-3">
  				<div class="card-header">
				  <?php echo $item2 . $modalidad; ?>
  				</div>
  				<div class="card-body">
    				<p class="card-text">
						<ul class="list-group list-group-flush">		
							<li class="list-group-item list-group-item-light"><?php echo $item_modalidad1; ?></li>
							<li class="list-group-item list-group-item-light"><?php echo $item_modalidad2; ?></li>
							<li class="list-group-item list-group-item-light"><?php echo $item_modalidad3; ?></li>
							<li class="list-group-item list-group-item-light"><?php echo $item_modalidad4; ?></li>
						</ul>
					</p>
				</div>
			</div>

			<br>

			<div class="card text-center card text-bg-light mb-3">
  				<div class="card-header">
				  <?php echo $item3; ?>
  				</div>
  				<div class="card-body">
				  	<h5 class="card-title">Objetivo General</h5>
    				<p class="card-text"><?php echo $objetivoGeneral; ?> <?php echo $textoPresentacion2 ?>
					</p>
					<h5 class="card-title">Objetivos especificos</h5>
					<p class="card-text">
						<ul class="list-group list-group-flush ">		
							<li class="list-group-item list-group-item-light"><?php echo $objetivoEspecifico1; ?></li>
							<li class="list-group-item list-group-item-light"><?php echo $objetivoEspecifico2; ?></li>
							<li class="list-group-item list-group-item-light"><?php echo $objetivoEspecifico3; ?></li>
							<li class="list-group-item list-group-item-light"><?php echo $objetivoEspecifico4; ?></li>
							<li class="list-group-item list-group-item-light"><?php echo $objetivoEspecifico5; ?></li>
							<li class="list-group-item list-group-item-light"><?php echo $objetivoEspecifico6; ?></li>
						</ul>
					</p>

  				</div>
			</div>

			<br>

			<div class="card text-center card text-bg-light mb-3">
  				<div class="card-header">
				  <?php echo $item4; ?>
  				</div>
  				<div class="card-body">
    				<p class="card-text">
						<ul class="list-group list-group-flush ">		
							<li class="list-group-item list-group-item-light">Valor: $<?php echo $valor; ?></li>
							<li class="list-group-item list-group-item-light">Valor en dolares: $<?php echo round($valorDolar); ?></li>
							<li class="list-group-item list-group-item-light">Duracion: <?php echo $duracion; ?></li>
							<li class="list-group-item list-group-item-light">El curso comienza el: <?php echo $inicioDeCursada; ?></li>
						</ul>
					</p>
  				</div>
			</div>

		</body>

		<footer>
			<div class="text-bg-secondary p-3 text-center">
				Hecho por: <?php echo MI_NOMBRE;?>
			</div>
		</footer>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>