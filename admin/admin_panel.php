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
    <title>Admin | School Management Software</title>
</head>
<body class="bg-dark">
    <div class="container-fluid p-5 pb-0 m-0 bg-dark pt-0 text-light text-center" style="font-family: 'Times New Roman', Times, serif;">
      <h3 class="pt-4 pb-3">Admin Panel</h3>
      <hr class="bg-warning" style="border-bottom: 5px solid #ffc107;"/>
      
      <div class="container d-flex justify-content-start">
        <div class="row">
          <div class="card border-warning mb-3 bg-dark text-center" style="max-width: auto;">
            <div class="pt-1 text-center bg-dark"></div>
            <div class="p-l card-body bg-dark">
              <h5 class="p-1 card-title">Student Records</h5><hr class="bg-warning">
              <p class="p-1 card-text">Click on continue to view records and manipulate data.</p>
              <a href="student-admin.php" type="submit" class="btn btn-warning">Continue</a>
              <!-- Button trigger modal --><!--
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Login
</button>-->

<!-- Modal --><!--
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
        <button type="button" class="btn-close btn-secondary" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="login_student.php" method="POST">
      <div class="mb-3">
            <label for="id" class="col-form-label">Admin Id:</label>
            <input type="number" class="form-control bg-secondary text-light opacity-75" name="id">
          </div>
          <div class="mb-3">
            <label for="username" class="col-form-label">Username:</label>
            <input type="text" class="form-control bg-secondary text-light opacity-75" name="username">
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label">Password:</label>
            <input type="text" class="form-control bg-secondary text-light opacity-75" name="password">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning" name="login">Login</button></form>
      </div>
    </div>
  </div>
</div>-->
            </div>
          </div>
        </div>
        </div>
        
        <div class="container d-flex justify-content-center">
          <div class="row">
            <div class="card border-warning mb-3 bg-dark text-center" style="max-width: auto;">
              <div class="pt-1 text-center bg-dark"></div>
              <div class="p-l card-body bg-dark">
                <h5 class="p-1 card-title">Teacher Records</h5><hr class="bg-warning">
                <p class="p-1 card-text">Click on continue to view records and manipulate data.</p>
                <a href="teacher-admin.php" type="submit" class="btn btn-warning">Continue</a>
                <!-- Button trigger modal --><!--
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Login
</button>-->

<!-- Modal --><!--
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
        <button type="button" class="btn-close btn-secondary" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="login_student.php" method="POST">
      <div class="mb-3">
            <label for="id" class="col-form-label">Admin Id:</label>
            <input type="number" class="form-control bg-secondary text-light opacity-75" name="id">
          </div>
          <div class="mb-3">
            <label for="username" class="col-form-label">Username:</label>
            <input type="text" class="form-control bg-secondary text-light opacity-75" name="username">
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label">Password:</label>
            <input type="text" class="form-control bg-secondary text-light opacity-75" name="password">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning" name="login">Login</button></form>
      </div>
    </div>
  </div>
</div>-->
              </div>
            </div>
          </div>
          </div>
          
          <div class="container d-flex justify-content-end">
            <div class="row">
              <div class="card border-warning mb-3 bg-dark text-center" style="max-width: auto;">
                <div class="pt-1 text-center bg-dark"></div>
                <div class="p-l card-body bg-dark">
                  <h5 class="p-1 card-title">Staff Records</h5><hr class="bg-warning">
                  <p class="p-1 card-text">Click on continue to view records and manipulate data.</p>
                  <a href="staff-admin.php" type="submit" class="btn btn-warning">Continue</a>

<!-- Button trigger modal --><!--
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Login
</button>-->

<!-- Modal --><!--
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
        <button type="button" class="btn-close btn-secondary" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="login_student.php" method="POST">
      <div class="mb-3">
            <label for="id" class="col-form-label">Admin Id:</label>
            <input type="number" class="form-control bg-secondary text-light opacity-75" name="id">
          </div>
          <div class="mb-3">
            <label for="username" class="col-form-label">Username:</label>
            <input type="text" class="form-control bg-secondary text-light opacity-75" name="username">
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label">Password:</label>
            <input type="text" class="form-control bg-secondary text-light opacity-75" name="password">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning" name="login">Login</button></form>
      </div>
    </div>
  </div>
</div>   -->             </div>
              </div>
            </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>