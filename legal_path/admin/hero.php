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
include('includes/links/links.php');
include('dbcon.php');


$selectquery = "SELECT * FROM hero WHERE id='1'";



$showdata = mysqli_query($con, $selectquery);
$re = mysqli_fetch_array($showdata);




?>

<main id="main">
    <!-- ======= hero Section ======= -->

    <h1 class="text-center text-capitalize pt-1 display-3 font-weight-normal">Edit hero</h1>
    <hr class="w-75 mx-auto pt-1">


    <div class="bg-white container mt-5 " style="width:auto; height: 500px;">


        <section id="hero" class="hero">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column m-auto justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content text-wrap " style="width: 400px; ; height: 300px ;  word-wrap : break-word; overflow:auto;">
                            <h2 class="heading font-weight-bold   rounded-3 "><?php echo $re['hero_heading']; ?></h2><br>
                            <div style=" font-weight: normal;">
                                <?php echo $re['hero_discription']; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <!-- <img src="assets/img/hero.jpg" class="img-fluid" alt=""> -->
                        <img src="update/images/<?php echo $re['hero_photo'];  ?>" class="img-fluid rounded float-start m-4" style="width: 400px; height:330px; object-fit:cover ; object-position: 15% 50%;  " alt="">
                    </div>
                    <a href="update/update_hero.php" class="btn btn-primary ml-3" role="button" name="update_hero">Update</a>


                </div>
            </div>

    </div>

    </section><!-- End hero Section -->








    </form>
    </div>
    </div>
    </section>


    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>