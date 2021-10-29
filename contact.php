<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include 'include/link.html'; ?>

    <title>Contact | School Management Software</title>
  </head>
  <body>
    <div class="container-fluid p-0 m-0 bg-dark text-light contact-us overflow-hidden">
      <div class="row navhead m-0">
        <div class="col-md-12 col-sm-12 p-4 text-center bg-dark nav1">
          <a href="index.php" class="p-4">Home</a>
          <a href="about-us.php" class="p-4">About Us</a>
          <a href="photo-gallery.php" class="p-4">Photo Gallery</a>
          <a href="dashboard/student-dashboard.html" class="p-4">Admission</a>
          <a href="academics.php" class="p-4">Academics</a>
          <a href="infrastucture.php" class="p-4">Infrastructure</a>
          <a
            href="contact.php"
            aria-current="page"
            class="p-4 active bg-warning text-dark"
            >Contact</a
          >
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
                  <a class="nav-link" href="dashboard/student-dashboard.html">Admission</a>
                  <a class="nav-link" href="academics.php">Academics</a>
                  <a class="nav-link" href="infrastructure.php">Infrastructure</a>
                  <a
                    class="nav-link active bg-warning text-dark"
                    aria-current="page"
                    href="contact.php"
                  >Contact</a>
                </nav>
              </div>
            </nav>
          </div>
        </div>
      </div>

      <!--Body-->
      <div class="container bg-dark text-light">
        <div class="row">
          <div class="col-md-12 col-sm-12 contactdetails">
            <h3 class="contactus text-center">Contact Us</h3>
            <hr class="bg-warning"/>
            </div>
          <div class="col-md-6 col-sm-12 adressdetails">
            <p class="h4 text-warning"><strong>First Regional Office</strong></p><hr class="bg-warning" />
            <h4>Regd. Office :</h4>
            <p>Birla Building, 9/1 R. N. Mukherjee Road, Kolkata – 700001</p>
            <h4>Branch Office :</h4>
            <p>16 Mandeville Gardens, Kolkata – 700019</p>
            <h4>Important Email</h4>
            <ul>
              <li>
                <strong>
                  <a href="mailto:abcd@gmail.com"> abcd@gmail.com</a></strong
                >
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-sm-12 adressdetails">
            <p class="h4 text-warning" ><strong>Second Regional Office</strong></p><hr class="bg-warning" />
            <h4>Regd. Office :</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              JNOIJ-786876
            </p>
            <h4>Branch Office :</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              JFSFD-786876
            </p>
            <h4>Important Email</h4>
            <ul>
              <li>
                <strong>
                  <a href="mailto:abcd@gmail.com"> sdfyg@gmail.com</a></strong
                >
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-sm-12 community">
            <h4>Community Link</h4>

            <strong
              ><a href=""
                >Lorem ipsum dolor sit amet consectetur adipisicing elit.</a
              ></strong
            >
          </div>
          
          <p class="mt-5 h5 text-warning">
            **Please get in touch with us if you have any comment or question
            about our School or any of the other services that our school
            provides.**
          </p>

          <div class="col-md-12 col-sm-12 map">
            <h3>Location</h3>
            <hr class="bg-warning" />
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.2783499034595!2d88.42941561443395!3d22.568690438802903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275d225555559%3A0x50bfb8cf3005f8d1!2sArdent%20Computech%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1632855129744!5m2!1sen!2sin"
              width="100%"
              height="auto"
              style="border: 2px solid #ffff"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>


      <!--Footer-->
      <?php include 'include/footer.html'; ?>

      
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"
  ></script>
</html>
