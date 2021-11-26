<?php
	include '../php/db_staff.php';
	include '../php/staff_registration.php';

	if(isset($_POST['update'])){
		$id = $_POST['id'];

		$name = $_POST['name'];
		$mobnum = $_POST['mobnum'];
		$altnum = $_POST['altnum'];

		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$religion = $_POST['religion'];

		$category = $_POST['category'];
		$position = $_POST['position'];
		$mstatus = $_POST['mstatus'];

		$exp = $_POST['exp'];
		$aadhar = $_POST['aadhar'];
		$email = $_POST['email'];

		$doj = $_POST['doj'];
		$cv = $_FILES['cv']['name'];
		move_uploaded_file($_FILES['cv']['tmp_name'], "imagemoveStaff/".$_FILES['cv']['name']);
		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'], "imagemoveStaff/".$_FILES['photo']['name']);
        
        $address = $_POST['address'];
		$post = $_POST['post'];
		$police = $_POST['police'];
		
        $district = $_POST['district'];
		$state = $_POST['state'];
		$pin = $_POST['pin'];

		$sql = "update staff set name='$name',mobnum='$mobnum',altnum='$altnum',dob='$dob',gender='$gender',religion='$religion',category='$category',position='$position',mstatus='$mstatus',exp='$exp',aadhar='$aadhar',email='$email',doj='$doj',cv='$cv',photo='$photo',address='$address',post='$post',police='$police',district='$district',state='$state',pin='$pin' where id = '$id'";

		if(mysqli_query($conn,$sql)){
			echo "<script>alert('Data Updated');</script>";
			echo '<script>window.location="staff-admin.php";</script>';
		}else{
			echo "error".mysqli_error($conn);
		}
	}
?>