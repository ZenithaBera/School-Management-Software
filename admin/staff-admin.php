<?php
	include '../php/db_staff.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'include_admin/top_links.php' ?>
    <title>Staff Records | Sschool Management Software</title>
  </head>
  <script>
	function Delete(){
		var x = confirm("Do you want to delete");
		if(x)
			return true;
		else
			return false;
	}
</script>
  <body class="bg-dark">
    <div class="container-fluid bg-dark text-light overflow-hidden">
    
        <!--Sidepanel-->
      <div class="row">
        <div class="col-md-2 col-sm-12 sidepanel m-0 p-0 border border-warning">
            <nav style="height: 100vh;">
              <h3 class="text-center text-light fw-bold">Staff Admin</h3>
              <a href="staff-admin.php" class="active text-decoration-none bg-warning text-dark fw-bold"><i class="fas fa-clipboard"></i>&nbsp;&nbsp;&nbsp;Records</a>
                <a href="staff-dummy.php" class="text-decoration-none fw-bold"><i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Profile Details</a>
            </nav>
        </div>

        <div class="col-md-10 col-sm-12">
          <div class="p-4 topbar">
            <p class="h3 fw-bold">Records</p>
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
              <h3 class="navbar-brand justify-content-start fw-bold">Records</h3>
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
                  <a class="nav-link fw-bold active bg-warning text-dark" href="staff-admin.php">Records</a>
                    <a class="nav-link fw-bold" href="staff-dummy.php">Profile Details</a>
                  </nav>
                </div>
              </nav>
            </div>
          </div>
          
          <!--Table-->
          <div class="col-md-12 m-2 p-2 col-sm-12 table-responsive">
            <table class="table table-dark table-hover">
            <thead>
              <th>Id</th>
              <th>Name</th>
              <th>Mobile Number</th>
              <th>Alternative Number</th>
              <th>Date of Birth (DOB)</th>
              <th>Gender</th>
              <th>Religion</th>
              <th>Category</th>
              <th>Position</th>
              <th>Marital Status</th>
              <th>Experienced</th>
              <th>Aadhar Number</th>
              <th>Email Id</th>
              <th>Date Of Joining</th>
              <th>CV</th>
              <th>Photo</th>
              <th>Address</th>
              <th>Post Office</th>
              <th>Police Station</th>
              <th>District</th>
              <th>State</th>
              <th>Pin Code</th>
              <th>Action</th>
          </thead>
          <tbody>
          <?php 
					$sql = "select * from staff";
					$table = mysqli_query($conn,$sql);
          
					$i = 1;
					if(mysqli_num_rows($table) > 0){
						while($row = mysqli_fetch_assoc($table)){
					?>
          <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['mobnum']; ?></td>
              <td><?php echo $row['altnum']; ?></td>
              <td><?php echo $row['dob']; ?></td>
              <td><?php echo $row['gender']; ?></td>
              <td><?php echo $row['religion']; ?></td>
              <td><?php echo $row['category']; ?></td>
              <td><?php echo $row['position']; ?></td>
              <td><?php echo $row['mstatus']; ?></td>
              <td><?php echo $row['exp']; ?></td>
              <td><?php echo $row['aadhar']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['doj']; ?></td>
              <td><?php echo $row['cv']; ?></td>
              <td><?php echo $row['photo']; ?></td>
              <td><?php echo $row['address']; ?></td>
              <td><?php echo $row['post']; ?></td>
              <td><?php echo $row['police']; ?></td>
              <td><?php echo $row['district']; ?></td>
              <td><?php echo $row['state']; ?></td>
              <td><?php echo $row['pin']; ?></td>
            
        
              <td>
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <form action="staff-profile.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button class="fa fa-eye btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="View Profile" name="view"></button>
                      </form>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <form action="staff-update.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button class="fas fa-pen-nib btn-sm btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Profile" name="edit"></button>
                      </form>
                  </div>		
                  <div class="col-md-6 col-sm-12">
                    <form action="../php/staffdb_del.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button class="fa fa-trash btn-sm btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Profile" name="delete" onclick="return Delete()"></button>
                      </form>
                  </div>	
                </div>
                </td>
          </tr> 
          <?php 
					$i++;

						}
					}else{
						echo '<tr>
							<td>no record found</td>
						</tr>';
					}
				?>
          </tbody>
          
            </table>
          </div>
      
        </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
