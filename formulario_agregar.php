<?php
include 'conexion.php';

$nombre= $_POST["nombre"];
$apellidos= $_POST["apellidos"];
$correo= $_POST["correo"];
$usuario= $_POST["usuario"];
$clave= $_POST["clave"];
$telefono= $_POST["telefono"];

$insertar ="INSERT INTO personal(nombre,apellidos,correo,usuario,clave,telefono) 
VALUES ('$nombre','$apellidos','$correo','$usuario','$clave','$telefono')";

$verificar_usuario=mysqli_query($conexion,"SELECT *FROM personal where usuario='$usuario'");
if(mysqli_num_rows($verificar_usuario)>0){
	echo '<script>
	alert("El usuario ya está registrado");
	window.history.go(-1);
	</script>
	
	';
	exit;
	
}
$verificar_correo=mysqli_query($conexion,"SELECT *FROM personal where correo='$correo'");
if(mysqli_num_rows($verificar_correo)>0){
	echo '<script>
	alert("El correo ya está registrado");
	window.history.go(-1);
	</script>
	
	';
	exit;
	
}
//ejecutamos la consulta

$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
	echo 'Error al registrar';
}else{
	echo '<script>
	alert("El correo ya está registrado");
	
	</script>
	
	';
	header("Location:tabla.php");

	
	
}


?>
