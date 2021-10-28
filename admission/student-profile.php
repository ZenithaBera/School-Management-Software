<?php
	include '../php/db_student.php';
?>

<?php
session_start();
    if(isset($_POST['view'])){
        $id = $_POST['id'];

        $sql = "select * from student where id = '$id'";
        $table = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($table);
    }
    elseif(isset($_SESSION['name'])){
      echo "<script>alert('Register 1st')</script>";
    }
    else{
       echo "Not Registered";
       /*echo "error".mysqli_error($conn);
       <script>window.location("student-register.php");</script>*/
       header("location:student-register.php");
    }
    session_destroy();
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
    <link rel="stylesheet" href="register.css" />
    <title>Student Profile</title>
  </head>
  <body>
    <div class="container-fluid bg-dark text-light overflow-hidden">
    

    <!--Sidepanel-->
    <div class="row">
      <div class="col-md-2 col-sm-12 sidepanel m-0 p-0 border border-warning">
          <nav>
            <h3 class="text-center text-light fw-bold">Student Dashboard</h3>
            <a href="" class="text-decoration-none fw-bold"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
              <a class="text-decoration-none fw-bold" href="student-register.php"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;Registration</a>
              <a href="#" class="active text-decoration-none bg-warning text-dark fw-bold"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Profile Details</a>
          </nav>
      </div>

      <div class="col-md-10 col-sm-12">
        <div class="p-4 topbar">
          <p class="h3 fw-bold">Profile</p>
        </div>


        <div class="col-md-12 col-sm-12 nav2">
          <div class="dropdown">
            <nav
              class="
                navbar navbar-expand-lg navbar-dark
                bg-dark
              "
              aria-label=""
            >
            <h3 class="navbar-brand justify-content-start fw-bold">Profile</h3>
              <button
                class="navbar-toggler bg-warning mb-1"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="true"
                aria-label="Toggle navigation"
              >
                <em class="fas fa-bars"></em>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <nav class="nav flex-column" aria-label="">
                  <a class="nav-link fw-bold" href="">Home</a>
                  <a class="nav-link fw-bold" href="student-register.php">Registration</a>
                  <a
                    class="nav-link active bg-warning text-dark fw-bold"
                    aria-current="page"
                    href="#"
                    >Profile Details</a
                  >
                  
                </nav>
              </div>
            </nav>
          </div>
        </div>


          <!--Form-->
      <form>
      <h4 class="text-center mt-5">Personal Details</h4><hr>
        <div class="row">

      <div class="row d-flex justify-content-center">
          <div class="col-md-2 m-md-5 mt-md-0 mb-md-3 col-sm-12">
          <img src="../php/imagemove/<?php echo $row['photo'] ?>" class="border border-3 rounded-circle w-100" style="height:180px">
          </div>
          </div>

        
          
          
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Name: </label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" id="exampleInputName1" value="<?php echo $row['name']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Father's Name: </label>
            <input type="text" class="form-control" name="fname" placeholder="Enter your father's name" id="exampleInputPassword1" value="<?php echo $row['fname']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Mother's Name: </label>
            <input type="text" class="form-control" name="mname" placeholder="Enter your mother's name" id="exampleInputPassword1" value="<?php echo $row['mname']; ?>" disabled>
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Father's Occupation: </label>
            <input type="text" class="form-control" name="foccu" placeholder="Enter your father's occupation" id="exampleInputName1" value="<?php echo $row['foccu']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Mother's Occupation: </label>
            <input type="text" class="form-control" name="moccu" placeholder="Enter your mother's occupation:" id="exampleInputPassword1" value="<?php echo $row['moccu']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Date Of Birth (DOB): </label>
            <input type="date" class="form-control" name="dob" id="exampleInputPassword1" value="<?php echo $row['dob']; ?>" disabled>
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Gender: </label>
            <select class="form-select" name="gender" aria-label="Default select example" value="<?php echo $row['gender']; ?>" disabled>
          <option selected disabled>Select your gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
        </select>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Religion: </label>
            <select class="form-select" name="religion" aria-label="Default select example" value="<?php echo $row['religion']; ?>" disabled>
          <option selected disabled>Select your religion</option>
          <option value="hindu">Hindu</option>
          <option value="muslim">Muslim</option>
          <option value="sikh">Sikh</option>
          <option value="christian">Christian</option>
          <option value="others">Others</option>
        </select>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Category: </label>
            <select class="form-select" name="category" aria-label="Default select example" value="<?php echo $row['category']; ?>" disabled>
          <option selected disabled>Select your category</option>
          <option value="general">General</option>
          <option value="obc/ebc">OBC / EBC</option>
          <option value="sc/st">SC / ST</option>
        </select>
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Mobile Number: </label>
            <input type="tel" class="form-control" name="mobnum" placeholder="e.g. 123 456 7890" id="exampleInputName1" value="<?php echo $row['mobnum']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Alternative Number: </label>
            <input type="tel" class="form-control" name="altnum" placeholder="e.g. 123 456 7890" id="exampleInputPassword1" value="<?php echo $row['altnum']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Email Id: </label>
            <input type="email" class="form-control" name="email" placeholder="e.g. sample@gmail.com" id="exampleInputPassword1" value="<?php echo $row['email']; ?>" disabled>
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Aadhar Number: </label>
            <input type="text" class="form-control" name="aadhar" placeholder="e.g. 1111 2222 3333" id="exampleInputName1" value="<?php echo $row['aadhar']; ?>"  disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Document: </label>
            <img src="../php/imagemove/<?php echo $row['document'] ?>" class="w-100 rounded-3" style="height:40px" disabled>
          </div>
          </div>
        
        
          <h4 class="text-center mt-2">Address Details</h4><hr>
        
        
          <div class="row">
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Address: </label>
            <input type="text" class="form-control" name="address" placeholder="Enter your address" id="exampleInputName1" value="<?php echo $row['address']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Post Office: </label>
            <input type="text" class="form-control" name="post" placeholder="Enter post office" id="exampleInputPassword1" value="<?php echo $row['post']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Police Station: </label>
            <input type="text" class="form-control" name="police" placeholder="Enter police station" id="exampleInputPassword1" value="<?php echo $row['police']; ?>" disabled>
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">District: </label>
            <input type="text" class="form-control" name="district" placeholder="Enter your district" id="exampleInputName1" value="<?php echo $row['district']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">State: </label>
            <input type="text" class="form-control" name="state" placeholder="Enter state" id="exampleInputPassword1" value="<?php echo $row['state']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Pin Code: </label>
            <input type="text" class="form-control" name="pin" placeholder="Enter pin code" id="exampleInputPassword1" value="<?php echo $row['pin']; ?>" disabled>
          </div></div>
        
        
          <h4 class="text-center mt-2">Admission Details</h4><hr>
        
        
          <div class="row">
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Class: </label>
            <input type="text" class="form-control" name="class" placeholder="Enter your class" id="exampleInputName1" value="<?php echo $row['class']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Section: </label>
            <input type="text" class="form-control" name="section" placeholder="Enter your section" id="exampleInputPassword1" value="<?php echo $row['section']; ?>" disabled>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Roll Number: </label>
            <input type="text" class="form-control" name="roll" placeholder="Enter your roll number" id="exampleInputPassword1" value="<?php echo $row['roll']; ?>" disabled>
          </div></div>
      
      </form>
        </div>
    </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>