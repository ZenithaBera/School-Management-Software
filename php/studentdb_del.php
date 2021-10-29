<?php
	include 'db_student.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		$sql = "delete from student where id = '$id'";

		if(mysqli_query($conn,$sql)){
			echo "<script>alert('Data Removed');</script>";
			echo '<script>window.location="../admission/student-delete.php";</script>';
		}else{
			echo "error".mysqli_error($conn);
		}
	}
?>
