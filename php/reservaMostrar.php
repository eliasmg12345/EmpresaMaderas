<?php

$cod_pro = $_GET["cod_pro"];
$cod_cli = $_SESSION['user_id'];

include "conection.php";

$sql1 = "select * from clientes where cod_cli='$cod_cli' ";
$sql2 = "select * from productos where Cod_pro='$cod_pro' ";


$query1 = $con->query($sql1);
$query2 = $con->query($sql2);



$r1 = $query1->fetch_array();
$r2 = $query2->fetch_array();
