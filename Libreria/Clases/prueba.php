
<?php 
header("Content-Type: text/html;charset=utf-8");header('Content-Type: text/html; charset=ISO-8859-1');
Include("class.pdf2text.php");
if(isset($_POST['etexto'])){
$a = new PDF2Text();
$a->setFilename($_POST['url']); 
$a->decodePDF();
function limpiarString($texto)
{
      $textoLimpio = preg_replace('([^A-Za-z0-9])', '', $texto);	     					
      return $textoLimpio;
}
var_dump(limpiarString(utf8_decode($a->output()))); 

//print_r(utf8_encode($a->output()));
}