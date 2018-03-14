<?php
$email = $_POST['email'];
$password = $_POST['password'];
$conn=mysqli_connect('localhost','root','','user');

$query="SELECT * FROM data WHERE Email='$email' AND Password='$password'";
$run=mysqli_query($conn,$query);
if(mysqli_num_rows($run) == TRUE){
echo 
"<script>
	 window.location.href = 'dashboard.php'; alert('You are logged in');
	</script>";
}
	 else{
	echo
	 "<script>
    alert('Your email or password not match !!');
	window.open('login.php','_self');
</script>";
}
?>