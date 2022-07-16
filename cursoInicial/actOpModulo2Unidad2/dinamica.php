<?php include ('header.php') ?>

    <h2 class="titulo_secundario">Cursos Disponibles</h2>

    <div class="curso_item">
        <ul>
            <li><a href="dinamica.php?curso=inicial">Inicial</a></li>
            <li><a href="dinamica.php?curso=intermedio">Intermedio</a></li>
            <li><a href="dinamica.php?curso=avanzado">Avanzado</a></li>
        </ul>
    </div>

    <?php
    if (isset($_GET['curso'])){
      switch ($_GET['curso']){
        case 'inicial':
          $nombre = 'PHP y MySQL Inicial';
          $descripcion = 'Este es un curso de PHP y MySQL donde se ven las primeras cosas';
          $precio = 16000;
          $dificultad = 'Dificultad baja';
          break;
        case 'intermedio':
      	  $nombre = 'PHP y MySQL Intermedio';
      	  $descripcion = 'Este es un curso de PHP y MySQL donde se un poco mas en profundidad los temas anteriormente vistos';
      	  $precio = 18000;
      	  $dificultad = 'Dificultad media';
      	  break;
        case 'avanzado':
          $nombre = 'PHP y MySQL Avanzado';
          $descripcion = 'Este es un curso de PHP y MySQL en el cual se terminan las ideas vistas en los anteriores cursos. Se da un Diploma';
          $precio = 20000;
          $dificultad = 'Dificultad Alta';
          break;
      }
    }
    ?>

    <div class="curso_descripcion">
      <p><?php echo $nombre; ?></p>
      <p><?php echo $descripcion; ?></p>
      <p><?php echo $precio; ?></p>
      <p><?php echo $dificultad; ?></p>
    </div>
		

    <div class="curso_descripcion">
      <?php
				for ($i = 0; $i <= 15; $i++){
					echo "Este es un numero = " . $i * 2 . "<br>";
				}
			?>
    </div>

    <footer class="footer">
			<div class="text-bg-secondary p-3 text-center">
				Hecho por: <?php echo MI_NOMBRE;?>
			</div>
		</footer>
		
	</body>
</html>