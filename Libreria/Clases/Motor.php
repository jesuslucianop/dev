<?php
require_once ("Autenticacion.php");
require_once ("Usuarios.php");
require_once ("SubirArchivo.php");

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
if(isset($_POST['btncerrar']))
{
    session_destroy();
print_r("Cerro session");
}
/*
if(isset($_POST['btnregistrar']))
{
$us = new Usuarios();
print_r($us->RegistrarUsuarios($_POST['nombre'],$_POST['usuario'],$_POST
['password']));

}*/