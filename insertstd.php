<html>
<head>
	<title>Welcome to Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="margin:0px;">
	<div class="header" align="center">
	<h4><a href="dashboard.php" style="float:left; color:#767676; margin-right:30px;">Back to Dashboard</a></h4>	
	<h4><a href="index.php" style="float:right; color:#767676; margin-right:30px;">Logout</a></h4>
	<h1>Student Management System</h1>
</div>
<form method="post" action="insertion.php" enctype="multipart/form-data">
	<table align="center" style="margin-top: 40px;">
		<tr>
			<th>Roll Number</th>
			<td><input type="text" name="rollno" placeholder="Enter Roll Number"/required><br><br></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" placeholder="Enter Full Name"/required><br><br></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" placeholder="Enter City"/required><br><br></td>
		</tr>
		<tr>
			<th>Parents Contact Number</th>
			<td><input type="text" name="pnum" placeholder="Enter Parents Contact Number"/required><br><br></td>
		</tr>
		<tr>
			<th>Standard</th>
			<td><input type="number" name="standard" placeholder="Enter Standard"/required><br><br></td>
		</tr>

		<tr>
			<th>Image</th>
			<td><input type="file" name="image"/required><br><br></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Insert"/required><br><br></td>
		</tr>
	</table>
	</form>

</body>
</html>