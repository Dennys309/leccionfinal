<?php
class becario {  
   private $id_becario;  
   private $nombre;  
  
   function __construct() {  
    

   }  
     
   
   function __clone() {  
     $this->id_becario = ++$this->id_becario;   
   }  
   
public function getid_becario() {  
     return $this->id_becario;  
   }  
   public function setid_becario($id_becario) {  
     $this->id_becario = $id_becario;  
   }  
   
public function getNombre() {  
     return $this->nombre;  
   }  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  


 }
 ?>
