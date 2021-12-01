<?php

if (!empty($_POST)) {
	if (
		isset($_POST["ci"]) &&
		isset($_POST["password"])
	) {
		if (
			$_POST["ci"] != "" &&
			$_POST["password"] != ""
		) {
			include "conection.php";

			$user_id = null;

			$ci = $_POST['ci'];
			$password = md5(htmlentities($_POST["password"]));

			$sql1 = "select * from clientes where (ci='$ci' or correo='$ci') and password='$password' ";

			$query = $con->query($sql1);

			while ($r = $query->fetch_array()) {
				$user_id = $r["cod_cli"];
				break;
			}

			if ($r["cod_cli"] == 10) {
				$user_id1 = $r["cod_cli"];
				print "<script>alert(\"Ingreso como Administrador.\");window.location='../index.php';</script>";
				session_start();
				$_SESSION["user_id"] = $user_id1;
			} else if ($user_id == null) {
				print "<script>alert(\"Acceso invalido.\");window.location='../formularioLogin.php';</script>";
			} else {
				session_start();
				$_SESSION["user_id"] = $user_id;
				$_SESSION["ci"] = $ci;

				print "<script>window.location='../index.php';</script>";
			}
		}
	}
}
