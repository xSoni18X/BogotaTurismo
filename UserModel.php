 <?php 

/**
 * 
 */
class UserModel
{
	
	public function __construct()
	{
		$this->Conexion = new Base();
	}

	public function ConsultarUser($id){
            $this->Conexion->query("SELECT * FROM usuarios WHERE correo_electronico_principal = ?");
            $this->Conexion->bind(1,$id);
            $this->Conexion->execute();
            return $this->Conexion->show();
        
	}

	public function EditarPerfilU($data){
        try{
            $this->Conexion->query("UPDATE `usuarios` 
            SET `nick_usuario`=?,`correo_electronico_principal`=?, `contraseña`=? 
            WHERE `numero_de_identificacion`=?");
            $this->Conexion->bind(1,$data['nick_usuario'],PDO::PARAM_STR);
            $this->Conexion->bind(2,$data['correo_electronico_principal'],PDO::PARAM_STR);
            $this->Conexion->bind(3,password_hash($data['contraseña'], PASSWORD_BCRYPT),PDO::PARAM_STR);
            $this->Conexion->bind(4,$data['numero_de_identificacion'],PDO::PARAM_INT);
            // $this->Conexion->execute();
            return $this->Conexion->execute();
            var_dump($data);
        }catch(Exception $e){
            die($e);
        }
    }
    public function Seleccionar($id){
        $this->Conexion->query("SELECT *FROM usuarios where numero_de_identificacion =:numero_de_identificacion");
        $this->Conexion->bind(":numero_de_identificacion",$id);
        return $this->Conexion->registros();
    }
}
















 ?>