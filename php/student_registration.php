<?php

session_start();
	if(isset($_POST['register'])){
		include 'db_student.php';

		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];

		$foccu = $_POST['foccu'];
		$moccu = $_POST['moccu'];
		$dob = $_POST['dob'];

		$gender = $_POST['gender'];
		$religion = $_POST['religion'];
		$category = $_POST['category'];

		$mobnum = $_POST['mobnum'];
		$altnum = $_POST['altnum'];
		$email = $_POST['email'];

		$aadhar = $_POST['aadhar'];
		$document = $_FILES['document']['name'];
		move_uploaded_file($_FILES['document']['tmp_name'], "imagemove/".$_FILES['document']['name']);
		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'], "imagemove/".$_FILES['photo']['name']);
        
        $address = $_POST['address'];
		$post = $_POST['post'];
		$police = $_POST['police'];
		
        $district = $_POST['district'];
		$state = $_POST['state'];
		$pin = $_POST['pin'];

		$class = $_POST['class'];
		$shift = $_POST['shift'];
		$bus = $_POST['bus'];


        mysqli_query($conn,"insert into student values('','$name','$fname','$mname','$foccu','$moccu','$dob','$gender','$religion','$category','$mobnum','$altnum','$email','$aadhar','$document','$photo','$address','$post','$police','$district','$state','$pin','$class','$shift','$bus')");
		
		echo "<script>alert('Successfully Registered');</script>";
		echo "<script>window.location='../dashboard/student-dashboard.php';</script>";
	}
?>