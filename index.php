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
</style>

<body>
  <!--navbar-->
  <?php include "php/navbar.php"; ?>
  <!--Fin del navbar-->

  <!--carrousel-->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" id="slide1">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
  <!--Fin del carrousel-->

  <!--valores mas iconos-->
  <div class="academy-courses-area section-padding-100-0 mt-5">
    <h1 class="text-center"><em>¿POR QUE ELEGIRNOS?</em></h1>
    <div class="container">
      <div class="row">
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4 mt-5">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp">
            <div class="course-icon">
              <i><img src="img/log/integridad.png" class="img-fluid rounded-circle" width="300"></i>
            </div>
            <div class="course-content m-3">
              <h4>Integridad</h4>
              <p class="small">Las personas con las que trabajamos, vivimos y servimos pueden confiar en nosotros. Alineamos nuestras acciones con nuestras palabras y cumplimos lo que prometemos.</p>
            </div>
          </div>
        </div>
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4 mt-5">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp">
            <div class="course-icon">
              <i><img src="img/log/puntualidad.png" class="img-fluid rounded-circle" width="300"></i>
            </div>
            <div class="course-content m-3">
              <h4>Puntualidad</h4>
              <p class="small">Cuidamos nuestra planificación y nuestras promesas para no tomar el tiempo en perjuicio de nadie, actuamos con debida responsabilidad ante un percance avisando con anticipación.</p>
            </div>
          </div>
        </div>
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4 mt-5">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp">
            <div class="">
              <img src="img/log/compromiso.png" class="img-fluid rounded-circle" width="300">
            </div>
            <div class="course-content m-3">
              <h4>Compromiso</h4>
              <p class="small">Aceptamos nuestras responsabilidades como miembros de la empresa y la sociedad. Velamos por los deberes de nuestro puesto y vivimos nuestro rol con pasión. </p>
            </div>
          </div>
        </div>
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4 mt-5">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp">
            <div class="">
              <img src="img/log/solidaridad.png" class="img-fluid rounded-circle" width="300">
            </div>
            <div class="course-content m-3">
              <h4>Solidaridad</h4>
              <p class="small">Ayuda mutua para lograr el éxito más allá del trabajo en equipo, nos sincronizamos hacia un mismo objetivo apoyándonos de las fortalezas de nuestros compañeros. </p>
            </div>
          </div>
        </div>
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4 mt-5">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp">
            <div class="">
              <img src="img/log/excelencia.png" class="img-fluid rounded-circle" width="340">
            </div>
            <div class="course-content m-3">
              <h4>Excelencia</h4>
              <p class="small">Apuntamos cada vez más alto y más lejos. Nos enorgullecemos de nuestra labor y de lo que hacemos posible nos concentramos en las necesidades de nuestros clientes</p>
            </div>
          </div>
        </div>
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4 mt-5 mb-5">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp">
            <div class="">
              <img src="img/log/eficacia.png" class="img-fluid rounded-circle" width="300">
            </div>
            <div class="course-content m-3">
              <h4>Eficacia</h4>
              <p class="small">Con Eficacia creamos valor para nuestros clientes, colaboradores y la sociedad siempre haciendo lo posible por alcanzar nuestras metas trazadas para el mejor desarrollo de la empresa.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Fin valores mas iconos-->

  <!--informacion-->
  <section class="bg-primary" id="info">
    <div class="container text-center">
      <div class="row">
        <div class="col mt-5 mb-5">
          <p class="h5 text-white lead">Llámenos o escríbanos indicándonos sus requerimientos o solicite una visita técnica, sin compromisos, nuestros profesionales lo atenderán muy gustosamente.</p>
        </div>
        <div class="col mt-4 mb-5">
          <button type="button" class="btn btn-warning btn-lg text-white mt-5"><a href="https://wa.me/77274865" class="text-white" style="text-decoration:none">Llámenos 77274865 <i class="bi bi-whatsapp"></i></a></button>
        </div>
      </div>
    </div>
  </section>
  <!--fin informacion-->


  <!--card grandes proyectos-->
  <div class="container">
    <h1 class="text-center mt-5 m-0"><em>MADERAS PARA GRANDES PROYECTOS</em></h1>
    <h6 class="text-center mb-5 lead">Más de 10 años de experiencia proveyendo productos madereros
      para el Sector Construcción, Industrial, Minero, Logístico y Agroindustria.</h6>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
      <div class="col">
        <div class="card border-warning">
          <img src="img/maderas1.jpg" class="card-img-top border-light" alt="...">
          <div class="card-body">
            <h5 class="text-center"><strong><em>MADERAS</strong></em></h5>
            <p class="text-center">Contamos con un amplio stock de madera habilitada en las especies más comerciales
              para la construcción, minería, mueblería y todo uso industrial, con alternativas viables que reducen los costos de sus proyectos hasta en un 40%</p>
            <div class="card text-center">
              <a href="productos.php" class="btn btn-warning">Mas..</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-warning">
          <img src="img/maderas2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center"><strong><em>TRIPLAY</strong></em></h5>
            <p class="text-center">Contamos con mix variado de triplay para construcción: lupuna nacional, Fenólico, Fenólico doble Film, OSB y MDF,
              con nuestra asesoría especializada podrá elegir el más adecuado y reducir su presupuesto de obra hasta en un 45%</p>
            <div class="card text-center">
              <a href="productos.php" class="btn btn-warning">Mas..</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-warning">
          <img src="img/maderas3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="text-center"><strong><em>PALLETS</strong></em></h5>
            <p class="text-center">Fabricamos parihuelas/pallets a medida, modelo y especies según el requerimiento del cliente.
              Para uso local y para exportación (Certificación SENASA y especificaciones técnicas requeridas), con una capacidad de producción de 3500 pallets semanales</p>
            <div class="card text-center">
              <a href="productos.php" class="btn btn-warning">Mas..</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Fin card grandes proyectos-->

  <!--desarrollo sostenible-->
  <section class="bg-primary1" id="info">
    <div class="container text-center">
      <div class="row">
        <div class="col mt-5 mb-4">
          <h2 class="text-white"><em>Comprometidos con el Desarrollo Sostenible</em></h2>
          <p class="text-white lead">Como parte de nuestra politica de Responsabilidad Social Corporativa,
            en todas nuestras decisiones tomamos en cuenta el impacto que tienen nuestras acciones en nuestro entorno (la comunidad y el medio ambiente), socios (colaboradores, proveedores) y clientes.
            Formamos parte y colaboramos activamente con estas organizaciones; promoviendo el desarrollo sostenible, la investigación y el bienestar de los ciudadanos.</p>
        </div>
        <div class="container mb-5">

          <!--
          <a href="formularioRegistro.php" class="btn btn-warning btn-center text-white"><em>Registrarse</em></a>
        -->


        </div>
      </div>
    </div>
  </section>
  <!--fin Desarrollo Sostenible-->


  <!--Informacion rapida de la empresa-->
  <div class="container-fluid mt-5 mb-5">
    <h1 class="text-center mt-5 m-0"><em>LA EMPRESA MADERERA EL ARBOL</em></h1>
    <h6 class="text-center mb-5 lead">Sencillez - Eficacia - Elegancia - Calidad</h6>
    <div class="card mb-3 container border-white">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/log/LOGO MADERERIA OFICIAL-02.png" class="img-fluid rounded-start" width="500" alt="...">
        </div>
        <div class="col-md-8 mt-5">
          <div class="card-body text-center">
            <h5 class="text-center h3"><em>Comprometidos con el Desarrollo Sostenible</em></h5>
            <p class=" h6 lead" style="text-align: justify;">
              Hace más de 10 años la Empresa Maderera comenzó un gran sueño, atender la necesidad de madera para los constructores en el departamento de La Paz - Bolivia.
              En aquel entonces no existía la infraestructura con la que se cuenta hoy en día, por lo cual era muy complicado poder contar con este noble material a disposición para las obras de arquitectura, la fabricación de muebles y diversas aplicaciones, trabajando arduamente comenzó a gestar la cadena de valor que hoy conocemos, con plantas ubicadas en la ciudad de La Paz, Los Yungas y El Alto.
            </p>
          </div>
          <div class="text-center">
            <a href="nosotros.php" class="btn btn-warning"> Ver mas..</a>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--fin Informacion rapida de la empresa-->



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