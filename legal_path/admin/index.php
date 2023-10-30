<?php
session_start();

if (!isset($_SESSION['fullname'])) {
  echo "Please login ";
  header('location:login.php');
}
?>

<?php
include('includes/header.php');
include('includes/navbar.php');
include('select.php');
?>



<!-- Begin Page Content -->
<div class="container-fluid position sticky">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <h1 class="h3 mb-0 text-white-800">Hero Section</h1> -->
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

                <h4>Total Admin: *</h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <h5 class="mb-2">Card with Image Overlay</h5>
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="update/images/<?php echo $hero_result['hero_photo'] ?>" alt="Dist Photo 1" style="width: 500px; height: 380px; object-fit:cover ; object-position: 15% 50%;">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h5 class="card-title text-primary text-white">Hero section </h5>
              <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
              <a href="update/update_hero.php" class="text-white ">Update</a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="update/images/<?php echo $about_result['about_photo'] ?>" alt="Dist Photo 1" style="width: 500px; height: 380px; object-fit:cover ; object-position: 15% 50%;">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h5 class="card-title  text-white">About section </h5>
              <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
              <a href="update/update_about.php" class="text-white ">Update</a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <?php

            $team_select = "SELECT * FROM team where id='2'";
            $team_query = mysqli_query($con, $team_select);
            $team_result = mysqli_fetch_array($team_query);
            ?>
            <img class="card-img-top" src="update/images/<?php echo $team_result['team_photo'] ?>" alt="Dist Photo 1" style="width: 500px; height: 380px; object-fit:cover ; object-position: 15% 50%;">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <h5 class="card-title  text-white">Team section </h5>
              <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
              <a href="team.php" class="text-white ">Update</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.container-fluid -->





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>