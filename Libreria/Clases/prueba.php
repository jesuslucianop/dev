<?php 
Include("class.pdf2text.php");
$a = new PDF2Text();
$a->setFilename('UNAPEC Misión, Visión, Valores institucionales.output (2)'); 
$a->decodePDF();
var_dump($a->output()); 