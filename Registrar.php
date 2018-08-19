<?php include "Header.php";?>
<div class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Registrar Usuarios Api Bibliotecaria</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre</label>  
  <div class="col-md-4">
  <input id="nombrer" name="textinput" type="text" placeholder="Deposite Nombre del Nuevo Usuario" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Usuario</label>  
  <div class="col-md-4">
  <input id="usuarior" name="textinput" type="text" placeholder="Deposite el Usuario del Nuevo Usuario" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Contraseña</label>
  <div class="col-md-4">
    <input id="passwordr" name="password" type="password" placeholder="Deposite la Clave Del nuevo Usuario" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Rol</label>
  <div class="col-md-4">
  <select name="rol" id="rol" class="form-control">
    <option value=""></option>
    <option value="1">Administrador</option>
    <option value="3">Lector</option>
    <option value="2">Usuario</option>
  
  </select>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button  type = "button" id="btnregistrar" name="singlebutton" class="btn btn-primary">Registrar</button>
  </div>
</div>

</fieldset>
</div>
<?php
include "Footer.php";
?>