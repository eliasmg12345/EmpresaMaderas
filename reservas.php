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
  <div class="fluid">
    <img src="img/reserva.jpg" class="img-fluid">
  </div>
  <!--fin portada productos-->
  <?php

  if ($_SESSION["user_id"] != 10 || $_SESSION["user_id"] == null) {
    //print "<script>alert(\"Acceso invalidooooo!\");window.location='index.php';</script>";
    $user_id = $_SESSION["user_id"];
  ?>
    <!--form-->
    <div class="container">
      <div class="col">
      </div>
      <div class="col">
        <?php
        include "php/conection.php";
        $sql3 = "select * from reserva as r JOIN clientes as c on r.cod_cli=c.cod_cli JOIN productos as p on p.Cod_pro=r.cod_pro where c.cod_cli='$user_id'";
        $query3 = $con->query($sql3);
        $r1 = $query3->fetch_array();
        $accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
        switch ($accion) {
          case "Modificar":
            $nombre = $_POST['nombre'];
            $ape_paterno = $_POST['ape_paterno'];
            $ape_materno = $_POST['ape_materno'];
            $Descripcion = $_POST['Descripcion'];
            $cantidad = $_POST['cantidad'];
            $cantidadAnterior = $_POST['cantidad'];
            $id_reserva = $_POST['nombre'];
            $cod_re = $_POST['cod_re'];
            $Cantidad1 = $_POST['Cantidad1'];
            $cod_pro = $_POST['cod_pro'];
        ?>
            <div class="container">

              <form class="row g-3" action="php/editarReserva.php" method="post">
                <div class="col-md-4">
                  <label for="validationDefault01" class="form-label">Producto</label>
                  <input type="text" class="form-control" value="<?php echo $Descripcion; ?>" readonly>
                </div>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Cantidad Disponible</label>
                  <input type="text" class="form-control" name="Cantidad1" id="Cantidad1" value="<?php echo $Cantidad1; ?>" readonly>
                </div>

                <input type="hidden" name="cantidadAnterior" id="cantidadAnterior" value="<?php echo $cantidadAnterior; ?>">
                <input type="hidden" name="cod_pro" id="cod_pro" value="<?php echo $cod_pro; ?>">

                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Cantidad Nueva a Reservar</label>
                  <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">#</span>
                    <input type="text" name="cantidad" id="cantidad" class="form-control" value="<?php echo $cantidad; ?>" required>
                  </div>
                </div>
                <div class="">
                  <input class="" name="cod_re" id="cod_re" type="hidden" value="<?php echo $cod_re; ?>" readonly>
                </div>

                <div class="col-1">
                  <input type="submit" value="Cambiar Reserva" class="btn btn-outline-primary">

                </div>
              </form>

            </div>
            <br><br><br>
        <?php break;
        } ?>
        <div class="container" style="display: flex;justify-content: center;align-items: center;">
          <table class="table " style="width: 80%;">
            <thead>
              <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Imagen</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <?php foreach ($query3 as $r) { ?>
              <tr>
                <td scope=" row"><?php echo $r['Descripcion']; ?></td>
                <td scope="row" style="width: 10%;"><?php echo $r['cantidad']; ?></td>
                <td scope="row" ><?php echo $r['fech_reserva']; ?></td>
                <td scope="row" style="width: 20%;"><img width="50px" height="100px" class="card-img" src="img/productos/<?php echo $r['imagen']; ?>" alt="Card image cap"></td>
                <td scope="row">
                  <form action="" method="post">
                    <input type="hidden" name="cod_re" value="<?php echo $r['cod_re']; ?>">
                    <input type="hidden" name="cod_cli" value="<?php echo $r['cod_cli']; ?>">
                    <input type="hidden" name="cod_pro" value="<?php echo $r['cod_pro']; ?>">
                    <input type="hidden" name="Descripcion" value="<?php echo $r['Descripcion']; ?>">
                    <input type="hidden" name="cantidad" value="<?php echo $r['cantidad']; ?>">
                    <input type="hidden" name="fech_reserva" value="<?php echo $r['fech_reserva']; ?>">
                    <input type="hidden" name="nombre" value="<?php echo $r['nombre']; ?>">
                    <input type="hidden" name="ape_paterno" value="<?php echo $r['ape_paterno']; ?>">
                    <input type="hidden" name="ape_materno" value="<?php echo $r['ape_materno']; ?>">
                    <input type="hidden" name="Cantidad1" value="<?php echo $r['Cantidad']; ?>">
                    <input type="submit" value="Modificar" name="accion" class="btn btn-outline-primary col-md-6 m-0 p-0">
                  </form>
                  <a href="php/eliminarReserva.php?cod_re=<?php echo $r['cod_re']; ?>&cantidad=<?php echo $r['cantidad']; ?>&cod_pro=<?php echo $r['cod_pro']; ?>" class="btn btn-outline-danger col-md-6 m-0 p-0">Eliminar</a>
                </td>
              </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
    <div class="col">
    </div>
    </div>

    <!--form del ADMINISTRADOR-->
  <?php } else { ?>
    <div class="container">
      <div class="col">
      </div>
      <div class="col">
        <?php
        include "php/conection.php";
        $sql3 = "select * from reserva as r JOIN clientes as c on r.cod_cli=c.cod_cli JOIN productos as p on p.Cod_pro=r.cod_pro";
        $query3 = $con->query($sql3);
        ?>
        <div class="container">
          <table class="table">
            <thead>
              <tr>
                <th class="col-md-1">codigo reserva</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Fecha de reserva</th>
                <th>Cantidad</th>
                <th>Stock</th>
                <th>Acciones</th>
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
                <td scope="row">
                  <a href="php/eliminarReserva.php?cod_re=<?php echo $r['cod_re']; ?>&cantidad=<?php echo $r['cantidad']; ?>&cod_pro=<?php echo $r['cod_pro']; ?>" class="btn btn-outline-danger">Eliminar</a>
                </td>
              </tr>
            <?php } ?>
          </table>
        </div>
      </div>
      <div class="col">
      </div>
    </div>

  <?php } ?>


  <!--footer-->
  <footer class="footer-area bg-black">
    <div class="main-footer-area section-padding-100-0">
      <div class="container">
        <div class="row">
          <!-- Footer Widget Area -->
          <div class="col-12 col-sm-1 col-lg-3 mt-3 mb-3">
            <div class="footer-widget mb-100">
              <div class="widget-title ms-0">
                <a href="#"><img src="img/log/LOGO MADERERIA OFICIAL-02.png" width="200"></a>
              </div>

              <div class="container align-items-center  footer-social-info">
                <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
                <a href="https://www.twitter.com/"><i class="bi bi-twitter"></i></a>
                <a href="https://wa.me/77274865"><i class="bi bi-whatsapp"></i></a>
                <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
          <!-- Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-2 mt-5 text-white">
            <div class="footer-widget mb-100">
              <div class="widget-title">
                <h6><strong>Enlaces útiles</strong></h6>
                <p></p>
              </div>
              <nav>
                <ul class="aling-items-center" style="list-style: none;">
                  <li><a href="#" class="text-white" style="text-decoration: none;">Inicio</a></li>
                  <li><a href="#" class="text-white" style="text-decoration: none;">Nosotros</a></li>
                  <li><a href="#" class="text-white" style="text-decoration: none;">Productos</a></li>
                  <li><a href="#" class="text-white" style="text-decoration: none;">Servicios</a></li>
                  <li><a href="#" class="text-white" style="text-decoration: none;">Contactos</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- Footer Widget Area sm-peque lg-grande pantalla -->
          <div class="col-12 col-sm-6 col-lg-4 mt-5 text-white">
            <div class="footer-widget mb-100">
              <div class="widget-title">
                <h6><strong>Galeria</strong></h6>
                <p></p>
              </div>
              <div class="gallery-list d-flex justify-content-between flex-wrap">
                <a href="img/galeria1.jpg" class="gallery-img" title="Gallery Image 1"><img src="img/galeria1.jpg" class="img-thumbnail rounded" alt=""></a>
                <a href="img/galeria2.jpg" class="gallery-img" title="Gallery Image 2"><img src="img/galeria2.jpg" class="img-thumbnail rounded" alt=""></a>
                <a href="img/galeria3.jpg" class="gallery-img" title="Gallery Image 3"><img src="img/galeria3.jpg" class="img-thumbnail rounded" alt=""></a>
                <a href="img/galeria4.jpg" class="gallery-img" title="Gallery Image 4"><img src="img/galeria4.jpg" class="img-thumbnail rounded" alt=""></a>
                <a href="img/galeria5.jpg" class="gallery-img" title="Gallery Image 5"><img src="img/galeria5.jpg" class="img-thumbnail rounded" alt=""></a>
                <a href="img/galeria6.jpg" class="gallery-img" title="Gallery Image 6"><img src="img/galeria6.jpg" class="img-thumbnail rounded" alt=""></a>
              </div>
            </div>
          </div>
          <!-- Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-3 mt-5 text-white">
            <div class="footer-widget mb-100">
              <div class="widget-title">
                <h6><strong>Contactos</strong></h6>
                <p></p>
              </div>
              <div class="single-contact d-flex mb-30">
                <i class="icon-placeholder"></i>
                <p><i class="bi bi-geo-alt-fill"></i> <strong>Dirección:</strong> Calle Los Nogales Mz. F Lt. 9 Urb. Huertos de Villena - Lurín</p>
              </div>
              <div class="single-contact d-flex mb-30">
                <i class="icon-telephone-1"></i>
                <p><i class="bi bi-telephone-fill"></i> <strong>Teléfono:</strong> 203-808-8613
                  <br><i class="bi bi-whatsapp"></i> <strong>Whatsapp:</strong> 77274865
                </p>
              </div>
              <div class="single-contact d-flex">
                <i class="icon-contract"></i>
                <p><i class="bi bi-envelope-fill"></i><strong> Correo:</strong> MadereraElArbol@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--Fin del footer-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  <script src=""></script>
</body>

</html>