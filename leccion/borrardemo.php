<?php
require_once 'demoColector.php';
require_once 'becario.php';
require_once 'demolistbecario.php';
$id = $_GET['id'];
$alm = new becario();
$model = new demoColector();

$model->DeleteDEMO($id);

?>


