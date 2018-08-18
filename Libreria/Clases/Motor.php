<?php
include ("Autenticacion.php");
include ("SubirArchivo.php");

if(isset($_POST['usuario']) and $_POST['clave'])
{

$Lg= new Autenticacion();
return $Lg->login($_POST['usuario'],$_POST['clave']);
echo   $Lg->login($_POST['usuario'],$_POST['clave']);

}
if(isset($_POST['btnuploadlibro']))
{

    $sa = new SubirArchivo();
  

print_r( $sa->uploadFile($_FILES,"./Repositorio",$_POST['titulo'],$_POST['autores'],$_POST['cantidad']));




}