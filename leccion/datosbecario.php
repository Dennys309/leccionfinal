 <?php
require_once 'conexion.php';


$n= "dennys";
$p= "1234";
$Nombre = $_GET['Nombre'];
 


//echo $Nombre;
//echo "    ";
$Password = $_GET['Password'];
//echo $Password;


if ($Nombre == $n and $Password == $p)
{
echo "Bienvenido  ";
echo $Nombre;
echo nl2br(" \n ");

//conexion a la base 
//$cone = new conexion();
//fin conexion a la base


//require_once 'botones.php';
//$boto = new botones();
//require_once 'administracion.php';


}

else {
echo "usuario o contraseña incorrectos";
}

?>
<DOCTYPE!>
<html>
<a href ="programaform.php">IR A PROGRAMA</a>


</html>


