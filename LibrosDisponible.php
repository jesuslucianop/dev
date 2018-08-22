<?php
include "Header.php";
include_once "./Libreria/Clases/Conexion.php";
$conexion = new Conexion();
$result = $conexion ->query("Select * from libro ");


//echo $data;
while($row = $result->fetch_array())
{
$rows3[] = $row;

}



?>
<div class="row">
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Codigo Libro</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Cantidad de pagina</th>
      <th scope="col"> Enlace </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
foreach($rows3 as $row2)
{
    $resultautores = $conexion ->query("Select Nombre from Autores where Id_autores ='".$row2['id_autores'] ."' ");
    $rowautores = $resultautores->fetch_array();

    echo "<tr>";
    echo "<td>" . $row2['id'] . "</td>";
    echo "<td>" . $row2['titulo'] . "</td>";
    echo "<td>" . $rowautores['Nombre'] . "</td>";
    echo "<td>" . $row2['cant_pag'] . "</td>";
    echo "<td>" 
    ."<button type='btn' class='btn btn-primary'>Descargar</button>
    <button type='button' class='btn btn-warning'>Exportar texto</button>
    <button type='button' class='btn btn-danger'>Exportar html</button>
    "."</td>";


}?>
    </tr>
  </tbody>
</table>

</div>
<?php
include "Footer.php";
?>