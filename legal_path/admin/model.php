

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php
include('includes/header.php'); 
include('includes/navbar.php'); 



?>

	<section class="col-auto">
    <div class="container mb-5" id="contact us">
      <h1 class="text-center text-capitalize pt-5 display-3 font-weight-normal" >About</h1>
      <hr class="w-50 mx-auto pt-5">

      <div class="w-75 mx-auto">


       <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data" >
        <div class="form-group ">
         
            <label for="heading">Heading:</label>
            <textarea class="form-control mh-100"><?php echo $re['about_heading'];?>  </textarea>
          </div>
         

          <div class="form-group">
            <label for="discription">Discription:</label>
           <textarea class="form-control"  rows="mx-auto"><?php echo $re['about_discription'];?>
           </textarea>

              </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">About photo :</label>
           <textarea class="form-control"></textarea>
             
            </div>

            <div class="form-group ">
              <button type="button" class="btn btn-success mr-5">Update</button>

              <button type="button" class="btn btn-danger">Cancel</button>

            </div>

            
         
         
      
        </form>
      </div>
    </div>
  </section>


  <?php

include('includes/scripts.php');
include('includes/links/links.php');
include('includes/footer.php');

  ?>
	
</body>
</html>