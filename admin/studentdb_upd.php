<?php
	include '../php/db_student.php';
	include '../php/student_registration.php';

	if(isset($_POST['update'])){
		$id = $_POST['id'];

		$mobnum = $_POST['mobnum'];
		$altnum = $_POST['altnum'];
		$email = $_POST['email'];

		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'], "imagemove/".$_FILES['photo']['name']);
        
        $address = $_POST['address'];
		$post = $_POST['post'];
		$police = $_POST['police'];
		
        $district = $_POST['district'];
		$state = $_POST['state'];
		$pin = $_POST['pin'];

		$sql = "update student set mobnum='$mobnum',altnum='$altnum',email='$email',photo='$photo',address='$address',post='$post',police='$police',district='$district',state='$state',pin='$pin' where id = '$id'";

		if(mysqli_query($conn,$sql)){
			echo "<script>alert('Data Updated');</script>";
			echo '<script>window.location="student-admin.php";</script>';
		}else{
			echo "error".mysqli_error($conn);
		}
	}
?>