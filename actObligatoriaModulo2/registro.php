<?php include("header.php") ?>

	<h3>Registro</h3>

	<div class="curso_descripcion">
		<form action="registrarse.php" method="POST">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre" required>

				<label>Usuario</label>
				<input type="text" name="usuario" class="form-control" placeholder="Ingrese su nombre de usuario">

				<label>Email</label>
				<input type="email" name="email" class="form-control" name="email" placeholder="Ingrese su email" required>

				<label>Contraseña</label>
				<input type="password" name="contrasenia" class="form-control" placeholder="Ingrese su contraseña" required>

				<input type="submit" value="Registrarse" class="btn btn-primary">
			</div>
		</form>
    </div>

	<?php
	if(isset ($_GET['e'])){
		echo "<h3>Registro Exitoso!</h3>";
	}

	?>

<?php include ('footer.php') ?>