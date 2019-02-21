
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
<meta charset="utf-8">
<title>Login</title>

<form name="index.php" action="pag1.php" method="post" class="login">
<h1 class="user">LOGIN</h1>
<img src="css/src/user.png"  height="25%" width="30%" class="user">
<div id="login" class="datagrid" align="center" style="width:30%">
	<table border="1" align="center" class="table">
		<tr>
			<td><label>Usuario</label></td>
			<td><input type="text" name="txtUsuario" required></td>
		</tr>
		<tr>
			<td><label>Contraseña</label></td>
			<td><input type="password" name="txtClave" required></td>
		</tr>
	</table>
<input type="submit" value="INGRESAR" name="btnlogrep" class="btn">
</div>
</form>