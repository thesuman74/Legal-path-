<?php

include('dbcon.php');

// About_section
?>

<div id="about-section">

    <?php


    $about_select = "SELECT * FROM about WHERE id='1'";
    $about_query = mysqli_query($con, $about_select);
    $about_result = mysqli_fetch_array($about_query);



    // echo "heading from about table" . $about_result['about_heading'];



    $hero_select = "SELECT * FROM hero WHERE id='1'";
    $hero_query = mysqli_query($con, $hero_select);
    $hero_result = mysqli_fetch_array($hero_query);

    // echo "heading from hero table" . $hero_result['hero_heading'];


    ?>



</div>