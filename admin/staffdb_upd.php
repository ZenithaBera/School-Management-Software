<?php
	include '../php/db_staff.php';
	include '../php/staff_registration.php';

	if(isset($_POST['update'])){
		$id = $_POST['id'];

		$mobnum = $_POST['mobnum'];
		$altnum = $_POST['altnum'];
		$mstatus = $_POST['mstatus'];

		$email = $_POST['email'];
		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'], "imagemoveStaff/".$_FILES['photo']['name']);
        
        $address = $_POST['address'];
		$post = $_POST['post'];
		$police = $_POST['police'];
		
        $district = $_POST['district'];
		$state = $_POST['state'];
		$pin = $_POST['pin'];
		

		$sql = "update staff set mobnum='$mobnum',altnum='$altnum',mstatus='$mstatus',email='$email',photo='$photo',address='$address',post='$post',police='$police',district='$district',state='$state',pin='$pin' where id = '$id'";

		if(mysqli_query($conn,$sql)){
			echo "<script>alert('Data Updated');</script>";
			echo '<script>window.location="staff-admin.php";</script>';
		}else{
			echo "error".mysqli_error($conn);
		}
	}
?>