<!DOCTYPE html>
<html lang="en">
  <head>

    <?php include 'includeFiles/top_links.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Teacher Dashboard | School Management Software</title>
  </head>
  <body>
    <div class="container-fluid p-0 m-0 bg-dark text-light overflow-hidden">
    <div class="row">
      <div class="col-md-2 col-sm-12 sidepanel m-0 p-0 border border-warning">
        <nav>
          <h3 class="text-center text-light fw-bold">Teacher Dashboard</h3>
          <a
            href="teacher-dashboard.php"
            class="active text-decoration-none bg-warning text-dark fw-bold"
            ><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a
          >
          <a class="text-decoration-none fw-bold" href="../admission/teacher-register.php"
            ><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;Registration</a
          >
          <a href="../dashboard-login/teacher-login.php" class="text-decoration-none fw-bold"
            ><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Profile Details</a
          >
           <a href="../admission/teacher-delete.php" class="text-decoration-none fw-bold"
            ><i class="fas fa-user-shield"></i>&nbsp;&nbsp;&nbsp;For Admin Only</a
          >
        </nav>
      </div>

      <div class="col-md-10 col-sm-12">
        <div class="p-4 topbar text-light">
          <div class="col">
          <p class="h3 fw-bold float-start">Dashboard</p></div>
          <div class="col mb-5">
            <button type="button" class="btn-sm btn-warning float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
          </div>
        </div>
        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLabel">Login Form</h5>
        <button type="button" class="btn-close btn btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../dashboard-login/teacher-login.php" method="POST">
          <div class="mb-3">
            <label for="" class="col-form-label">Email:</label>
            <input type="email" class="form-control bg-secondary text-light opacity-75" name="email" id="">
          </div>
          <div class="mb-3">
            <label for="" class="col-form-label">Teacher Id:</label>
            <input type="number" class="form-control bg-secondary text-light opacity-75" name="id" id="">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning" name="login">Login</a></form>
      </div>
    </div>
    </div>
    </div>

        <div class="col-md-12 col-sm-12 nav2">
          <div class="dropdown">
            <nav
              class="navbar navbar-expand-lg navbar-dark bg-dark"
              aria-label=""
            >
              <h3 class="navbar-brand justify-content-start fw-bold">
                Registration
              </h3>
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
                    class="nav-link active bg-warning text-dark fw-bold"
                    aria-current="page"
                    href="teacher-dashboard.php"
                    >Home</a
                  >
                  <a
                    class="nav-link fw-bold"
                    href="../admission/teacher-register.php"
                    >Registration</a
                  >
                  <a class="nav-link fw-bold" href="../dashboard-login/teacher-login.php">Profile Details</a>
                   <a 
                    class="nav-link fw-bold"
                    href="../admission/teacher-delete.php"
                  >For Admin Only</a>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link btn-btn-warning fw-bold">Login</a>
                </nav>
              </div>
            </nav>
          </div>
        </div>


        <!--Cards-->
        <div class="row m-2 mt-4 d-flex justify-content-center">
          <div class="card bg-dark mb-3 mx-2 border border-warning text-center" style="max-width: 18rem;">
              <div class="card-header mt-3 text-warning "><i class="fas fa-chalkboard-teacher h1"></i></div>
              <div class="card-body">
                <h5 class="card-title h3">Classes</h5>
                <p class="card-text h4">10 per week</p>
              </div>
            </div>


            <div class="card bg-dark mb-3 mx-2 border border-warning text-center" style="max-width: 18rem;">
              <div class="card-header mt-3 text-warning "><i class="fas fa-book-reader h1"></i></div>
              <div class="card-body">
                <h5 class="card-title h3">Course</h5>
                <p class="card-text h4">1 per month</p>
              </div>
            </div>

            <div class="card bg-dark mb-3 mx-2 border border-warning text-center" style="max-width: 18rem;">
              <div class="card-header mt-3 text-warning "><i class="fas fa-handshake h1"></i></div>
              <div class="card-body">
                <h5 class="card-title h3">Meeting</h5>
                <p class="card-text h4">1 Compulsory</p>
              </div>
            </div>

            <div class="card bg-dark mb-3 mx-2 border border-warning text-center" style="max-width: 18rem;">
              <div class="card-header mt-3 text-warning "><i class="fas fa-procedures h1"></i></div>
              <div class="card-body">
                <h5 class="card-title h3">Leave</h5>
                <p class="card-text h4">1 Atmost</p>
              </div>
            </div>

        </div>


        <!--Chart and Calendar-->
        <div class="row m-2">
          <!--Bar Chart-->
          <div class="container chart col-md-5 col-sm-12 bg-dark mt-1" style="padding-top: 20px">
            <canvas id="myChart1" class="border border-warning" style="width:100%;"></canvas>
            <!--Pie Chart-->
            <canvas id="myChart" class="border border-warning mt-4 pb-1" style="width:100%;"></canvas>
          </div>


          <!--Calendar-->
          <div class="col-md-7 col-sm-12 bg-dark mt-4">
            <div class="container card bg-dark text-light border border-warning pb-2">
              <h3 class="card-header" id="monthAndYear"></h3>
              <table
                class="table table-bordered table-dark table-responsive-sm"
                id="calendar"
              >
                <thead>
                  <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                  </tr>
                </thead>

                <tbody id="calendar-body"></tbody>
              </table>

              <div class="form-inline d-flex justify-content-center">
                <button
                  class="btn btn-outline-warning col-sm-5"
                  id="previous"
                  onclick="previous()"
                >
                  Previous
                </button>
                <button
                  class="btn btn-outline-warning col-sm-5"
                  id="next"
                  onclick="next()"
                >
                  Next
                </button>
              </div>
              <br />
              <form class="form-inline">
                <label class="lead mr-2 ml-2" for="month">Jump To: </label>
                <select
                  class="form-control col-sm-2"
                  name="month"
                  id="month"
                  onchange="jump()"
                >
                  <option value="0">Jan</option>
                  <option value="1">Feb</option>
                  <option value="2">Mar</option>
                  <option value="3">Apr</option>
                  <option value="4">May</option>
                  <option value="5">Jun</option>
                  <option value="6">Jul</option>
                  <option value="7">Aug</option>
                  <option value="8">Sep</option>
                  <option value="9">Oct</option>
                  <option value="10">Nov</option>
                  <option value="11">Dec</option>
                </select>

                <label for="year"></label
                ><select
                  class="form-control col-sm-2"
                  name="year"
                  id="year"
                  onchange="jump()"
                >
                  <option value="1990">1990</option>
                  <option value="1991">1991</option>
                  <option value="1992">1992</option>
                  <option value="1993">1993</option>
                  <option value="1994">1994</option>
                  <option value="1995">1995</option>
                  <option value="1996">1996</option>
                  <option value="1997">1997</option>
                  <option value="1998">1998</option>
                  <option value="1999">1999</option>
                  <option value="2000">2000</option>
                  <option value="2001">2001</option>
                  <option value="2002">2002</option>
                  <option value="2003">2003</option>
                  <option value="2004">2004</option>
                  <option value="2005">2005</option>
                  <option value="2006">2006</option>
                  <option value="2007">2007</option>
                  <option value="2008">2008</option>
                  <option value="2009">2009</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                </select>
              </form>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
    </div>
  </body>
 
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
  <script src="teacher-dashboard.js"></script>
</html>
