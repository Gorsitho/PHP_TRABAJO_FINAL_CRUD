<?php 
	
require_once('conexion/conexion.php');
session_start();
?>

<?php
if (isset($_SESSION['usuario'])){


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulario</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>
<body>
<div style="background-color: lightblue">
<label>* * * Iniciando sesion para  </label><?php echo "<label>  ".$_SESSION['usuario'].'</label>'; ?>
</div>

	<form action="registro.php" method="post" class="login">
		<h1><center>DATOS DEL EMPLEADO</center></h1>

		<div id="login" class="datagrid" align="center" style="width:30%">
		<?php if ($_SESSION['rol']==1){ ?>
			<table border="1" align="center" class="table">
				<tr>
					<td><label>ID</label></td>
					<td><input type="text" name="id" ></td>
				</tr>
				<tr>
					<td><label>Nombre</label></td>
					<td><input type="text" name="nombres" ></td>
				</tr>
				<tr>
					<td><label>Nombre</label></td>
					<td><input type="text" name="apellidos" ></td>
				</tr>
			</table>
			<button type="submit"  class="btn"  name="btnre">Guardar</button>
			<!--<a href="reporte.php">--><button type="submit"  class="btn" name="gpdf">Generar Reporte PDF</button></a>
			<button type="submit"  class="btn" name="cerrarSession" >Cerrar sesion</button>
			<?php }else {?>
		<!--<a href="reporte.php">--><button type="submit"  class="btn" name="gpdf">Generar Reporte PDF</button></a>
		<button type="submit"  class="btn" name="cerrarSession" >Cerrar sesion</button>
		</div>
		
	</form>
	  
</body>
</html>

<?php }?>

<?php
}
else{

	header('Location: index.php');
}

?>