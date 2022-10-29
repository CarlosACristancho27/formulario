<?php

include("conexion.php");
if (isset($_POST['resgistro'])) {
	if (strlen($_POST['username']) >= 1 && strlen($_POST['username']) >= 1) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$consulta = "INSERT INTO users ('username', 'password') VALUES ('$username','$password')";
		$resultado = mysql_query($conexion, $consulta);
		if ($resultado) {
			?>
			<h3 class="exito">¡Te has registrado exitosamente!</h3>
			<?php
		} else {
			?>
			<h3 class="fallo">No has logrado registrarte</h3>
			<?php
		}
	} else {
		?>
		<h3 class="fallo">Rellene los campos por favor</h3>
		<?php
	}
}

?>