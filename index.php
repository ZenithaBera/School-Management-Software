
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include 'include/link.php'; ?>
    
    <title>School Management Software</title>
  </head>
  <body>
    <div class="container-fluid p-0 m-0 bg-dark text-light overflow-hidden">

      <!--Header-->
      <?php include 'include/header.html'; ?>

      
      <!--Navbar-->
      <div class="row">
        <div class="col-md-12 col-sm-12 p-4 text-center bg-dark nav1">
          <a
            href="index.php"
            aria-current="page"
            class="p-4 active bg-warning text-dark"
            >Home</a
          >
          <a href="about-us.php" class="p-4">About Us</a>
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
                  <a
                    class="nav-link active bg-warning text-dark"
                    aria-current="page"
                    href="index.php"
                    >Home</a
                  >
                  <a class="nav-link" href="about-us.php">About Us</a>
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

      <!--Carousal-->
      <div
        id="carouselExampleCaptions"
        class="carousel slide carousel-fade col-md-12 col-sm-12"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="https://www.detroitlabs.com/wp-content/uploads/2018/02/alfons-morales-YLSwjSy7stw-unsplash.jpg"
              class="d-block w-100 img-fluid"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h3>
                Education is not a learning of facts, but the training of the
                mind to think.
              </h3>
              <p class="h4 text-end">— Albert Einstein</p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="https://www.rd.com/wp-content/uploads/2019/11/shutterstock_509582812-e1574100998595-scaled.jpg?resize=700,466"
              class="d-block w-100"
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h3>
                The higher education is that which does not merely give us
                information but makes our life in harmony with all existence.
              </h3>
              <p class="h4 text-end">— Rabindranath Tagore</p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="https://wallpapercave.com/wp/wp6293134.jpg"
              class="d-block w-100" 
              alt="..."
            />
            <div class="carousel-caption d-none d-md-block">
              <h3>
                Education is the most powerful weapon which you can use to
                chnage the world.
              </h3>
              <p class="h4 text-end">— Nelson Mandela</p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div><br>


      <!--Cards-->
      <div class="container">
        <div class="text-center row align-items-center">
          <div class="col-md-4 col-sm-12">
            <div class="card border-warning mb-3" style="max-width: auto;">
              <div class="pt-4 text-center bg-dark"><em class="h1 text-warning fas fa-globe-americas"></em></div>
              <div class="card-body bg-dark">
                <h5 class="card-title">Class Schedule</h5>
                <p class="card-text">Check the class schedule properly before classes.</p>
                <a href="academics.php" class="btn btn-warning" type="button">View More..</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="card border-warning mb-3" style="max-width: auto;">
              <div class="pt-4 text-center bg-dark"><em class="h1 text-warning fas fa-book-reader"></em></div>
              <div class="card-body bg-dark">
                <h5 class="card-title">Virtual Library</h5>
                <p class="card-text">Login using your credentials from your library card.</p>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Login</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLabel">Library Login</h5>
        <button type="button" class="btn-close btn btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="php/librarylogin.php" method="POST">
          <div class="mb-3">
            <label for="" class="col-form-label">Email:</label>
            <input type="email" class="form-control bg-secondary text-light opacity-75" name="email" id="">
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">Mobile Number:</label>
            <input type="number" class="form-control bg-secondary text-light opacity-75" name="mubnum" id="">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning" name="login">Login</a></form>
      </div>
    </div>
  </div>
