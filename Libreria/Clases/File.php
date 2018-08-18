<?php 
class  Upload {

    public function __construct(){



    }
    public function  Uploadfile($res,$ruta)
    {
        $nombrearchivo = $res['file']['tmp'];
        echo $nombrearchivo;



    }



}