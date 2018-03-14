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
	if(isset($_POST['submit']))
	{
		$standard=$_POST['standard'];
		$rollno=$_POST['rollno'];
		include('dbcon.php');
		showdetails($standard,$rollno);
	}
	?>
<?php
function showdetails($standard,$rollno)
{
	include('dbcon.php');
	$query="SELECT * FROM student_record WHERE standard='$standard' AND rollno='$rollno'";
	$run=mysqli_query($conn,$query);

	if(mysqli_num_rows($run)>0)
	{
		$data=mysqli_fetch_assoc($run);
		?>
		<table border="1" align="center" style="margin-top:40px;">
			<tr>
				<th colspan="3">Student Details</th>
			</tr>
			<tr>
				<td rowspan="5"><img src="uploaded_img/<?php echo $data['image']; ?>" style="max-height:150px; max-width:120px;"></td>
				<th>Roll Number</th>
				<td><?php echo $data['rollno']; ?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?php echo $data['name']; ?></td>
			</tr>
			<tr>
			<th>Standard</th>
				<td><?php echo $data['standard']; ?></td>
			</tr>
			<tr>
				<th>Parents Contact Number</th>
				<td><?php echo $data['parentscontactno']; ?></td>
			</tr>
			<tr>
				<th>City</th>
				<td><?php echo $data['city']; ?></td>
			</tr>

		</table>
<?php
	}
	else
	{
		echo 
		"<script>
    alert('Student Not Found!');
    	window.open('viewstd.php','_self');
</script>";
	}
}
?>
