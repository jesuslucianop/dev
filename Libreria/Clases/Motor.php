<?php
include ("Autenticacion.php");
include "Conexion.php";
$Lg= new Autenticacion();
return $Lg->login($_POST['usuario'],$_POST['clave'],$mysqli);
echo   $Lg->login($_POST['usuario'],$_POST['clave'],$mysqli);
if(isset($_POST['usuario']) and $_POST['clave'])
{

}