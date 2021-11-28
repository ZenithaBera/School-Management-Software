<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include 'include/link.php'; ?>

    <title>Academics | School Management Software</title>
  </head>
  <body>
    <div class="container-fluid p-0 m-0 bg-dark text-light overflow-hidden">

      
      <!--Navbar-->
      <div class="row common">
        <div class="col-md-12 col-sm-12 p-4 text-center bg-dark nav1">
          <a href="index.php" class="p-4">Home</a>
          <a href="about-us.php" class="p-4">About Us</a>
          <a href="photo-gallery.php" class="p-4">Photo Gallery</a>
          <a href="std-admission.php" class="p-4">Admission</a>
          <a
            href="academics.php"
            aria-current="page"
            class="p-4 active bg-warning text-dark"
            >Academics</a
          >
          <a href="infrastructure.php" class="p-4">Infrastructure</a>
          <a href="contact.php" class="p-4">Contact</a>
        </div>
        <div class="col-md-12 col-sm-12 nav2">
          <div class="dropdown">
            <nav
              class="
                navbar navbar-expand-lg navbar-dark
                bg-dark
                justify-content-end
              "
              aria-label=""
            >
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
                  <a class="nav-link" href="index.php">Home</a>
                  <a class="nav-link" href="about-us.php">About Us</a>
                  <a class="nav-link" href="photo-gallery.php">Photo Gallery</a>
                  <a class="nav-link" href="std-admission.php">Admission</a>
                  <a
                    class="nav-link active bg-warning text-dark"
                    aria-current="page"
                    href="academics.php"
                    >Academics</a
                  >
                  <a class="nav-link" href="infrastructure.php">Infrastructure</a>
                  <a class="nav-link" href="contact.php">Contact</a>
                </nav>
              </div>
            </nav>
          </div>
        </div>
      </div>


<!--Class Schedule-->
<div class="container mt-3">
    <h3 class="text-center p-4">Class Schedule</h3>
<div class="table-responsive">
<table class="table bg-warning table-hover">
    <thead>
        <tr>
          <th scope="col">Class</th>
          <th scope="col">Alternative Subjects</th>
          <th scope="col">Compulsory Subjects</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Nursery</th>
          <td>Bengali/Hindi</td>
          <td>Maths,English</td>
         
        </tr>
        <tr>
          <th scope="row">Primary</th>
          <td>Science/Commerce</td>
          <td>Maths,English</td>
          
        </tr>
        <tr>
            <th scope="row">Secondary</th>
            <td>Science/Commerce</td>
          <td>Maths,English</td>
            
        </tr>
        <tr>
            <th scope="row">Senior Secondary</th>
            <td>Science/Commerce</td>
          <td>Maths,English</td>
           
        </tr> 
      </tbody>
  </table>
</div>
</div>



<!--School Timings-->
<div class="container mt-3">
    <h3 class="text-center p-4">School Timings</h3>
<div class="table-responsive">
<table class="table bg-warning table-hover">
    <thead>
        <tr>
          <th scope="col">Class</th>
          <th scope="col">Morning</th>
          <th scope="col">Afternoon</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Nursery</th>
          <td>9 a.m. – 11:15 a.m</td>
          <td>12:30 p.m. – 2:45 p.m.</td>
         
        </tr>
        <tr>
          <th scope="row">Primary</th>
          <td>9 a.m. – 11:15 a.m</td>
          <td>12:30 p.m. – 2:45 p.m.</td>
          
        </tr>
        <tr>
            <th scope="row">Secondary</th>
            <td>7 a.m. – 11:15 a.m</td>
            <td>12:15 p.m. – 4:30 p.m.</td>
            
        </tr>
        <tr>
            <th scope="row">Senior Secondary</th>
            <td>7 a.m. – 11:30 a.m</td>
            <td>12:15 p.m. – 4:45 p.m.</td>
           
        </tr> 
      </tbody>
  </table>
</div>
</div>
 

<!--Fee Structure-->
<div class="container">
    <h3 class="text-center p-4">Fee Structure</h3>
<div class="table-responsive">
<table class="table bg-warning table-hover">
    <thead>
        <tr>
          <th scope="col">Class</th>
          <th scope="col">Tuition Fee Per Month</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Nursery</th>
          <td>र 4,500</td>
        </tr>
        <tr>
          <th scope="row">Primary</th>
          <td>र 4,500</td>          
        </tr>
        <tr>
            <th scope="row">Secondary</th>
            <td>र 5,500</td>
        </tr>
        <tr>
            <th scope="row">Senior Secondary</th>
            <td>र 6,500</td>           
        </tr> 
      </tbody>
  </table>
</div>
</div>



      <!--Footer-->
      <?php include 'include/footer.html'; ?>

      
    </div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://www.jose-aguilar.com/scripts/jquery/progress-bar/js/progress.js" type="text/javascript" charset="utf-8"></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"
      ></script>
    </body>
  </html>