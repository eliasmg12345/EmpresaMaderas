<?php
$queryReserva="";
$error = array();
$mensaje = "";
if (!empty($_POST)) {
    if (
        isset($_POST["cod_cli"]) &&
        isset($_POST["cod_pro"]) &&
        isset($_POST["cantidad"])
    ) {
        if (
            $_POST["cod_cli"] != "" &&
            $_POST["cod_pro"] != "" &&
            $_POST["cantidad"] != ""
        ) {
            include "conection.php";

            $found = false;

            $cod_cli = $_POST['cod_cli'];
            $cod_pro = $_POST['cod_pro'];
            $cantidad = $_POST['cantidad'];

            $sql1 = "select * from reserva where cod_pro='$cod_pro' ";
            $sql2 = "select * from productos where cod_pro='$cod_pro' ";

            $query = $con->query($sql1);
            $query2 = $con->query($sql2);
            $r2 = $query2->fetch_array();

            while ($r = $query->fetch_array()) {
                $found = true;
                break;
            }

            $cantidadProducto = $r2["Cantidad"];

            if ($cantidad < 0 || $cantidad > $cantidadProducto) {
                print "<script>alert(\"Sobrepasó la cantidad.\");</script>";
                header('location:../FormularioReserva.php');
            } else {
                $sql = "insert into reserva(cod_cli,cod_pro,cantidad,fech_reserva) value($cod_cli,$cod_pro,$cantidad,NOW()) ";
                $sql2 = "update productos set Cantidad=$cantidadProducto-$cantidad where cod_pro='$cod_pro'";
                $queryReserva = $con->query($sql);
                $query2 = $con->query($sql2);
            }
            if ($queryReserva != null) {
                //$mensaje.="<h5 class ='text-danger text-center'>Registro exitoso</h5>";
                print "<script>alert(\"Reserva Exitosa.\");window.location='../index.php';</script>";
            } 
        }
    }
}
