<?php

$conexion = mysqli_connect('localhost', 'root', '', 'registro' )or die (mysql_error($mysqli));


insertar($conexion);

function insertar($conexion){
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$programa = $_POST['programa'];
	$edad = $_POST['edad'];
	$numero = $_POST['numero'];
	$sexo = $_POST['sexo'];
	$direccion = $_POST['direccion'];
	$curp = $_POST['curp'];

	$consulta = "INSERT INTO registros (nombre, correo, programa, edad, numero, sexo, direccion, curp) VALUES('$nombre', '$correo', '$programa', '$edad', '$numero', '$sexo', '$direccion', '$curp')";
	mysqli_query($conexion, $consulta);

	mysqli_close($conexion);
}
?>
