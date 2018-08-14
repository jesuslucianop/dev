<?php 



session_start();?>
<html>
<head>
<link rel="stylesheet" href="./Assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="./Assets/css/style.css"/>
<script type="text/javascript" src="./Assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./Assets/js/bootstrap.min.js"></script>


</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Api Bibliotecaria</a>
    </div>
    <ul class="nav navbar-nav">
   <?php if($_SESSION['Rol_usuario'] == 1){?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrar Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
          <?php }?>
              <li><a href="./Dashboard.php">Libros Disponible</a></li>
               <li><a href="./Upload.php">Subir Libros</a></li>
                <li><a href="#">Page 3</a></li>
   </li>
  
    </ul>
        <ul class="nav navbar-nav navbar-right">
    
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><?php echo "   ". $_SESSION['nombre_usuario'];?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" class="btn btn-danger">Cerrar session</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>

    </ul>
     <ul class="nav navbar-nav navbar-right">
  
      </ul>
  </div>
</nav>
  

<div class="container">
