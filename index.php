
<?php include ("Header.php");?>
<div class="container">
<div class="row">
<div class="col col-md-4 col-md-offset-4">
<h1>Api Bibliotecaria</h1>
<form method="POST" action="./Libreria/Clases/Motor.php">
   <div class="form-group input-group">
<label class="input-group-addon">Usuario</label>
        <input type="text" name="usuario" class="form-control"/>
        </div>
        <div class="form-group input-group">
        <label class="input-group-addon">Clave</label>
        <input type="password" name="clave" class="form-control"/>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary" id="btnlogin">Entrar</button>
        </div>
        </form>
    </div>

        </div>
        </div>

<?php
 include("Footer.php");

?>