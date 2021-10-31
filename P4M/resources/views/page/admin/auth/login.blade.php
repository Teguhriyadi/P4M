<!DOCTYPE html>
<html>
<head>
	<title> Login Admin </title>
</head>
<body>

	<center>
		<h3>Data Login</h3>
		<form method="POST" action="{{ url('/page/admin/post_login') }}">
		{{ csrf_field() }}
		<table border="1" cellspacing="0" cellpadding="10">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<button type="submit">
						Simpan
					</button>
				</td>
			</tr>
		</table>
	</form>
	</center>

</body>
</html>