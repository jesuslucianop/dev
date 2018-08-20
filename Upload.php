
<?php 

include ("Header.php");



?>

<div class="row">
<div class="col col-md-4 col-md-offset-4">
<h1>Seccion de registro de Libros</h1>
<a href="./index/1">s</a>
<form method="POST" action="./Libreria/Clases/SubirArchivo.php" enctype="multipart/form-data">
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
<select name="autores" class="form-control">
    <option value="1">servantes</option>
    <option value="2">maquiavelo</option>
    <option value="3">Fiat</option>
    <option value="4">Audi</option>
  </select>
</div>
<div class="form-group input-group">
<label class="input-group-addon">Cantidad de Paginas</label>
<input type="text" name="cantidad" id="titulo" class="form-control"/>
</div>
<div class="form-group input-group">
<button class="btn btn-primary" type="submit" name="btnuploadlibro">Enviar</button>
</div>
</form>
</div>


</div>
<?php
 include("Footer.php");

?>