<?php
include "Header.php";
?>
 <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Cambiar Rol</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="searchinput">Usuario</label>
  <div class="col-md-4">
    <input id="searchinput" name="searchinput" type="search" placeholder="Usuario a cambiar el Rol" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Buscar</button>
  </div>
</div>

</fieldset>
</form>

<?php
include "Footer.php";
?>