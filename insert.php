<?php
if(isset($_POST['submit']))
{
$uname = $_POST['uname'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$cpwd = $_POST['cpwd'];
$email = $_POST['email'];
$gender = $_POST['gender'];

include('dbcon.php');

if($password === $cpwd){

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
	
$query="INSERT INTO `data`(`Username`, `FirstName`, `LastName`, `Password`, `ConfirmPassword`, `Email`, `Gender`) VALUES ('$uname','$fname','$lname','$password','$cpwd','$email','$gender')";
$run=mysqli_query($conn,$query);
if($run == TRUE)
  echo "<script>window.location.href = 'dashboard.php'; alert('Your account has been created successfully');</script>";
}
else{
echo "<script>window.location.href = 'signup.php'; alert('Invalid Email');
	</script>";	
}
}
else{
	echo "<script>window.location.href = 'signup.php'; alert('Invalid Password');
	</script>";	
}
}
?>