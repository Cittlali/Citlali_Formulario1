<!DOCTYPE html>
<html lang= "en">
<head>
<meta charset="UTF-8">
<title> Formulario </title>
<link rel="stylesheet" href="css/estilos.css">
<script src="js/validar.js"> </script>
	
</head>
<body>
<h1> Registro de Personal </h1>
<?php
$id=$_REQUEST['id'];
include("conexion.php");
$query="SELECT * FROM personal WHERE id='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();
	
	?>
<form action="modificar_proceso.php?id=<?php echo $row['id'];?>" method="POST" class ="form-register" onsubmit="return validar();">


<h2 class="form-titulo"> Formulario </h2>
<div class="contenedor_inputs">
<input type="text" id="nombre" name="nombre" placeholder= "Nombre" class="input-48" value="<?php echo $row['nombre'];?>" />
<input type="text" id="apellidos" name="apellidos" placeholder= "Apellidos" class="input-48" value="<?php echo $row['apellidos'];?>" />
<input type="email" id="correo" name="correo" placeholder= "Correo" class="input-100" value="<?php echo $row['correo'];?>" />
<input type="text" id="usuario" name="usuario" placeholder= "Usuario" class="input-48" value="<?php echo $row['usuario'];?>"/>
<input type="password" id="clave" name="clave" placeholder= "Contraseña" class="input-48" value="<?php echo $row['clave'];?>"/>
<input type="text"  id="telefono" name="telefono" placeholder= "telefono" class="input-100"  value="<?php echo $row['telefono'];?>"/>

<input type="submit" value="Agregar" class="btn_enviar">
</div>
</form>
</body>
</html>
