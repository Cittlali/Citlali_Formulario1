<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="UTF-8">
<title> Formulario </title>
<link rel="stylesheet" href="css/estilos.css">

<script src="js/validar.js"> </script>
	
</head>
<body>
<h1> Registro de Personal </h1>
<form action="formulario_agregar.php" method="POST" class ="form-register" onsubmit="return validar();">
<h2 class="form-titulo"> Formulario </h2>
<div class="contenedor_inputs">
<input type="text" id="nombre" name="nombre" placeholder= "Nombre" class="input-48" >
<input type="text" id="apellidos" name="apellidos" placeholder= "Apellidos" class="input-48" >
<input type="email" id="correo" name="correo" placeholder= "Correo" class="input-100" >
<input type="text" id="usuario" name="usuario" placeholder= "Usuario" class="input-48" >
<input type="password" id="clave" name="clave" placeholder= "Contraseña" class="input-48" >
<input type="text"  id="telefono" name="telefono" placeholder= "telefono" class="input-100" onkeypress="return solonumeros(event)" >

<input type="submit" value="Agregar" class="btn_enviar">
</div>
</form>

<script>
function solonumeros(e){
	key=e.keyCode || e.which;
	teclado=String.fromCharCode(key);
	numeros="0123456789";
	especiales="8-37-38-46";
	teclado_especial=false; 
	
	for(var i in especiales){
		if(key==especiales[i]){
		teclado_especial=true;
		}
	}
	if(numeros.indexOf(teclado)==-1 && !teclado_especial){
		return false;
	}
}

</script>
</body>
</html>
