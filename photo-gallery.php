<!DOCTYPE html>
<html lang="en">
  <head>

    <?php include 'include/link.php'; ?>

    <title>PHoto Gallery | School Management Software</title>
  </head>
  <body>
    <div class="container-fluid p-0 m-0 bg-dark text-light overflow-hidden">

      
      <!--Navbar-->
      <div class="row common">
        <div class="col-md-12 col-sm-12 p-4 text-center bg-dark nav1">
          <a href="index.php" class="p-4">Home</a>
          <a href="about-us.php" class="p-4">About Us</a>
          <a
            href="photo-gallery.php"
            aria-current="page"
            class="p-4 active bg-warning text-dark"
            >Photo Gallery</a
          >
          <a href="dashboard/student-dashboard.php" class="p-4">Admission</a>
          <a href="academics.php" class="p-4">Academics</a>
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
                  <a
                    class="nav-link active bg-warning text-dark"
                    aria-current="page"
                    href="photo-gallery.php"
                    >Photo Gallery</a
                  >
                  <a class="nav-link" href="dashboard/student-dashboard.php">Admission</a>
                  <a class="nav-link" href="academics.php">Academics</a>
                  <a class="nav-link" href="infrastructure.php">Infrastructure</a>
                  <a class="nav-link" href="contact.php">Contact</a>
                </nav>
              </div>
            </nav>
          </div>
        </div>
      </div>


<!--Gallery-->
<div class="container">
<h3 class="text-center p-4">Summer Camp 2021</h3>
<div class="row row-cols-1 row-cols-md-3 g-4">

    <div class="col-md-3 col-sm-12">
      <div class="card h-100 border border-warning">
        <img src="images/photo-gallery/camp1.jpg" class="card-img-top h-100" alt="...">
        <div class="card-body bg-dark">
          <h5 class="card-title text-warning text-center">Nursery</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12">
      <div class="card h-100 border border-warning">
        <img src="images/photo-gallery/camp2.jpg" class="card-img-top h-100" alt="...">
        <div class="card-body bg-dark">
          <h5 class="card-title text-warning text-center">Class I</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12">
      <div class="card h-100 border border-warning">
        <img src="images/photo-gallery/camp3.jpg" class="card-img-top h-100" alt="...">
        <div class="card-body bg-dark">
          <h5 class="card-title text-warning text-center">Class II</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12">
        <div class="card h-100 border border-warning">
          <img src="images/photo-gallery/camp4.jpg" class="card-img-top h-100" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning text-center">Class III</h5>
          </div>
        </div>
      </div>
  </div>


  <h3 class="text-center pt-5 p-4">Annual Function 2021</h3>
<div class="row row-cols-1 row-cols-md-3 g-4">
    
    <div class="col-md-3 col-sm-12">
        <div class="card h-100 border border-warning">
          <img src="images/photo-gallery/function1.jpg" class="card-img-top h-100" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning text-center">Elementary</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12">
        <div class="card h-100 border border-warning">
          <img src="images/photo-gallery/function2.jpg" class="card-img-top h-100" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning text-center">Primary</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12">
        <div class="card h-100 border border-warning">
          <img src="images/photo-gallery/function3.jpg" class="card-img-top h-100" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning text-center">Secondary</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12">
          <div class="card h-100 border border-warning">
            <img src="images/photo-gallery/function4.jpg" class="card-img-top h-100" alt="...">
            <div class="card-body bg-dark">
              <h5 class="card-title text-warning text-center">Senior Secondary</h5>
            </div>
          </div>
        </div>
  </div>

  <h3 class="text-center pt-5 p-4">Cricket Tournament 2021</h3>
<div class="row row-cols-1 row-cols-md-3 g-4">
    
    <div class="col-md-3 col-sm-12">
        <div class="card h-100 border border-warning">
          <img src="images/photo-gallery/cricket1.jpg" class="card-img-top h-100" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning text-center">Elementary</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12">
        <div class="card h-100 border border-warning">
          <img src="images/photo-gallery/cricket2.png" class="card-img-top h-100" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning text-center">Primary</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12">
        <div class="card h-100 border border-warning">
          <img src="images/photo-gallery/cricket3.jpg" class="card-img-top h-100" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning text-center">Secondary</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12">
          <div class="card h-100 border border-warning">
            <img src="images/photo-gallery/cricket4.jpg" class="card-img-top h-100" alt="...">
            <div class="card-body bg-dark">
              <h5 class="card-title text-warning text-center">Senior Secondary</h5>
            </div>
          </div>
        </div>
  </div>


  <h3 class="text-center pt-5 p-4">Christmas Carnival 2021</h3>
  <div class="row row-cols-1 row-cols-md-3 g-4">
      
    <div class="col-md-3 col-sm-12">
        <div class="card h-100 border border-warning">
          <img src="images/photo-gallery/christmas1.jpg" class="card-img-top h-100" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning text-center">Canteen</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12">
        <div class="card h-100 border border-warning">
          <img src="images/photo-gallery/christmas2.jpg" class="card-img-top h-100" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning text-center">Members</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12">
        <div class="card h-100 border border-warning">
          <img src="images/photo-gallery/christmas3.jpg" class="card-img-top h-100" alt="...">
          <div class="card-body bg-dark">
            <h5 class="card-title text-warning text-center">Primary</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12">
          <div class="card h-100 border border-warning">
            <img src="images/photo-gallery/christmas4.jpg" class="card-img-top h-100" alt="...">
            <div class="card-body bg-dark">
              <h5 class="card-title text-warning text-center">Secondary</h5>
            </div>
          </div>
        </div>
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