<?php
class programa {  
   private $id_programa;  
   private $nombre; 
   private $pais;  	
  
   function __construct() {  
    

   }  
  
   
   function __clone() {  
     $this->id_programa = ++$this->id_programa;   
   }  
   
public function getid_programa() {  
     return $this->id_programa;  
   }  
   public function setid_programa($id_programa) {  
     $this->id_programa = $id_programa;  
   }  
   
public function getNombre() {  
     return $this->nombre;  
   }  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  



public function getPais() {  
     return $this->pais;  
   }  
   public function setPais($Pais) {  
     $this->pais = $pais;  
   }  



 }
 ?>
