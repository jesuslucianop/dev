$(document).ready(function(){

// boton Por donde se envia El cierre de Session
$("#btncerrarsession").click(function(){
  

    $.ajax({
        type:"POST",
        data:{btncerrar:$("#btncerrarsession").val()},
        url:"http://localhost/dev/Libreria/Clases/Autenticacion.php",
        success: function(data) {
  
            location.reload();
        }
      });
});
//Boton Para Registrar Usuarios Nuevos
$("#btnregistrar").click(function(){

    $.ajax({
        type:"POST",
        data:{btnregistrar:$("#btnregistrar").val(),nombre:$("#nombrer").val(),usuario:$("#usuarior").val(),password:$("#passwordr").val(),rol:$("#rol").val()},
        url:"http://localhost/dev/Libreria/Clases/Usuarios.php",
        success: function(data) {
            location.reload();
        }
      });
});
//Boton de borrar Usuarios
$(".btnborrar").click(function(){

   



    $.ajax({
        type:"POST",
        data:{btnborrar:$(".btnborrar").val(),id:idautore},
        url:"http://localhost/dev/Libreria/Clases/Usuarios.php",
        success: function(data) {
           console.log(data);
        }
      });
});
//Boton de Agregar Autores Modal
$("#btnagregarautores").click(function(){
   

    $.ajax({
        type:"POST",
        data:{btnagregarautores:$("#btnagregarautores").val(),nombreautor:$("#NombreAutor").val()},
        url:"http://localhost/dev/Libreria/Clases/Autores.php",
        success: function(data) {
            location.reload();
        }
      });
});
//Boton de Exportar a texto plano
$(".btntext").click(function(){
    
    var url = $(this).attr('url');
    alert(url);
    $.ajax({
        type:"POST",
        data:{etexto:$("#etexto").val(),url:url},
        url:"http://localhost/dev/Libreria/Clases/Prueba.php",
        success: function(data) {
            console.log(data);
        }
      });
});

});