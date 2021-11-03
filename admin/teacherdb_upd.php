<?php
	include '../php/db_teacher.php';
	include '../php/teacher_registration.php';
	if(isset($_POST['update'])){
		$id = $_POST['id'];
        $phnnum = $_POST['phnnum'];
		$altnum = $_POST['altnum'];
		$email = $_POST['email'];
		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'], "imagemoveTeacher/".$_FILES['photo']['name']);
        $address = $_POST['address'];
		$post = $_POST['post'];
		$police = $_POST['police'];
        $dist = $_POST['dist'];
		$state = $_POST['state'];
		$pin = $_POST['pin'];
	
		$sql = "update teacher set phnnum='$phnnum',altnum='$altnum', email='$email',photo='$photo',address='$address',post='$post',police='$police',dist='$dist',state='$state',pin='$pin' where id='$id'";

		if(mysqli_query($conn,$sql)){
			echo "<script>alert('Data Updated');</script>";
			echo '<script>window.location="../dashboard/teacher-dashboard.php";</script>';
		}else{
			echo "error".mysqli_error($conn);
		}
	}
?>