</div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="card border-warning mb-3" style="max-width: auto;">
              <div class="pt-4 text-center bg-dark"><em class="h1 text-warning fas fa-people-carry"></em></div>
              <div class="card-body bg-dark">
                <h5 class="card-title">Community</h5>
                <p class="card-text">Join our community to collab with our members.</p>
                <a href="contact.php" class="btn btn-warning" type="button">View More..</a>
              </div>
            </div>
          </div>
        </div>
        </div>


      <!--Introduction-->
      <div class="container" id="">
        <div class="row">
          <h3 class="text-center p-4">Welcome To Our School</h3>
          <hr class="bg-warning"/>
          <div class="col-md-6 col-sm-12 intro1">
            
          </div>
          <div class="col-md-6 col-sm-12 intro2">
            <img
              src="images/index/index1.jpg"
              class="img-thumbnail w-100 border border-warning"
              alt="img1"
            />
          </div>
          <div class="col-md-6 col-sm-12 para">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repudiandae, earum repellat? Odio, quis praesentium. Ex sunt
              reiciendis neque labore aliquid illum, dolorem quasi, dicta eaque
              officia praesentium, nisi natus! Blanditiis.
            </p>
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
              excepturi? Autem architecto quisquam assumenda? Lorem ipsum dolor sit amet,
               consectetur adipisicing elit. Tenetur alias vero impedit unde corrupti, 
               aspernatur quaerat, sunt totam, possimus maxime architecto? Possimus mollitia sequi, 
               voluptate omnis accusantium aperiam quia autem.
              </p>
              <a href="about-us.php" type="submit" class="btn btn-warning mt-1"
                >Read More..</a>
              
          </div>
        </div>
      </div>


      <!--Notice Board-->
      <div class="container bg-dark">
        <div class="row">
          <h3 class="text-center p-4">Notice Board</h3>
          <div class="col-md-6 col-sm-12 bg-dark">
            <div class="list-group border border-warning">
              <a href="#" class="list-group-item list-group-item-action bg-dark text-light notice">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Notice 1</h5>
                  <small class="text-muted">Now</small>
                </div>
                <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id facere quae dolorem. Sed soluta repellat nemo. Voluptatem vitae praesentium ut quas accusantium porro, eum accusamus quod sint sunt officia quo!</p>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action bg-dark text-light">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Notice 2</h5>
                  <small class="text-muted">2 seconds ago</small>
                </div>
                <p class="mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro, dolor numquam incidunt neque obcaecati, aliquam doloremque asperiores itaque molestiae nobis eum atque, officiis voluptates deleniti nemo cum enim veniam facere?</p>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action bg-dark text-light">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Notice 3</h5>
                  <small class="text-muted">15 hours ago</small>
                </div>
                <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsam repudiandae distinctio itaque beatae impedit et molestiae natus soluta consequuntur. Unde rerum molestiae illum, aliquam sunt eligendi! Dicta ipsam laboriosam, pariatur ipsum?</p>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
              </a>
            </div>
          </div><br>
          <div class="col-md-6 col-sm-12">
            <div class="list-group  border border-warning">
              <a href="#" class="list-group-item list-group-item-action bg-dark text-light">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Notice 4</h5>
                  <small class="text-muted">1 day ago</small>
                </div>
                <p class="mb-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius ipsam repudiandae distinctio aperiam fuga exercitationem sint explicabo blanditiis, optio at assumenda rerum, quis libero? Dolores atque error doloremque libero delectus?</p>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action bg-dark text-light">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Notice 5</h5>
                  <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam itaque aspernatur cupiditate reiciendis quam facilis deserunt aliquid fugiat repellat et. Eligendi autem esse nostrum quas et vero iusto, ullam porro?</p>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action bg-dark text-light">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">Notice 6</h5>
                  <small class="text-muted">4 days ago</small>
                </div>
                <p class="mb-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi provident fugiat quasi deserunt asperiores vel distinctio corrupti quaerat, ab recusandae facilis, sapiente voluptates illo, minima accusamus? Dolor laudantium non expedita.</p>
                <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small>
              </a>
            </div>
          </div><br>
        </div>
      </div>
    

<!--Results-->
<div class="container">
  <div class="row">
    <h3 class="text-center p-4">Results 2021</h3><hr class="bg-warning">
    <div class="col-md-6 col-sm-12 mt-3"><h4 class="text-center p-2">ISC</h4>
      <h5 class="">John Doe</h5>
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning text-dark" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 95%"><b>95%</b></div>
      </div><br>
      <h5 class="">Jane Doe</h5>
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning text-dark" role="progressbar" aria-valuenow="95.5" aria-valuemin="0" aria-valuemax="100" style="width: 91%"><b>91%</b></div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 mt-3"><h4 class="text-center p-2">ICSE</h4>
      <h5 class="">John Doe</h5>
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning text-dark" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98.8%"><b>98.8%</b></div>
      </div><br>
      <h5 class="">Jane Doe</h5>
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning text-dark" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="width: 96%"><b>96%</b></div>
      </div>
    </div>
  </div>
</div><br>
  

<!--Memorandum-->
<div class="container">
  <div class="row align-items-center">
    <h3 class="text-center p-4">Memorandum</h3>
    <div class="col-md-4 col-sm-12">
      <div class="card border-warning mb-3" style="max-width: auto;">
        <div class="p-4 text-center bg-warning text-dark"><h4>Rules</h4></div>
        <div class="card-body bg-dark">
          <ul>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="card border-warning mb-3" style="max-width: auto;">
        <div class="p-4 text-center bg-warning text-dark"><h4>Discipline</h4></div>
        <div class="card-body bg-dark">
          <ul>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="card border-warning mb-3" style="max-width: auto;">
        <div class="p-4 text-center bg-warning text-dark"><h4>School Hours</h4></div>
        <div class="card-body bg-dark">
          <ul>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eum ullam pariatur totam id omnis ipsam! Asperiores accusamus, ut rerum magni iure praesentium recusandae earum necessitatibus libero nemo vel quia.</li>
          </ul>
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
