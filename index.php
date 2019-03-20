<?php
require_once (RUTA_APP.'/vistas/inc/header.php');
require_once (RUTA_APP.'/vistas/inc/navbar.php');
?>
</div>
<script type="text/javascript" src="<?php echo RUTA_URL?>js/youtubeAppi.js"></script>
<br>  
	<div class="jumbotron container w-50 text-center animated flipInX delay-s2">
	  <h1 class="display-4">Hola Visitantes</h1>
	  <div class="container">
		  <p class="lead">Esta es una pagina web que nos permite acceder a los diferentes lugares acerca del turismo en bogota.
		  	En la actualidad nuestra pagina cuenta con lugares que serian parques y museos</p>
		  <hr class="my-3">
		  <p>Los lugares historicos nos proporcionan mucha informacion</p>
		  <a tabindex="0" class="btn btn-lg btn-outline-info" role="button" data-toggle="popover" data-trigger="focus" title="Información" data-content="Para conocer mas informacion sobre la pagina por favor inicia sesión en su apartado"><i class="fa fa-book fa-4x fa-lg"></i></a>	
		</div>
	</div>
<center>
  <div id="player">
    
  </div>
	<div id="Mycarousel" class="carousel slide carousel-fade container" data-ride="carousel">

	  <ul class="carousel-indicators">
	    <li data-target="#Mycarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#Mycarousel" data-slide-to="1"></li>
	    <li data-target="#Mycarousel" data-slide-to="2"></li>
	  </ul>

	  <div class="carousel-inner carousel1">
	    <div class="carousel-item banner-altura-400 active">
	      <img class="d-block w-100" src="<?php RUTA_URL?>img/carousel/bogota1.jpg">
	      <div class="carousel-caption d-none d-md-block">
	    	<h3 class="text-light">Jardin Botanico</h3>
	    	<p>Cerca del agua.</p>
  		  </div>
	    </div>


	    <div class="carousel-item banner-altura-400 ">
	      <img class="d-block w-100" src="<?php RUTA_URL?>img/carousel/bogota2.jpg">
	      <div class="carousel-caption d-none d-md-block">
	    	<h3 class="text-light">Salitre Magico</h3>
	    	<p>Vista aerea</p>
  		  </div>
	    </div>

	    <div class="carousel-item banner-altura-400 ">
	      <img class="d-block w-100" src="<?php RUTA_URL?>img/carousel/bogota3.jpg">
	      <div class="carousel-caption d-none d-md-block">
	    	<h3 class="text-light">Museo del oro </h3>
	    	<p>Vista desde el interior</p>
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
require_once (RUTA_APP.'/vistas/inc/footer.php');
?>
      <div class="modal animated rubberBand" id="ModalLogin">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header" style="background-color: rgba(0, 75, 147, 1);">
                <style>
                    .modal-title{
                        margin-left:160px;
                    }
                    button{
                        margin-right: -10px;
                    }
                </style>
                <h5 class="modal-title text-light">Iniciar Sesión</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="text-danger">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="text-dark">
                  <!-- Div de mensaje de errores -->
                    <div class="alerta">
                    </div>
                    <!--Codigo opcional para inicio de sesion por roles y 
                     validaciones -->
                <!-- <p class="parrafo1">Selecciona tu tipo de usuario.</p>
                    <div class="selectDiv">
                      <select name="SelectOptions" id="SelectOptions" class="custom-select">
                        <option value="Default">Seleción</option>
                        <option value="Admin">Administrador</option>
                        <option value="User">Vendedor</option>
                      </select> 
                    </div> -->
                    <p class="text-center">Ingresa tus datos:</p>
                    <div class="dropdown">
                    <div class="inputslogin">
                      <form class="form-control" method="post" action="<?php echo RUTA_URL;?>Paginas/InicioDeSesion">
                        <div class="form-group">
                          <label class="control-label">Nombre Usuario</label>
                          <div class="form-group">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-users"></i></span>
                              </div>
                              <input type="text" class="form-control" aria-label="Usuario" placeholder="Nombre De Usuario" name="Input_Nombre_Usuario" value="Eylen2323" id="Input_Nombre_Usuario">
                            </div>
                          </div>
                        </div>
                    <div class="form-group">
                      <label for="contraseña" class="control-label">Contraseña:</label>
                      <div class="form-group">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                          </div>
                          <input type="password" name="Input_Contraseña_Usuario" placeholder="Contraseña" required  class="form-control" aria-label="Usuario" id="Input_Contraseña_Usuario" value="Eylen1234" enabled>
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-eye" id="mostrar"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                <span>¿No eres cliente? Registrate: </span><a href="<?= RUTA_URL?>/Paginas/Registro" class="text-info"> Registrar</a>
              </div>
              </div>
              <div class="modal-footer align-items-start">
                    <button class="btn btn-success w-50" type="submit">Iniciar</button>
                    <button type="button" class="btn btn-danger w-50" data-dismiss="modal">Cancelar</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>