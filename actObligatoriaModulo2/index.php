<?php include ('header.php') ?>
	
	<?php

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


?>


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

<?php include ('footer.php') ?>