<?php session_start(); ?>

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
    <img src="img/formLogin.jpg" class="img-fluid">
  </div>
  <!--fin portada productos-->


  <!--form-->
  <div class="container">
    <h1 class="text-center mt-5"><strong><em>Complete los Siguientes Espacios</em></strong></h1>
    <div class="row">
      <div class="col">
      </div>
      <div class="col">
        <div class="container">

          <div class="row">
            <div class="col-md-12">
              <div class="well well-sm">
                <form class="form-horizontal" action="php/signin.php" method="post">

                  <fieldset class="mt-5">
                    <div class="form-group">
                      <span class="col-md-1 col-md-offset-2 text-center"><i class="bi bi-person-circle"></i></span>
                      <div class="col-md-10">
                        <input id="ci" name="ci" type="text" placeholder="Cédula de Identidad" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <span class="col-md-1 col-md-offset-2 text-center"><i class="bi bi-lock-fill"></i></span>
                      <div class="col-md-10">
                        <input id="password" name="password" type="password" placeholder="password" class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-10 text-center mb-5 mt-5">
                        <button type="submit" class="btn btn-warning btn-lg text-white"><em>Acceder</em></button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">

      </div>
    </div>
  </div>
  <!--form-->












































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