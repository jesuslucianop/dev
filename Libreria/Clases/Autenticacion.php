<?php
include "Usuarios.php";
include "Conexion.php";

class Autenticacion extends Usuarios{
    
    public function __construct($nombre, $usuario)
    {
        // $this->nombre = $nombre;
        $this->usuario = $usuario;

    }
     public function registrar(){
        $sql = "inset into usuarios(nombre,username) values $this->nombre,$this->usuario) ";
        echo $sql;
       
        }
         public function login()
         {
         
         
         }
     




}

