<?php
include_once "Conexion.php";
class Usuarios
{
    private $db;
    public  $nombre;
    public $usuario;
    public  $password;
    public $rol;
    
     public function  __construct(){
        $this->db = new Conexion();
  
     }
     //Metodo Para Regisrar Usuarios Nuevos En la base DE datos
     public function RegistrarUsuarios($nombre,$usuario,$password,$Rol)
     {
        $n = $nombre;
        $u= $usuario;
        $p = $password;
        $R = $Rol;
        $query = $this->db->query("INSERT INTO GBH.Usuarios 
        (nombre,  usuario,password, Rol) VALUES('".$n."', '".$u."', '".$p."' ,'".$R."' )");


     }
     public function GetSeachUser()
     {
        $result = $this->db->query("Select * from Usuarios ");
       // $rows = $result->fetch_array(MYSQLI_ASSOC);
      
        while($row = $result->fetch_array())
        {
        $rows3[] = $row;
        }
        
        foreach($rows3 as $row2)
        {
     echo $row2;

        }
        

     }

    }//Finalizacion de la clase

    if(isset($_POST['btnregistrar']))
    {
        $us = new Usuarios();
        print_r($us->RegistrarUsuarios($_POST['nombre'],$_POST['usuario'],$_POST['password'],$_POST['rol']));
        echo $us->RegistrarUsuarios($_POST['nombre'],$_POST['usuario'],$_POST['password'],$_POST['rol']);


    }
  