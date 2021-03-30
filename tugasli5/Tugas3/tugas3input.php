<html>
<head>
	<title>Biodata</title>

</head>
<body>
	<form method="POST" action="tugas3postAct.php">
		<h2 align="center">BIODATA</h1>
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Jenis Kelamin</td>
				<td><input type="text" name="gender"></td>
			</tr>
			<tr>
				<td width="130">TTL</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td width="130">Alamat Rumah</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="130">Alamat Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="130">Hobi</td>
				<td><input type="text" name="hobi"></td>
			</tr>
		</table>

		<p align="center">
			<input type="submit" name="btnLogin" value="Submit"> <!-- membuat button login untuk mengeksekusi file postAct.php-->
			<input type="reset" name="reset" value="Reset"> <!-- button reset untuk mengosongkan inputan pada form -->
		</p>	
	</form>
</body>
</html>