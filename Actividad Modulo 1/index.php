<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Modulo 1 PHP</title>
</head>

<?php

const NOMBRE_CURSO = 'Curso PHP y MySQL Inicial';
$item1 = 'Presentacion';
$item2 = 'Modalidad';
$item3 = 'Objetivos';

?>

<body>
	<header>
		<h1><?php echo NOMBRE_CURSO; ?></h1>
		<nav>
			<ul>
				<li><a href="#"><?php echo $item1; ?></a></li>
				<li><a href="#"><?php echo $item2; ?></a></li>
				<li><a href="#"><?php echo $item3; ?></a></li>
			</ul>
		</nav>
	</header>


	<footer>

	</footer>
</body>
</html>