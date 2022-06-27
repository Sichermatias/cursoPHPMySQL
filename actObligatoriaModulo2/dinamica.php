<?php include ('header.php') ?>

    <h2 class="titulo_secundario">Cursos Disponibles</h2>

    <div class="curso_item">
        <ul>
            <li><a href="dinamica.php?curso=ini">Inicial</a></li>
            <li><a href="dinamica.php?curso=int">Intermedio</a></li>
            <li><a href="dinamica.php?curso=ava">Avanzado</a></li>
        </ul>
    </div>

    <?php
    if (isset($_GET['curso'])){
      switch ($_GET['curso']){
        case 'ini':
          $nombre = 'PHP y MySQL Inicial';
          $descripcion = 'Este es un curso de PHP y MySQL donde se ven las primeras cosas';
          $precio = 16000;
          $dificultad = 'Baja';
          break;
        case 'int':
      	  $nombre = 'PHP y MySQL Intermedio';
      	  $descripcion = 'Este es un curso de PHP y MySQL donde se un poco mas en profundidad los temas anteriormente vistos';
      	  $precio = 18000;
      	  $dificultad = 'Media';
      	  break;
        case 'ava':
          $nombre = 'PHP y MySQL Avanzado';
          $descripcion = 'Este es un curso de PHP y MySQL en el cual se terminan las ideas vistas en los anteriores cursos. Se da un Diploma';
          $precio = 20000;
          $dificultad = 'Alta';
          break;
      }
    }
    ?>

    <div class="curso_descripcion">
      <p><?php echo "Nombre: " . $nombre; ?></p>
      <p><?php echo "Descripcion: " . $descripcion; ?></p>
      <p><?php echo "Precio: " . $precio; ?></p>
      <p><?php echo "Dificultad: " . $dificultad; ?></p>
    </div>
		

    <div class="curso_descripcion">
      <?php
				for ($i = 0; $i <= 15; $i++){
					echo "Este es un numero = " . $i * 2 . "<br>";
				}
			?>
    </div>

<?php include ('footer.php') ?>