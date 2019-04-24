<?php
include 'conexion.php';
$id=$_REQUEST['id']; 
$nombre= $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$correo= $_POST["correo"];
$usuario= $_POST["usuario"];
$clave= $_POST["clave"];
$telefono= $_POST["telefono"];

$modificar ="UPDATE personal SET nombre='$nombre',apellidos='$apellidos',correo='$correo',usuario='$usuario',clave='$clave',telefono='$telefono' WHERE id='$id'";


//ejecutamos la consulta

$resultado = mysqli_query($conexion,$modificar);
if(!$resultado){
	echo 'Error al modificar';
}else{
	echo 
	header("Location:tabla.php");

	
	
}


?>