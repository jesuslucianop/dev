<?php 
class Conectar{

  //Creamos un método estático que no necesita ser instanciado
  public static function conexion(){
     
    //new mysqli creamos o instanciamos el objeto mysqli
    //new mysqli('servidor','usuario','contraseña','nombre de la BD');
        $conexion=new mysqli("localhost", "root", "jesus2526", "GBH");
             
       //llamamos a la conexión y hacemos una consulta para utilizar UTF-8
        $conexion->query("SET NAMES 'utf8'"); 
 
       //devolvemos la conexión para que pueda ser utilizada en otros métodos
        return $conexion; 
    }


}