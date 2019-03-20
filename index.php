<?php 
require_once (RUTA_APP.'/vistas/inc/headerU.php');?>
<body style="background: #E0EAFC;  
background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  
background: linear-gradient(to right, #CFDEF3, #E0EAFC); 
">
<?php
    foreach ($datos['usuario'] as $usuario) :?>

<nav class="navbar navbar-expand navbar-light container" id="img1" style="background: #2E90E2; margin-top: 30px;">
  <a class="navbar-brand" href="<?php echo RUTA_URL?>Paginas/index">BCT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white ml-5" href="#" style="font-size: 18px; font-family: 'Sniglet', cursive;">Inicio</a>
      </li>
            <li class="nav-item">
        <a class="nav-link text-white ml-5" href="<?php echo RUTA_URL?>Usuarios/EditarPerfil/<?php echo $usuario->numero_de_identificacion?>" style="font-size: 18px; font-family: 'Sniglet', cursive;">Configuración</a>
      </li>
      <?php
      endforeach
      ?>
     <li class="nav-item">
        <a class="nav-link text-white ml-5" href="<?php echo RUTA_URL?>Usuarios/ShowSitio" style="font-size: 18px; font-family: 'Sniglet', cursive;">Favoritos</a>
      </li>
        <li class="nav-item">
        <a class="nav-link text-white ml-5" href="<?php echo RUTA_URL?>Paginas/LogOut" style="font-size: 18px; font-family: 'Sniglet', cursive;">Cerrar sesión</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron container w-50 text-center animated flipInX delay-s2" style=" margin-top: 35px; background: #DBE6F6; 
background: -webkit-linear-gradient(to right, #FFDBD6, #DBE6F6); 
background: linear-gradient(to right, #FFDBD6, #DBE6F6); 
">
    <h1 class="display-4">Hola Turistas</h1>
    <div class="container">
      <p class="lead">Esta es una pagina web que nos permite acceder a los diferentes lugares acerca del turismo en bogota.
        En la actualidad nuestra pagina cuenta con lugares que serian parques y museos</p>
      <hr class="my-3">
<center>
  <div id="Mycarousel" class="carousel slide carousel-fade container" data-ride="carousel">

    <ul class="carousel-indicators">
      <li data-target="#Mycarousel" data-slide-to="0" class="active"></li>
      <li data-target="#Mycarousel" data-slide-to="1"></li>
      <li data-target="#Mycarousel" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner carousel1">
      <div class="carousel-item banner-altura-200 active">
      <img class="d-block w-100" src="<?= RUTA_URL?>/img/carousel/bg1.jpg">
        <div class="carousel-caption d-none d-md-block">
        <h3 class="text-light">Candelaria</h3>
        <p>Centro de Bogotá</p>
        </div>
      </div>


      <div class="carousel-item banner-altura-200 ">
      <img class="d-block w-100" src="<?= RUTA_URL?>/img/carousel/bg2.jpg">
        <div class="carousel-caption d-none d-md-block">
        <h3 class="text-light">Macarena</h3>
        <p>Descubre nuevos lugares</p>
        </div>
      </div>

      <div class="carousel-item banner-altura-400 ">
        <img class="d-block w-100" src="<?= RUTA_URL?>/img/carousel/bg8.jpg">
        <div class="carousel-caption d-none d-md-block">
        <h3 class="text-light">Monserrate</h3>
        <p>Santuario de Bogotá</p>
        </div>
      </div>
      </div>

    <a class="carousel-control-prev" href="#Mycarousel" data-slide="prev"><span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#Mycarousel" data-slide="next"><span class="carousel-control-next-icon"></span>
    </a>
  </div>
</center>
</div>
<br>
<?php
require_once (RUTA_APP.'/vistas/inc/footerU.php');
?>

