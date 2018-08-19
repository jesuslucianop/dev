$(document).ready(function(){


$("#btncerrarsession").click(function(){
    
  alert("boton de cerrar sesison");
    $.ajax({
        type:"POST",
        data:{btncerrar:$("#btncerrarsession").val()},
        url:"http://localhost/dev/Libreria/Clases/Motor.php",
        success: function(data) {
       
location.reload();
        }
      });
});

$("#btnregistrar").click(function(){
  alert("boton de registrar");
    $.ajax({
        type:"POST",
        data:{btnregistrar:$("#btnregistrar").val(),nombre:$("#nombrer").val(),usuario:$("#usuarior").val(),password:$("#passwordr").val(),rol:$("#rol").val()},
        url:"http://localhost/dev/Libreria/Clases/Usuarios.php",
        success: function(data) {
 location.reaload();
        }
      });
});

});