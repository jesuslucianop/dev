<?php include "Header.php";?>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Registrar Usuarios Api Bibliotecaria</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Deposite Nombre del Nuevo Usuario" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Usuario</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Deposite el Usuario del Nuevo Usuario" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Contraseña</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="Deposite la Clave Del nuevo Usuario" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Registrar</button>
  </div>
</div>

</fieldset>
</form>
<?php
include "Footer.php";
?>