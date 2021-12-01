<?php

include "conection.php";
$Descripcion = $_POST['Descripcion'];
$Costo = $_POST['Costo'];
$Cantidad = $_POST['Cantidad'];
$imagen = (isset($_FILES['imagen']["name"])) ? $_FILES['imagen']["name"] : "";

$fecha = new DateTime();
$nombreArchivo = ($imagen != "") ? $fecha->getTimestamp() . "_" . $_FILES['imagen']["name"] : "arbol.jpg";
$tmpImagen = $_FILES["imagen"]["tmp_name"];

if ($tmpImagen != "") {
    move_uploaded_file($tmpImagen, "../img/productos/" . $nombreArchivo);
}

$sql = "insert into productos(Descripcion,Costo,Cantidad,imagen) values('$Descripcion','$Costo','$Cantidad','$nombreArchivo') ";
$query = $con->query($sql);

header('location:../productos.php');
