<?php
    include('php/db_student.php');

    if(isset($_POST['login']))
    {
    $email=$_POST['email'];
    $mobnum=$_POST['mobnum'];

    $sql=mysqli_query($conn,"select * from student where email='$email' && mobnum='$mobnum'");
    $num=mysqli_num_rows($sql);
    if($num>0){
        echo '<script type="text/JavaScript"> alert("Successfully logged in");</script>';   
        echo '<script type="text/javascript">
			window.location="dashboard/student-dashboard.php";
		</script>';  
    }
    else{
        
        echo '<script type="text/JavaScript"> alert("Register First");</script>';   
    
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <title>Student Login | School Management Software</title>
</head>
<body class="bg-dark">
<div class="container-fluid p-5 pb-0 m-0 bg-dark pt-0 text-light">
<h3 class="pt-4 pb-3 text-center">Student Login</h3>
<hr class="bg-warning" style="border-bottom: 5px solid #ffc107;"/>
<div class="container d-flex justify-content-center mt-5">
<form class="border border-warning border-5 rounded m-2 p-3" action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email: </label>
    <input type="text" class="form-control bg-secondary" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile Number: </label>
    <input type="tel" class="form-control bg-secondary" name="mobnum">
  </div>
  <div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-warning" name="login">Login</button>&nbsp;
  <button type="reset" class="btn btn-light" name="login">Reset</button>
</div>
<br>
  <p>Didn't register yet?
  <a href="admission/student-register.php" type="submit" class="btn btn-secondary" autocomplete="off">Register</a></p>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>