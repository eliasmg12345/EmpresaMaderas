<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color:rgba(0, 0, 0, 0.5);">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/log/LOGO MADERERIA OFICIAL-07.svg" width="55" height="55"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"> <i class="bi bi-house-door-fill"></i> Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nosotros.php">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="servicios.php">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactos.php">Contactos</a>
        </li>
      </ul>

      <ul class="nav navbar-nav">
        <?php if (!isset($_SESSION["user_id"])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="./formularioRegistro.php">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./formularioLogin.php">Iniciar Sesion</a>
          </li>


        <?php } else if ($_SESSION["user_id"] == 10) { ?>

          <li class="nav-item">
            <a class="nav-link" href="../reservas.php">Reservas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../reportes.php">Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./php/signout.php">Salir</a>
          </li>

        <?php } else { ?>



          <?php ?>
          <li class="nav-item">
            <a class="nav-link" href="../reservas.php">Mis Reservas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./php/signout.php">Salir</a>
          </li>
        <?php } ?>
      </ul>

      <li class="nav-item" style="list-style: none;">
        <a class="text-white" href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
        <a class="text-white" href="https://www.twitter.com/"><i class="bi bi-twitter"></i></a>
        <a class="text-white" href="https://wa.me/77274865"><i class="bi bi-whatsapp"></i></a>
        <a class="text-white" href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
      </li>
    </div>
  </div>
</nav>