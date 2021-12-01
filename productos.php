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
</style>

<body>
  <!--navbar-->
  <?php include "php/navbar.php";


  ?>
  <!--Fin del navbar-->


  <!--portada productos-->
  <div class="fluid">
    <img src="img/productosPortada.jpg" class="img-fluid">
  </div>
  <!--fin portada productos-->

  <?php

  if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == null) {
  } else   if ($_SESSION["user_id"] == 10) { ?>


    <div class="container text-center">
      <div class="row">
        <div class="col mt-5 mb-5">
          <form action="" method="post">
            <input type="submit" value="Agregar Nuevo Producto" name="accion" class="btn btn-warning btn-center text-white">
          </form>
        </div>
      </div>
    </div>


  <?php  } ?>



  <?php
  $accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

  switch ($accion) {
    case "Agregar Nuevo Producto":
  ?>
      <div class="row justify-content-center mt-1">
        <div class="col-md-3">
          <form action="php/agregarProducto.php" method="post" enctype="multipart/form-data">
            <div class="form-group mt-3">
              <label for="validationDefault01" class="form-label">Descripcion</label>
              <input type="text" class="form-control" name="Descripcion" value="" placeholder="descripcion" required>
            </div>

            <div class="form-group mt-3">
              <input type="file" accept="image/*" name="imagen" id="imagen" class="form-control">
            </div>


            <div class="form-group mt-3">
              <label for="validationDefault02" class="form-label">Costo</label>
              <input type="text" class="form-control" name="Costo" id="" placeholder="ej: 100" required>
            </div>


            <div class="form-group mt-3">
              <label for="validationDefaultUsername" class="form-label">Cantidad</label>
              <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">#</span>
                <input type="text" name="Cantidad" id="Cantidad" class="form-control" value="" placeholder="ej: 500" required>
              </div>
            </div>

            <div class="form-group mt-3">
              <input type="submit" value="Agregar" class="btn btn-outline-primary">

            </div>
          </form>
        </div>
      </div>
      <br><br>

  <?php
      break;
  } ?>



  <!--titulo-->
  <section class="tit">
    <div class="container text-center">
      <div class="row">
        <div class="col mt-5 mb-5">
          <h1 class="text-white"><em>MADERAS PARA CONSTRUCCIÓN</em></h1>
        </div>
      </div>
    </div>
  </section>
  <!--fin titulo-->

  <!--card1-->
  <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="img/productos/productoMaderas.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><strong><em>Madera Selecta</em></strong></h5>
            <p class="card-text small">
              Es la agrupación de las especies Cachimbo, Panguana, Higuerilla y Copaiba especies similares en sus propiedades físicas y mecánicas,
              maderas homogéneas de aserrío moderado y fácil trabajo, se usa para la construcción, estructuras, vigas, viguetas, columnas, encofrados,
              tijerales, carpintería de interiores, machihembrados, mueblería, artesanía etc.
            </p>
          </div>
          <div class="card-footer text-center">
            <?php if (!isset($_SESSION["user_id"])) { ?>
              <a href="formularioLogin.php" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else if ($_SESSION["user_id"] != 10) { ?>

              <a href="FormularioReserva.php?cod_pro=1" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else { ?>

            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/productos/productoMaderas1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><strong><em>Tablas</em></strong></h5>
            <p class="card-text small">
              Es muy antiguo su uso para construir casas de madera, incluidos suelos, losas, pisos, soporte para encofrados, y diversos usos como material de construcción
              La tabla de madera flota en el agua; con ellas se construyen botes y barcos; sirve pues para desplazarse en el agua como, por ejemplo, las primeras tablas de surf.
            </p>
          </div>
          <div class="card-footer text-center">

            <?php if (!isset($_SESSION["user_id"])) { ?>
              <a href="formularioLogin.php" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else if ($_SESSION["user_id"] != 10) { ?>

              <a href="FormularioReserva.php?cod_pro=2" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else { ?>

            <?php } ?>


          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/productos/productoMaderas2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><strong><em>Puntal</em></strong></h5>
            <p class="card-text small">
              El apuntalamiento y los puntales son básicos en muchos de los procesos constructivos al ejecutar una obra estos apuntalamientos
              son un armazón de puntales que sirve de sostén temporal a una pared, techo, arco u otra parte de un edificio
              que se ha de construir, reparar, transformar o demoler, el apuntalamiento se utiliza para apoyar las vigas y pisos en un edificio, mientras que una columna o pared se retira.
            </p>
          </div>
          <div class="card-footer text-center">

            <?php if (!isset($_SESSION["user_id"])) { ?>
              <a href="formularioLogin.php" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else if ($_SESSION["user_id"] != 10) { ?>

              <a href="FormularioReserva.php?cod_pro=3" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else { ?>

            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!--fincard1-->

  <!--titulo2-->
  <section class="tit">
    <div class="container text-center">
      <div class="row">
        <div class="col mt-5 mb-5">
          <h1 class="text-white"><em>TRIPLAYS</em></h1>
        </div>
      </div>
    </div>
  </section>
  <!--fin titulo2-->


  <!--card2-->
  <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="img/productos/productoMaderas3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><strong><em>Triplay Lupuna</em></strong></h5>
            <p class="card-text small">
              Nuestro triplay Lupuna da una perfecta estabilidad estructural en todo el triplay
              es una plancha de triplay fácilmente maquinable que evita el desgaste acelerado de herramientas,
              las superficies son perfectamente lijadas, lo que facilita al usuario el trabajo de acabado,
              las superficies son uniformes en tono y acabado, las planchas de triplay están inmunizadas contra la acción de todo tipo de insectos y hongos.
            </p>
          </div>
          <div class="card-footer text-center">

            <?php if (!isset($_SESSION["user_id"])) { ?>
              <a href="formularioLogin.php" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else if ($_SESSION["user_id"] != 10) { ?>

              <a href="FormularioReserva.php?cod_pro=4" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else { ?>

            <?php } ?>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/productos/productoMaderas4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><strong><em>Trupan</em></strong></h5>
            <p class="card-text small">
              Fácil de trabajar, pudiendo ser moldurado, perforado, ensamblado, atornillado y pintado, lo que permite excelentes terminaciones.
              <br>
              Color claro.
              <br>
              Superficie homogénea.
              <br>
              Perfil de densidad uniforme.
              <br>
              Superficie suave, sin imperfecciones.
              <br>
              Excelentes propiedades físico-mecánicas.
              <br>
            </p>
          </div>
          <div class="card-footer text-center">

            <?php if (!isset($_SESSION["user_id"])) { ?>
              <a href="formularioLogin.php" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else if ($_SESSION["user_id"] != 10) { ?>

              <a href="FormularioReserva.php?cod_pro=5" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else { ?>

            <?php } ?>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/productos/productoMaderas5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><strong><em>Triplay OSB</em></strong></h5>
            <p class="card-text small">
              OSB (Oriented Strand Board), es un tablero formado por hojuelas de madera,
              orientadas en 3 capas perpendiculares entre sí,
              mezcladas con adhesivos fenólicos y de poliuretano prensados a alta temperatura y presión.
              <br>
              Los tableros LP OSB Home permiten rigidizar estructuras de techos, muros y pisos en la construcción de viviendas,
              eliminando cadenetas y diagonales, reduciendo el costo de materiales, mano de obra y tiempo de ejecución.
            </p>
          </div>
          <div class="card-footer text-center">

            <?php if (!isset($_SESSION["user_id"])) { ?>
              <a href="formularioLogin.php" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else if ($_SESSION["user_id"] != 10) { ?>

              <a href="FormularioReserva.php?cod_pro=6" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else { ?>

            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!--fincard2-->


  <!--titulo 3-->
  <section class="tit">
    <div class="container text-center">
      <div class="row">
        <div class="col mt-5 mb-5">
          <h1 class="text-white"><em>Mas Productos</em></h1>
        </div>
      </div>
    </div>
  </section>
  <!--fin titulo3-->


  <!--card3-->
  <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="img/productos/productoMaderas6.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><strong><em>Pallets de Madera</em></strong></h5>
            <p class="card-text small">
              Somos proveedores de los principales retails y empresas logísticas (Tottus, Sodimac, Plaza Vea, Maestro, Ransa, Savar),
              contamos con Stock permanente atendiendo grandes volúmenes de pedido. <br>
              Nuestras Pallets cumplen con todas las normativas para el mercado local y para exportación. <br>
              <strong>Capacidad de carga:</strong> 800kg - 2500kg.
            </p>
          </div>
          <div class="card-footer text-center">

            <?php if (!isset($_SESSION["user_id"])) { ?>
              <a href="formularioLogin.php" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else if ($_SESSION["user_id"] != 10) { ?>

              <a href="FormularioReserva.php?cod_pro=7" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else { ?>

            <?php } ?>

          </div>

        </div>

      </div>

      <div class="col">
        <div class="card h-100">
          <img src="img/productos/productoMaderas7.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><strong><em>Postes de Madera</em></strong></h5>
            <p class="card-text small">
              <strong>Caracteristicas</strong>>
              Madera: Bolaina Blanca <br>
              Procedencia: Plantaciones forestales controladas <br>
              Impregnados con preservante CCA que evita el deterioro por hongos e insectos <br>
              Larga duración: minimo 20 años a la imtemperie, incluso en condiciones extremas de aridez y humedad <br>

              <strong>Ventajas</strong><br>

              Producción nacional: evite trámites y demoras para importarlos
              Stock permanente
              Entrega en fundo o lugar señalado por el cliente
              Servicio postventa y asistencia técnica <br>
              <strong>USOS: AGRICULTURA Y GANADERÍA</strong>
            </p>
          </div>
          <div class="card-footer text-center">

            <?php if (!isset($_SESSION["user_id"])) { ?>
              <a href="formularioLogin.php" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else if ($_SESSION["user_id"] != 10) { ?>

              <a href="FormularioReserva.php?cod_pro=8" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else { ?>

            <?php } ?>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="img/productos/productoMaderas8.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><strong><em>Durmientes de Madera</em></strong></h5>
            <p class="card-text small">
              Contamos con durmientes para líneas férreas, minería, tuberías industriales, columnas,
              en especies como el Chihuahuaco, Anacaspi, Almendro, Huayruro, etc. <br>
              Maderas extraduras de alta densidad especiales para este tipo de trabajos.
            </p>
          </div>
          <div class="card-footer text-center">

            <?php if (!isset($_SESSION["user_id"])) { ?>
              <a href="formularioLogin.php" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else if ($_SESSION["user_id"] != 10) { ?>

              <a href="FormularioReserva.php?cod_pro=9" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>
            <?php } else { ?>

            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!--fincard3-->


  <?php

  include "php/conection.php";

  $sql = "select * from productos where Cod_pro>9 ";
  $query5 = $con->query($sql);

  //ELIAS
  $html = '
    <div class="container mt-5 mb-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">';
  foreach ($query5 as $row) {
    $html .= '
        <div class="col">
          <div class="card h-100">
            
              <img width="300" height="300" class="card-img-top" src="img/productos/' . $row['imagen'] . '" alt="Card image cap">
              
              <div class="card-body">
                <h5 class="card-title"><strong><em>' . $row['Descripcion'] . ': </em>' . $row['Cantidad'] . ' (u)</strong></h5>
                <p class="card-text small">
                Ut aliquam justo eu magna vestibulum, mollis sollicitudin nunc finibus. 
                Ut ut felis est. Phasellus nunc ante, luctus et tristique vel, ultrices 
                at sem. Proin vel libero sed est luctus efficitur id faucibus nulla. Curabitur 
                nunc ante, efficitur sit amet leo id, semper dictum lectus. Nullam congue 
                consequat condimentum.<br>

                <strong>Ventajas</strong><br>Nunc ornare arcu vel sem efficitur, ac molestie elit efficitur. Duis quis metus 
                id augue luctus faucibus at eget ante. Suspendisse arcu neque, consectetur tempus 
                ultricies id, semper vel erat. <br>
                </p>
              </div>

              <div class="card-footer text-center">';

    if (!isset($_SESSION["user_id"])) {
      $html .= '
                <a href="formularioLogin.php" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>';
    } else if ($_SESSION["user_id"] != 10) {
      $html .= '<a href="FormularioReserva.php?cod_pro=' . $row['Cod_pro'] . '" class="btn btn-warning btn-center text-white"><em>Reservar Producto</em></a>';
    } else {
      $html .= '<form action="php/eliminarProducto.php" method="post" >
      <input  name="cod_pro" id="cod_pro" type="hidden" value="' . $row['Cod_pro'] . '">
      <input type="submit" value="eliminar" name="accion" class="btn btn-warning btn-center text-white">
    </form>';
    }

    $html .= '</div>
            </div>
          </div>';
  }
  $html .= '  
    </div>
   </div>';



  echo $html;



  ?>



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
</body>

</html>