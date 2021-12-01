<?php

if (!empty($_POST)) {
	if (
		isset($_POST["ci"]) &&
		isset($_POST["nombre"]) &&
		isset($_POST["ape_paterno"]) &&
		isset($_POST["ape_materno"]) &&
		isset($_POST["correo"]) &&
		isset($_POST["telefono"]) &&
		isset($_POST["password"]) &&
		isset($_POST["confirm_password"])
	) {
		if (
			$_POST["ci"] != "" &&
			$_POST["nombre"] != "" &&
			$_POST["ape_paterno"] != "" &&
			$_POST["ape_materno"] != "" &&
			$_POST["correo"] != "" &&
			$_POST["telefono"] != "" &&
			$_POST["password"] != "" &&
			$_POST["password"] == $_POST["confirm_password"]
		) {
			include "conection.php";

			$found = false;

			$ci = $_POST['ci'];
			$nombre = $_POST['nombre'];
			$ape_paterno = $_POST['ape_paterno'];
			$ape_materno = $_POST['ape_materno'];
			$correo = $_POST['correo'];
			$telefono = $_POST['telefono'];
			$password = md5(htmlentities($_POST["password"]));


			$sql1 = "select * from clientes where ci='$ci' or correo='$correo'";

			$query = $con->query($sql1);

			while ($r = $query->fetch_array()) {
				$found = true;
				break;
			}

			if ($found) {
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../formularioRegistro.php';</script>";
			} else {
				$sql = "insert into clientes(ci,nombre,ape_paterno,ape_materno,correo,telefono,password,created_at) value ('$ci','$nombre','$ape_paterno','$ape_materno', '$correo', '$telefono','$password',NOW())";
				$query = $con->query($sql);
			}

			if ($query != null) {
				print "<script>alert(\"Registro exitoso. Proceda a loguearse\");window.location='../formularioLogin.php';</script>";
			}
		}
	}
}
