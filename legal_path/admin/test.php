<?php

include('dbcon.php');
include('select.php');
include('includes/links/links.php');


$blog_select = "select * from blog order by id desc limit 4";
$blog_query = mysqli_query($con, $blog_select);
$blog_result = mysqli_fetch_array($blog_query);
?>

<div class="row">
    <?php

    while ($blog_result = mysqli_fetch_array($blog_query)) {

    ?>

        <div class="col-lg-4">
            <div class="post-box">
                <div class="post-img"> <img src="update/<?php echo $blog_result['blog_photo'] ?>" class=" img-fluid" alt="" style="width: 400px; height: 300px; object-fit:cover ; object-position: 15% 50%; ; ">
                </div>
                <span class="post-date">Fri,<time datetime="<?php echo $blog_result['blog_time'] ?>"><?php echo $blog_result['blog_time'] ?></time></span>
                <h3 class="post-title"><?php echo $blog_result['blog_heading'] ?></h3>
                <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>


    <?php



    }

    ?>



</div>