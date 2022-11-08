<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<p>Silahkan Login</p>
	<form method="POST" action="proses_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td></td>
			    <td></td>
			    <td><input type="submit" value="login">
			    	<input type="reset" value="kembali"></td>
			</tr>
		</table>
	</form>
</body>
</html>