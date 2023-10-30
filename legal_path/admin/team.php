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
include('dbcon.php');
?>




<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

          <div class="form-group">
            <label> Username </label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Admin Profile
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
          ADD Admin Profile
        </button>
      </h6>
    </div>



    <section>

      <div class="card-body">

        <div class="table-responsive">

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Full name</th>
                <th scope="col" class="text-center">POST</th>
                <th scope="col" class="text-center " style="width:500px; height:auto ;">DISCRIPTION</th>
                <th scope="col" class="text-center">Photo</th>
                <th scope="col" class="text-center">Edit</th>
                <th scope="col" class="text-center">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'dbcon.php';

              $selectquery = "select * from team";

              $query = mysqli_query($con, $selectquery);
              while ($result = mysqli_fetch_array($query)) {
              ?>

                <tr>
                  <td><?php echo $result['id']; ?></td>
                  <td><?php echo $result['team_heading']; ?></td>
                  <td><?php echo $result['team_post']; ?></td>
                  <td><?php echo $result['team_discription']; ?></td>
                  <td class="d-flex justify-content-center"><img src="update/images/<?php echo $result['team_photo']; ?>" width="100px" height="100px" class="img-fluid "></td>
                  <td>
                    <form action="" method="POST">
                      <a href="update/update_team.php?id=<?php echo $result['id']; ?>" class="btn btn-success">Edit</a>


                      <!-- <button type="submit" class="btn btn-success">Edit</button> -->

                  <td><button type="submit" class="btn btn-danger" name="delete">DELETE</button></td>


                  </form>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- <div class="card-body">

      <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th> ID </th>
              <th> Username </th>
              <th>post </th>
              <th>Discription</th>
              <th scope="col">Photo</th>
              <th>EDIT </th>
              <th>DELETE </th>

            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM team";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while ($row = mysqli_fetch_array($result)) {
            ?>

                <tr>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row['team_heading']; ?></td>
                  <td><?php echo $row['team_post']; ?></td>
                  <td><?php echo $row['team_discription']; ?></td>
                  <td><img src="img/1.jpg" width="160px" height="100px"></td>
                  <td> <button type="submit" class="btn btn-success">Edit</button></td>
                  <td> <button type="submit" class="btn btn-danger">Delete</button></td>
                  <td>
                    <form action="edit.php?id=<?php echo $result['id']; ?>" method="POST">
                      <button type="submit" class="btn btn-success">Edit</button>
                      <button type="submit" class="btn btn-danger" name="delete">DELETE</button>
                  </td>


                  </form>
                </tr>
              <?php

              }
            } else {
              echo "0 results";
            }
            while ($row = mysqli_fetch_assoc($result)) {
              ?>

              <tr>
                <td><?php echo $row["team_heading"]; ?></td>
                <td><?php echo $result['fullname']; ?></td>
                <td><?php echo $result['email']; ?></td>
                <td><?php echo $result['phone']; ?></td>
                <td><img src="<?php echo $result['photo'];  ?>" width="100px" height="60px"></td>
                <td>
                  <form action="edit.php?id=<?php echo $result['id']; ?>" method="POST">

                    <button type="submit" class="btn btn-success">Edit</button>

                <td><button type="submit" class="btn btn-danger" name="delete">DELETE</button></td>


                </form>
              </tr>
            <?php
            }
            ?>


          </tbody>
        </table>

      </div>
    </div>
  </div>

</div>
/.container-fluid -->

    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>