<?php
include ("./Libreria/Clases/Conexion.php");
class Usuarios
{
    public $nombre;
    public $usuario;
    public $password;
    public $rol;
    public function __construct(){
        $this->nombre  = $nombre;
        $this->usuario  = $usuario;
        $this->password  = $password;
        $this->rol  = $rol;
        $this->db = Conectar::conexion();
        $this->usuario  = "sss";
    }
    public function registrar(){
   
   return $this->usuario;

  
    }
    public function login()
    {
        
    }



}
$f = new Usuarios();
echo $f->registrar();