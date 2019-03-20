<?php
class Admin{

	private $db;

	public function __construct(){
		$this->db=new Base();
	}
	public function ObtenerSitios(){
		$this->db->query("SELECT * FROM sitios_turistico ");

		return $this->db->registros();
	}
	public function ObtenerUsuarios(){
		$this->db->query("SELECT * FROM usuarios");

		return $this->db->registros();
	}
	public function TraerUsuario($id){
            $this->db->query("SELECT *FROM usuarios where nick_usuario =:nick_usuario");
            $this->db->bind(":nick_usuario",$id);
            return $this->db->registros();
        }
}
?>