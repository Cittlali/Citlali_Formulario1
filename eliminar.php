<?php
include 'conexion.php';
$id=$_REQUEST['id']; 

$modificar ="DELETE FROM personal WHERE id='$id'";


//ejecutamos la consulta

$resultado = mysqli_query($conexion,$modificar);
if(!$resultado){
	echo 'Error al modificar';
}else{
	echo 
	header("Location:tabla.php");

	
	
}


?>