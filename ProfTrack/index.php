<?php session_start();
    if(isset($_SESSION['Username'])){
        header("Location: ./user");
    }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ProfTrack</title>

   <?php include 'header.php' ?>

</head>
<body>
   
<div class="registration vh-100 d-flex flex-column justify-content-center align-items-center">

   <div class="text-center fw-bold text-white">
      <h1 class="display-3" style="font-weight: 900;">ProfTrack</h1>
      <p><b>A Real-Time Web-Based Faculty Presence Monitoring System</b></p>
   </div>
   <form id="signinID" action="" method="post" class="registrationClss rounded-5 bg-white col-8 col-sm-6 col-md-5 col-lg-4 col-xl-3 row row-gap-2 justify-content-center py-5 h-50 " >
      <div class="row mt-2 row-gap-3 flex-column justify-content-center align-items-center  p-5">

         <div class="col-12 ">
            <div class="form-floating col-12 d-flex flex-column row-gap-2">
              <a href="login.php" class="btn btn-bg rounded-5 w-100 py-2">LOGIN</a>
              <a href="signup.php" class="btn btn-bg rounded-5 w-100 py-2">SIGN UP</a>

            </div>
         </div>

      </div>
      
   </form>

</div>
<?php include 'footer.php'; ?>


</body>
</html>