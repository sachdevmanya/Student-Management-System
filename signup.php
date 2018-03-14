<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<style>
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
	<form method="post" action="insert.php">
		<div class="div1">
			<table align="center" style="margin-top:80px; ">

			<tr>
				<td colspan="2" align="center"><h2>Create an account</h2></td>
			</tr>
			<tr>
				<td>Username:</td><td><input type="text" name="uname" required="required"><br><br></td>
			</tr>
			<tr>
				<td>First Name:</td><td><input type="text" name="fname" required="required"><br><br></td>
			</tr>
			<tr>
				<td>Last Name:</td><td><input type="text" name="lname" required="required"><br><br></td>
			</tr>
			
			<tr>
				<td><p>Password:</td><td><input type="password" name="password" required="required"><br><br></td>
			</tr>
			<tr>
				<td>Confirm Password:</td><td><input type="password" name="cpwd" required="required"><br><br></td>
			</tr>
			<tr>
			    <td>Email:</td><td><input type="text" name="email" required="required"><br><br></td>
			</tr>
			<tr>
				<td>Gender:
				<td>
				Male<input type="radio" name="gender" value="Male" required="required">
				Female<input type="radio" name="gender" value="Female" required="required"><br><br></td>
			</td>
			</tr>
			<tr>
				<td>Already a member?<a href="login.php">Login</a></td>
				<td colspan="2" align="center"><input type="submit" id="submit" name="submit" value="Sign Up"></td>
			</tr>
		
</table>
</div>
	</form>
</body>
</html>
