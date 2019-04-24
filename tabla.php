<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Datos Ingresados </title>
<link rel="stylesheet" href="css/tabla.css">
</head>
<body>
<form id="main-container">


<table >

<thead>
<tr>

<th> Nombre </th>
<th> Apellidos </th>
<th> Correo </th>
<th> Usuario </th>
<th> Contraseña </th>
<th> Teléfono </th>
<th colspan="2"> Operaciones </th>

</tr>
</thead>
<?php
include("conexion.php");
$query="SELECT * FROM personal";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
	
	?>
	<tr>
	
	<td> <?php echo $row['nombre'];?></td>
	<td> <?php echo $row['apellidos'];?></td>
	<td> <?php echo $row['correo'];?></td>
	<td> <?php echo $row['usuario'];?></td>
	<td> <?php echo $row['clave'];?></td>
	<td> <?php echo $row['telefono'];?></td>
	<td> <a href="modifica.php?id=<?php echo $row['id'];?>">Modificar</a></td>
	<td> <a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></td></td>
	
	<?php
}

?>


</table>
<a style="color:#FC4F6C" href="index.php" > <h2>Agregar Otro Usuario</h2></a>
</form>

</body>
</html>
