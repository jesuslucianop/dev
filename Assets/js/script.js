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
$("#btnborrar").click(function(){
    var ids = [];

$('#btnborrar').each(function () {
  ids.push($(this).attr('idusuario')); // ids.push(this.id) would work as well.
});

alert(ids);
//location.reload();
/*
    $.ajax({
        type:"POST",
        data:{btnborrar:$("#btnborrar").val(),id:$("#nombre").val()},
        url:"http://localhost/dev/Libreria/Clases/Usuarios.php",
        success: function(data) {
            location.reload();
        }
      });*/
});
//Boton de Agregar Autores Modal
$("#btnagregarautores").click(function(){
   

console.log("entro al boton");
    $.ajax({
        type:"POST",
        data:{btnagregarautores:$("#btnagregarautores").val(),nombreautor:$("#NombreAutor").val()},
        url:"http://localhost/dev/Libreria/Clases/Autores.php",
        success: function(data) {
            location.reload();
        }
      });
});

});