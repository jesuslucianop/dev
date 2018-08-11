<?php
include "Usuarios.php";
session_start();

class Autenticacion{
    
    public function __construct($nombre, $usuario)
    {
        // $this->nombre = $nombre;
    

    }
     public function registrar(){
   echo "ssdsds";
       
        }
         public function login($username,$password,$mysqli)
         {
            $sql = "Select * from Usuarios where usuario = '".$username."' and password ='".$password."' ";
        
            $row = $mysqli->query("Select * from Usuarios where usuario = '".$username."' and password ='".$password."' ");
             var_dump($sql);
           //  var_dump($row);
             
            if($row->num_rows >0 ){
           
header("Location:../../Dashboard.php");

            }
            /*
            while ($fila = $row->fetch_row()) {
                printf ("%s (%s)\n", $fila[0], $fila[1]);
            }*/
         }
     




}
