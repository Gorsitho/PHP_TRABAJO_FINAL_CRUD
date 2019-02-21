<?php

$hostname = "localhost";
$user = "root";
$pass = "";

$con = mysqli_connect("$hostname","$user","$pass");

if (!$con){
	echo "No se ha conectado correctamente <br>";
}

else{
	echo "Conectado correctamente a la Base de Datos <br>";
}

$database = mysqli_select_db($con,"empresabd");
if (!$database){
	echo "<br>No se ha conectado a la base de datos <br>";

	echo "Numero de error de MySQL: " . mysqli_connect_errno();
}

else{
	echo "<br>Conectado  a la base de datos seleccionada<br>";
}
?>