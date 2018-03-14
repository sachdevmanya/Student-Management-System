<?php

@$conn=mysqli_connect('localhost','root','','user');

if($conn == FALSE)
{
	echo "Database Connection Error!";
}

?>