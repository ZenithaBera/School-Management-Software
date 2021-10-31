<?php
include('db_student.php');


    if(isset($_POST['login'])){
    $email=$_POST['email'];
    $id=$_POST['id'];

    $sql=mysqli_query($conn,"select * from student where email='$email' && id='$id'");
    $num=mysqli_num_rows($sql);
    if($num>0)
    {
        echo '<script type="text/JavaScript"> alert("Successfully logged in");</script>';   
        echo '<script type="text/javascript">
			window.location="../library/library.php";
		</script>';   
    }
    else{
        
        echo '<script type="text/JavaScript"> alert("Failed to log in");</script>';   
    }
    }
    else{
        
        echo '<script type="text/JavaScript"> alert("Failed to connect");</script>';   
    
    }
?>