<?php
include "Usuarios.php";
include "Conexion.php";
session_start();

class Autenticacion{

    private $db;
    public function __construct($nombre, $usuario)
    {
        $this->db = new Conexion();
        // $this->nombre = $nombre;

    }
     public function registrar(){
   echo "ssdsds";
       
    }

    public function login($username,$password)
    {
        $row = $this->db->query("Select * from Usuarios where usuario = '".$username."' and password ='".$password."' ");
            
        if($row->num_rows >0 ) 
            header("Location:../../Dashboard.php");
            while ($fila = $row->fetch_row()) {
                $_SESSION['nombre_usuario'] = $fila[1];
                $_SESSION['Rol_usuario'] = $fila[4];
            }
        
    }
     




}
