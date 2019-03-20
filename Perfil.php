<?php 
require_once (RUTA_APP.'/vistas/inc/headerU.php');

?>  
<body style="background: #83a4d4; 
background: -webkit-linear-gradient(to right, #b6fbff, #83a4d4);  
background: linear-gradient(to right, #b6fbff, #83a4d4);" >
<?php
foreach($datos['usuario'] as $usuario):
?>
    <form  class="form-group"  action="<?php echo RUTA_URL?>Usuarios/EditarPerfil" method="POST" >

	<div class="container">
	<div class="jumbotron container w-50 h-70 text-center animated flipInX delay-s2" style="margin-top: 50px; background: #8e9eab; 
	background: -webkit-linear-gradient(to right, #eef2f3, #8e9eab);
	background: linear-gradient(to right, #eef2f3, #8e9eab); 
	"> 	
	<i class="fas fa-user-circle"  style="font-size: 90px;"></i>
	<h1 class="display-6">Editar Perfil</h1>
	<br>
	<div class="input-group flex-nowrap">
	<hr class="my-3">
	<div class="input-group-prepend">
	<span class="input-group-text w-10" id="addon-wrapping"><i class="fas fa-users"></i></span>
	</div>

	<input value="<?php echo $usuario->nick_usuario;?>" type="text" class="form-control" placeholder="Nombre Usuario" aria-label="Username" aria-describedby="addon-wrapping" name="nick_usuario" id="numero_de_identificacion">
	</div><br>

	<div class="input-group-prepend">
	<span class="input-group-text w-10" id="addon-wrapping"><i class="fas fa-at"></i></span>

	<input value="<?php echo $usuario->correo_electronico_principal;?>" type="email" class="form-control" placeholder="Correo Electronico" aria-label="Username" aria-describedby="addon-wrapping" name="correo_electronico_principal" id="numero_de_identificacion">
	</div><br>	

    <div class="d-none m-0 p-0" >
	<input value="<?php echo $usuario->numero_de_identificacion;?>" type="text" class="form-control" placeholder="Numero de Identificación" aria-label="Username" aria-describedby="addon-wrapping" name="numero_de_identificacion" id="numero_de_identificacion"></div><br>

	<div class="input-group-prepend">
	<span class="input-group-text w-10" id="addon-wrapping"><i class="fas fa-lock"></i></span>

	<input type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="addon-wrapping" name="contraseña" id="numero_de_identificacion"></div>
	<br>
	
    <button type="submit" class="btn btn-info">Enviar Datos</button>  
	</div>
    </form>

<?php endforeach ?>

<?php 
require_once (RUTA_APP.'/vistas/inc/headerU.php');

?>