<?php
class Usuarios extends Controlador{
	public function __Construct(){
		session_start();
		if(!isset($_SESSION['Usuario'])){
			echo "<script>alert('Acceso denegado'); window.history.go(-1);</script>";
		}else{
			//echo "<script>alert('Bienvenido: ".$_SESSION['Usuario']."');</script>";
    }
    $this->usuario = $this->modelo('UserModel');
	}
  
	public function index($id){

    $usuario=$this->usuario->Seleccionar($id);

    $datos=[
      'usuario' => $usuario
    ];

		$this->vista('usuarios/index',$datos);
		//session_start();
		//echo "<center><p>Bienvenido : ".$_SESSION['Usuario']."</p></center>";
	}
     public function Inicio(){
     	$this->vista('usuarios/inicio');
     }

    public function ShowSitio(){

    	$this->vista('usuarios/MostrarSitio');
    }
    public function VerSitio(){
    	$this->vista('usuarios/Versitio');
    }
     public function VerSitioP(){
    	$this->vista('usuarios/Versitio1');
    }
     public function VerSitioM(){
    	$this->vista('usuarios/Versitio2');
    }
    public function EditarPerfil(){
          if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // $datos =[
            //   'nick_usuario' => rtrim($_POST['nick_usuario']),
            //   'correo_electronico_principal' => rtrim($_POST['correo_electronic_principal']),
            //   'nick_usuario' => rtrim($_POST['nick_usuario']),
            // ];
         //  var_dump($_POST); 
            $this->usuario->EditarPerfilU($_POST);
            header('Location:'.RUTA_URL.'usuario/index');
            echo "Se ha registrado con exito";
          }else{

            $usuario = $this->usuario->Seleccionar($_SESSION['PARAM']);
              $datos=[
                "usuario"=>$usuario
              ];

            $this->vista('usuarios/Perfil',$datos);
          }
    }
}
?>