<?php

session_start();
if(isset($_POST['register'])){
    include 'db_teacher.php';

    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $class = $_POST['class'];
    $phnnum = $_POST['phnnum'];
    $altnum = $_POST['altnum'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $rel = $_POST['rel'];
    $category = $_POST['category'];
    $exp = $_POST['exp'];
    $aadhar = $_POST['aadhar'];
    $email = $_POST['email'];
    $doj = $_POST['doj'];
    $docu = $_FILES['docu']['name'];
    move_uploaded_file($_FILES['docu']['tmp_name'], "imagemoveTeacher/".$_FILES['docu']['name']);
    $photo = $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], "imagemoveTeacher/".$_FILES['photo']['name']);
      
        $address = $_POST['address'];
		$post = $_POST['post'];
		$police = $_POST['police'];
		  $dist = $_POST['dist'];
		$state = $_POST['state'];
		$pin = $_POST['pin']; 

    mysqli_query($conn,"insert into teacher values('','$name','$dept','$class','$phnnum','$altnum','$dob','$gender','$rel','$category','$exp','$aadhar','$email','$doj','$docu','$photo','$address','$post','$police','$dist','$state','$pin')");
    
    echo "<script>alert('Successfully Registered');</script>";
		echo "<script>window.location='../dashboard/teacher-dashboard.php';</script>";

}

?>