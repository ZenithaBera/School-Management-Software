<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include 'include/link.php'; ?>

    <title>About Us | School Management Software</title>
  </head>
  <body>
    <div class="container-fluid p-0 m-0 bg-dark text-light about us">
      <div class="row navhead m-0">
        <div class="col-md-12 col-sm-12 p-4 text-center bg-dark nav1">
          <a href="index.php" class="p-4">Home</a>
          <a
            href="about-us.php"
            aria-current="page"
            class="p-4 active bg-warning text-dark"
            >About Us</a
          >
          <a href="photo-gallery.php" class="p-4">Photo Gallery</a>
          <a href="std-admission.php" class="p-4">Admission</a>
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
                  <a
                    class="nav-link active bg-warning text-dark"
                    aria-current="page"
                    href="about-us.php"
                    >About Us</a
                  >
                  <a class="nav-link" href="photo-gallery.php">Photo Gallery</a>
                  <a class="nav-link" href="std-admission.php">Admission</a>
                  <a class="nav-link" href="academics.php">Academics</a>
                  <a class="nav-link" href="infrastructure.php">Infrastructure</a>
                  <a class="nav-link" href="contact.php">Contact</a>
                </nav>
              </div>
            </nav>
          </div>
        </div>
      </div>
    
      <div class="container bg-dark text-light">
        <div class="row">
          <h3 class="about us text-center p-4">About Us</h3>
          <hr class="bg-warning"/>
          <div class="col-md-6 col-sm-12 imgclass"></div>
          <div class="col-md-6 col-sm-12 classpic">
            <img src="images/about/about.jpg" class="img-thumbnail w-100" alt="img1" />
          </div>
          <div class="col-md-6 col-sm-12 para">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repudiandae, earum repellat? Odio, quis praesentium. Ex sunt
              reiciendis neque labore aliquid illum, dolorem quasi, dicta eaque
              officia praesentium, nisi natus! Blanditiis.
            </p>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque,
              molestiae ad sapiente, quasi corporis, esse doloribus quam
              recusandae ab distinctio amet suscipit commodi repellat fugit
              excepturi? Autem architecto quisquam assumenda?
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi
              omnis optio explicabo eveniet hic neque. Accusamus obcaecati quod
              ab doloremque facere dignissimos, a aperiam aliquam laudantium non
              debitis enim ratione.
            </p>
          </div>
        </div>
      </div>

      <!--Achievements-->
      <div class="container bg-dark text-light">
        <div class="row">
          <h3 class="achieve text-center p-4">Achievements</h3>
          <hr class="bg-warning"/>
          <div class="col-md-6 col-sm-12 imgbus"></div>
          <div class="col-md-6 col-sm-12 buspic">
            <img src="images/about/bus.jpg" class="img-thumbnail w-100" alt="img2" />
          </div>
          
          <div class="col-md-6 col-sm-12 para">
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum,
              voluptatum consequuntur ratione exercitationem culpa nobis
              sapiente. Fugit sapiente perspiciatis nam amet excepturi! Corrupti
              non nostrum quibusdam minima veniam. Vero, dignissimos?
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Asperiores et officia dolorem rem voluptatibus praesentium fugiat
              at, ab cumque explicabo quas eum dolores suscipit tempore maxime
              veniam minus voluptatem magni.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Perspiciatis illo repudiandae reprehenderit. Ex iusto, vel illo
              quisquam, itaque alias minima ipsum quibusdam facilis ratione
              dignissimos quia. Deserunt blanditiis quasi officiis.
            </p>
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
