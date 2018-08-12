<?php 
Class Conexion extends mysqli{
        private $data;
        public function __construct()
        {
                parent:: __construct("localhost", "root", "jesus2526", "GBH");
                $this->query("SET NAMES 'utf8';");
                $this->connect_errno ? die("No conetacdo") : $c = 'Conectado';
        }









}

        



//$mysqli = new mysqli("localhost", "root", "jesus2526", "GBH");
             
 