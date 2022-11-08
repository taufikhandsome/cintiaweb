<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<center>
		<p><h2>REGISTRASI</h2></p>
		<form method="POST" action="proses_registrasi.php">
			<table>
				<tr>
					<td>Nik</td>
					<td>:</td>
					<td><input type="text" name="nik"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
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
					<td><input type="submit" value="Kirim">
						<input type="reset" value="Batal"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>