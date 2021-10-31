<?php

session_start();
	if(isset($_POST['register'])){
		include 'db_staff.php';

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


        mysqli_query($conn,"insert into staff values('','$name','$mobnum','$altnum','$dob','$gender','$religion','$category','$position','$mstatus','$exp','$aadhar','$email','$doj','$cv','$photo','$address','$post','$police','$district','$state','$pin')");
		
		echo "<script>alert('Successfully Registered');</script>";
	}
?>