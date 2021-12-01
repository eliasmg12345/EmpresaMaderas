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

  <section class="contenedor">
    <img src="img/nosotrosport.jpg" class="img-fluid">
  </section>

  <!--CARD1-->
  <div class="card mt-5 container border-white">
    <h1 class="text-center"><strong><em>HISTORIA</em></strong></h1>
    <div class="row g-0">
      <div class="col-md-2"></div>
      <div class="col-md-3 mt-5 mb-5">
        <img class="img-thumbnail rounded-circle" src="img/inicios.jpg" width="650">
      </div>
      <div class="col-md-6 p-3">
        <div class="card-body align-items-center">
          <h1 class="card-title mt-5 h2"><em>Primeros pasos</em></h1>

          <P class="text-warning">___________</P>
          <p class="card-text mb-5 " style="text-align: justify;">Hace más de 10 años la Empresa Maderera comenzó un gran sueño, atender la necesidad de madera para los constructores en el departamento de La Paz - Bolivia.
            En aquel entonces no existía la infraestructura con la que se cuenta hoy en día, por lo cual era muy complicado poder contar con este noble material a disposición para las obras de arquitectura, la fabricación de muebles y diversas aplicaciones, trabajando arduamente comenzó a gestar la cadena de valor que hoy conocemos, con plantas ubicadas en la ciudad de La Paz, Los Yungas y El Alto.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- fin CARD1-->

  <!--CARD2-->
  <div class="card container border-white">
    <div class="row g-0">
      <div class="col-md-2"></div>

      <div class="col-md-6 p-3">
        <div class="card-body align-items-center">
          <h1 class="card-title h2"><em>La Empresa</em></h1>

          <P class="text-warning">___________</P>
          <p class="card-text mb-5" style="text-align: justify;">Nos caracterizamos por ser una empresa que trabaja
            con los mejores proveedores de madera y que se encuentra comprometida con la satisfacción
            total de los compradores, así como con el respeto al medio ambiente que nos permite disfrutar de este recurso, en correspondencia con nuestro desarrollo redoblamos esfuerzos en pro del desarrollo sostenible.
            Introducimos al mercado nuevas especies de madera como el cachimbo, para cuidar las que se encuentran en peligro de extinción.
            Formamos parte de la cámara nacional forestal siendo un activo participante de las políticas medio ambientales</p>
        </div>
      </div>
      <div class="col-md-3 mt-5 mb-5">
        <img class="img-thumbnail rounded-circle" src="img/laEmpresa.jpg" width="650">
      </div>
    </div>
  </div>
  <!--fin CARD1-->

  <!--CARD3-->
  <div class="card container border-white">
    <div class="row g-0">
      <div class="col-md-2"></div>
      <div class="col-md-3 mb-5">
        <img class="img-thumbnail rounded-circle" src="img/futuro.jpg" width="650">
      </div>
      <div class="col-md-6 p-3">
        <div class="card-body align-items-center">
          <h1 class="card-title mt-5 h2"><em>El futuro</em></h1>

          <P class="text-warning">___________</P>
          <p class="card-text mb-5" style="text-align: justify;">En un futuro la Maderera desea continuar
            con la labor apuntando siempre a la excelencia para contribuir al éxito de nuestros clientes,
            velar por el desarrollo sostenible y aportar al crecimiento de cada uno de nuestros colaboradores.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!--finCARD-->

  <!--section-->
  <section class="bg-primary1" id="info">
    <div class="container text-center">
      <div class="row">
        <div class="col mt-5 mb-5">
          <h2 class="text-white"><em>Comprometidos con el Desarrollo Sostenible</em></h2>
          <p class="text-white lead">Como parte de nuestra politica de Responsabilidad Social Corporativa,
            en todas nuestras decisiones tomamos en cuenta el impacto que tienen nuestras acciones en nuestro entorno (la comunidad y el medio ambiente), socios (colaboradores, proveedores) y clientes.
            Formamos parte y colaboramos activamente con estas organizaciones; promoviendo el desarrollo sostenible, la investigación y el bienestar de los ciudadanos.</p>

        </div>
      </div>
    </div>
  </section>
  <!--fin section-->

  <!--mision y vision-->
  <div class="container mt-5 text-center">
    <div class="row mb-6">
      <div class="col-2"></div>
      <div class="col-3 ">
        <img src="img/mision.jpg" class="img-fluid rounded-circle" width="250" alt="">
        <h1 class="mt-3"><em>MISIÓN</em></h1>
        <p class="text-warning">_____________</p>
        <p class="small" style="text-align: justify;">Somos una empresa privada que busca satisfacer la demanda integral de productos para la construcción,
          dotados con maquinaria de última generación, con colaboradores altamente identificados,
          garantizando la entrega oportuna y de calidad con precios muy competitivos.</p>
      </div>
      <div class="col-2 "></div>
      <div class="col-3">
        <img src="img/vision.jpg" class="img-fluid rounded-circle" width="250" alt="">
        <h1 class="mt-3"><em>VISIÓN</em></h1>
        <p class="text-warning">_____________</p>
        <p class="small" style="text-align: justify;">Ser líderes diferenciados en la comercialización de todo tipo de productos para la industria de la construcción,
          que brinde atención profesional y personalizada buscando la satisfacción total de nuestros clientes,
          acorde con nuestra política de responsabilidad Social.</p>
      </div>
      <div class="col-2 "></div>
    </div>
  </div>
  <!--fin mision y vision-->


  <!--valores mas iconos-->
  <div class="academy-courses-area section-padding-100-0 mt-5">
    <h1 class="text-center"><em>VALORES DE LA EMPRESA</em></h1>
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

  <!--section-->
  <section class="bg-primary2" id="info">
    <div class="container text-center">
      <div class="row">
        <div class="col mt-5 mb-5">
          <h2 class="text-white"><em>Nuestro equipo</em></h2>
          <p class="text-white lead"><strong>Nuestro equipo está compuesto por profesionales de primer nivel
              con amplia experiencia en el tratamiento de la madera, especialistas en corte, aserrío,
              cepillado, armado de parihuelas, almacenamiento y control de plagas, constantemente capacitados
              para estar a la vanguardia de las exigencias del mercado,
              con maquinaria de última generación que nos permite optimizar nuestro proceso de la madera reduciendo
              el tiempo de entrega del material.</strong></p>

        </div>
      </div>
    </div>
  </section>
  <!--fin section-->













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