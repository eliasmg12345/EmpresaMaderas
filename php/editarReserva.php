<?php

include "conection.php";
$Cantidad1 = $_POST['Cantidad1'];

$cantidadAnterior = $_POST['cantidadAnterior'];
$cod_pro = $_POST['cod_pro'];

$cant = $_POST['Cantidad1'] - ($_POST['cantidad'] - $_POST['cantidadAnterior']);


//Modificando la cantidad
$cod_re = $_POST['cod_re'];
$cantidadModificada = $_POST['cantidad'];



if ($cant < 0) {
    print "<script>alert(\"Sobrepasó la cantidad.\");window.location='../reservas.php';</script>";
    
} else {
    $sqlCantidadModificada = "update reserva set cantidad='$cantidadModificada' where cod_re='$cod_re'";
    $sql = "update productos set Cantidad=$cant where cod_pro='$cod_pro'";
    $queryCantidadModificada = $con->query($sqlCantidadModificada);
    $query = $con->query($sql);
    header('location:../reservas.php');
}


