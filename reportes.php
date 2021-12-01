<?php session_start();





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
  <LINK REL=StyleSheet HREF="css/bootstrap.min.css">

  <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
  <!-- https://cdnjs.com/libraries/font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <title>EmpresaElArbol</title>

</head>
<style>
  .bg-primary {
    background-image: url(img/tree-4885659_1920.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    text-shadow: 1px 1px 1px rgb(0, 0, 0);
  }

  .bg-primary1 {
    background-image: url(img/natural.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    text-shadow: 1px 1px 1px rgb(0, 0, 0);
  }

  .bg-primary2 {
    background-image: url(img/nuestroequipo.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    text-shadow: 1px 1px 1px rgb(0, 0, 0);
  }

  .tit {
    background-image: url(img/fondoMaderas.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    text-shadow: 1px 1px 1px rgb(0, 0, 0);
  }

  .fluid {
    background-image: url(img/fondoMaderas.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    text-shadow: 1px 1px 1px rgb(0, 0, 0);
  }

  .main-footer-area .footer-widget .footer-social-info a {
    display: inline-block;
    color: #606060;
    margin-right: 15px;
    margin-left: 7px;
  }

  .main-footer-area .footer-widget .gallery-list a {
    position: relative;
    z-index: 1;
    max-width: 27%;
    margin-bottom: 15px;
    margin-right: 20px;

  }

  .main-footer-area {
    background: linear-gradient(to right, #000000, #242423);
  }

  .main-footer-area .footer-widget .gallery-list a::after {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    content: '';
    background-color: rgba(242, 255, 53, 0.521);
    opacity: 0;
    visibility: hidden;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
  }

  .main-footer-area .footer-widget .gallery-list a:hover::after {
    opacity: 1;
    visibility: visible;
  }

  .card-text {
    text-align: justify;
  }

  .header {
    color: #e9e520;
    font-size: 27px;
    padding: 10px;
  }

  .bigicon {
    font-size: 20px;
    color: #444444;
  }
</style>

<body>
  <!--navbar-->
  <?php include "php/navbar.php"; ?>
  <!--Fin del navbar-->

  <!--portada productos-->

  <!--fin portada productos-->
  <?php
  if ($_SESSION["user_id"] != 10 || $_SESSION["user_id"] == null) {
    print "<script>alert(\"Acceso invalidooooo!\");window.location='index.php';</script>";
  ?>
    <!--form-->

    <!--form del ADMINISTRADOR-->
  <?php } else { ?>
    <br>
    <br>
    <br>
    <div class="container">
      <form action="" method="post" style="margin-top: 30px; text-align: center;">
        <input type="submit" value="ReporteMensual" name="accion" class="btn btn-outline-primary" style="margin: 30px;">
        <input type="submit" value="ReporteAnual" name="accion" class="btn btn-outline-primary" style="margin: 30px;">
        <input type="submit" value="ReporteClientes" name="accion" class="btn btn-outline-primary" style="margin: 30px;">
        <input type="submit" value="ReporteProductos" name="accion" class="btn btn-outline-primary" style="margin: 30px;">
      </form>
      <?php

      $accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
      include "php/conection.php";
      switch ($accion) {
        case "ReporteMensual":
          $query3 = $con->query("SET lc_time_names = 'es_ES' ");
          $sql3 = "SELECT SUM(r.cantidad) as totalReserva,DATE_FORMAT(r.fech_reserva, '%M %Y') as fecha_reserva FROM productos as p JOIN reserva as r on p.Cod_pro=r.cod_pro GROUP BY fecha_reserva";
          $query3 = $con->query($sql3);

          $r1 = $query3->fetch_array();
      ?>
          <div class="container" style="display: flex;justify-content: center;align-items: center;">
            <table class="table" style="width: 30%; ">
              <thead>
                <tr>
                  <th style="width: 40%;">Mes</th>
                  <th style="width: 20%;">Total producto Reservado</th>
                </tr>
              </thead>
              <?php foreach ($query3 as $r) { ?>
                <tr>
                  <td scope="row"><?php echo $r['fecha_reserva']; ?></td>
                  <td scope="row"><?php echo $r['totalReserva']; ?></td>
                </tr>
              <?php } ?>
            </table>
          </div>
          <br><br><br>
        <?php
          break;
        case "ReporteAnual":
          $query3 = $con->query("SET lc_time_names = 'es_ES' ");
          $sql3 = "SELECT SUM(r.cantidad) as totalReserva,DATE_FORMAT(r.fech_reserva, '%Y') as fecha_reserva FROM productos as p JOIN reserva as r on p.Cod_pro=r.cod_pro GROUP BY fecha_reserva";
          $query3 = $con->query($sql3);

          $r1 = $query3->fetch_array();
        ?>
          <div class="container" style="display: flex;justify-content: center;align-items: center;">
            <table class="table" style="width: 30%;">
              <thead>
                <tr>
                  <th>Año</th>
                  <th style="width: 50%;">Total producto Reservado</th>
                </tr>
              </thead>
              <?php foreach ($query3 as $r) { ?>
                <tr>
                  <td scope="row"><?php echo $r['fecha_reserva']; ?></td>
                  <td scope="row"><?php echo $r['totalReserva']; ?></td>
                </tr>
              <?php } ?>
            </table>
          </div>
          <br><br><br>
        <?php
          break;
        case "ReporteClientes":

          $query3 = $con->query("SET lc_time_names = 'es_ES' ");
          $sql3 = "SELECT ci,nombre,ape_paterno,ape_materno,correo,telefono, DATE_FORMAT(created_at, '%d %M %Y') as fech_registro from clientes where cod_cli>10";
          $query3 = $con->query($sql3);
          $r1 = $query3->fetch_array();
        ?>
          <div class="container" style="display: flex;justify-content: center;align-items: center;">
            <table class="table" style="width: 80%;">
              <thead>
                <tr>
                  <th>Carnet</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Telefono</th>
                  <th>Fecha de Registro</th>
                </tr>
              </thead>
              <?php foreach ($query3 as $r) { ?>
                <tr>
                  <td scope="row"><?php echo $r['ci']; ?></td>
                  <td scope="row"><?php echo $r['nombre']; ?> <?php echo $r['ape_paterno']; ?> <?php echo $r['ape_materno']; ?></td>
                  <td scope="row"><?php echo $r['correo']; ?></td>
                  <td scope="row"><?php echo $r['telefono']; ?></td>
                  <td scope="row"><?php echo $r['fech_registro']; ?></td>
                </tr>
              <?php } ?>
            </table>
          </div>
          <br><br><br>
        <?php
          break;
        case "ReporteProductos":
          $query3 = $con->query("SET lc_time_names = 'es_ES' ");
          $sql3 = "SELECT * from productos ORDER BY Cantidad DESC";
          $query3 = $con->query($sql3);
          $r1 = $query3->fetch_array();
        ?>
          <div class="container" style="display: flex;justify-content: center;align-items: center;">
            <table class="table" style="width: 50%;">
              <thead>
                <tr>
                  <th>Producto</th>
                  <th>Costo</th>
                  <th>Stock</th>
                </tr>
              </thead>
              <?php foreach ($query3 as $r) { ?>
                <tr>
                  <td scope="row"><?php echo $r['Descripcion']; ?></td>
                  <td scope="row"><?php echo $r['Costo']; ?></td>
                  <td scope="row"><?php echo $r['Cantidad']; ?></td>
                </tr>
              <?php } ?>
            </table>
          </div>
          <br><br><br>
        <?php
          break;
        default:
          $sql3 = "select * from reserva as r JOIN clientes as c on r.cod_cli=c.cod_cli JOIN productos as p on p.Cod_pro=r.cod_pro order by cod_re";
          $query3 = $con->query($sql3);
        ?>
          <div class="col">
            <div class="container" style="display: flex;justify-content: center;align-items: center;">

              <table class="table">
                <thead>
                  <tr>
                    <th class="col-md-1">Codigo Reserva</th>
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Fecha de reserva</th>
                    <th>Cantidad</th>
                    <th>Stock</th>
                  </tr>
                </thead>
                <?php foreach ($query3 as $r) { ?>
                  <tr>
                    <td scope="row"><?php echo $r['cod_re']; ?></td>
                    <td scope="row"><?php echo $r['nombre']; ?> <?php echo $r['ape_paterno']; ?> <?php echo $r['ape_materno']; ?></td>
                    <td scope="row"><?php echo $r['Descripcion']; ?></td>
                    <td scope="row"><?php echo $r['fech_reserva']; ?></td>
                    <td scope="row"><?php echo $r['cantidad']; ?></td>
                    <td scope="row"><?php echo $r['Cantidad']; ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
          </div>
      <?php } ?>
    </div>
  <?php } ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  <script src=""></script>
</body>

</html>