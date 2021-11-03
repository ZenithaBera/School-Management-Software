<?php
	include '../php/db_staff.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		$sql = "delete from staff where id = '$id'";

		if(mysqli_query($conn,$sql)){
			echo "<script>alert('Data Removed');</script>";
			echo '<script>window.location="staff-admin.php";</script>';
		}else{
			echo "error".mysqli_error($conn);
		}
	}
?>