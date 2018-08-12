<?php
include ("Autenticacion.php");

$Lg= new Autenticacion();
return $Lg->login($_POST['usuario'],$_POST['clave']);
echo   $Lg->login($_POST['usuario'],$_POST['clave']);
if(isset($_POST['usuario']) and $_POST['clave'])
{

}