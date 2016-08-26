<?php

require_once 'uploader.php'
$ac = $_GET['ac'];
$id = $_GET['id'];
echo "$ac,$id";
?>

<!DOCTYPE hmtl>



<html>

	<head>

	<title>formulario actualizar</title>

	</head>

	 

	<body>
	  
	  <h3>                     Actualizacion de datos</h3> 

    <p>id: <input type="text" name="id" value = <?php echo $id ?>></p>

 <p>Nombre: <input type="text" name="nombre" /></p>


    
	
	</body>

</html>


