<?php
require_once 'demoColector.php';
require_once 'becario.php';

// Logica


$nombre = $_GET['nombre'];





$alm = new becario();
$model = new demoColector();



 $model->InsertDEMO($nombre);
					?>
				<a href = "demolistbecario.php">consultar</a>    
