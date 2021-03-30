<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="tugas1postAct.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--Untuk mengatur tampilan form -->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>

			<tr>
				<td>			
					<input type="submit" name="btnLogin" value="Login"> <!-- button login untuk eksekusi file postAct.php-->
					<input type="reset" name="reset" value="Reset"> <!-- button reset untuk mengosongkan inputan pada form -->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>