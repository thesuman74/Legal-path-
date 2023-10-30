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


$selectquery = "SELECT * FROM about WHERE id='1'";



$showdata = mysqli_query($con, $selectquery);
$re = mysqli_fetch_array($showdata);




?>



<main id="main">
    <!-- ======= About Section ======= -->

    <h1 class="text-center text-capitalize pt-1 display-3 font-weight-normal">Edit about</h1>
    <hr class="w-75 mx-auto pt-1">


    <div class="bg-white container mt-5 " style="width:auto; height: 500px;;">


        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column m-auto justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h2><?php echo $re['about_heading']; ?></h2><br>
                            <h5 style=" font-weight: normal;">
                                <?php echo $re['about_discription']; ?>
                            </h5>
                            <div class="text-center text-lg-start">
                                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">

                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <!-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> -->
                        <img src="update/images/<?php echo $re['about_photo'];  ?>" class="img-fluid rounded float-start m-4" style="width: 400px; height:330px; object-fit:cover ; object-position: 15% 50%; ; " alt="">
                    </div>
                    <a href="update/update_about.php" class="btn btn-primary mr-5" role="button">Update</a>


                </div>
            </div>

    </div>

    </section><!-- End About Section -->








    </form>
    </div>
    </div>
    </section>






    </form>
    </div>
    </div>
    </section>


    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>