<?php
include "Header.php";
include_once "./Libreria/Clases/Conexion.php";
$conexion = new Conexion();
$result = $conexion ->query("Select * from Usuarios ");

//echo $data;
while($row = $result->fetch_array())
{
$rows3[] = $row;
}



?>

<div class="row">
<table class="table" id="tbl">
<thead>
<tr>
<th>Nombre</th>
<th>Usuario</th>
<th>Rol</th>

</tr>
</thead>
<tbody id="tbody">
<tr>
<?php 
foreach($rows3 as $row2)
{
    echo "<tr>";
    echo "<td>" . $row2['nombre'] . "</td>";
    echo "<td>" . $row2['usuario'] . "</td>";
    switch ($row2['Rol'] ) {
        case 3:
        echo "<td>" ."Lector" ."</td>";
            break;
        
        case 1:
        echo "<td>" ."Administrador" ."</td>";
            break;
        
        case 2:
        echo "<td>" ."Usuario" ."</td>";
            break;
        
        default:
            # code...
            break;
    }
   if($row2['Rol']==2 or $row2['Rol']==3 ){
    echo "<td>" ."<button class='btn btn-danger' type='button'>Borrar</button>" ."</td>";
    echo "<td>" ."<button class='btn btn-warning' type='button'>Editar</button>" ."</td>";

   }


    echo "</tr>";

}?>
</tr>
</tbody>

</table>


</div>
<?php
include "Footer.php";
?>