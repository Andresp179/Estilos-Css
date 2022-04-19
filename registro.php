<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');

$saludo=$_POST['saludo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$movil=$_POST['movil'];
$tel_oficina=$_POST['tel_oficina'];
$email=$_POST['email'];
$prom_academico=$_POST['prom_academico'];

$consulta="INSERT INTO `usuario`(`nombre`,`apellido`,`usuario`,`contraseña`,`id_cargo`) VALUES ('$nombre','$apellido','$usuario','$contraseña','$cargo');";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

if($resultado){
	header("location:index.html");

}
mysqli_close($conexion);
?>