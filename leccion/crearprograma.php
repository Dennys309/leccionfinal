<?php
require_once 'democolectorprograma.php';
require_once 'programa.php';

// Logica


$nombre = $_GET['nombre'];





$alm = new programa();
$model = new democolectorprograma();



 $model->InsertDEMO($nombre);
					?>
				<a href = "demolistprograma.php">consultar</a>    
