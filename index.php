<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQL | MalasNgoding.com</title>	
</head>
<body>
	<h1>Membuat Login Dengan PHP dan MySQL | MalasNgoding.com</h1>
	<h3>Halaman Login Sederhana</h3>
	<form action="source/login.php" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In"></td>
			</tr>
		</table>
	</form>s
  <script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</body>
</html>