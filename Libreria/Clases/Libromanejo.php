<?php
include "tool.php";
Class LibroManejo {

    public function __construct(){



    }
    public function subirlibro($archivo, $ruta)
    {
        $clase = new Tool();
        $s = $clase->uploadFile($archivo, $ruta);
print_r($s);

    }
}