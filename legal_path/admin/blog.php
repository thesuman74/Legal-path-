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
            <form action="update/add_blog.php" method="POST" enctype="multipart/form-data">

                <div class="modal-body w-100">

                    <div class="form-group">
                        <label> Heading </label>
                        <input type="text" name="heading" class="form-control" placeholder="Enter Blog heading" required>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label>Discription</label>
                        <textarea class="form-control" name="blog_discription" placeholder="Max 1000 characters" rows="5" cols="40" require></textarea>

                    </div>

                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="photo" class="form-control" placeholder="Photo" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit_model" class="btn btn-success">Submit</button>
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
                                <th scope="col" class="text-center">HEADING</th>
                                <th scope="col" class="text-center">NAME</th>
                                <th scope="col" class="text-center " style="width:500px; height:auto ;">DISCRIPTION</th>
                                <th scope="col" class="text-center">Photo</th>
                                <th scope="col" class="text-center">DATE</th>
                                <th scope="col" class="text-center">Edit</th>
                                <th scope="col" class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'dbcon.php';

                            $selectquery = "select * from blog";

                            $query = mysqli_query($con, $selectquery);
                            while ($result = mysqli_fetch_array($query)) {
                            ?>

                                <tr>
                                    <td><?php echo $result['id']; ?></td>
                                    <td><?php echo $result['blog_heading']; ?></td>
                                    <td><?php echo $result['blog_by']; ?></td>
                                    <td><?php echo $result['blog_discription']; ?></td>
                                    <td class="d-flex justify-content-center"><img src="update/<?php echo $result['blog_photo']; ?>" width="80px" height="80px" class="img-fluid "></td>
                                    <td class="text-center"><?php echo $result['blog_time']; ?></td>

                                    <td>
                                        <form action="update/add_blog.php?id=<?php echo $result['id']; ?>" method="POST">
                                            <a href="update/update_blog.php?id=<?php echo $result['id']; ?>" class="btn btn-success">Edit</a>



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


    </div>


</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>