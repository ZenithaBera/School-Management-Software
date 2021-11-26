<?php
	include '../php/db_student.php';
	include '../php/student_registration.php';

	if(isset($_POST['update'])){
		$id = $_POST['id'];

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

		$sql = "update student set name='$name',fname='$fname',mname='$mname',foccu='$foccu',moccu='$moccu',dob='$dob',gender='$gender',religion='$religion',category='$category',mobnum='$mobnum',altnum='$altnum',email='$email',aadhar='$aadhar',document='$document',photo='$photo',address='$address',post='$post',police='$police',district='$district',state='$state',pin='$pin',class='$class',shift='$shift',bus='$bus' where id = '$id'";

		if(mysqli_query($conn,$sql)){
			echo "<script>alert('Data Updated');</script>";
			echo '<script>window.location="student-admin.php";</script>';
		}else{
			echo "error".mysqli_error($conn);
		}
	}
?>