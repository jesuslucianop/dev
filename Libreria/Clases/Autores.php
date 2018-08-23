<?php

include "Conexion.php";
class Autores 
{
    private $db;
    public function __construct()
    {
        //Instancia de la conexion
        $this->db = new Conexion();
}

public function AgregarAutor($nbat){

    $consulta = "INSERT INTO GBH.Autores( Nombre)VALUES( '".$nbat."')";
    
    $query= $this->db->query($consulta);
    }
    
}
if(isset($_POST['btnagregarautores'])){
$at = new Autores();
echo $at->AgregarAutor($_POST['nombreautor']);  




}
  