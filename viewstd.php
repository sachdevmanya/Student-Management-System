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
<form method="post" action="viewdata.php" enctype="multipart/form-data">
	<table border="1" align="center" style="margin-top: 40px;font-size:18px;">
		<tr>
			<td colspan="2" align="center">Student Information</td>
		</tr>
		<tr>
			<td align="left">Choose Standard</td>
			<td>
				<select name="standard"/required> 
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
					<option value="5">5th</option>
					<option value="6">6th</option>
					<option value="7">7th</option>
					<option value="8">8th</option>
					<option value="9">9th</option>
					<option value="10">10th</option>
					<option value="11">11th</option>
					<option value="12">12th</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align="left">Enter Rollno</td>
			<td>
				<input type="text" name="rollno"required/>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit" value="View">
			</td>
		</tr>
	</form>
	</table>
	
</body>
</html>