
	<link rel="stylesheet" type="text/css" href="<?php RUTA_URL?>../css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php RUTA_URL?>../css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php RUTA_URL?>../css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="<?php RUTA_URL?>../css/main.css">

	<link rel="stylesheet" type="text/css" href="<?php RUTA_URL?>../css/util.css">

	<link rel="stylesheet" href="<?php RUTA_URL?>https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">



	<title>Registro Usuario</title>
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more"></div>
			<div class="wrap-login100">
				<form action="<?=RUTA_URL?>Paginas/CrearUsuario" method="POST">
						<span class="login100-form-title p-b-28" >
							Regístrate
						</span>
						<!-- <span class="login100">  -->
							<!-- <i class="zmdi zmdi-font"></i>  -->
						<!-- </span> -->

						<div class="wrap-input100 validate-input" data-validate="Ingrese nombre">
						<input class="input100" type="text" name="nombres_usuario" required>
							<span class="focus-input100" data-placeholder="Nombres" ></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Ingrese apellido">
						<input class="input100" type="text" name="apellidos_usuario">
							<span class="focus-input100" data-placeholder="Apellido"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Ingrese Usuario">
						<input class="input100" type="text" name="nick_usuario">
							<span class="focus-input100" data-placeholder="Nombre De Usuario"></span>
						</div>

						<div class=" wrap-input100 validate-input " data-validate = "Valid email is: email@example.com">
							<input class="input100" type="email" name="correo_electronico_principal">
							<span class="focus-input100" data-placeholder="Email@example.com"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Ingrese telefono">
						<input class="input100" type="number" name="numero_celular" maxlength="10" required>
							<span class="focus-input100" data-placeholder="Teléfono"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Ingrese Número de identidad">
						<input class="input100" type="number" name="numero_de_identificacion" maxlength="10" required>
							<span class="focus-input100" data-placeholder="N° Identidad"></span>
						</div>
						<div class="wrap-input100 ">
						<spa class="span-control">Selecciona tu tipo de documento</span>
							<select name="id_tipo_documento" class="input100 form-control" require>
							<option>Seleccione....</option>
								<option value="1">Cedula De Ciudadania</option>
								<option value="2">Tarjeta De Identidad</option>
								<option value="3">Cedula De Extrangeria</option>
							</select> 
						</div>

						<!--
						<div class="wrap-input100 ">
						<div class="input100 focus-input100" >
						<span class="input100"> Fecha de nacimiento</span> 
						<input type="date" name="nacimiento" step="1" min="1970-01-01" max="2018-12-31" value="2018-01-01">
						</div
						 -->
						

						<div class="wrap-input100 "> 
						<span data-placeholder="Selecciona tu gusto favorito"></span>
						<select class="input100 form-control">
						<option value="0">Selecciona gusto turístico...</option>
						<option value="1">Ancestral</option>
						<option value="2">Ecológico</option>
						<option value="3">Científico</option>
						<option value="4">Cultural y recreativo</option>
						</select>
						</div>

							<div class="wrap-input100 validate-input" data-validate="Ingrese password">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="contraseña" maxlength="10" required>
							<span class="focus-input100" data-placeholder="Password"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Ingrese password">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="contraseña" maxlength="10" required>
							<span class="focus-input100" data-placeholder="Confirmar Password"></span>
						</div>

							
							<div class="wrap-input100 "> 
							<span data-placeholder="Selecciona una pregunta de seguridad"></span>
							<select class="input100 form-control" name="cod_pregunta_seguridad">
							<option value="0">Selecciona pregunta de seguridad...</option>
							<option value="1">1. Color favorito</option>
							<option value="2">2. Número favorito</option>
							<option value="3">3. Nombre de tu mascota</option>
							<option value="4">4. Nombre de tu mamá</option>
							</select>
							</div>
							<div class="wrap-input100 validate-input" data-validate="Ingresa tu respuesta">
							<input class="input100" type="text" name="id_tipo_pregunta" maxlength="10" required>
							<span class="focus-input100" data-placeholder="Ingresa tu respuesta"></span></div>

				
						<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" type="submit"> 
							Registrar
						</button>
							</div>
						</div>
					</form>
					<div class="text-center p-t-100">
						<span class="txt1">
							¿No tienes una cuenta? Regístrate, es gratis. 
						</span>

						<!-- <a class="txt2" href="#"> -->
							<!-- Regístrate -->
						<!-- </a> -->
					</div>
			</div>
		</div>
	</div>
	 


	</form>
	
<?php
require_once (RUTA_APP.'/vistas/inc/footerR.php');
?>

