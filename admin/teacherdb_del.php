<?php
	include '../php/db_teacher.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		$sql = "delete from teacher where id = '$id'";

		if(mysqli_query($conn,$sql)){
			echo "<script>alert('Data Removed');</script>";
			echo '<script>window.location="teacher-admin.php";</script>';
		}else{
			echo "error".mysqli_error($conn);
		}
	}
?>
