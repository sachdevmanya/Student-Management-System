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
<?php

 include('dbcon.php');
	 $id = $_GET['id'];

 $query = "SELECT * FROM `student_record` WHERE id = '$id'" ;
 $run=mysqli_query($conn,$query);
 $data=mysqli_fetch_assoc($run);

	?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table align="center" style="margin-top: 40px;">
		<tr>
			<th>Roll Number</th>
			<td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> ><br><br></td>
		</tr>
		<tr>
			<th>Full Name</th>
			<td><input type="text" name="name" value=<?php echo $data['name']; ?>><br><br></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city" value=<?php echo $data['city']; ?>><br><br></td>
		</tr>
		<tr>
			<th>Parents Contact Number</th>
			<td><input type="text" name="pnum" value=<?php echo $data['parentscontactno']; ?> ><br><br></td>
		</tr>
		<tr>
			<th>Standard</th>
			<td><input type="text" name="standard" value=<?php echo $data['standard']; ?>><br><br></td>
		</tr>

		<tr>
			<th>Image</th>
			<td><input type="file" name="image" value=<?php echo $data['image'];?>><br><br></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
				<input type="submit" name="submit" value="Update"/required><br><br></td>
		</tr>
	</table>
	</form>


</body>
</html>