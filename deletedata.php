<?php
include('dbcon.php');
$id=$_REQUEST['id'];

$query = "DELETE FROM `student_record` WHERE id='$id'";

$run=mysqli_query($conn,$query);
if($run == TRUE){
	echo
 "<script>
    alert('data deleted successfully');
	window.open('deletestd.php','_self');
</script>";
}
?>