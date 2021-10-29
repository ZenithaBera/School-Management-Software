<?php
	include '../php/db_teacher.php';
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
    <title>Teacher Delete</title>
  </head>
  <body class="bg-dark">
    <div class="container-fluid bg-dark text-light overflow-hidden">
    
        <!--Sidepanel-->
      <div class="row">
        <div class="col-md-2 col-sm-12 sidepanel m-0 p-0 border border-warning">
            <nav style="height: 100vh;">
              <h3 class="text-center text-light fw-bold">Teacher Dashboard</h3>
              <a href="" class="text-decoration-none fw-bold"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a>
                <a class="text-decoration-none fw-bold" href=""><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;Registration</a>
                <a href="" class="text-decoration-none fw-bold"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Profile</a>
                <a href="" class="text-decoration-none fw-bold"><i class="fas fa-user-edit"></i>&nbsp;&nbsp;&nbsp;Update</a>
                <a href="" class="active text-decoration-none bg-warning text-dark fw-bold"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;&nbsp;Delete</a>
            </nav>
        </div>

        <div class="col-md-10 col-sm-12">
          <div class="p-4 topbar">
            <p class="h3 fw-bold">Delete</p>
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
              <h3 class="navbar-brand justify-content-start fw-bold">Delete</h3>
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
                    <a class="nav-link fw-bold" href="">Registration</a>
                    <a class="nav-link fw-bold" href="">Profile</a>
                    <a class="nav-link fw-bold" href="">Update</a>
                    <a
                      class="nav-link active bg-warning text-dark fw-bold"
                      aria-current="page"
                      href="#"
                      >Delete</a
                    >
                  </nav>
                </div>
              </nav>
            </div>
          </div>

          <!--Table-->
          <div class="col-md-12 m-2 p-2 col-sm-12 table-responsive">
            <table class="table table-dark table-hover">
            <thead>
            <th>Sl. No.</th>
            <th>Name</th>
                            <th>Father's Name</th>
                            <th>Date of Birth (DOB)</th>
                            <th>Phone Number</th>
                            <th>Email Id</th>
                            <th>Class</th>
                            <th>Roll No.</th>
                            <th>Action</th>
          </thead>
          <tbody>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
        
              <td>
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <form>
                      <input type="hidden" name="" value="">
                        <button class="fa fa-eye btn-sm btn-warning" name="profile"></button>
                      </form>
                  </div>	
                  <div class="col-md-6 col-sm-12">
                    <form action="" method="POST">
                      <input type="hidden" name="" value="">
                        <button class="fa fa-trash btn-sm btn-secondary" name="delete"></button>
                      </form>
                  </div>	
                </div>
                </td>
          </tr>
        
          </tbody>
          
            </table>
          </div>
      
        </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
