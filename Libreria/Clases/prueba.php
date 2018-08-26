
<?php
//Para este utilize un archivo externo, la cual contiene una clase no creada por mi, mas bien una Api donde puedo manejar el pdf y obtener su texto.

Include("class.pdf2text.php");
if(isset($_POST['etexto'])){
    function limpiarString($texto)
{
      $textoLimpio = preg_replace('([^A-Za-z0-9])', '', $texto);	     					
      return $textoLimpio;
}
    // instancia de la clase de libreria utilizada 
$a = new PDF2Text();
//echo $_POST['url'];
$a->setFilename($_POST['url']); 
$a->decodePDF();


$contenido =  str_replace(array("\n", "\r"), '', trim($a->output()));
$contenido2 =  (utf8_decode($contenido)); 
if($contenido2==""){
  echo  false;
}else{
//echo $contenido;
//echo  $contenido2;
echo "paso";
}
//$contenido = limpiarString(utf8_decode($a->output())); 

//print_r(utf8_encode($a->output()));
if (file_exists("tmp/datos.txt")){
    $archivo = fopen("tmp/".$_POST['id'].".txt", "a");
  
    fwrite($archivo, PHP_EOL ."$contenido2");
    fclose($archivo);
    }
    else{
    $archivo = fopen("tmp/".$_POST['id'].".txt", "w" );
    fwrite($archivo, PHP_EOL ."$contenido2");
    fclose($archivo);
       }
  

}
if(isset($_GET['dte'])){
    $ruta  = "./tmp/".$_GET['id'].".txt";
    header('Content-type:text/plain');

    // It will be called downloaded.pdf
    header('Content-Disposition: attachment; filename="'.$_GET['id'].'.txt"');
    
    // The PDF source is in original.pdf
    readfile("./tmp/".$_GET['id'].".txt");
}
//Parte para Descargar Pdf
if(isset($_GET['btndescargarpdf'])){
    $ruta = $_GET['id'];
    header('Content-type: application/pdf');

    // It will be called downloaded.pdf
    header('Content-Disposition: attachment; filename="'.$_GET['nombre'].'.pdf"');
    
    // The PDF source is in original.pdf
    readfile($ruta);



}