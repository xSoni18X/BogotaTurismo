<?php 
require_once (RUTA_APP.'/vistas/inc/headerU.php');?>
  <body style="background: #E0EAFC;  background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  
background: linear-gradient(to right, #CFDEF3, #E0EAFC); ">

<div class="container">
  <div class="jumbotron container w-200 text-center animated flipInX delay-s2" style="margin-top: 35px; background: #EFEFBB; background: -webkit-linear-gradient(to right, #EDFAFF, #FFFFE8);  background: linear-gradient(to right, #EDFAFF, #FFFFE8);">

    <h1 class="display-4">Visita Nuestros Sitios</h1>
      <hr class="my-3">
<div class="card-group">
  <div class="card" style="background: #00416A; background: -webkit-linear-gradient(to right, #F1E8D1, #BBD7E8); background: linear-gradient(to right, #F1E8D1, #BBD7E8); ">
    <img src="<?php RUTA_URL?>../img/carousel/bg5.jpg" class="card-img-top w-75 h-80 m-5" alt="Card image cap"></td>
    <div class="card-body">
      <h5 class="card-title text-center text-dark">Planetario</h5>
      <p class="card-text">El Planetario de Bogotá es un centro cultural y planetario ubicado en el Centro Internacional de Bogotá en Colombia, dentro del Parque de la Independencia.</p>
      <p class="card-text"><small class="text-muted">Centro de Bogotá D.C</small></p>
      <a class="btn btn-outline-info"  href="<?php echo RUTA_URL?>Usuarios/VerSitioP">Ver Sitio</a>
    </div>
  </div>
  <div class="card" style="background: #00416A; background: -webkit-linear-gradient(to right, #F1E8D1, #BBD7E8); background: linear-gradient(to right, #F1E8D1, #BBD7E8); ">
    <img src="<?php RUTA_URL?>../img/carousel/bg2.jpg" class="card-img-top w-75 h-80 m-5 img1">
    <div class="card-body">
      <h5 class="card-title text-center text-dark">Macarena</h5>
      <p class="card-text">La Macarena es un barrio de ambiente con centros culturales que abarcan galerías y Museos Nacionales.</p><br>
      <p class="card-text"><small class="text-muted">Centro de Bogotá D.C</small></p>
       <a class="btn btn-outline-info"  href="<?php echo RUTA_URL?>Usuarios/VerSitioM">Ver Sitio</a>
    </div>
  </div>
  <div class="card" style="background: #00416A; background: -webkit-linear-gradient(to right, #F1E8D1, #BBD7E8); background: linear-gradient(to right, #F1E8D1, #BBD7E8); ">
    <img src="<?php RUTA_URL?>../img/carousel/bg3.jpg" class="card-img-top w-75 h-40 m-5" alt="...">
    <div class="card-body">
      <h5 class="text-title text-center text-dark ">Monserrate</h5>
      <p class="card-text">El cerro de Monserrate es el más conocido de los cerros Orientales de Bogotá junto a Guadalupe es uno de los cerros titulares de la ciudad.</p>
      <p class="card-text"><small class="text-muted">Centro de Bogotá D.C</small></p>
      <a class="btn btn-outline-info"  href="<?php echo RUTA_URL?>Usuarios/VerSitio">Ver Sitio</a>
    </div>
  </div>
</div>
</div>

<?php
require_once (RUTA_APP.'/vistas/inc/footerU.php');
?>