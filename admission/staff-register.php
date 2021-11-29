
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'includes/top_links.php' ?>

    <title>Staff Register | School Management Software</title>
  </head>
  <body>
    <div class="container-fluid bg-dark text-light overflow-hidden">
    

      <!--Sidepanel-->
      <div class="row">
        <div class="col-md-2 col-sm-12 sidepanel m-0 p-0 border border-warning">
            <nav>
              <h3 class="text-center text-light fw-bold">Staff Dashboard</h3>
              <!--<a href="../dashboard/staff-dashboard.php" class="text-decoration-none fw-bold"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>-->
                <a class="active text-decoration-none bg-warning text-dark fw-bold" href="staff-register.php"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;Registration</a>
                <!--<a href="../dashboard-login/staff-login.php" class="text-decoration-none fw-bold"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Profile Details</a>-->
              </nav>
        </div>

        <div class="col-md-10 col-sm-12">
          <div class="p-4 topbar">
            <p class="h3 fw-bold">Registration</p>
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
              <h3 class="navbar-brand justify-content-start fw-bold">Registration</h3>
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
                    <!--<a class="nav-link fw-bold" href="../dashboard/staff-dashboard.php">Home</a>-->
                    <a
                      class="nav-link active bg-warning text-dark fw-bold"
                      aria-current="page"
                      href="staff-register.php"
                      >Registration</a
                    >
                    <!--<a class="nav-link fw-bold" href="../dashboard-login/staff-login.php">Profile Details</a>-->
                  </nav>
                </div>
              </nav>
            </div>
          </div>

          
          <!--Form-->
      <form action="../php/staff_registration.php" method="POST" enctype="multipart/form-data">
        <h4 class="text-center mt-5">Personal Details</h4><hr>
        <div class="row">
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Name: <span>*<span></label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" id="exampleInputName1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Phone Number: <span>*<span></label>
            <input type="tel" class="form-control" name="mobnum" placeholder="e.g. 98XXXXXXXX" id="exampleInputName1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Alternative Number: <span>*<span></label>
            <input type="tel" class="form-control" name="altnum" placeholder="Enter alternative number" id="exampleInputPassword1" required>
          </div>
          
          
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Date Of Birth (DOB): <span>*<span></label>
            <input type="date" class="form-control" name="dob" id="exampleInputPassword1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Gender: <span>*<span></label>
            <select class="form-select form-control" name="gender" aria-label="Default select example" required>
          <option selected disabled>Select your gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Others">Others</option>
        </select>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Religion: <span>*<span></label>
            <select class="form-select form-control" name="religion" aria-label="Default select example" required>
          <option selected disabled>Select your religion</option>
          <option value="Hindu">Hindu</option>
          <option value="Muslim">Muslim</option>
          <option value="Sikh">Sikh</option>
          <option value="Christian">Christian</option>
          <option value="Others">Others</option>
        </select>
          </div>
       
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Category: <span>*<span></label>
            <select class="form-select form-control" name="category" aria-label="Default select example" required>
          <option selected disabled>Select your category</option>
          <option value="General">General</option>
          <option value="OBC/EBC">OBC / EBC</option>
          <option value="SC/ST">SC / ST</option>
        </select>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Position: <span>*<span></label>
            <select class="form-select form-control" name="position" aria-label="Default select example" required>
            <option selected disabled>Select your position</option>
            <option value="Principal">Principal</option>
          <option value="Counsellor">Counsellor</option>
          <option value="Nurse">Nurse</option>
          <option value="Registrar">Registrar</option>
          <option value="Accountant">Accountant</option>
          <option value="Secretary">Secretary</option>
        </select>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Marital Status: <span>*<span></label>
            <select class="form-select form-control" name="mstatus" aria-label="Default select example" required>
            <option selected disabled>Select your status</option>
            <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Divorced">Divorced</option>
        </select>
          </div>
       
            <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
              <label for="exampleInputPassword1" class="form-label">Experienced: <span>*<span></label>
              <select class="form-select form-control" name="exp" aria-label="Default select example" required>
              <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
            </div>
            <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
              <label for="exampleInputEmail1" class="form-label">Aadhar Number: <span>*<span></label>
              <input type="text" class="form-control" name="aadhar" placeholder="e.g. 1111 2222 3333" id="exampleInputName1" required>
            </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Email Id: <span>*<span></label>
            <input type="email" class="form-control" name="email" placeholder="e.g. sample@gmail.com" id="exampleInputPassword1" required>
          </div>
          
        
            <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
              <label for="exampleInputEmail1" class="form-label">Date Of Joining: <span>*<span></label>
              <input type="date" class="form-control" name="doj" id="exampleInputName1" required>
            </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">CV: <span>*<span></label>
              <input type="file" class="form-control" name="cv" aria-label="file example" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Photo: <span>*<span></label>
              <input type="file" class="form-control" name="photo" aria-label="file example" required>
          </div></div>
        
        
          <h4 class="text-center mt-2">Address Details</h4><hr>
        
        
          <div class="row">
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Address: <span>*<span></label>
            <input type="text" class="form-control" name="address" placeholder="Enter your address" id="exampleInputName1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Post Office: <span>*<span></label>
            <input type="text" class="form-control" name="post" placeholder="Enter post office" id="exampleInputPassword1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Police Station: <span>*<span></label>
            <input type="text" class="form-control" name="police" placeholder="Enter police station" id="exampleInputPassword1" required>
          </div>

          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">District: <span>*<span></label>
            <input type="text" class="form-control" name="district" placeholder="Enter your district" id="exampleInputName1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">State: <span>*<span></label>
            <input type="text" class="form-control" name="state" placeholder="Enter state" id="exampleInputPassword1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Pin Code: <span>*<span></label>
            <input type="text" class="form-control" name="pin" placeholder="Enter pin code" id="exampleInputPassword1" required>
          </div></div>
        
        
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <span>* Marked fields are compulsory</span></div>
        
        <!--Buttons-->
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <button type="submit" name="register" class="btn btn-warning">Register</button>
            <button type="reset" class="btn btn-secondary">Reset</button></div>
          </div>
      
      </form>
        </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
