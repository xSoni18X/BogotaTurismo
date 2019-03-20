<?php
class Administrador extends Controlador{
	public function __Construct(){
		$this->administrador = $this->modelo('Admin');
		session_start();
		if(!isset($_SESSION['Administrador'])){
			echo "<script>alert('Acceso denegado'); window.history.go(-1);</script>";
		}
	}
	public function index(){
		echo "<script>alert('Bienvenido: ".$_SESSION['Administrador']."');</script>";
			$this->vista('administrador/index');
	}
	public function ListaSitios(){
		$valores=$this->administrador->ObtenerSitios();
		$datos=[
			"sitios"=>$valores
		];
		$this->vista("administrador/ListaDeSitios",$datos);
	}
	public function ListaUsuarios(){
		$valores=$this->administrador->ObtenerUsuarios();
		$datos=[
			"usuarios"=>$valores
		];
		$this->vista("administrador/ListaDeUsuarios",$datos);
	}
	public function TraerUsuario($id){
        		$usuario = $this->administrador->TraerUsuario($id);
                $datos=[
                    "empleado"=>$usuario
                ];
                $this->vista("administrador/DatosAdmin",$datos);     
    }
    public function ModificarDatosAdmin(){
    	
    }
    public function Continuara(){
    	$this->vista("administrador/Continuara");
    }
}
?>