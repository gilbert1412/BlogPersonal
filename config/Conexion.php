<?php
    include_once 'Datos.php';
Class Conexion{
    private $servidor;
    private $user;
    private $password;
    private $nameDB;

     public function __construct()
     {
         $this->servidor=SERVIDOR;
         $this->user=USUARIO;
         $this->password=PASSWORD;
         $this->nameDB=DBNAME;
     }

        public function conectar(){
         try {
             $conexion=new PDO("mysql:host=$this->servidor;dbname=$this->nameDB",$this->user,$this->password);
             
             return $conexion;
         } catch (PDOException $e) {
             echo 'ERROR AL CONECTARCE..!!!' .$e->getMessage();
         }
     }
 }

 
?>