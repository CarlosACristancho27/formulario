<?php

include("conexion.php");

if (isset($_POST['register'])) {
	if (strlen($_POST['username']) >= 1 && strlen($_POST['password']) >= 1) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$consulta = "INSERT INTO users ('username', 'password') VALUES ('$username','$password')";
		$resultado = mysql_query($conex, $consulta);
		if ($resultado) {
			?>
			<h3 class="ok">¡Te has registrado exitosamente!</h3>
			<?php
		} else {
			?>
			<h3 class="bad">No has logrado registrarte</h3>
			<?php
		}
	} else {
		?>
		<h3 class="bad">Rellene los campos por favor</h3>
		<?php
	}
}

?>