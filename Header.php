<?php session_start();?>
<html>
<head>

<script type="text/javascript" src="./Assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript"src="./Assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./Assets/js/tether.js"></script>
<script type="text/javascript" src="./Assets/js/tether.min.js"></script>
<script type="text/javascript" src="./Assets/js/bootstrap-toggle.min.js"></script>
<link rel="stylesheet" href="./Assets/css/bootstrap.min.css"/>
<link rel="stylesheet" href="./Assets/css/bootstrap-toggle.min.css"/>
<link rel="stylesheet" href="./Assets/css/style.css"/>



<script type="text/javascript" src="./Assets/js/script.js"></script>

</head>
<body>

<?php if($vista !="Login"){?>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a target="_blank" href="#" class="navbar-brand">My sApp.</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Inicio</a></li>
<?php if($_SESSION['Rol_usuario']=="Admin"){?> 
                    <li class="active"><a href="http://bootsnipp.com/snippets/featured/nav-account-manager" target="_blank">Administrar usuarios</a></li>
<?php
} ?>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Libros
                    <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Subir Libros</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 2</a></li>
                    </ul>
                 </li>              
             </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong><?php echo $_SESSION["nombre_usuario"];?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>Nombre Apellido</strong></p>
                                        <p class="text-left small">correoElectronico@email.com</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="#" class="btn btn-danger btn-block">Cerrar Sesion</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php }?>
<div class="container">
