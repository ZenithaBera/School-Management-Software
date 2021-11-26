<?php
include('../php/db_student.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'dashboard.php' ?>

    <title>Student Profile Details | School Management Software</title>
  </head>
  <script>
	function Delete(){
		var x = confirm("Do you want to delete");
		if(x)
			return true;
		else
			return false;
	}
</script>
  <body class="bg-dark">
    <div class="container-fluid bg-dark text-light overflow-hidden">
    
        <!--Sidepanel-->
      <div class="row">
        <div class="col-md-2 col-sm-12 sidepanel m-0 p-0 border border-warning">
            <nav style="height: 100vh;">
              <h3 class="text-center text-light fw-bold">Student Dashboard</h3>
              <a href="../dashboard/student-dashboard.php" class="text-decoration-none fw-bold"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
                <a href="../admission/student-register.php" class="text-decoration-none fw-bold"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;Registration</a>
                <a href="student-login.php" class="active text-decoration-none bg-warning text-dark fw-bold"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Profile Details</a>
                
            </nav>
        </div>

        <div class="col-md-10 col-sm-12">
          <div class="p-4 topbar">
            <p class="h3 fw-bold">Profile Details</p>
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
              <h3 class="navbar-brand justify-content-start fw-bold">Profile Details</h3>
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
                    <a class="nav-link fw-bold" href="../dashboard/student-dashboard.php">Home</a>
                    <a class="nav-link fw-bold" href="../admission/student-register.php">Registration</a>
                    <a class="nav-link active bg-warning text-dark fw-bold" href="student-login.php">Profile Details</a>
                  </nav>
                </div>
              </nav>
            </div>
          </div>
<?php
    if(isset($_POST['login'])){
    

    $email=$_POST['email'];
    $id=$_POST['id'];

    $sql=mysqli_query($conn,"select * from student where email='$email' && id='$id'");
    $num=mysqli_num_rows($sql);
    if($num>0)
    {
        echo '<script type="text/JavaScript"> alert("Successfully logged in");</script>';   
        ?>
        <div class="col-md-12 m-2 p-2 col-sm-12 table-responsive">
            <table class="table table-dark table-hover">
            <thead>
              <th>Sl. No.</th>
              <th>Name</th>
              <th>Father's Name</th>
              <th>Mother's Name</th>
              <th>Father's Occupation</th>
              <th>Mother's Occupation</th>
              <th>Date of Birth (DOB)</th>
              <th>Gender</th>
              <th>Religion</th>
              <th>Category</th>
              <th>Mobile Number</th>
              <th>Alternative Number</th>
              <th>Email Id</th>
              <th>Aadhar Number</th>
              <th>Document</th>
              <th>Photo</th>
              <th>Address</th>
              <th>Post Office</th>
              <th>Police Station</th>
              <th>District</th>
              <th>State</th>
              <th>Pin Code</th>
              <th>Class</th>
              <th>Shift</th>
              <th>School Bus</th>
              <th>Action</th>
          </thead>
          <tbody>
          <?php 
                    
					
                        
						while($row = mysqli_fetch_assoc($sql)){
					?>
          <tr>
              <td>1</td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['fname']; ?></td>
              <td><?php echo $row['mname']; ?></td>
              <td><?php echo $row['foccu']; ?></td>
              <td><?php echo $row['moccu']; ?></td>
              <td><?php echo $row['dob']; ?></td>
              <td><?php echo $row['gender']; ?></td>
              <td><?php echo $row['religion']; ?></td>
              <td><?php echo $row['category']; ?></td>
              <td><?php echo $row['mobnum']; ?></td>
              <td><?php echo $row['altnum']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['aadhar']; ?></td>
              <td><?php echo $row['document']; ?></td>
              <td><?php echo $row['photo']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['post']; ?></td>
              <td><?php echo $row['police']; ?></td>
              <td><?php echo $row['district']; ?></td>
              <td><?php echo $row['state']; ?></td>
              <td><?php echo $row['pin']; ?></td>
              <td><?php echo $row['class']; ?></td>
              <td><?php echo $row['shift']; ?></td>
              <td><?php echo $row['bus']; ?></td>
        
              <td>
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <form action="../admission/student-profile.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button class="fa fa-eye btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="View Profile" name="view"></button>
                      </form>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <form action="../admission/student-update.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button class="fas fa-pen-nib btn-sm btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Profile" name="edit"></button>
                      </form>
                  </div>		
                  
                </div>
                </td>
          </tr> 
          <?php 
				

						}
					
				?>
          </tbody>
          
            </table>
          </div>
      
        </div><?php
    }
    else{
        
        echo '<script type="text/JavaScript"> alert("Failed to log in");</script>';   
    }
    }
    else{
        
        echo '<script type="text/JavaScript"> alert("Login to view profile");</script>';   
    
    }
?>
</div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>