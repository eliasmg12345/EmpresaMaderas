<?php

$cod_re = $_GET["cod_re"];
$cantidad = $_GET["cantidad"];
$cod_pro = $_GET["cod_pro"];

include "conection.php";

$sql_cantidad = "select * from productos where cod_pro='$cod_pro' ";
$query_cantidad = $con->query($sql_cantidad);
$r_cantidad = $query_cantidad->fetch_array();
$cantidadProducto = $r_cantidad["Cantidad"];

$sql = "delete from reserva where cod_re='$cod_re' ";

$sql2 = "update productos set Cantidad=$cantidadProducto+$cantidad where cod_pro='$cod_pro'";

$query2 = $con->query($sql2);

$query = $con->query($sql);

header('location:../reservas.php');
