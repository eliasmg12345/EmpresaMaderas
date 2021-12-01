<?php
$cod_pro = $_POST['cod_pro'];

include "conection.php";
$found = false;


$sql5 = "select imagen from Productos where Cod_pro='$cod_pro' ";
$query5 = $con->query($sql5);
$producto = $query5->fetch_assoc();
print_r($producto);



$sql6 = "delete from Productos where Cod_pro='$cod_pro' ";
$query6 = $con->query($sql6);



if ($query6 == null) {
    print "<script>alert(\"El producto tiene Reserva\");window.location='../productos.php';</script>";
} else {
    if (isset($producto["imagen"])) {
        if (file_exists("../img/productos/" . $producto["imagen"])) {
            unlink("../img/productos/" . $producto["imagen"]);
        }
    }
    header('location:../productos.php');
}
