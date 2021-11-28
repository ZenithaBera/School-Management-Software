<?php
	include '../php/db_student.php';
?>

<?php

    if(isset($_POST['edit'])){
        $id = $_POST['id'];

        $sql = "select * from student where id = '$id'";
        $table = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($table);
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'include_admin/top_links.php' ?>

    <title>Student Update | School Management Software</title>
  </head>
  <body>
    <div class="container-fluid bg-dark text-light overflow-hidden">
    
        <!--Sidepanel-->
        <div class="row">
          <div class="col-md-2 col-sm-12 sidepanel m-0 p-0 border border-warning">
              <nav>
                <h3 class="text-center text-light fw-bold">Student Admin</h3>
                <a href="student-admin.php" class="active text-decoration-none fw-bold"><i class="fas fa-clipboard"></i>&nbsp;&nbsp;&nbsp;Records</a>
                <a href="student-dummy.php" class="text-decoration-none fw-bold bg-warning text-dark"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Profile Details</a>

              </nav>
          </div>
  
          <div class="col-md-10 col-sm-12">
            <div class="p-4 topbar">
              <p class="h3 fw-bold">Update</p>
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
                <h3 class="navbar-brand justify-content-start fw-bold">Update</h3>
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
                    <a class="nav-link fw-bold" href="student-admin.php">Records</a>
                    <a class="nav-link fw-bold active bg-warning text-dark" href="student-dummy.php">Profile Details</a>

                    </nav>
                  </div>
                </nav>
              </div>
            </div>
          <!--Form-->
          <form action="studentdb_upd.php" method="POST" enctype="multipart/form-data">
        <h4 class="text-center mt-5">Personal Details</h4><hr>
        <div class="row">
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Name: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" id="exampleInputName1" value="<?php echo $row['name']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Father's Name: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="fname" placeholder="Enter your father's name" id="exampleInputPassword1" value="<?php echo $row['fname']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Mother's Name: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="mname" placeholder="Enter your mother's name" id="exampleInputPassword1" value="<?php echo $row['mname']; ?>" required>
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Father's Occupation: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="foccu" placeholder="Enter your father's occupation" id="exampleInputName1" value="<?php echo $row['foccu']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Mother's Occupation: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="moccu" placeholder="Enter your mother's occupation:" id="exampleInputPassword1" value="<?php echo $row['moccu']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Date Of Birth (DOB): <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="date" class="form-control" name="dob" id="exampleInputPassword1" value="<?php echo $row['dob']; ?>" required>
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Gender: <span><i class="fas fa-pen-nib"></i><span></label>
            <select class="form-select" name="gender" aria-label="Default select example" value="<?php echo $row['gender']; ?>" required>
          <option selected disabled>Select your gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
        </select>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Religion: <span><i class="fas fa-pen-nib"></i><span></label>
            <select class="form-select" name="religion" aria-label="Default select example" value="<?php echo $row['religion']; ?>" required>
          <option selected disabled>Select your religion</option>
          <option value="Hindu">Hindu</option>
          <option value="Muslim">Muslim</option>
          <option value="Sikh">Sikh</option>
          <option value="Christian">Christian</option>
          <option value="Others">Others</option>
        </select>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Category: <span><i class="fas fa-pen-nib"></i><span></label>
            <select class="form-select" name="category" aria-label="Default select example" value="<?php echo $row['category']; ?>" required>
          <option selected disabled>Select your category</option>
          <option value="General">General</option>
          <option value="OBC/EBC">OBC / EBC</option>
          <option value="SC/ST">SC / ST</option>
        </select>
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Mobile Number: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="tel" class="form-control" name="mobnum" placeholder="e.g. 123 456 7890" id="exampleInputName1" value="<?php echo $row['mobnum']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Alternative Number: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="tel" class="form-control" name="altnum" placeholder="e.g. 123 456 7890" id="exampleInputPassword1" value="<?php echo $row['altnum']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Email Id: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="email" class="form-control" name="email" placeholder="e.g. sample@gmail.com" id="exampleInputPassword1" value="<?php echo $row['email']; ?>" required>
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Aadhar Number: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="aadhar" placeholder="e.g. 1111 2222 3333" id="exampleInputName1" value="<?php echo $row['aadhar']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Document: <span><i class="fas fa-pen-nib"></i><span></label>
              <input type="file" class="form-control" name="document" aria-label="file example" value="<?php echo $row['document']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Photo: <span><i class="fas fa-pen-nib"></i><span></label>
              <input type="file" class="form-control" name="photo" aria-label="file example" value="<?php echo $row['photo']; ?>" required>
          </div></div>
        
        
          <h4 class="text-center mt-2">Address Details</h4><hr>
        
        
          <div class="row">
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Address: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="address" placeholder="Enter your address" id="exampleInputName1" value="<?php echo $row['address']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Post Office: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="post" placeholder="Enter post office" id="exampleInputPassword1" value="<?php echo $row['post']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Police Station: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="police" placeholder="Enter police station" id="exampleInputPassword1" value="<?php echo $row['police']; ?>" required>
          </div>
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">District: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="district" placeholder="Enter your district" id="exampleInputName1" value="<?php echo $row['district']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">State: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="state" placeholder="Enter state" id="exampleInputPassword1" value="<?php echo $row['state']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Pin Code: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="pin" placeholder="Enter pin code" id="exampleInputPassword1" value="<?php echo $row['pin']; ?>" required>
          </div></div>
        
        
          <h4 class="text-center mt-2">Admission Details</h4><hr>
        
        
          <div class="row">
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Class: <span><i class="fas fa-pen-nib"></i><span></label>
            <input type="text" class="form-control" name="class" placeholder="Enter your class" id="exampleInputName1" value="<?php echo $row['class']; ?>" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Shift: <span><i class="fas fa-pen-nib"></i><span></label>
            <select class="form-select" name="shift" aria-label="Default select example" value="<?php echo $row['shift']; ?>" required>
          <option selected disabled>Select your choice</option>
          <option value="Morning">Morning</option>
          <option value="Day">Day</option>
        </select></div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">School Bus: <span><i class="fas fa-pen-nib"></i><span></label>
            <select class="form-select" name="bus" aria-label="Default select example" value="<?php echo $row['bus']; ?>" required>
          <option selected disabled>Select your choice</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
      </div></div>
        
        
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <span><i class="fas fa-pen-nib"></i> Marked fields can be updated only</span></div>
        
        <!--Button-->
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button type="submit" name="update" class="btn btn-warning">Update</button>
            <button type="reset" class="btn btn-secondary">Reset</button></div>
          </div>
      
      </form>
        </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
