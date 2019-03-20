<?php
/**
 * 
 */
class Consultas{
	public function __Construct()
	{
		$this->Conexion= new Base();
	}
	public function Login($datos){
        $this->Conexion->query("SELECT nick_usuario, contraseña, codigo_usuario	, id_rol, numero_de_identificacion From usuarios WHERE nick_usuario=:nick_usuario");
        $this->Conexion->bind(":nick_usuario",$datos['nick_usuario']);
        return $this->Conexion->registro();
    }
    public function verUsuarios(){
        $this->Conexion->query("SELECT nick_usuario, contraseña, codigo_usuario	, id_rol From usuarios WHERE nick_usuario=:nick_usuario");
        return $this->Conexion->registros();
    }
    //Codigo Lizeth
    public function CrearUsuario($data){
        try{
        $this->Conexion->query("INSERT INTO usuarios (nombres_usuario,apellidos_usuario,nick_usuario,id_rol,correo_electronico_principal,numero_celular,id_tipo_documento,numero_de_identificacion,contraseña,id_estado) values (?,?,?,?,?,?,?,?,?,?)");
            $this->Conexion->bind(1,$data['nombres_usuario'],PDO::PARAM_STR);
            $this->Conexion->bind(2,$data['apellidos_usuario'],PDO::PARAM_STR);
            $this->Conexion->bind(3,$data['nick_usuario'],PDO::PARAM_STR);
            $this->Conexion->bind(4,'5');
            $this->Conexion->bind(5,$data['correo_electronico_principal'],PDO::PARAM_STR);
            $this->Conexion->bind(6,$data['numero_celular'],PDO::PARAM_INT);
            $this->Conexion->bind(7,$data['id_tipo_documento'],PDO::PARAM_INT);
            $this->Conexion->bind(8,$data['numero_de_identificacion'],PDO::PARAM_INT);
            $this->Conexion->bind(9,password_hash($data['contraseña'], PASSWORD_BCRYPT),PDO::PARAM_STR);
            $this->Conexion->bind(10,'1');
            return $this->Conexion->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
         public function PreguntasSeguridad($data){
            try{
            $this->Conexion->query("INSERT INTO preguntas_de_seguridad (cod_pregunta_seguridad,id_tipo_pregunta) values (?,?)");
            $this->Conexion->bind(1,$data['cod_pregunta_seguridad'],PDO::PARAM_STR);
            $this->Conexion->bind(2,$data['id_tipo_pregunta'],PDO::PARAM_STR);
            return $this->Conexion->execute();
            } catch (Exception $e) {
            die($e->getMessage());
            }
            }
}
?>