<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<br>
	<div class="jumbotron container w-50 text-center animated flipInX delay-s2">
	  <h1 class="display-4">Hola Turistas</h1>
	  <div class="container">
		  <p class="lead">Esta es una pagina web que nos permite acceder a los diferentes lugares acerca del turismo en bogota.
		  	En la actualidad nuestra pagina cuenta con lugares que serian parques y museos</p>
		  <hr class="my-3">
		  <p>Los lugares historicos nos proporcionan mucha informacion</p>
		  <a tabindex="0" class="btn btn-lg btn-outline-info" role="button" data-toggle="popover" data-trigger="focus" title="Información" data-content="Para conocer mas informacion sobre la pagina por favor inicia sesión en su apartado"><i class="fa fa-book fa-4x fa-lg"></i></a>	
		</div>
	</div>
<center>
	<div id="Mycarousel" class="carousel slide carousel-fade container" data-ride="carousel">

	  <ul class="carousel-indicators">
	    <li data-target="#Mycarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#Mycarousel" data-slide-to="1"></li>
	    <li data-target="#Mycarousel" data-slide-to="2"></li>
	  </ul>

	  <div class="carousel-inner carousel1">
	    <div class="carousel-item banner-altura-200 active">
	      <img class="d-block w-100" src="<?php RUTA_URL?>../img/carousel/bg1.jpg">
	      <div class="carousel-caption d-none d-md-block">
	    	<h3 class="text-light">Candelaria</h3>
	    	<p>Centro de Bogotá</p>
  		  </div>
	    </div>


	    <div class="carousel-item banner-altura-200 ">
	      <img class="d-block w-100" src="<?php RUTA_URL?>../img/carousel/bg2.jpg">
	      <div class="carousel-caption d-none d-md-block">
	    	<h3 class="text-light">Macarena</h3>
	    	<p>Descubre nuevos lugares</p>
  		  </div>
	    </div>

	    <div class="carousel-item banner-altura-400 ">
	      <img class="d-block w-100" src="<?php RUTA_URL?>../img/carousel/bg8.jpg">
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
<br>

<?php 
 require_once (RUTA_APP.'/vistas/inc/footerU.php');


?>

