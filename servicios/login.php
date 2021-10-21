<?php

include('../db.php');



$emausu = $_POST['emausu'];
$sql = "SELECT * FROM usuario WHERE emausu='$emausu'";
$result = mysqli_query($conexion, $sql);
if ($result) {
	$row = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	if ($count != 0) {
		$pasusu = $_POST['pasusu'];
		if ($row['pasusu'] != $pasusu) {
			echo '
			<script>
				alert("Clave de acceso incorrecto");
				window.location = "../login.php";
			</script>
		';
		} else {
			session_start();
			$_SESSION['codusu'] = $row['codusu'];
			$_SESSION['emausu'] = $row['emausu'];
			$_SESSION['nomusu'] = $row['nomusu'];
			header('Location: ../pagina_principal.php');
			
		}
	} else {
		echo '
		<script>
			alert("Usuario o clave de acceso errados");
			window.location = "../login.php";
		</script>
	';
	}
} else {
	header('Location: ../login.php?e=1');
}
