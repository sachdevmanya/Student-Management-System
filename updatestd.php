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
<form method="post" action="updatestd.php">
	<table align="center" style="margin-top: 40px;">
		<tr>
			<th>Standard</th>
			<td><input type="number" name="standard" placeholder="Enter Standard" required/></td>

			<th>Student Name</th>
			<td><input type="text" name="student" placeholder="Enter Student Name" required/></td>
		<td>
			<td><input type="submit" name="submit" value="Search"></td>
		</td>
	</table>
</form>
	<table align="center" border="1" width="60%" style="margin-top: 40px;">
	
      <tr>
	  <th>No.</th>
	  <th>Image</th>
	  <th>Name</th>
	  <th>Roll Number</th>
	  <th>Edit</th>
	  </tr>
	  <?php  
if(isset($_POST['submit']))
{
	$standard = $_POST['standard'];
	$student = $_POST['student']; 

	 include('dbcon.php');
  $query = "SELECT * FROM `student_record` WHERE standard = '$standard' AND name LIKE '$student%'" ;
	 $run=mysqli_query($conn,$query); 
 if(mysqli_num_rows($run)<1){
	 	echo "<tr><td colspan='5'>No record found</td></tr>";
	 } 
	 else{
	 	$count=0;
	 	while($data=mysqli_fetch_assoc($run))
	 	{
	 		$count++;
	 		?>
	 		<tr colspan="5" align="center">
	 
	           <td><?php echo $count; ?></td>
	           <td><img src="uploaded_img/<?php echo $data['image']; ?>" style="max-width:100px;"></td>
	           <td><?php echo $data['name']; ?></td>
	           <td><?php echo $data['rollno']; ?></td>
	           <td><a href="updation.php?id=<?php echo $data['id'] ?>">Edit</a></td>
             </tr>
<?php
	 	}

	 }

}
?>
</table>
         </body>
         </html>
