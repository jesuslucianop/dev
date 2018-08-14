
<?php 

include ("Header.php");

?>
<div class="row">
<div class="col col-md-4 col-md-offset-4">
<h1>Seccion de registro de Libros</h1>
<div class="form-group input-group">
<label class="input-group-addon">Titulo del Libro</label>
<input type="text" name="titulo" id="titulo" class="form-control"/>
</div>
<div class="form-group input-group">
<label class="input-group-addon">Documento PDF</label>
<input type="file" name="file" id="file" class="form-control"/>
</div>
<div class="form-group input-group">
<label class="input-group-addon">Autores</label>
<select name="cars" class="form-control">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
</div>
<div class="form-group input-group">
</div>
</div>


</div>
<?php
 include("Footer.php");

?>