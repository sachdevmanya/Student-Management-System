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
$rollno = $_POST['rollno'];
$name = $_POST['name'];
$city = $_POST['city'];
$pnum = $_POST['pnum'];
$standard = $_POST['standard'];
$imagename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];
move_uploaded_file($tempname,"uploaded_img/".$imagename);

include('dbcon.php');

	$q="INSERT INTO `student_record`(`rollno`, `name`, `city`, `parentscontactno`, `standard`,`image`) VALUES ('$rollno','$name','$city','$pnum','$standard','$imagename')";
$run=mysqli_query($conn,$q);
if($run == TRUE)
{
	echo "<h2>data inserted successfully</h2>";
echo "<p>If you want to insert more student details so <a href='insertstd.php'>click here</a></p>";
}
else
{
	echo "error!";
}
}
?>