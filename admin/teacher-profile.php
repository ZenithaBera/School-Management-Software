<?php
	include '../php/db_teacher.php';
?>

<?php
session_start();
    if(isset($_POST['view'])){
        $id = $_POST['id'];

        $sql = "select * from teacher where id = '$id'";
        $table = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($table);
    }
    session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'include_admin/top_links.php' ?>

    <title>Teacher Profile | School Management Software</title>
  </head>
  <body>
    <div class="container-fluid bg-dark text-light overflow-hidden">
    

    <!--Sidepanel-->
    <div class="row">
      <div class="col-md-2 col-sm-12 sidepanel m-0 p-0 border border-warning">
          <nav>
            <h3 class="text-center text-light fw-bold">Student Dashboard</h3>
            <a href="teacher-admin.php" class="text-decoration-none fw-bold"><i class="fas fa-user-shield"></i>&nbsp;&nbsp;&nbsp;Records</a>
                <a href="teacher-login.php" class=" active  bg-warning text-dark text-decoration-none fw-bold"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Profile Details</a>
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
                  <a href="teacher-admin.php" class="text-decoration-none fw-bold"><i class="fas fa-user-shield"></i>&nbsp;&nbsp;&nbsp;Records</a>
                <a href="teacher-login.php" class=" active  bg-warning text-dark text-decoration-none fw-bold"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Profile Details</a>
                  
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
          <img src="../php/imagemoveTeacher/<?php echo $row['photo'] ?>" class="border border-3 rounded-circle w-100" style="height:180px">
          </div>
          </div>
           <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Name: </label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" id="exampleInputName1" value="<?php echo $row['name']; ?>"disabled >
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Department: </label>
            <input type="text" class="form-control" name="dept" placeholder="Enter the department" id="exampleInputPassword1" value="<?php echo $row['dept']; ?>" disabled >
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Class: </label>
            <input type="text" class="form-control" name="class" placeholder="Enter the class" id="exampleInputPassword1" value="<?php echo $row['class']; ?>" disabled >
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Phone Number: </label>
            <input type="tel" class="form-control" name="phnnum" placeholder="e.g. 98XXXXXXXX" id="exampleInputName1" value="<?php echo $row['phnnum']; ?>" disabled >
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Alternative Number: </label>
            <input type="tel" class="form-control" name="altnum" placeholder="Enter alternative number" id="exampleInputPassword1" value="<?php echo $row['altnum']; ?>" disabled >
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Date Of Birth (DOB): </label>
            <input type="date" class="form-control" name="dob" id="exampleInputPassword1" value="<?php echo $row['dob']; ?>" disabled >
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Gender: </label>
            <select class="form-select form-control" name="gender" aria-label="Default select example" value="<?php echo $row['gender']; ?>" disabled >
          <option selected >Select your gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
        </select>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Religion: </label>
            <select class="form-select form-control" name="rel" aria-label="Default select example" value="<?php echo $row['rel']; ?>" disabled >
          <option selected >Select your religion</option>
          <option value="Hindu">Hindu</option>
          <option value="Muslim">Muslim</option>
          <option value="Sikh">Sikh</option>
          <option value="Christian">Christian</option>
          <option value="Others">Others</option>
        </select>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Category: </label>
            <select class="form-select form-control" name="category" aria-label="Default select example" value="<?php echo $row['category']; ?>" disabled >
          <option selected >Select your category</option>
          <option value="General">General</option>
          <option value="OBC/EBC">OBC / EBC</option>
          <option value="SC/ST">SC / ST</option>
        </select>
          </div>
            <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
              <label for="exampleInputPassword1" class="form-label">Experienced: </label>
              <select class="form-select form-control" name="exp" aria-label="Default select example" value="<?php echo $row['exp']; ?>" disabled >
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
            </div>
            <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
              <label for="exampleInputEmail1" class="form-label">Aadhar Number: </label>
              <input type="text" class="form-control" name="aadhar" placeholder="e.g. 1111 2222 3333" id="exampleInputName1" value="<?php echo $row['aadhar']; ?>" disabled >
            </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Email Id: </label>
            <input type="email" class="form-control" name="email" placeholder="e.g. sample@gmail.com" id="exampleInputPassword1" value="<?php echo $row['email']; ?>"disabled  >
          </div>
            <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
              <label for="exampleInputEmail1" class="form-label">Date Of Joining: </label>
              <input type="date" class="form-control" name="doj" id="exampleInputName1" value="<?php echo $row['doj']; ?>" disabled >
            </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">CV: </label>
            <a class="pe-auto" href="../php/imagemoveTeacher/<?php echo $row['document'] ?>">
              <input type="file" class="form-control" name="docu" aria-label="file example" value="<?php echo $row['docu']; ?>" disabled >
          </div>
          <!-- <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Photo: </label>
            <a class="pe-auto" href="../php/imagemoveTeacher/<?php echo $row['document'] ?>" disabled >
              <input type="file" class="form-control" name="photo" aria-label="file example">
          </div> -->
        </div>
        
          <h4 class="text-center mt-2">Address Details</h4><hr>
        
          <div class="row">
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Address: </label>
            <input type="text" class="form-control" name="address" placeholder="Enter your address" id="exampleInputName1" value="<?php echo $row['address']; ?>"disabled  >
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Post Office: </label>
            <input type="text" class="form-control" name="post" placeholder="Enter post office" id="exampleInputPassword1" value="<?php echo $row['post']; ?>" disabled >
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Police Station: </label>
            <input type="text" class="form-control" name="police" placeholder="Enter police station" id="exampleInputPassword1" value="<?php echo $row['police']; ?>" disabled >
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">District: </label>
            <input type="text" class="form-control" name="dist" placeholder="Enter your district" id="exampleInputName1" value="<?php echo $row['dist']; ?>" disabled >
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">State: </label>
            <input type="text" class="form-control" name="state" placeholder="Enter state" id="exampleInputPassword1" value="<?php echo $row['state']; ?>"disabled  >
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Pin Code: </label>
            <input type="text" class="form-control" name="pin" placeholder="Enter pin code" id="exampleInputPassword1" value="<?php echo $row['pin']; ?>" disabled >
          </div></div>
      
      </form>
        </div>
    </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
