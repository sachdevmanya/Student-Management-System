<?php
include('dbcon.php');

$rollno = $_POST['rollno'];
$name = $_POST['name'];
$city = $_POST['city'];
$pnum = $_POST['pnum'];
$standard = $_POST['standard'];
$id = $_POST['id'];
$imagename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];
move_uploaded_file($tempname,"uploaded_img/".$imagename);




$query = "UPDATE `student_record` SET `rollno`='$rollno',`name`='$name',`city`='$city',`parentscontactno`='$pnum',`standard`='$standard',`image`='$imagename' WHERE id='$id'";

$run=mysqli_query($conn,$query);
if($run == TRUE){
	echo
 "<script>
    alert('data updated successfully');
	window.open('updation.php?id=<?php echo $id;?>','_self');
</script>";
}
?>