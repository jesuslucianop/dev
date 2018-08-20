<?php
include_once "Conexion.php";

class SubirArchivo{
    private $db;
    public function __construct()
    {
        $this->db = new Conexion();
        // $this->nombre = $nombre;

    }



    public function uploadFile($files,$destiny,$titulor,$autor,$cantidadp){
   
        $titulo = $titulor;// Titulo Del Libro
        $cantidad_paginas = $cantidadp;
        $autores = $autor;
        $name = $files['file']['name']; //nombre de la imagen
        $name = str_replace(" ", "_", $name);
        $tmp = $files['file']['tmp_name']; // nombre temporal de la imagen
        $num = rand(0,999999);
        $fecha = date("dmY");
        $upfile = $fecha."_".$num."_".$name; //nuevo nombre de la imagen
        $url = $destiny."/".$upfile;
       move_uploaded_file($tmp, $destiny . $upfile);
     /*$sql = $this->db->query("Insert into Libros(Titulo,Id_autores, Cant_pag, url) VALUES ('".$titulo."','".$autores."','".$cantidad_paginas."','".$url."') ");*/
     $sql = "INSERT INTO GBH.libro (Titulo,Id_autores, Cant_pag, url)VALUES('".$titulo."','".$autores."','".$cantidad_paginas."','".$url."') ";
   $query = $this->db->query($sql);
     print_r($query);
   var_dump($query);
       /* $sql = "INSERT INTO GBH.Libros (Titulo,Id_autores, Cant_pag, url)VALUES('".$titulo."','".$autores."','".$cantidad_paginas."','".$url."') ";
       $row = $this->db->query($sql);
   */
       //echo $sql;
       //var_dump($row);
       /*if($row->num_rows >0 ) {
           echo "es mas";
       }else{
           echo "es 0";
       }*/
       // print_r($destiny."/".$upfile);
       // $document = new Imagick('HTML5_draft.pdf');

       // print_r($document->getNumberImages()); //returns 1
 
    
       // exec('/usr/bin/pdfinfo '.$tmp.' | awk \'/Pages/ {print $2}\'', $output);
        //echo $output[0];
    }



}
if(isset($_POST['btnuploadlibro'])){
$sa = new SubirArchivo();
  

print_r( $sa->uploadFile($_FILES,"./Repositorio/",$_POST['titulo'],$_POST['autores'],$_POST['cantidad']));
}