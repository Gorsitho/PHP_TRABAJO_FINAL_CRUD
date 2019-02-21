<?php
session_start();
require_once('conexion/conexion.php');

if (isset($_POST['btnlogrep'])){
	$usuario = $_POST['txtUsuario'];
	$password = $_POST['txtClave'];
	$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND contra = '$password'";

	$resultado = mysqli_query($con, $sql);
	if (!$resultado){
		echo "<br>Error de BD, no se pudo consultarr la base de datos \n";
		echo "<br>Error MySQL:" . mysql_errno();
		exit;
	}
	else{
		echo "<br>Consulta Ejecutada correctamente";
	}

	$fila = mysqli_fetch_assoc($resultado);

	if ($fila>0){
		$_SESSION["usuario"] = $fila['usuario'];
		$_SESSION["rol"] = $fila['usidrol'];
		header('Location: pag2.php');
	}
	else{
		echo '<script language="javascript">alert(" ***  Usuario o contraseña incorrectos");</script>'; 
		header('Location: index.php');
		
	}
}
?>