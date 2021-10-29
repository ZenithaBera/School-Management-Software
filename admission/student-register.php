
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
    <link rel="stylesheet" href="register.css" type="text/css" />
    
    <title>Student Register</title>
  </head>
  <body>
    <div class="container-fluid bg-dark text-light overflow-hidden">
    
      <!--Sidepanel-->
      <div class="row">
        <div class="col-md-2 col-sm-12 sidepanel m-0 p-0 border border-warning">
            <nav>
              <h3 class="text-center text-light fw-bold">Student Dashboard</h3>
              <a href="" class="text-decoration-none fw-bold"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
                <a href="student-register.php" class="active text-decoration-none bg-warning text-dark fw-bold"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;Registration</a>
                <a href="student-delete.php" class="text-decoration-none fw-bold"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Profile Details</a>
                
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
                    <a class="nav-link fw-bold" href="">Home</a>
                    <a
                      class="nav-link active bg-warning text-dark fw-bold"
                      aria-current="page"
                      href="student-register.php"
                      >Registration</a
                    >
                    <a class="nav-link fw-bold" href="student-delete.php">Profile Details</a>
                    
                  </nav>
                </div>
              </nav>
            </div>
          </div>

          <!--Form-->
      <form action="../php/student_registration.php" method="POST" enctype="multipart/form-data">
        <h4 class="text-center mt-5">Personal Details</h4><hr>
        <div class="row">
          
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Name: <span>*<span></label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" id="exampleInputName1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Father's Name: <span>*<span></label>
            <input type="text" class="form-control" name="fname" placeholder="Enter your father's name" id="exampleInputPassword1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Mother's Name: <span>*<span></label>
            <input type="text" class="form-control" name="mname" placeholder="Enter your mother's name" id="exampleInputPassword1" required>
          </div>

          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Father's Occupation: <span>*<span></label>
            <input type="text" class="form-control" name="foccu" placeholder="Enter your father's occupation" id="exampleInputName1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Mother's Occupation: <span>*<span></label>
            <input type="text" class="form-control" name="moccu" placeholder="Enter your mother's occupation:" id="exampleInputPassword1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Date Of Birth (DOB): <span>*<span></label>
            <input type="date" class="form-control" name="dob" id="exampleInputPassword1" required>
          </div>

          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Gender: <span>*<span></label>
            <select class="form-select" name="gender" aria-label="Default select example" required>
          <option selected disabled>Select your gender</option>
          <option value="1">Male</option>
          <option value="2">Female</option>
          <option value="3">Others</option>
        </select>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Religion: <span>*<span></label>
            <select class="form-select" name="religion" aria-label="Default select example" required>
          <option selected disabled>Select your religion</option>
          <option value="1">Hindu</option>
          <option value="2">Muslim</option>
          <option value="3">Sikh</option>
          <option value="4">Christian</option>
          <option value="5">Others</option>
        </select>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Category: <span>*<span></label>
            <select class="form-select" name="category" aria-label="Default select example" required>
          <option selected disabled>Select your category</option>
          <option value="1">General</option>
          <option value="2">OBC / EBC</option>
          <option value="3">SC / ST</option>
        </select>
          </div> 

          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Mobile Number: <span>*<span></label>
            <input type="tel" class="form-control" name="mobnum" placeholder="e.g. 123 456 7890" id="exampleInputName1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Alternative Number: <span>*<span></label>
            <input type="tel" class="form-control" name="altnum" placeholder="e.g. 123 456 7890" id="exampleInputPassword1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Email Id: <span>*<span></label>
            <input type="email" class="form-control" name="email" placeholder="e.g. sample@gmail.com" id="exampleInputPassword1" required>
          </div> 

          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Aadhar Number: <span>*<span></label>
            <input type="text" class="form-control" name="aadhar" placeholder="e.g. 1111 2222 3333" id="exampleInputName1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Document: <span>*<span></label>
              <input type="file" class="form-control" name="document" aria-label="file example" required>
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
        
        
          <h4 class="text-center mt-2">Admission Details</h4><hr>
        
        
          <div class="row">
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputEmail1" class="form-label">Class: <span>*<span></label>
            <input type="text" class="form-control" name="class" placeholder="Enter your class" id="exampleInputName1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Section: <span>*<span></label>
            <input type="text" class="form-control" name="section" placeholder="Enter your section" id="exampleInputPassword1" required>
          </div>
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <label for="exampleInputPassword1" class="form-label">Roll Number: <span>*<span></label>
            <input type="text" class="form-control" name="roll" placeholder="Enter your roll number" id="exampleInputPassword1" required>
          </div></div>
        
        
          <div class="col-md-3 m-md-5 mt-md-0 mb-md-3 col-sm-12">
            <span>* Marked fields are compulsory</span></div>
        
        <!--Button-->
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
