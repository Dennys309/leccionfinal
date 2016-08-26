<?php

require_once("colector.php");
require_once("programa.php");
class demoColectorprograma

{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function ListarDEMO()
	{
		try
		{
		    $result= $this->modelo->Listar("programa");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertDEMO($nombre)
 {
 try
		{
		    $result= $this->modelo->operacion("insert into lecciondemo (id_programa,nombre,pais) values (null,'$nombre',null)");
                echo "se inserto registro $nombre";
                  
			return $result;
                           

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function UpdateDEMO($id,$nombre,$pais)
 {
 try
		{
		    $result= $this->modelo->operacion("update lecciondemo set nombre= '$nombre' where id_demo = $id" );


                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteDEMO($id)
 {
 try
		{
		     $result= $this->modelo->operacion("delete from lecciondemo where id_becario = $id");
                echo "se elimino registro $id, ejecute la consulta para verificar";

                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}

 ?>







