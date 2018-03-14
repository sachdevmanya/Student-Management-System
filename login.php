<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<style type="text/css">
		.div1{
		height: 500px;
    width: 40%;
    margin-left:30%;
	}
	#submit{
		background-color:#000000;
		color:white;
	    border:none;
	}
	</style>
</head>
<body bgcolor="gray">
	<form method="post" action="select.php">
		<div class="div1">
		<table align="center" style="margin-top:80px;">
			<tr>
				<td colspan="2" align="center"><h2>Login</h2><br><br></td>
			</tr>
			<tr>
				<td>Email:</td><td><input type="text" name="email" required="required"><br><br></td>
			</tr>
			<tr>
				<td>Password:</td><td><input type="password" name="password" required="required"><br><br></td>
			</tr>
			<tr>
			    <td>Not yet a member?<a href="Signup.php">Sign Up</a></td>
				<td colspan="2" align="center"><input type="submit" id="submit" name="submit" value="Login"></td>
			</tr>
		</table>
	</div>
	</form>
</body>
</html>