<?php
require_once 'demoColector.php';
require_once 'conexion.php';
require_once 'becario.php';

// Logica
$alm = new becario();
$model = new demoColector();




?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>consultar</title>       
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                            <td><a href = "nuevobecario.php">crear</a></td>
                        <tr>
                            <th style="text-align:left;">id_becario</th>
                            <th style="text-align:left;">nombre</th>
                          

                             <th style="text-align:left;">opcion</th>
                             <th style="text-align:left;">opcion</th>



                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarDEMO() as $r): ?>
                        <tr>
                            <td><?php echo $r->getId_Becario(); ?></td>
                            <td><?php echo $r->getNombre(); ?></td>  
                              
			    <td><a href = "formularioactualizar.php?ac=<?php echo $r->getId_becario(); ?>&id=<?php echo $r->getNombre(); ?>">EDITAR</a></td>
                            <td><a href = "borrardemo.php?id=<?php echo $r->getId_becario(); ?>">ELIMINAR</a></td>




                          
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
