<?php
/**
 * Clase Paginas, esta clase sirve
 * para mostrar la vista principal del sistema
 * a los usuarios de este mismo.
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
Class Paginas Extends Controlador{
    /**
     * [__Construct description]
     * @return [type] [description]
     * Contructor de la clase paginas
     */
	public function __Construct(){
        //Modelo Colsultas.php, Modelo donde se
        //realizan consultas a la Base de datos.
        /**
         * [$this->Usuario description]
         * @var [type]
         */
		$this->Usuario = $this->modelo('Consultas');
        /**
         * librerias de phpmailer
         */
        require (RUTA_APP.'/helpers/vendor/autoload.php');
	}
    /**
     * [index description]
     * @return [type] [description]
     * Funcion index, funcion por defecto de la clase
     * Paginas, funcion que trae la vista principal del sistema.
     */
	public function index(){
        //Vista del inicio.
		$this->vista('paginas/index');
	}
    /**
     * [InicioDeSesion description]
     * Funcion para Inicio de sesión
     */
	public function InicioDeSesion(){
        // echo password_hash("JhonSena1234", PASSWORD_DEFAULT);
            /**
             * Estructura que verifica si se envia
             * por el servidor algun dato por metodo
             * POST.
             */
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                //Si se envia un datos se asigna el valor a estas
                //variables segun la consulta en la base de datos
                //y se realiza otra estructura de control switch.
                /**
                 * [$datos description]
                 * @var [type]
                 */
                $datos=[
                        'nick_usuario'=>rtrim($_POST['Input_Nombre_Usuario']),
                        'contraseña'=>rtrim($_POST['Input_Contraseña_Usuario'])
                    ];
                    /**
                     * [$valor description]
                     * @var [type]
                     */
                $valor=$this->Usuario->Login($datos);
                //Estructura de control switch para verificar los datos que ingresa
                //el servidor.
                    switch ($valor) {
                            /**En caso que coincida la contraseña y no coincida el usuario
                            *Se envia un mensaje informado del error.
                            */
                        case @password_verify($_POST['Input_Contraseña_Usuario'],$valor->contraseña)&& $_POST['Input_Nombre_Usuario']!=$valor->nick_usuario :
                            echo "<script>alert('Error de acceso, estas digitando mal tu usuario, Por favor intenta de nuevo.');window.history.go(-1);</script>";
                                break;
                                /**
                                 * En caso de que concida tanto el usuario como
                                 * la contraseña se genera una estructura de control
                                 * para validar el rol de cada usuario.
                                 */
                        case password_verify($_POST['Input_Contraseña_Usuario'],$valor->contraseña)&& $_POST['Input_Nombre_Usuario']==$valor->nick_usuario:
                            /**
                             * [$valor->id_rol description]
                             * @var [type]
                             * Estructura de control para validar el rol.
                             */
                            if ($valor->id_rol==4) {
                                //Si el usuario es administrador se inicia sesión  
                                //con su respectivo rol.
                                session_start();
                                //Variable que guarda la informacion del usuario
                                //Al iniciar sesión
                                $_SESSION["Administrador"]=$valor->nick_usuario;
                                header("Location: http://".$_SERVER['HTTP_HOST']."/Bogota_Turismo(Final)/Administrador/index");
                            }else if ($valor->id_rol==5) {
                                //Si el usuario no tiene rol de administrador se inicia sesión con su respectivo rol.
                                session_start();
                                //Variable que guarda la informacion del usuario
                                //Al iniciar sesión
                                $_SESSION['Usuario']=$valor->nick_usuario;
                                $identi= $valor->numero_de_identificacion;
                                header("Location: http://".$_SERVER['HTTP_HOST']."/Bogota_Turismo(Final)/Usuarios/index/".$identi);
                            }
                            break;
                        /**
                         * En caso de que el usuario coincida con la consulta y la contraseña
                         * se incorrecta, se informa al usuario el error.
                         */
                        case $_POST['Input_Nombre_Usuario']==$valor->nick_usuario && $_POST['Input_Contraseña_Usuario']!=$valor->contraseña :
                        echo "<script>alert('Error de acceso, estas digitando mal tu contraseña, Por favor intenta de nuevo.');window.history.go(-1);</script>";
                            break;
                        default:
                            echo "<center><p style='size:16px;'>Error de ingreso, El usuario no existe</p></center>";
                            break;
                    }
            }else{
                //Si no existe un dato que se envie por el servidor
                //Se informa al usuario y se redirecciona una pagina atras en el historial.
                echo "<script>alert('Acceso denegado');window.history.go(-1);</script>";
            }
        }//fin de Inicio_De_Sesion
        public function EnvioCorreo(){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                define('EMAIL_PASSWORD', 'Bogota25Turismo2018');

                $mail = new PHPMailer(true);

                try {
                    $mail->SMTPDebug = 2;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'bogotaturismo25@gmail.com';
                    $mail->Password = EMAIL_PASSWORD;
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;
                    /**
                     * Mensaje que se envia
                     */
                    $mail->setFrom('bogotaturismo25@gmail.com');
                    $mail->addAddress('');
                    $mail->isHTML(true);
                    $mail->Subject = 'Esta es una prueba de email';
                    $mail->Body = '
                    <center>Hola Usuarios:<br>
                    te saludamos desde Bogota Turismo 2019<br>
                    Bienvenido a nuestro sistema.</center>
                    ';
                    $mail->send();
                }catch (Exception $exception) {
                    echo 'Algo salio mal', $exception->getMessage();
                }
                if(!$mail->send()) {
                //mensaje de error
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    // mensaje si se envia el correo
                    echo "<script>alert('Mensaje enviado correctamente');window.history.go(-1);</script>";
                    exit();
                }
            }else{
                echo "<script>alert('No existe ningun dato que se envie.');window.history.go(-1);</script>";
            }
        }
        public function LogOut(){
            session_start();
            session_destroy();
            header("Location: http://".$_SERVER['HTTP_HOST']."/Bogota_Turismo(Final)/");
        }
        public function CrearCuentaU(){
            $this->vista('paginas/CrearCuenta');
        }
        public function CrearUsuario(){
            $this->Usuario->CrearUsuario($_POST);   
            header("Location:".RUTA_URL);
        }
}
?>