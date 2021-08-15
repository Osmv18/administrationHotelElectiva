<div id="header">
  <?php if(isset($_SESSION['user'])){
          if ($_SESSION['user'] == "user"){ ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="img/Logo_Hotel.png" alt="logo" id="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">I</span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          <a class="nav-link" aria-current="page" href="#">  Contáctenos</a>
          <a class="nav-link" aria-current="page" href="?=controller_user">  Ver Habitaciones</a>
        </div>
        <div class="navbar-nav ml-auto" id="header-sesion">
          <a class="nav-link" href="?c=controller_logout">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </nav>
  <?php   } else {   ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="img/Logo_Hotel.png" alt="logo" id="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">I</span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          <a class="nav-link" aria-current="page" href="#">  Administrar Contacto</a>
          <a class="nav-link" aria-current="page" href="?=controller_admin">  Administrar Habitaciones</a>
        </div>
        <div class="navbar-nav ml-auto" id="header-sesion">
          <a class="nav-link" href="?c=controller_logout">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </nav>
  <?php } ?>
  <?php } else { ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="img/Logo_Hotel.png" alt="logo" id="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">I</span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          <a class="nav-link" aria-current="page" href="#">  Contáctenos</a>
        </div>
        <div class="navbar-nav ml-auto" id="header-sesion">
          <a class="nav-link" href="?c=controller_login">Iniciar Sesión</a>
        </div>
      </div>
    </div>
  </nav>
  <?php } ?>
</div>